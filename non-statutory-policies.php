<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Community School | Non-Statutory Policies</title>
    <?php include("includes/head.html") ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #000000;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .intro-text {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            margin-top: 40px;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .search-box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .search-input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .policies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .policy-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .policy-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .policy-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #000000;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .policy-link {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.3s ease;
            margin-right: 8px;
            margin-bottom: 8px;
        }

        .policy-link {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            background: #2563eb;
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.3s ease;
            margin-right: 8px;
            margin-bottom: 8px;
        }

        .policy-link:link,
        .policy-link:visited,
        .policy-link:active {
            color: white !important;
            text-decoration: none !important;
        }

        .policy-link:hover {
            background: #1d4ed8;
            color: white !important;
        }

        .policy-link:hover:link,
        .policy-link:hover:visited {
            color: white !important;
        }

        .policy-link.external::after {
            content: '↗';
            margin-left: 6px;
            font-size: 0.9em;
        }

        .policy-link.pdf::after {
            content: '📄';
            margin-left: 6px;
        }

        .policy-date {
            font-size: 0.9rem;
            color: #666;
            margin-top: 8px;
        }

        .info-section {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            color: #000000;
        }

        .info-section h2 {
            color: #000000;
            margin-bottom: 16px;
        }

        .info-section a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
        }

        .info-section a:hover {
            text-decoration: underline;
        }

        .policy-nav {
            display: flex;
            gap: 12px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .nav-row {
            display: flex;
            gap: 12px;
            width: 100%;
            flex-wrap: wrap;
        }

        .nav-row.top {
            margin-bottom: 12px;
        }

        .nav-row .nav-button {
            flex: 1;
        }

        .nav-button {
            padding: 12px 20px;
            background: #f3f4f6;
            color: #000000 !important;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
            text-align: center;
        }

        .nav-button:link,
        .nav-button:visited,
        .nav-button:active {
            color: #000000 !important;
            text-decoration: none !important;
        }

        .nav-button:hover {
            background: #e5e7eb;
            color: #000000 !important;
        }

        .nav-button:hover:link,
        .nav-button:hover:visited {
            color: #000000 !important;
        }

        .nav-button.active {
            background: #f3f4f6;
            color: #000000 !important;
            border-color: #e5e7eb;
        }

        .nav-button.active:link,
        .nav-button.active:visited {
            color: #000000 !important;
        }

        .nav-button.active:hover {
            background: #e5e7eb;
            border-color: #e5e7eb;
            color: #000000 !important;
        }

        .hidden {
            display: none;
        }

        @media (max-width: 768px) {
            .policies-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .policy-card {
                padding: 20px;
            }

            .policy-nav {
                flex-direction: column;
            }

            .nav-row {
                justify-content: center;
            }

            .nav-button {
                flex: 1;
                min-width: 120px;
                text-align: center;
            }
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- MAIN CONTENT -->
    <main class="container">
        <!-- Introduction -->
        <div class="intro-text">
            <p>Below are our non-statutory policies that support the daily operations of Park Community School. These policies complement our statutory requirements and help ensure the school runs smoothly and effectively for all our students, staff, and community.</p>
        </div>

        <!-- Policy Navigation -->
        <div class="policy-nav">
            <div class="nav-row top">
                <a href="/statutory-policies.php" class="nav-button">Statutory Policies</a>
                <a href="/non-statutory-policies.php" class="nav-button active">Non-Statutory</a>
                <a href="/exam-policies.php" class="nav-button">Exams Policies</a>
            </div>
            <div class="nav-row">
                <a href="/policies.php" class="nav-button">All Policies</a>
            </div>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" id="policySearch" class="search-input" placeholder="Search for a specific policy or information...">
        </div>

        <!-- Non-Statutory Policies Grid -->
        <div class="policies-grid" id="policiesGrid">
            <div class="policy-card" data-search="admissions admission enrolment enrollment">
                <div class="policy-title">Admissions</div>
                <a href="/assets/policies/admissions-2024-2025.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024-2025</div>
            </div>

            <div class="policy-card" data-search="careers education information advice guidance ceiag">
                <div class="policy-title">Careers Education, Information, Advice and Guidance</div>
                <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="cctv surveillance camera security">
                <div class="policy-title">CCTV</div>
                <a href="/assets/policies/cctv.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="charging remissions fees payments financial">
                <div class="policy-title">Charging and Remissions</div>
                <a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">January 2025</div>
            </div>

            <div class="policy-card" data-search="governors allowances governance">
                <div class="policy-title">Governors' Allowances</div>
                <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">November 2024</div>
            </div>

            <div class="policy-card" data-search="homework assignment classwork">
                <div class="policy-title">Homework</div>
                <a href="/assets/policies/homework.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="malpractice exams assessment cheating plagiarism">
                <div class="policy-title">Malpractice (Exams Assessment)</div>
                <a href="/assets/policies/malpractice.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="mental health emotional wellbeing wellness">
                <div class="policy-title">Mental Health and Emotional Wellbeing</div>
                <a href="/assets/policies/mental-health-and-emotional-wellbeing.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="pupil premium disadvantaged funding">
                <div class="policy-title">Pupil Premium</div>
                <a href="/assets/policies/pupil-premium.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="risk assessment safety hazard">
                <div class="policy-title">Risk Assessment</div>
                <a href="/assets/policies/risk-assessment.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="volunteering volunteer helper">
                <div class="policy-title">Volunteering</div>
                <a href="/assets/policies/volunteering.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="word processor laptop computer exam">
                <div class="policy-title">Word Processor</div>
                <a href="/assets/policies/word-processor.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>

            <div class="policy-card" data-search="work experience placement internship">
                <div class="policy-title">Work Experience</div>
                <a href="/assets/policies/work-experience.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
                <div class="policy-date">2024</div>
            </div>
        </div>

        <!-- Policy Information -->
        <div class="info-section">
            <h2>Policy Information</h2>
            <p>All our policies are reviewed regularly by the Senior Leadership Team and approved by the Governing Body. If you have any questions about our policies or require an accessible format, please <a href="/contact.php">contact us</a>.</p>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>

    <script>
        // Search functionality
        document.getElementById('policySearch').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const policyCards = document.querySelectorAll('.policy-card');
            
            policyCards.forEach(card => {
                const searchData = card.getAttribute('data-search');
                const title = card.querySelector('.policy-title').textContent.toLowerCase();
                
                if (searchData.includes(searchTerm) || title.includes(searchTerm)) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>