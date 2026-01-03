<?php
$pageTitle = 'Park Community School | Photography';
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
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.75rem;
        line-height: 1.7;
    }
    
    .ao-list {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
    }
    
    .ao-list li {
        background: #f8f9fa;
        border-left: 4px solid #F58220;
        padding: 1rem 1.5rem;
        margin-bottom: 1rem;
        border-radius: 0 8px 8px 0;
    }
    
    .ao-list li strong {
        color: #F58220;
    }
    
    .impact-list {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
    }
    
    .impact-list li {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 1rem;
        line-height: 1.7;
    }
    
    .impact-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: #F58220;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .button-row {
        text-align: center;
        margin: 2rem 0;
    }
    
    .button-row .button {
        background-color: #F58220;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        margin: 0.25rem;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .button-row .button:hover {
        background-color: #d96f1a;
        color: white;
        transform: translateY(-2px);
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Photography</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p>In photography we encourage pupils to research effectively, read critically, explore creativity and respond visually to a wide range of texts by contemporary and historical artists. Photography is about process and a fundamental part of what we deliver is about the process of taking and manipulating photographs which is underpinned by the process of creating a fully realised sketchbook.</p>
                
                <p>A further fundamental in photography is the opportunity for increasing cultural capital through artistic investigations and trips to various locations to complete photoshoots but also investigate the historical and architectural makeup of the location.</p>

                <h3>Implementation</h3>
                <p>Our curriculum begins in Year 9 and aims to give pupils an introduction to the analysis and practical skills required before they begin working on coursework units. Lessons encourage an ethos of independence and follow the same, repeated structure to ensure pupils are able to follow the process of creating a unit so they are able to be more self-motivated as the course continues.</p>
                
                <p>This also ensures they are fully equipped for the exam which follows the same structure and a 10-hour controlled assessment. Coursework teaching is structured to cover the 4 assessment areas required:</p>
                
                <ul class="ao-list">
                    <li><strong>AO1</strong> – Pupils will learn how to research and evaluate a range of historical and contemporary artists, evaluate their work and show clear understanding of visual language. They will then respond to it with a pastiche to show understanding.</li>
                    <li><strong>AO2</strong> – Pupils will learn how to refine their work through in-camera editing, visual manipulation and a series of testing and evaluating of their ideas. Annotation and explanation are essential and subject-specific vocabulary is used.</li>
                    <li><strong>AO3</strong> – Pupils will learn how to record both visually and through writing. Photographs, screenshots, shoot plans and sketches are essential parts of this process. Work must contain both drawings and writing.</li>
                    <li><strong>AO4</strong> – Pupils will learn how to create a fully developed 'final piece' which shows clear understanding of visual language and is clearly influenced by the artists they have researched either as a class or as individuals.</li>
                </ul>
                
                <p>Due to the nature of the course we are able to give pupils a degree of ownership over how the course is organised for them. While the first unit is always prescribed, subsequent units are chosen by classes after suitable choices are presented to them.</p>
                
                <p>In addition to this, during the course of a unit pupils will study 3 photographers together as a class before finding their own influences, ensuring that outcomes will be individual and personal. This same structure is used for the exam unit, when there could be as many as 7 different topics being investigated within one class.</p>

                <h3>Impact</h3>
                <ul class="impact-list">
                    <li>Pupils have a love of photography, both the work of others and the work they are able to create themselves. They see the world differently, appreciating the finer details of their environment.</li>
                    <li>Pupils leave us with broader cultural capital, a deeper understanding and appreciation of the world around them and the ability to see the creative potential of a range of locations.</li>
                    <li>Pupils are able to confidently use subject-specific vocabulary when describing, analysing and evaluating the visual work of others and themselves.</li>
                    <li>Pupils are able to work independently, organise themselves, use equipment confidently and problem solve how to get the results they want to achieve.</li>
                </ul>

                <div class="button-row">
                    <a href="../assets/curriculum/photography/year-10-photography.pdf" target="_blank" class="button">Year 10</a>
                    <a href="../assets/curriculum/photography/year-11-photography.pdf" target="_blank" class="button">Year 11</a>
                    <a href="../assets/curriculum/photography/photography-assessment-policy.pdf" target="_blank" class="button">Assessment Policy</a>
                    <a href="../assets/curriculum/photography/learning-journey.pdf" target="_blank" class="button">Learning Journey</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>