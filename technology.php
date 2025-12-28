<?php
$pageTitle = 'Park Community School | Technology';
include('partials/header.php');
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
        font-size: 1.15rem;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
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
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        margin: 0.25rem;
        display: inline-block;
        transition: all 0.3s ease;
        font-size: 0.9rem;
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
    
    .accordion-content p:last-child {
        margin-bottom: 0;
    }
    
    .opportunities-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1.5rem 0;
    }
    
    .opportunities-box ul {
        margin: 0;
    }
    
    .handbook-link {
        text-align: center;
        margin: 2rem 0;
    }
    
    .handbook-link img {
        max-width: 150px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .handbook-link img:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Food and Design Technology</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>What Design and Technology Aims to Provide for Our Students</h3>
                <p>Design and Technology prepares pupils to engage with rapidly changing technologies as well as challenging current designs so that students can creatively improve standards and solve real-life problems. Our aim is to provide a rich and challenging curriculum that ensures all pupils will have the opportunity to produce excellent work by pushing their own boundaries and exploring their creativity. Design and Technology teaches students to learn about a wide range of materials, processes and manufacturing techniques. Pupils will become proficient in joining materials, developing drawing techniques, critiquing designed products and creating effective products, dishes and outcomes. Design and Technology enables our students to combine practical skills with an understanding of aesthetics, social, environmental issues, functional and industrial practices.</p>

                <h3>Curriculum Intent</h3>
                <p>Design and Technology is an inspiring, rigorous and practical subject. Students studying it will use their creativity and imagination to design and make a range of products that solve a variety of issues. Whilst designing, students will consider other individuals' needs as well as their own to produce the most effective outcome. Design and Technology requires a broad subject knowledge that draws upon other areas of the curriculum, for example, science, engineering and maths. Pupils learn how to take risks and are required to design innovatively to produce new and interesting products and concepts.</p>
                <p>All pupils will develop their creative, technical and practical skills to be able to partake in using new technologies successfully. Students will need to develop their knowledge and understanding of the subject so that they are able to design high-quality products and prototypes for a variety of end users. Most importantly, students will need to learn to have a critical eye when looking at existing products to analyse their strengths, weaknesses and suggest possible improvements as well as evaluate the successfulness of their own work.</p>

                <h3>Curriculum Implementation</h3>
                <p>Students will learn why conducting extensive research from a range of cultures and being able to understand a variety of needs is important when designing.</p>
                <p>Being able to produce a design brief and understanding how this is used in industry will enable students to keep their design focused and relevant.</p>
                <p>Effective problem-solving skills are vital for the students to critique their work and give careful thought about how this item could be developed, further changed or improved.</p>
                <p>Students will learn a variety of hand skills with tools and also machine processes; this will enable them to create an item/prototype/product that will fit within their specification parameters and show their skill.</p>
                <p>A range of materials will be considered and will enable students to be critical but selective with their decision-making process to create a final outcome.</p>
                <p>Analysis of past and present designs will assist the students in understanding the limitations and possibilities that designing and creating can present.</p>
                <p>Testing and learning about new technologies are important parts of students' learning as this will enable students to show that they are becoming thoughtful designers. They will use their knowledge and responsibility as an environmentally considerate designer to create a sustainable product.</p>
                <p>Whilst developing their skills, students will need to be able to describe why a good technical understanding will help them to create a more effective outcome.</p>
                <p>For further information on how our curriculum is implemented, please click on the following links:</p>

                <div class="button-row">
                    <a href="assets/curriculum/technology/y7_curriculum.pdf" target="_blank" class="button">Year 7</a>
                    <a href="assets/curriculum/technology/y8_curriculum.pdf" target="_blank" class="button">Year 8</a>
                    <a href="assets/curriculum/technology/y9_curriculum.pdf" target="_blank" class="button">Year 9</a>
                    <a href="assets/curriculum/technology/y10_art_design_3d_design_curriculum.pdf" target="_blank" class="button">Year 10/11 Art/3D Design</a>
                    <a href="assets/curriculum/technology/y10_hospitality_catering_curriculum.pdf" target="_blank" class="button">Year 10 Hospitality &amp; Catering</a>
                    <a href="assets/curriculum/technology/y10_art_design_graphics_curriculum.pdf" target="_blank" class="button">Year 10/11 Art and Design: Graphics</a>
                    <a href="assets/curriculum/technology/y10_apex.pdf" target="_blank" class="button">Year 10/11 APEX Construction Skills</a>
                </div>

                <ul class="accordion">
                    <li class="accordion-item">
                        <div class="accordion-header">Year 7 Design and Technology Transition Curriculum</div>
                        <div class="accordion-content">
                            <p>Year 7 Design and Technology at Park is designed to enable our students to make a successful transition from Key Stage 2. Students will study three main areas: Design and Technology where students are learning the design process and health and safety legislation whilst using new equipment; Food and Catering including health and hygiene basics and cooking skills; and a Graphics and Designing Skills curriculum where students will look at precision drawing and product analysis whilst some will be developing their understanding of Horticulture.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">Year 8 Design and Technology Curriculum</div>
                        <div class="accordion-content">
                            <p>Year 8 Design and Technology students study Design and Technology, Hospitality and Catering, and Graphics. This is a skills-based year where students will design and create a few products as well as learn new cooking skills. The aim of this year is to allow students to practise skills whilst trying to refine their work to improve its quality. There is a larger emphasis on the theoretical work to ensure that students are fully prepared for GCSE, but we are fully supportive of teaching practical skills for life.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">Year 9 Design and Technology Curriculum</div>
                        <div class="accordion-content">
                            <p>Year 9 Design and Technology students study Design and Technology, Graphics and Hospitality and Catering. This is another skills-based year but where students try to master the skills learnt in Year 7 and 8. This will also be an opportunity to learn new higher-level skills to prepare them for their GCSE years. The main aim of this year is to allow students to have time to practise and really refine their skills to develop their final outcomes and appreciate the need for a quality product.</p>
                            <p>There is a larger emphasis on three areas for DT: Research – Analyse – Respond. This will support their practices in GCSE Art and Design. Students learning construction will learn skills for life as well as preparing them for Level 2 Construction in Multi-trades. Dishes cooked in Catering will be presented to a higher standard to ensure that all health and hygiene rules apply in more complex dishes. This preparation will allow students to succeed in their vocational qualification in Hospitality and Catering.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">GCSE Art and Design: 3D Design Modules</div>
                        <div class="accordion-content">
                            <p>Three-dimensional design is defined here as the design, prototyping and modelling or making of primarily functional and aesthetic products, objects, and environments, drawing upon intellectual, creative and practical skills. Students are taught many different skills to prepare them for the 3 modules that they must complete to pass this course.</p>
                            <ul>
                                <li><strong>Module 1:</strong> A mini project showing their designing skills and developing them</li>
                                <li><strong>Module 2:</strong> A design and make project of the student's choice</li>
                                <li><strong>Module 3:</strong> A design and make project that is stipulated externally with a 10-hour making exam</li>
                            </ul>
                            <p>Within the context of three-dimensional design, students must demonstrate the ability to use techniques and processes such as: model making, constructing, surface treatment, assembling, and modelling.</p>
                            <p>Students use media and materials including: drawing materials, clay, wood, metal, plaster, plastic, and found materials.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">Year 10/11 – GCSE Art and Design: 3D Design</div>
                        <div class="accordion-content">
                            <p><a href="https://www.aqa.org.uk/subjects/art-and-design/gcse/art-and-design-8201-8206" target="_blank">View the AQA examination board specification</a></p>
                            <h4>Areas of Study</h4>
                            <p>In Module 2 and Module 3 students are required to work in one or more areas of three-dimensional design, such as:</p>
                            <ul>
                                <li>Architectural design</li>
                                <li>Sculpture</li>
                                <li>Ceramics</li>
                                <li>Product design</li>
                                <li>Jewellery and body adornment</li>
                                <li>Interior design</li>
                                <li>Environmental/landscape/garden design</li>
                                <li>Exhibition design</li>
                                <li>3D digital design</li>
                                <li>Designs for theatre, film and television</li>
                            </ul>
                            <p>Students may explore overlapping areas and combinations of areas.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">GCSE Art and Design: Graphic Communication Modules</div>
                        <div class="accordion-content">
                            <p>Graphic communication is defined here as the process of designing primarily visual material to convey information, ideas, meaning and emotions in response to a given or self-defined brief. Students are taught many different skills to prepare them for the 3 modules that they must complete to pass this course.</p>
                            <ul>
                                <li><strong>Module 1:</strong> A mini project showing their designing skills and developing them</li>
                                <li><strong>Module 2:</strong> A design and make project of the student's choice</li>
                                <li><strong>Module 3:</strong> A design and make project that is stipulated externally with a 10-hour making exam</li>
                            </ul>
                            <p>Within the context of graphic communication, students must demonstrate the ability to use techniques such as: typography, illustration, digital and/or non-digital photography, hand-rendered working methods, and digital working methods.</p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">Year 10/11 – Art and Design: Graphic Communication</div>
                        <div class="accordion-content">
                            <p><a href="https://www.aqa.org.uk/subjects/art-and-design/gcse/art-and-design-8201-8206" target="_blank">View the AQA examination board specification</a></p>
                            <p>In Module 2 and Module 3 students are required to work in one or more areas of graphic communication, such as:</p>
                            <ul>
                                <li>Communication graphics</li>
                                <li>Design for print</li>
                                <li>Advertising and branding</li>
                                <li>Illustration</li>
                                <li>Package design</li>
                                <li>Typography</li>
                                <li>Interactive design (including web, app and game)</li>
                                <li>Multi-media</li>
                                <li>Motion graphics</li>
                                <li>Signage</li>
                                <li>Exhibition graphics</li>
                            </ul>
                            <p><em>Students may explore overlapping areas and combinations of areas.</em></p>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">WJEC (Eduqas) Hospitality and Catering</div>
                        <div class="accordion-content">
                            <p><a href="https://www.eduqas.co.uk/qualifications/hospitality-and-catering/" target="_blank">View the Eduqas examination board specification</a></p>
                            <p>The hospitality and catering sector includes all businesses that provide food, beverages, and/or accommodation services. This includes restaurants, hotels, pubs and bars. It also includes airlines, tourist attractions, hospitals and sports venues; businesses where hospitality and catering is not their primary service but is increasingly important to their success.</p>
                            <p>Level 1/2 Vocational Award in Hospitality and Catering provides learners with a core depth of knowledge and a range of specialist and general skills that will support their progression to further learning and employment.</p>
                            <h4>Main Topics Students Study:</h4>
                            <ul>
                                <li>Understanding of Hygiene and Safety when working in an industrial kitchen and when dealing with the public</li>
                                <li>Catering terminology and job roles within Catering</li>
                                <li>All aspects of food preparation, cooking and presentation</li>
                                <li>Using a wide range of fresh and pre-made commodities</li>
                                <li>Nutrition with reference to medical, ethical and religious needs</li>
                                <li>Different cooking methods: creaming, whisking, baking and steaming</li>
                                <li>Skills needed to plan and cost meals</li>
                            </ul>
                        </div>
                    </li>

                    <li class="accordion-item">
                        <div class="accordion-header">APEX – Laser Level 2 Certificate in Multi-trades</div>
                        <div class="accordion-content">
                            <p>To achieve the LASER Level 2 Certificate for Learning, Employability and Progression, the learner must achieve a minimum of 25 credits. The credits may be taken from any combination of units but a minimum of 20 credits must be at Level 2.</p>
                            <p>Here at Park Community School we offer this course with specific credits awarded in different construction skills. These skills are delivered at our APEX construction skills centre in Leigh Park, Havant.</p>
                            <h4>Level 1 Skills:</h4>
                            <ul>
                                <li>Introduction to a training course</li>
                                <li>Health and Safety</li>
                                <li>Measure Distance Length</li>
                                <li>Brickwork</li>
                                <li>Carpentry and Joinery</li>
                                <li>Carpentry Hand Skills</li>
                                <li>Painting and Decorating skills</li>
                                <li>Plastering</li>
                                <li>Wallpapering</li>
                            </ul>
                            <h4>Level 2 Skills:</h4>
                            <ul>
                                <li>Health and Safety in construction</li>
                                <li>Brickwork</li>
                                <li>Carpentry and Joinery</li>
                                <li>Carpentry Hand Skills</li>
                                <li>Timber in Construction</li>
                                <li>Painting and Decorating skills</li>
                                <li>Plastering and Wallpapering</li>
                                <li>Finance</li>
                            </ul>
                            <p>For more information, please contact Daniel Payne, Head of Design and Technology at <a href="/contact.php">Park Community School</a>.</p>
                        </div>
                    </li>
                </ul>

                <h3>Impact</h3>
                <p>Our pupils having completed our curriculum are more prepared for life past Park Community School because the problem-solving skills they have learnt are enabling them to be more creative and approach problems with an 'out of the box' solution. Our students are independent, organised, and can use machinery confidently. They will have used a small selection of industry-standard equipment; this will give them the confidence when working in their future.</p>
                <p>Our curriculum is progressive and broad, enabling our students to have a good knowledge of a variety of different specialisms like Construction, Hospitality and Catering, Design and Model Making, therefore giving our students a range of career paths. Our students leave with a broader cultural capital as in addition to our curriculum we offer a diverse range of extra-curricular activities and competitions. We believe that our curriculum gives our students the 'Practical Skills For Life' that they need to be successful in their future.</p>
                <p>If you are interested in a career in Design and Technology, please look at these websites or alternatively log into the student portal Design and Technology careers page:</p>

                <div class="button-row">
                    <a href="https://pcshantssch.sharepoint.com/sites/dt/SitePages/Careers-in-Design-and-Technology.aspx" target="_blank" class="button">Technology Intranet</a>
                    <a href="https://www.indeed.com/career-advice/finding-a-job/careers-in-design-and-technology" target="_blank" class="button">Indeed</a>
                    <a href="https://www.bbc.co.uk/bitesize/tags/zn7h8xs/jobs-that-use-design-and-technology/1" target="_blank" class="button">BBC Bitesize</a>
                </div>

                <h3>Additional Opportunities</h3>
                <div class="opportunities-box">
                    <ul>
                        <li>STEM Ambassadors (all years)</li>
                        <li>Cooking Club (Year 7, 8 and 9)</li>
                        <li>Rotary Young Chef competitions</li>
                        <li>Homework Club (Year 7, 8 and 9)</li>
                        <li>APEX Construction skills taster sessions (all years)</li>
                        <li>Period 6 sessions (GCSE)</li>
                        <li>Greenpower STEM Racing club (all years)</li>
                    </ul>
                </div>

                <h3>Technology Department Handbook</h3>
                <p>Please click the Technology handbook to view department guidance:</p>
                <div class="handbook-link">
                    <a href="assets/curriculum/technology/handbook.pdf" target="_blank">
                        <img alt="Technology Department Handbook" src="assets/curriculum/technology/handbook.jpg">
                    </a>
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

<?php include('partials/footer.php'); ?>