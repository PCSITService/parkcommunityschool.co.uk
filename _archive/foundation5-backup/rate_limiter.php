<?php
// rate_limiter.php - Place this in your includes folder

session_start();

class RateLimiter {
    private $max_requests = 30;      // Maximum requests allowed in time period
    private $time_period = 300;      // Time period in seconds (5 minutes)
    private $redis = null;           // Redis connection (optional, for production)
    private $db_file = 'rate_limit_db.json'; // Simple file-based storage

    public function __construct() {
        // For production, use Redis or Memcached instead of file-based storage
        // $this->redis = new Redis();
        // $this->redis->connect('127.0.0.1', 6379);
    }

    /**
     * Check if visitor has exceeded rate limit
     * @return boolean true if rate limit exceeded, false otherwise
     */
    public function isLimitExceeded() {
        $ip = $this->getClientIP();
        
        // If already in session and marked as verified, don't check again
        if (isset($_SESSION['captcha_verified']) && $_SESSION['captcha_verified'] === true) {
            return false;
        }
        
        $data = $this->loadData();
        $currentTime = time();
        
        // Clean up old entries
        foreach ($data as $visitor_ip => $info) {
            if ($currentTime - $info['first_request'] > $this->time_period) {
                unset($data[$visitor_ip]);
            }
        }
        
        // Check if IP exists and create/update entry
        if (!isset($data[$ip])) {
            $data[$ip] = [
                'count' => 1,
                'first_request' => $currentTime
            ];
        } else {
            // Increment the request count
            $data[$ip]['count']++;
            
            // Check if limit exceeded
            if ($data[$ip]['count'] > $this->max_requests) {
                $this->saveData($data);
                return true;
            }
        }
        
        $this->saveData($data);
        return false;
    }
    
    /**
     * Reset rate limit counter after successful CAPTCHA verification
     */
    public function resetLimitAfterCaptcha() {
        $_SESSION['captcha_verified'] = true;
        $ip = $this->getClientIP();
        $data = $this->loadData();
        
        if (isset($data[$ip])) {
            $data[$ip]['count'] = 0;
            $this->saveData($data);
        }
    }
    
    /**
     * Get client IP address
     * @return string IP address
     */
    private function getClientIP() {
        $ip = '';
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    
    /**
     * Load data from storage
     * @return array Rate limiting data
     */
    private function loadData() {
        if ($this->redis !== null) {
            $data = $this->redis->get('rate_limit_data');
            return $data ? json_decode($data, true) : [];
        }
        
        // File-based storage (for development)
        if (file_exists($this->db_file)) {
            $content = file_get_contents($this->db_file);
            return json_decode($content, true) ?: [];
        }
        return [];
    }
    
    /**
     * Save data to storage
     * @param array $data Rate limiting data
     */
    private function saveData($data) {
        if ($this->redis !== null) {
            $this->redis->set('rate_limit_data', json_encode($data));
            return;
        }
        
        // File-based storage (for development)
        file_put_contents($this->db_file, json_encode($data));
    }
}

// Check if this is an AJAX request to verify the CAPTCHA
if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha_secret = "6LdHRD8rAAAAAKsweGomf2AQwaVKV_FUQmQK3HtQ";
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . 
        "&response=" . $_POST['g-recaptcha-response'] . 
        "&remoteip=" . $_SERVER['REMOTE_ADDR']
    );
    
    $responseData = json_decode($response);
    
    if ($responseData->success) {
        $limiter = new RateLimiter();
        $limiter->resetLimitAfterCaptcha();
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'CAPTCHA verification failed']);
    }
    exit;
}
?>