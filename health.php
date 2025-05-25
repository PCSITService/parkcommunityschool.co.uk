<?php
// Simple health check
echo "OK - " . date('Y-m-d H:i:s');

// Optional: Add more checks
if (function_exists('apache_get_version')) {
    echo " - Apache: " . apache_get_version();
}

echo " - PHP: " . phpversion();
?>