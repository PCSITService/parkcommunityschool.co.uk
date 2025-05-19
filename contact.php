<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <title>Park Community School | Contact Information</title>
        <?php include("includes/head.html") ?>
        <!-- Add Aptos Body font and contact page styles -->
        <style>
            @font-face {
                font-family: 'Aptos Body';
                src: url('https://c.s-microsoft.com/static/fonts/aptos/AptosBody-Regular.woff2') format('woff2');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Aptos Body';
                src: url('https://c.s-microsoft.com/static/fonts/aptos/AptosBody-Bold.woff2') format('woff2');
                font-weight: bold;
                font-style: normal;
                font-display: swap;
            }

            /* Apply Aptos Body font to all elements */
            body {
                font-family: 'Aptos Body', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-rendering: optimizeLegibility;
            }

            /* Contact section styling */
            .contact-section {
                padding: 60px 0;
            }

            .contact-intro {
                max-width: 800px;
                margin: 0 auto 40px;
                text-align: center;
                font-size: 1.1rem;
                line-height: 1.6;
            }

            /* Force equal height with fixed min-height */
            .contact-card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
                padding: 30px;
                transition: transform 0.3s, box-shadow 0.3s;
                border-top: 4px solid #A3CD42;
                min-height: 230px; /* Set a specific minimum height */
                height: 100%;
            }

            .contact-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            }

            .contact-card h4 {
                color: #333;
                font-weight: 600;
                margin-bottom: 20px;
                font-size: 1.4rem;
                position: relative;
                padding-bottom: 12px;
            }

            .contact-card h4::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 40px;
                height: 3px;
                background-color: #A3CD42;
            }

            .contact-card ul {
                margin-left: 0;
            }

            .contact-card ul li {
                margin-bottom: 10px;
                color: #555;
            }

            .contact-card .subheader {
                color: #777;
                font-size: 0.9rem;
                font-style: italic;
                margin-top: 5px;
            }

            .contact-card hr {
                border-color: #eee;
                margin: 15px 0;
            }

            .contact-card a {
                color: #156A9C;
                font-weight: 500;
                transition: color 0.2s;
            }

            .contact-card a:hover {
                color: #A3CD42;
                text-decoration: none;
            }

            /* Map container */
            .map-container {
                margin-top: 50px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
                height: 450px;
            }

            .map-container iframe {
                width: 100%;
                height: 100%;
                border: none;
                display: block;
            }

            /* Responsive adjustments */
            @media (max-width: 639px) {
                .contact-card {
                    margin-bottom: 20px;
                    min-height: auto; /* Remove fixed height on mobile */
                }
                
                .map-container {
                    height: 300px;
                }
            }
        </style>
    </head>
<body class="page-school">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- CONTENT -->
<section class="contact-section">
    <div class="row">
        <div class="large-12 columns">
            <p class="contact-intro">Have a question or require assistance? Please feel free to contact us via the methods below; we'd love to hear from you and will make every effort to respond quickly and efficiently.</p>
        </div>
    </div>
    
    <!-- Remove data-equalizer attributes since we're using CSS for equal heights -->
    <div class="row">
        <div class="small-12 medium-6 columns">
            <div class="contact-card">
                <h4>Address</h4>
                <ul class="no-bullet">
                    <li>Park Community School</li>
                    <li>Middle Park Way</li>
                    <li>Havant</li>
                    <li>PO9 4BU</li>
                </ul>
            </div>
        </div>

        <div class="small-12 medium-6 columns">
            <div class="contact-card">
                <h4>Telecoms</h4>
                <ul class="no-bullet">
                    <li>Reception</li>
                    <li><strong>Tel:</strong> 02392 489800</li>
                    <li><strong>Fax:</strong> 02392 481012</li>
                    <hr>
                    <li>Community</li>
                    <li><strong>Tel:</strong> 02392 489811</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <div class="map-container">
                <!-- Google Maps embed with the exact specified link -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.0068087258668!2d-1.0014129935647632!3d50.86989900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48744493c92c85a5%3A0x1e0eedaa1c8e9b9a!2sPark%20Community%20School!5e1!3m2!1sen!2sus!4v1714521650972!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map of Park Community School"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.html'); ?>
  
<!-- Cookie Consent Banner -->
<div id="cookie-banner" class="cookie-banner" style="display: none;">
    <div class="cookie-content">
        <p>Park Community School uses cookies to enhance your browsing experience. To find out more about the cookies we use, see our <a href="/includes/cookie-policy.php">Cookie Policy</a>.</p>
        <div class="cookie-buttons">
            <button id="accept-cookies" class="cookie-btn accept">Accept All</button>
            <button id="reject-cookies" class="cookie-btn reject">Reject Non-Essential</button>
        </div>
    </div>
</div>
  
<!-- Scripts -->
<script src="js/vendor/modernizr.min.js" defer></script>
<script src="js/vendor/libraries.min.js" defer></script>
<script src="js/app.min.js" defer></script>
  
<!-- Add a script to ensure equal heights -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Manual equal height function for contact cards
        function equalizeContactCards() {
            if (window.innerWidth >= 640) { // Only on medium screens and up
                const contactCards = document.querySelectorAll('.contact-card');
                let maxHeight = 0;
                
                // First reset heights
                contactCards.forEach(card => {
                    card.style.height = 'auto';
                });
                
                // Find max height
                contactCards.forEach(card => {
                    const height = card.offsetHeight;
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });
                
                // Apply max height to all cards
                contactCards.forEach(card => {
                    card.style.height = maxHeight + 'px';
                });
            } else {
                // Reset on mobile
                const contactCards = document.querySelectorAll('.contact-card');
                contactCards.forEach(card => {
                    card.style.height = 'auto';
                });
            }
        }
        
        // Run on load and resize
        equalizeContactCards();
        window.addEventListener('resize', equalizeContactCards);
        
        // Fade in elements on scroll
        const fadeElements = document.querySelectorAll('.fade-in');
        
        function checkFade() {
            fadeElements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight * 0.9) {
                    element.classList.add('active');
                }
            });
        }
        
        // Initial check
        checkFade();
        
        // Check on scroll
        window.addEventListener('scroll', checkFade);
        
        // Cookie consent logic
        if (!localStorage.getItem('cookieConsent')) {
            document.getElementById('cookie-banner').style.display = 'block';
        }
        
        document.getElementById('accept-cookies').addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'accepted');
            document.getElementById('cookie-banner').style.display = 'none';
        });
        
        document.getElementById('reject-cookies').addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'rejected');
            document.getElementById('cookie-banner').style.display = 'none';
            window['ga-disable-UA-XXXXXXXX-X'] = true;
        });
        
        document.getElementById('cookie-preferences-button').addEventListener('click', function() {
            document.getElementById('cookie-banner').style.display = 'block';
        });
    });
</script>
</body>
</html>