<?php
$pageTitle = 'Park Community School | ClassCharts';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #1E7AB9;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0.5rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
        text-transform: capitalize;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h3 {
        color: #1E7AB9;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .content-section a.button {
        background-color: #1E7AB9;
        color: white;
        border-radius: 3px;
        margin: 0.25rem;
    }
    
    .content-section a.button:hover {
        background-color: #165a8a;
        color: white;
    }
    
    .content-section a.button.info {
        background-color: #5bc0de;
    }
    
    .content-section a.button.info:hover {
        background-color: #46b8da;
    }
    
    /* Pricing table / feature card */
    .feature-card {
        background: #f5f5f5;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        text-align: center;
    }
    
    .feature-card .card-title {
        background: #1E7AB9;
        padding: 1.5rem;
    }
    
    .feature-card .card-title img {
        max-width: 150px;
        height: auto;
    }
    
    .feature-card .card-item {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #e0e0e0;
        color: #333;
    }
    
    .feature-card .card-item:last-of-type {
        border-bottom: none;
    }
    
    .feature-card .card-cta {
        padding: 1.5rem;
        background: #fff;
    }
    
    .feature-card .card-cta .button {
        background-color: #1E7AB9;
        color: white;
        border-radius: 3px;
        padding: 0.75rem 2rem;
        font-weight: 600;
    }
    
    .feature-card .card-cta .button:hover {
        background-color: #165a8a;
    }
    
    hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 2rem 0;
    }
    
    @media (max-width: 639px) {
        .button-group {
            text-align: center;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>ClassCharts</h1>
                <p>A new communications system for parents and students</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <p><strong>ClassCharts - Replacing InSight</strong></p>
                <p>We are moving to a new communications system for parents and students: Class Charts. This system will replace Insight.</p>
                <p>Class Charts comes with both a parent and student app. Within these apps you will be able to track attendance, behaviour, rewards, homework, and detentions. The app is available through the relevant app stores for your mobile devices. We will supply all parents with a unique code to enable you to sign up for the app.</p>
                <p>Please download the app and sign up using the information provided as soon as you are able. If you ensure that the notifications for the app are turned on, this will allow Class Charts to notify you of any event linked to your child, be it attendance, behaviour or homework, and school announcements.</p>
                <hr>
                <h3>Guides</h3>
                <div class="button-group">
                    <a class="button info" href="assets/services/Class_Charts_for_parents_guide.pdf" target="_blank">Parents Guide</a>
                    <a class="button info" href="assets/services/Class_Charts_for_pupils_guide.pdf" target="_blank">Pupils Guide</a>
                </div>
                <p>You can also find all these links under the <a class="button" href="/services.php">Parent/Services</a> tab on the website.</p>
            </div>
            
            <div class="cell medium-4">
                <div class="feature-card">
                    <div class="card-title">
                        <img src="images/logo/classcharts.png" alt="ClassCharts">
                    </div>
                    <div class="card-item">Homework</div>
                    <div class="card-item">Achievements</div>
                    <div class="card-item">Messaging</div>
                    <div class="card-cta">
                        <a class="button" href="https://www.classcharts.com/account/login/share" target="_blank">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>