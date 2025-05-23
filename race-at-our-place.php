<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Race at Our Place</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #e91e63;
            --secondary-color: #2196f3;
            --accent-color: #ff9800;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #e91e63, #ff6b9d);
        }

        /* Header Styling - Using default styling */

        /* Modern Video Section */
        .video-section {
            padding: 2rem 0;
            background: var(--bg-light);
        }

        .video-container-modern {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transform: translateY(0);
            transition: transform 0.3s ease;
            background: white;
            padding: 1rem;
        }

        .video-container-modern:hover {
            transform: translateY(-10px);
        }

        .flex-video.border-radius-5 {
            border-radius: 15px;
            overflow: hidden;
        }

        /* Modern Content Sections */
        .grey-bg {
            background: var(--bg-white);
            padding: 2rem 0;
        }

        .modern-section-divider {
            text-align: center;
            margin: 3rem 0;
        }

        .divider-line {
            width: 60px;
            height: 4px;
            background: var(--gradient);
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Cancer Research Content */
        .cancer-content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .cancer-content h3 {
            font-size: clamp(2rem, 4vw, 3rem);
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .cancer-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .cancer-logo-container {
            text-align: center;
        }

        .logo-modern-card {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: var(--shadow);
            display: inline-block;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .logo-modern-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(233, 30, 99, 0.2);
        }

        .logo-modern-card img {
            max-width: 400px;
            width: 100%;
            height: auto;
            display: block;
        }

        /* Statistics Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--text-light);
            font-weight: 500;
        }

        /* Call to Action Section */
        .cta-section {
            background: var(--gradient);
            padding: 4rem 0;
            text-align: center;
            color: white;
        }

        .cta-content h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: var(--primary-color);
            padding: 1.2rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
            color: var(--primary-color);
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .cancer-content-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .cancer-logo-container {
                order: -1;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .header-school {
                padding: 2rem 0;
            }

            .grey-bg {
                padding: 3rem 0;
            }

            .video-section {
                padding: 3rem 0;
            }
        }

        /* Enhanced Foundation Grid Override */
        .row {
            max-width: 1200px;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
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
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>
    


    <!-- VIDEO CONTENT -->
    <section class="video-section">
        <div class="row">
            <div class="column small-8 small-push-2">
                <div class="video-container-modern">
                    <div class="flex-video widescreen border-radius-5">
                        <iframe src="https://player.vimeo.com/video/299177336" 
                                width="640" 
                                height="360" 
                                frameborder="0" 
                                webkitallowfullscreen 
                                mozallowfullscreen 
                                allowfullscreen
                                title="Race at Our Place Event Video">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CANCER RESEARCH SECTION -->
    <section class="grey-bg">
        <div class="row">
            <div class="columns">
                <div class="cancer-content-grid">
                    <div class="cancer-content">
                        <h3>Raising Awareness of Cancer</h3>
                        <p>Race at Our Place started in 2013 as more than just a fun run – it's a powerful demonstration of community unity in the fight against cancer. Our students and staff come together annually to raise both funds and awareness for vital cancer research.</p>
                        <p>Each year, we witness the incredible power of community as local residents, families, and supporters gather to cheer on our runners. This heartwarming display of solidarity shows how a school event can become a beacon of hope for such an important cause.</p>
                        <p>Through this initiative, Park Community School demonstrates our commitment to making a meaningful difference in the lives of those affected by cancer while educating our students about the importance of community service and scientific research.</p>
                    </div>
                    
                    <div class="cancer-logo-container">
                        <div class="logo-modern-card">
                            <img src="images/race-at-our-place/cancer_research.png" alt="Cancer Research UK Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Impact Statistics -->
        <div class="row">
            <div class="columns">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                        </div>
                        <div class="stat-number">11+</div>
                        <div class="stat-label">Years Running</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Community Participants</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                        </div>
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Community Spirit</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-microscope" aria-hidden="true"></i>
                        </div>
                        <div class="stat-number">∞</div>
                        <div class="stat-label">Hope Generated</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GET INVOLVED SECTION -->
    <section class="cta-section">
        <div class="row">
            <div class="columns">
                <div class="cta-content">
                    <h3>Join Us Next Year</h3>
                    <p>Be part of something bigger. Help us continue supporting cancer research and our community.</p>
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.homepage-slider').slick({
                autoplay: true,
                dots: true,
                fade: true
            });

            // Modern interaction enhancements
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
            $('.stat-card, .video-container-modern, .logo-modern-card').each(function() {
                this.style.opacity = '0';
                this.style.transform = 'translateY(30px)';
                this.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(this);
            });
        });
    </script>
</body>
</html>