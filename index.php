<?php
require_once('includes/rate_limiter.php');
$rateLimiter = new RateLimiter();
$showCaptcha = $rateLimiter->isLimitExceeded();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Much More Than Just A School</title>
    <?php include("includes/head.html") ?>
    <link rel="stylesheet" href="css/bounce.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?php if ($showCaptcha): ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        :root {
            --primary-green: #a3cd41;
            --primary-orange: #f08a24;
            --primary-blue: #3498db;
            --dark-bg: #333333;
            --light-gray: #f8f9fa;
            --text-dark: #2d3748;
            --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }
        * { box-sizing: border-box; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: var(--text-dark); margin: 0; padding: 0; }
        .page-base { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); min-height: 100vh; }
        html { scroll-behavior: smooth; }

        /* Mobile Navigation - Hidden on Desktop */
        .mobile-nav { display: none; background: #333; color: white; position: relative; }
        .mobile-nav-header { padding: 1rem; display: flex; justify-content: space-between; align-items: center; }
        .mobile-nav-header img { height: 40px; width: auto; }
        #mobile-menu-toggle { background: none; border: none; color: white; font-size: 1.5rem; cursor: pointer; padding: 0.5rem; }
        #mobile-menu { display: none; background: rgba(0,0,0,0.95); position: absolute; top: 100%; left: 0; right: 0; z-index: 1000; box-shadow: var(--shadow-medium); max-height: 80vh; overflow-y: auto; }
        #mobile-menu.open { display: block; }
        .mobile-dropdown-toggle { width: 100%; text-align: left; background: none; border: none; color: white; padding: 0.75rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); font-weight: 600; font-size: 1rem; display: flex; justify-content: space-between; align-items: center; cursor: pointer; }
        .mobile-dropdown-content { display: none; background: #444; }
        .mobile-dropdown-content.open { display: block; }
        .mobile-dropdown-content a { display: block; color: white; text-decoration: none; padding: 0.5rem 1rem 0.5rem 2rem; border-left: 3px solid var(--primary-green); }
        .mobile-dropdown-content a:hover { background: #555; }
        .mobile-nav-link { display: block; color: white; text-decoration: none; padding: 0.75rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); font-weight: 500; }

        /* Desktop Navigation - Hidden on Mobile */
        .desktop-nav { display: block; }

        /* Header */
        #homepage-hero { background: linear-gradient(135deg, #7dd3fc 0%, #38bdf8 50%, #0ea5e9 100%); color: white; padding: 4rem 0; position: relative; overflow: hidden; }
        #homepage-hero::before { content: ''; position: absolute; inset: 0; background: rgba(0, 0, 0, 0.1); backdrop-filter: blur(1px); }
        #homepage-hero .row { position: relative; z-index: 2; }
        #homepage-hero p { background: rgba(255, 255, 255, 0.15); padding: 1.5rem; border-radius: var(--border-radius); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem; }

        /* Buttons */
        .button { border-radius: 25px !important; font-weight: 600; transition: var(--transition); text-decoration: none; display: inline-flex; align-items: center; justify-content: center; margin: 0.25rem; padding: 0.75rem 1.25rem; border: none; cursor: pointer; text-align: center; box-shadow: var(--shadow-light); min-width: 160px; white-space: normal; line-height: 1.3; }
        .button:hover { transform: translateY(-2px); box-shadow: var(--shadow-medium); }
        .button.expand { min-width: 220px; padding: 1rem 2rem; font-size: 1.1rem; }
        .button.success { background: var(--primary-green); color: white; }
        .button.success:hover { background: #8fb332; color: white; }
        .button.warning { background: var(--primary-orange); color: white; }
        .button.warning:hover { background: #e07520; color: white; }

        /* Desktop Button Layout */
        .small-text-center.large-text-right { width: 100%; }
        .small-text-center.large-text-right > .button.expand { width: calc(100% + 0.5rem); margin: 0 0 1rem -0.5rem; display: block; text-align: center; }
        .small-text-center.large-text-right .row { display: flex; gap: 0.5rem; margin-bottom: 1rem; width: 100%; }
        .small-text-center.large-text-right .columns { flex: 1; padding: 0; margin: 0; }
        .small-text-center.large-text-right .row .button { width: 100%; margin: 0; padding: 0.75rem 0.5rem; text-align: center; font-size: 0.85rem; line-height: 1.3; font-weight: 600; display: block; box-sizing: border-box; min-height: 3rem; }
        .small-text-center.large-text-right .row .columns:last-child { flex: 1.2; margin-right: -0.75rem; }
        .small-text-center.large-text-right .row .columns:last-child .button { width: calc(100% + 0.75rem); }
        .small-text-center.large-text-right .row:nth-child(3) .columns:last-child { margin-right: -0.3rem; }
        .small-text-center.large-text-right .row:nth-child(3) .columns:last-child .button { width: calc(100% + 0.3rem); }
        .small-text-center.large-text-right .row:nth-child(4) .columns:last-child { margin-right: -0.4rem; }
        .small-text-center.large-text-right .row:nth-child(4) .columns:last-child .button { width: calc(100% + 0.4rem); }

        /* Modal */
        .reveal-modal { border-radius: var(--border-radius); box-shadow: var(--shadow-heavy); border: none; backdrop-filter: blur(10px); max-width: 90vw; max-height: 90vh; overflow-y: auto; }
        .reveal-modal h2 { color: var(--text-dark); border-bottom: 3px solid var(--primary-green); padding-bottom: 1rem; margin-bottom: 1.5rem; }
        .close-reveal-modal { font-size: 2rem; font-weight: bold; color: #999; transition: var(--transition); }
        .close-reveal-modal:hover { color: #333; transform: scale(1.1); }

        /* Sections */
        section { padding: 0; background: #333333; }
        section .large-12.columns { background: transparent; }
        .grey-bg { padding: 3rem 0; background: var(--light-gray); position: relative; }
        .grey-bg::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(163, 205, 65, 0.05) 0%, rgba(79, 209, 199, 0.05) 100%); }
        .grey-bg > .row { position: relative; z-index: 2; }
        #meet-the-team { padding: 3rem 0; background: linear-gradient(135deg, var(--dark-bg) 0%, #2d3748 100%); color: white; position: relative; overflow: hidden; }
        #meet-the-team::before { content: ''; position: absolute; inset: 0; background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.05)"><polygon points="1000,100 1000,0 0,100"/></svg>'); background-size: cover; }
        #meet-the-team .row { position: relative; z-index: 2; }

        /* Contact Section */
        #contact-section { background: linear-gradient(135deg, var(--primary-green) 0%, #68d391 100%); color: white; padding: 2.5rem 0; position: relative; overflow: hidden; }
        #contact-section::before { content: ''; position: absolute; inset: 0; background: rgba(0, 0, 0, 0.1); }
        #contact-section .row { position: relative; z-index: 2; }
        #contact-section h3 { color: white; font-size: 2rem; text-align: center; margin-bottom: 2rem; font-weight: 700; }
        #contact-section h3::after { content: ''; display: block; width: 60px; height: 3px; background: white; margin: 1rem auto; border-radius: 2px; }
        .contact-info { background: rgba(255, 255, 255, 0.15); padding: 1.5rem 2rem; border-radius: var(--border-radius); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); text-align: center; width: 100%; }
        .contact-content { display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 1.5rem; }
        .contact-item { display: flex; align-items: center; justify-content: center; gap: 0.5rem; flex: 1; min-width: 200px; }
        .contact-item i { font-size: 1.3rem; color: var(--primary-orange); width: 25px; text-align: center; }
        .contact-item span, .contact-item a { color: white; font-size: 1.05rem; line-height: 1.4; }
        .contact-item a { text-decoration: none; transition: var(--transition); }
        .contact-item a:hover { color: var(--primary-orange); text-decoration: underline; }

        /* Video Buttons */
        .video-buttons-top { margin-bottom: 0; padding: 1.5rem 0; background: var(--dark-bg); }
        .video-buttons-top .row { display: flex; justify-content: center; align-items: stretch; gap: 0.5rem; flex-wrap: wrap; }
        .video-buttons-top .columns { flex: 1; text-align: center; max-width: 210px; min-width: 130px; }
        .video-btn-top { background: var(--primary-blue) !important; color: white !important; border: none !important; padding: 0.6rem 0.5rem !important; font-size: 0.75rem !important; width: 100% !important; text-align: center; transition: var(--transition); border-radius: 25px !important; font-weight: 600; display: flex; align-items: center; justify-content: center; white-space: nowrap !important; min-height: 44px; }
        .video-btn-top:hover { background: #2980b9 !important; color: white !important; transform: translateY(-2px); box-shadow: var(--shadow-medium); text-decoration: none; }
        .video-btn-top i { margin-right: 0.35rem; font-size: 0.7rem; flex-shrink: 0; }

        /* Slideshow - with Foundation overrides */
        .comprehensive-slideshow { background: var(--dark-bg) !important; border-radius: var(--border-radius); margin: 2rem 0; position: relative; overflow: hidden; box-shadow: var(--shadow-medium); }
        .comprehensive-slideshow * { box-sizing: border-box; }
        .slide-content { display: none !important; padding: 0; min-height: 550px; height: auto; background: var(--dark-bg) !important; }
        .slide-content.active { display: block !important; }
        .slide-inner { padding: 2.5rem 3rem; height: 100%; display: flex; flex-direction: column; justify-content: flex-start; box-sizing: border-box; background: var(--dark-bg) !important; }
        .slide-inner .row { background: transparent !important; }
        .slide-inner .columns { background: transparent !important; }
        .slide-inner h3 { color: var(--primary-green); font-size: 2.2rem; font-weight: 700; margin-bottom: 2rem; text-align: center; }
        .slide-inner h3::after { content: ''; display: block; width: 60px; height: 3px; background: var(--primary-orange); margin: 1rem auto; border-radius: 2px; }
        .slide-inner p { font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem; color: white; }
        .slide-inner .white-text p { color: white !important; }

        /* Highlight Box */
        .highlight-box, .values-box { background: linear-gradient(135deg, var(--primary-green), #68d391); color: white; padding: 2rem; border-radius: var(--border-radius); box-shadow: var(--shadow-light); }
        .highlight-box h4, .values-box h4 { color: white; margin-bottom: 1.5rem; font-size: 1.3rem; }
        .highlight-box ul, .values-box ul { list-style: none; padding: 0; }
        .highlight-box li, .values-box li { margin-bottom: 1rem; padding-left: 1.5rem; position: relative; color: white; }
        .highlight-box li::before, .values-box li::before { content: '✓'; position: absolute; left: 0; font-weight: bold; color: #ffd700; }

        /* Ofsted Quotes */
        .ofsted-quote { margin-bottom: 2rem; }
        .ofsted-quote blockquote { background: rgba(255, 255, 255, 0.1); border-left: 4px solid var(--primary-green); padding: 1.5rem; margin: 0; border-radius: 0 var(--border-radius) var(--border-radius) 0; font-style: italic; }
        .ofsted-quote blockquote p { margin: 0; font-size: 1.1rem; color: white; }

        /* Feature Box */
        .feature-box { text-align: center; padding: 2rem 1rem; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; }
        .feature-icon { font-size: 3rem; color: var(--primary-green); margin-bottom: 1rem; }
        .feature-box h4, .feature-box p { color: white; }
        .feature-box h4 { font-size: 1.3rem; margin-bottom: 1rem; text-align: center; }
        .feature-box p { font-size: 1rem; line-height: 1.6; }

        /* Slide Indicators */
        .slide-indicators { display: flex; justify-content: center; padding: 1.5rem; background: var(--dark-bg); gap: 0.5rem; border-radius: 0 0 var(--border-radius) var(--border-radius); }
        .indicator { width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.3); cursor: pointer; transition: var(--transition); border: 2px solid transparent; }
        .indicator.active { background: var(--primary-green); }
        .indicator:hover { background: var(--primary-orange); }

        /* Headings */
        h3, h4 { color: var(--text-dark); font-weight: 700; margin-bottom: 2rem; }
        h3 { font-size: 2.5rem; text-align: center; position: relative; }
        h3::after { content: ''; display: block; width: 80px; height: 4px; background: linear-gradient(90deg, var(--primary-green), var(--primary-orange)); margin: 1rem auto; border-radius: 2px; }
        h4 { font-size: 1.8rem; text-align: center; margin-bottom: 3rem; color: #4a5568; }
        .extra-mile-heading { color: #000000 !important; font-size: 2.5rem; text-align: center; margin-bottom: 3rem; font-weight: 700; }

        /* Menu Box */
        .medium-block-grid-2 > li, .medium-block-grid-3 > li, .medium-block-grid-5 > li { margin-bottom: 2rem; }
        .menu-box { background: white; border-radius: var(--border-radius); padding: 1.5rem; transition: var(--transition); box-shadow: var(--shadow-light); border: 2px solid transparent; height: 100%; min-height: 220px; display: flex; flex-direction: column; align-items: center; text-align: center; justify-content: space-between; }
        .menu-box:hover { transform: translateY(-5px); box-shadow: var(--shadow-heavy); border-color: var(--primary-green); }
        .menu-box img { border-radius: 8px; transition: var(--transition); max-width: 100%; height: auto; opacity: 0; animation: fadeInImage 0.6s ease forwards; }
        .menu-box img[src*="parkcommunitynursery-logo"] { width: 100% !important; height: 282px !important; object-fit: contain !important; max-width: none !important; }
        .menu-box:hover img { transform: scale(1.05); }
        .menu-box p { margin: 1rem 0 0 0; font-weight: 600; color: var(--text-dark); }
        @keyframes fadeInImage { to { opacity: 1; } }

        /* Team */
        .team-member { border-radius: 50%; border: 4px solid var(--primary-green); transition: var(--transition); width: 150px; height: 150px; object-fit: cover; }
        .team-member:hover { transform: scale(1.1); border-color: var(--primary-orange); }
        .team-member-container { transition: var(--transition); }
        .team-member-container:hover { transform: translateY(-10px); }

        /* Focus States */
        .button:focus, .menu-box:focus, a:focus { outline: 3px solid var(--primary-green); outline-offset: 2px; }
        nav a:focus, .top-bar a:focus, .top-bar-section a:focus, .dropdown a:focus, [class*="nav"] a:focus, .has-dropdown a:focus, .top-bar ul a:focus { outline: none; }

        footer { background-color: #333333 !important; margin: 0; padding: 0; }

        /* ========== MOBILE STYLES ========== */
        @media (max-width: 768px) {
            /* Show mobile nav, hide desktop nav */
            .mobile-nav { display: block; }
            .desktop-nav { display: none; }

            /* Header adjustments */
            #homepage-hero { padding: 2rem 1rem; }
            #homepage-hero .medium-5, #homepage-hero .medium-7 { width: 100%; float: none; }

            /* Button layout for mobile */
            .small-text-center.large-text-right .row { flex-direction: column; align-items: stretch; gap: 0.5rem; }
            .small-text-center.large-text-right .columns { flex: none; width: 100%; margin-right: 0 !important; }
            .small-text-center.large-text-right .row .button { width: 100% !important; margin: 0; font-size: 1rem; padding: 1rem; min-height: 3.5rem; }
            .small-text-center.large-text-right > .button.expand { width: 100%; margin: 0 0 1rem 0; }

            /* Video buttons mobile */
            .video-buttons-top .row { flex-direction: column; gap: 0.5rem; }
            .video-buttons-top .columns { max-width: none; width: 100%; }
            .video-btn-top { padding: 1rem !important; font-size: 1rem !important; }

            /* Slideshow mobile */
            .slide-content { min-height: auto; }
            .slide-inner { padding: 1.5rem; }
            .slide-inner h3 { font-size: 1.8rem; }
            .slide-inner p { font-size: 1rem; }
            .slide-inner .large-7, .slide-inner .large-5, .slide-inner .large-6, .slide-inner .large-4 { width: 100%; float: none; }
            .highlight-box, .values-box { margin-top: 1.5rem; }

            /* Headings mobile */
            h3, .extra-mile-heading { font-size: 1.8rem; }
            h4 { font-size: 1.4rem; }

            /* Menu boxes mobile - 2 column grid */
            .medium-block-grid-2, .medium-block-grid-3, .medium-block-grid-5 { display: grid !important; grid-template-columns: 1fr 1fr; gap: 1rem; padding: 0 1rem; }
            .medium-block-grid-2 > li, .medium-block-grid-3 > li, .medium-block-grid-5 > li { margin: 0; padding: 0; list-style: none; }
            .menu-box { min-height: 160px; padding: 1rem; }
            .menu-box img { max-height: 80px; }
            .menu-box img[src*="parkcommunitynursery-logo"] { height: 120px !important; }
            .menu-box p { font-size: 0.85rem; margin-top: 0.5rem; }

            /* Team section mobile */
            .team-member { width: 100px; height: 100px; }
            #meet-the-team .medium-4 { width: 50%; float: left; }

            /* Contact section mobile */
            #contact-section h3 { font-size: 1.6rem; }
            .contact-content { flex-direction: column; gap: 1rem; }
            .contact-item { min-width: auto; flex: none; justify-content: flex-start; width: 100%; }
            .contact-info { padding: 1.5rem 1rem; }

            /* Grey section padding */
            .grey-bg { padding: 2rem 0; }
            .grey-bg .large-12 { padding: 0; }
        }

        /* Small mobile (under 480px) */
        @media (max-width: 480px) {
            .medium-block-grid-5 { grid-template-columns: 1fr 1fr; }
            #meet-the-team .medium-4 { width: 100%; float: none; margin-bottom: 1.5rem; }
            .slide-inner h3 { font-size: 1.5rem; }
        }

        /* Tablet landscape and up */
        @media (min-width: 769px) and (max-width: 1024px) {
            .video-buttons-top .columns { min-width: 140px; max-width: 200px; }
            .video-btn-top { font-size: 0.8rem !important; padding: 0.6rem 0.8rem !important; }
        }

        /* Touch-friendly tap targets */
        @media (hover: none) and (pointer: coarse) {
            .button, .video-btn-top, .menu-box a { min-height: 44px; }
            .indicator { width: 16px; height: 16px; }
        }

        /* Reduced motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; }
        }

        /* Print */
        @media print {
            #homepage-hero { background: white !important; color: black !important; }
            .button { border: 2px solid var(--primary-green) !important; background: white !important; color: var(--primary-green) !important; }
            .mobile-nav, .video-buttons-top, .comprehensive-slideshow { display: none; }
        }
    </style>
</head>

<body class="page-base">

<?php if ($showCaptcha) { include("includes/captcha_overlay.php"); } ?>

<!-- MOBILE NAVIGATION -->
<nav class="mobile-nav">
    <div class="mobile-nav-header">
        <div style="width: 40px;"></div>
        <a href="/"><img src="images/park-logo.png" alt="Park Community School"></a>
        <button id="mobile-menu-toggle" aria-label="Toggle menu">☰</button>
    </div>
    <div id="mobile-menu">
        <div style="padding: 1rem;">
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-toggle">School <span class="mobile-arrow">▼</span></button>
                <div class="mobile-dropdown-content">
                    <a href="catering.php">Catering</a>
                    <a href="events.php">Events</a>
                    <a href="park-get-into-teaching.php">Get into Teaching</a>
                    <a href="governors.php">Governors</a>
                    <a href="news.php">News</a>
                    <a href="policies.php">Policies</a>
                    <a href="assets/prospectus.pdf" target="_blank">Prospectus</a>
                    <a href="studentrecruitment.php">Student Recruitment</a>
                    <a href="employment.php">Vacancies</a>
                </div>
            </div>
            <a href="safeguarding.php" class="mobile-nav-link">Safeguarding</a>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-toggle">Learning <span class="mobile-arrow">▼</span></button>
                <div class="mobile-dropdown-content">
                    <a href="curriculum.php">Curriculum</a>
                    <a href="assets/curriculum/FWYL - April 2025.pdf">Extra-Curricular Clubs</a>
                    <a href="finance-education.php">Financial Education</a>
                    <a href="reading.php">Reading</a>
                </div>
            </div>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-toggle">Parent <span class="mobile-arrow">▼</span></button>
                <div class="mobile-dropdown-content">
                    <a href="admissions.php">Admissions</a>
                    <a href="time-tabling.php">Calendar & School Day</a>
                    <a href="havant-federation-statements.php">Federation Statements</a>
                    <a href="forms.php">Forms</a>
                    <a href="letters-home.php">Letters & Newsletters</a>
                    <a href="ofsted-reports.php">Ofsted Reports</a>
                    <a href="trips.php">Trips</a>
                    <a href="uniform.php">Uniform</a>
                </div>
            </div>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-toggle">Much More <span class="mobile-arrow">▼</span></button>
                <div class="mobile-dropdown-content">
                    <a href="assets/annual-review-2020-2021.pdf" target="_blank">Annual Review</a>
                    <a href="community-services.php">Community & Services</a>
                    <a href="Connect4Families.php">Connect4Families</a>
                    <a href="dickinson-centre.php">Dickinson Centre</a>
                    <a href="greenpower.php">Greenpower</a>
                    <a href="garden.php">Horticulture Garden</a>
                    <a href="munch.php">MUNCH</a>
                    <a href="theatre.php">Park Community Theatre</a>
                </div>
            </div>
            <a href="statutory.php" class="mobile-nav-link">Statutory</a>
            <a href="school-portal.php" class="mobile-nav-link">School Portal</a>
        </div>
    </div>
</nav>

<!-- DESKTOP NAVIGATION -->
<div class="desktop-nav">
    <?php include("includes/topnav.html") ?>
</div>

<header id="homepage-hero">
    <div class="row">
        <div class="medium-5 columns">
            <?php include("includes/much_more_logo.html") ?>
            <br><br>
        </div>
        <div class="medium-7 columns">
            <div class="small-text-center large-text-right">
                <a class="expand small button radius success" href="#" data-reveal-id="HeadsWelcome">Headteacher's Welcome</a>
                <div class="row">
                    <div class="columns"><a class="small button radius warning long-text" href="assets/curriculum/Options Booklet 2025 PV. V3.pdf" target="_blank">GCSE Courses 2025-2026</a></div>
                    <div class="columns"><a class="small button radius" href="#" data-reveal-id="exam-information" style="background-color: #f08a24; border-color: #f08a24; color: #ffffff;">Exam Information</a></div>
                </div>
                <div class="row">
                    <div class="columns"><a class="small button radius warning" href="#" data-reveal-id="alumni">Alumni</a></div>
                    <div class="columns"><a class="small button radius warning" href="/ofsted-reports.php">Ofsted Reports 2022</a></div>
                    <div class="columns"><a class="small button radius warning" href="#" data-reveal-id="transition">Year 6 -> 7 2025</a></div>
                </div>
                <div class="row">
                    <div class="columns"><a class="small button radius success" href="assets/Welcome to Park 2025 (All Students).pdf" target="_blank">Welcome to Park</a></div>
                    <div class="columns"><a class="small button radius success" href="assets/prospectus.pdf" target="_blank">Prospectus</a></div>
                    <div class="columns"><a class="small button radius success" href="letters-home.php" target="_blank"><i class="fa fa-envelope-open-text"></i> Letters & Newsletters</a></div>
                </div>
            </div>
        </div>
        <div class="medium-5 columns">
            <div id="HeadsWelcome" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Welcome to Park Community School</h2>
                <p>Our school provides an expansive park environment. Through a wide variety of lessons and other opportunities to learn, we encourage our young people to discover what they love. As well as the school site, we have several other facilities to provide a great curriculum and exciting places in which to learn. We think there are a number of important areas of learning while at school and describe these as attainment, resilience and autonomy; exams and qualifications matter in life along with the ability to cope with adversity, getting up when life knocks us down, as well as becoming independent and able to make good choices.</p>
                <p>Over the last decade we have planned and constructed our new buildings. The fantastic facilities support students' learning and enrich their time in school.</p>
                <p>We have a wonderful theatre, lecture theatre, restaurant, and outdoor areas, including a floodlit STP (synthetic turf pitch) as well as specialist classrooms for a wide range of subjects. Many areas are used by community groups, other organisations and even for children's parties outside school time. The Watering Hole restaurant serves award-winning school meals, prepared by our chefs and their catering team, all at affordable prices. Breakfast is available to all students for free each morning, thank you Magic Breakfast. Our classrooms include the latest large touch-screen technology. We have invested heavily in computers, laptops, iPads and software to allow students to use a comprehensive range of electronic devices to support their learning. Our learning bases away from the school site allow for the development of enterprise skills, teaching towards construction qualifications and finding out about plants and growing food on our small holding.</p>
                <p>I hope that the information on this website gives you some idea of our vision and principles, as well as the facilities, and curriculum that we offer to students. It also includes the details of other activities and opportunities such as our print business, construction skills centre and tearoom. Munch and our pantry are initiatives for the wider community. School should be about finding what you love to do, because each of us is different that doesn't just happen in the classroom; academic learning alongside other activities and lessons helps us to be well-prepared to take the next steps in life. At Park we are proud to be Much More Than Just a School.</p>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="medium-4 columns text-center team-member-container">
                            <img src="images/slt/c-anders.jpg" alt="" class="team-member">
                            <p>Christopher Anders</p>
                            <p class="subheader">Headteacher</p>
                        </div>
                        <div class="medium-4 small-6 columns text-center team-member-container">
                            <img src="images/slt/e-capaldi.jpg" alt="" class="team-member">
                            <p>Ella Capaldi</p>
                            <p class="subheader">Head of School</p>
                        </div>
                    </div>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="row">
        <div class="columns">
            <br>
            <div id="alumni" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Alumni</h2>
                <p>Calling all Ex Park Students!!</p>
                <p>If you were once a student at Park, we would love to know what you are up to now. Please complete the short form to share your journey since leaving Park. We aim to create a range of case studies of ex-students to share with our current cohort in order to inspire them and to see how amazing Park students are. Please share with anyone who used to attend Park. Be part of Parks Alumni!</p>
                <a class="expand button radius success" href="https://docs.google.com/forms/d/e/1FAIpQLScSzx5TU8ICwjJnmkJdsny6v-hM4N40v1IgKwqWOX6l3YwlxA/viewform?usp=sf_link" target="_blank">Let Us Know Form</a>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            
            <div id="transition" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Year 6 Transition Information</h2>
                <p>Here you will find all the information you need to help with your child's transition from Year 6 to Year 7.</p>
                <ul>
                    <li><a href="/assets/Welcome to Park 2025 (Year 7).pdf" target="_blank">Welcome to Park - Year 7</a></li>
                    <li><a href="/assets/freshers.week/2025/Transition 2025 - letter 1 - March 2025.pdf" target="_blank">Transition Letter 1 - March 2025</a></li>
                    <li><a href="/assets/freshers.week/2025/Transition 2025 - letter 2 - May 2025.pdf" target="_blank">Transition Letter 2 - May 2025</a></li>
                </ul>
                <a class="expand button radius success" href="https://forms.office.com/e/rWrywTPz9p" target="_blank">Acceptance Form</a>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            
            <div id="exam-information" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Exam Information</h2>
                <p>Here are some useful documents for Year 11 exams and Revision Studies in 2024 - 2025</p>
                <ul>
                    <li><a href="assets/exam/complete-candidate-examinations-book-2024-2025.pdf" target="_blank">Candidate Handbook for examinations during School Year 2024-25</a></li>
                    <li><a href="assets/exam/academic-year-2025-2026/Year 11 Autumn Mock Timetable Final (2) (1).pdf" target="_blank">Year 11 - Autumn Mock Exam Timetable</a></li>
                    <li><a href="assets/exam/Phase 1 Revision booklet 25-26.pdf" target="_blank">Phase 1 Revision Booklet 2025 - 2026</a></li>
                    <li><a href="assets/exam/Phase 2 Revision booklet 25-26.pdf" target="_blank">Phase 2 Revision Booklet 2025 - 2026</a></li>
                    <li><a href="assets/exam/KA1 KS3 Year 7.pdf" target="_blank">KA1 KS3 Year 7</a></li>
                    <li><a href="assets/exam/KA1 KS3 Year 8.pdf" target="_blank">KA1 KS3 Year 8</a></li>
                    <li><a href="assets/exam/KA1 KS3 Year 9.pdf" target="_blank">KA1 KS3 Year 9</a></li>
                </ul>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
        </div>
    </div>
</section>

<section style="background: #333333 !important;">
    <div class="row" style="background: transparent;">
        <div class="large-12 columns" style="background: transparent;">
            <div class="video-buttons-top">
                <div class="row">
                    <div class="columns"><a href="https://vimeo.com/658514122" target="_blank" class="video-btn-top"><i class="fas fa-play"></i> Welcome To Park</a></div>
                    <div class="columns"><a href="https://vimeo.com/974947783" target="_blank" class="video-btn-top"><i class="fas fa-play"></i> Belonging</a></div>
                    <div class="columns"><a href="https://vimeo.com/658515057" target="_blank" class="video-btn-top"><i class="fas fa-play"></i> Our Vision</a></div>
                    <div class="columns"><a href="https://vimeo.com/1096605692" target="_blank" class="video-btn-top"><i class="fas fa-play"></i> Jamie Oliver Award</a></div>
                    <div class="columns"><a href="https://vimeo.com/1129965075?share=copy&fl=sv&fe=ci#t=4" target="_blank" class="video-btn-top"><i class="fas fa-play"></i> ITV News Attendance</a></div>
                </div>
            </div>
            
            <div class="comprehensive-slideshow">
                <div class="slide-content active">
                    <div class="slide-inner">
                        <h3>Our Vision</h3>
                        <div class="row">
                            <div class="large-7 columns white-text">
                                <p style="color: white !important;"><strong>Park's goal is 'Success for all through attainment, resilience and autonomy'.</strong> This is achieved by supporting each student to ensure they are given the opportunity to succeed.</p>
                                <p style="color: white !important;">We are preparing students for their next steps in life and the world of work. This means they must be increasingly independent. We have high expectations and pride ourselves in being disciplined, smart and friendly.</p>
                                <p style="color: white !important;">We expect mutual respect, hard work, good manners and a positive attitude from all. We are proud of our school and expect everyone to demonstrate this pride through their actions every day.</p>
                                <p style="color: white !important;">We describe ourselves as <strong>'Much more than just a school'</strong> because we provide opportunities and support that most schools cannot. This ethos continues to drive our actions regarding curriculum and support.</p>
                            </div>
                            <div class="large-5 columns">
                                <div class="highlight-box">
                                    <h4>Our Core Values</h4>
                                    <ul>
                                        <li><strong>Attainment</strong> - Academic excellence</li>
                                        <li><strong>Resilience</strong> - Overcoming challenges</li>
                                        <li><strong>Autonomy</strong> - Independent thinking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Ofsted 2022 Recognition</h3>
                        <div class="row">
                            <div class="large-6 columns">
                                <div class="ofsted-quote"><blockquote><p><strong>"Staff want the very best for all pupils."</strong> Staff know individual pupils well and work tirelessly to help them overcome any difficulties they face.</p></blockquote></div>
                                <div class="ofsted-quote"><blockquote><p><strong>"Pupils are reading regularly"</strong> in school and for pleasure.</p></blockquote></div>
                            </div>
                            <div class="large-6 columns">
                                <div class="ofsted-quote"><blockquote><p><strong>"Leaders and governors have an ambitious long-term vision"</strong> for the school and its local community. All decisions are guided by what is in the best interest of pupils. Staff share this vision and are proud to work at the school.</p></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Much More Than Just A School</h3>
                        <div class="row">
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <i class="fas fa-graduation-cap feature-icon"></i>
                                    <h4>Academic Excellence</h4>
                                    <p>High expectations and outstanding teaching ensure every student reaches their potential.</p>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <i class="fas fa-users feature-icon"></i>
                                    <h4>Community Focus</h4>
                                    <p>Strong partnerships with families and local organizations enrich our students' experiences.</p>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <i class="fas fa-star feature-icon"></i>
                                    <h4>Exceptional Opportunities</h4>
                                    <p>From theatre to sports, from enterprise to community service - we offer it all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-indicators">
                    <span class="indicator active" onclick="goToSlide(0)"></span>
                    <span class="indicator" onclick="goToSlide(1)"></span>
                    <span class="indicator" onclick="goToSlide(2)"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<section class="grey-bg">
    <div class="row">
        <div class="large-12 columns">
            <br>
            <ul class="text-center medium-block-grid-2 small-block-grid-1">
                <h4 class="extra-mile-heading">Going The Extra Mile</h4>
                <li><div class="menu-box"><a href="/Connect4Families.php"><img src="assets/connect4families/2023-07/connect4families-logo.png" alt="Connect4Families"><img src="assets/connect4families/2023-07/connect4youth-logo.png" alt="Connect4Youth"><p>Connect4</p></a></div></li>
                <li><div class="menu-box"><a href="/munch.php"><img src="images/index/munch.jpg" alt="MUNCH"><p>MUNCH</p></a></div></li>
                <li><div class="menu-box"><a href="/tearooms.php"><img src="images/index/tearooms.jpg" alt="Tea Rooms at The Coach House"><p>Tea Rooms at The Coach House</p></a></div></li>
                <li><div class="menu-box"><a href="https://nursery.pcs.hants.sch.uk"><img src="images/logo/parkcommunitynursery-logo.png" alt="Park Community Nursery"><p>Park Community Nursery</p></a></div></li>
            </ul>
            
            <ul class="text-center medium-block-grid-5 small-block-grid-2">
                <li><div class="menu-box"><a href="/race-at-our-place.php"><img src="images/index/cancer_research.jpg" alt="Park Community Race at Our Place"><p>Race at Our Place</p></a></div></li>
                <li><div class="menu-box"><a href="/greenpower.php"><img src="images/index/greenpower.jpg" alt="Park Community Greenpower"><p>Greenpower</p></a></div></li>
                <li><div class="menu-box"><a href="/marketgarden.php"><img src="images/index/farm.jpg" alt="Park Community Market Garden"><p>Market Garden</p></a></div></li>
                <li><div class="menu-box"><a href="/apex-centre.php"><img src="images/index/apex.jpg" alt="The Apex Centre"><p>The Apex Centre</p></a></div></li>
                <li><div class="menu-box"><a href="/ventures.php"><img src="images/index/charity.jpg" alt="Park Community Ventures"><p>Charity</p></a></div></li>
            </ul>
            
            <ul class="text-center medium-block-grid-3 small-block-grid-2">
                <h4>In-house Services</h4>
                <li><div class="menu-box"><a href="/dickinson-centre.php"><img src="images/index/dickinson-centre.jpg" alt="Park Community Dickinson Centre"><p>Dickinson Centre</p></a></div></li>
                <li><div class="menu-box"><a href="/community-services.php"><img src="images/index/community.jpg" alt="Park Community"><p>Community &amp; Services</p></a></div></li>
                <li><div class="menu-box"><a href="/design-print.php"><img src="images/index/unit.jpg" alt="Park Community Enterprises"><p>Park Design &amp; Print</p></a></div></li>
                <li><div class="menu-box"><a href="/suite.php"><img src="images/index/sontronics.jpg" alt="The Suite"><p>The Suite</p></a></div></li>
                <li><div class="menu-box"><a href="/theatre.php"><img src="images/index/theatre.jpg" alt="Theatre Spaces for Hire"><p>Theatre Hire</p></a></div></li>
                <li><div class="menu-box"><a href="/catering.php#parkcatering"><img src="images/index/park_catering.png" alt="Park Catering Services"><p>Park Catering Services</p></a></div></li>
            </ul>
            <br>
        </div>
    </div>
    <br>
</section>

<section id="meet-the-team" style="background-color: #333333; color: #ffffff; text-align: center;">
    <div class="row">
        <div class="large-12 columns">
            <h3 style="color: #ffffff;">Leadership Team</h3>
            <br>
            <div class="medium-4 columns text-center team-member-container">
                <img src="images/slt/c-anders.jpg" alt="" class="team-member">
                <p>Mr C Anders</p>
                <p class="subheader" style="color: #ffffff;">Headteacher</p>
            </div>
            <div class="medium-4 small-6 columns text-center team-member-container">
                <img src="images/slt/e-capaldi.jpg" alt="" class="team-member">
                <p>Mrs E Capaldi</p>
                <p class="subheader" style="color: #ffffff;">Head of School</p>
            </div>
        </div>
    </div>
    <br><br>
</section>

<section id="contact-section">
    <div class="row">
        <div class="large-12 columns">
            <h3>Contact Us</h3>
            <div class="row">
                <div class="large-12 columns">
                    <div class="contact-info">
                        <div class="contact-content">
                            <div class="contact-item"><i class="fas fa-map-marker-alt"></i><span>Park Community School, Middle Park Way, Havant, Hampshire, PO9 4BU</span></div>
                            <div class="contact-item"><i class="fas fa-phone"></i><a href="tel:02392489800">02392 489 800</a></div>
                            <div class="contact-item"><i class="fas fa-envelope"></i><a href="mailto:info@pcs.hants.sch.uk">info@pcs.hants.sch.uk</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #333333; color: #ffffff;">
    <?php include("includes/footer.html"); ?>
</section>

<script src="js/vendor/libraries.min.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/app.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
// Slideshow
let currentSlide = 0;
const totalSlides = 3;
let autoTimer;

function showSlide(n) {
    const slides = document.querySelectorAll('.slide-content');
    const indicators = document.querySelectorAll('.indicator');
    slides.forEach(s => s.classList.remove('active'));
    indicators.forEach(i => i.classList.remove('active'));
    if (slides[n]) slides[n].classList.add('active');
    if (indicators[n]) indicators[n].classList.add('active');
    currentSlide = n;
    startTimer();
}

function changeSlide(dir) {
    currentSlide = (currentSlide + dir + totalSlides) % totalSlides;
    showSlide(currentSlide);
}

function goToSlide(n) { if (n >= 0 && n < totalSlides) showSlide(n); }

function startTimer() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => changeSlide(1), 30000);
}

// Mobile Navigation
function initMobileNav() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    if (!toggle || !menu) return;

    toggle.addEventListener('click', function(e) {
        e.stopPropagation();
        menu.classList.toggle('open');
        toggle.textContent = menu.classList.contains('open') ? '✕' : '☰';
    });

    document.querySelectorAll('.mobile-dropdown-toggle').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const content = this.nextElementSibling;
            const arrow = this.querySelector('.mobile-arrow');
            content.classList.toggle('open');
            arrow.textContent = content.classList.contains('open') ? '▲' : '▼';
        });
    });

    document.addEventListener('click', function(e) {
        if (!toggle.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove('open');
            toggle.textContent = '☰';
        }
    });
}

// Touch swipe for slideshow
function initTouchSwipe() {
    const slideshow = document.querySelector('.comprehensive-slideshow');
    if (!slideshow) return;
    let startX = null, startY = null;

    slideshow.addEventListener('touchstart', e => { startX = e.touches[0].clientX; startY = e.touches[0].clientY; });
    slideshow.addEventListener('touchend', e => {
        if (!startX || !startY) return;
        const diffX = startX - e.changedTouches[0].clientX;
        const diffY = startY - e.changedTouches[0].clientY;
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
            changeSlide(diffX > 0 ? 1 : -1);
        }
        startX = startY = null;
    });

    slideshow.addEventListener('mouseenter', () => clearInterval(autoTimer));
    slideshow.addEventListener('mouseleave', startTimer);
}

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    showSlide(0);
    initMobileNav();
    initTouchSwipe();
});

// Keyboard navigation
document.addEventListener('keydown', e => {
    if (e.which === 37) changeSlide(-1);
    else if (e.which === 39) changeSlide(1);
});

// jQuery enhancements
$(document).ready(function() {
    $('.menu-box').hover(function() { $(this).find('img').css('transform', 'scale(1.05)'); }, function() { $(this).find('img').css('transform', 'scale(1)'); });
    $('a[href^="#"]').on('click', function(e) { var t = $(this.getAttribute('href')); if (t.length) { e.preventDefault(); $('html, body').animate({ scrollTop: t.offset().top - 80 }, 800); } });
    $('.menu-box img').each(function(i) { $(this).delay(i * 100).animate({opacity: 1}, 600); });
    $('.button').hover(function() { $(this).css('transform', 'translateY(-3px)'); }, function() { $(this).css('transform', 'translateY(0)'); });
});
</script>
</body>
</html>