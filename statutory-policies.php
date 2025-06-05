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
            .intro-text h2 {
                font-size: 1.2rem;
            }
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
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            margin-top: 40px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .intro-text h2 {
            font-size: 1.4rem;
            font-weight: 700;
            color: #000000;
            margin: 0 0 16px 0;
        }

        .toggle-button {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background: #2563eb;
            color: white !important;
            text-decoration: none;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            gap: 8px;
        }

        .toggle-button:hover {
            background: #1d4ed8;
            color: white !important;
            text-decoration: none;
            transform: translateY(-1px);
        }

        .toggle-button:visited {
            color: white !important;
        }

        .toggle-button:link {
            color: white !important;
        }

        .toggle-button:active {
            color: white !important;
        }

        .toggle-button * {
            color: white !important;
        }

        .toggle-button .toggle-text {
            color: white !important;
        }

        .toggle-button .toggle-icon {
            font-size: 1.2em;
            transition: transform 0.3s ease;
            color: white !important;
        }

        .intro-text .toggle-button {
            color: white !important;
        }

        .intro-text .toggle-button * {
            color: white !important;
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
            border: 1px solid #e5e7eb;
        }

        .policy-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .policy-item:last-child {
            border-bottom: none;
        }

        .policy-title {
            font-size: 1rem;
            font-weight: 400;
            color: #000000;
            line-height: 1.4;
            flex: 1;
        }

        .policy-link {
            display: inline-flex;
            align-items: center;
            padding: 8px 16px;
            background: #2563eb;
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
            margin-left: 16px;
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

        .hidden {
            display: none;
        }

        @media (max-width: 768px) {
            .policy-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .policy-link {
                margin-left: 0;
                align-self: flex-end;
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

            .section-header h1 {
                font-size: 1.5rem;
            }

            .toggle-button {
                padding: 10px 20px;
                font-size: 0.9rem;
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
            <h2>Statutory</h2>
            <p>Every maintained school must publish specific information on its website to comply with The School Information Regulations 2012. Below you'll find every piece of information we are required to provide as a Community School, organized for easy access.</p>
            
            <div style="margin-top: 24px; padding-top: 20px; border-top: 1px solid #e5e7eb; text-align: center;">
                <p style="margin-bottom: 16px; color: #000000;">Please find alternative policies</p>
                <a href="/policies.php" class="toggle-button" style="background: #2563eb !important; color: white !important; text-decoration: none !important;">
                    <span class="toggle-text" style="color: white !important;">View All Policies</span>
                    <span class="toggle-icon" style="color: white !important;">→</span>
                </a>
            </div>
        </div>

        <!-- Policies List -->
        <div class="policies-list" id="policiesList">
            <div class="policy-item" data-search="admission arrangements">
                <div class="policy-title">Admission Arrangements</div>
                <a href="/admissions.php" class="policy-link">View Details</a>
            </div>

            <div class="policy-item" data-search="behaviour policy">
                <div class="policy-title">Behaviour Policy</div>
                <a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="careers education guidance ceiag">
                <div class="policy-title">Careers Education Guidance</div>
                <a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="charging remissions fees">
                <div class="policy-title">Charging and Remissions</div>
                <a href="/assets/policies/charging-and-remissions.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="complaints procedure">
                <div class="policy-title">Complaints Procedure</div>
                <a href="/assets/policies/Complaints Policy and Procedure - April 2023.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="contact details information">
                <div class="policy-title">Contact Details</div>
                <a href="/contact.php" class="policy-link">View Contact Info</a>
            </div>

            <div class="policy-item" data-search="curriculum subjects">
                <div class="policy-title">Curriculum</div>
                <a href="/curriculum.php" class="policy-link">View Curriculum</a>
            </div>

            <div class="policy-item" data-search="ect induction early career teacher">
                <div class="policy-title">ECT Induction</div>
                <a href="#" class="policy-link">View Information</a>
            </div>

            <div class="policy-item" data-search="ethos values school mission">
                <div class="policy-title">Ethos and Values</div>
                <a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="equality statement objectives">
                <div class="policy-title">Equality Statement</div>
                <a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="governor allowances expenses">
                <div class="policy-title">Governors' Allowances</div>
                <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="financial benchmarking budget">
                <div class="policy-title">Financial Benchmarking</div>
                <a href="/financial-benchmarking.php" class="policy-link">View Benchmarking</a>
            </div>

            <div class="policy-item" data-search="key stage 4 results gcse">
                <div class="policy-title">Key Stage 4 Results</div>
                <a href="/assets/statutory/ks4-results.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="leaver destinations post-16">
                <div class="policy-title">Leaver Destinations</div>
                <a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="ofsted reports inspection">
                <div class="policy-title">Ofsted Reports 2022</div>
                <a href="/ofsted-reports.php" class="policy-link">View Reports</a>
            </div>

            <div class="policy-item" data-search="performance tables government data">
                <div class="policy-title">Performance Tables</div>
                <a href="//www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link external">View on Gov.uk</a>
            </div>

            <div class="policy-item" data-search="pupil premium funding">
                <div class="policy-title">Pupil Premium</div>
                <a href="/pupil-premium.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-item" data-search="send information report special educational needs">
                <div class="policy-title">SEND Information Report</div>
                <a href="/assets/policies/SEND Information Report - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="send policy special educational needs">
                <div class="policy-title">SEND Policy</div>
                <a href="/assets/policies/SEND - September 2024.pdf" target="_blank" class="policy-link pdf">Download PDF</a>
            </div>

            <div class="policy-item" data-search="smsc spiritual moral social cultural">
                <div class="policy-title">SMSC (Spiritual, Moral, Social & Cultural)</div>
                <a href="/smsc.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-item" data-search="summer school">
                <div class="policy-title">Summer School</div>
                <a href="/summer-school.php" class="policy-link">View Information</a>
            </div>

            <div class="policy-item" data-search="suspension permanent exclusion">
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
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('policySearch');
            const policyItems = document.querySelectorAll('.policy-item');

            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                policyItems.forEach(function(item) {
                    const searchData = item.getAttribute('data-search').toLowerCase();
                    const title = item.querySelector('.policy-title').textContent.toLowerCase();
                    
                    if (searchData.includes(searchTerm) || title.includes(searchTerm)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    </script>

</body>
</html>