<?php
/**
 * Security Headers - Park Community School
 * Include this at the very top of header.php (before any HTML output)
 */

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

// Force HTTPS (uncomment if site always uses HTTPS)
// header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

// Content Security Policy - controls what resources can load
// Start with report-only to test, then enforce
// Allowing common CDNs used by the site
$csp = "default-src 'self'; ";
$csp .= "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://code.jquery.com https://cdnjs.cloudflare.com https://www.google.com https://www.gstatic.com https://registry.blockmarktech.com; ";
$csp .= "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.googleapis.com https://c.s-microsoft.com; ";
$csp .= "font-src 'self' https://cdnjs.cloudflare.com https://fonts.gstatic.com https://c.s-microsoft.com data:; ";
$csp .= "img-src 'self' data: https:; ";
$csp .= "frame-src 'self' https://www.google.com https://registry.blockmarktech.com https://player.vimeo.com https://www.youtube.com; ";
$csp .= "connect-src 'self' https:; ";
$csp .= "base-uri 'self'; ";
$csp .= "form-action 'self';";

header("Content-Security-Policy: $csp");

// Secure session settings (if sessions are used)
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    ini_set('session.use_strict_mode', 1);
    ini_set('session.cookie_samesite', 'Lax');
}
