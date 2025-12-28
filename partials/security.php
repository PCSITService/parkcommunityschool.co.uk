<?php
/**
 * Security & Rate Limiting - Park Community School
 * Include this at the very top of header.php (before any HTML output)
 */

// ========================================
// SESSION HANDLING
// ========================================
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    ini_set('session.use_strict_mode', 1);
    ini_set('session.cookie_samesite', 'Lax');
    session_start();
}

// ========================================
// SECURITY HEADERS
// ========================================

// Prevent clickjacking - stops site being embedded in iframes on other domains
header('X-Frame-Options: SAMEORIGIN');

// Prevent MIME type sniffing - forces browser to use declared content type
header('X-Content-Type-Options: nosniff');

// XSS Protection - enables browser's built-in XSS filter
header('X-XSS-Protection: 1; mode=block');

// Referrer Policy - controls how much referrer info is sent
header('Referrer-Policy: strict-origin-when-cross-origin');

// Permissions Policy - restrict browser features
header("Permissions-Policy: geolocation=(), microphone=(), camera=()");

// Force HTTPS
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

// Content Security Policy - controls what resources can load
$csp = "default-src 'self'; ";
$csp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://code.jquery.com https://cdnjs.cloudflare.com https://www.google.com https://www.gstatic.com https://www.googletagmanager.com https://www.google-analytics.com https://registry.blockmarktech.com; ";
$csp .= "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com; ";
$csp .= "font-src 'self' https://cdnjs.cloudflare.com https://fonts.gstatic.com data:; ";
$csp .= "img-src 'self' data: https:; ";
$csp .= "frame-src 'self' https://www.google.com https://registry.blockmarktech.com https://player.vimeo.com https://www.youtube.com; ";
$csp .= "connect-src 'self' https://www.google-analytics.com https://www.googletagmanager.com https://region1.google-analytics.com https:; ";
$csp .= "base-uri 'self'; ";
$csp .= "form-action 'self';";

header("Content-Security-Policy: $csp");

// ========================================
// RATE LIMITER CLASS
// ========================================
class RateLimiter {
    private $max_requests = 30;      // Maximum requests allowed in time period
    private $time_period = 300;      // Time period in seconds (5 minutes)
    private $db_file;                // Storage file path

    public function __construct() {
        // Store rate limit data in a writable directory
        $this->db_file = sys_get_temp_dir() . '/rate_limit_db.json';
    }

    /**
     * Check if visitor has exceeded rate limit
     * @return boolean true if rate limit exceeded, false otherwise
     */
    public function isLimitExceeded() {
        $ip = $this->getClientIP();
        
        // If already verified with CAPTCHA, don't check again
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
            // Get the first IP if multiple are present
            $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
        }
        return trim($ip);
    }
    
    /**
     * Load data from storage
     * @return array Rate limiting data
     */
    private function loadData() {
        if (file_exists($this->db_file)) {
            $content = @file_get_contents($this->db_file);
            return $content ? (json_decode($content, true) ?: []) : [];
        }
        return [];
    }
    
    /**
     * Save data to storage
     * @param array $data Rate limiting data
     */
    private function saveData($data) {
        @file_put_contents($this->db_file, json_encode($data), LOCK_EX);
    }
}

// ========================================
// CAPTCHA VERIFICATION HANDLER
// ========================================
if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha_secret = "6LdHRD8rAAAAAKsweGomf2AQwaVKV_FUQmQK3HtQ";
    $response = @file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . 
        "&response=" . $_POST['g-recaptcha-response'] . 
        "&remoteip=" . ($_SERVER['REMOTE_ADDR'] ?? '')
    );
    
    if ($response) {
        $responseData = json_decode($response);
        
        if ($responseData && $responseData->success) {
            $limiter = new RateLimiter();
            $limiter->resetLimitAfterCaptcha();
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'CAPTCHA verification failed']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Could not verify CAPTCHA']);
    }
    exit;
}

// ========================================
// INITIALIZE RATE LIMITER
// ========================================
$rateLimiter = new RateLimiter();
$showCaptcha = $rateLimiter->isLimitExceeded();