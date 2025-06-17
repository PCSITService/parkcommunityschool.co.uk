<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Curriculum</title>
    <?php include("includes/head.html") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        /* CSS Variables matching the PDF design */
        :root {
            --park-green: #7CB342;
            --park-blue: #4FC3F7;
            --park-light-green: #AED581;
            --background-gray: #F8F9FA;
            --white: #ffffff;
            --text-dark: #2E2E2E;
            --text-medium: #666666;
            --border-light: #E0E0E0;
            --shadow-subtle: 0 2px 8px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 4px 12px rgba(0, 0, 0, 0.12);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        /* Clean base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: var(--white);
        }

        /* Page structure */
        .page-learning {
            background: var(--white);
            min-height: 100vh;
        }

        /* Content section */
        .content-section {
            padding: 3rem 0;
            background: var(--background-gray);
            min-height: 80vh;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Main header matching PDF style */
        .curriculum-header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 3rem 2rem;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-subtle);
            position: relative;
            overflow: hidden;
        }

        .curriculum-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--park-green), var(--park-blue));
        }

        .curriculum-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .curriculum-header .subtitle {
            font-size: 1.1rem;
            color: var(--text-medium);
            font-weight: 400;
        }

        /* Year progression layout matching PDF */
        .year-progression {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .year-block {
            display: grid;
            grid-template-columns: 120px 1fr;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-subtle);
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid var(--border-light);
        }

        .year-block:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow-medium);
        }

        .year-label {
            background: linear-gradient(135deg, var(--park-green), var(--park-light-green));
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            text-align: center;
            padding: 2rem 1rem;
            position: relative;
        }

        .year-label::after {
            content: '';
            position: absolute;
            top: 0;
            right: -10px;
            bottom: 0;
            width: 20px;
            background: linear-gradient(135deg, var(--park-green), var(--park-light-green));
            clip-path: polygon(0 0, 100% 50%, 0 100%);
        }

        .year-content {
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
        }

        .year-topics {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .topic-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.5rem 0;
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        .topic-item::before {
            content: '•';
            color: var(--park-green);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Right side content area */
        .year-details {
            background: var(--background-gray);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            border-left: 3px solid var(--park-blue);
        }



        /* Certificate/qualification section */
        .qualification-section {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 2.5rem;
            margin: 2rem 0;
            box-shadow: var(--shadow-subtle);
            border: 1px solid var(--border-light);
            text-align: center;
        }

        .qualification-badge {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            background: linear-gradient(135deg, var(--park-blue), var(--park-green));
            color: var(--white);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .qualification-details {
            color: var(--text-medium);
            font-style: italic;
            margin-top: 1rem;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 0 1rem;
            }

            .curriculum-header {
                padding: 2rem 1rem;
                margin-bottom: 2rem;
            }

            .curriculum-header h1 {
                font-size: 2rem;
            }

            .year-block {
                grid-template-columns: 1fr;
            }

            .year-label::after {
                display: none;
            }

            .year-content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
                padding: 1.5rem;
            }


        }

        /* Smooth animations */
        .year-block {
            opacity: 0;
            animation: slideInLeft 0.6s ease forwards;
        }

        .year-block:nth-child(1) { animation-delay: 0.1s; }
        .year-block:nth-child(2) { animation-delay: 0.2s; }
        .year-block:nth-child(3) { animation-delay: 0.3s; }
        .year-block:nth-child(4) { animation-delay: 0.4s; }
        .year-block:nth-child(5) { animation-delay: 0.5s; }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Clean focus states */
        *:focus {
            outline: 2px solid var(--park-blue);
            outline-offset: 2px;
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
                    
                    <!-- Main Header -->
                    <div class="curriculum-header">
                        <h1>Curriculum Overview</h1>
                        <p class="subtitle">Structured learning pathways designed for student success</p>
                    </div>

                    <!-- Year Progression -->
                    <div class="year-progression">
                        
                        <div class="year-block">
                            <div class="year-label">
                                Year 7
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Foundation Skills Development</div>
                                    <div class="topic-item">Core Subject Introduction</div>
                                    <div class="topic-item">Study Skills & Organization</div>
                                </div>
                                <div class="year-details">
                                    <h4>Building Strong Foundations</h4>
                                    <p>Establishing essential skills and knowledge across all subject areas with focus on transition and adaptation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 8
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Skill Development & Application</div>
                                    <div class="topic-item">Critical Thinking Introduction</div>
                                    <div class="topic-item">Independent Learning Skills</div>
                                </div>
                                <div class="year-details">
                                    <h4>Developing Confidence</h4>
                                    <p>Building on Year 7 foundations with increased complexity and independent thinking skills.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 9
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Advanced Concepts & Analysis</div>
                                    <div class="topic-item">Option Subject Exploration</div>
                                    <div class="topic-item">Future Pathway Planning</div>
                                </div>
                                <div class="year-details">
                                    <h4>Preparation & Choice</h4>
                                    <p>Preparing for GCSE studies while exploring interests and future academic pathways.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 10
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">GCSE Course Commencement</div>
                                    <div class="topic-item">Exam Technique Development</div>
                                    <div class="topic-item">Career Exploration</div>
                                </div>
                                <div class="year-details">
                                    <h4>Formal Assessment Beginning</h4>
                                    <p>Starting GCSE courses with focus on exam preparation and future planning.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 11
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">GCSE Completion</div>
                                    <div class="topic-item">Final Exam Preparation</div>
                                    <div class="topic-item">Post-16 Transition Planning</div>
                                </div>
                                <div class="year-details">
                                    <h4>Achievement & Transition</h4>
                                    <p>Completing GCSE studies and preparing for next steps in education or employment.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Qualification Section -->
                    <div class="qualification-section">
                        <div class="qualification-badge">
                            <i class="fas fa-award"></i>
                            <span>Excellence in Education</span>
                        </div>
                        <h3>Comprehensive Learning Experience</h3>
                        <p class="qualification-details">
                            Structured curriculum designed to provide students with the knowledge, skills and qualifications needed for future success
                        </p>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth interactions for year blocks
            const yearBlocks = document.querySelectorAll('.year-block');
            
            yearBlocks.forEach(block => {
                block.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(8px)';
                });
                
                block.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
        });
    </script>
</body>
</html>