<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Curriculum</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #3d7c47;
            --accent-color: #ff6b35;
            --learning-color: #8e44ad;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #8e44ad, #9b59b6);
            --learning-gradient: linear-gradient(135deg, #2c5aa0, #3498db);
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
        .header-learning {
            background: var(--gradient);
            padding: 3rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .header-learning::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="learning" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white" opacity="0.1"/><circle cx="30" cy="20" r="1.5" fill="white" opacity="0.08"/><path d="M20 30 L25 25 L30 30 Z" fill="white" opacity="0.06"/></pattern></defs><rect width="100" height="100" fill="url(%23learning)"/></svg>');
            animation: pulse 15s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .header-learning .row {
            position: relative;
            z-index: 2;
        }

        .header-learning h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header-learning .text-capitalize {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            opacity: 0.9;
            font-weight: 300;
        }

        /* Layout */
        .main-content {
            padding: 4rem 0;
            background: var(--bg-light);
        }

        .curriculum-layout {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 3rem;
            align-items: start;
        }

        /* Sidebar */
        .sidebar {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow);
            position: sticky;
            top: 2rem;
            border: 1px solid #f0f0f0;
        }

        .sidebar h4 {
            color: var(--learning-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
            font-size: 1.3rem;
        }

        /* Main Content */
        .main-content-area {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            box-shadow: var(--shadow);
            border: 1px solid #f0f0f0;
        }

        /* Great Learners Image */
        .learners-image {
            text-align: center;
            margin-bottom: 3rem;
        }

        .learners-image img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        /* Content Typography */
        .main-content-area h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            color: var(--learning-color);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .main-content-area p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        /* Enhanced List Styling */
        .curriculum-features {
            list-style: none;
            padding-left: 0;
            margin: 2rem 0;
        }

        .curriculum-features > li {
            position: relative;
            padding: 1rem 0 1rem 3rem;
            margin-bottom: 1rem;
            border-bottom: 1px solid #f0f0f0;
            transition: all 0.3s ease;
        }

        .curriculum-features > li:hover {
            background: var(--bg-light);
            border-radius: 10px;
            padding-left: 3.5rem;
        }

        .curriculum-features > li:before {
            content: '✓';
            position: absolute;
            left: 0.5rem;
            top: 1rem;
            width: 30px;
            height: 30px;
            background: var(--learning-gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        /* Button Styling */
        .cta-button {
            display: inline-block;
            background: var(--learning-gradient);
            color: white;
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            margin: 2rem 0;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(44, 90, 160, 0.3);
            text-decoration: none;
            color: white;
        }

        /* Year Group Accordion */
        .year-groups-section {
            margin: 3rem 0;
        }

        .year-groups-title {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .year-accordion {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 1rem;
        }

        .year-header {
            background: var(--learning-gradient);
            color: white;
            padding: 1.5rem 2rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .year-header:hover {
            background: linear-gradient(135deg, #2a4d8d, #2980b9);
            text-decoration: none;
            color: white;
        }

        .year-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0;
        }

        .year-icon {
            font-size: 1.2rem;
            transition: transform 0.3s ease;
        }

        .year-content {
            padding: 2rem;
            border-top: 1px solid #f0f0f0;
        }

        .year-content.active {
            display: block;
        }

        .year-content:not(.active) {
            display: none;
        }

        .year-header.active .year-icon {
            transform: rotate(180deg);
        }

        .subject-list {
            list-style: none;
            padding-left: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .subject-item {
            background: var(--bg-light);
            padding: 1rem;
            border-radius: 10px;
            border-left: 4px solid var(--learning-color);
            transition: all 0.3s ease;
        }

        .subject-item:hover {
            background: #e8f4fd;
            transform: translateX(5px);
        }

        .subject-item strong {
            color: var(--learning-color);
        }

        /* Links within content */
        .subject-item a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 600;
        }

        .subject-item a:hover {
            text-decoration: underline;
        }

        /* Download Section */
        .download-section {
            background: linear-gradient(135deg, #fff3cd, #ffeaa7);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            margin: 2rem 0;
            border-left: 4px solid var(--warning-color);
        }

        .download-button {
            background: var(--warning-color);
            color: var(--text-dark);
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .download-button:hover {
            background: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
            text-decoration: none;
            color: var(--text-dark);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .curriculum-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .sidebar {
                position: static;
                order: 2;
            }

            .main-content-area {
                padding: 2rem;
            }

            .subject-list {
                grid-template-columns: 1fr;
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

        /* Animation for content loading */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="page-learning">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>



    <!-- MAIN CONTENT -->
    <section class="main-content">
        <div class="container">
            <div class="curriculum-layout">
                <!-- Sidebar -->
                <div class="sidebar">
                    <?php include("includes/curriculum-subjects.html") ?>
                </div>

                <!-- Main Content Area -->
                <div class="main-content-area fade-in">
                    <div class="learners-image">
                        <img src="assets/curriculum/great-learners.png" alt="Great Learners at Park Community School">
                    </div>

                    <h3>Our Ambitious Curriculum</h3>
                    <p>At Park we provide a broad curriculum which allows students to find what they love to do. Our curriculum is designed to promote attainment, build resilience and increase autonomy. We are known for our inclusive approach and others describe us as 'much more than just a school'.</p>

                    <ul class="curriculum-features">
                        <li>A broad and traditional curriculum which leads to a wide range of GCSEs and other qualifications</li>
                        <li>Our 'Much More Than Just a School' curriculum which provides an exciting range of memorable experiences for our students</li>
                        <li>Literacy underpins education at Park. Children read each day; those who struggle with their reading are well supported</li>
                        <li>Cultural capital is important for GCSE success and success in life. We build cultural capital throughout the curriculum</li>
                        <li>Personal development is fundamental to what we do in preparing students for life after school and the world of work. Our widely recognised careers programme gives children in every year group opportunities to consider their future and meet people from outside of school</li>
                        <li>We encourage students to be ambitious through our links with colleges and universities</li>
                        <li>SMSC at Park promotes British Values through a comprehensive programme of assemblies, personal development and Challenge Days</li>
                        <li>Engaging Park students in our story and developing a sense of pride in this community</li>
                    </ul>

                    <p>We aim to help students find what they love and therefore our curriculum focusses on developing depth of understanding, sequencing of learning to allow revisiting of concepts and application of knowledge at regular opportunities.</p>
                    
                    <p>All students study a broad and balanced curriculum. At Key Stage 3 (years 7,8 and 9) this includes our Much More Than Just A School (MMTJAS) experiences including Enterprise at our print unit, Media making in our Media Suite, Construction at our Construction Skills Centre, Catering in the school restaurant and work at our small holding. At Key Stage 4, students study between 9-11 subjects for which they take formal qualifications.</p>
                    
                    <p>Our curriculum is designed to fit with our school context. It begins in year 7 with a focus on Identity across all subjects wherein core knowledge and concepts are introduced, developed and explored and linked to students' own experiences and local context initially, and ultimately one's role as an individual in society.</p>
                    
                    <p>When planning curriculum, subject leaders use the National Curriculum, GCSE syllabi and subject specific research to develop curriculums that match our curriculum vision.</p>

                    <div class="text-center">
                        <a role="button" target="_blank" href="assets/curriculum/curriculum.jpg" class="cta-button">
                            <i class="fas fa-eye" aria-hidden="true"></i>
                            Curriculum Intent Review and Delivery
                        </a>
                    </div>

                    <!-- Year Groups Section -->
                    <div class="year-groups-section">
                        <h4 class="year-groups-title">Which subjects do students study?</h4>

                        <div class="year-accordion">
                            <a href="#year7" class="year-header" onclick="toggleYear('year7', this)">
                                <h5 class="year-title">Year 7</h5>
                                <i class="fas fa-chevron-down year-icon" aria-hidden="true"></i>
                            </a>
                            <div id="year7" class="year-content">
                                <ul class="subject-list">
                                    <li class="subject-item"><strong>Core Subjects:</strong> English, Maths and Science</li>
                                    <li class="subject-item"><strong>Cultural:</strong> Geography, History, Religious Education, Spanish</li>
                                    <li class="subject-item"><strong>The Arts:</strong> Art, Dance, Drama, Music</li>
                                    <li class="subject-item"><strong>Physical Education:</strong> PE</li>
                                    <li class="subject-item"><strong>Design and Technology:</strong> Food and Design Technology</li>
                                    <li class="subject-item"><strong>Much More Than...:</strong> Students visit our small holding, participate in an enterprise project at our print business <a href="../design-print.php" target="_blank">(PDP)</a> and develop culinary skills in our school <a href="../catering.php" target="_blank">kitchen</a></li>
                                    <li class="subject-item"><strong>Technology:</strong> IT opportunities built across curriculum and through Computer Science</li>
                                    <li class="subject-item"><strong>SMSC:</strong> Including mentoring and personal development</li>
                                </ul>
                            </div>
                        </div>

                        <div class="year-accordion">
                            <a href="#year8" class="year-header" onclick="toggleYear('year8', this)">
                                <h5 class="year-title">Year 8</h5>
                                <i class="fas fa-chevron-down year-icon" aria-hidden="true"></i>
                            </a>
                            <div id="year8" class="year-content">
                                <ul class="subject-list">
                                    <li class="subject-item"><strong>Core Subjects:</strong> English, Maths and Science</li>
                                    <li class="subject-item"><strong>Cultural:</strong> Geography, History, Religious Education, Spanish, French</li>
                                    <li class="subject-item"><strong>The Arts:</strong> Art, Dance, Drama, Music</li>
                                    <li class="subject-item"><strong>Physical Education:</strong> PE</li>
                                    <li class="subject-item"><strong>Design and Technology:</strong> Food and Design Technology</li>
                                    <li class="subject-item"><strong>Much More Than...:</strong> Students visit our small holding, learn construction skills in our <a href="../apex-centre.php" target="_blank">Apex Centre</a> and develop catering skills in our school <a href="../catering.php" target="_blank">kitchen</a></li>
                                    <li class="subject-item"><strong>Technology:</strong> IT opportunities built across curriculum and through Computer Science</li>
                                    <li class="subject-item"><strong>SMSC:</strong> Including mentoring and personal development</li>
                                </ul>
                            </div>
                        </div>

                        <div class="year-accordion">
                            <a href="#year9" class="year-header" onclick="toggleYear('year9', this)">
                                <h5 class="year-title">Year 9</h5>
                                <i class="fas fa-chevron-down year-icon" aria-hidden="true"></i>
                            </a>
                            <div id="year9" class="year-content">
                                <ul class="subject-list">
                                    <li class="subject-item"><strong>Core Subjects:</strong> English, Maths and Science</li>
                                    <li class="subject-item"><strong>Cultural:</strong> Geography, History, Religious Education, Spanish</li>
                                    <li class="subject-item"><strong>The Arts:</strong> Art, Dance, Drama, Music</li>
                                    <li class="subject-item"><strong>Design and Technology:</strong> Food and Design Technology</li>
                                    <li class="subject-item"><strong>Physical Education:</strong> PE</li>
                                    <li class="subject-item"><strong>Much More Than...:</strong> Students visit our small holding, learn construction skills in our <a href="../apex-centre.php" target="_blank">Apex Centre</a> and develop catering skills in our school <a href="../catering.php" target="_blank">kitchen</a></li>
                                    <li class="subject-item"><strong>Technology:</strong> IT opportunities built across curriculum and through Computer Science</li>
                                    <li class="subject-item"><strong>SMSC:</strong> Including mentoring and personal development</li>
                                </ul>
                            </div>
                        </div>

                        <div class="year-accordion">
                            <a href="#year10" class="year-header" onclick="toggleYear('year10', this)">
                                <h5 class="year-title">Year 10</h5>
                                <i class="fas fa-chevron-down year-icon" aria-hidden="true"></i>
                            </a>
                            <div id="year10" class="year-content">
                                <ul class="subject-list">
                                    <li class="subject-item"><strong>Core:</strong> English Language and English Literature, Maths</li>
                                    <li class="subject-item"><strong>Science:</strong> Combined Science, Triple Science</li>
                                    <li class="subject-item"><strong>Compulsory:</strong> Core PE and Religious Education</li>
                                    <li class="subject-item"><strong>Options:</strong> 3 subjects from: Art, Computer Science, Construction, Dance, Drama, Graphics, Horticulture, Food and Nutrition, Geography, History, Music, Photography, Resistant Materials, RS, Spanish, Statistics</li>
                                    <li class="subject-item"><strong>SMSC:</strong> Including mentoring and personal development</li>
                                </ul>
                            </div>
                        </div>

                        <div class="year-accordion">
                            <a href="#year11" class="year-header" onclick="toggleYear('year11', this)">
                                <h5 class="year-title">Year 11</h5>
                                <i class="fas fa-chevron-down year-icon" aria-hidden="true"></i>
                            </a>
                            <div id="year11" class="year-content">
                                <ul class="subject-list">
                                    <li class="subject-item"><strong>Core:</strong> English Language and English Literature, Maths</li>
                                    <li class="subject-item"><strong>Science:</strong> Science</li>
                                    <li class="subject-item"><strong>Compulsory:</strong> Core PE and Religious Education</li>
                                    <li class="subject-item"><strong>Options:</strong> 3 subjects from: Art, Dance, Food and Nutrition, Geography, History, Music, Photography, Resistant Materials, Spanish, Psychology, Statistics</li>
                                    <li class="subject-item"><strong>SMSC:</strong> Including mentoring and personal development</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Download Section -->
                    <div class="download-section">
                        <h4 style="color: var(--text-dark); margin-bottom: 1rem;">GCSE Options Information</h4>
                        <p style="color: var(--text-dark); margin-bottom: 1.5rem;">Download our comprehensive guide to GCSE course options for 2025-2027</p>
                        <a class="download-button" href="/assets/curriculum/Options Booklet 2025 PV. V3.pdf" target="_blank">
                            <i class="fas fa-download" aria-hidden="true"></i>
                            GCSE Courses Booklet (2025-2027)
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
        function toggleYear(yearId, headerElement) {
            event.preventDefault();
            
            // Get the content element
            const content = document.getElementById(yearId);
            const icon = headerElement.querySelector('.year-icon');
            
            // Close all other accordions
            document.querySelectorAll('.year-content').forEach(otherContent => {
                if (otherContent.id !== yearId) {
                    otherContent.classList.remove('active');
                }
            });
            
            document.querySelectorAll('.year-header').forEach(otherHeader => {
                if (otherHeader !== headerElement) {
                    otherHeader.classList.remove('active');
                }
            });
            
            // Toggle current accordion
            content.classList.toggle('active');
            headerElement.classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Open first year by default
            const firstYear = document.querySelector('.year-accordion .year-header');
            if (firstYear) {
                firstYear.click();
            }

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

            // Animate year accordions
            const yearAccordions = document.querySelectorAll('.year-accordion');
            yearAccordions.forEach((accordion, index) => {
                accordion.style.opacity = '0';
                accordion.style.transform = 'translateY(30px)';
                accordion.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(accordion);
            });
        });
    </script>
</body>
</html>