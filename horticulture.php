<?php
$pageTitle = 'Park Community School | Horticulture';
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
        margin-bottom: 0.5rem;
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
    
    .content-section p {
        margin-bottom: 1rem;
        line-height: 1.7;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
    }
    
    .garden-link-box {
        background: linear-gradient(135deg, #3d7c47, #5a9a5a);
        border-radius: 8px;
        padding: 1rem 1.5rem;
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .garden-link-box p {
        color: white;
        margin: 0;
        font-size: 1.1rem;
    }
    
    .garden-link-box .button {
        background-color: white;
        color: #3d7c47;
        border-radius: 20px;
        padding: 0.5rem 1.5rem;
        font-weight: 600;
        margin: 0;
    }
    
    .garden-link-box .button:hover {
        background-color: #f5f5f5;
        color: #2d5c37;
    }
    
    .study-areas {
        background: #f5f5f5;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .study-areas ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .study-areas ul li {
        margin-bottom: 0.5rem;
    }
    
    .study-areas ul li:last-child {
        margin-bottom: 0;
    }
    
    .careers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 0.75rem;
        list-style: none;
        margin: 1.5rem 0;
        padding: 0;
    }
    
    .careers-grid li {
        background: #f5f5f5;
        padding: 0.75rem 1rem;
        border-radius: 6px;
        border-left: 3px solid #F58220;
        margin: 0;
    }
    
    .info-box {
        background: #fff8f0;
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 1rem 1.5rem;
        margin: 1rem 0;
    }
    
    .info-box p {
        margin: 0;
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Horticulture</h1>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Horticulture</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                
                <div class="garden-link-box">
                    <p>🌱 Visit our Horticulture Garden to see our students' work in action!</p>
                    <a href="/garden.php" class="button">Horticulture Garden</a>
                </div>

                <p>Horticulture at Park Community School prepares students to engage with a rapidly developing horticultural industry, where students can learn theory-based knowledge about plant families, soil types, plant foods and pollinators (relevant to the wider horticultural industry), current industry practice in propagation, whilst developing practical and creative design skills, to a certified standard.</p>

                <h3>Intent</h3>
                <p>Our aim is to offer a rich, challenging, varied curriculum that ensures all students will have the opportunity to produce excellent work by pushing their own boundaries and exploring their creativity through real-life opportunities that foster skill development, confidence, independence and resilience.</p>
                
                <p>Horticultural students will develop knowledge and skills to certification level, in a wholly different learning environment inside and out, where skill in plant and seed propagation, vegetative propagation and ornamental plant cultivation will be taught and developed further, so that students can develop their own creative ideas, which are crucial in a modern economy, but often in short supply.</p>
                
                <p>The work plan is aimed at practical and theory work to stimulate students' intellectual curiosity and offer real-life opportunities for them to develop horticultural skills, work collaboratively, and become confident, independent learners.</p>

                <h3>Implementation</h3>
                <p>The knowledge and skills that students develop through their learning in horticulture is designed to open pathways to a wide range of career opportunities, both in the locality and elsewhere. These pathways can lead to careers as varied as Horticultural Consultant, Turf Manager, Landscape Designer, Landscape Gardener, Vegetable Farmer, Plant Scientist, Market Gardener, Specialist Gardener, Forestry Worker, and Florist. They can also lead to related fields such as scientific research and food processing.</p>

                <div class="info-box">
                    <p><strong>Exam Board:</strong> City &amp; Guilds</p>
                </div>

                <div class="info-box">
                    <p><strong>Type of Qualification:</strong> City &amp; Guilds Level 1 &amp; 2 Award in Practical Horticulture</p>
                </div>
                
                <h3>Areas of Study</h3>
                <div class="study-areas">
                    <ul>
                        <li>Preparing soil for sowing and planting</li>
                        <li>Soil testing</li>
                        <li>Assist with the propagation of plants from seed</li>
                        <li>Assist with the vegetative propagation of plants</li>
                        <li>Assist with planting and establishing plants</li>
                        <li>Identification of a range of common garden plants, weeds, pests and diseases</li>
                    </ul>
                </div>
                
                <h3>Assessment</h3>
                <p>Assessment is by means of a range of practical activities timetabled and assessed based on the City &amp; Guilds success criteria.</p>

                <h3>Further Study and Career Opportunities</h3>
                <p>The City &amp; Guilds Level 1 Award in Practical Horticulture qualification has been approved within the Qualifications and Credit Framework. As part of the Foundation Learning tier, this qualification provides a new and flexible learning programme for young people working at Level 1. It helps learners develop their horticultural potential and prepares them to progress towards Level 2 qualifications offered by City &amp; Guilds Qualifications and other awarding organisations.</p>
                
                <h3>Careers</h3>
                <p>The horticultural industry is one of the largest employers in the UK. A career in horticulture could mean anything from a hands-on gardener to a research scientist. There are many opportunities available:</p>
                
                <ul class="careers-grid">
                    <li>Green-keeper</li>
                    <li>Gardener / Horticulturalist</li>
                    <li>Arboriculturist</li>
                    <li>Florist</li>
                    <li>Environmental Scientist</li>
                    <li>Horticultural Journalist</li>
                    <li>Vegetable Grower</li>
                    <li>Garden Centre Manager</li>
                    <li>Landscape Contractor</li>
                    <li>Landscape Architect</li>
                    <li>Park Ranger</li>
                    <li>Plant Breeder</li>
                    <li>Soil Scientist</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>