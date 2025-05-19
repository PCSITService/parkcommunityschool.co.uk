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

            .contact-card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
                padding: 30px;
                height: 100%;
                transition: transform 0.3s, box-shadow 0.3s;
                border-top: 4px solid #A3CD42;
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
                }
                
                .map-container {
                    height: 300px;
                }
            }
            
            /* Footer and Cookie Variables */
            :root {
              --primary-color: #a3cd42;
              --primary-dark: #8da93f;
              --secondary-color: #333333;
              --white: #ffffff;
            }
            
            /* Footer Styles - Enhanced */
            footer {
              background-color: var(--secondary-color);
              color: var(--white);
              padding: 60px 0 30px;
            }
            
            footer a {
              color: var(--white);
              text-decoration: none;
              transition: color 0.3s ease;
            }
            
            footer a:hover {
              color: var(--primary-color);
              text-decoration: none;
            }
            
            .footer-container {
              max-width: 1200px;
              margin: 0 auto;
              padding: 0 20px;
            }
            
            /* Main footer sections with centered logos */
            .footer-main {
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              margin-bottom: 30px;
              text-align: center;
            }
            
            /* Main logos container */
            .main-logos-container {
              display: flex;
              justify-content: center;
              align-items: center;
              margin-bottom: 25px;
              flex-wrap: wrap;
              gap: 30px;
            }
            
            /* Logo and copyright section */
            .footer-identity {
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
            }
            
            .main-logo {
              max-height: 100px;
              width: auto;
              object-fit: contain;
              filter: brightness(1.1); /* Makes logos slightly brighter */
            }
            
            .footer-identity p {
              margin-top: 20px;
              margin-bottom: 5px;
            }
            
            /* Logo rows section */
            .footer-logos-section {
              width: 100%;
              margin-top: 40px;
              border-top: 1px solid rgba(255, 255, 255, 0.2);
              padding-top: 40px;
            }
            
            .footer-logos-title {
              text-align: center;
              font-size: 1.3rem;
              margin-bottom: 30px;
              font-weight: 500;
              color: var(--white);
            }
            
            /* Single row of logos with improved scrolling */
            .logo-row {
              display: flex;
              justify-content: space-between;
              align-items: center;
              flex-wrap: nowrap;
              width: 100%;
              margin-bottom: 30px;
              overflow-x: auto;
              padding-bottom: 15px;
              scrollbar-width: thin;
              scrollbar-color: rgba(255,255,255,0.3) transparent;
            }
            
            .logo-row::-webkit-scrollbar {
              height: 6px;
            }
            
            .logo-row::-webkit-scrollbar-track {
              background: transparent;
            }
            
            .logo-row::-webkit-scrollbar-thumb {
              background-color: rgba(255,255,255,0.3);
              border-radius: 6px;
            }
            
            /* Consistent logo sizing with hover effects */
            .logo-container {
              display: flex;
              flex-direction: column;
              align-items: center;
              padding: 0 15px;
              min-width: 132px;
              max-width: 132px;
              text-align: center;
              flex: 1;
            }
            
            .logo-container img {
              height: 132px;
              width: 132px;
              object-fit: contain;
              transition: all 0.3s ease;
              filter: brightness(1.1); /* Makes logos slightly brighter */
            }
            
            .logo-container:hover img {
              transform: scale(1.1);
              opacity: 0.9;
            }
            
            /* Links section with improved spacing */
            .footer-links {
              margin-top: 30px;
              text-align: center;
              padding: 10px 0;
              border-top: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .footer-links a {
              margin: 0 15px;
              position: relative;
              padding: 5px 0;
            }
            
            .footer-links a:after {
              content: '';
              position: absolute;
              width: 0;
              height: 2px;
              background-color: var(--primary-color);
              bottom: 0;
              left: 0;
              transition: width 0.3s ease;
            }
            
            .footer-links a:hover:after {
              width: 100%;
            }
            
            /* Copyright section with improved styling */
            .footer-copyright {
              text-align: center;
              font-size: 0.9rem;
              color: #aaa;
              margin-top: 20px;
            }
            
            /* Cookie preferences container */
            .cookie-preferences {
              text-align: center;
              margin-top: 20px;
            }
            
            /* Cookie Banner Styles - Improved */
            .cookie-banner {
              position: fixed;
              bottom: 0;
              left: 0;
              right: 0;
              background-color: var(--secondary-color);
              color: var(--white);
              padding: 15px;
              z-index: 1000;
              box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
            }
            
            .cookie-content {
              max-width: 1200px;
              margin: 0 auto;
              display: flex;
              flex-wrap: wrap;
              justify-content: space-between;
              align-items: center;
            }
            
            .cookie-content p {
              margin: 0 20px 10px 0;
              flex: 1 1 300px;
            }
            
            .cookie-buttons {
              display: flex;
              flex-wrap: wrap;
              align-items: center;
              gap: 10px;
            }
            
            .cookie-btn {
              padding: 10px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              font-weight: bold;
              transition: all 0.3s ease;
            }
            
            .cookie-btn.accept {
              background-color: var(--primary-color);
              color: var(--white);
            }
            
            .cookie-btn.accept:hover {
              background-color: var(--primary-dark);
            }
            
            .cookie-btn.reject {
              background-color: #555;
              color: var(--white);
            }
            
            .cookie-btn.reject:hover {
              background-color: #666;
            }
            
            .cookie-more {
              color: var(--white);
              text-decoration: underline;
              margin-left: 10px;
            }
            
            /* Cookie Preferences Button */
            .cookie-pref-btn {
              background: none;
              border: none;
              text-decoration: underline;
              color: #ccc;
              font-size: 0.8rem;
              cursor: pointer;
              padding: 0;
              margin-top: 10px;
              transition: color 0.3s ease;
            }
            
            .cookie-pref-btn:hover {
              color: var(--white);
            }
            
            /* Mobile responsive improvements for footer */
            @media (max-width: 768px) {
              .main-logo {
                max-height: 80px;
              }
              
              .main-logos-container {
                gap: 20px;
              }
              
              .logo-row {
                justify-content: flex-start;
                gap: 20px;
                padding-left: 10px;
                padding-right: 10px;
              }
              
              .logo-container {
                min-width: 132px;
                max-width: 132px;
                padding: 0 5px;
              }
              
              .logo-container img {
                height: 132px;
                width: 132px;
              }
              
              .cookie-content {
                flex-direction: column;
                align-items: flex-start;
              }
              
              .cookie-buttons {
                margin-top: 15px;
                width: 100%;
                justify-content: space-between;
              }
              
              .footer-links a {
                margin: 0 10px;
                font-size: 0.9rem;
              }
            }
            
            @media (max-width: 480px) {
              .footer-links {
                display: flex;
                flex-direction: column;
                gap: 10px;
                align-items: center;
              }
              
              .footer-links a {
                margin: 5px 0;
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
    <div class="row" data-equalizer data-equalizer-mq="large-up">
        <div class="small-12 medium-6 columns" data-equalizer-watch>
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

        <div class="small-12 medium-6 columns" data-equalizer-watch>
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
<footer>
  <div class="footer-container">
    <!-- Main footer section with main logos side by side -->
    <div class="footer-main">
      <div class="footer-identity">
        <!-- Container for the two main logos -->
        <div class="main-logos-container">
          <a href="https://pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/park-logo.png" alt="Park Community School Logo">
          </a>
          <a href="https://nursery.pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/parkcommunitynursery-logo.png" alt="Park Community Nursery Logo">
          </a>
        </div>
        <p>&copy; 2025 Park Community School | All rights reserved.</p>
      </div>
    </div>
    
    <!-- Logos section with single row across the page -->
    <div class="footer-logos-section">
      <h3 class="footer-logos-title">Our Accreditations & Partnerships</h3>
      
      <!-- Single row of accreditations that spans the entire width -->
      <div class="logo-row">
        <div class="logo-container">
          <iframe src="https://registry.blockmarktech.com/certificates/e2f2188a-85ea-47b1-81d4-9d2256957b3b/widget/?tooltip_position=bottom_right&theme=transparent&hover=t" style="border:none;height:132px;width:132px;"></iframe>
        </div>
        
        <div class="logo-container">
          <a href="https://fish.hants.gov.uk/kb5/hampshire/directory/service.page?id=om83HRvJ1VI&familychannel=0" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/munch-logo.png" alt="Munch Logo">
          </a>
        </div>
        
        <div class="logo-container">
          <a href="https://www.hants.gov.uk/" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/hcc-full-colour-reversed.png" alt="Hampshire County Council Logo">
          </a>
        </div>
        
        <div class="logo-container">
          <a href="https://www.hants.gov.uk/socialcareandhealth/childrenandfamilies/connectforcommunities" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/connect4families_logo.png" alt="Connect4Families Logo">
          </a>
        </div>
        
        <div class="logo-container">
          <a href="https://www.hants.gov.uk/socialcareandhealth/childrenandfamilies/connectforcommunities" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/connect4youth_logo.png" alt="Connect4Youth Logo">
          </a>
        </div>
      </div>
    </div>
    
    <!-- Social media links -->
    <div style="text-align: center; margin: 30px 0;">
      <a href="#" aria-label="Facebook" style="font-size: 1.5rem; margin: 0 10px;"><i class="fab fa-facebook"></i></a>
      <a href="#" aria-label="Twitter" style="font-size: 1.5rem; margin: 0 10px;"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Instagram" style="font-size: 1.5rem; margin: 0 10px;"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn" style="font-size: 1.5rem; margin: 0 10px;"><i class="fab fa-linkedin"></i></a>
    </div>
    
    <!-- Footer links with added Cookie Policy link -->
    <div class="footer-links">
      <a href="/privacy-policy.php">Privacy Policy</a> | 
      <a href="/includes/cookie-policy.php">Cookie Policy</a> | 
      <a href="/terms.php">Terms & Conditions</a> |
      <a href="/sitemap.php">Sitemap</a> |
      <a href="/contact.php">Contact Us</a>
    </div>
    
    <!-- Cookie Preferences Button -->
    <div class="cookie-preferences">
      <button id="cookie-preferences-button" class="cookie-pref-btn">Cookie Preferences</button>
    </div>
  </div>
</footer>

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
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
        
        <!-- Footer JavaScript -->
        <script>
          document.addEventListener('DOMContentLoaded', function() {
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