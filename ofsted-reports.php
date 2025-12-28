<?php
$pageTitle = 'Park Community School | Ofsted Reports';
include('partials/header.php');
?>

<style>
    /* Page Layout */
    main {
        background: #f8f9fa;
        min-height: 80vh;
        padding: 2rem 0;
    }
    
    
    
    .page-header .lead {
        color: white;
        font-size: 1.1rem;
        margin-bottom: 0;
        opacity: 0.9;
    }
    
    /* Content Article */
    .content-article {
        background: #ffffff;
        border-radius: 12px;
        padding: 2.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border: 1px solid #e9ecef;
    }
    
    .reports-section {
        margin-bottom: 2rem;
    }
    
    .reports-section h2 {
        color: #1E7AB9;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    
    .reports-section > p {
        color: #495057;
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 2rem;
    }
    
    /* Report Cards */
    .reports-grid {
        display: grid;
        gap: 1.5rem;
        margin-bottom: 2rem;
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
    }
    
    .report-card:hover {
        border-color: #1E7AB9;
        box-shadow: 0 8px 25px rgba(30, 122, 185, 0.15);
        transform: translateY(-2px);
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
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .report-content h3 a {
        color: #2c3e50;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .report-content h3 a:hover {
        color: #1E7AB9;
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
    
    .external-link-standalone {
        margin-top: 2rem;
    }
    
    .external-link .report-icon {
        background: #e7f3ff;
        border-color: #b8daff;
    }
    
    /* Sidebar */
    .sidebar-widget {
        background: #ffffff;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        border: 1px solid #e9ecef;
    }
    
    .sidebar-widget h4 {
        color: #1E7AB9;
        font-size: 1.1rem;
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
        color: #1E7AB9;
        font-weight: 600;
        font-size: 0.9rem;
    }
    
    /* Responsive */
    @media screen and (max-width: 768px) {
        .content-article {
            padding: 1.5rem;
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


<!-- CONTENT -->
<main id="main-content">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <article class="content-article">
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
            
            <div class="cell medium-4 large-4">
                <aside>
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
    </div>
</main>

<?php include('partials/footer.php'); ?>