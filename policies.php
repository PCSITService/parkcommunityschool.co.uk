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

        .search-results-count {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #6b7280;
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

        .policies-list li.hidden {
            display: none;
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

        .no-results {
            padding: 20px;
            text-align: center;
            color: #6b7280;
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

        <!-- Search Box -->
        <div class="search-box">
            <input type="text" id="policySearch" class="search-input" placeholder="Search for a specific policy or information...">
            <div id="searchResultsCount" class="search-results-count"></div>
        </div>

        <!-- Policies List -->
        <div class="policies-list">
            <ul id="policiesList">
                <li data-policy="accessibility">• <a href="/assets/policies/Accessibility - December 2024.pdf" target="_blank" class="policy-link">Accessibility</a></li>
                <li data-policy="administration of medicines">• <a href="/assets/policies/administration-of-medicines.pdf" target="_blank" class="policy-link">Administration of Medicines</a></li>
                <li data-policy="admission arrangements">• <a href="/admissions.php" class="policy-link">Admission Arrangements</a></li>
                <li data-policy="admissions 2026-2027">• <a href="/assets/policies/Admissions Policy 2026-2027.pdf" target="_blank" class="policy-link">Admissions 2026-2027</a></li>
                <li data-policy="anti-bullying anti bullying">• <a href="/assets/policies/Anti Bullying - December 2024.pdf" target="_blank" class="policy-link">Anti-Bullying</a></li>
                <li data-policy="behaviour policy">• <a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link">Behaviour Policy</a></li>
                <li data-policy="careers education guidance ceiag">• <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link">Careers Education Guidance</a></li>
                <li data-policy="cctv">• <a href="/assets/policies/cctv.pdf" target="_blank" class="policy-link">CCTV</a></li>
                <li data-policy="charging and remissions">• <a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link">Charging and Remissions</a></li>
                <li data-policy="child protection safeguarding">• <a href="/assets/policies/4.2 Child Protection - September 2025.pdf" target="_blank" class="policy-link">Child Protection</a></li>
                <li data-policy="code of conduct">• <a href="/assets/policies/code_of_conduct.pdf" target="_blank" class="policy-link">Code of Conduct</a></li>
                <li data-policy="complaints policy procedure">• <a href="/assets/policies/Complaints Policy and Procedure - December 2025.pdf" target="_blank" class="policy-link">Complaints Policy & Procedure</a></li>
                <li data-policy="confidentiality">• <a href="/assets/policies/confidentiality.pdf" target="_blank" class="policy-link">Confidentiality</a></li>
                <li data-policy="conflict of interests">• <a href="/assets/policies/conflict-of-interests.pdf" target="_blank" class="policy-link">Conflict of Interests</a></li>
                <li data-policy="curriculum">• <a href="/curriculum.php" class="policy-link">Curriculum</a></li>
                <li data-policy="data protection gdpr">• <a href="/assets/policies/data-protection.pdf" target="_blank" class="policy-link">Data Protection</a></li>
                <li data-policy="drugs and substance misuse">• <a href="/assets/policies/drugs-substance-misuse.pdf" target="_blank" class="policy-link">Drugs and Substance Misuse</a></li>
                <li data-policy="equality and diversity">• <a href="/assets/policies/Equality and Diversity - December 2024.pdf" target="_blank" class="policy-link">Equality and Diversity</a></li>
                <li data-policy="equality statement objectives">• <a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link">Equality Statement</a></li>
                <li data-policy="e-safety esafety online safety internet">• <a href="/assets/policies/esafety.pdf" target="_blank" class="policy-link">E-Safety</a></li>
                <li data-policy="ethos and values">• <a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link">Ethos and Values</a></li>
                <li data-policy="exams 2024 examinations">• <a href="/assets/policies/exams-2024.pdf" target="_blank" class="policy-link">Exams 2024</a></li>
                <li data-policy="financial benchmarking">• <a href="/financial-benchmarking.php" class="policy-link">Financial Benchmarking</a></li>
                <li data-policy="freedom of information foi">• <a href="/assets/policies/freedom_of_information.pdf" target="_blank" class="policy-link">Freedom of Information</a></li>
                <li data-policy="governors allowances">• <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link">Governors' Allowances</a></li>
                <li data-policy="health and safety">• <a href="/assets/policies/health-and-safety.pdf" target="_blank" class="policy-link">Health and Safety</a></li>
                <li data-policy="homework">• <a href="/assets/policies/homework.pdf" target="_blank" class="policy-link">Homework</a></li>
                <li data-policy="key stage 4 results ks4 gcse">• <a href="/assets/statutory/ks4-results.pdf" target="_blank" class="policy-link">Key Stage 4 Results</a></li>
                <li data-policy="leaver destinations">• <a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link">Leaver Destinations</a></li>
                <li data-policy="malpractice exams assessment">• <a href="/assets/policies/malpractice-exams-assessment.pdf" target="_blank" class="policy-link">Malpractice (Exams Assessment)</a></li>
                <li data-policy="medical conditions">• <a href="/assets/policies/medical-conditions.pdf" target="_blank" class="policy-link">Medical Conditions</a></li>
                <li data-policy="mental health emotional wellbeing">• <a href="/assets/policies/mental-health-emotional-wellbeing-policy.pdf" target="_blank" class="policy-link">Mental Health and Emotional Wellbeing</a></li>
                <li data-policy="mobile phones">• <a href="/assets/policies/mobile-phones.pdf" target="_blank" class="policy-link">Mobile Phones</a></li>
                <li data-policy="nqt induction ect">• <a href="/assets/statutory/nqt_induction.pdf" target="_blank" class="policy-link">NQT Induction</a></li>
                <li data-policy="performance tables results">• <a href="//www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link">Performance Tables</a></li>
                <li data-policy="physical restraint use of reasonable force">• <a href="/assets/policies/Physical Restraint  Use of Reasonable Force - January 2024.pdf" target="_blank" class="policy-link">Physical Restraint & Use of Reasonable Force Policy</a></li>
                <li data-policy="prevention of radicalisation extremism prevent">• <a href="/assets/policies/prevention-of-radicalisation-and-extremism.pdf" target="_blank" class="policy-link">Prevention of Radicalisation and Extremism</a></li>
                <li data-policy="privacy notice for clients">• <a href="/assets/policies/privacy_notice_for_clients.pdf" target="_blank" class="policy-link">Privacy Notice for Clients</a></li>
                <li data-policy="privacy notice for job applicants">• <a href="/assets/policies/privacy_notice_for_job_applicants.pdf" target="_blank" class="policy-link">Privacy Notice for Job Applicants</a></li>
                <li data-policy="privacy notice for parents and students">• <a href="/assets/policies/privacy_notice_for_parents_and_students.pdf" target="_blank" class="policy-link">Privacy Notice for Parents and Students</a></li>
                <li data-policy="provider access">• <a href="/assets/policies/provider-access.pdf" target="_blank" class="policy-link">Provider Access</a></li>
                <li data-policy="pupil premium">• <a href="/pupil-premium.php" class="policy-link">Pupil Premium</a></li>
                <li data-policy="religious education collective worship re">• <a href="/assets/policies/Religious Education and Collective Worship - December 2025.pdf" target="_blank" class="policy-link">Religious Education and Collective Worship</a></li>
                <li data-policy="safeguarding adults policy">• <a href="/assets/policies/Safeguarding Adults  - November 2023.pdf" class="policy-link">Safeguarding Adults Policy</a></li>
                <li data-policy="safeguarding policy procedure guidance child protection">• <a href="/assets/policies/4.1 Safeguarding September 2025.pdf" class="policy-link">Safeguarding Policy, Procedure and Guidance</a></li>
                <li data-policy="send information report special educational needs disabilities">• <a href="/assets/policies/SEND Information Report - September 2025.pdf" target="_blank" class="policy-link">SEND Information Report</a></li>
                <li data-policy="send policy special educational needs disabilities">• <a href="/assets/policies/SEND - September 2025.pdf" target="_blank" class="policy-link">SEND Policy</a></li>
                <li data-policy="sex education rse relationships">• <a href="/assets/policies/sex_education.pdf" target="_blank" class="policy-link">Sex Education</a></li>
                <li data-policy="smsc spiritual moral social cultural">• <a href="/smsc.php" class="policy-link">SMSC (Spiritual, Moral, Social & Cultural)</a></li>
                <li data-policy="summer school">• <a href="/summer-school.php" class="policy-link">Summer School</a></li>
                <li data-policy="uniform 2025-2026">• <a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="policy-link">Uniform 2025-2026</a></li>
                <li data-policy="volunteering">• <a href="/assets/policies/volunteering.pdf" target="_blank" class="policy-link">Volunteering</a></li>
                <li data-policy="work experience">• <a href="/assets/policies/work-experience-march-2023.pdf" target="_blank" class="policy-link">Work Experience</a></li>
            </ul>
            <div id="noResults" class="no-results">No policies found matching your search.</div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('policySearch');
            const policiesList = document.getElementById('policiesList');
            const policyItems = policiesList.querySelectorAll('li');
            const noResults = document.getElementById('noResults');
            const searchResultsCount = document.getElementById('searchResultsCount');

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                let visibleCount = 0;

                policyItems.forEach(function(item) {
                    const policyName = item.querySelector('.policy-link').textContent.toLowerCase();
                    const policyData = item.getAttribute('data-policy').toLowerCase();
                    
                    // Check if search term matches either the visible text or the data attribute
                    if (policyName.includes(searchTerm) || policyData.includes(searchTerm)) {
                        item.classList.remove('hidden');
                        visibleCount++;
                    } else {
                        item.classList.add('hidden');
                    }
                });

                // Show/hide no results message
                if (visibleCount === 0 && searchTerm !== '') {
                    noResults.style.display = 'block';
                } else {
                    noResults.style.display = 'none';
                }

                // Update results count
                if (searchTerm !== '') {
                    searchResultsCount.textContent = visibleCount + ' of ' + policyItems.length + ' policies found';
                } else {
                    searchResultsCount.textContent = '';
                }
            });
        });
    </script>
</body>
</html>