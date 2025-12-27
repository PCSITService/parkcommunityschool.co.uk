<!-- FOOTER -->
<footer>
  <div class="grid-container footer-container">
    <!-- Main footer section with main logos -->
    <div class="grid-x grid-padding-x align-center">
      <div class="cell text-center">
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
      <h3 class="footer-logos-title">Our Accreditations & Partnerships</h3>
      
      <div class="grid-x grid-padding-x small-up-2 medium-up-4 large-up-8 align-center logo-row">
        <div class="cell logo-container">
          <a href="https://reports.ofsted.gov.uk/provider/23/116473" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/Ofsted_Good_GP_White.png" alt="Ofsted Good Rating">
          </a>
        </div>
        
        <div class="cell logo-container">
          <iframe src="https://registry.blockmarktech.com/certificates/e2f2188a-85ea-47b1-81d4-9d2256957b3b/widget/?tooltip_position=bottom_right&theme=transparent&hover=t" style="border:none;height:132px;width:132px;"></iframe>
        </div>
        
        <div class="cell logo-container">
          <a href="//theflashonair.co.uk/" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/flash_radio.png" alt="The Flash Radio">
          </a>
        </div>
        
        <div class="cell logo-container">
          <a href="https://fish.hants.gov.uk/kb5/hampshire/directory/service.page?id=om83HRvJ1VI&familychannel=0" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/munch-logo.png" alt="Munch Logo">
          </a>
        </div>
        
        <div class="cell logo-container">
          <a href="https://www.hants.gov.uk/" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/hcc-full-colour-reversed.png" alt="Hampshire County Council Logo">
          </a>
        </div>
        
        <div class="cell logo-container">
          <a href="https://www.hants.gov.uk/socialcareandhealth/childrenandfamilies/connectforcommunities" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/new_connect4families_logo.png" alt="Connect4Families Logo">
          </a>
        </div>
        
        <div class="cell logo-container">
          <a href="https://www.hants.gov.uk/socialcareandhealth/childrenandfamilies/connectforcommunities" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/new_connect4youth_logo.png" alt="Connect4Youth Logo">
          </a>
        </div>
        
        <div class="cell logo-container">
          <a href="https://www.hants.gov.uk/thingstodo/countryparks/staunton-country-park/plan-your-visit/tea-rooms" target="_blank" rel="noopener noreferrer">
            <img src="/images/logo/tearooms.png" alt="Tearooms Logo">
          </a>
        </div>
      </div>
    </div>
    
    <!-- Social media links -->
    <div class="social-links text-center">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
    </div>
    
    <!-- Footer links -->
    <div class="footer-links text-center">
      <a href="/privacy-policy.php">Privacy Policy</a>
      <span class="divider">|</span>
      <a href="/includes/cookie-policy.php">Cookie Policy</a>
      <span class="divider">|</span>
      <a href="/contact.php">Contact Us</a>
    </div>
    
    <!-- Cookie Preferences Button -->
    <div class="cookie-preferences text-center">
      <button id="cookie-preferences-button" class="cookie-pref-btn">Cookie Preferences</button>
    </div>
  </div>
</footer>

<!-- Cookie Consent Banner -->
<div id="cookie-banner" class="cookie-banner" style="display: none;">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="cell medium-8">
        <p>Park Community School uses cookies to enhance your browsing experience. To find out more about the cookies we use, see our <a href="/includes/cookie-policy.php">Cookie Policy</a>.</p>
      </div>
      <div class="cell medium-4">
        <div class="button-group align-right">
          <button id="accept-cookies" class="button success">Accept All</button>
          <button id="reject-cookies" class="button secondary">Reject Non-Essential</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Foundation 6 JS (jQuery required) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js" crossorigin="anonymous"></script>

<!-- Font Awesome for social icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Initialise Foundation -->
<script>
  $(document).ready(function() {
    $(document).foundation();
    
    // Mobile dropdown toggle
    if ($(window).width() < 640) {
      $('.dropdown.menu > li.is-dropdown-submenu-parent > a').on('click', function(e) {
        e.preventDefault();
        var $parent = $(this).parent();
        var $submenu = $parent.find('> ul');
        
        // Close other open menus
        $('.dropdown.menu > li.is-dropdown-submenu-parent').not($parent).removeClass('is-active').find('> ul').slideUp(200);
        
        // Toggle this menu
        $parent.toggleClass('is-active');
        $submenu.slideToggle(200);
      });
    }
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
</body>
</html>