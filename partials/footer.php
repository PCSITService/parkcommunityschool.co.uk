</main>

<!-- FOOTER -->
<footer>
  <div class="footer-container">
    <!-- Main footer section with main logos -->
    <div class="footer-main">
      <div class="footer-identity">
        <div class="main-logos-container">
          <a href="https://pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/park-logo.png" alt="Park Community School Logo">
          </a>
          <a href="https://nursery.pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/parkcommunitynursery-logo.png" alt="Park Community Nursery Logo">
          </a>
          <a href="https://pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/Park Design & Print Logo.png" alt="Park Design Print">
          </a>
          <a href="https://pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/PCE-Logo.png" alt="Park Community Enterprise Logo">
          </a>
          <a href="https://pcs.hants.sch.uk" target="_blank" rel="noopener noreferrer">
            <img class="main-logo" src="/images/logo/PCV-Logo.png" alt="Park Community Ventures">
          </a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> Park Community School | All rights reserved.</p>
      </div>
    </div>
    
    <!-- Logos section with accreditations -->
    <div class="footer-logos-section">
      <h3 class="footer-logos-title">Our Accreditations &amp; Partnerships</h3>
      
      <div class="logo-row">
        <div class="logo-container">
          <a href="https://reports.ofsted.gov.uk/provider/23/116473" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/Ofsted_Good_GP_White.svg" alt="Ofsted Good Rating">
          </a>
        </div>
        
        <div class="logo-container">
          <iframe src="https://registry.blockmarktech.com/certificates/e2f2188a-85ea-47b1-81d4-9d2256957b3b/widget/?tooltip_position=bottom_right&theme=transparent&hover=t" style="border:none;height:132px;width:132px;" title="Cyber Essentials Certificate"></iframe>
        </div>
        
        <div class="logo-container">
          <a href="https://theflashonair.co.uk/" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/flash_radio.png" alt="The Flash Radio">
          </a>
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
            <img src="/images/logo/new_connect4families_logo.png" alt="Connect4Families Logo">
          </a>
        </div>
        
        <div class="logo-container">
          <a href="https://www.hants.gov.uk/socialcareandhealth/childrenandfamilies/connectforcommunities" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/new_connect4youth_logo.png" alt="Connect4Youth Logo">
          </a>
        </div>
        
        <div class="logo-container">
          <a href="https://www.hants.gov.uk/thingstodo/countryparks/staunton-country-park/plan-your-visit/tea-rooms" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/tearooms.png" alt="Tearooms Logo">
          </a>
        </div>
      </div>
    </div>
    
    <!-- Social media links -->
    <div class="social-links">
      <a href="https://www.facebook.com/ParkCommunitySchool" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
      <a href="https://twitter.com/ParkSchoolHants" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/parkcommunityschool" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com/company/park-community-school" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
    
    <!-- Footer links -->
    <div class="footer-links">
      <a href="/privacy-policy.php">Privacy Policy</a>
      <span class="divider">|</span>
      <a href="/includes/cookie-policy.php">Cookie Policy</a>
      <span class="divider">|</span>
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

<!-- Footer CSS -->
<style>
  /* Footer Styles */
  footer {
    background-color: #333;
    color: #fff;
    padding: 60px 0 30px;
  }
  
  footer a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  
  footer a:hover {
    color: #a3cd42;
    text-decoration: none;
  }
  
  .footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .footer-main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 30px;
    text-align: center;
  }
  
  .main-logos-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 25px;
    flex-wrap: wrap;
    gap: 30px;
  }
  
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
    filter: brightness(1.1);
  }
  
  .footer-identity p {
    margin-top: 20px;
    margin-bottom: 5px;
  }
  
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
    color: #fff;
  }
  
  .logo-row {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    margin-bottom: 30px;
    gap: 15px;
    padding: 15px 0;
  }
  
  .logo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 132px;
    height: 132px;
    flex-shrink: 0;
  }
  
  .logo-container img,
  .logo-container iframe {
    height: 132px;
    width: 132px;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: brightness(1.1);
    display: block;
    margin: 0 auto;
  }
  
  .logo-container:hover img,
  .logo-container:hover iframe {
    transform: scale(1.05);
    opacity: 0.9;
  }
  
  .social-links {
    text-align: center;
    margin: 30px 0;
  }
  
  .social-links a {
    font-size: 1.5rem;
    margin: 0 10px;
    display: inline-block;
  }
  
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
  
  .footer-links .divider {
    color: rgba(255, 255, 255, 0.3);
  }
  
  .footer-links a:after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    background-color: #a3cd42;
    bottom: 0;
    left: 0;
    transition: width 0.3s ease;
  }
  
  .footer-links a:hover:after {
    width: 100%;
  }
  
  .cookie-preferences {
    text-align: center;
    margin-top: 20px;
  }
  
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
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
  }
  
  .cookie-btn.accept {
    background-color: #a3cd42;
    color: #fff;
  }
  
  .cookie-btn.accept:hover {
    background-color: #8da93f;
  }
  
  .cookie-btn.reject {
    background-color: #555;
    color: #fff;
  }
  
  .cookie-btn.reject:hover {
    background-color: #666;
  }
  
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
    color: #fff;
  }
  
  /* Mobile Responsive */
  @media (max-width: 768px) {
    footer {
      padding: 40px 0 20px;
    }
    
    .main-logos-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      justify-items: center;
      max-width: 280px;
      margin: 0 auto 25px auto;
    }
    
    .main-logo {
      max-height: 70px;
      max-width: 120px;
    }
    
    .logo-row {
      display: grid !important;
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 20px 15px !important;
      justify-items: center !important;
      max-width: 300px !important;
      margin: 0 auto 30px auto !important;
      padding: 0 10px !important;
    }
    
    .logo-container {
      width: 100% !important;
      max-width: 120px !important;
      height: auto !important;
      min-height: 100px !important;
    }
    
    .logo-container img {
      width: 100% !important;
      max-width: 100px !important;
      height: auto !important;
      max-height: 80px !important;
    }
    
    .logo-container iframe {
      width: 110px !important;
      height: 110px !important;
      max-width: 110px !important;
      max-height: 110px !important;
    }
    
    .social-links {
      margin: 20px 0;
    }
    
    .social-links a {
      margin: 0 8px;
    }
    
    .footer-links {
      display: flex;
      flex-direction: column;
      gap: 15px;
      align-items: center;
    }
    
    .footer-links .divider {
      display: none;
    }
    
    .footer-links a {
      margin: 0;
      font-size: 0.95rem;
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
  }
  
  @media (max-width: 480px) {
    .main-logos-container {
      max-width: 240px;
      gap: 15px;
    }
    
    .main-logo {
      max-height: 60px;
      max-width: 100px;
    }
    
    .logo-row {
      max-width: 260px !important;
      gap: 15px 10px !important;
    }
    
    .logo-container {
      max-width: 100px !important;
      min-height: 90px !important;
    }
    
    .logo-container img {
      max-width: 85px !important;
      max-height: 70px !important;
    }
    
    .logo-container iframe {
      width: 95px !important;
      height: 95px !important;
      max-width: 95px !important;
      max-height: 95px !important;
    }
    
    .footer-logos-title {
      font-size: 1.1rem;
    }
  }
</style>

<!-- Font Awesome for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Foundation 6 JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js" crossorigin="anonymous"></script>

<script>
  $(document).ready(function() {
    $(document).foundation();
  });
</script>

<!-- Cookie Consent JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const cookieConsent = sessionStorage.getItem('cookieConsent');
    
    if (!cookieConsent) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
    
    document.getElementById('accept-cookies').addEventListener('click', function() {
      sessionStorage.setItem('cookieConsent', 'accepted');
      document.getElementById('cookie-banner').style.display = 'none';
    });
    
    document.getElementById('reject-cookies').addEventListener('click', function() {
      sessionStorage.setItem('cookieConsent', 'rejected');
      document.getElementById('cookie-banner').style.display = 'none';
    });
    
    document.getElementById('cookie-preferences-button').addEventListener('click', function() {
      document.getElementById('cookie-banner').style.display = 'block';
    });
  });
</script>
<?php include __DIR__ . "/accessibility-widget.php"; ?>
<?php include __DIR__ . "/back-to-top.php"; ?>
</body>
</html>