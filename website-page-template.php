<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Park Community School</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Link your main stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header-style.css">
  <!-- Optional: Foundation or other frameworks -->
  <link rel="stylesheet" href="css/app.min.css">
  <style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #000;
    }
    h1, h2 {
      color: #000;
    }
    
    /* Navigation bar alignment fixes */
    .top-bar {
      display: flex;
      align-items: center;
    }
    
    .nav-logo {
      display: flex;
      align-items: center;
    }
    
    .nav-logo img {
      height: 32px; /* Adjust based on your actual logo size */
      margin-right: 10px;
      vertical-align: middle;
    }
    
    .school-name {
      font-weight: bold;
      vertical-align: middle;
      line-height: 1;
    }
    
    /* Section styles */
    .section {
      padding: 40px 0;
      background-color: white; /* All sections will have a white background */
      color: black;
      text-align: center;
    }
    .section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }
    /* Green Line to separate sections */
    .section + .section {
      border-top: 5px solid #a3cd42; /* Green line between sections */
    }
    /* Button for sections */
    .button {
      padding: 10px 20px;
      background-color: #a3cd42;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }
    .button:hover {
      background-color: #8da93f;
    }
    
    /* Cookie Banner Styles */
    .cookie-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: #333;
      color: #fff;
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
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    
    .cookie-btn.accept {
      background-color: #a3cd42;
      color: #fff;
    }
    
    .cookie-btn.reject {
      background-color: #444;
      color: #fff;
    }
    
    .cookie-more {
      color: #fff;
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
    }
    
    .cookie-pref-btn:hover {
      color: #fff;
    }
    
    /* Footer Styles */
    footer {
      background-color: #333333;
      color: #ffffff;
      padding: 40px 0 30px;
    }
    
    footer a {
      color: #ffffff;
      text-decoration: none;
    }
    
    footer a:hover {
      text-decoration: underline;
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
      margin-bottom: 15px;
      flex-wrap: wrap; /* Allow wrapping on very small screens */
      gap: 30px; /* Space between logos */
    }
    
    /* Logo and copyright section */
    .footer-identity {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }
    
    .main-logo {
      max-height: 100px; /* Larger main logos */
      width: auto;
      object-fit: contain; /* Preserve aspect ratio */
      /* Removed the filter that made logos white */
    }
    
    .footer-identity p {
      margin-top: 15px;
      margin-bottom: 5px;
    }
    
    /* Logo rows section */
    .footer-logos-section {
      width: 100%;
      margin-top: 30px;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 30px;
    }
    
    .footer-logos-title {
      text-align: center;
      font-size: 1.2rem;
      margin-bottom: 20px;
      font-weight: 500;
    }
    
    /* Single row of logos that spans the entire width */
    .logo-row {
      display: flex;
      justify-content: space-between; /* Distribute logos evenly */
      align-items: center;
      flex-wrap: nowrap; /* Keep in a single row */
      width: 100%;
      margin-bottom: 30px;
      overflow-x: auto; /* Allow horizontal scrolling if needed */
      padding-bottom: 10px; /* Space for the scrollbar */
    }
    
    /* Consistent logo sizing */
    .logo-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 10px;
      min-width: 100px; /* Minimum width */
      max-width: 150px; /* Maximum width */
      text-align: center;
      flex: 1; /* Allow logo containers to grow evenly */
    }
    
    .logo-container img {
      height: 60px; /* Fixed height for partnership logos */
      width: auto;
      object-fit: contain; /* Maintains aspect ratio within fixed dimensions */
      /* Removed the filter that made logos white */
      transition: all 0.3s ease;
    }
    
    .logo-container:hover img {
      opacity: 0.8; /* Slight opacity change on hover instead of color change */
    }
    
    .logo-caption {
      font-size: 0.75rem;
      margin-top: 8px;
      color: #ccc;
      width: 100%; /* Ensure caption stays within container */
      white-space: nowrap; /* Prevent wrapping */
      overflow: hidden;
      text-overflow: ellipsis; /* Add ellipsis if text is too long */
    }
    
    /* Links section */
    .footer-links {
      margin-top: 20px;
      text-align: center;
    }
    
    .footer-links a {
      margin: 0 10px;
    }
    
    /* Copyright section */
    .footer-copyright {
      text-align: center;
      font-size: 0.9rem;
      color: #aaa;
      margin-top: 20px;
    }
    
    /* Cookie preferences container */
    .cookie-preferences {
      text-align: center;
      margin-top: 15px;
    }
    
    /* Mobile responsive adjustments */
    @media (max-width: 768px) {
      .main-logo {
        max-height: 80px; /* Slightly smaller on mobile but still larger than partner logos */
      }
      
      .main-logos-container {
        gap: 20px; /* Less space between logos on mobile */
      }
      
      .logo-row {
        justify-content: flex-start; /* Allow scrolling on mobile */
        gap: 20px;
        padding-left: 10px;
        padding-right: 10px;
      }
      
      .logo-container {
        min-width: 80px;
        padding: 0 5px;
      }
      
      .logo-container img {
        height: 50px;
      }
      
      .cookie-content {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .cookie-buttons {
        margin-top: 10px;
        width: 100%;
        justify-content: space-between;
      }
    }
  </style>
</head>
<body>
  <!-- TOP NAVIGATION is now the top of the page -->
  <?php include("includes/topnav.html"); ?>
  
  <!-- SECTION 2 -->
  <section class="section section-2">
    <h2>Opportunities</h2>
    <p>We offer a wide range of roles, from teaching to support staff, and everything in between.</p>
  </section>
  
  <!-- SECTION 3 -->
  <section class="section section-3">
    <h2>What We Offer</h2>
    <p>From professional development to wellbeing support, we value our people.</p>
  </section>
  
  <!-- SECTION 4 -->
  <section class="section section-4">
    <h2>Join Us</h2>
    <p>Explore our current vacancies and become a part of our community.</p>
    <a href="/employment.php" class="button">View Vacancies</a>
  </section>
  
  <!-- SECTION 5 -->
  <section class="section section-5">
    <h2>Our Commitment</h2>
    <p>We are committed to creating an inclusive and diverse environment for everyone.</p>
  </section>
  
  <!-- FOOTER -->
  <footer>
    <div class="footer-container">
      <!-- Main footer section with main logos side by side -->
      <div class="footer-main">
        <div class="footer-identity">
          <!-- Container for the two main logos -->
          <div class="main-logos-container">
            <img class="main-logo" src="/images/logo/park-logo.png" alt="Park Community School Logo">
            <img class="main-logo" src="/images/logo/parkcommunitynursery-logo.png" alt="Park Community Nursery Logo">
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
            <img src="/images/logo/cyber-essentials-logo.png" alt="Cyber Essentials Approved Logo">
            <span class="logo-caption">Cyber Essentials</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/ofsted-logo.png" alt="Ofsted Logo">
            <span class="logo-caption">Ofsted</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/iso-logo.png" alt="ISO Certification Logo">
            <span class="logo-caption">ISO 9001</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/investors-in-people-logo.png" alt="Investors in People Logo">
            <span class="logo-caption">Investors in People</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/partnership-logo-1.png" alt="Partnership Logo 1">
            <span class="logo-caption">Hampshire County</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/partnership-logo-2.png" alt="Partnership Logo 2">
            <span class="logo-caption">Arts Council</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/partnership-logo-3.png" alt="Partnership Logo 3">
            <span class="logo-caption">DfE</span>
          </div>
          
          <div class="logo-container">
            <img src="/images/logo/partnership-logo-4.png" alt="Partnership Logo 4">
            <span class="logo-caption">STEM Learning</span>
          </div>
        </div>
      </div>
      
      <!-- Footer links with added Cookie Policy link - CORRECTED PATH -->
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
  
  <!-- Cookie Consent Banner - CORRECTED PATH -->
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
  
  <!-- Cookie Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Check if user has already made a choice
      if (!localStorage.getItem('cookieConsent')) {
        document.getElementById('cookie-banner').style.display = 'block';
      }
      
      // Handle accept button
      document.getElementById('accept-cookies').addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'accepted');
        document.getElementById('cookie-banner').style.display = 'none';
      });
      
      // Handle reject button
      document.getElementById('reject-cookies').addEventListener('click', function() {
        localStorage.setItem('cookieConsent', 'rejected');
        document.getElementById('cookie-banner').style.display = 'none';
        
        // Disable analytics cookies - replace with your actual Google Analytics ID
        window['ga-disable-UA-XXXXXXXX-X'] = true;
      });
      
      // Cookie preferences button
      document.getElementById('cookie-preferences-button').addEventListener('click', function() {
        // Show the cookie banner again
        document.getElementById('cookie-banner').style.display = 'block';
      });
    });
  </script>
</body>
</html>