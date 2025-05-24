<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Connect4Families</title>
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
            --connect-blue: #007acc;
            --connect-purple: #6f42c1;
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
        .page-school {
            background: white;
        }

        /* Page Title Section */
        .page-title-section {
            background: linear-gradient(135deg, var(--connect-blue), var(--connect-purple));
            color: white;
            padding: 3rem 0 2rem;
            position: relative;
            overflow: hidden;
        }

        .page-title-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="family" x="0" y="0" width="25" height="25" patternUnits="userSpaceOnUse"><text x="12" y="18" text-anchor="middle" fill="rgba(255,255,255,0.1)" font-size="14">👨‍👩‍👧‍👦</text></pattern></defs><rect width="100" height="100" fill="url(%23family)"/></svg>');
            opacity: 0.2;
        }

        .page-title-section .row {
            position: relative;
            z-index: 2;
        }

        .page-title {
            font-size: 2.8rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        /* Content Sections */
        .content-section {
            padding: 4rem 0;
            position: relative;
        }

        .content-section.alt-bg {
            background: linear-gradient(135deg, var(--light-gray), #e2e8f0);
        }

        .content-wrapper {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Modern Section Headers */
        h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            margin: 1rem auto;
            border-radius: 2px;
        }

        /* Enhanced Content Cards */
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

        .content-card p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        /* Video Container */
        .video-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 2rem auto;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .video-container video {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Enhanced Iframe Videos */
        .flex-video {
            position: relative;
            height: 0;
            padding-bottom: 56.25%;
            margin: 2rem auto;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
            max-width: 700px;
        }

        .flex-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Modern Resource Links */
        .resource-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .resource-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow-light);
            border: 2px solid transparent;
            transition: var(--transition);
            text-align: center;
        }

        .resource-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
            border-color: var(--primary-green);
        }

        .resource-link {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .resource-link:hover {
            color: var(--primary-orange);
        }

        /* Logo Display */
        .logo-display {
            text-align: center;
            margin: 2rem 0;
        }

        .logo-display img {
            max-width: 200px;
            height: auto;
            border-radius: 8px;
            box-shadow: var(--shadow-light);
        }

        /* Enhanced Buttons */
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
            margin: 1rem 0.5rem !important;
            font-size: 1rem !important;
        }

        .button:hover {
            background: linear-gradient(135deg, #8fb332, var(--primary-green)) !important;
            transform: translateY(-3px) !important;
            box-shadow: var(--shadow-medium) !important;
            color: white !important;
        }

        .button::before {
            content: '📄';
            font-size: 1.2rem;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, var(--dark-bg), #2d3748);
            color: white;
            padding: 3rem 0;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-card h2 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .contact-card h2::after {
            background: linear-gradient(90deg, white, #f0f8ff);
        }

        .contact-card p, .contact-card li {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
        }

        .contact-card a {
            color: #7dd3fc;
            text-decoration: none;
            transition: var(--transition);
        }

        .contact-card a:hover {
            color: white;
            text-decoration: underline;
        }

        .contact-list {
            list-style: none;
            padding: 0;
        }

        .contact-list li {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .contact-list li::before {
            content: '📧';
            font-size: 1.2rem;
        }

        .contact-list li:last-child::before {
            content: '📞';
        }

        /* Section Dividers */
        .section-divider {
            text-align: center;
            margin: 3rem 0;
        }

        .divider-line {
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-title-section {
                padding: 2rem 0 1.5rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .content-section {
                padding: 2rem 0;
            }

            .content-card {
                padding: 1.5rem;
                margin: 1rem 0;
            }

            h2 {
                font-size: 1.8rem;
            }

            .resource-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .button {
                width: 100% !important;
                justify-content: center !important;
                margin: 0.5rem 0 !important;
            }

            .logo-display img {
                max-width: 150px;
            }
        }

        /* Loading Animation */
        .content-card {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }

        .content-card:nth-child(1) { animation-delay: 0.1s; }
        .content-card:nth-child(2) { animation-delay: 0.2s; }
        .content-card:nth-child(3) { animation-delay: 0.3s; }

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

        /* Focus States */
        .button:focus,
        .resource-link:focus,
        a:focus {
            outline: 3px solid var(--primary-green);
            outline-offset: 2px;
        }
    </style>
</head>

<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- WHAT IS CONNECT4FAMILIES -->
    <section class="content-section">
        <div class="row">
            <div class="columns">
                <div class="content-wrapper">
                    <div class="content-card">
                        <h2>What is Connect4Families?</h2>
                        <p>Connect4Families is the creation of Park Community School staff, Susan Parish MBE and Jan Lefley MBE. In 2019 and 2020 they delivered for the Department for Education, as part of a pilot with 8 organisations, a programme of enriching activities developed for children and for parents through our Family Fun Days. As a result of the 9 successful pilots all local authorities are now funded to deliver a three-year programme of free holiday activities for disadvantaged children and families.</p>
                        <p>2023 we are delighted to be funded by Hampshire County Council, to provide 16 days of Family Fun Days and 16 days of Connect4Youth in the summer and 4 days for both at Christmas 2023. The programmes have something for everyone.</p>
                        
                        <div class="video-container">
                            <?php $videoPath = "assets/connect4families/2023-09/230908-connect4summer2.mp4"; ?>
                            <video controls>
                                <source src="<?php echo $videoPath; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <div class="resource-grid">
                            <div class="resource-card">
                                <a href="/assets/connect4families/2023-07/family-fun-day-poster.jpg" target="_blank" class="resource-link">
                                    <i class="fas fa-image"></i>
                                    Family Fun Days 2023
                                </a>
                            </div>
                            <div class="resource-card">
                                <a href="//connect4.org.uk/" target="_blank" class="resource-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    Visit Connect4 Website
                                </a>
                            </div>
                        </div>

                        <div class="logo-display">
                            <img src="/assets/connect4families/2023-07/connect4families-logo.png" alt="Connect4Families Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT IS CONNECT4YOUTH -->
    <section class="content-section alt-bg">
        <div class="row">
            <div class="columns">
                <div class="content-wrapper">
                    <div class="section-divider">
                        <div class="divider-line"></div>
                    </div>
                    
                    <div class="content-card">
                        <h2>What is Connect4Youth?</h2>
                        <p>Summer 2023 we are offering a wide range of activities for 11-16 years including trips out. Please see the programme below:</p>
                        
                        <div class="resource-grid">
                            <div class="resource-card">
                                <a href="/assets/connect4families/2023-07/activities-connect4youth-summer-holidays-2023.pdf" target="_blank" class="resource-link">
                                    <i class="fas fa-calendar-alt"></i>
                                    Youth Activity Days 2023
                                </a>
                            </div>
                            <div class="resource-card">
                                <a href="/assets/connect4families/2023-07/activities-connect4families-summer-holidays-2023.pdf" target="_blank" class="resource-link">
                                    <i class="fas fa-book"></i>
                                    Youth Activity Book 2023
                                </a>
                            </div>
                            <div class="resource-card">
                                <a href="/assets/connect4families/2023-07/activity-book-summer-2022.pdf" target="_blank" class="resource-link">
                                    <i class="fas fa-book"></i>
                                    Youth Activity Book 2022
                                </a>
                            </div>
                            <div class="resource-card">
                                <a href="//connect4.org.uk/" target="_blank" class="resource-link">
                                    <i class="fas fa-external-link-alt"></i>
                                    Visit Connect4 Website
                                </a>
                            </div>
                        </div>

                        <div class="logo-display">
                            <img src="/assets/connect4families/2023-07/connect4youth-logo.png" alt="Connect4Youth Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONNECT4 REVIEWS -->
    <section class="content-section">
        <div class="row">
            <div class="columns">
                <div class="content-wrapper">
                    <div class="section-divider">
                        <div class="divider-line"></div>
                    </div>
                    
                    <div class="content-card">
                        <h2>Connect4 Reviews</h2>
                        
                        <!-- Connect4Christmas 2021 -->
                        <h3 style="color: var(--primary-green); font-size: 1.5rem; margin-top: 2rem;">Connect4Christmas 2021</h3>
                        <p>Please take the time to view our Connect4Christmas Activity Book</p>
                        <div class="text-center" style="margin-bottom: 3rem;">
                            <a href="/assets/connect4summer/connect-christmas.pdf" target="_blank" class="button success radius">Activity Book</a>
                        </div>

                        <!-- Connect4Summer 2021 Review -->
                        <h3 style="color: var(--primary-green); font-size: 1.5rem; margin-top: 2rem;">Connect4Summer 2021 - Review</h3>
                        <p>Connect4Summer has been successful for its third year, and we are extremely proud of the joy and happiness we have managed to bring to families while helping with mental health issues raised by COVID-19.</p>
                        <p>We have been able to bring a 20-day programme to venues around Hampshire, Portsmouth, Southampton and Isle of Wight while maintaining government guidelines.</p>
                        <p>Please take the time to view our Connect4Summer 2021 review, and we'd like to thank all the 420+ employed to make this fantastic event possible once again.</p>
                        <div class="text-center" style="margin-bottom: 3rem;">
                            <a href="/assets/connect4summer/connect4summer2021_review.pdf" target="_blank" class="button success radius">View the Full Review</a>
                        </div>

                        <!-- Connect4Summer 2020 Review -->
                        <h3 style="color: var(--primary-green); font-size: 1.5rem; margin-top: 2rem;">Connect4Summer 2020 - Review</h3>
                        <p>Connect4Summer has been successful for its second year, and we are extremely proud of the joy and happiness we have managed to bring to families while helping with mental health issues raised by COVID-19.</p>
                        <p>We have been able to bring a 20-day programme to venues around Hampshire, Portsmouth, Southampton and Isle of Wight while maintaining government guidelines.</p>
                        <p>Please take the time to view our Connect4Summer 2020 review, and we'd like to thank all the 420+ employed to make this fantastic event possible once again.</p>
                        
                        <div class="flex-video widescreen">
                            <iframe src="https://player.vimeo.com/video/451756772" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        
                        <div class="text-center" style="margin-bottom: 3rem;">
                            <a href="/assets/connect4summer/connect4summer2020_review.pdf" target="_blank" class="button success radius">View the Full Review</a>
                        </div>

                        <!-- Connect4Summer 2019 Review -->
                        <h3 style="color: var(--primary-green); font-size: 1.5rem; margin-top: 2rem;">Connect4Summer 2019 - Review</h3>
                        <p>We are really proud of what we have achieved, 17 organisations have provided free daily child care and 21 organisations have provided free family fun days for 20 days and the feedback from parents has been tremendous.</p>
                        
                        <div class="flex-video widescreen">
                            <iframe src="https://player.vimeo.com/video/368249167" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        
                        <div class="text-center">
                            <a href="/assets/connect4summer/connect4summer2019_review.pdf" target="_blank" class="button success radius">View the Full Review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
        <div class="row">
            <div class="columns">
                <div class="content-wrapper">
                    <div class="contact-card">
                        <h2>Contact</h2>
                        <p>Please visit our website at: <a href="//connect4.org.uk/">Connect4.org.uk</a></p>
                        <p>For further details please contact:</p>
                        <ul class="contact-list">
                            <li>Email: <a href="mailto:admin@connect4.org.uk">admin@connect4.org.uk</a></li>
                            <li>Tel: 02392 489 811</li>
                        </ul>
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
    <script src="https://player.vimeo.com/api/player.js"></script>

    <script>
        // Enhanced interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth hover effects for content cards
            const contentCards = document.querySelectorAll('.content-card, .resource-card');
            
            contentCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
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
        });
    </script>
</body>
</html>