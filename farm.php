<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School - Farm</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #3d7c47;
            --accent-color: #ff6b35;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #3d7c47, #5a9a5a);
            --food-gradient: linear-gradient(135deg, #ff6b35, #ff8c42);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Modern Header */
        .header-school {
            background: var(--gradient);
            padding: 3rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .header-school::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="food" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white" opacity="0.1"/><circle cx="20" cy="20" r="1.5" fill="white" opacity="0.08"/><path d="M5 15 L15 15 L10 25 Z" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23food)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .header-school .row {
            position: relative;
            z-index: 2;
        }

        .header-school h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header-school .text-capitalize {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            opacity: 0.9;
            font-weight: 300;
        }

        /* Content Sections */
        .content-section {
            padding: 4rem 0;
        }

        .chef-section {
            background: var(--bg-light);
            padding: 4rem 0;
        }

        .chef-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .chef-content h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 700;
            text-align: center;
        }

        .chef-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .services-list {
            list-style: none;
            padding-left: 0;
            margin: 2rem 0;
        }

        .services-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #e0e0e0;
            color: var(--text-dark);
        }

        .services-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--success-color);
            font-weight: bold;
            font-size: 1.2rem;
        }

        .contact-info {
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
            padding: 2rem;
            border-radius: 15px;
            margin-top: 3rem;
            text-align: center;
            border: 1px solid #d4edda;
        }

        .contact-info p {
            font-size: 1.1rem;
            margin: 0;
        }

        .contact-info a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .header-school {
                padding: 2rem 0;
            }

            .content-section {
                padding: 3rem 0;
            }
        }

        /* Accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Focus styles */
        a:focus, button:focus {
            outline: 3px solid var(--accent-color);
            outline-offset: 2px;
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>
    

    <!-- MAIN CONTENT SECTION -->
    <section class="chef-section">
        <div class="container">
            <div class="chef-content">
                <h3>Extra Curricular Activities</h3>
                <p>Here at Park Community School we are incredibly proud that we offer all of our students a wide range of extra curricular activities, we feel this really does help when they are developing into rounded people which helps them to better understand our world.</p>
                
                <p>Our small holding on a farm is set three miles away from the main school site and is home to a vast array of plant life, animals and insects. This allows all of our students to discover, explore and engage with nature.</p>
                
                <p>Students in years 7, 8, 9 and 10 all get the opportunity during our "Much More Than" rotation to experience the farm with our horticulture department and Animal care instructors. At the farm we have 28 raised beds, 2 large industrial poly tunnels, a dozen active bee hives, and animal pens. Visits to our small holding help students to learn about how vital farming is to our country and where our food really comes from.</p>
            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>
    
    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
</body>
</html>