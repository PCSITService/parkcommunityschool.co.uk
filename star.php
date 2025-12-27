<?php
$pageTitle = 'Park Community School | STAR';
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
        margin-bottom: 0;
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
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .intro-box {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin-bottom: 2rem;
        border-radius: 0 8px 8px 0;
    }
    
    .intro-box p:last-child {
        margin-bottom: 0;
    }
    
    .section-label {
        font-weight: 600;
        color: #F58220;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }
    
    .concepts-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin: 1.5rem 0 2rem;
    }
    
    .concept-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        transition: all 0.3s ease;
    }
    
    .concept-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.12);
    }
    
    .concept-card h4 {
        color: #F58220;
        margin: 0 0 0.5rem;
        font-size: 1.15rem;
    }
    
    .concept-card .lead-subjects {
        font-style: italic;
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    
    .concept-card p {
        margin: 0;
        font-size: 0.95rem;
    }
    
    .skills-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
        margin: 1.5rem 0;
    }
    
    .skill-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.25rem;
        border-left: 4px solid #F58220;
    }
    
    .skill-card h5 {
        color: #F58220;
        margin: 0 0 0.5rem;
        font-size: 1rem;
        font-weight: 600;
    }
    
    .skill-card p {
        margin: 0;
        font-size: 0.9rem;
        color: #555;
        line-height: 1.6;
    }
    
    @media (max-width: 1024px) {
        .skills-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .concepts-grid,
        .skills-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>STAR</h1>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">STAR</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>STAR Curriculum</h3>
                
                <div class="intro-box">
                    <p>Pupils spend 50% of their timetable in STAR.</p>
                    <p>The STAR curriculum aims to deliver subjects in a connected way to promote the development of:</p>
                    <ul>
                        <li>Literacy across all subject areas</li>
                        <li>High attainment and sustained progression</li>
                        <li>The transfer of skills across all subjects</li>
                        <li>Application of learning for real purpose and audience</li>
                    </ul>
                </div>

                <p class="section-label">Main Topics Students Study</p>
                <p>The curriculum is organised into half-termly concepts, used to drive the content and skills developed and also tied into a final Rich Challenge.</p>

                <div class="concepts-grid">
                    <div class="concept-card">
                        <h4>Explorers</h4>
                        <p class="lead-subjects">Literacy, ICT, History and MFL lead subjects</p>
                        <p>Pupils become explorers and investigate how we communicate with each other. Pupils focus on which periods of history have influenced society the most and communicate their learning using ICT software.</p>
                    </div>

                    <div class="concept-card">
                        <h4>Identity</h4>
                        <p class="lead-subjects">Geography, Literacy, Values lead subjects</p>
                        <p>Pupils look at national, international and global communities focusing on difference and diversity.</p>
                    </div>

                    <div class="concept-card">
                        <h4>Enterprise</h4>
                        <p class="lead-subjects">Numeracy, ICT and Literacy lead subjects</p>
                        <p>Pupils consider what makes a successful business, focusing on budgeting, marketing and teamwork. Pupils create their own business.</p>
                    </div>

                    <div class="concept-card">
                        <h4>Culture and Arts</h4>
                        <p class="lead-subjects">Literacy, History and Arts lead subjects</p>
                        <p>Pupils explore their heritage in terms of the arts, looking at monarchy and influential figures such as Shakespeare. Pupils will develop their ability to critically analyse texts.</p>
                    </div>

                    <div class="concept-card">
                        <h4>My World</h4>
                        <p class="lead-subjects">Discrete subjects</p>
                        <p>Pupils return to discrete subjects where they explore the world in which we live. Science and Us: pupils explore the world of science and ethics and its impact on the modern world.</p>
                    </div>
                </div>

                <p class="section-label">Main Skills Students Develop</p>

                <div class="skills-grid">
                    <div class="skill-card">
                        <h5>Writing Basics</h5>
                        <p>Paragraphs, punctuation, vocabulary, spelling, writing for audience and purpose.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Reading Basics</h5>
                        <p>Skimming, scanning, selecting, summarising, synthesising, PEE paragraphs, strategies for developing as a successful reader.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Oracy</h5>
                        <p>Presentation skills, group discussion, speaking for audience and purpose, developing ideas.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Numeracy</h5>
                        <p>Number, scales, calculation, graphs, time, measuring.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Analysis</h5>
                        <p>Identify, describe, explain evidence and justify views.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Evaluation</h5>
                        <p>Making judgements and supporting with evidence. Exploring strengths and weaknesses.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Research and Enquiry</h5>
                        <p>Asking questions to drive research, navigating texts, fact and opinion, searching for information in fiction and non-fiction texts.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Leadership</h5>
                        <p>Take on leadership roles in a range of contexts.</p>
                    </div>

                    <div class="skill-card">
                        <h5>Production</h5>
                        <p>Plan, draft and edit a finished piece to a high standard for a range of audiences and purposes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>