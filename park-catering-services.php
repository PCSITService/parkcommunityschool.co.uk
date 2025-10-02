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

        .chef-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .chef-content h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .chef-content h3 small {
            color: var(--text-light);
            font-weight: 400;
            font-size: 0.7em;
        }

        .chef-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .chef-sidebar {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .chef-image {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .chef-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .resource-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .resource-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .resource-card p {
            font-weight: 600;
            color: var(--text-dark);
            margin: 0;
        }

        .cta-button {
            display: inline-block;
            background: var(--success-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            margin: 2rem 0;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            text-decoration: none;
            color: white;
        }

        /* Services Section */
        .services-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .services-content h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .services-list {
            list-style: none;
            padding-left: 0;
        }

        .services-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .services-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--warning-color);
            font-weight: bold;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
            backdrop-filter: blur(10px);
        }

        .contact-info a {
            color: var(--warning-color);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .chef-grid,
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .chef-sidebar {
                order: -1;
            }

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

        /* Modal styles for existing functionality */
        .reveal-modal {
            background: white;
            border-radius: 15px;
            padding: 2rem;
        }

        .reveal-modal h2 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        /* Back to top button styling */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>
    
    <!-- CHEF SECTION -->
    <section class="chef-section">
        <div class="container">
            <div class="chef-grid">
                <div class="chef-content">
                    <h3>Our Chef <small>- Alex Moody</small></h3>
                    <p>Cooking has always been our Head Chef's passion and from a very young age Alex Moody cooked at home with his parents. After leaving school he studied catering at South Downs College for two years and went on to an apprenticeship at a local hotel. Alex has spent the last seven years at Park working with Steve Cross, LACA School Chef of the Year. Alex won the South East LACA competition in 2021.</p>
                    
                    <p>At Park Community School, Alex and the school's multi-award winning catering team, continue to redefine school food to ensure all our students receive a healthy well-balanced meal during the school day. Alex is developing and nurturing the talents within the catering team, whose members are rightly proud of the good food that has successfully been embedded into the life of the school and its community.</p>
                    
                    <p>Alex and the team introduce the students to cuisines from around the world by, for instance, encouraging them to taste Korean kimchi, Middle Eastern tagines, and Japanese inspired sushi. Three days a week students work in the kitchen alongside our chefs and catering team as part of our Much More Than Just A School curriculum.</p>
                    
                    <p>The catering team work closely with the market garden team helping them to grow our own fruit and vegetables which are used within the school kitchens. We have reared over 200 pigs on our small holding; the meat is used in school lunches, meals within the community and at external events. Through the Market Garden they learn about Farm to Fork ethos and all that it entails.</p>
                    
                    <p>The catering team played an important role in establishing the Munch Food programme in 2017. Munch provides everyone who comes with a hot two course meal every school holiday and on Thursday evenings. The school also opens on Christmas Day and, in 2021, 140 people across the age-range enjoyed a three course Christmas Lunch, with entertainment and a splendid visit by Father Christmas despite the challenges of Covid.</p>
                    
                    <p>To further meet the needs of our community the catering team produce nutritious ready meals which are available for collection seven days a week from the Munch emergency freezer in our Dickinson Centre.</p>
                    
                    <p>To encourage healthy eating beyond school, the team provides cookery lessons for families, where family members come together, cook a meal, eat some of it with us and have plenty remaining to take home.</p>
                    
                    <p>In 2019, Park Community School was one of nine successful organisations selected by the Department for Education (DfE) to run holiday activities. As part of this, we produced a range of menus for daily meals; this was subsequently used by the DfE as good practice and formed the basis of the recently announced Holiday Activity Programme (HAF) which now runs across every local authority in England.</p>

                    <a class="cta-button" href="#parkcatering">Park Catering Service</a>
                </div>
                
                <div class="chef-sidebar">
                    <div class="chef-image">
                        <img src="assets/schoolmeals/team25.jpg" alt="">
                    </div>
                    
                    <a href="/assets/schoolmeals/menu.pdf" target="_blank" class="resource-card">
                        <img src="images/schoolmeals/menu.png" alt="Park Community School Kitchen - The Watering Hole Menu">
                        <p>School Menu</p>
                    </a>
                    
                    <a href="/assets/schoolmeals/educatering.pdf" target="_blank" class="resource-card">
                        <img src="images/schoolmeals/educatering.jpg" alt="Educatering">
                        <p>Educatering - Magazine</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CATERING SERVICES SECTION -->
    <section class="services-section" id="parkcatering">
        <div class="container">
            <div class="services-grid">
                <div class="services-content">
                    <h3>Park Catering Service</h3>
                    <p>Our award winning in-house chef led catering team prides itself on producing food that is appealing to a range of audiences, meets statutory guidelines and is sourced in the best way possible. We can provide:</p>

                    <ul class="services-list">
                        <li>Award winning Chef led catering</li>
                        <li>Consultancy and support services</li>
                        <li>Advice on the re-branding of your provision and, if necessary, create this with you</li>
                        <li>Work with your business manager to set up new suppliers</li>
                        <li>Contact your local Environmental Health team and set the school up with them</li>
                        <li>Train all your kitchen colleagues</li>
                        <li>Work with your chef during the first weeks of service</li>
                        <li>Provide menu packs</li>
                        <li>Provide ongoing telephone and support visits throughout the year</li>
                        <li>Event catering</li>
                        <li>Function catering</li>
                    </ul>

                    <div class="contact-info">
                        <p>If you would like to know more about how we can support you, please contact our Catering team at <script type="text/javascript">document.write('<'+'a'+' '+'h'+'r'+'e'+'f'+'='+"'"+'m'+'a'+'i'+'l'+'t'+'o'+':'+'p'+'a'+'r'+'k'+'c'+'a'+'t'+'e'+'r'+'i'+'n'+'g'+'@'+'p'+'c'+'s'+'.'+'h'+'a'+'n'+'t'+'s'+'.'+'s'+'c'+'h'+'.'+'u'+'k'+"'"+'>'+'p'+'a'+'r'+'k'+'c'+'a'+'t'+'e'+'r'+'i'+'n'+'g'+'@'+'p'+'c'+'s'+'.'+'h'+'a'+'n'+'t'+'s'+'.'+'s'+'c'+'h'+'.'+'u'+'k'+'<'+'/'+'a'+'>');</script> or call 02392 489 800</p>
                    </div>
                </div>
                <div>
                    <img src="images/schoolmeals/catering_logo.png" alt="Park Community School Catering Service Logo" style="width: 100%; max-width: 300px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Note: Additional sections (LACA Awards, Soil Association, Free School Meals, etc.) would continue with similar modern styling -->
    
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
            const animatedElements = document.querySelectorAll('.resource-card');
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