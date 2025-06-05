<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Park Community School | Ofsted Reports</title>
        <meta name="description" content="View the latest Ofsted inspection reports for Park Community School">
        <?php include("includes/head.html") ?>
    </head>
<body class="page-parent">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>
<!-- CONTENT -->
<main>
<section>
    <div class="row">
        <div class="medium-8 large-8 columns">
            <article class="content-article">
                <header class="page-header">
                    <h1>Ofsted Reports</h1>
                    <p class="lead">Access our latest inspection reports and school performance data</p>
                </header>
                
                <section class="reports-section">
                    <h2>Ofsted Inspection - 2022</h2>
                    <p>Below you can find our most recent Ofsted inspection reports. These documents provide detailed assessments of our school's performance, achievements, and areas for development.</p>
                    
                    <div class="reports-grid">
                        <div class="report-card">
                            <div class="report-icon">📄</div>
                            <div class="report-content">
                                <h3><a href="/assets/statutory/Ofsted_Report_2_3 March_2022.pdf" target="_blank" rel="noopener noreferrer">Ofsted Report 2-3 March 2022</a></h3>
                                <p class="report-meta">Inspection Date: 2-3 March 2022 | Format: PDF</p>
                                <p class="report-description">Full inspection report covering all aspects of school performance.</p>
                            </div>
                        </div>
                        
                        <div class="report-card">
                            <div class="report-icon">📄</div>
                            <div class="report-content">
                                <h3><a href="/assets/statutory/Ofsted_Report_5_May 2022.pdf" target="_blank" rel="noopener noreferrer">Ofsted Report 5 May 2022</a></h3>
                                <p class="report-meta">Inspection Date: 5 May 2022 | Format: PDF</p>
                                <p class="report-description">Follow-up inspection report with updated assessments.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="external-link-standalone">
                        <div class="report-card external-link">
                            <div class="report-icon">🌐</div>
                            <div class="report-content">
                                <h3><a href="https://reports.ofsted.gov.uk/provider/23/116473" target="_blank" rel="noopener noreferrer">View our school on Ofsted website</a></h3>
                                <p class="report-meta">External Link | Ofsted Official Portal</p>
                                <p class="report-description">Access our complete inspection history and latest updates on the official Ofsted website.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
        
        <div class="medium-4 large-4 columns">
            <aside class="sidebar">
                <div class="sidebar-widget">
                    <h4>Quick Facts</h4>
                    <div class="fact-item">
                        <strong>Latest Rating:</strong>
                        <span>Good</span>
                    </div>
                    <div class="fact-item">
                        <strong>Last Inspection:</strong>
                        <span>May 2022</span>
                    </div>
                    <div class="fact-item">
                        <strong>School Type:</strong>
                        <span>Community School</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
</main>
<!-- FOOTER -->
<?php include("includes/footer.html") ?>
        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>

        <style>
        /* Modern Content Styling - Only affects main content area */
        main {
            background: #f8f9fa;
            min-height: 80vh;
            padding: 2rem 0;
        }
        
        .content-article {
            background: #ffffff;
            border-radius: 12px;
            padding: 3rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }
        
        .page-header h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .page-header .lead {
            font-size: 1.25rem;
            color: #6c757d;
            margin-bottom: 2rem;
            font-weight: 400;
        }
        
        .reports-section {
            margin-bottom: 3rem;
        }
        
        .reports-section h2 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .reports-section > p {
            color: #495057;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        .reports-grid {
            display: grid;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .external-link-standalone {
            margin-top: 2rem;
        }
        
        .report-card {
            background: #ffffff;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 1.5rem;
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .report-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,123,255,0.1), transparent);
            transition: left 0.6s ease;
        }
        
        .report-card:hover {
            border-color: #007bff;
            box-shadow: 0 8px 25px rgba(0,123,255,0.15);
            transform: translateY(-2px);
        }
        
        .report-card:hover::before {
            left: 100%;
        }
        
        .report-icon {
            font-size: 2rem;
            min-width: 3rem;
            text-align: center;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 0.75rem;
            border: 1px solid #e9ecef;
        }
        
        .report-content h3 {
            margin: 0 0 0.5rem 0;
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .report-content h3 a {
            color: #2c3e50;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .report-content h3 a:hover {
            color: #007bff;
        }
        
        .report-meta {
            color: #6c757d;
            font-size: 0.9rem;
            margin: 0.5rem 0;
            font-weight: 500;
        }
        
        .report-description {
            color: #495057;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.5;
        }
        
        .external-link .report-icon {
            background: #e7f3ff;
            border-color: #b8daff;
        }
        
        .sidebar {
            margin-top: 2rem;
        }
        
        .sidebar-widget {
            background: #ffffff;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid #e9ecef;
        }
        
        .sidebar-widget h4 {
            color: #2c3e50;
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0.5rem;
        }
        
        .fact-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #e9ecef;
        }
        
        .fact-item:last-child {
            border-bottom: none;
        }
        
        .fact-item strong {
            color: #2c3e50;
            font-size: 0.9rem;
        }
        
        .fact-item span {
            color: #007bff;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .content-article {
                padding: 2rem 1.5rem;
                margin: 0 1rem;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .page-header .lead {
                font-size: 1.1rem;
            }
            
            .report-card {
                flex-direction: column;
                text-align: center;
            }
            
            .report-icon {
                align-self: center;
            }
            
            .sidebar {
                margin-top: 3rem;
            }
            
            .sidebar-widget {
                margin: 0 1rem 2rem 1rem;
            }
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .content-article,
        .sidebar-widget {
            animation: fadeInUp 0.6s ease-out;
        }
        </style>
    </body>
</html>