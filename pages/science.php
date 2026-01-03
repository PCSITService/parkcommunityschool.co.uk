<?php
$pageTitle = 'Park Community School | Science';
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
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
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
    
    /* Accordion */
    .accordion {
        list-style: none;
        margin: 2rem 0;
        padding: 0;
    }
    
    .accordion-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 0.75rem;
        overflow: hidden;
    }
    
    .accordion-header {
        background: #f8f9fa;
        padding: 1rem 1.5rem;
        cursor: pointer;
        font-weight: 600;
        color: #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .accordion-header:hover {
        background: #F58220;
        color: white;
    }
    
    .accordion-header::after {
        content: '+';
        font-size: 1.5rem;
        font-weight: 300;
    }
    
    .accordion-item.active .accordion-header::after {
        content: '−';
    }
    
    .accordion-item.active .accordion-header {
        background: #F58220;
        color: white;
    }
    
    .accordion-content {
        display: none;
        padding: 1.5rem;
        background: white;
    }
    
    .accordion-item.active .accordion-content {
        display: block;
    }
    
    .accordion-content h4 {
        margin-top: 0;
    }
    
    .accordion-content h4:not(:first-of-type) {
        margin-top: 1.5rem;
    }
    
    .accordion-content ul {
        margin-bottom: 1rem;
        padding-left: 1.25rem;
    }
    
    .accordion-content li {
        margin-bottom: 0.35rem;
    }
    
    .accordion-content hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 1.5rem 0;
    }
    
    .useful-links {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin-top: 1rem;
    }
    
    .useful-links ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .useful-links li {
        margin-bottom: 0.5rem;
    }
    
    .useful-links small {
        color: #666;
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Science</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p>In science, we deliver an ambitious and broad curriculum that caters for all learners. During Key Stage 3 in science, we want our students to be curious about the world around them and be confident to ask questions and investigate a range of possibilities.</p>
                
                <p>Our curriculum is designed to be sequential, building upon the learning in Key Stage 2 and enabling students to develop the necessary skills when working as a scientist. Vocabulary is very important in science, and we develop the amount of science-specific words learnt by students and ensure these are practised both orally and in written work.</p>
                
                <p>Once at Key Stage 4, we build upon the key skills and knowledge learnt in Key Stage 3 and continue to master these and apply them to a range of ideas and contexts.</p>

                <h3>Implementation</h3>
                <p>We have a centralised spiral curriculum in Key Stage 3, designed to ensure the National Curriculum is covered with appropriate levels of challenge for all students.</p>
                
                <p>We provide opportunities for students to prepare, practise and perform, enabling them to become great learners.</p>
                
                <p>For Key Stage 4, we have a centralised scheme of work designed to ensure the AQA specification is covered from grades 1–9.</p>
                
                <p>We improve and master the working scientifically skills built upon in Key Stage 3, while covering the required practical elements of the course.</p>
                
                <p>Common formative assessment tasks are used to inform both teachers and students of level of understanding and next steps.</p>
                
                <p>Clear focus on expanding scientific vocabulary to ensure fluency in both written and verbal answers.</p>

                <h3>Impact</h3>
                <p>During Key Stage 3, we want students who are ready for Key Stage 4 with necessary skills and knowledge to build upon and are 'GCSE ready'.</p>
                
                <p>Students have high aspirations and enjoyment of science when leaving Key Stage 3 and students can achieve age-related expectations (ARE) or above and are fully prepared for their GCSE.</p>
                
                <p>Once in Key Stage 4, our aim is to increase the number of students going on to study a science subject at higher education and to ensure students leave with the ability to question the changing world around them.</p>

                <div class="button-row">
                    <a href="../assets/curriculum/science/curriculum_map_KS3.pdf" target="_blank" class="button">Curriculum Map KS3</a>
                    <a href="../assets/curriculum/science/curriculum_map_KS4.pdf" target="_blank" class="button">Curriculum Map KS4</a>
                    <a href="../assets/curriculum/science/science-handbook.pdf" target="_blank" class="button">Handbook</a>
                </div>

                <h3>Subject Content</h3>

                <ul class="accordion">
                    <li class="accordion-item">
                        <div class="accordion-header">Key Stage 3</div>
                        <div class="accordion-content">
                            <p><a href="../assets/curriculum/science/ks3_big_picture.pdf" target="_blank">KS3 Big Picture</a></p>
                            
                            <h4>Year 7</h4>
                            <ul>
                                <li><a href="../assets/curriculum/science/ks3/7-1_identity.pdf" target="_blank">Identity</a></li>
                                <li><a href="../assets/curriculum/science/ks3/7-2_reactions.pdf" target="_blank">Reactions</a></li>
                                <li><a href="../assets/curriculum/science/ks3/7-3_organisms_1.pdf" target="_blank">Organisms</a></li>
                                <li><a href="../assets/curriculum/science/ks3/7-4_forces_1.pdf" target="_blank">Forces 1</a></li>
                                <li><a href="../assets/curriculum/science/ks3/7-5_particles.pdf" target="_blank">Particles</a></li>
                                <li><a href="../assets/curriculum/science/ks3/7_space.pdf" target="_blank">Space</a></li>
                            </ul>
                            
                            <hr>
                            
                            <h4>Year 8</h4>
                            <ul>
                                <li><a href="../assets/curriculum/science/ks3/8-1_body_systems.pdf" target="_blank">Body Systems</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-2_particles.pdf" target="_blank">Particles</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-3_electricity.pdf" target="_blank">Electricity</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-4_reactions_2.pdf" target="_blank">Reactions 2</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-5_light.pdf" target="_blank">Light</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-6_magnets.pdf" target="_blank">Magnets</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-7_speed.pdf" target="_blank">Speed</a></li>
                                <li><a href="../assets/curriculum/science/ks3/8-8_pressure.pdf" target="_blank">Pressure</a></li>
                            </ul>
                            
                            <hr>
                            
                            <h4>Year 9</h4>
                            <ul>
                                <li><a href="../assets/curriculum/science/ks3/9-1_photosynthesis_respiration.pdf" target="_blank">Photosynthesis &amp; Respiration</a></li>
                                <li><a href="../assets/curriculum/science/ks3/9-2_earth.pdf" target="_blank">Earth</a></li>
                                <li><a href="../assets/curriculum/science/ks3/9-3_reactions_3.pdf" target="_blank">Reactions 3</a></li>
                                <li><a href="../assets/curriculum/science/ks3/9-4_energy.pdf" target="_blank">Energy</a></li>
                                <li><a href="../assets/curriculum/science/ks3/9-5_forces_2.pdf" target="_blank">Forces 2</a></li>
                                <li><a href="../assets/curriculum/science/ks3/9-6_static.pdf" target="_blank">Static Electricity</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">Key Stage 4</div>
                        <div class="accordion-content">
                            <h4>AQA Trilogy</h4>
                            <p>We believe that science has something to offer every student. That's why we have a suite of science qualifications for Key Stage 4 – to suit students of all abilities and all aspirations.</p>

                            <p><strong>Big Pictures:</strong></p>
                            <ul>
                                <li><a href="../assets/curriculum/science/ks4_bio_big_picture.pdf" target="_blank">KS4 Biology Big Picture</a></li>
                                <li><a href="../assets/curriculum/science/ks4_chem_big_picture.pdf" target="_blank">KS4 Chemistry Big Picture</a></li>
                                <li><a href="../assets/curriculum/science/ks4_phy_big_picture.pdf" target="_blank">KS4 Physics Big Picture</a></li>
                            </ul>

                            <h4>Year 10</h4>
                            <ul>
                                <li><a href="../assets/curriculum/science/year_10_big_picture.pdf" target="_blank">Big Picture</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b1.pdf" target="_blank">B1 Cell Biology</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b2.pdf" target="_blank">B2 Organisation</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b3.pdf" target="_blank">B3 Infection and Response</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b4.pdf" target="_blank">B4 Bioenergetics</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c1.pdf" target="_blank">C1 Atomic Structure &amp; the Periodic Table</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c2.pdf" target="_blank">C2 Bonding, Structure and Properties of Matter</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c3.pdf" target="_blank">C3 Quantitative Chemistry</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c4.pdf" target="_blank">C4 Chemical Changes</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c5.pdf" target="_blank">C5 Energy Changes</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b5.pdf" target="_blank">B5 Homeostasis and Response</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b6.pdf" target="_blank">B6 Inheritance, Variation and Evolution</a></li>
                                <li><a href="../assets/curriculum/science/ks4/b7.pdf" target="_blank">B7 Ecology</a></li>
                            </ul>
                            
                            <hr>
                            
                            <h4>Year 11</h4>
                            <ul>
                                <li><a href="../assets/curriculum/science/year_11_big_picture.pdf" target="_blank">Big Picture</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c5.pdf" target="_blank">C5 Energy Changes</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c6.pdf" target="_blank">C6 The Rate and Extent of Chemical Change</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c7.pdf" target="_blank">C7 Organic Chemistry</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c8.pdf" target="_blank">C8 Chemical Analysis</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c9.pdf" target="_blank">C9 Chemistry of the Atmosphere</a></li>
                                <li><a href="../assets/curriculum/science/ks4/c10.pdf" target="_blank">C10 Using Resources</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p1.pdf" target="_blank">P1 Energy</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p2.pdf" target="_blank">P2 Electricity</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p3.pdf" target="_blank">P3 Particle Model of Matter</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p4.pdf" target="_blank">P4 Atomic Structure</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p5.pdf" target="_blank">P5 Forces</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p6.pdf" target="_blank">P6 Waves</a></li>
                                <li><a href="../assets/curriculum/science/ks4/p7.pdf" target="_blank">P7 Magnetism &amp; Electromagnetism</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <h3>Useful Links</h3>
                <div class="useful-links">
                    <ul>
                        <li><a href="https://www.bbc.co.uk/bitesize/subjects/zng4d2p" target="_blank">BBC Bitesize KS3 Science</a></li>
                        <li><a href="https://filestore.aqa.org.uk/resources/science/specifications/AQA-8464-SP-2016.PDF" target="_blank">AQA GCSE Combined Science Trilogy</a> <small>(PDF)</small></li>
                        <li><a href="https://www.bbc.co.uk/bitesize/subjects/zrkw2hv" target="_blank">BBC Bitesize GCSE Science</a></li>
                        <li><a href="https://www.s-cool.co.uk" target="_blank">S-cool the Revision Website</a></li>
                        <li><a href="https://www.youtube.com/channel/UCqbOeHaAUXw9Il7sBVG3_bw" target="_blank">Free Science Lessons</a> <small>(YouTube)</small></li>
                        <li><a href="https://www.youtube.com/channel/UCS3wWlfGUijnRIf745lRl2A" target="_blank">FuseSchool – Global Education</a> <small>(YouTube)</small></li>
                        <li><a href="https://www.thenational.academy" target="_blank">Oak National Academy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        
        header.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            
            // Close all items
            accordionItems.forEach(i => i.classList.remove('active'));
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php include('../partials/footer.php'); ?>