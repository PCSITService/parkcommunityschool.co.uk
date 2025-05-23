<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Student Recruitment</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #3d7c47;
            --accent-color: #ff6b35;
            --success-color: #28a745;
            --info-color: #17a2b8;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --shadow: 0 4px 20px rgba(0,0,0,0.1);
            --gradient: linear-gradient(135deg, #2c5aa0, #4a7bb7);
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
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="work" width="40" height="40" patternUnits="userSpaceOnUse"><circle cx="20" cy="10" r="2" fill="white" opacity="0.1"/><circle cx="10" cy="25" r="1.5" fill="white" opacity="0.08"/><circle cx="30" cy="30" r="1" fill="white" opacity="0.06"/></pattern></defs><rect width="100" height="100" fill="url(%23work)"/></svg>');
            animation: drift 25s ease-in-out infinite;
        }

        @keyframes drift {
            0%, 100% { transform: translateX(0px); }
            50% { transform: translateX(20px); }
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
            padding: 3rem 0;
        }

        .intro-section {
            background: var(--bg-light);
            padding: 4rem 0;
        }

        .intro-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .intro-text {
            font-size: 1.2rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        /* Process Steps */
        .process-section {
            background: var(--bg-white);
            padding: 4rem 0;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.5rem);
            font-weight: 700;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 3rem;
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .process-step {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
            position: relative;
        }

        .process-step::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
            border-radius: 15px 15px 0 0;
        }

        .process-step:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(44, 90, 160, 0.2);
        }

        .step-icon {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 1.5rem;
        }

        .step-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .step-description {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Age Requirements */
        .age-info {
            background: linear-gradient(135deg, #fef7e6, #fff3cd);
            border-left: 4px solid var(--accent-color);
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .age-info-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--accent-color);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Jobs Section */
        .jobs-section {
            background: var(--bg-light);
            padding: 4rem 0;
        }

        .jobs-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .job-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid #f0f0f0;
        }

        .job-card h4 {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .job-card p {
            color: var(--text-light);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .job-highlight {
            background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
            border-radius: 10px;
            padding: 1.5rem;
            margin: 1rem 0;
        }

        /* Documentation Card */
        .doc-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid #f0f0f0;
        }

        .doc-card h4 {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .download-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--secondary-color);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .download-link:hover {
            background: #2d5a36;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(61, 124, 71, 0.3);
            text-decoration: none;
            color: white;
        }

        /* Final Steps Section */
        .final-steps {
            background: var(--bg-white);
            padding: 4rem 0;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .step-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: var(--shadow);
            border: 1px solid #f0f0f0;
            text-align: center;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: var(--success-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-weight: 700;
        }

        /* Contact Section */
        .contact-section {
            background: var(--gradient);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .contact-content h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .contact-email {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem 2rem;
            border-radius: 30px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .contact-email:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .jobs-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .header-school {
                padding: 2rem 0;
            }

            .content-section {
                padding: 2rem 0;
            }

            .intro-section, .process-section, .jobs-section, .final-steps {
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



    <!-- INTRO SECTION -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-content">
                <p class="intro-text">
                    At Park we recognise how difficult it is for young people to gain valuable work experience, so we provide meaningful opportunities for students to develop professional skills and earn while they learn.
                </p>
            </div>
        </div>
    </section>

    <!-- RECRUITMENT PROCESS -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Recruitment Process</h2>
            <p style="text-align: center; color: var(--text-light); margin-bottom: 3rem; font-size: 1.1rem;">
                Students will go through a comprehensive recruitment process to ensure they're ready for the workplace
            </p>
            
            <div class="process-grid">
                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-file-alt" aria-hidden="true"></i>
                    </div>
                    <h3 class="step-title">Application</h3>
                    <p class="step-description">Complete an application form and supply references to demonstrate your suitability for the role</p>
                </div>

                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </div>
                    <h3 class="step-title">Group Task</h3>
                    <p class="step-description">Participate in a collaborative group activity to showcase your teamwork and problem-solving skills</p>
                </div>

                <div class="process-step">
                    <div class="step-icon">
                        <i class="fas fa-comments" aria-hidden="true"></i>
                    </div>
                    <h3 class="step-title">Interview</h3>
                    <p class="step-description">Attend a professional interview to discuss your motivations and demonstrate your communication skills</p>
                </div>
            </div>

            <div class="age-info">
                <h3 class="age-info-title">
                    <i class="fas fa-info-circle" aria-hidden="true"></i>
                    Age Requirements
                </h3>
                <p>The law states that children must be 13 years of age to be employed. Therefore, Year 7/8 students can only volunteer and will receive reward points. Their work experience will be recognised in any application for paid positions in Year 9.</p>
            </div>
        </div>
    </section>

    <!-- JOBS SECTION -->
    <section class="jobs-section">
        <div class="container">
            <div class="jobs-grid">
                <div class="job-card">
                    <h4>Available Positions</h4>
                    <p>Please visit the recruitment board outside KD3 to see if a position is available.</p>
                    
                    <div class="job-highlight">
                        <p><strong>What you'll do:</strong> Student workers will assist with general site upkeep, support with school and community events, and provide excellent customer service.</p>
                    </div>
                    
                    <p>Specific roles may be available depending on school needs. If you have particular interests or skills, please speak with community staff to discuss potential opportunities.</p>
                </div>

                <div class="doc-card">
                    <h4>Documentation</h4>
                    <p>Download the required forms to begin your application process:</p>
                    
                    <a href="assets/studentrecruitment/documentation/application-form.docx" target="_blank" class="download-link">
                        <i class="fas fa-download" aria-hidden="true"></i>
                        Application Form
                    </a>
                    
                    <p style="margin-top: 1.5rem; font-size: 0.9rem; color: var(--text-light);">
                        <i class="fas fa-file-word" aria-hidden="true"></i>
                        Downloadable Word Document
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- NEXT STEPS -->
    <section class="final-steps">
        <div class="container">
            <h2 class="section-title">After Successful Application</h2>
            
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Work Permit</h3>
                    <p>Complete a work permit form that a parent or carer must sign. Hampshire County Council will approve this to ensure you work the appropriate hours for your age.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Training & Equipment</h3>
                    <p>Receive necessary training and equipment to ensure you can perform your role safely and effectively.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Bank Account</h3>
                    <p>Set up a bank account to receive payment for your work (required for paid positions in Year 9 and above).</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-content">
                <h3>Ready to Apply?</h3>
                <p style="margin-bottom: 2rem; opacity: 0.9;">
                    Fill in the application form and return completed applications to our Student Recruitment team
                </p>
                <a href="javascript:location='mailto:\u0073\u0074\u0075\u0064\u0065\u006e\u0074\u0052\u0065\u0063\u0072\u0075\u0069\u0074\u006d\u0065\u006e\u0074\u0040\u0070\u0063\u0073\u002e\u0068\u0061\u006e\u0074\u0073\u002e\u0073\u0063\u0068\u002e\u0075\u006b';void 0" class="contact-email">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    StudentRecruitment@pcs.hants.sch.uk
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
            const animatedElements = document.querySelectorAll('.process-step, .job-card, .doc-card, .step-card');
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