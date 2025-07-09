<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Community School | Statutory Information</title>
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

        .container .info-section {
            background: white !important;
            background-color: white !important;
            padding: 30px !important;
            border-radius: 12px !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important;
            margin-bottom: 40px !important;
            color: #000000 !important;
            border: 1px solid #e5e7eb !important;
        }

        main .info-section {
            background: white !important;
            background-color: white !important;
        }

        .info-section {
            background: white !important;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            color: #000000;
            border: 1px solid #e5e7eb;
        }

        .info-section h2 {
            color: #000000 !important;
            margin-bottom: 16px !important;
        }

        .info-section a {
            color: #2563eb !important;
            text-decoration: none !important;
            font-weight: 600 !important;
        }

        .info-section a:hover {
            text-decoration: underline !important;
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
            <p>Every maintained school must publish specific information on its website to comply with The School Information Regulations 2012. Below you'll find every piece of information we are required to provide as a Community School, organized for easy access.</p>
        </div>

        <!-- Policy Navigation -->
        <div class="policy-nav">
            <div class="nav-row top">
                <a href="/policies.php" class="nav-button">Non-Statutory</a>
                <a href="/exams-policies.php" class="nav-button">Exams Policies</a>
            </div>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" id="policySearch" class="search-input" placeholder="Search for a specific policy or information...">
        </div>

        <!-- Policies Grid -->
        <div class="policies-grid" id="policiesGrid">
            <div class="policy-card" data-search="admission arrangements">
                <div class="policy-title">Admission Arrangements</div>
                <a href="/admissions.php" class="policy-link">View Details</a>
            </div>

            <div class="policy-card" data-search="behaviour policy">
                <div class="policy-title">Behaviour Policy</div>
                <a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="careers education guidance ceiag">
                <div class="policy-title">Careers Education Guidance</div>
                <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="charging remissions fees">
                <div class="policy-title">Charging and Remissions</div>
                <a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="complaints procedure">
                <div class="policy-title">Complaints Procedure</div>
                <a href="/assets/policies/complaints.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="curriculum subjects">
                <div class="policy-title">Curriculum</div>
                <a href="/curriculum.php" class="policy-link">View Curriculum</a>
            </div>

            <div class="policy-card" data-search="ect induction early career teacher">
                <div class="policy-title">ECT Induction</div>
                <a href="#" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="ethos values school mission">
                <div class="policy-title">Ethos and Values</div>
                <a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="equality statement objectives">
                <div class="policy-title">Equality Statement</div>
                <a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="governor allowances expenses">
                <div class="policy-title">Governors' Allowances</div>
                <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="financial benchmarking budget">
                <div class="policy-title">Financial Benchmarking</div>
                <a href="/financial-benchmarking.php" class="policy-link">View Benchmarking</a>
            </div>

            <div class="policy-card" data-search="key stage 4 results gcse">
                <div class="policy-title">Key Stage 4 Results</div>
                <a href="/assets/statutory/ks4-results.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="leaver destinations post-16">
                <div class="policy-title">Leaver Destinations</div>
                <a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted reports inspection">
                <div class="policy-title">Ofsted Reports 2022</div>
                <a href="/ofsted-reports.php" class="policy-link">View Reports</a>
            </div>

            <div class="policy-card" data-search="performance tables government data">
                <div class="policy-title">Performance Tables</div>
                <a href="//www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link external">View on Gov.uk</a>
            </div>

            <div class="policy-card" data-search="pupil premium funding">
                <div class="policy-title">Pupil Premium</div>
                <a href="/pupil-premium.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="send information report special educational needs">
                <div class="policy-title">SEND Information Report</div>
                <a href="/assets/policies/SEND Information Report - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="send policy special educational needs">
                <div class="policy-title">SEND Policy</div>
                <a href="/assets/policies/SEND - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="smsc spiritual moral social cultural">
                <div class="policy-title">SMSC (Spiritual, Moral, Social & Cultural)</div>
                <a href="/smsc.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="summer school">
                <div class="policy-title">Summer School</div>
                <a href="/summer-school.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="suspension permanent exclusion">
                <div class="policy-title">Suspension and Permanent Exclusion</div>
                <a href="/assets/policies/suspension_and_permanent_exclusion.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>
        </div>

        <!-- Policy Information -->
        <div class="info-section" style="background: white !important; background-color: white !important; padding: 30px !important; border-radius: 12px !important; box-shadow: 0 2px 10px rgba(0,0,0,0.1) !important; margin-bottom: 40px !important; border: 1px solid #e5e7eb !important;">
            <h2 style="color: #000000 !important; margin-bottom: 16px !important;">Policy Information</h2>
            <p style="color: #000000 !important;">All our policies are reviewed regularly by the Senior Leadership Team and approved by the Governing Body. If you have any questions about our policies or require an accessible format, please <a href="/contact.php" style="color: #2563eb !important; text-decoration: none !important; font-weight: 600 !important;">contact us</a>.</p>
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