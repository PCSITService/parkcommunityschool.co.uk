<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Community School | News</title>
    <?php include("includes/head.html") ?>
    <style>
        /* Modern CSS Variables */
        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #0066cc;
            --success-color: #00a86b;
            --background-light: #ffffff;
            --background-dark: #f8f9fa;
            --text-primary: #000000;
            --text-secondary: #000000;
            --border-radius: 12px;
            --shadow: 0 4px 20px rgba(0,0,0,0.08);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --spacing-xs: 0.5rem;
            --spacing-sm: 1rem;
            --spacing-md: 2rem;
            --spacing-lg: 3rem;
            --spacing-xl: 4rem;
        }

        /* Modern Typography */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            font-weight: 400;
            background-color: var(--background-light);
        }

        h1, h2, h3, h4, h5, h6 {
            color: var(--text-primary);
            font-weight: 700;
            line-height: 1.2;
        }

        p {
            color: var(--text-primary);
        }

        /* Force all text in award sections to be black */
        .award-section * {
            color: #000000 !important;
        }

        .award-section h1,
        .award-section h2,
        .award-section h3,
        .award-section h4,
        .award-section h5,
        .award-section h6 {
            color: #000000 !important;
        }

        .award-section p,
        .award-section div,
        .award-section span,
        .award-section li,
        .award-section td,
        .award-section th {
            color: #000000 !important;
        }

        .award-section a {
            color: #000000 !important;
        }

        .award-section a:hover {
            color: var(--secondary-color) !important;
        }

        /* Force cookies notice text to be white */
        .cookie-notice,
        .cookies-notice,
        .cookie-banner,
        .cookies-banner,
        #cookie-notice,
        #cookies-notice,
        [class*="cookie"] {
            color: white !important;
        }

        .cookie-notice *,
        .cookies-notice *,
        .cookie-banner *,
        .cookies-banner *,
        #cookie-notice *,
        #cookies-notice *,
        [class*="cookie"] * {
            color: white !important;
        }

        /* Additional selectors for common cookie notice frameworks */
        .cc-window,
        .cc-banner,
        .cc-message,
        .cookiesjsr,
        .cookiesjsr *,
        .cookie-consent,
        .cookie-consent * {
            color: white !important;
        }

        /* Header Modernization */
        .header-school {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 4rem 0;
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="0,0 1000,0 1000,100"/></svg>');
            background-size: cover;
        }

        .header-school h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 2;
        }

        .header-school p {
            font-size: 1.2rem;
            opacity: 0.9;
            position: relative;
            z-index: 2;
        }

        /* Modern Breadcrumb */
        .modern-breadcrumb {
            background: white;
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .breadcrumb-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-item a {
            color: var(--secondary-color);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: var(--border-radius);
            transition: var(--transition);
            background: var(--background-light);
        }

        .breadcrumb-item a:hover {
            background: var(--secondary-color);
            color: white;
            transform: translateY(-1px);
        }

        /* Modern Content Layout */
        .content-section {
            padding: var(--spacing-xl) 0;
            background: var(--background-light);
        }

        .page-header {
            text-align: center;
            margin-bottom: var(--spacing-md);
            padding: var(--spacing-sm) 0;
        }

        .main-nav-button {
            background: linear-gradient(135deg, #8BC34A, #7CB342) !important;
            background-color: #8BC34A !important;
            border: none !important;
            color: white !important;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-xs);
            margin-bottom: var(--spacing-sm);
            box-shadow: 0 4px 15px rgba(139, 195, 74, 0.3);
            text-transform: none;
            letter-spacing: normal;
            border: 3px solid transparent;
        }

        .main-nav-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(139, 195, 74, 0.4);
            color: white !important;
            background: linear-gradient(135deg, #7CB342, #689F38) !important;
            background-color: #7CB342 !important;
            text-decoration: none !important;
        }

        .main-nav-button:visited {
            background: linear-gradient(135deg, #8BC34A, #7CB342) !important;
            background-color: #8BC34A !important;
            color: white !important;
            text-decoration: none !important;
        }

        .main-nav-button:active {
            background: linear-gradient(135deg, #8BC34A, #7CB342) !important;
            background-color: #8BC34A !important;
            color: white !important;
            text-decoration: none !important;
        }

        .main-nav-button:focus {
            background: linear-gradient(135deg, #8BC34A, #7CB342) !important;
            background-color: #8BC34A !important;
            color: white !important;
            text-decoration: none !important;
        }

        .main-nav-button * {
            color: white !important;
        }

        .main-nav-button:hover * {
            color: white !important;
        }

        .main-nav-button .icon {
            font-size: 1.2rem;
            color: white !important;
        }

        .newsletter-cta {
            background: linear-gradient(135deg, var(--success-color), #00c975);
            border: none;
            color: white;
            padding: 1.25rem 2.5rem;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: var(--spacing-xs);
            margin-bottom: var(--spacing-lg);
            box-shadow: var(--shadow);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .newsletter-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0, 168, 107, 0.3);
            color: white;
        }

        /* Modern Video Container */
        .video-container {
            position: relative;
            margin: var(--spacing-lg) 0;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            background: white;
        }

        .video-container iframe {
            width: 100%;
            height: 500px;
            border: none;
        }

        .content-intro {
            text-align: center;
            margin-bottom: var(--spacing-xl);
        }

        .content-intro h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: var(--spacing-sm);
        }

        .content-intro p {
            font-size: 1.1rem;
            color: var(--text-primary);
            opacity: 0.8;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Modern News Grid */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: var(--spacing-md);
            margin: var(--spacing-xl) 0;
        }

        .news-item {
            background: white;
            padding: var(--spacing-md);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid #f0f0f0;
            position: relative;
            overflow: hidden;
        }

        .news-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--secondary-color);
            transform: scaleY(0);
            transition: var(--transition);
        }

        .news-item:hover::before {
            transform: scaleY(1);
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.15);
        }

        .news-item a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            display: block;
            font-size: 1rem;
            line-height: 1.5;
        }

        .news-item a:hover {
            color: var(--secondary-color);
        }

        .news-item .news-icon {
            font-size: 1.5rem;
            margin-bottom: var(--spacing-xs);
            display: block;
        }

        /* Award Sections */
        .award-section {
            padding: var(--spacing-xl) 0;
            position: relative;
        }

        .award-section.grey-bg {
            background: #fafafa;
        }

        .section-divider {
            text-align: center;
            margin: var(--spacing-lg) 0;
        }

        .divider-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--secondary-color), #0052a3);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            box-shadow: var(--shadow);
        }

        /* Newsletter Modal Styling */
        .reveal-modal {
            border-radius: var(--border-radius);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            border: none;
        }

        .reveal-modal h2 {
            color: var(--text-primary);
            font-size: 1.8rem;
            margin-bottom: var(--spacing-md);
        }

        .newsletter-list {
            list-style: none;
            padding: 0;
        }

        .newsletter-list li {
            margin: var(--spacing-xs) 0;
        }

        .newsletter-list a {
            display: block;
            padding: var(--spacing-md);
            background: var(--background-dark);
            border-radius: var(--border-radius);
            text-decoration: none;
            color: var(--text-primary);
            transition: var(--transition);
            border: 1px solid #e9ecef;
        }

        .newsletter-list a:hover {
            background: var(--secondary-color);
            color: white;
            transform: translateX(8px);
            border-color: var(--secondary-color);
        }

        .newsletter-list a::before {
            content: '📄';
            margin-right: var(--spacing-xs);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .page-header p {
                font-size: 1rem;
            }
            
            .content-intro h2 {
                font-size: 2rem;
            }
            
            .video-container iframe {
                height: 300px;
            }
            
            .news-grid {
                grid-template-columns: 1fr;
                gap: var(--spacing-md);
            }
            
            .newsletter-cta {
                padding: 1rem 2rem;
                font-size: 1rem;
            }
        }

        /* Modern Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>





    <!-- CONTENT -->
    <section class="content-section">
        <div class="row">
            <div class="columns">
                <div class="page-header">
                    <a class="main-nav-button" href="/letters-home.php">
                        <span class="icon">📧</span>
                        Letters & Newsletters
                    </a>
                </div>
            </div>
        </div>

        <!-- NEWS SECTION -->
        <div class="row">
            <div class="medium-12 columns">
                <div class="video-container">
                    <iframe src="https://player.vimeo.com/video/515253878" 
                            allow="autoplay; fullscreen" 
                            allowfullscreen
                            title="Park Community School Video">
                    </iframe>
                </div>

                <div class="content-intro" style="margin-top: 4rem;">
                    <h2>Latest News Articles</h2>
                    <p>Discover the amazing stories and achievements from our school community</p>
                </div>

                <div class="news-grid">
                    <article class="news-item">
                        <span class="news-icon">🎓</span>
                        <a href="/summer-school.php" target="_blank">Summer School 2021</a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">📈</span>
                        <a href="https://www.portsmouth.co.uk/news/people/park-community-school-in-havant-sees-almost-100-per-cent-attendance-as-pupils-return-3158621" target="_blank">
                            Park Community School in Havant sees almost 100 per cent attendance as pupils return
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🦠</span>
                        <a href="https://www.portsmouth.co.uk/education/coronavirus-hampshire-schools-unveil-new-measures-keep-children-covid-safe-2966694" target="_blank">
                            Coronavirus: Hampshire schools unveil new measures to keep children Covid safe
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🎉</span>
                        <a href="https://www.portsmouth.co.uk/education/park-community-school-leigh-park-celebrates-fantastic-gcse-results-pupils-tough-out-rubbish-year-2948478" target="_blank">
                            Park Community School celebrates 'fantastic' GCSE results as pupils tough out challenging year
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🍽️</span>
                        <a href="https://www.portsmouth.co.uk/education/thousands-hampshire-children-will-go-hungry-half-term-after-free-schools-meals-decision-headteachers-say-3013240" target="_blank">
                            Supporting Hampshire families during challenging times
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🏃‍♀️</span>
                        <a href="https://www.portsmouth.co.uk/education/park-community-pupils-receive-award-olympic-champion-dame-kelly-holmes-2914772" target="_blank">
                            Park Community pupils receive award from Olympic champion Dame Kelly Holmes
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">📚</span>
                        <a href="https://www.portsmouth.co.uk/education/hampshire-headteachers-gcse-concerns-returning-year-10-pupils-2879597" target="_blank">
                            Supporting Year 10 pupils in their GCSE journey
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🎰</span>
                        <a href="https://www.portsmouth.co.uk/education/national-lottery-windfall-helps-park-community-school-feed-disadvantaged-families-during-pandemic-2865324" target="_blank">
                            National Lottery windfall helps Park Community School support families during pandemic
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🛡️</span>
                        <a href="https://www.portsmouth.co.uk/education/park-community-school-key-worker-children-make-protective-shields-which-literally-could-save-family-members-lives-2845063" target="_blank">
                            Park Community students create life-saving protective equipment
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🍎</span>
                        <a href="https://www.portsmouth.co.uk/education/chef-year-cites-lack-funding-and-concentration-fast-food-joints-obesity-cause-2050409" target="_blank">
                            Promoting healthy eating and nutrition in schools
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🎨</span>
                        <a href="https://www.portsmouth.co.uk/education/leigh-parks-park-community-school-teacher-turns-his-design-skills-saving-lives-new-face-shield-2536701" target="_blank">
                            Teacher uses design skills to create innovative safety equipment
                        </a>
                    </article>
                    
                    <article class="news-item">
                        <span class="news-icon">🤝</span>
                        <a href="https://www.portsmouth.co.uk/education/cash-grant-helps-park-community-school-feed-community-during-pandemic-2536164" target="_blank">
                            Community support during challenging times
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- AWARD SECTIONS -->
    <section class="award-section grey-bg">
        <?php include("includes/news/persimmon-building-futures-award.html") ?>
    </section>

    <section class="award-section">
        <?php include("includes/news/social-good-award.html") ?>
    </section>

    <section class="award-section grey-bg">
        <?php include("includes/news/children-and-young-people-award.html") ?>
    </section>

    <section class="award-section">
        <?php include("includes/news/hcc-community-impact-award.html") ?>
    </section>



    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>

    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.homepage-slider').slick({
                autoplay: true,
                dots: true,
                fade: true
            });

            // Add smooth scrolling and modern interactions
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Add loading animations
            $('.news-item').each(function(index) {
                $(this).delay(index * 100).queue(function() {
                    $(this).addClass('fade-in-up').dequeue();
                });
            });
        });
    </script>
</body>
</html>