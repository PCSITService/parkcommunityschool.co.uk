<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Reading</title>
    <?php include("includes/head.html") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        /* Modern CSS Variables */
        :root {
            --primary-green: #a3cd41;
            --primary-orange: #f08a24;
            --dark-bg: #333333;
            --light-gray: #f8f9fa;
            --text-dark: #2d3748;
            --text-light: #718096;
            --white: #ffffff;
            --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }

        /* Modern Typography */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.7;
            color: var(--text-dark);
            background: white;
            min-height: 100vh;
        }

        /* Enhanced Page Base */
        .page-learning {
            background: white;
        }

        /* Modern Breadcrumbs */
        .breadcrumbs-section {
            background: var(--light-gray);
            padding: 1.5rem 0;
            border-bottom: 3px solid var(--primary-green);
        }

        .breadcrumbs {
            background: transparent !important;
            border: none !important;
            margin: 0 !important;
            padding: 0 !important;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .breadcrumbs li {
            background: none !important;
            margin: 0 !important;
            padding: 0 !important;
            display: flex;
            align-items: center;
        }

        .breadcrumbs li:not(:last-child)::after {
            content: '/';
            margin: 0 0.75rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .breadcrumbs a {
            color: var(--primary-green) !important;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            padding: 0.5rem 0;
        }

        .breadcrumbs a:hover {
            color: var(--primary-orange) !important;
        }

        .breadcrumbs .current a {
            color: var(--text-light) !important;
            cursor: default;
        }

        /* Enhanced Content Section */
        .content-section {
            padding: 4rem 0;
            background: white;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Content Grid Layout */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
        }

        /* Full width for intro and resources */
        .full-width {
            grid-column: 1 / -1;
        }

        /* Modern Typography */
        h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2rem;
            position: relative;
            text-align: center;
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
            font-size: 2rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        /* Enhanced Image Sections */
        .image-section {
            background: var(--light-gray);
            border-radius: var(--border-radius);
            padding: 3rem 2rem;
            margin: 3rem 0;
            text-align: center;
            box-shadow: var(--shadow-light);
            position: relative;
        }

        .image-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            border-radius: var(--border-radius) var(--border-radius) 0 0;
        }

        .image-section h4 {
            color: var(--text-dark);
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: var(--shadow-medium);
            transition: var(--transition);
        }

        .image-section img:hover {
            transform: scale(1.05);
            box-shadow: var(--shadow-heavy);
        }

        /* Enhanced Buttons */
        .button-section {
            text-align: center;
            margin: 4rem 0;
            padding: 3rem 2rem;
            background: linear-gradient(135deg, var(--light-gray), #e2e8f0);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
        }

        .button {
            background: linear-gradient(135deg, var(--primary-green), #68d391) !important;
            border: none !important;
            color: white !important;
            padding: 1rem 2.5rem !important;
            border-radius: 25px !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            transition: var(--transition) !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.75rem !important;
            box-shadow: var(--shadow-light) !important;
            margin: 0.5rem !important;
            font-size: 1rem !important;
            min-width: 200px;
            justify-content: center;
        }

        .button:hover {
            background: linear-gradient(135deg, #8fb332, var(--primary-green)) !important;
            transform: translateY(-3px) !important;
            box-shadow: var(--shadow-medium) !important;
            color: white !important;
        }

        .button::before {
            content: '📖';
            font-size: 1.2rem;
        }

        .button:hover::before {
            animation: bounce 0.6s ease;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-5px);
            }
            60% {
                transform: translateY(-2px);
            }
        }

        /* Content Cards */
        .content-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem;
            margin: 2rem 0;
            box-shadow: var(--shadow-light);
            border-left: 5px solid var(--primary-green);
            transition: var(--transition);
        }

        .content-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .intro-card {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border-left-color: var(--primary-orange);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-learning {
                padding: 2rem 0;
            }

            .header-learning h1 {
                font-size: 2.5rem;
            }

            .content-section {
                padding: 2rem 0;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            h3 {
                font-size: 2rem;
            }

            h4 {
                font-size: 1.5rem;
            }

            .content-card {
                padding: 1.5rem;
                margin: 1rem 0;
            }

            .image-section {
                padding: 2rem 1rem;
                margin: 2rem 0;
            }

            .button {
                min-width: auto !important;
                width: 100% !important;
                margin: 0.5rem 0 !important;
            }

            .button-section {
                padding: 2rem 1rem;
            }
        }

        /* Focus States for Accessibility */
        .button:focus,
        a:focus {
            outline: 3px solid var(--primary-green);
            outline-offset: 2px;
        }

        /* Loading Animation */
        .content-card {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .content-card:nth-child(1) { animation-delay: 0.1s; }
        .content-card:nth-child(2) { animation-delay: 0.2s; }
        .content-card:nth-child(3) { animation-delay: 0.3s; }
        .content-card:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Quote Styling */
        .reading-quote {
            font-style: italic;
            font-size: 1.2rem;
            color: var(--primary-green);
            text-align: center;
            margin: 2rem 0;
            padding: 1.5rem;
            border-left: 4px solid var(--primary-orange);
            background: rgba(163, 205, 65, 0.05);
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
    </style>
</head>

<body class="page-learning">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- CONTENT -->
    <section class="content-section">
        <div class="row">
            <div class="large-12 columns">
                <div class="content-wrapper">
                    
                    <div class="content-card intro-card full-width">
                        <h3>Reading at Park</h3>
                        <p>Reading at Park is given status - we know it develops not only literacy, but also cultural capital, a sense of identity, empathy and compassion for others. Reading is placed at the heart of our daily work.</p>
                        
                        <div class="reading-quote">
                            "Above all, the books are chosen because they are great books which support a love of reading."
                        </div>
                    </div>

                    <div class="content-grid">
                        <div class="content-card">
                            <p>Park's Reading Canon is a set of literature all students should read during their time at Park. Some of the texts will be read in tutor time together, others in English lessons, while most are promoted for independent reading.</p>
                            
                            <p>The canon is revised regularly and incorporates a range of authors and genres designed to focus on breadth, the theme of identity, relationships and our place in society. The choices celebrate diversity, challenge discrimination and promote thinking.</p>
                        </div>

                        <div class="image-section">
                            <h4><i class="fas fa-book-open" style="color: var(--primary-green); margin-right: 0.5rem;"></i>Reading Canon</h4>
                            <img src="images/reading/canon.jpg" alt="Reading Canon - A collection of diverse literature for Park students">
                        </div>
                    </div>

                    <div class="content-grid">
                        <div class="content-card">
                            <h3>Reading within the Curriculum</h3>
                            <p>Within the curriculum, texts are chosen carefully to ensure they are of good quality and provide sufficient challenge for students. Teachers draw upon a range of strategies to support students to read at an appropriately challenging level.</p>
                            
                            <p>Through exposure to challenging texts and appropriate strategies to support access to these, teaching works to extend vocabulary, improve fluency and deepen understanding of subjects.</p>
                        </div>

                        <div class="image-section">
                            <h4><i class="fas fa-route" style="color: var(--primary-green); margin-right: 0.5rem;"></i>Reading Process</h4>
                            <img src="images/reading/reading-process.jpg" alt="Reading Process - Our structured approach to developing reading skills">
                        </div>
                    </div>

                    <div class="button-section full-width">
                        <h4 style="margin-bottom: 2rem; color: var(--text-dark);">
                            <i class="fas fa-download" style="color: var(--primary-green); margin-right: 0.5rem;"></i>
                            Reading Resources
                        </h4>
                        <a role="button" target="_blank" href="assets/reading/book-week.pdf" class="button">
                            Park Book Week Resources
                        </a>
                        <a role="button" target="_blank" href="assets/reading/read-together.pdf" class="button">
                            Reading Together Guide
                        </a>
                    </div>

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
        // Enhanced interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth hover effects for content cards
            const contentCards = document.querySelectorAll('.content-card, .image-section');
            
            contentCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Enhanced button interactions
            const buttons = document.querySelectorAll('.button');
            
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    ripple.style.position = 'absolute';
                    ripple.style.borderRadius = '50%';
                    ripple.style.background = 'rgba(255,255,255,0.4)';
                    ripple.style.transform = 'scale(0)';
                    ripple.style.animation = 'ripple 0.6s linear';
                    ripple.style.left = e.clientX - this.getBoundingClientRect().left - 25 + 'px';
                    ripple.style.top = e.clientY - this.getBoundingClientRect().top - 25 + 'px';
                    ripple.style.width = ripple.style.height = '50px';
                    
                    this.style.position = 'relative';
                    this.style.overflow = 'hidden';
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add ripple animation CSS
            const style = document.createElement('style');
            style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(4);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);

            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>