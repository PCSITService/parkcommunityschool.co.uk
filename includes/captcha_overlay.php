<?php
// captcha_overlay.php - Place this in your includes folder
// This will be included when the rate limit is exceeded
?>
<div id="captcha-overlay" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); z-index: 9999; display: flex; justify-content: center; align-items: center;">
    <div style="background-color: white; padding: 30px; border-radius: 10px; max-width: 500px; text-align: center;">
        <h2>We've noticed unusual traffic from your network</h2>
        <p>To continue browsing our website, please complete the verification below.</p>
        
        <div class="g-recaptcha" data-sitekey="6LdHRD8rAAAAAKht7DSZPp9p8I8LJK9IhkDN1OTn" data-callback="onCaptchaSuccess"></div>
        
        <p style="margin-top: 15px; color: #666; font-size: 14px;">This helps us prevent automated access and protect our services.</p>
    </div>
</div>

<script>
function onCaptchaSuccess(token) {
    // Send the token to the server for verification
    fetch('<?php echo $_SERVER['PHP_SELF']; ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'g-recaptcha-response=' + token
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Hide the overlay if verification was successful
            document.getElementById('captcha-overlay').style.display = 'none';
        } else {
            alert('Verification failed. Please try again.');
            grecaptcha.reset();
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>