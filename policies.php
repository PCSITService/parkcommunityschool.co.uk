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
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
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
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 140px;
            position: relative;
        }

        .policy-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .policy-type-label {
            position: absolute;
            top: 12px;
            right: 12px;
            font-size: 0.75rem;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .policy-type-label.policy {
            background: #dbeafe;
            color: #1e40af;
        }

        .policy-type-label.statutory {
            background: #fecaca;
            color: #991b1b;
        }

        .policy-type-label.exams {
            background: #d1fae5;
            color: #065f46;
        }

        .policy-type-label.information {
            background: #e0e7ff;
            color: #3730a3;
        }

        .policy-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #000000;
            margin-bottom: 16px;
            margin-top: 20px;
            line-height: 1.4;
            flex-grow: 1;
        }

        .policy-link {
            display: inline-flex;
            align-items: center;
            padding: 10px 16px;
            background: #4f83ff;
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: background-color 0.3s ease;
            align-self: flex-start;
            font-size: 0.9rem;
        }

        .policy-link:link,
        .policy-link:visited,
        .policy-link:active {
            color: white !important;
            text-decoration: none !important;
        }

        .policy-link:hover {
            background: #3b6bff;
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
                min-height: 120px;
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
        </div>

        <!-- Policies Grid -->
        <div class="policies-grid" id="policiesGrid">
            <div class="policy-card" data-search="accessibility disabled access">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Accessibility</div>
                <a href="/assets/policies/Accessibility - December 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="admission arrangements">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Admission Arrangements</div>
                <a href="/admissions.php" class="policy-link">View Details</a>
            </div>

            <div class="policy-card" data-search="admissions 2025 2026">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Admissions 2025-2026</div>
                <a href="/assets/policies/admissions-2025-2026.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="administration medicines medical health">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Administration of Medicines</div>
                <a href="/assets/policies/administration-of-medicines.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="anti bullying harassment latest">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Anti-Bullying</div>
                <a href="/assets/policies/Anti Bullying - December 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="attendance school absence">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Attendance</div>
                <a href="/assets/policies/attendance.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="behaviour policy">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Behaviour Policy</div>
                <a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="careers education guidance ceiag">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Careers Education Guidance</div>
                <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="cctv surveillance camera security">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">CCTV</div>
                <a href="/assets/policies/cctv.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="charging remissions fees">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Charging and Remissions</div>
                <a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="child protection safeguarding">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Child Protection</div>
                <a href="/assets/policies/child-protection.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="code conduct staff behavior">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Code of Conduct</div>
                <a href="/assets/policies/code_of_conduct.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="complaints procedure">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Complaints Policy and Procedure</div>
                <a href="/assets/policies/complaints.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="complaints procedure statutory">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Complaints Procedure (Statutory)</div>
                <a href="/assets/policies/complaints.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="confidentiality privacy information">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Confidentiality</div>
                <a href="/assets/policies/confidentiality.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="conflict interests ethics">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Conflict of Interests</div>
                <a href="/assets/policies/conflict-of-interests.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="curriculum subjects">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Curriculum</div>
                <a href="/curriculum.php" class="policy-link">View Curriculum</a>
            </div>

            <div class="policy-card" data-search="data protection gdpr privacy">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Data Protection</div>
                <a href="/assets/policies/data-protection.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="drugs substance misuse alcohol">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Drugs and Substance Misuse</div>
                <a href="/assets/policies/drugs-substance-misuse.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ect induction early career teacher">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">ECT Induction</div>
                <a href="#" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="equality diversity inclusion">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Equality and Diversity</div>
                <a href="/assets/policies/Equality and Diversity - December 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="equality statement objectives">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Equality Statement</div>
                <a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="equality statement statutory">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Equality Statement (Statutory)</div>
                <a href="/assets/statutory/equality-statement.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="esafety online safety internet">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">E-Safety</div>
                <a href="/assets/policies/esafety.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ethos values school mission">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Ethos and Values</div>
                <a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="exams 2024 assessment">
                <div class="policy-type-label exams">Exams</div>
                <div class="policy-title">Exams 2024</div>
                <a href="/assets/policies/exams-2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="financial benchmarking budget">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Financial Benchmarking</div>
                <a href="/financial-benchmarking.php" class="policy-link">View Benchmarking</a>
            </div>

            <div class="policy-card" data-search="financial benchmarking statutory budget">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Financial Benchmarking (Statutory)</div>
                <a href="/assets/statutory/financial-benchmarking.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="freedom information foi">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Freedom of Information</div>
                <a href="/assets/policies/freedom_of_information.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="governor allowances expenses">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Governors' Allowances</div>
                <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="health safety workplace">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Health and Safety</div>
                <a href="/assets/policies/health-and-safety.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="homework assignment classwork">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Homework</div>
                <a href="/assets/policies/homework.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="key stage 4 results gcse">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Key Stage 4 Results</div>
                <a href="/assets/statutory/ks4-results.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="leaver destinations post-16">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Leaver Destinations</div>
                <a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="malpractice exams assessment cheating plagiarism">
                <div class="policy-type-label exams">Exams</div>
                <div class="policy-title">Malpractice (Exams Assessment)</div>
                <a href="/assets/policies/malpractice-exams-assessment.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="medical conditions health care">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Medical Conditions</div>
                <a href="/assets/policies/medical-conditions.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="mental health emotional wellbeing wellness">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Mental Health and Emotional Wellbeing</div>
                <a href="/assets/policies/mental-health-emotional-wellbeing-policy.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

                <div class="policy-card" data-search="Mobile Phones">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Mobile Phones</div>
                <a href="/assets/policies/mobile-phones.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="nqt induction newly qualified teacher">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">NQT Induction</div>
                <a href="/assets/statutory/nqt_induction.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted report 2015">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Ofsted Report - 2015</div>
                <a href="/assets/statutory/ofsted-report-2015.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted report 2017">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Ofsted Report - 2017</div>
                <a href="/assets/statutory/ofsted-report-2017.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted report march 2022">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Ofsted Report - March 2022</div>
                <a href="/assets/statutory/Ofsted_Repor...rch_2022.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted report may 2022">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Ofsted Report - May 2022</div>
                <a href="/assets/statutory/Ofsted_Repor...May 2022.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="ofsted reports inspection">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Ofsted Reports 2022</div>
                <a href="/ofsted-reports.php" class="policy-link">View Reports</a>
            </div>

            <div class="policy-card" data-search="performance tables government data">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Performance Tables</div>
                <a href="//www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link external">View on Gov.uk</a>
            </div>

            <div class="policy-card" data-search="prevention radicalisation extremism prevent">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Prevention of Radicalisation and Extremism</div>
                <a href="/assets/policies/prevention-of-radicalisation-and-extremism.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="privacy notice clients customers">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Privacy Notice for Clients</div>
                <a href="/assets/policies/privacy_notice_for_clients.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="privacy notice employees staff">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Privacy Notice for Employees</div>
                <a href="/assets/policies/privacy_notice_for_employees.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="privacy notice job applicants recruitment">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Privacy Notice for Job Applicants</div>
                <a href="/assets/policies/privacy_notice_for_job_applicants.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="privacy notice parents students pupils">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Privacy Notice for Parents and Students</div>
                <a href="/assets/policies/privacy_notice_for_parents_and_students.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="provider access careers guidance">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Provider Access</div>
                <a href="/assets/policies/provider-access.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="pupil premium funding">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Pupil Premium</div>
                <a href="/pupil-premium.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="safeguarding adults vulnerable">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Safeguarding Adults</div>
                <a href="/assets/policies/Safeguarding Adults - November 2023.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="safeguarding child protection">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Safeguarding</div>
                <a href="/assets/policies/safeguarding.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="send information report special educational needs">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">SEND Information Report</div>
                <a href="/assets/policies/SEND Information Report - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="send information report statutory">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">SEND Information Report (Statutory)</div>
                <a href="/assets/statutory/send-information-report.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="send policy special educational needs">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">SEND Policy</div>
                <a href="/assets/policies/SEND - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="send policy statutory special educational needs">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">SEND Policy (Statutory)</div>
                <a href="/assets/statutory/send-policy.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="sex education relationships">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Sex Education</div>
                <a href="/assets/policies/sex_education.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="smsc spiritual moral social cultural">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">SMSC (Spiritual, Moral, Social & Cultural)</div>
                <a href="/smsc.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="student entitlement rights">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Student Entitlement</div>
                <a href="/assets/policies/studententitlementag.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="summer school">
                <div class="policy-type-label information">Info</div>
                <div class="policy-title">Summer School</div>
                <a href="/summer-school.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-card" data-search="suspension permanent exclusion">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Suspension and Permanent Exclusion</div>
                <a href="/assets/policies/suspension_and_permanent_exclusion.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="teacher assessment centre policy">
                <div class="policy-type-label statutory">Statutory</div>
                <div class="policy-title">Teacher Assessment Centre Policy</div>
                <a href="/assets/statutory/teacher-asse...ntre-policy.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="uniform dress code">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Uniform 2024-2025</div>
                <a href="/assets/policies/Uniform 2024-2025.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="uniform dress code">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Uniform 2025-2026</div>
                <a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="volunteering volunteer helper">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Volunteering</div>
                <a href="/assets/policies/volunteering.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-card" data-search="work experience placement internship">
                <div class="policy-type-label policy">Policy</div>
                <div class="policy-title">Work Experience</div>
                <a href="/assets/policies/work-experience-march-2023.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
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