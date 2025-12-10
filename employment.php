<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Park Community School | You could make a difference</title>
        <meta name="description" content="Explore current job opportunities and find application documents for positions at Park Community School.">
        <?php include("includes/head.html") ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft8bSV7R/+7GdFWxl+9lJ04XGRu+cZGaVQoxIECdiDFZqT5VZdSW+Z0nNQ8d/N0xBNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* Variables for consistent theming */
            :root {
                --primary-color: #a3cd42;
                --primary-dark: #8da93f;
                --secondary-color: #333333;
                --light-bg: #f5f5f5;
                --border-radius: 8px;
                --box-shadow: 0 3px 10px rgba(0,0,0,0.08);
                --transition: all 0.3s ease;
                --spacing-sm: 10px;
                --spacing-md: 20px;
                --spacing-lg: 30px;
            }

            /* Main container */
            .employment-container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                max-width: 1200px;
                width: 100%;
                margin: 50px auto;
                padding: 0 var(--spacing-md);
                gap: var(--spacing-lg);
            }

            /* Column layouts */
            .vacancies-column, 
            .docs-column {
                flex: 1;
                min-width: 300px;
            }

            .docs-column {
                max-width: 50%;
            }

            /* Section headers */
            .section-header {
                position: relative;
                display: inline-block;
                margin-bottom: var(--spacing-lg);
                color: var(--secondary-color);
                font-size: 1.5rem;
            }
            
            .section-header::after {
                content: '';
                position: absolute;
                bottom: -8px;
                left: 0;
                width: 100%;
                height: 3px;
                background-color: var(--primary-color);
            }
            
            /* Vacancy card */
            .vacancy-card {
                background-color: white;
                border-radius: var(--border-radius);
                padding: var(--spacing-md);
                margin-bottom: var(--spacing-md);
                box-shadow: var(--box-shadow);
                text-align: left;
                border-left: 4px solid var(--primary-color);
                transition: var(--transition);
            }
            
            .vacancy-card:hover {
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            
            .vacancy-card h4 {
                margin-top: 0;
                color: var(--secondary-color);
                font-size: 1.3rem;
                margin-bottom: var(--spacing-sm);
            }
            
            .vacancy-card p {
                margin-bottom: var(--spacing-sm);
                line-height: 1.5;
            }
            
            /* Button container for side-by-side buttons */
            .button-container {
                display: flex;
                gap: var(--spacing-sm);
                margin-top: var(--spacing-sm);
                flex-wrap: wrap;
            }
            
            /* Button styles */
            .vacancy-link {
                display: inline-flex;
                align-items: center;
                padding: 8px var(--spacing-md);
                background-color: var(--primary-color);
                color: white !important;
                text-decoration: none;
                border-radius: 4px;
                font-weight: 500;
                transition: var(--transition);
                white-space: nowrap;
            }
            
            .vacancy-link:hover, 
            .vacancy-link:focus {
                background-color: var(--primary-dark);
                text-decoration: none;
                color: white !important;
                transform: translateY(-2px);
            }
            
            .vacancy-link i {
                margin-right: 8px;
            }
            
            /* Secondary button style for recruitment pack */
            .vacancy-link.secondary {
                background-color: var(--secondary-color);
                color: white !important;
            }
            
            .vacancy-link.secondary:hover,
            .vacancy-link.secondary:focus {
                background-color: #555555;
                color: white !important;
            }
            
            /* Documentation box */
            .docs-box {
                background-color: var(--light-bg);
                padding: var(--spacing-md);
                border-radius: var(--border-radius);
                text-align: left;
                font-size: 14px;
                line-height: 1.6;
                border: 1px solid #e0e0e0;
                box-shadow: var(--box-shadow);
            }
            
            /* Document lists */
            .docs-grid {
                display: flex;
                flex-wrap: wrap;
                gap: var(--spacing-md);
                margin-bottom: var(--spacing-md);
            }
            
            .docs-column-inner {
                flex: 1;
                min-width: 220px;
            }
            
            .docs-title {
                font-weight: 600;
                margin-bottom: var(--spacing-sm);
                padding-bottom: 5px;
                border-bottom: 1px solid #e0e0e0;
            }
            
            .docs-list {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }
            
            .docs-list li {
                margin-bottom: 8px;
            }
            
            .docs-list a {
                color: #0056b3;
                text-decoration: none;
                display: flex;
                align-items: center;
                transition: var(--transition);
            }
            
            .docs-list a:hover,
            .docs-list a:focus {
                color: var(--primary-color);
                text-decoration: underline;
            }
            
            .doc-icon {
                margin-right: 5px;
                color: var(--primary-color);
                width: 16px;
                text-align: center;
            }
            
            .docs-note {
                margin-top: var(--spacing-md);
                padding-top: var(--spacing-sm);
                border-top: 1px solid #e0e0e0;
                font-size: 0.9rem;
                color: #555;
            }
            
            /* Utility classes */
            .text-center {
                text-align: center;
            }
            
            .text-italic {
                font-style: italic;
            }
            
            .mb-sm {
                margin-bottom: var(--spacing-sm);
            }
            
            .mb-md {
                margin-bottom: var(--spacing-md);
            }
            
            /* Responsive adjustments */
            @media (max-width: 992px) {
                .docs-column {
                    max-width: 45%;
                }
            }
            
            @media (max-width: 768px) {
                .employment-container {
                    flex-direction: column;
                    gap: var(--spacing-lg);
                }
                
                .vacancies-column, 
                .docs-column {
                    width: 100%;
                    max-width: 100%;
                }
                
                .button-container {
                    flex-direction: column;
                }
                
                .vacancy-link {
                    justify-content: center;
                }
            }
        </style>
    </head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>

    <!-- HEADER SECTION (Empty placeholder) -->
    <header class="header-school" aria-hidden="true">
        <div class="row">
            <div class="medium-8 large-8 columns"></div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="employment-container">
        <!-- Vacancies Column -->
        <section class="vacancies-column">
            <h2 class="section-header">Current Vacancies</h2>
            
            <!-- Active vacancy card -->

            <article class="vacancy-card">
                <h3>Finance Officer</h3>
                <div class="button-container">
                    <a href="assets/recruitment/2025-12/Job Advert - Finance Officer - Dec25.pdf" class="vacancy-link" target="_blank" aria-label="Finance Officer">
                        <i class="fas fa-download" aria-hidden="true"></i> View Details
                    </a>
                </div>
            </article>             

            <article class="vacancy-card">
                <h3>Head of Year / Science Teacher</h3>
                <div class="button-container">
                    <a href="assets/recruitment/2025-11/Job Advert - Head of Year -Nov 2025.pdf" class="vacancy-link" target="_blank" aria-label="Head of Year / Science Teacher">
                        <i class="fas fa-download" aria-hidden="true"></i> View Details
                    </a>
                </div>
            </article>             

            <article class="vacancy-card">
                <h3>Senior Chef de Partie</h3>
                <div class="button-container">
                    <a href="assets/recruitment/2025-11/Job Advert - Senior Chef De Partie -Nov 2025.pdf" class="vacancy-link" target="_blank" aria-label="Senior Chef de Partie">
                        <i class="fas fa-download" aria-hidden="true"></i> View Details
                    </a>
                </div>
            </article>           
            
            <!-- Governor vacancies notice -->
            <p class="text-italic">Governor vacancies are available on the <a href="governors-page.html">Governors page</a>.</p>
            
            <!-- Uncomment when no vacancies 
            <p class="text-italic">There are currently no staff vacancies available. Please check back later for future opportunities.</p>
            -->
        </section>

        <!-- Documentation Column -->
        <section class="docs-column">
            <h2 class="section-header">Application Documents</h2>

            <div class="docs-box">
                <div class="docs-grid">
                    <!-- Information Documents -->
                    <div class="docs-column-inner">
                        <h3 class="docs-title">Information <small>PDF Files</small></h3>
                        <ul class="docs-list">
                            <li>
                                <a href="assets/recruitment/documentation/applicant-information.pdf" target="_blank">
                                    <i class="fas fa-file-pdf doc-icon" aria-hidden="true"></i> Applicant Information
                                </a>
                            </li>
                            <li>
                                <a href="assets/recruitment/documentation/staff-dress-code.pdf" target="_blank">
                                    <i class="fas fa-file-pdf doc-icon" aria-hidden="true"></i> Staff Dress Code
                                </a>
                            </li>
                            <li>
                                <a href="assets/recruitment/documentation/Staff.Dignity.At.Work.Conduct.pdf" target="_blank">
                                    <i class="fas fa-file-pdf doc-icon" aria-hidden="true"></i> Staff Dignity at Work Code of Conduct
                                </a>
                            </li>
                            <li>
                                <a href="assets/recruitment/documentation/privacy-statement.pdf" target="_blank">
                                    <i class="fas fa-file-pdf doc-icon" aria-hidden="true"></i> Privacy Statement
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Application Forms -->
                    <div class="docs-column-inner">
                        <h3 class="docs-title">Forms <small>WORD Files</small></h3>
                        <ul class="docs-list">
                            <li>
                                <a href="assets/recruitment/documentation/Hampshire-Schools-Equalities-Monitoring-Form-2022.docx" target="_blank" download>
                                    <i class="fas fa-file-word doc-icon" aria-hidden="true"></i> Equalities Form
                                </a>
                            </li>
                            <li>
                                <a href="assets/recruitment/documentation/teaching-application-form-2021.docx" target="_blank" download>
                                    <i class="fas fa-file-word doc-icon" aria-hidden="true"></i> Teaching Application Form
                                </a>
                            </li>
                            <li>
                                <a href="assets/recruitment/documentation/support-staff-application-form-2021.docx" target="_blank" download>
                                    <i class="fas fa-file-word doc-icon" aria-hidden="true"></i> Support Application Form
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <p class="docs-note">
                    For legal reasons, we cannot accept CVs as a form of application, and therefore ask all applicants to complete our application form and Equal Opportunities Monitoring Form. Completed forms can be sent to 
                    <a href="mailto:recruitment@pcs.hants.sch.uk">recruitment@pcs.hants.sch.uk</a>.
                </p>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>

    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js" defer></script>
    <script src="js/vendor/foundation.min.js" defer></script>
    <script src="js/app.min.js" defer></script>
</body>
</html>