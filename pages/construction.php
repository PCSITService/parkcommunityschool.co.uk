<?php
$pageTitle = 'Park Community School | City and Guilds Certificate in Multi Trades';
include('../partials/header.php');
?>

<style>

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

    .content-section h4 {
        color: #333;
        font-size: 1.2rem;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
    }

    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    .content-section ul,
    .content-section ol {
        margin-bottom: 1.5rem;
    }

    .content-section ul li,
    .content-section ol li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }

    .content-section a {
        color: #F58220;
    }

    .content-section a:hover {
        color: #d96f1a;
    }

    .topic-section {
        background: white;
        border-left: 4px solid #F58220;
        padding: 1.25rem 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .topic-section strong {
        color: #F58220;
        font-size: 1.1rem;
    }

    .phases-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .phase-card {
        background: #fff8f0;
        border: 2px solid #F58220;
        border-radius: 8px;
        padding: 1rem 1.25rem;
    }

    .phase-card h4 {
        color: #F58220;
        font-size: 1rem;
        font-weight: 700;
        margin: 0 0 0.4rem;
    }

    .phase-card p {
        margin: 0;
        font-size: 0.95rem;
        color: #444;
        line-height: 1.6;
    }

    @media screen and (max-width: 640px) {
        .phases-grid { grid-template-columns: 1fr; }
    }

</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">City and Guilds Certificate in Multi Trades</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>City and Guilds Certificate in Multi Trades</h3>

                <p>This qualification provides the ideal introduction to the construction industry and cover essential skills in the following construction trades: bricklaying, carpentry and joinery, plastering, painting and decorating, construction operations, wall and floor tiling, electrical and plumbing.</p>

                <h3>The Phases</h3>

                <p>The phases cover the following trade areas:</p>

                <div class="phases-grid">
                    <div class="phase-card">
                        <h4>Phase 1</h4>
                        <p>Generic Units, Bricklaying, Joinery</p>
                    </div>
                    <div class="phase-card">
                        <h4>Phase 2</h4>
                        <p>Wall &amp; Floor Tiling, Construction, Operations, Painting &amp; Decorating</p>
                    </div>
                    <div class="phase-card">
                        <h4>Phase 3</h4>
                        <p>Carpentry</p>
                    </div>
                    <div class="phase-card">
                        <h4>Phase 4</h4>
                        <p>Plastering, Plumbing, Electrical</p>
                    </div>
                </div>

                <h3>About the Course</h3>

                <p>This qualification provides a broad introduction to the construction sector, helping students understand how the industry operates, the range of career opportunities available, and the importance of health and safety on site. Learners explore key topics such as construction processes, materials, sustainability, and environmental considerations, alongside an understanding of different trades and job roles within the industry.</p>

                <div class="topic-section">
                    <p><strong>Practical Skills</strong></p>
                    <p>A strong emphasis is placed on practical skill development. Students gain hands-on experience in areas such as carpentry and joinery, brickwork, painting and decorating, and other core construction techniques. They learn to use tools and equipment safely and accurately, interpret basic construction drawings, measure and mark out materials, and complete practical tasks to industry standards. Safe working practices and risk assessment form a central part of the course.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Progression</strong></p>
                    <p>The qualification supports progression to Level 2 or Level 3 vocational courses, apprenticeships, T Levels, or employment within the construction industry. It also develops valuable transferable skills such as problem-solving, precision, teamwork, resilience and time management.</p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>