<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Safeguarding</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #3d7c47;
            --accent-color: #ff6b35;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #2c5aa0, #4a7bb7);
            --success-color: #28a745;
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

        /* Hero Section */
        .hero-section {
            background: var(--gradient);
            padding: 4rem 0;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="shield" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M25 5 L35 5 L35 15 L45 15 L45 25 L35 25 L35 35 L45 35 L45 45 L35 45 L25 45 Z" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23shield)"/></svg>');
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* DSL Section */
        .dsl-section {
            padding: 5rem 0;
            background: var(--bg-light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Team Grid */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .team-member-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }

        .team-member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .team-member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(44, 90, 160, 0.2);
        }

        .team-member-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.5rem;
            border: 4px solid var(--bg-light);
            display: block;
            transition: transform 0.3s ease;
        }

        .team-member-card:hover .team-member-image {
            transform: scale(1.05);
        }

        .member-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .member-role {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .member-additional {
            font-size: 0.9rem;
            color: var(--text-light);
            font-style: italic;
        }

        /* Resources Section */
        .resources-section {
            background: var(--bg-white);
            padding: 5rem 0;
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .resource-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .resource-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .resource-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .resource-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .resource-description {
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .resource-button {
            display: inline-block;
            background: var(--secondary-color);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .resource-button:hover {
            background: #2d5a36;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(61, 124, 71, 0.3);
            text-decoration: none;
            color: white;
        }

        /* Contact Section */
        .contact-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 2.5rem 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .contact-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .contact-info {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .contact-phone {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--accent-color);
        }

        /* Emergency Banner */
        .emergency-banner {
            background: #dc3545;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .emergency-text {
            font-weight: 600;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            .resources-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero-section {
                padding: 2rem 0;
            }

            .dsl-section, .resources-section, .contact-section {
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
<body class="page-parent">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- Emergency Banner -->
    <div class="emergency-banner">
        <div class="container">
            <p class="emergency-text">
                <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
                Child in immediate danger? Call 999 | Safeguarding concerns: 023 9248 9800 | HCC Children's Services: 0300 555 1384
            </p>
        </div>
    </div>



    <!-- DSL Team Section -->
    <section class="dsl-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Designated Safeguarding Leads</h2>
                <p class="section-subtitle">
                    Our experienced team of safeguarding professionals are here to protect and support every child at Park Community School
                </p>
            </div>

            <div class="team-grid">
                <div class="team-member-card">
                    <img src="images/dsl/SBN.png" alt="Ms S Bannard" class="team-member-image">
                    <h3 class="member-name">Ms S Bannard</h3>
                    <p class="member-role">Lead DSL</p>
                    <p class="member-additional">Designated Teacher for LAC</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/JBY.png" alt="Mr J Bryce" class="team-member-image">
                    <h3 class="member-name">Mr J Bryce</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/ELE.png" alt="Mrs E Leach" class="team-member-image">
                    <h3 class="member-name">Mrs E Leach</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/TSE.png" alt="Mrs T Seaman" class="team-member-image">
                    <h3 class="member-name">Mrs T Seaman</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/SHO.jpg" alt="Mrs Sian Howes" class="team-member-image">
                    <h3 class="member-name">Mrs Sian Howes</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/JBR.png" alt="Mrs Jo-Anne Breedon" class="team-member-image">
                    <h3 class="member-name">Mrs Jo-Anne Breedon</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/FFE.png" alt="Miss Florence Fearon" class="team-member-image">
                    <h3 class="member-name">Miss Florence Fearon</h3>
                    <p class="member-role">Community DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/FMA.jpg" alt="Mrs Fiona Maskill" class="team-member-image">
                    <h3 class="member-name">Mrs Fiona Maskill</h3>
                    <p class="member-role">Deputy DSL</p>
                </div>

                <div class="team-member-card">
                    <img src="images/dsl/RBI.png" alt="Mrs Rachel Bird" class="team-member-image">
                    <h3 class="member-name">Mrs Rachel Bird</h3>
                    <p class="member-role">Nursery DSL</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="resources-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Safeguarding Resources</h2>
                <p class="section-subtitle">
                    Access important information and tools to help keep children safe
                </p>
            </div>

            <div class="resources-grid">
                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-file-pdf" aria-hidden="true"></i>
                    </div>
                    <h3 class="resource-title">Visitor Information</h3>
                    <p class="resource-description">
                        Essential safeguarding information for all visitors to our school
                    </p>
                    <a href="assets/safegaurding/visitor.pdf" target="_blank" class="resource-button">
                        Download Leaflet
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h3 class="resource-title">Safe4me Platform</h3>
                    <p class="resource-description">
                        Online safety resources and guidance for parents and families
                    </p>
                    <a href="https://www.safe4me.co.uk/parents/" target="_blank" class="resource-button">
                        Visit Safe4me
                    </a>
                </div>

                <div class="resource-card">
                    <div class="resource-icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <h3 class="resource-title">Parent Advice</h3>
                    <p class="resource-description">
                        Comprehensive guidance and support for parents on safeguarding matters
                    </p>
                    <a href="/parent-advice.php" class="resource-button">
                        Get Advice
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">Contact Information</h2>
                <p class="section-subtitle" style="color: rgba(255,255,255,0.9);">
                    If you have any safeguarding concerns, please don't hesitate to contact us
                </p>
            </div>

            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-school" aria-hidden="true"></i>
                    </div>
                    <h3 class="contact-title">School Hours</h3>
                    <p class="contact-info">For urgent safeguarding concerns</p>
                    <p class="contact-phone">
                        <i class="fas fa-phone" aria-hidden="true"></i> 023 9248 9800
                    </p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-shield-alt" aria-hidden="true"></i>
                    </div>
                    <h3 class="contact-title">HCC Children's Services</h3>
                    <p class="contact-info">Hampshire County Council MASH Team</p>
                    <p class="contact-phone">
                        <i class="fas fa-phone" aria-hidden="true"></i> 0300 555 1384
                    </p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock" aria-hidden="true"></i>
                    </div>
                    <h3 class="contact-title">Out of Hours</h3>
                    <p class="contact-info">HCC Out of Hours Service</p>
                    <p class="contact-phone">
                        <i class="fas fa-phone" aria-hidden="true"></i> 0300 555 1373
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>
    
    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
    
    <script>
        // Add smooth scrolling and intersection observer for animations
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for fade-in animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            const animatedElements = document.querySelectorAll('.team-member-card, .resource-card, .contact-card');
            animatedElements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(el);
            });
        });
    </script>
</body>
</html>