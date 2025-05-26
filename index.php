<?php
// Place this at the very top of your index.php file, before any HTML output
require_once('includes/rate_limiter.php');

// Create instance of rate limiter
$rateLimiter = new RateLimiter();

// Check if visitor has exceeded rate limit
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
    <!-- Add Google reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
    
    <!-- Modern Enhancements -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Modern CSS Variables */
        :root {
            --primary-green: #a3cd41;
            --primary-orange: #f08a24;
            --dark-bg: #333333;
            --light-gray: #f8f9fa;
            --text-dark: #2d3748;
            --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        /* Modern Typography */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* Enhanced Page Base */
        .page-base {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
        }

        /* Modern Header Styling - Light Blue Theme */
        #homepage-hero {
            background: linear-gradient(135deg, #7dd3fc 0%, #38bdf8 50%, #0ea5e9 100%);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        #homepage-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(1px);
        }

        #homepage-hero .row {
            position: relative;
            z-index: 2;
        }

        #homepage-hero p {
            background: rgba(255, 255, 255, 0.15);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        /* Enhanced Buttons */
        .button {
            border-radius: 25px !important;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
            margin: 0.25rem;
            padding: 0.75rem 1.5rem;
            border: none;
            cursor: pointer;
            text-align: center;
            box-shadow: var(--shadow-light);
            min-width: 180px;
            white-space: nowrap;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .button.expand {
            min-width: 220px;
        }

        /* Simple and Reliable Button System */
        .small-text-center.large-text-right {
            width: 100%;
        }

        /* Headteacher's Welcome - Extend more to the left */
        .small-text-center.large-text-right > .button.expand {
            width: calc(100% + 0.5rem);
            margin: 0 0 1rem -0.5rem;
            display: block;
            text-align: center;
        }

        /* Button Rows - Keep buttons together */
        .small-text-center.large-text-right .row {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            width: 100%;
        }

        /* Columns contain the buttons */
        .small-text-center.large-text-right .columns {
            flex: 1;
            padding: 0;
            margin: 0;
        }

        /* Buttons fill their columns */
        .small-text-center.large-text-right .row .button {
            width: 100%;
            margin: 0;
            padding: 0.75rem 0.5rem;
            text-align: center;
            font-size: 0.85rem;
            line-height: 1.3;
            font-weight: 600;
            display: block;
            box-sizing: border-box;
            min-height: 3rem;
        }

        /* Special handling for rightmost buttons to extend further right */
        .small-text-center.large-text-right .row .columns:last-child {
            flex: 1.2;
            margin-right: -0.75rem;
        }

        .small-text-center.large-text-right .row .columns:last-child .button {
            width: calc(100% + 0.75rem);
        }

        /* Specific adjustment for Year 6 -> 7 2025 button (3rd row, last column) */
        .small-text-center.large-text-right .row:nth-child(3) .columns:last-child {
            margin-right: -0.3rem;
        }

        .small-text-center.large-text-right .row:nth-child(3) .columns:last-child .button {
            width: calc(100% + 0.3rem);
        }

        /* Specific adjustment for Letters & Newsletters button (4th row, last column) */
        .small-text-center.large-text-right .row:nth-child(4) .columns:last-child {
            margin-right: -0.4rem;
        }

        .small-text-center.large-text-right .row:nth-child(4) .columns:last-child .button {
            width: calc(100% + 0.4rem);
        }

        .button.success {
            background: var(--primary-green);
            color: white;
        }

        .button.success:hover {
            background: #8fb332;
            color: white;
        }

        .button.warning {
            background: var(--primary-orange);
            color: white;
        }

        .button.warning:hover {
            background: #e07520;
            color: white;
        }

        .button.ofsted {
            background-color: var(--primary-green) !important;
            color: white !important;
        }

        .button.expand {
            padding: 1rem 2rem;
            font-size: 1.1rem;
        }

        /* Enhanced Bounce Animation */
        .bounce {
            animation: modernBounce 2s infinite;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.8);
        }

        @keyframes modernBounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
            60% {
                transform: translateY(-7px);
            }
        }

        /* Modern Modal Styling */
        .reveal-modal {
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-heavy);
            border: none;
            backdrop-filter: blur(10px);
            max-width: 90vw;
            max-height: 90vh;
            overflow-y: auto;
        }

        .reveal-modal h2 {
            color: var(--text-dark);
            border-bottom: 3px solid var(--primary-green);
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .close-reveal-modal {
            font-size: 2rem;
            font-weight: bold;
            color: #999;
            transition: var(--transition);
        }

        .close-reveal-modal:hover {
            color: #333;
            transform: scale(1.1);
        }

        /* Enhanced Notification Bar */
        .page-notification {
            background: linear-gradient(90deg, var(--primary-orange), #fb923c);
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: var(--shadow-light);
        }

        .page-notification a {
            color: white;
            text-decoration: underline;
            font-weight: 600;
        }

        .page-notification a:hover {
            text-decoration: none;
            color: #f7fafc;
        }

        /* Modern Content Sections */
        section {
            padding: 0;
            background: #333333;
        }

        /* Specific padding for other sections that need it */
        .grey-bg {
            padding: 3rem 0;
            background: var(--light-gray);
        }

        #meet-the-team {
            padding: 3rem 0;
        }

        /* Comprehensive Slideshow */
        .comprehensive-slideshow {
            background: transparent;
            border-radius: var(--border-radius);
            box-shadow: none;
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        /* Remove any background differences */
        .slide-nav {
            background: white;
            border-bottom: none;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
        }

        /* Slide Indicators bottom section */
        .slide-indicators {
            display: flex;
            justify-content: center;
            padding: 1.5rem;
            background: white;
            gap: 0.5rem;
        }

        /* Slide Content */
        .slide-content {
            display: none;
            padding: 0;
            min-height: 600px;
            height: 600px;
        }

        .slide-content.active {
            display: block;
        }

        .slide-inner {
            padding: 3rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-sizing: border-box;
        }

        .slide-inner h3 {
            color: var(--primary-green);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }

        .slide-inner h3::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--primary-orange);
            margin: 1rem auto;
            border-radius: 2px;
        }

        .slide-inner p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        /* White text styling for the vision section */
        .slide-inner .white-text p {
            color: white !important;
        }

        /* Highlight Box */
        .highlight-box {
            background: linear-gradient(135deg, var(--primary-green), #68d391);
            color: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
        }

        .highlight-box h4 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }

        .highlight-box ul {
            list-style: none;
            padding: 0;
        }

        .highlight-box li {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            position: relative;
            color: white;
        }

        .highlight-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            font-weight: bold;
            color: #ffd700;
        }

        /* Ofsted Quotes */
        .ofsted-quote {
            margin-bottom: 2rem;
        }

        .ofsted-quote blockquote {
            background: rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--primary-green);
            padding: 1.5rem;
            margin: 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            font-style: italic;
        }

        .ofsted-quote blockquote p {
            margin: 0;
            font-size: 1.1rem;
            color: white;
        }

        /* Video Container Large */
        .video-container-large {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto 2rem;
            height: 0;
            padding-bottom: 45%;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .video-container-large iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-description {
            text-align: center;
            font-style: italic;
            color: white;
            margin-top: 1rem;
        }

        /* Feature Boxes */
        .feature-box {
            text-align: center;
            padding: 2rem 1rem;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 1rem;
        }

        .feature-box h4 {
            color: white;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .feature-box p {
            font-size: 1rem;
            line-height: 1.6;
            color: white;
        }

        /* Simple Slideshow Styles */
        .simple-slideshow {
            position: relative;
            background: linear-gradient(135deg, #333333 0%, #2d3748 100%);
            border-radius: var(--border-radius);
            margin: 2rem 0;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .simple-slide {
            display: none;
            padding: 3rem;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .simple-slide.active {
            display: flex;
        }

        .slide-content-wrapper {
            width: 100%;
        }

        .simple-slide h3 {
            color: var(--primary-green);
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }

        .simple-slide h3::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--primary-orange);
            margin: 1rem auto;
            border-radius: 2px;
        }

        .values-box {
            background: linear-gradient(135deg, var(--primary-green), #68d391);
            color: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
        }

        .values-box h4 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }

        .values-box ul {
            list-style: none;
            padding: 0;
        }

        .values-box li {
            margin-bottom: 1rem;
            padding-left: 1.5rem;
            position: relative;
            color: white;
        }

        .values-box li::before {
            content: '✓';
            position: absolute;
            left: 0;
            font-weight: bold;
            color: #ffd700;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            height: 0;
            padding-bottom: 45%;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .quote-box {
            margin-bottom: 2rem;
        }

        .quote-box blockquote {
            background: rgba(255, 255, 255, 0.1);
            border-left: 4px solid var(--primary-green);
            padding: 1.5rem;
            margin: 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            font-style: italic;
        }

        .quote-box blockquote p {
            margin: 0;
            font-size: 1.1rem;
            color: white;
        }

        .info-box {
            text-align: center;
            padding: 2rem 1rem;
            color: white;
        }

        .info-box h4 {
            color: white;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .info-box p {
            color: white;
            line-height: 1.6;
        }

        .slide-dots {
            text-align: center;
            padding: 2rem;
            background: rgba(0, 0, 0, 0.1);
        }

        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            display: inline-block;
            cursor: pointer;
            transition: var(--transition);
        }

        .dot.active, .dot:hover {
            background-color: var(--primary-green);
        }

        /* Slide Indicators */
        .slide-indicators {
            display: flex;
            justify-content: center;
            padding: 1.5rem;
            background: #f8f9fa;
            gap: 0.5rem;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #dee2e6;
            cursor: pointer;
            transition: var(--transition);
        }

        .indicator.active {
            background: var(--primary-green);
        }

        .indicator:hover {
            background: var(--primary-orange);
        }

        /* Modern Grid Layout */
        .grey-bg {
            background: var(--light-gray);
            position: relative;
        }

        .grey-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(163, 205, 65, 0.05) 0%, rgba(79, 209, 199, 0.05) 100%);
        }

        .grey-bg > .row {
            position: relative;
            z-index: 2;
        }

        /* Enhanced Block Grid */
        .medium-block-grid-2 > li,
        .medium-block-grid-3 > li,
        .medium-block-grid-5 > li {
            margin-bottom: 2rem;
        }

        /* Modern Menu Boxes */
        .menu-box {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            transition: var(--transition);
            box-shadow: var(--shadow-light);
            border: 2px solid transparent;
            height: 100%;
            min-height: 200px; /* Ensure consistent height */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: space-between; /* Distribute content evenly */
        }

        .menu-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--primary-green);
        }

        .menu-box img {
            border-radius: 8px;
            transition: var(--transition);
            max-width: 100%;
            height: auto;
        }

        .menu-box:hover img {
            transform: scale(1.05);
        }

        .menu-box p {
            margin: 1rem 0 0 0;
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Section Headers */
        h3, h4 {
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 2rem;
        }

        h3 {
            font-size: 2.5rem;
            text-align: center;
            position: relative;
        }

        h3::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            margin: 1rem auto;
            border-radius: 2px;
        }

        h4 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #4a5568;
        }

        /* UPDATED STYLING FOR GOING THE EXTRA MILE HEADING */
        .extra-mile-heading {
            color: #000000 !important; /* Black text */
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            font-weight: 700;
        }

        /* Enhanced Team Section */
        #meet-the-team {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #2d3748 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        #meet-the-team::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.05)"><polygon points="1000,100 1000,0 0,100"/></svg>');
            background-size: cover;
        }

        #meet-the-team .row {
            position: relative;
            z-index: 2;
        }

        .team-member {
            border-radius: 50%;
            border: 4px solid var(--primary-green);
            transition: var(--transition);
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .team-member:hover {
            transform: scale(1.1);
            border-color: var(--primary-orange);
        }

        .team-member-container {
            transition: var(--transition);
        }

        .team-member-container:hover {
            transform: translateY(-10px);
        }

        .hr-logo {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            border-radius: 2px;
            margin: 0 auto 2rem;
        }

        .hr-logo.white-bg {
            background: white;
        }

        .hr-logo.grey-bg {
            background: linear-gradient(90deg, #e2e8f0, #cbd5e0);
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            #homepage-hero {
                padding: 2rem 0;
            }

            .small-text-center.large-text-right .row {
                flex-direction: column;
                align-items: stretch;
                gap: 0.5rem;
            }

            .small-text-center.large-text-right .columns {
                flex: none;
                width: 100%;
            }

            .small-text-center.large-text-right .row .button {
                width: 100%;
                margin: 0;
            }

            h3 {
                font-size: 2rem;
            }

            h4 {
                font-size: 1.5rem;
            }

            .extra-mile-heading {
                font-size: 2rem;
            }

            .menu-box {
                margin-bottom: 1rem;
            }

            .team-member {
                width: 120px;
                height: 120px;
            }

            .slide-content {
                min-height: 500px;
                height: auto;
            }

            .slide-inner {
                padding: 2rem;
            }

            .video-container-large {
                padding-bottom: 56.25%;
            }
        }

        /* Enhanced Video Container */
        .flex-video iframe {
            border-radius: 8px;
        }

        /* Loading Animation */
        .menu-box img {
            opacity: 0;
            animation: fadeInImage 0.6s ease forwards;
        }

        @keyframes fadeInImage {
            to {
                opacity: 1;
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Enhanced Focus States */
        .button:focus,
        .menu-box:focus,
        a:focus {
            outline: 3px solid var(--primary-green);
            outline-offset: 2px;
        }

        /* Remove outline from navigation specifically */
        nav a:focus,
        .top-bar a:focus,
        .top-bar-section a:focus,
        .dropdown a:focus,
        [class*="nav"] a:focus,
        .has-dropdown a:focus,
        .top-bar ul a:focus {
            outline: none;
        }

        /* Print Styles */
        @media print {
            #homepage-hero {
                background: white !important;
                color: black !important;
            }
            
            .button {
                border: 2px solid var(--primary-green) !important;
                background: white !important;
                color: var(--primary-green) !important;
            }
        }
    </style>
</head>

<body class="page-base">

<?php 
// Display CAPTCHA overlay if rate limit exceeded
if ($showCaptcha) {
    include("includes/captcha_overlay.php");
}
?>

<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- HEADER SECTION -->
<header id="homepage-hero">
    <div class="row">
        <div class="medium-5 columns">
            <!-- Much More Logo -->
            <?php include( "includes/much_more_logo.html" ) ?>
            <br><br>
        </div>
        <div class="medium-7 columns">
            <div class="small-text-center large-text-right">
                <a class="expand small button radius success" href="#" data-reveal-id="HeadsWelcome">Headteacher's Welcome</a>

                <div class="row">
                    <div class="columns">
                        <a class="small button radius warning long-text" href="assets/curriculum/Options Booklet 2025 PV. V3.pdf" target="_blank">GCSE Courses 2025-2026</a>
                    </div>
                    <div class="columns">
                        <a class="small button radius" href="#" data-reveal-id="exam-information" style="background-color: #f08a24; border-color: #f08a24; color: #ffffff;">Exam Information</a>
                    </div>
                </div>

                <div class="row">
                    <div class="columns">
                        <a class="small button radius warning" href="#" data-reveal-id="alumni">Alumni</a>
                    </div>
                    <div class="columns">
                        <a class="small button radius warning" href="/ofsted-reports.php">Ofsted Reports 2022</a>
                    </div>
                    <div class="columns">
                        <a class="small button radius warning" href="#" data-reveal-id="transition">Year 6 -> 7 2025</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="columns">
                        <a class="small button radius success" href="assets/welcome-to-park-2024.pdf" target="_blank">Welcome to Park</a>
                    </div>
                    <div class="columns">
                        <a class="small button radius success" href="assets/prospectus.pdf" target="_blank">Prospectus</a>
                    </div>
                    <div class="columns">
                        <a class="small button radius success" href="letters-home.php" target="_blank"><i class="fa fa-envelope-open-text"></i> Letters & Newsletters</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="medium-5 columns">
        </div>
            <!-- HEADTEACHERS WELCOME -->
            <div id="HeadsWelcome" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Welcome to Park Community School</h2>
                <p>Our school provides an expansive park environment. Through a wide variety of lessons and other opportunities to learn, we encourage our young people to discover what they love. As well as the school site, we have several other facilities to provide a great curriculum and exciting places in which to learn. We think there are a number of important areas of learning while at school and describe these as attainment, resilience and autonomy; exams and qualifications matter in life along with the ability to cope with adversity, getting up when life knocks us down, as well as becoming independent and able to make good choices.</p>
                <p>Over the last decade we have planned and constructed our new buildings. The fantastic facilities support students' learning and enrich their time in school.</p>
                <p>We have a wonderful theatre, lecture theatre, restaurant, and outdoor areas, including a floodlit STP (synthetic turf pitch) as well as specialist classrooms for a wide range of subjects. Many areas are used by community groups, other organisations and even for children's parties outside school time. The Watering Hole restaurant serves award-winning school meals, prepared by our chefs and their catering team, all at affordable prices. Breakfast is available to all students for free each morning, thank you Magic Breakfast. Our classrooms include the latest large touch-screen technology. We have invested heavily in computers, laptops, iPads and software to allow students to use a comprehensive range of electronic devices to support their learning. Our learning bases away from the school site allow for the development of enterprise skills, teaching towards construction qualifications and finding out about plants and growing food on our small holding.</p>
                <p>I hope that the information on this website gives you some idea of our vision and principles, as well as the facilities, and curriculum that we offer to students. It also includes the details of other activities and opportunities such as our print business, construction skills centre and tearoom. Munch and our pantry are initiatives for the wider community. School should be about finding what you love to do, because each of us is different that doesn't just happen in the classroom; academic learning alongside other activities and lessons helps us to be well-prepared to take the next steps in life. At Park we are proud to be Much More Than Just a School.</p>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="medium-4 columns text-center  team-member-container">
                            <img src="images/slt/c-anders.jpg" alt="" class="team-member">
                            <p>Christopher Anders</p>
                            <p class="subheader">Headteacher</p>
                        </div>
                        <div class="medium-4 small-6 columns text-center  team-member-container">
                            <img src="images/slt/e-capaldi.jpg" alt="" class="team-member">
                            <p>Ella Capaldi</p>
                            <p class="subheader">Head of School</p>
                        </div>
                    </div>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <!-- /HEADTEACHERS WELCOME -->
        </div>
        
    </div>
</header>



<!-- BUTTONS -->
<section>
    <div class="row">
        <div class="columns">
            <br>
 
             <!-- Alumni -->
            <div id="alumni" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Alumni</h2>

                <p>Calling all Ex Park Students!!</p>
                <p>If you were once a student at Park, we would love to know what you are up to now. Please complete the short form to share your journey since leaving Park. We aim to create a range of case studies of ex-students to share with our current cohort in order to inspire them and to see how amazing Park students are. Please share with anyone who used to attend Park. Be part of Parks Alumni!</p>

                <a class="expand button radius success" href="https://docs.google.com/forms/d/e/1FAIpQLScSzx5TU8ICwjJnmkJdsny6v-hM4N40v1IgKwqWOX6l3YwlxA/viewform?usp=sf_link" target="_blank">Let Us Know Form</a>

                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
                       
            <!-- Transition -->
            <div id="transition" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Year 6 Transition Information</h2>

                <p>Here you will find all the information you need to help with your child's transition from Year 6 to Year 7.</p>
                <ul>
                    <li><a href="/assets/freshers.week/2025/Transition 2025 - letter 1 - March 2025.pdf" target="_blank">Transition Letter 1 - March 2025</a></li>
                </ul>

                <a class="expand button radius success" href="https://forms.office.com/e/rWrywTPz9p" target="_blank">Acceptance Form</a>
                     
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            
            <!-- EXAM Information -->
            <div id="exam-information" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Exam Information</h2>

                <p>Here are some useful documents for Year 11 exams and Revision Studies in 2024 - 2025</p>
                    <ul>
                    <li><a href="assets/exam/complete-candidate-examinations-book-2024-2025.pdf" target="_blank">Candidate Handbook for examinations during School Year 2024-25</a></li>
                    <li><a href="assets/exam/Yr 11 MOCK 1 TT FEB-MAR 2025.pdf" target="_blank">Year 11 Mock 2 Timetable 2025</a></li>
                    <li><a href="assets/exam/september-y11-parent-student-eve.pdf" target="_blank">Year 11 Parent and Student | Parents Evening Information</a></li>
                    <li><a href="assets/revision/year -11-phase-1-revision-24-25.pdf" target="_blank">Year 11 Phase 1 Revision 24-25</a></li>
                    <li><a href="assets/revision/Year 11 Phase 2 Revision booklet 24-25.pdf" target="_blank">Year 11 Phase 2 Revision 24-25</a></li>
                    <li><a href="assets/revision/Revision Guide 2024.pdf" target="_blank">Revision Guide</a></li>
                </ul>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>     

        </div>
    </div>
</section>

<!-- CONTENT -->
<section>
    <div class="row">
        <div class="large-12 columns">
            <div class="comprehensive-slideshow">
                
                <!-- Slide 1: Our Vision -->
                <div class="slide-content active">
                    <div class="slide-inner">
                        <h3>Our Vision</h3>
                        <div class="row">
                            <div class="large-8 columns white-text">
                                <p style="color: white !important;"><strong>Park's goal is 'Success for all through attainment, resilience and autonomy'.</strong> This is achieved by supporting each student to ensure they are given the opportunity to succeed.</p>
                                <p style="color: white !important;">We are preparing students for their next steps in life and the world of work. This means they must be increasingly independent. We have high expectations and pride ourselves in being disciplined, smart and friendly.</p>
                                <p style="color: white !important;">We expect mutual respect, hard work, good manners and a positive attitude from all. We are proud of our school and expect everyone to demonstrate this pride through their actions every day.</p>
                                <p style="color: white !important;">We describe ourselves as <strong>'Much more than just a school'</strong> because we provide opportunities and support that most schools cannot. This ethos continues to drive our actions regarding curriculum and support.</p>
                            </div>
                            <div class="large-4 columns">
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
                
                <!-- Slide 2: Welcome to Park Video -->
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Welcome to Park</h3>
                        <div class="video-container-large">
                            <iframe src="https://player.vimeo.com/video/658515057?badge=0&autopause=0&player_id=0&app_id=58479" 
                                    frameborder="0" 
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write" 
                                    title="Welcome to Park">
                            </iframe>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3: Belonging Video -->
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Park Community School - Belonging</h3>
                        <div class="video-container-large">
                            <iframe src="https://player.vimeo.com/video/974947783?badge=0&autopause=0&player_id=0&app_id=58479" 
                                    frameborder="0" 
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write" 
                                    title="Park Community School - Belonging">
                            </iframe>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4: Ofsted 2022 -->
                <div class="slide-content">
                    <div class="slide-inner">
                        <h3>Ofsted 2022 Recognition</h3>
                        <div class="row">
                            <div class="large-6 columns">
                                <div class="ofsted-quote">
                                    <blockquote>
                                        <p><strong>"Staff want the very best for all pupils."</strong> Staff know individual pupils well and work tirelessly to help them overcome any difficulties they face.</p>
                                    </blockquote>
                                </div>
                                <div class="ofsted-quote">
                                    <blockquote>
                                        <p><strong>"Pupils are reading regularly"</strong> in school and for pleasure.</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="large-6 columns">
                                <div class="ofsted-quote">
                                    <blockquote>
                                        <p><strong>"Leaders and governors have an ambitious long-term vision"</strong> for the school and its local community. All decisions are guided by what is in the best interest of pupils. Staff share this vision and are proud to work at the school.</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 5: Overview -->
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
                
            </div>
        </div>
    </div>
</section>
<br>
<section class="grey-bg">
    <div class="row">
        <div class="large-12 columns">
            <br>
<!-- EXTRA MILE -->
            <ul class="text-center medium-block-grid-2 small-block-grid-1">
                <h4 class="extra-mile-heading">Going The Extra Mile</h4>
                <li>
                    <div class="menu-box"><a href="/Connect4Families.php">
                            <img src="assets/connect4families/2023-07/connect4families-logo.png" alt="Connect4Families">
                            <img src="assets/connect4families/2023-07/connect4youth-logo.png" alt="Connect4Youth">
                            <p>Connect4</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/munch.php">
                            <img src="images/index/munch.jpg" alt="MUNCH">
                            <p>MUNCH</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/tearooms.php">
                            <img src="images/index/tearooms.jpg" alt="Tea Rooms at The Coach House">
                            <p>Tea Rooms at The Coach House</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/pantry.php">
                            <img src="images/index/pantry.png" alt="MUNCH Pantry">
                            <p>MUNCH Pantry</p>
                        </a></div>
                </li>
            </ul>
<!-- STUDENT EXTRA -->
            <ul class="text-center medium-block-grid-5 small-block-grid-2">
                <li>
                    <div class="menu-box"><a href="/race-at-our-place.php">
                            <img src="images/index/cancer_research.jpg" alt="Park Community Race at Our Place - Much More Than Just a School">
                            <p>Race at Our Place</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/greenpower.php">
                            <img src="images/index/greenpower.jpg" alt="Park Community Greenpower - Much More Than Just a School">
                            <p>Greenpower</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/marketgarden.php">
                            <img src="images/index/farm.jpg" alt="Park Community Market Garden - Much More Than Just a School">
                            <p>Market Garden</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/apex-centre.php">
                            <img src="images/index/apex.jpg" alt="The Apex Centre - Much More Than Just a School">
                            <p>The Apex Centre</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/ventures.php">
                            <img src="images/index/charity.jpg" alt="Park Community Ventures - Much More Than Just a School">
                            <p>Charity</p>
                        </a></div>
                </li>
            </ul>
<!-- INHOUSE SERVICES -->
            <ul class="text-center medium-block-grid-3 small-block-grid-2">
                <h4>In-house Services</h4>
                <li>
                    <div class="menu-box"><a href="/dickinson-centre.php">
                            <img src="images/index/dickinson-centre.jpg" alt="Park Community Dickinson Centre - Much More Than Just a School">
                            <p>Dickinson Centre</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/community-services.php">
                            <img src="images/index/community.jpg" alt="Park Community - Much More Than Just a School">
                            <p>Community &amp; Services</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/design-print.php">
                            <img src="images/index/unit.jpg" alt="Park Community Enterprises - Much More Than Just a School">
                            <p>Park Design &amp; Print</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/suite.php">
                            <img src="images/index/sontronics.jpg" alt="The Suite - Much More Than Just a School">
                            <p>The Suite</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/theatre.php">
                            <img src="images/index/theatre.jpg" alt="Theatre Spaces for Hire - Much More Than Just a School">
                            <p>Theatre Hire</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/catering.php#parkcatering">
                            <img src="images/index/park_catering.png" alt="Park Catering Services - Much More Than Just a School">
                            <p>Park Catering Services</p>
                        </a></div>
                </li>
            </ul>


            <br>
        </div>

        <br>
    </div>
    <br>
<section id="meet-the-team" style="background-color: #333333; color: #ffffff; text-align: center;">
    <div class="row">
        <div class="large-12 columns">
            <!-- Center the 'Leadership Team' text -->
            <h3 style="color: #ffffff;">Leadership Team</h3>
            <br>

            <!-- Team Members -->
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

    <!-- Footer Section Included Here -->
    <?php include("includes/footer.html"); ?>
</section>

        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>
            
        <script type="text/javascript">
            // Current slide index
            let currentSlideIndex = 0;
            const totalSlides = 5;
            let autoAdvanceInterval;
            let vimeoPlayers = [];
            let videoIsPlaying = false; // Simple flag to track if any video is playing

            // Show specific slide
            function showSlide(index) {
                console.log('Showing slide:', index); // Debug log
                
                // Pause all videos when changing slides
                pauseAllVideos();
                
                // Hide all slides
                const slides = document.querySelectorAll('.slide-content');
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                
                // Remove active class from all indicators if they exist
                const indicators = document.querySelectorAll('.indicator');
                indicators.forEach(indicator => {
                    indicator.classList.remove('active');
                });
                
                // Show current slide
                if (slides[index]) {
                    slides[index].classList.add('active');
                }
                
                // Update indicator if it exists
                if (indicators[index]) {
                    indicators[index].classList.add('active');
                }
                
                currentSlideIndex = index;
                
                // Reset video flag and start auto-advance
                videoIsPlaying = false;
                startAutoAdvance();
            }

            // Change slide (for arrow navigation and auto-advance)
            function changeSlide(direction) {
                console.log('Changing slide by:', direction); // Debug log
                
                currentSlideIndex += direction;
                
                // Loop around
                if (currentSlideIndex >= totalSlides) {
                    currentSlideIndex = 0;
                } else if (currentSlideIndex < 0) {
                    currentSlideIndex = totalSlides - 1;
                }
                
                showSlide(currentSlideIndex);
            }

            // Start auto-advance with video checking
            function startAutoAdvance() {
                // Clear any existing interval first
                if (autoAdvanceInterval) {
                    clearInterval(autoAdvanceInterval);
                }
                
                console.log('Starting auto-advance timer'); // Debug log
                
                autoAdvanceInterval = setInterval(function() {
                    console.log('Timer fired. Video playing flag:', videoIsPlaying);
                    
                    if (!videoIsPlaying) {
                        console.log('No video playing - advancing to next slide');
                        changeSlide(1);
                    } else {
                        console.log('VIDEO IS PLAYING - staying on current slide');
                    }
                }, 60000); // 60 seconds = 1 minute
            }

            // Stop auto-advance
            function stopAutoAdvance() {
                console.log('Stopping auto-advance'); // Debug log
                if (autoAdvanceInterval) {
                    clearInterval(autoAdvanceInterval);
                    autoAdvanceInterval = null;
                }
            }

            // Pause all videos
            function pauseAllVideos() {
                vimeoPlayers.forEach((player, index) => {
                    try {
                        player.pause();
                        console.log('Paused video', index); // Debug log
                    } catch (error) {
                        console.log('Could not pause video', index, ':', error);
                    }
                });
                videoIsPlaying = false;
            }

            // Initialize Vimeo players and event listeners
            function initializeVimeoPlayers() {
                const iframes = document.querySelectorAll('iframe[src*="vimeo.com"]');
                console.log('Found', iframes.length, 'Vimeo iframes'); // Debug log
                
                iframes.forEach((iframe, index) => {
                    try {
                        const player = new Vimeo.Player(iframe);
                        vimeoPlayers.push(player);
                        
                        // When video starts playing - SET FLAG TO TRUE
                        player.on('play', function() {
                            console.log('🎬 VIDEO', index, 'STARTED PLAYING - BLOCKING SLIDESHOW');
                            videoIsPlaying = true;
                        });
                        
                        // When video pauses - SET FLAG TO FALSE AND GO TO SLIDE 1
                        player.on('pause', function() {
                            console.log('⏸️ VIDEO', index, 'PAUSED - RETURNING TO SLIDE 1');
                            videoIsPlaying = false;
                            // Go back to slide 1 (Vision slide) after video is paused
                            setTimeout(function() {
                                showSlide(0);
                            }, 500);
                        });
                        
                        // When video ends - SET FLAG TO FALSE AND GO TO SLIDE 1
                        player.on('ended', function() {
                            console.log('🏁 VIDEO', index, 'ENDED - RETURNING TO SLIDE 1');
                            videoIsPlaying = false;
                            // Go back to slide 1 (Vision slide) after video ends
                            setTimeout(function() {
                                showSlide(0);
                            }, 500);
                        });
                        
                        // Additional safety: check if video is loaded and ready
                        player.ready().then(function() {
                            console.log('✅ Video', index, 'is ready and events are attached');
                        });
                        
                    } catch (error) {
                        console.log('❌ Error initializing Vimeo player', index, ':', error);
                    }
                });
            }

            // Manual slide navigation (if you add buttons later)
            function goToSlide(index) {
                if (index >= 0 && index < totalSlides) {
                    showSlide(index);
                }
            }

            $(document).ready(function(){
                console.log('Document ready, initializing slideshow'); // Debug log
                
                // Check if slides exist
                const slides = document.querySelectorAll('.slide-content');
                console.log('Found', slides.length, 'slides'); // Debug log
                
                if (slides.length === 0) {
                    console.error('No slides found! Check your HTML structure.');
                    return;
                }
                
                // Make sure first slide is active
                showSlide(0);

                // Enhanced interactions
                $('.menu-box').hover(
                    function() {
                        $(this).find('img').css('transform', 'scale(1.05)');
                    },
                    function() {
                        $(this).find('img').css('transform', 'scale(1)');
                    }
                );

                // Smooth scroll for anchor links
                $('a[href^="#"]').on('click', function(event) {
                    var target = $(this.getAttribute('href'));
                    if( target.length ) {
                        event.preventDefault();
                        $('html, body').stop().animate({
                            scrollTop: target.offset().top - 80
                        }, 800);
                    }
                });

                // Image lazy loading effect
                $('.menu-box img').each(function(index) {
                    $(this).delay(index * 100).animate({opacity: 1}, 600);
                });

                // Enhanced button interactions
                $('.button').hover(
                    function() {
                        $(this).css('transform', 'translateY(-3px)');
                    },
                    function() {
                        $(this).css('transform', 'translateY(0)');
                    }
                );

                // Initialize Vimeo players with longer delay to ensure API is loaded
                console.log('Waiting for Vimeo API to load...');
                setTimeout(function() {
                    if (typeof Vimeo !== 'undefined' && Vimeo.Player) {
                        console.log('Vimeo API loaded, initializing players...');
                        initializeVimeoPlayers();
                    } else {
                        console.log('Vimeo API not ready, trying again in 3 seconds...');
                        setTimeout(function() {
                            if (typeof Vimeo !== 'undefined' && Vimeo.Player) {
                                console.log('Vimeo API loaded on second try, initializing players...');
                                initializeVimeoPlayers();
                            } else {
                                console.error('Vimeo API failed to load after multiple attempts');
                            }
                        }, 3000);
                    }
                }, 5000); // Wait 5 seconds initially

                // For testing purposes - temporarily change to 10 seconds instead of 60
                // You can change this back to 60000 once you confirm it's working
                console.log('NOTE: For testing, slideshow will advance every 10 seconds instead of 60');
            });

            // Add keyboard navigation (optional)
            $(document).keydown(function(e) {
                switch(e.which) {
                    case 37: // left arrow
                        changeSlide(-1);
                        break;
                    case 39: // right arrow
                        changeSlide(1);
                        break;
                    default: return;
                    }
                e.preventDefault();
            });
        </script>
    </body>
</html>