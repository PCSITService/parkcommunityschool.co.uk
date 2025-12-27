<?php
$pageTitle = 'Park Community School | Services';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #EE3A80;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0.25rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
        opacity: 0.9;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .intro-text {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 2rem;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .service-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        display: flex;
        flex-direction: column;
    }
    
    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .service-header {
        background: linear-gradient(135deg, #EE3A80, #f06292);
        padding: 1.5rem;
        text-align: center;
    }
    
    .service-header img {
        max-height: 60px;
        max-width: 150px;
        margin-bottom: 0.5rem;
    }
    
    .service-header h3 {
        color: white;
        margin: 0.5rem 0 0;
        font-size: 1.1rem;
        font-weight: 600;
    }
    
    .service-features {
        padding: 1.5rem;
        flex-grow: 1;
    }
    
    .service-features ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .service-features li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f0f0f0;
        display: flex;
        align-items: center;
    }
    
    .service-features li:last-child {
        border-bottom: none;
    }
    
    .service-features li::before {
        content: '✓';
        color: #EE3A80;
        font-weight: bold;
        margin-right: 0.75rem;
    }
    
    .service-actions {
        padding: 1rem 1.5rem 1.5rem;
        text-align: center;
        background: #f8f9fa;
    }
    
    .service-button {
        display: inline-block;
        background: #EE3A80;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin: 0.25rem;
    }
    
    .service-button:hover {
        background: #d81b60;
        color: white;
        transform: translateY(-2px);
    }
    
    .service-button.small {
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
        background: #666;
    }
    
    .service-button.small:hover {
        background: #555;
    }
    
    .help-text {
        text-align: center;
        margin-top: 2rem;
        color: #666;
    }
    
    .help-text a {
        color: #EE3A80;
        font-weight: 500;
    }
    
    .help-text a:hover {
        color: #d81b60;
    }
    
    @media (max-width: 1024px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 640px) {
        .services-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Services</h1>
                <p>Dedication to Education</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <div class="intro-text">
                    <p>We understand that not everything can be completed on school sites, so we offer a range of services to empower you to complete work, stay in touch and keep up to date.</p>
                    <p>Below are a few services which you can log into freely on any device at any time.</p>
                </div>

                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-header">
                            <img src="images/logo/classcharts.png" alt="ClassCharts">
                        </div>
                        <div class="service-features">
                            <ul>
                                <li>Homework</li>
                                <li>Achievements</li>
                                <li>Messaging</li>
                            </ul>
                        </div>
                        <div class="service-actions">
                            <a class="service-button" href="https://www.classcharts.com/account/login/share" target="_blank">Open</a>
                            <br>
                            <a class="service-button small" href="assets/services/Class_Charts_for_parents_guide.pdf" target="_blank">Parents Guide</a>
                            <a class="service-button small" href="assets/services/Class_Charts_for_pupils_guide.pdf" target="_blank">Pupils Guide</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <img src="images/logo/office365.svg" alt="Office 365">
                            <h3>Office 365</h3>
                        </div>
                        <div class="service-features">
                            <ul>
                                <li>Email &amp; OneDrive</li>
                                <li>Office Applications</li>
                                <li>SharePoint</li>
                            </ul>
                        </div>
                        <div class="service-actions">
                            <a class="service-button" href="https://login.microsoftonline.com" target="_blank">Open</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <img src="images/logo/tucasi.png" alt="Tucasi - Online Payments">
                            <h3>SCOPay</h3>
                        </div>
                        <div class="service-features">
                            <ul>
                                <li>Online Payments</li>
                                <li>Secure</li>
                                <li>Quick and Easy</li>
                            </ul>
                        </div>
                        <div class="service-actions">
                            <a class="service-button" href="https://www.scopay.com/pcs" target="_blank">Open</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <img src="images/logo/eplatform.jpg" alt="ePlatform - eBooks">
                            <h3>ePlatform</h3>
                        </div>
                        <div class="service-features">
                            <ul>
                                <li>eBooks</li>
                                <li>Audiobooks</li>
                                <li>Online &amp; App</li>
                            </ul>
                        </div>
                        <div class="service-actions">
                            <a class="service-button" href="https://pcs-hantssls.eplatform.co/" target="_blank">Open</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-header">
                            <img src="images/logo/schoolcloud-pe.png" alt="SchoolCloud - Parents Evening">
                            <h3>Parents Evening</h3>
                        </div>
                        <div class="service-features">
                            <ul>
                                <li>Appointments</li>
                                <li>Virtual Meetings</li>
                                <li>Browser Based</li>
                            </ul>
                        </div>
                        <div class="service-actions">
                            <a class="service-button" href="https://parkc.schoolcloud.co.uk/" target="_blank">Open</a>
                        </div>
                    </div>
                </div>

                <p class="help-text">If you require assistance, please contact our <a href="mailto:itservices@pcs.hants.sch.uk">IT Services department</a>.</p>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>