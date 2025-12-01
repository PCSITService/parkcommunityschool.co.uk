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
    <?php if ($showCaptcha): ?><script src="https://www.google.com/recaptcha/api.js" async defer></script><?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        /* Variables */
        :root { --green: #a3cd41; --orange: #f08a24; --blue: #3498db; --dark: #333; --light: #f8f9fa; --text: #2d3748; --radius: 12px; --trans: all 0.3s ease; --shadow: 0 4px 6px -1px rgba(0,0,0,0.1); --shadow-md: 0 10px 15px -3px rgba(0,0,0,0.1); }
        
        /* Base */
        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; line-height: 1.6; color: var(--text); margin: 0; }
        .page-base { background: linear-gradient(135deg, #f8fafc, #e2e8f0); min-height: 100vh; }
        section { padding: 0; background: var(--dark); }
        section .large-12.columns { background: transparent; }
        footer { background: var(--dark) !important; margin: 0; padding: 0; }

        /* Mobile Nav - Hidden Desktop */
        .mobile-nav { display: none; background: var(--dark); color: #fff; position: relative; }
        .mobile-nav-header { padding: 1rem; display: flex; justify-content: space-between; align-items: center; }
        .mobile-nav-header img { height: 40px; }
        #mobile-menu-toggle { background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer; padding: 0.5rem; }
        #mobile-menu { display: none; background: rgba(0,0,0,0.95); position: absolute; top: 100%; left: 0; right: 0; z-index: 1000; max-height: 80vh; overflow-y: auto; }
        #mobile-menu.open { display: block; }
        .mobile-dropdown-toggle { width: 100%; text-align: left; background: none; border: none; color: #fff; padding: 0.75rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); font-weight: 600; display: flex; justify-content: space-between; align-items: center; cursor: pointer; }
        .mobile-dropdown-content { display: none; background: #444; }
        .mobile-dropdown-content.open { display: block; }
        .mobile-dropdown-content a { display: block; color: #fff; text-decoration: none; padding: 0.5rem 1rem 0.5rem 2rem; border-left: 3px solid var(--green); }
        .mobile-dropdown-content a:hover { background: #555; }
        .mobile-nav-link { display: block; color: #fff; text-decoration: none; padding: 0.75rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); font-weight: 500; }
        .desktop-nav { display: block; }

        /* Hero */
        #homepage-hero { background: linear-gradient(135deg, #7dd3fc, #38bdf8, #0ea5e9); color: #fff; padding: 4rem 0; position: relative; overflow: hidden; }
        #homepage-hero::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.1); backdrop-filter: blur(1px); }
        #homepage-hero > .row { position: relative; z-index: 2; display: flex; flex-wrap: nowrap; align-items: center; }
        #homepage-hero > .row > .medium-5 { width: 41.66667%; flex: 0 0 41.66667%; }
        #homepage-hero > .row > .medium-7 { width: 58.33333%; flex: 0 0 58.33333%; }
        #homepage-hero > .row > .medium-5 svg { max-width: 100%; height: auto; }
        #homepage-hero p { background: rgba(255,255,255,0.15); padding: 1.5rem; border-radius: var(--radius); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem; }

        /* Buttons */
        .button { border-radius: 25px !important; font-weight: 600; transition: var(--trans); display: inline-flex; align-items: center; justify-content: center; margin: 0.25rem; padding: 0.75rem 1.25rem; border: none; cursor: pointer; text-align: center; box-shadow: var(--shadow); min-width: 160px; white-space: normal; line-height: 1.3; }
        .button:hover { transform: translateY(-2px); box-shadow: var(--shadow-md); }
        .button.expand { min-width: 220px; padding: 1rem 2rem; font-size: 1.1rem; }
        .button.success { background: var(--green); color: #fff; }
        .button.success:hover { background: #8fb332; }
        .button.warning { background: var(--orange); color: #fff; }
        .button.warning:hover { background: #e07520; }
        .button:focus, .menu-box:focus, a:focus { outline: 3px solid var(--green); outline-offset: 2px; }
        nav a:focus, .top-bar a:focus, .top-bar-section a:focus, .dropdown a:focus, [class*="nav"] a:focus { outline: none; }

        /* Desktop Button Layout - only affects buttons inside the button container */
        .small-text-center.large-text-right > .button.expand { width: 100%; margin: 0 0 1rem 0; display: block; text-align: center; }
        .small-text-center.large-text-right > .row { display: flex; gap: 0.5rem; margin-bottom: 1rem; }
        .small-text-center.large-text-right > .row > .columns { flex: 1; padding: 0; margin: 0; }
        .small-text-center.large-text-right > .row .button { width: 100%; margin: 0; padding: 0.75rem 0.5rem; font-size: 0.85rem; line-height: 1.3; font-weight: 600; display: block; min-height: 3rem; }

        /* Modal */
        .reveal-modal { border-radius: var(--radius); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); border: none; max-width: 90vw; max-height: 90vh; overflow-y: auto; }
        .reveal-modal h2 { color: var(--text); border-bottom: 3px solid var(--green); padding-bottom: 1rem; margin-bottom: 1.5rem; }
        .close-reveal-modal { font-size: 2rem; font-weight: bold; color: #999; transition: var(--trans); }
        .close-reveal-modal:hover { color: #333; transform: scale(1.1); }

        /* Sections */
        .grey-bg { padding: 3rem 0; background: var(--light); position: relative; }
        .grey-bg::before { content: ''; position: absolute; inset: 0; background: linear-gradient(135deg, rgba(163,205,65,0.05), rgba(79,209,199,0.05)); }
        .grey-bg > .row { position: relative; z-index: 2; }
        #meet-the-team { padding: 3rem 0; background: linear-gradient(135deg, var(--dark), #2d3748); color: #fff; position: relative; overflow: hidden; }
        #meet-the-team::before { content: ''; position: absolute; inset: 0; background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.05)"><polygon points="1000,100 1000,0 0,100"/></svg>'); background-size: cover; }

        /* Contact */
        #contact-section { background: linear-gradient(135deg, var(--green), #68d391); color: #fff; padding: 2.5rem 0; position: relative; overflow: hidden; }
        #contact-section::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.1); }
        #contact-section .row { position: relative; z-index: 2; }
        #contact-section h3 { color: #fff; font-size: 2rem; text-align: center; margin-bottom: 2rem; font-weight: 700; }
        #contact-section h3::after { content: ''; display: block; width: 60px; height: 3px; background: #fff; margin: 1rem auto; border-radius: 2px; }
        .contact-info { background: rgba(255,255,255,0.15); padding: 1.5rem 2rem; border-radius: var(--radius); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); text-align: center; width: 100%; }
        .contact-content { display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 1.5rem; }
        .contact-item { display: flex; align-items: center; justify-content: center; gap: 0.5rem; flex: 1; min-width: 200px; }
        .contact-item i { font-size: 1.3rem; color: var(--orange); width: 25px; text-align: center; }
        .contact-item span, .contact-item a { color: #fff; font-size: 1.05rem; line-height: 1.4; }
        .contact-item a { text-decoration: none; transition: var(--trans); }
        .contact-item a:hover { color: var(--orange); text-decoration: underline; }

        /* Video Buttons */
        .video-buttons-top { padding: 1.5rem 0; background: var(--dark); }
        .video-buttons-top .row { display: flex; justify-content: center; align-items: stretch; gap: 0.5rem; flex-wrap: wrap; }
        .video-buttons-top .columns { flex: 1; text-align: center; max-width: 210px; min-width: 130px; }
        .video-btn-top { background: var(--blue) !important; color: #fff !important; border: none !important; padding: 0.6rem 0.5rem !important; font-size: 0.75rem !important; width: 100% !important; transition: var(--trans); border-radius: 25px !important; font-weight: 600; display: flex; align-items: center; justify-content: center; white-space: nowrap !important; min-height: 44px; }
        .video-btn-top:hover { background: #2980b9 !important; transform: translateY(-2px); box-shadow: var(--shadow-md); text-decoration: none; }
        .video-btn-top i { margin-right: 0.35rem; font-size: 0.7rem; }

        /* Slideshow */
        .comprehensive-slideshow { background: var(--dark) !important; border-radius: var(--radius); margin: 2rem 0; position: relative; overflow: hidden; box-shadow: var(--shadow-md); }
        .comprehensive-slideshow * { box-sizing: border-box; }
        .slide-content { display: none !important; padding: 0; min-height: 550px; background: var(--dark) !important; }
        .slide-content.active { display: block !important; }
        .slide-inner { padding: 2.5rem 3rem; display: flex; flex-direction: column; justify-content: flex-start; background: var(--dark) !important; }
        .slide-inner .row, .slide-inner .columns { background: transparent !important; }
        .slide-inner h3 { color: var(--green); font-size: 2.2rem; font-weight: 700; margin-bottom: 2rem; text-align: center; }
        .slide-inner h3::after { content: ''; display: block; width: 60px; height: 3px; background: var(--orange); margin: 1rem auto; border-radius: 2px; }
        .slide-inner p { font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem; color: #fff; }
        .slide-inner .white-text p { color: #fff !important; }
        .slide-indicators { display: flex; justify-content: center; padding: 1.5rem; background: var(--dark); gap: 0.5rem; border-radius: 0 0 var(--radius) var(--radius); }
        .indicator { width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.3); cursor: pointer; transition: var(--trans); border: 2px solid transparent; }
        .indicator.active { background: var(--green); }
        .indicator:hover { background: var(--orange); }

        /* Highlight/Values Box */
        .highlight-box, .values-box { background: linear-gradient(135deg, var(--green), #68d391); color: #fff; padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow); }
        .highlight-box h4, .values-box h4 { color: #fff; margin-bottom: 1.5rem; font-size: 1.3rem; }
        .highlight-box ul, .values-box ul { list-style: none; padding: 0; }
        .highlight-box li, .values-box li { margin-bottom: 1rem; padding-left: 1.5rem; position: relative; color: #fff; }
        .highlight-box li::before, .values-box li::before { content: '✓'; position: absolute; left: 0; font-weight: bold; color: #ffd700; }

        /* Ofsted Quote */
        .ofsted-quote { margin-bottom: 2rem; }
        .ofsted-quote blockquote { background: rgba(255,255,255,0.1); border-left: 4px solid var(--green); padding: 1.5rem; margin: 0; border-radius: 0 var(--radius) var(--radius) 0; font-style: italic; }
        .ofsted-quote blockquote p { margin: 0; font-size: 1.1rem; color: #fff; }

        /* Feature Box */
        .feature-box { text-align: center; padding: 2rem 1rem; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center; }
        .feature-icon { font-size: 3rem; color: var(--green); margin-bottom: 1rem; }
        .feature-box h4, .feature-box p { color: #fff; }
        .feature-box h4 { font-size: 1.3rem; margin-bottom: 1rem; text-align: center; }
        .feature-box p { font-size: 1rem; line-height: 1.6; }

        /* Headings */
        h3, h4 { color: var(--text); font-weight: 700; margin-bottom: 2rem; }
        h3 { font-size: 2.5rem; text-align: center; }
        h3::after { content: ''; display: block; width: 80px; height: 4px; background: linear-gradient(90deg, var(--green), var(--orange)); margin: 1rem auto; border-radius: 2px; }
        h4 { font-size: 1.8rem; text-align: center; margin-bottom: 3rem; color: #4a5568; }
        .extra-mile-heading { color: #000 !important; font-size: 2.5rem; text-align: center; margin-bottom: 3rem; font-weight: 700; }

        /* Menu Box */
        .medium-block-grid-2 > li, .medium-block-grid-3 > li, .medium-block-grid-5 > li { margin-bottom: 2rem; }
        .menu-box { background: #fff; border-radius: var(--radius); padding: 1.5rem; transition: var(--trans); box-shadow: var(--shadow); border: 2px solid transparent; height: 100%; min-height: 220px; display: flex; flex-direction: column; align-items: center; text-align: center; justify-content: space-between; }
        .menu-box:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); border-color: var(--green); }
        .menu-box img { border-radius: 8px; transition: var(--trans); max-width: 100%; opacity: 0; animation: fadeIn 0.6s ease forwards; }
        .menu-box img[src*="parkcommunitynursery-logo"] { width: 100% !important; height: 282px !important; object-fit: contain !important; }
        .menu-box:hover img { transform: scale(1.05); }
        .menu-box p { margin: 1rem 0 0; font-weight: 600; color: var(--text); }
        @keyframes fadeIn { to { opacity: 1; } }

        /* Team */
        .team-member { border-radius: 50%; border: 4px solid var(--green); transition: var(--trans); width: 150px; height: 150px; object-fit: cover; }
        .team-member:hover { transform: scale(1.1); border-color: var(--orange); }
        .team-member-container { transition: var(--trans); }
        .team-member-container:hover { transform: translateY(-10px); }

        /* ========== MOBILE (max-width: 768px) ========== */
        @media (max-width: 768px) {
            .mobile-nav { display: block; }
            .desktop-nav { display: none; }
            #homepage-hero { padding: 2rem 1rem; }
            #homepage-hero > .row { display: block !important; flex-wrap: wrap !important; }
            #homepage-hero > .row > .medium-5, #homepage-hero > .row > .medium-7 { width: 100% !important; flex: 0 0 100% !important; float: none; display: block !important; }
            #homepage-hero > .row > .medium-5 { text-align: center; margin-bottom: 1.5rem; }
            #homepage-hero > .row > .medium-5 svg { max-width: 100%; width: 100%; height: auto; display: block; }

            /* Buttons - flatten all into single 2-col grid with spacing */
            .small-text-center.large-text-right { max-width: 100%; margin: 0 auto; padding: 0 1.5rem !important; box-sizing: border-box !important; display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 0.6rem 1rem !important; }
            .small-text-center.large-text-right > .button.expand { grid-column: 1 / -1 !important; display: flex !important; align-items: center !important; justify-content: center !important; width: 85% !important; margin: 0 auto !important; padding: 0.75rem 0.5rem !important; font-size: 0.85rem !important; min-height: 2.6rem; box-sizing: border-box !important; order: 0 !important; }
            .small-text-center.large-text-right > .row { display: contents !important; }
            .small-text-center.large-text-right > .row::before,
            .small-text-center.large-text-right > .row::after { display: none !important; content: none !important; clear: none !important; }
            .small-text-center.large-text-right > .row > .columns { margin: 0 !important; padding: 0 !important; float: none !important; min-width: 0 !important; box-sizing: border-box !important; width: auto !important; max-width: none !important; display: flex !important; justify-content: center !important; }
            /* Order all 8 buttons: GCSE(1), Exam(2), Alumni(3), Ofsted(4), Year6(5), Letters(6), Welcome(7), Prospectus(8) */
            .small-text-center.large-text-right > .row:nth-of-type(1) > .columns:nth-child(1) { order: 1 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(1) > .columns:nth-child(2) { order: 2 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(2) > .columns:nth-child(1) { order: 3 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(2) > .columns:nth-child(2) { order: 4 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(2) > .columns:nth-child(3) { order: 5 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(3) > .columns:nth-child(1) { order: 7 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(3) > .columns:nth-child(2) { order: 8 !important; }
            .small-text-center.large-text-right > .row:nth-of-type(3) > .columns:nth-child(3) { order: 6 !important; }
            .small-text-center.large-text-right .button { display: flex !important; align-items: center !important; justify-content: center !important; width: 95% !important; height: 100% !important; margin: 0 auto !important; padding: 0.5rem 0.3rem !important; font-size: 0.62rem !important; min-height: 2.5rem; box-sizing: border-box !important; line-height: 1.15 !important; text-align: center !important; border-radius: 10px !important; }

            /* Video buttons - 2 per row with good spacing */
            .video-buttons-top { padding: 1.25rem 1.5rem !important; }
            .video-buttons-top .row { display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 0.6rem 1rem !important; max-width: 100% !important; margin: 0 auto !important; box-sizing: border-box !important; }
            .video-buttons-top .row::before,
            .video-buttons-top .row::after { display: none !important; content: none !important; }
            .video-buttons-top .columns { margin: 0 !important; padding: 0 !important; float: none !important; width: 100% !important; max-width: 100% !important; min-width: 0 !important; box-sizing: border-box !important; display: flex !important; justify-content: center !important; }
            .video-btn-top { display: flex !important; align-items: center !important; justify-content: center !important; width: 95% !important; height: 100% !important; margin: 0 auto !important; padding: 0.5rem 0.3rem !important; font-size: 0.62rem !important; min-height: 2.5rem; box-sizing: border-box !important; white-space: normal !important; line-height: 1.15 !important; text-align: center !important; }

            /* Slideshow */
            .slide-content { min-height: auto; }
            .slide-inner { padding: 1.5rem; }
            .slide-inner h3 { font-size: 1.8rem; }
            .slide-inner p { font-size: 1rem; }
            .slide-inner .large-7, .slide-inner .large-5, .slide-inner .large-6, .slide-inner .large-4 { width: 100%; float: none; }
            .highlight-box, .values-box { margin-top: 1.5rem; }

            /* Headings */
            h3, .extra-mile-heading { font-size: 1.8rem; text-align: center !important; width: 100% !important; }
            h4 { font-size: 1.4rem; text-align: center !important; width: 100% !important; }
            ul.medium-block-grid-2 > h4, ul.medium-block-grid-3 > h4, ul.medium-block-grid-5 > h4, ul h4.extra-mile-heading, .grey-bg h4, h4.extra-mile-heading { display: block !important; grid-column: 1 / -1 !important; text-align: center !important; width: 100% !important; margin: 0 auto 1.5rem !important; padding: 0 1rem !important; }

            /* Menu boxes - 2 column grid */
            .medium-block-grid-2, .medium-block-grid-3, .medium-block-grid-5 { display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 0.75rem !important; padding: 0 1rem !important; margin: 0 !important; list-style: none !important; }
            .medium-block-grid-2 > li, .medium-block-grid-3 > li, .medium-block-grid-5 > li { display: block !important; width: 100% !important; margin: 0 !important; padding: 0 !important; list-style: none !important; float: none !important; }
            .menu-box { min-height: 140px !important; height: 100% !important; padding: 1rem !important; display: flex !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; }
            .menu-box img { max-height: 60px !important; width: auto !important; object-fit: contain !important; }
            .menu-box img[src*="parkcommunitynursery-logo"] { height: 80px !important; max-height: 80px !important; }
            .menu-box p { font-size: 0.8rem !important; margin-top: 0.5rem !important; text-align: center !important; line-height: 1.2 !important; }

            /* Team */
            .team-member { width: 100px; height: 100px; }
            #meet-the-team .medium-4 { width: 50%; float: left; }

            /* Contact */
            #contact-section { padding: 2rem 1rem !important; }
            #contact-section .row { margin: 0 auto !important; padding: 0 !important; max-width: 100% !important; width: 100% !important; }
            #contact-section .columns, #contact-section .large-12, #contact-section .large-12.columns { padding: 0 !important; margin: 0 !important; width: 100% !important; float: none !important; }
            #contact-section h3 { font-size: 1.6rem; }
            .contact-content { flex-direction: column; gap: 1rem; align-items: center; }
            .contact-item { min-width: auto; flex: none; justify-content: center !important; width: 100%; text-align: center; }
            .contact-info { padding: 1.5rem 1rem !important; text-align: center; margin: 0 auto !important; max-width: 100% !important; width: 100% !important; box-sizing: border-box !important; }

            .grey-bg { padding: 2rem 0; }
            .grey-bg .large-12 { padding: 0; }
        }

        /* Small mobile */
        @media (max-width: 480px) {
            .medium-block-grid-5 { grid-template-columns: 1fr 1fr; }
            #meet-the-team .medium-4 { width: 100%; float: none; margin-bottom: 1.5rem; }
            .slide-inner h3 { font-size: 1.5rem; }
        }

        /* Tablet */
        @media (min-width: 769px) and (max-width: 1024px) {
            .video-buttons-top .columns { min-width: 140px; max-width: 200px; }
            .video-btn-top { font-size: 0.8rem !important; padding: 0.6rem 0.8rem !important; }
        }

        /* Touch devices */
        @media (hover: none) and (pointer: coarse) {
            .button, .video-btn-top, .menu-box a { min-height: 44px; }
            .indicator { width: 16px; height: 16px; }
        }

        /* Reduced motion */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
        }

        /* Print */
        @media print {
            #homepage-hero { background: #fff !important; color: #000 !important; }
            .button { border: 2px solid var(--green) !important; background: #fff !important; color: var(--green) !important; }
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
    <?php include("includes/topnav.html"); ?>
</div>

<!-- HERO SECTION -->
<section id="homepage-hero">
    <div class="row">
        <div class="medium-5 columns">
            <svg viewBox="0 0 3653.7 2200" xmlns="http://www.w3.org/2000/svg" style="max-width: 100%; height: auto;">
                <title>Much more than just a school</title>
                <!-- School text -->
                <g transform="translate(0, 600)">
                    <path d="M2256.5,1965.7c-1.7-8.3-5.1-14.6-9.9-18.8s-11.1-6.3-18.8-6.3c-8.2,0-14.8,2.3-20,7s-7.7,10.8-7.7,18.3c0,7.1,3.2,12.9,9.6,17.2s18.8,9.3,37,14.9q46.65,14.4,66.8,35.7,19.8,21.45,19.8,56.8,0,44.55-29.5,72.9c-19.6,18.9-44.9,28.3-75.6,28.3q-46.65,0-77.1-28.6t-32.5-74.7h73c2.1,12.5,6.3,22,12.8,28.6s14.8,9.8,25,9.8q14.55,0,24-8.1c6.3-5.4,9.4-12.3,9.4-20.9,0-9.2-2.8-16.3-8.5-21.4s-16.8-10.1-33.1-15.1c-32.9-10.1-56.5-22.2-70.7-36.5q-21.15-21.15-21.1-55.8,0-41.25,28.2-67.3t72.3-26.1q38.55,0,66.3,25.8,27.6,25.8,30,64.1h-69.7Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2678.5,2085.4q-14.85,48.45-55.1,77.4t-92.7,28.9q-65.25,0-110.9-46T2374,2034q0-65.7,45.8-112t110.9-46.3q53,0,93.6,29.3t55.8,78.4h-79.3c-6.8-13.9-16.2-24.5-28.3-31.8s-26.3-11-42.6-11q-35.25,0-59.8,26.6t-24.6,64.7q0,40.35,25.3,67.7c16.9,18.2,37.7,27.2,62.6,27.2a71,71,0,0,0,38.5-11.2,75.55,75.55,0,0,0,27.5-30.2h79.1Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2735.6,1786.8h71.2v119.7c22.1-20.9,47.8-31.1,77.2-30.8q52.35,0,83.3,35.5t30.9,96v174.7H2927V2022.8q0-40.35-15-61.4t-43.9-21c-20.5,0-35.9,7.1-46,21.4s-15.3,35.6-15.3,64.1v155.9h-71.2Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M3097.1,2145.7q-46-46-46-111.7t46-112q46-46.35,111.5-46.3,65.7,0,111.7,46.3t46,112q0,65.7-46,111.7t-111.7,46Q3143,2191.7,3097.1,2145.7Zm173-45.5q24.75-26.55,24.8-66.2t-24.8-66.5q-24.75-26.85-61.5-26.9c-24.3,0-44.8,9-61.3,26.9s-24.8,40.1-24.8,66.5,8.3,48.5,24.8,66.2,36.9,26.6,61.3,26.6S3253.6,2118,3270.1,2100.2Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M3449.6,2145.7q-46-46-46-111.7t46-112q46-46.35,111.5-46.3,65.7,0,111.7,46.3t46,112q0,65.7-46,111.7t-111.7,46Q3495.55,2191.7,3449.6,2145.7Zm173-45.5q24.75-26.55,24.8-66.2t-24.8-66.5q-24.75-26.85-61.5-26.9c-24.3,0-44.8,9-61.3,26.9s-24.8,40.1-24.8,66.5,8.3,48.5,24.8,66.2,36.9,26.6,61.3,26.6S3606.1,2118,3622.6,2100.2Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M3771.7,1786.8h71.2v395h-71.2Z" transform="translate(-189.2 -832.3)"/>
                </g>
                <!-- Just text -->
                <g transform="translate(0, 600)">
                    <path d="M1149.5,1895.5h46.6v182.7q0,38.25-18.6,57.6-16.35,17.1-47.3,19.1v-46.5c7.3,0,12.3-2.1,15.1-6.3s4.2-12.2,4.2-23.9V1895.5Zm.1-64.7h46.7v42.7h-46.7Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M1286.5,1999.3c0,17.8,3.3,31.3,9.9,40.6s16.3,13.9,29.1,13.9c13.6,0,23.7-4.7,30.5-14s10.2-23.4,10.2-42V1895.6h46.6v194.1h-43.4v-17.3c-14.7,15.8-32.8,23.8-54.3,23.8q-34.5,0-54.9-23.3c-13.6-15.6-20.3-36.6-20.3-63.1V1895.6h46.6v103.7Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M1536.4,1948c-1.1-5.5-3.3-9.6-6.5-12.3a18.44,18.44,0,0,0-12.3-4.1c-5.4,0-9.7,1.5-13.1,4.6a15.42,15.42,0,0,0-5,12c0,4.7,2.1,8.4,6.3,11.3s12.3,6.1,24.3,9.7q30.6,9.45,43.8,23.4c8.6,9.3,13,21.8,13,37.3q0,29.25-19.3,47.8c-12.9,12.4-29.4,18.5-49.6,18.5q-30.6,0-50.5-18.7t-21.3-49h47.9c1.4,8.2,4.2,14.4,8.4,18.7s9.7,6.4,16.4,6.4c6.4,0,11.6-1.8,15.7-5.3a17.24,17.24,0,0,0,6.2-13.7c0-6-1.9-10.7-5.6-14s-11-6.6-21.7-9.9c-21.6-6.6-37-14.6-46.4-23.9q-13.8-13.8-13.8-36.6,0-27,18.5-44.1t47.4-17.1c16.9,0,31.3,5.6,43.4,16.9s18.6,25.3,19.7,42h-45.9Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M1630.2,2089.7V1936.6h-22.4v-41h22.4v-65.1h46.7v65.1h28.2v41h-28.2v153.1Z" transform="translate(-189.2 -832.3)"/>
                </g>
                <!-- Much text -->
                <path d="M563.5,1412.5H637v27.2q36.15-38.55,85.6-38.2,54.6,0,91.1,41.7l5.8,6.9,6.4-6.9q38.55-41.7,99.7-41.7,60.6,0,96.1,37.9t35.5,102.8v199.2H978.1V1555.2q0-40.2-16.1-61.1c-10.7-13.9-26.4-20.8-46.9-20.8q-32.85,0-49,23.7c-10.8,15.8-16.3,39.6-16.3,71.2v173.2H770.7V1564.2q0-44.55-16.5-67.8c-11-15.4-27.1-23.2-48.2-23.2s-37.1,7.9-47.7,23.7-15.9,39.6-15.9,71.2v173.2H563.3V1412.5Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1166.5,1701.4q-51.15-51.15-51.1-124.1t51.1-124.4q51.15-51.45,123.8-51.4,72.9,0,124.1,51.4t51.1,124.4q0,73.05-51.1,124.1t-124.1,51.1Q1217.55,1752.5,1166.5,1701.4Zm192.1-50.6q27.45-29.55,27.5-73.5c0-29.3-9.2-54-27.5-73.8s-41.1-29.8-68.3-29.8q-40.5,0-68,29.8t-27.5,73.8c0,29.3,9.2,53.9,27.5,73.5s41,29.5,68,29.5C1317.5,1680.4,1340.2,1670.5,1358.6,1650.8Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1529.4,1412.5H1603v24.9l3.8-5.2q22-30.75,68-30.7h5.2v75.3q-33.3,2.25-51,17.4-20.55,18-20.6,56.8v190.5h-79.1v-329Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1883.5,1752.5q-71.25,0-121.5-51.1t-50.2-124.1q0-73,50.2-124.4t121.5-51.4q71.55,0,121.8,51.4t50.2,124.4a209.23,209.23,0,0,1-2.9,34.7H1796.1a103.18,103.18,0,0,0,22.3,38.8c18,19.7,40.3,29.5,67.2,29.5a92,92,0,0,0,45.6-11.6q20.7-11.55,30.5-31h83.4q-15.9,52.35-59.9,83.5Q1941.1,1752.55,1883.5,1752.5Zm89.5-203.6a98.41,98.41,0,0,0-23.5-45.5q-26.7-29.85-66-29.8-39.45,0-66,29.8a109.79,109.79,0,0,0-23.7,45.5Z" transform="translate(-189.2 -832.3)"/>
                <!-- More text -->
                <path d="M206.1,1017.1h1.2c7.3-14.6,16-26.2,26.1-35a122.73,122.73,0,0,1,30.7-19.8,109.34,109.34,0,0,1,28.9-8.5,168,168,0,0,1,21.3-1.8q29.25,0,53.8,10a115.08,115.08,0,0,1,53.5,46.5,86,86,0,0,1,8.8,20.7h1.2a161.79,161.79,0,0,1,7.3-16.7c3.2-6.7,8.3-13.7,15.2-21a114.77,114.77,0,0,1,41.6-29.2,132.56,132.56,0,0,1,52-10.3c19.5,0,36.5,2.8,51.1,8.5s27,13.6,37.1,23.7q20.1,19.5,28.6,49.9t8.5,67.5v180.6H656V1101.6q0-33.45-7.3-60.8t-25.5-45.6c-17.4-18.2-42.6-27.4-75.4-27.4-14.2,0-29.1,2.9-44.7,8.8a86.74,86.74,0,0,0-38.6,28.3,146.86,146.86,0,0,0-12.8,19.5,89.06,89.06,0,0,0-7.6,20.1,142.23,142.23,0,0,0-3.6,24.6c-.6,9.1-.9,20-.9,32.5v180.6h-17V1101.6a289.69,289.69,0,0,0-.6-33.1,131.78,131.78,0,0,0-4.3-25.2,104.61,104.61,0,0,0-7.6-19.8,143.51,143.51,0,0,0-10.6-17.3q-27.9-36.45-85.1-38.3A82.37,82.37,0,0,0,291,970a130.64,130.64,0,0,0-21.6,7.3,85.78,85.78,0,0,0-18.8,11.2,84,84,0,0,0-14.6,14.6c-8.9,10.1-16.1,22.7-21.6,37.7s-8.2,34.3-8.2,57.8v183.6h-17V959.9h17v57.2Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1036.6,1217.1h-1.2a96.09,96.09,0,0,1-21,32.8,125.3,125.3,0,0,1-31,23.1,146,146,0,0,1-37.4,13.4,170.59,170.59,0,0,1-40.1,3.6Q844,1290,805,1257.8q-46.8-39.45-46.8-127.7V959.9h17v170.2q0,42,10.6,69.6t28.9,44.1a104.67,104.67,0,0,0,42.6,23.7,176.52,176.52,0,0,0,48.6,6.7q60.75-.6,95.8-34.7t35-96.7v-183h17V1282h-17v-64.9Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1459.2,1180.6a154.56,154.56,0,0,1-59.6,78.7,170.27,170.27,0,0,1-46.2,22.2,195,195,0,0,1-54.1,8.5,178,178,0,0,1-66-12.2,163.53,163.53,0,0,1-53.8-34.4,160.36,160.36,0,0,1-36.5-53.5q-13.35-31.35-13.4-69v.6a174.42,174.42,0,0,1,12.8-66.9,164.86,164.86,0,0,1,35.3-53.8,162.21,162.21,0,0,1,53.8-35.9q31.35-13.05,67.8-13.1a176.74,176.74,0,0,1,48.9,7,172.11,172.11,0,0,1,46.2,21,163.66,163.66,0,0,1,38.6,35c11.3,14,20.3,30.5,26.8,49.6H1441q-9.15-26.7-25.5-45.3a147.78,147.78,0,0,0-76.6-46.5,173.25,173.25,0,0,0-38.9-4.9c-22.7.4-42.4,4-59,10.6s-33.2,17.5-49.9,32.5q-19.5,17.7-31.9,47.4a160.82,160.82,0,0,0-12.5,62.6c0,22.7,4,43.5,12.2,62.3a146.22,146.22,0,0,0,33.1,48.3,154.17,154.17,0,0,0,107.3,42.5c18.2,0,35.1-2.6,50.5-7.9a158.86,158.86,0,0,0,41.3-21,136.08,136.08,0,0,0,30.7-29.8,121.81,121.81,0,0,0,18.5-35h18.9Z" transform="translate(-189.2 -832.3)"/>
                <path d="M1549.8,1021.9h1.2a90.49,90.49,0,0,1,21.3-31,130.37,130.37,0,0,1,31.6-22.2,159.51,159.51,0,0,1,37.4-13.1,163.61,163.61,0,0,1,39.2-3.6q62,0,100.9,32.2,46.8,39.6,46.8,127.7v170.2h-17V1111.9c0-28-3.6-51.2-10.6-69.6s-16.7-33.1-28.9-44.1a107,107,0,0,0-42.6-23.7,176.52,176.52,0,0,0-48.6-6.7q-60.75,1.2-95.8,34.7t-35,94.2v185.4h-17V832.3h17v189.6Z" transform="translate(-189.2 -832.3)"/>
                <!-- Than text -->
                <g transform="translate(0, 600)">
                    <path d="M2162.3,1447.3h10.9v81.9h53v10.1h-53v196.6h-10.9V1539.3h-45.6v-10.1h45.6Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2266.8,1568.9h.8a58.83,58.83,0,0,1,13.6-19.9,80.52,80.52,0,0,1,20.3-14.2,97.57,97.57,0,0,1,24-8.4,102.45,102.45,0,0,1,25.2-2.3q39.75,0,64.7,20.7,30,25.35,30,81.9v109.2h-10.9V1626.7c0-17.9-2.3-32.8-6.8-44.7s-10.7-21.3-18.5-28.3a68.45,68.45,0,0,0-27.3-15.2,112.45,112.45,0,0,0-31.2-4.3q-39,.75-61.4,22.2c-15,14.3-22.4,34.5-22.4,60.5v119H2256V1447.3h10.9v121.6Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2703.6,1735.9h-10.9v-51.5h-.8a102.16,102.16,0,0,1-38.2,41.5q-24.6,15-57.7,15c-16.9,0-32.1-3.1-45.6-9.2a105.75,105.75,0,0,1-34.3-24.2,102.65,102.65,0,0,1-21.4-34.5,114.08,114.08,0,0,1-7.4-40.6,111.73,111.73,0,0,1,7.6-41,105.31,105.31,0,0,1,21.8-34.5,107,107,0,0,1,34.3-24q20.1-9,45-9a110.69,110.69,0,0,1,34.7,5.3,114.14,114.14,0,0,1,28.3,13.5,93,93,0,0,1,20.7,18.5,75.85,75.85,0,0,1,12.3,20.5h.8V1529h10.9v206.9Zm-106.5-5.1a96.27,96.27,0,0,0,39.2-7.8,94.2,94.2,0,0,0,50.5-52.7,102.69,102.69,0,0,0,7-37.8,100,100,0,0,0-7.6-39.2,96.66,96.66,0,0,0-20.7-31.2,94.74,94.74,0,0,0-31-20.5,104.13,104.13,0,0,0-76.6-.2,94.16,94.16,0,0,0-52.1,51.1,100.15,100.15,0,0,0-7.8,40,105.62,105.62,0,0,0,6.2,35.1,97.73,97.73,0,0,0,18.5,31.6,92.74,92.74,0,0,0,30.8,22.8C2566,1727.9,2580.5,1730.8,2597.1,1730.8Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2771.5,1568.9h.8a58.83,58.83,0,0,1,13.6-19.9,80.52,80.52,0,0,1,20.3-14.2,97.57,97.57,0,0,1,24-8.4,102.45,102.45,0,0,1,25.2-2.3q39.75,0,64.7,20.7,30,25.35,30,81.9v109.2h-10.9V1626.7c0-17.9-2.3-32.8-6.8-44.7s-10.7-21.3-18.5-28.3a68.45,68.45,0,0,0-27.3-15.2,112.45,112.45,0,0,0-31.2-4.3q-39,.75-61.4,22.2c-15,14.3-22.4,34.5-22.4,60.5v119h-10.9V1529.2h10.9v39.7Z" transform="translate(-189.2 -832.3)"/>
                    <path d="M2011,2083.7h-10.2v-48.3h-.7a96,96,0,0,1-35.9,39c-15.4,9.4-33.4,14.1-54.2,14.1-15.9,0-30.1-2.9-42.8-8.6a99.1,99.1,0,0,1-32.2-22.7,97,97,0,0,1-20.1-32.4,107.2,107.2,0,0,1-7-38.1,105.93,105.93,0,0,1,7.1-38.4,98.46,98.46,0,0,1,52.7-54.9q18.9-8.4,42.3-8.4a103.61,103.61,0,0,1,32.6,4.9,110.2,110.2,0,0,1,26.5,12.6,86,86,0,0,1,19.4,17.4,72.84,72.84,0,0,1,11.5,19.2h.7v-49.4h10.2v194Zm-99.9-4.8a90.23,90.23,0,0,0,36.8-7.3,88,88,0,0,0,47.4-49.4,96.46,96.46,0,0,0,6.6-35.5,95.38,95.38,0,0,0-7.1-36.8,91.37,91.37,0,0,0-19.4-29.3,87.86,87.86,0,0,0-29.1-19.2,97.11,97.11,0,0,0-71.9-.2,87.94,87.94,0,0,0-48.9,47.9,93.61,93.61,0,0,0-7.3,37.5,97.27,97.27,0,0,0,5.9,32.9,89.31,89.31,0,0,0,17.4,29.6,87.56,87.56,0,0,0,28.9,21.4C1881.9,2076.2,1895.5,2078.9,1911.1,2078.9Z" transform="translate(-189.2 -832.3)"/>
                </g>
            </svg>
        </div>
        <div class="medium-7 columns small-text-center large-text-right">
            <a class="button expand success" data-reveal-id="headteacherModal">Headteacher's Welcome</a>
            <div class="row">
                <div class="columns"><a class="button warning" href="curriculum.php">GCSE Courses 2025-2026</a></div>
                <div class="columns"><a class="button warning" href="exams.php">Exam Information</a></div>
            </div>
            <div class="row">
                <div class="columns"><a class="button warning" href="alumni.php">Alumni</a></div>
                <div class="columns"><a class="button warning" href="ofsted-reports.php">Ofsted Reports 2022</a></div>
                <div class="columns"><a class="button warning" href="admissions.php">Year 6 -> 7 2025</a></div>
            </div>
            <div class="row">
                <div class="columns"><a class="button success" href="about.php">Welcome to Park</a></div>
                <div class="columns"><a class="button success" href="assets/prospectus.pdf" target="_blank">Prospectus</a></div>
                <div class="columns"><a class="button success" href="letters-home.php"><i class="fas fa-envelope"></i> Letters & Newsletters</a></div>
            </div>
        </div>
    </div>
</section>

<!-- HEADTEACHER MODAL -->
<div id="headteacherModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">Welcome to Park Community School</h2>
    <p>At Park Community School, we believe in nurturing the whole student. Our dedicated staff work tirelessly to create an environment where every young person can thrive academically, socially, and emotionally.</p>
    <p>We are proud of our inclusive community where diversity is celebrated, and every student is encouraged to achieve their full potential. Our comprehensive curriculum, combined with extensive extracurricular opportunities, ensures that students develop the skills and confidence they need for future success.</p>
    <p><strong>Mr C Anders</strong><br>Headteacher</p>
    <a class="close-reveal-modal" aria-label="Close">×</a>
</div>

<!-- VIDEO BUTTONS -->
<div class="video-buttons-top">
    <div class="row">
        <div class="columns"><a href="about.php" class="video-btn-top"><i class="fas fa-play-circle"></i> Welcome To Park</a></div>
        <div class="columns"><a href="about.php#belonging" class="video-btn-top"><i class="fas fa-play-circle"></i> Belonging</a></div>
        <div class="columns"><a href="about.php#vision" class="video-btn-top"><i class="fas fa-play-circle"></i> Our Vision</a></div>
        <div class="columns"><a href="jamie-oliver-award.php" class="video-btn-top"><i class="fas fa-play-circle"></i> Jamie Oliver Award</a></div>
        <div class="columns"><a href="itv-news.php" class="video-btn-top"><i class="fas fa-play-circle"></i> ITV News Attendance</a></div>
    </div>
</div>

<!-- SLIDESHOW -->
<section style="background: #333333 !important;">
    <div class="row">
        <div class="large-12 columns" style="padding: 0;">
            <div class="comprehensive-slideshow">
                <!-- Slide 1 -->
                <div class="slide-content active">
                    <div class="slide-inner">
                        <h3>Much More Than Just A School</h3>
                        <div class="row">
                            <div class="large-7 columns white-text">
                                <p>Park Community School is a vibrant learning community where students are inspired to achieve excellence in everything they do. Our state-of-the-art facilities and dedicated staff create the perfect environment for academic and personal growth.</p>
                                <p>With a rich history of success and innovation, we prepare our students for the challenges of the modern world while instilling timeless values of respect, responsibility, and resilience.</p>
                            </div>
                            <div class="large-5 columns">
                                <div class="highlight-box">
                                    <h4>Why Choose Park?</h4>
                                    <ul>
                                        <li>Outstanding pastoral care</li>
                                        <li>Excellent exam results</li>
                                        <li>Wide range of extracurricular activities</li>
                                        <li>Strong community partnerships</li>
                                        <li>Modern facilities</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>What Ofsted Says About Us</h3>
                        <div class="row">
                            <div class="large-6 columns">
                                <div class="ofsted-quote">
                                    <blockquote><p>"Leaders have high expectations for what pupils can achieve. Staff share these expectations."</p></blockquote>
                                </div>
                                <div class="ofsted-quote">
                                    <blockquote><p>"Pupils are happy and safe at school. They are polite and respectful to each other and to adults."</p></blockquote>
                                </div>
                            </div>
                            <div class="large-6 columns">
                                <div class="ofsted-quote">
                                    <blockquote><p>"The curriculum is broad and ambitious. It is designed to give pupils the knowledge they need."</p></blockquote>
                                </div>
                                <div class="ofsted-quote">
                                    <blockquote><p>"Pupils benefit from an extensive range of extra-curricular activities and enrichment opportunities."</p></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Our Core Values</h3>
                        <div class="row">
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-star"></i></div>
                                    <h4>Excellence</h4>
                                    <p>We strive for excellence in everything we do, encouraging all students to reach their full potential.</p>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-heart"></i></div>
                                    <h4>Respect</h4>
                                    <p>We treat everyone with dignity and respect, celebrating diversity and promoting inclusion.</p>
                                </div>
                            </div>
                            <div class="large-4 columns">
                                <div class="feature-box">
                                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                                    <h4>Community</h4>
                                    <p>We are proud of our strong community spirit, working together to support each other's success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <div class="slide-indicators">
                    <span class="indicator active" data-slide="0"></span>
                    <span class="indicator" data-slide="1"></span>
                    <span class="indicator" data-slide="2"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GOING THE EXTRA MILE -->
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
                <li><div class="menu-box"><a href="/community-services.php"><img src="images/index/community.jpg" alt="Park Community"><p>Community & Services</p></a></div></li>
                <li><div class="menu-box"><a href="/design-print.php"><img src="images/index/unit.jpg" alt="Park Community Enterprises"><p>Park Design & Print</p></a></div></li>
                <li><div class="menu-box"><a href="/suite.php"><img src="images/index/sontronics.jpg" alt="The Suite"><p>The Suite</p></a></div></li>
                <li><div class="menu-box"><a href="/theatre.php"><img src="images/index/theatre.jpg" alt="Theatre Spaces for Hire"><p>Theatre Hire</p></a></div></li>
                <li><div class="menu-box"><a href="/catering.php#parkcatering"><img src="images/index/park_catering.png" alt="Park Catering Services"><p>Park Catering Services</p></a></div></li>
            </ul>
            <br>
        </div>
    </div>
    <br>
</section>

<!-- MEET THE TEAM -->
<section id="meet-the-team" style="background-color: #333333; color: #ffffff; text-align: center;">
    <div class="row" style="position: relative; z-index: 2;">
        <div class="large-12 columns">
            <br><br>
            <h3 style="color: #ffffff;">Meet The Team</h3>
        </div>
        <div class="row">
            <div class="medium-4 small-6 columns text-center team-member-container">
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

<!-- CONTACT US -->
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

<!-- FOOTER -->
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
    currentSlide = ((n % totalSlides) + totalSlides) % totalSlides;
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentSlide);
    });
    indicators.forEach((ind, i) => {
        ind.classList.toggle('active', i === currentSlide);
    });
}

function nextSlide() { showSlide(currentSlide + 1); }
function prevSlide() { showSlide(currentSlide - 1); }
function startAuto() { autoTimer = setInterval(nextSlide, 6000); }
function stopAuto() { clearInterval(autoTimer); }

document.addEventListener('DOMContentLoaded', function() {
    // Slideshow indicators
    document.querySelectorAll('.indicator').forEach(ind => {
        ind.addEventListener('click', function() {
            stopAuto();
            showSlide(parseInt(this.dataset.slide));
            startAuto();
        });
    });

    // Touch swipe
    let touchStartX = 0;
    const slideshow = document.querySelector('.comprehensive-slideshow');
    if (slideshow) {
        slideshow.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, {passive: true});
        slideshow.addEventListener('touchend', e => {
            const diff = touchStartX - e.changedTouches[0].screenX;
            if (Math.abs(diff) > 50) {
                stopAuto();
                diff > 0 ? nextSlide() : prevSlide();
                startAuto();
            }
        }, {passive: true});
    }

    startAuto();

    // Mobile menu
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            menuToggle.textContent = mobileMenu.classList.contains('open') ? '✕' : '☰';
        });
    }

    // Mobile dropdowns
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(btn => {
        btn.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const arrow = this.querySelector('.mobile-arrow');
            document.querySelectorAll('.mobile-dropdown-content').forEach(other => {
                if (other !== content) {
                    other.classList.remove('open');
                    other.previousElementSibling.querySelector('.mobile-arrow').textContent = '▼';
                }
            });
            content.classList.toggle('open');
            arrow.textContent = content.classList.contains('open') ? '▲' : '▼';
        });
    });

    // Close menu on outside click
    document.addEventListener('click', e => {
        if (mobileMenu && !e.target.closest('.mobile-nav')) {
            mobileMenu.classList.remove('open');
            if (menuToggle) menuToggle.textContent = '☰';
        }
    });
});

$(document).foundation();
</script>
</body>
</html>