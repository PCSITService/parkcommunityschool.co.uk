<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Financial Education</title>
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

        .year-details h4 {
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .year-details p {
            color: var(--text-medium);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Resources Section */
        .resources-section {
            margin: 4rem 0 2rem 0;
            padding: 3rem 2rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-subtle);
        }

        .resources-section h3 {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--text-dark);
            font-size: 2rem;
            font-weight: 600;
        }

        .resources-section h3::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--park-green);
            margin: 1rem auto;
            border-radius: 2px;
        }

        .resources-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .resource-card {
            background: var(--white);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-subtle);
            transition: var(--transition);
            border: 1px solid var(--border-light);
            position: relative;
            overflow: hidden;
        }

        .resource-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--park-green), var(--park-blue));
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-medium);
        }

        .resource-icon {
            font-size: 2.5rem;
            margin-bottom: 0.75rem;
            display: block;
        }

        .resource-card h4 {
            color: var(--text-dark);
            margin-bottom: 0.75rem;
            font-size: 1.1rem;
        }

        .resource-card p {
            color: var(--text-medium);
            margin-bottom: 1rem;
            font-size: 0.85rem;
            line-height: 1.5;
        }

        .resource-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, var(--park-green), #558B2F);
            color: var(--white) !important;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            text-decoration: none !important;
            font-weight: 500;
            font-size: 0.8rem;
            transition: var(--transition);
            box-shadow: var(--shadow-subtle);
        }

        .resource-link:hover {
            background: linear-gradient(135deg, #558B2F, var(--park-green));
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
            color: var(--white) !important;
        }

        .resource-link::after {
            content: '→';
            font-weight: bold;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 0 1rem;
            }

            .content-section {
                padding: 2rem 0;
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

            .resources-section {
                margin: 2rem 0;
                padding: 2rem 1rem;
            }

            .resources-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .resource-card {
                padding: 1.2rem;
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

                    <!-- Year Progression -->
                    <div class="year-progression">
                        
                        <div class="year-block">
                            <div class="year-label">
                                Year 7
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Saving or savings</div>
                                    <div class="topic-item">Making the most of your money - Spending</div>
                                    <div class="topic-item">Making the most of your money - Paying</div>
                                    <div class="topic-item">Making the most of your money – budgeting</div>
                                    <div class="topic-item">Value for money</div>
                                </div>
                                <div class="year-details">
                                    <h4>Money Management Basics</h4>
                                    <p>Establishing fundamental financial skills including saving, spending wisely, understanding payment methods, and basic budgeting principles.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 8
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Risk and Reward – Risk</div>
                                    <div class="topic-item">Risk and Reward – Investments</div>
                                    <div class="topic-item">Risk and Reward – Protecting yourself</div>
                                    <div class="topic-item">Security and Fraud – Fraud</div>
                                    <div class="topic-item">Security and Fraud – Online</div>
                                    <div class="topic-item">Security and Fraud – Money mules</div>
                                </div>
                                <div class="year-details">
                                    <h4>Risk Awareness & Security</h4>
                                    <p>Understanding financial risks and rewards, learning about investments, and developing awareness of fraud prevention and online security.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 9
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Saving – Simple and Compound</div>
                                    <div class="topic-item">Borrowing – Debt</div>
                                    <div class="topic-item">Borrowing – Informed choices</div>
                                    <div class="topic-item">Borrowing – Products</div>
                                    <div class="topic-item">Borrowing – Mortgages</div>
                                </div>
                                <div class="year-details">
                                    <h4>Borrowing & Advanced Saving</h4>
                                    <p>Exploring compound interest, understanding debt and borrowing responsibly, and learning about financial products including mortgages.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 10
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">Future of ways to pay</div>
                                    <div class="topic-item">Next steps after school</div>
                                    <div class="topic-item">Tax – Why do we pay it</div>
                                    <div class="topic-item">Budgeting – The process</div>
                                    <div class="topic-item">Understanding payslips</div>
                                    <div class="topic-item">Saving…a plan</div>
                                </div>
                                <div class="year-details">
                                    <h4>Future Finance & Career Preparation</h4>
                                    <p>Understanding taxation, payslips, and budgeting processes while exploring future payment methods and post-school financial planning.</p>
                                </div>
                            </div>
                        </div>

                        <div class="year-block">
                            <div class="year-label">
                                Year 11
                            </div>
                            <div class="year-content">
                                <div class="year-topics">
                                    <div class="topic-item">My Money matters certificate of financial competence</div>
                                    <div class="topic-item">6 self-paced sessions and quizzes</div>
                                    <div class="topic-item">Scenario based with real case studies in personal finance</div>
                                </div>
                                <div class="year-details">
                                    <h4>Financial Competence Certification</h4>
                                    <p>Completing comprehensive financial education through practical, scenario-based learning and achieving formal financial competence qualification.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Financial Education Resources Section -->
                    <div class="resources-section">
                        <h3>Helpful Financial Education Resources</h3>
                        
                        <div class="resources-grid">
                            <div class="resource-card">
                                <div class="resource-icon">🏦</div>
                                <h4>MoneyHelper</h4>
                                <p>Free, impartial money and pension guidance from the Money and Pensions Service</p>
                                <a href="https://www.moneyhelper.org.uk/en" target="_blank" class="resource-link">Visit MoneyHelper</a>
                            </div>

                            <div class="resource-card">
                                <div class="resource-icon">📚</div>
                                <h4>Bank of England - Money and Me</h4>
                                <p>Free 12-lesson teaching resource introducing young people to money and economics</p>
                                <a href="https://www.bankofengland.co.uk/education/education-resources/money-and-me" target="_blank" class="resource-link">Explore Money and Me</a>
                            </div>

                            <div class="resource-card">
                                <div class="resource-icon">🎯</div>
                                <h4>MyBnk</h4>
                                <p>Expert-led financial education workshops covering budgeting, banking, borrowing and more</p>
                                <a href="https://www.mybnk.org/" target="_blank" class="resource-link">Learn with MyBnk</a>
                            </div>

                            <div class="resource-card">
                                <div class="resource-icon">⭐</div>
                                <h4>Young Money (Young Enterprise)</h4>
                                <p>Resources and training for teaching money management skills to young people</p>
                                <a href="https://www.young-enterprise.org.uk/teachers-hub/financial-education/" target="_blank" class="resource-link">Access Young Money</a>
                            </div>

                            <div class="resource-card">
                                <div class="resource-icon">💡</div>
                                <h4>Money Saving Expert - Financial Education</h4>
                                <p>Free financial education resources including guides for children and adults</p>
                                <a href="https://www.moneysavingexpert.com/family/financial-education/" target="_blank" class="resource-link">Get Money Tips</a>
                            </div>

                            <div class="resource-card">
                                <div class="resource-icon">🏛️</div>
                                <h4>Lloyds Bank Academy</h4>
                                <p>Financial skills resources for young people aged 3-16+ with Quality Mark accreditation</p>
                                <a href="https://www.lloydsbankacademy.co.uk/financial-skills.html" target="_blank" class="resource-link">Visit Academy</a>
                            </div>
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