<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Park Community School</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Park Community School - Much more than just a school. Explore our employment opportunities and join our community.">
  
  <!-- Link your main stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header-style.css">
  <!-- Optional: Foundation or other frameworks -->
  <link rel="stylesheet" href="css/app.min.css">
  <!-- Font Awesome for icons -->
  
  <style>
    /* General styles */
    :root {
      --primary-color: #a3cd42;
      --primary-dark: #8da93f;
      --secondary-color: #333333;
      --text-color: #333333;
      --light-bg: #f8f9fa;
      --white: #ffffff;
      --section-padding: 60px 0;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      color: var(--text-color);
      line-height: 1.6;
    }
    
    h1, h2, h3, h4, h5, h6 {
      font-weight: 600;
      margin-top: 0;
    }
    
    /* Navigation bar alignment fixes */
    .top-bar {
      display: flex;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .nav-logo {
      display: flex;
      align-items: center;
    }
    
    .nav-logo img {
      height: 40px;
      margin-right: 10px;
      vertical-align: middle;
    }
    
    .school-name {
      font-weight: bold;
      vertical-align: middle;
      line-height: 1;
      font-size: 1.2rem;
    }
    
    /* Section styles with improved spacing and animations */
    .section {
      padding: var(--section-padding);
      background-color: var(--white);
      color: var(--text-color);
      text-align: center;
    }
    
    .section h2 {
      font-size: 2.2rem;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }
    
    .section h2::after {
      content: '';
      position: absolute;
      width: 50px;
      height: 3px;
      background-color: var(--primary-color);
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .section p {
      max-width: 800px;
      margin: 0 auto 25px;
      font-size: 1.1rem;
    }
    
    /* Alternate section colors for visual interest */
    .section:nth-child(even) {
      background-color: var(--light-bg);
    }
    
    /* Green Line to separate sections */
    .section + .section {
      border-top: 5px solid var(--primary-color);
    }
    
    /* Improved Button Styles */
    .button {
      display: inline-block;
      padding: 12px 25px;
      background-color: var(--primary-color);
      color: var(--white);
      text-decoration: none;
      border-radius: 5px;
      font-weight: 600;
      transition: all 0.3s ease;
      border: 2px solid var(--primary-color);
      margin-top: 20px;
    }
    
    .button:hover {
      background-color: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .button.outline {
      background-color: transparent;
      color: var(--primary-color);
    }
    
    .button.outline:hover {
      background-color: var(--primary-color);
      color: var(--white);
    }
    
    /* Feature Box Styles for Sections */
    .features-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      margin-top: 40px;
    }
    
    .feature-box {
      flex: 0 0 300px;
      padding: 30px 20px;
      background-color: var(--white);
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      text-align: left;
    }
    
    .feature-box:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    
    .feature-icon {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 20px;
    }
    
    .feature-box h3 {
      font-size: 1.4rem;
      margin-bottom: 15px;
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
    
    /* Animations on scroll */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    
    .fade-in.active {
      opacity: 1;
      transform: translateY(0);
    }
    
    /* Mobile responsive improvements */
    @media (max-width: 992px) {
      .section {
        padding: 50px 20px;
      }
      
      .section h2 {
        font-size: 2rem;
      }
    }
    
    @media (max-width: 768px) {
      .section {
        padding: 40px 15px;
      }
      
      .section h2 {
        font-size: 1.8rem;
      }
      
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
      .section h2 {
        font-size: 1.6rem;
      }
      
      .button {
        padding: 10px 20px;
        font-size: 0.9rem;
      }
      
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
<body>
  <!-- TOP NAVIGATION is now the top of the page -->
  <?php include("includes/topnav.html"); ?>
  
  <!-- Section 1 (Hero) -->
  <section class="section section-1" style="padding: 80px 0; background: linear-gradient(135deg, rgba(163,205,66,0.2) 0%, rgba(255,255,255,1) 100%);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h1 style="font-size: 2.8rem; margin-bottom: 20px;">Join Our School Community</h1>
      <p style="font-size: 1.3rem; margin-bottom: 30px;">Discover career opportunities where you can make a real difference to our students and community.</p>
      <a href="/employment.php" class="button">View Current Vacancies</a>
      <a href="#section-6" class="button outline" style="margin-left: 15px;">Learn More</a>
    </div>
  </section>
  
  <!-- Section 2 -->
  <section class="section section-2 fade-in">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2>Opportunities</h2>
      <p>We offer a wide range of roles, from teaching to support staff, and everything in between.</p>
      
      <div class="features-container">
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-chalkboard-teacher"></i></div>
          <h3>Teaching Roles</h3>
          <p>From newly qualified teachers to leadership positions, we offer opportunities for educators at all stages of their careers.</p>
        </div>
        
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-hands-helping"></i></div>
          <h3>Support Staff</h3>
          <p>Administrative, technical, and student support roles that are essential to our school's success.</p>
        </div>
        
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-graduation-cap"></i></div>
          <h3>Specialist Positions</h3>
          <p>Opportunities for professionals with specific expertise to enhance our educational offering.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 3 -->
  <section class="section section-3 fade-in">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2>What We Offer</h2>
      <p>From professional development to wellbeing support, we value our people.</p>
      
      <div class="features-container">
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
          <h3>Career Development</h3>
          <p>Continuous professional development opportunities and clear career progression pathways.</p>
        </div>
        
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-heart"></i></div>
          <h3>Wellbeing Support</h3>
          <p>Comprehensive wellbeing programs and a supportive work environment.</p>
        </div>
        
        <div class="feature-box">
          <div class="feature-icon"><i class="fas fa-users"></i></div>
          <h3>Collaborative Culture</h3>
          <p>Work in a collaborative team environment where your ideas are valued.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Section 4 -->
  <section class="section section-4 fade-in" style="background-color: var(--light-bg);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2>What Our Staff Say</h2>
      <p>Hear from the people who make our school special.</p>
      
      <div style="max-width: 800px; margin: 40px auto; padding: 30px; background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <div style="font-size: 2rem; color: var(--primary-color); margin-bottom: 20px;">
          <i class="fas fa-quote-left"></i>
        </div>
        <p style="font-style: italic; font-size: 1.1rem; margin-bottom: 20px;">
          "Working at Park Community School has been incredibly rewarding. There's a real sense of community among staff, and the professional development opportunities have helped me grow as an educator."
        </p>
        <div style="font-weight: 600;">Sarah Johnson</div>
        <div style="color: #777;">Science Teacher, 5 years at Park</div>
      </div>
    </div>
  </section>
  
  <!-- Section 5 -->
  <section class="section section-5 fade-in">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2>Join Us</h2>
      <p>Explore our current vacancies and become a part of our community.</p>
      
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 30px;">
        <a href="/employment.php" class="button">View Vacancies</a>
        <a href="/contact.php" class="button outline">Contact HR Team</a>
      </div>
    </div>
  </section>
  
  <!-- Section 6 -->
  <section id="section-6" class="section section-6 fade-in">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2>Our Commitment</h2>
      <p>We are committed to creating an inclusive and diverse environment for everyone.</p>
      
      <div style="max-width: 800px; margin: 0 auto; text-align: left;">
        <p>At Park Community School, we believe that diversity strengthens our community. We are committed to:</p>
        <ul style="text-align: left; display: inline-block; margin: 20px auto;">
          <li>Equality of opportunity for all staff and students</li>
          <li>Creating an inclusive working and learning environment</li>
          <li>Valuing and celebrating diversity</li>
          <li>Supporting flexible working arrangements</li>
          <li>Continuous improvement of our workplace policies and practices</li>
        </ul>
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
  
  <!-- Fade-in animation script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
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