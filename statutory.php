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

        .policies-list {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .policies-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .policies-list li {
            padding: 6px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .policies-list li:last-child {
            border-bottom: none;
        }

        .policy-link {
            color: #2563eb !important;
            text-decoration: none !important;
            font-weight: 500;
        }

        .policy-link:hover {
            text-decoration: underline !important;
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
            .policies-list {
                padding: 20px;
            }

            .policies-list li {
                font-size: 0.95rem;
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

        <!-- Policies List -->
        <div class="policies-list">
            <ul>
                <li>• <a href="/admissions.php" class="policy-link">Admission Arrangements</a></li>
                <li>• <a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link">Behaviour Policy</a></li>
                <li>• <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link">Careers Education Guidance</a></li>
                <li>• <a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link">Charging and Remissions</a></li>
                <li>• <a href="/assets/policies/4.2 Child Protection - September 2025.pdf" target="_blank" class="policy-link">Child Protection</a></li>
                <li>• <a href="/assets/policies/complaints.pdf" target="_blank" class="policy-link">Complaints Procedure</a></li>
                <li>• <a href="/curriculum.php" class="policy-link">Curriculum</a></li>
                <li>• <a href="#" class="policy-link">ECT Induction</a></li>
                <li>• <a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link">Equality Statement</a></li>
                <li>• <a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link">Ethos and Values</a></li>
                <li>• <a href="/financial-benchmarking.php" class="policy-link">Financial Benchmarking</a></li>
                <li>• <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link">Governors' Allowances</a></li>
                <li>• <a href="/assets/statutory/Website KS4 Results 2025 GCSEs.pdf" target="_blank" class="policy-link">Key Stage 4 Results</a></li>
                <li>• <a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link">Leaver Destinations</a></li>
                <li>• <a href="/ofsted-reports.php" class="policy-link">Ofsted Reports 2022</a></li>
                <li>• <a href="//www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link">Performance Tables</a></li>
                <li>• <a href="/pupil-premium.php" class="policy-link">Pupil Premium</a></li>
                <li>• <a href="/assets/policies/4.1 Safeguarding September 2025" class="policy-link">Safeguarding Policy, Procedure and Guidance</a></li>
                <li>• <a href="/assets/policies/SEND Information Report - September 2024.pdf" target="_blank" class="policy-link">SEND Information Report</a></li>
                <li>• <a href="/assets/policies/SEND - September 2024.pdf" target="_blank" class="policy-link">SEND Policy</a></li>
                <li>• <a href="/smsc.php" class="policy-link">SMSC (Spiritual, Moral, Social & Cultural)</a></li>
                <li>• <a href="/summer-school.php" class="policy-link">Summer School</a></li>
                <li>• <a href="/assets/policies/suspension_and_permanent_exclusion.pdf" target="_blank" class="policy-link">Suspension and Permanent Exclusion</a></li>
            </ul>
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
        // Search functionality removed as it's no longer needed for bullet list
    </script>
</body>
</html>