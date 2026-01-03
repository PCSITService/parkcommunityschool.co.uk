<?php
/**
 * Park Community School - Navigation Header
 * Foundation 6 Navigation with Mobile Support
 */
?>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R6L1Z5CKDS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'G-R6L1Z5CKDS');
</script>

<style>
/* Navigation Styles */


.site-navigation {
    background-color: #333;
    position: sticky;
    top: 0;
    z-index: 1000;
    font-family: 'Inter', 'Open Sans', sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* Desktop Navigation */
.nav-desktop {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px 40px;
    gap: 10px;
}

.nav-logo img {
    max-height: 60px;
    width: auto;
}

.nav-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    align-items: center;
}

.nav-menu > li {
    position: relative;
    display: flex;
    align-items: center;
}

.nav-menu > li > a {
    display: flex;
    align-items: center;
    padding: 10px 18px;
    color: white;
    text-decoration: none;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 0.01em;
    white-space: nowrap;
    transition: background-color 0.2s ease;
}

.nav-menu > li > a:hover {
    background-color: #444;
}

/* Dropdown Arrow */
.nav-menu > li.has-dropdown > a::after {
    content: "";
    display: inline-block;
    width: 0;
    height: 0;
    border: 4px solid transparent;
    border-top-color: white;
    margin-left: 6px;
    margin-top: 2px;
}

/* Dropdown Menu */
.nav-dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #333;
    min-width: 220px;
    box-shadow: 0 6px 12px rgba(0,0,0,0.175);
    list-style: none;
    margin: 0;
    padding: 0;
    z-index: 1001;
}

.nav-menu > li:hover .nav-dropdown {
    display: block;
}

.nav-dropdown li a {
    display: block;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.2s ease;
}

.nav-dropdown li a:hover {
    background-color: #444;
}

/* Mobile Navigation */
.nav-mobile-header {
    display: none;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    background-color: #333;
}

.nav-mobile-header .nav-logo img {
    max-height: 50px;
}

.nav-hamburger {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    width: 28px;
    height: 22px;
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
}

.nav-hamburger span {
    width: 100%;
    height: 3px;
    background-color: white;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.nav-hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.nav-hamburger.active span:nth-child(2) {
    opacity: 0;
}

.nav-hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}

.nav-mobile-menu {
    display: none;
    background-color: #333;
    max-height: calc(100vh - 70px);
    overflow-y: auto;
}

.nav-mobile-menu.active {
    display: block;
}

.nav-mobile-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-mobile-menu > ul > li {
    border-bottom: 1px solid #444;
}

.nav-mobile-menu > ul > li > a,
.nav-mobile-menu > ul > li > .mobile-dropdown-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    font-size: 16px;
    background: none;
    border: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
}

.nav-mobile-menu > ul > li > .mobile-dropdown-toggle::after {
    content: "+";
    font-size: 20px;
    font-weight: 300;
    color: #999;
    transition: transform 0.3s ease;
}

.nav-mobile-menu > ul > li.dropdown-open > .mobile-dropdown-toggle::after {
    content: "−";
}

.mobile-dropdown {
    display: none;
    background-color: #3a3a3a;
}

.nav-mobile-menu > ul > li.dropdown-open .mobile-dropdown {
    display: block;
}

.mobile-dropdown li a {
    display: block;
    padding: 12px 20px 12px 35px;
    color: white;
    text-decoration: none;
    font-size: 14px;
    border-left: 3px solid #A3CD42;
}

.mobile-dropdown li a:hover {
    background-color: #444;
}

/* Responsive */
@media (max-width: 1024px) {
    .nav-desktop {
        display: none;
    }
    
    .nav-mobile-header {
        display: flex;
    }
}

@media (min-width: 1025px) {
    .nav-mobile-header,
    .nav-mobile-menu {
        display: none !important;
    }
}
</style>

<nav class="site-navigation">
    <!-- Desktop Navigation -->
    <div class="nav-desktop">
        <a href="/index.php" class="nav-logo">
            <img src="/images/park-logo.png" alt="Park Community School">
        </a>
        <ul class="nav-menu">
            <!-- School Dropdown -->
            <li class="has-dropdown">
                <a href="javascript:void(0)">School</a>
                <ul class="nav-dropdown">
                    <li><a href="/pages/catering.php">Catering</a></li>
                    <li><a href="/pages/events.php">Events</a></li>
                    <li><a href="/pages/park-get-into-teaching.php">Get into Teaching</a></li>
                    <li><a href="/pages/governors.php">Governors</a></li>
                    <li><a href="/pages/news.php">News</a></li>
                    <li><a href="/pages/policies.php">Policies</a></li>
                    <li><a href="/assets/prospectus.pdf" target="_blank">Prospectus</a></li>
                    <li><a href="/pages/pupil-premium.php">Pupil Premium</a></li>
                    <li><a href="/pages/studentrecruitment.php">Student Recruitment</a></li>
                    <li><a href="/pages/employment.php">Vacancies</a></li>
                </ul>
            </li>

            <!-- Safeguarding Link -->
            <li><a href="/pages/safeguarding.php">Safeguarding</a></li>

            <!-- Learning Dropdown -->
            <li class="has-dropdown">
                <a href="javascript:void(0)">Learning</a>
                <ul class="nav-dropdown">
                    <li><a href="/pages/curriculum.php">Curriculum</a></li>
                    <li><a href="/assets/curriculum/FWYL - April 2025.pdf" target="_blank">Extra-Curricular Clubs</a></li>
                    <li><a href="/pages/finance-education.php">Financial Education</a></li>
                    <li><a href="/pages/reading.php">Reading</a></li>
                </ul>
            </li>

            <!-- Parent Dropdown -->
            <li class="has-dropdown">
                <a href="javascript:void(0)">Parent</a>
                <ul class="nav-dropdown">
                    <li><a href="/pages/admissions.php">Admissions</a></li>
                    <li><a href="/pages/time-tabling.php">Calendar &amp; School Day</a></li>
                    <li><a href="/pages/havant-federation-statements.php">Federation Statements</a></li>
                    <li><a href="/pages/forms.php">Forms</a></li>
                    <li><a href="/pages/letters-home.php">Letters &amp; Newsletters</a></li>
                    <li><a href="/pages/ofsted-reports.php">Ofsted Reports</a></li>
                    <li><a href="/pages/trips.php">Trips</a></li>
                    <li><a href="/pages/uniform.php">Uniform</a></li>
                </ul>
            </li>

            <!-- Much More Dropdown -->
            <li class="has-dropdown">
                <a href="javascript:void(0)">Much More</a>
                <ul class="nav-dropdown">
                    <li><a href="/pages/park-catering-services.php">Catering</a></li>
                    <li><a href="/pages/community-services.php">Community &amp; Services</a></li>
                    <li><a href="/pages/Connect4Families.php">Connect4Families</a></li>
                    <li><a href="/pages/dickinson-centre.php">Dickinson Centre</a></li>
                    <li><a href="/pages/farm.php">Farm</a></li>
                    <li><a href="/pages/greenpower.php">Greenpower</a></li>
                    <li><a href="/pages/garden.php">Horticulture Garden</a></li>
                    <li><a href="/pages/munch.php">MUNCH</a></li>
                    <li><a href="https://nursery.pcs.hants.sch.uk" target="_blank">Nursery</a></li>
                    <li><a href="/pages/theatre.php">Theatre</a></li>
                    <li><a href="/pages/ventures.php">Ventures</a></li>
                </ul>
            </li>

            <!-- Statutory Link -->
            <li><a href="/pages/statutory.php">Statutory</a></li>

            <!-- School Portal Link -->
            <li><a href="/pages/school-portal.php">School Portal</a></li>
        </ul>
    </div>

    <!-- Mobile Navigation -->
    <div class="nav-mobile-header">
        <a href="/index.php" class="nav-logo">
            <img src="/images/park-logo.png" alt="Park Community School">
        </a>
        <button class="nav-hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="nav-mobile-menu">
        <ul>
            <!-- School Dropdown -->
            <li>
                <button class="mobile-dropdown-toggle">School</button>
                <ul class="mobile-dropdown">
                    <li><a href="/pages/catering.php">Catering</a></li>
                    <li><a href="/pages/events.php">Events</a></li>
                    <li><a href="/pages/park-get-into-teaching.php">Get into Teaching</a></li>
                    <li><a href="/pages/governors.php">Governors</a></li>
                    <li><a href="/pages/news.php">News</a></li>
                    <li><a href="/pages/policies.php">Policies</a></li>
                    <li><a href="/assets/prospectus.pdf" target="_blank">Prospectus</a></li>
                    <li><a href="/pages/studentrecruitment.php">Student Recruitment</a></li>
                    <li><a href="/pages/employment.php">Vacancies</a></li>
                </ul>
            </li>

            <!-- Safeguarding Link -->
            <li><a href="/pages/safeguarding.php">Safeguarding</a></li>

            <!-- Learning Dropdown -->
            <li>
                <button class="mobile-dropdown-toggle">Learning</button>
                <ul class="mobile-dropdown">
                    <li><a href="/pages/curriculum.php">Curriculum</a></li>
                    <li><a href="/assets/curriculum/FWYL - April 2025.pdf" target="_blank">Extra-Curricular Clubs</a></li>
                    <li><a href="/pages/finance-education.php">Financial Education</a></li>
                    <li><a href="/pages/reading.php">Reading</a></li>
                </ul>
            </li>

            <!-- Parent Dropdown -->
            <li>
                <button class="mobile-dropdown-toggle">Parent</button>
                <ul class="mobile-dropdown">
                    <li><a href="/pages/admissions.php">Admissions</a></li>
                    <li><a href="/pages/time-tabling.php">Calendar &amp; School Day</a></li>
                    <li><a href="/pages/havant-federation-statements.php">Federation Statements</a></li>
                    <li><a href="/pages/forms.php">Forms</a></li>
                    <li><a href="/pages/letters-home.php">Letters &amp; Newsletters</a></li>
                    <li><a href="/pages/ofsted-reports.php">Ofsted Reports</a></li>
                    <li><a href="/pages/trips.php">Trips</a></li>
                    <li><a href="/pages/uniform.php">Uniform</a></li>
                </ul>
            </li>

            <!-- Much More Dropdown -->
            <li>
                <button class="mobile-dropdown-toggle">Much More</button>
                <ul class="mobile-dropdown">
                    <li><a href="/pages/park-catering-services.php">Catering</a></li>
                    <li><a href="/pages/community-services.php">Community &amp; Services</a></li>
                    <li><a href="/pages/Connect4Families.php">Connect4Families</a></li>
                    <li><a href="/pages/dickinson-centre.php">Dickinson Centre</a></li>
                    <li><a href="/pages/farm.php">Farm</a></li>
                    <li><a href="/pages/greenpower.php">Greenpower</a></li>
                    <li><a href="/pages/garden.php">Horticulture Garden</a></li>
                    <li><a href="/pages/munch.php">MUNCH</a></li>
                    <li><a href="https://nursery.pcs.hants.sch.uk" target="_blank">Nursery</a></li>
                    <li><a href="/pages/theatre.php">Theatre</a></li>
                    <li><a href="/pages/ventures.php">Ventures</a></li>
                </ul>
            </li>

            <!-- Statutory Link -->
            <li><a href="/pages/statutory.php">Statutory</a></li>

            <!-- School Portal Link -->
            <li><a href="/pages/school-portal.php">School Portal</a></li>
        </ul>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const hamburger = document.querySelector('.nav-hamburger');
    const mobileMenu = document.querySelector('.nav-mobile-menu');
    
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Update aria-expanded
            const isExpanded = this.classList.contains('active');
            this.setAttribute('aria-expanded', isExpanded);
        });
    }
    
    // Mobile dropdown toggles
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    
    dropdownToggles.forEach(function(toggle) {
        toggle.addEventListener('click', function() {
            const parentLi = this.parentElement;
            
            // Close other dropdowns
            dropdownToggles.forEach(function(otherToggle) {
                if (otherToggle !== toggle) {
                    otherToggle.parentElement.classList.remove('dropdown-open');
                }
            });
            
            // Toggle this dropdown
            parentLi.classList.toggle('dropdown-open');
        });
    });
    
    // Close mobile menu when clicking a link
    const mobileLinks = document.querySelectorAll('.nav-mobile-menu a');
    mobileLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
        });
    });
});
</script>
<main id="main-content">
