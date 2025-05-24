<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Events</title>
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
            --gradient-bg: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        /* Modern Typography */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: white;
            min-height: 100vh;
        }

        /* Enhanced Page Base */
        .page-school {
            background: white;
        }

        /* Social Media Section */
        .social-section {
            background: white;
            padding: 2rem 0;
            box-shadow: var(--shadow-light);
            border-bottom: 3px solid var(--primary-green);
        }

        .social-section p {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 0;
        }

        .social-section a {
            color: var(--primary-green);
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-section a:hover {
            color: var(--primary-orange);
            text-decoration: underline;
        }

        /* Modern Events Container */
        .event-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        /* Enhanced Event Cards */
        .event-wrap {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
            padding: 2rem;
            transition: var(--transition);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .event-wrap::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
        }

        .event-wrap:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-heavy);
            border-color: var(--primary-green);
        }

        /* Date Badge */
        .date-wrap {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: linear-gradient(135deg, var(--primary-orange), #fb923c);
            color: white;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: var(--shadow-light);
            min-width: 100px;
        }

        .event-date {
            font-size: 0.9rem;
            font-weight: 700;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .event-time {
            font-size: 0.8rem;
            margin: 0.25rem 0 0 0;
            opacity: 0.9;
        }

        /* Event Content */
        .event-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            padding-right: 120px; /* Space for date badge */
        }

        .event-subheader {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-green);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .event-subheader::before {
            content: '';
            width: 4px;
            height: 4px;
            background: var(--primary-orange);
            border-radius: 50%;
        }

        .event-description {
            font-size: 1rem;
            line-height: 1.7;
            color: var(--text-light);
            margin-bottom: 2rem;
        }

        /* Enhanced Buttons */
        .button {
            background: linear-gradient(135deg, var(--primary-green), #68d391) !important;
            border: none !important;
            color: white !important;
            padding: 0.8rem 2rem !important;
            border-radius: 25px !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            transition: var(--transition) !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 0.5rem !important;
            box-shadow: var(--shadow-light) !important;
        }

        .button:hover {
            background: linear-gradient(135deg, #8fb332, var(--primary-green)) !important;
            transform: translateY(-2px) !important;
            box-shadow: var(--shadow-medium) !important;
            color: white !important;
        }

        .button::after {
            content: '→';
            transition: var(--transition);
        }

        .button:hover::after {
            transform: translateX(3px);
        }

        /* Bottom Section */
        .bottom-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
        }

        .location-wrap {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .location-wrap::before {
            content: '📍';
            font-size: 1rem;
        }

        .location-wrap a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
        }

        .location-wrap a:hover {
            color: var(--primary-green);
        }

        .cost-wrap {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Special Event Styling */
        .feature-event {
            background: linear-gradient(135deg, #fef7e0, #fef3c7);
            border-color: var(--primary-orange) !important;
        }

        .feature-event::before {
            background: linear-gradient(90deg, var(--primary-orange), #fb923c);
        }

        .sticky-event {
            position: sticky;
            top: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-school {
                padding: 2rem 0;
            }

            .header-school h1 {
                font-size: 2.5rem;
            }

            .event-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                padding: 1rem 0;
            }

            .event-wrap {
                padding: 1.5rem;
            }

            .event-title {
                font-size: 1.5rem;
                padding-right: 0;
                margin-bottom: 1rem;
            }

            .date-wrap {
                position: static;
                margin-bottom: 1rem;
                width: fit-content;
            }

            .bottom-wrap {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            .cost-wrap {
                text-align: center;
            }
        }

        /* Focus States for Accessibility */
        .button:focus,
        a:focus {
            outline: 3px solid var(--primary-green);
            outline-offset: 2px;
        }

        /* Loading Animation */
        .event-wrap {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .event-wrap:nth-child(1) { animation-delay: 0.1s; }
        .event-wrap:nth-child(2) { animation-delay: 0.2s; }
        .event-wrap:nth-child(3) { animation-delay: 0.3s; }
        .event-wrap:nth-child(4) { animation-delay: 0.4s; }
        .event-wrap:nth-child(5) { animation-delay: 0.5s; }
        .event-wrap:nth-child(6) { animation-delay: 0.6s; }

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
    </style>
</head>

<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- CONTENT -->
    <section style="padding: 3rem 0;">
        <div class="row">
            <div class="medium-12 columns">
                <div class="event-container">

                    <div class="event-wrap">
                        <h2 class="event-title">MUNCH Community Program</h2>
                        <p class="event-subheader">School Holidays 12-1pm • Tuesday 4:00pm-5:30pm • Thursday 4:00pm-5:30pm</p>
                        <p class="event-description">MUNCH began as a holiday hunger scheme providing children with free meals, but has evolved into much more. We now provide a safe environment for families to meet, combat loneliness, and enjoy fun activities for all ages.</p>
                        <div class="link-wrap">
                            <a href="assets/munch/munch_flyer.pdf" target="_blank" class="button success radius">Learn More</a>
                        </div>
                        <div class="bottom-wrap">
                            <div class="location-wrap">
                                <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                            </div>
                            <div class="cost-wrap">Free</div>
                        </div>
                    </div>

                    <div class="event-wrap feature-event">
                        <div class="date-wrap">
                            <p class="event-date">Every Day</p>
                            <p class="event-time">07:45-08:15</p>
                        </div>
                        <h2 class="event-title">The Big Healthy Breakfast</h2>
                        <p class="event-subheader">Daily breakfast service for all students</p>
                        <p class="event-description">Free breakfast for EVERY student every school day! Choose from hot bagels, cereals, or porridge. Additional options are available for purchase.</p>
                        <div class="link-wrap">
                            <a href="/assets/events/big_breakfast.pdf" target="_blank" class="button success radius">View Flyer</a>
                        </div>
                        <div class="bottom-wrap">
                            <div class="location-wrap">
                                <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                            </div>
                            <div class="cost-wrap">Free</div>
                        </div>
                    </div>

                    <div class="event-wrap">
                        <h2 class="event-title">MUNCH Cooking Club</h2>
                        <p class="event-subheader">Fortnightly Saturday Sessions • 10:30am-12:30pm</p>
                        <p class="event-description">Parents and carers, join us with your children! Our professional chefs will guide you through creating a complete main meal and dessert to take home and enjoy. Please bring containers for your food.</p>
                        <div class="link-wrap">
                            <a href="assets/munch/munch_flyer.pdf" target="_blank" class="button success radius">Join Us</a>
                        </div>
                        <div class="bottom-wrap">
                            <div class="location-wrap">
                                <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                            </div>
                            <div class="cost-wrap">Free</div>
                        </div>
                    </div>

                    <div class="event-wrap">
                        <h2 class="event-title">Sunday Roast Dinners</h2>
                        <p class="event-subheader">1st & 3rd Sunday Monthly • 1:00pm-2:00pm</p>
                        <p class="event-description">Join our community for traditional Sunday roast dinners on the first and third Sunday of every month. A wonderful opportunity to bring families together over a delicious meal.</p>
                        <div class="link-wrap">
                            <a href="assets/munch/munch_flyer.pdf" target="_blank" class="button success radius">Book Now</a>
                        </div>
                        <div class="bottom-wrap">
                            <div class="location-wrap">
                                <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                            </div>
                            <div class="cost-wrap">Free</div>
                        </div>
                    </div>

                    <div class="event-wrap">
                        <h2 class="event-title">Coffee, Computers & Cake</h2>
                        <p class="event-subheader">Digital Skills Sessions</p>
                        <p class="event-description">Small, friendly sessions perfect for learning essential digital skills including email, online shopping, social media, and online banking. All while enjoying delicious coffee and cake in a relaxed environment.</p>
                        <div class="link-wrap">
                            <a href="assets/munch/munch_flyer.pdf" target="_blank" class="button success radius">Get Started</a>
                        </div>
                        <div class="bottom-wrap">
                            <div class="location-wrap">
                                <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                            </div>
                            <div class="cost-wrap">Free</div>
                        </div>
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
            // Smooth hover effects for event cards
            const eventCards = document.querySelectorAll('.event-wrap');
            
            eventCards.forEach(card => {
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
                    ripple.style.background = 'rgba(255,255,255,0.3)';
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