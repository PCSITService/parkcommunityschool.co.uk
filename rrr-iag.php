<?php
$pageTitle = 'Park Community School | RRR and IAG';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #F58220;
        color: white;
        padding: 2rem 0;
        margin-bottom: 0;
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
    
    .breadcrumbs {
        background-color: #f5f5f5;
        padding: 0.75rem 1rem;
        margin-bottom: 2rem;
        list-style: none;
        border-radius: 0;
    }
    
    .breadcrumbs li {
        display: inline-block;
        margin-right: 0.5rem;
    }
    
    .breadcrumbs li::after {
        content: '/';
        margin-left: 0.5rem;
        color: #999;
    }
    
    .breadcrumbs li:last-child::after {
        content: '';
    }
    
    .breadcrumbs li a {
        color: #F58220;
    }
    
    .breadcrumbs li.current a {
        color: #666;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h3 {
        color: #F58220;
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section h3:first-of-type {
        margin-top: 0;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section a {
        color: #F58220;
    }
    
    .content-section a:hover {
        color: #d96f1a;
    }
    
    .topic-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-left: 5px solid #F58220;
    }
    
    .topic-card h3 {
        margin-top: 0;
    }
    
    .section-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 0.75rem;
    }
    
    .topic-list {
        margin-bottom: 1.5rem;
    }
    
    .topic-list li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .skills-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.25rem 1.5rem;
        margin: 1rem 0;
    }
    
    .skills-box .section-label {
        margin-bottom: 0.5rem;
    }
    
    .skills-box ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .skills-box li {
        margin-bottom: 0.35rem;
    }
    
    .external-link {
        font-size: 0.9rem;
        color: #666;
    }
    
    .external-link a {
        font-weight: 500;
    }
    
    .two-column-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    @media (max-width: 768px) {
        .two-column-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>RRR and IAG</h1>
                <p>Rights, Respect, Responsibility &amp; Information, Advice and Guidance</p>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">RRR and IAG</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <div class="two-column-grid">
                    <div class="topic-card">
                        <h3>Rights, Respect, Responsibility</h3>
                        
                        <p class="section-label">Main Topics Students Study:</p>
                        <p>In a Rights Respecting School, pupils have the opportunity to learn about the United Nations Convention on the Rights of the Child through family assemblies and pupil-led groups. As a Rights Respecting School, we do not only teach our pupils about children's rights but we also model rights and respect in all our relationships: between staff, between staff and pupils, and between pupils.</p>
                        
                        <div class="skills-box">
                            <p class="section-label">Main Skills Students Develop:</p>
                            <ul>
                                <li>Developing their social, moral, cultural and spiritual understanding</li>
                                <li>Understanding of their own rights and responsibilities</li>
                                <li>Participating actively in promoting the UNCRC articles and RRR school events</li>
                            </ul>
                        </div>
                        
                        <p class="external-link">For more information please visit the <a href="https://www.unicef.org.uk/rights-respecting-schools/" target="_blank">UNICEF website</a></p>
                    </div>
                    
                    <div class="topic-card">
                        <h3>Information, Advice and Guidance</h3>
                        
                        <p class="section-label">Main Topics Students Study:</p>
                        <p>Assisting pupils in their 'next steps', be that work, college or apprenticeships, future career ideas or their option choices. Pupils learn about the world of work and the range of opportunities open to them after they complete their time at Park. We work on raising pupils' aspirations to achieve their full potential and support them in doing so. All pupils can have a 1:1 personal careers appointment with our trained adviser.</p>
                        
                        <div class="skills-box">
                            <p class="section-label">Main Skills Students Develop:</p>
                            <ul>
                                <li>Understanding the world of work</li>
                                <li>Understanding the career choices available</li>
                                <li>Learning about the choices process through college visits, mock interviews and visiting speakers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>