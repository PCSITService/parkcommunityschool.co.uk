<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Catering</title>
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

        /* Brands Section */
        .brands-section {
            background: var(--bg-white);
            padding: 4rem 0;
        }

        .section-divider {
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

        /* Responsive Design */
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
    


    <!-- CATERING SERVICES SECTION -->
    <section class="chef-section">
        <div class="container">
            <div class="chef-content">
                <h3>Services</h3>
                <p>Our established award-winning in-house chef led catering team have honed their skills over many years, working throughout all areas of the hospitality and catering industry. The team have in-depth knowledge of restaurant, events and public sector hospitality and catering. The Park Catering Service Team are highly motivated, driven and standard led. We have now worked with a range of audiences, always meeting set standards and ensuring to deliver and work within statutory guidelines.</p>
                
                <p><strong>So, how can we help you to go further and develop your service?</strong></p>
                
                <ul class="services-list">
                    <li>Support and Guidance helping you to bring your catering operation in house within all education setting</li>
                    <li>Commercial Catering support</li>
                    <li>Award winning chef led catering support</li>
                    <li>Consultancy and support services</li>
                    <li>Advice on rebranding of your provision and helping you create your own style</li>
                    <li>Supplier setup and financial support services</li>
                    <li>Environmental Health support, ensuring you're working to correct standards</li>
                    <li>Training catering staff to high modern standards that help your service succeed</li>
                    <li>Menu Development</li>
                    <li>Allergen and Intolerance support</li>
                    <li>Event Catering</li>
                    <li>Function Catering</li>
                </ul>
                
                <p>We working closely with other schools helping to support their journey and ensure they can always offer the best possible options for their provision.</p>
            </div>
        </div>
    </section>

    <!-- SAMPLE MENUS SECTION -->
    <section class="brands-section">
        <div class="container">
            <div class="section-divider">
                <div class="divider-line"></div>
            </div>
            
            <div style="text-align: center; margin-bottom: 3rem;">
                <h3 style="font-size: clamp(2rem, 4vw, 2.8rem); color: var(--secondary-color); margin-bottom: 1rem; font-weight: 700;">Sample Menu Packs</h3>
                <p style="font-size: 1.2rem; color: var(--text-light); max-width: 800px; margin: 0 auto;">Explore our professionally designed menu packs tailored for different educational settings</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <!-- Secondary School Menu -->
                <div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; padding: 2.5rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 3.5rem; margin-bottom: 1rem;">🎓</div>
                    <h4 style="font-size: 1.6rem; margin-bottom: 2rem; font-weight: 700;">Secondary School</h4>
                    <a href="/assets/schoolmeals/menu.pdf" target="_blank" style="display: inline-block; background: white; color: #667eea; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">View Menu Pack</a>
                </div>

                <!-- Primary/Junior School Menu -->
                <div style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 20px; padding: 2.5rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(240, 147, 251, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 3.5rem; margin-bottom: 1rem;">📚</div>
                    <h4 style="font-size: 1.6rem; margin-bottom: 2rem; font-weight: 700;">Primary/Junior School</h4>
                    <a href="#" style="display: inline-block; background: white; color: #f5576c; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">View Menu Pack</a>
                </div>

                <!-- Nursery Menu -->
                <div style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 20px; padding: 2.5rem; text-align: center; color: white; box-shadow: 0 10px 30px rgba(79, 172, 254, 0.3); transition: all 0.3s ease; position: relative; overflow: hidden;">
                    <div style="font-size: 3.5rem; margin-bottom: 1rem;">🧸</div>
                    <h4 style="font-size: 1.6rem; margin-bottom: 2rem; font-weight: 700;">Nursery</h4>
                    <a href="#" style="display: inline-block; background: white; color: #4facfe; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-weight: 700; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.2);" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0,0,0,0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';">View Menu Pack</a>
                </div>
            </div>
        </div>
    </section>

    <!-- LINKED SCHOOLS SECTION -->
    <section style="background: var(--bg-light); padding: 4rem 0;">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h3 style="font-size: clamp(2rem, 4vw, 2.8rem); color: var(--primary-color); margin-bottom: 1rem; font-weight: 700;">Linked Schools</h3>
                <p style="font-size: 1.2rem; color: var(--text-light); max-width: 800px; margin: 0 auto;">Schools we proudly work with and support</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; max-width: 900px; margin: 0 auto;">
                <!-- Crookhorn College -->
                <a href="https://www.crookhorn.hants.sch.uk/" target="_blank" style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; text-decoration: none; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 2px solid transparent; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 180px;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.15)'; this.style.borderColor='#2c5aa0';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.1)'; this.style.borderColor='transparent';">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🏫</div>
                    <h4 style="font-size: 1.5rem; color: #2c5aa0; margin-bottom: 0.5rem; font-weight: 700;">Crookhorn College</h4>
                    <p style="color: #666; margin: 0; font-size: 0.95rem;">Secondary School</p>
                    <div style="margin-top: 1rem; color: #3d7c47; font-weight: 600; font-size: 0.9rem;">Visit Website →</div>
                </a>

                <!-- Riders Federation -->
                <a href="https://www.ridersschools.co.uk/" target="_blank" style="background: white; border-radius: 15px; padding: 2.5rem; text-align: center; text-decoration: none; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: all 0.3s ease; border: 2px solid transparent; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 180px;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 12px 35px rgba(0,0,0,0.15)'; this.style.borderColor='#2c5aa0';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.1)'; this.style.borderColor='transparent';">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">🎒</div>
                    <h4 style="font-size: 1.5rem; color: #2c5aa0; margin-bottom: 0.5rem; font-weight: 700;">Riders Federation</h4>
                    <p style="color: #666; margin: 0; font-size: 0.95rem;">Infant & Junior Schools</p>
                    <div style="margin-top: 1rem; color: #3d7c47; font-weight: 600; font-size: 0.9rem;">Visit Website →</div>
                </a>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Intersection Observer for animations
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

            // Animate cards
            const animatedElements = document.querySelectorAll('.resource-card, .award-card, .farm-link');
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