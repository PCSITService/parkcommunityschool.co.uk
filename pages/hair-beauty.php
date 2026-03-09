<?php
$pageTitle = 'Park Community School | Hair & Beauty';
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
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }

    /* Intro box */
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

    /* Qualification pill bar */
    .qual-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin: 1.5rem 0 2rem;
    }

    .qual-pill {
        background: white;
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 0.75rem 1.25rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.07);
    }

    .qual-pill span.pill-label {
        display: block;
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #F58220;
        margin-bottom: 0.2rem;
    }

    .qual-pill span.pill-value {
        display: block;
        font-size: 0.95rem;
        color: #333;
        font-weight: 500;
    }

    /* White raised info box */
    .info-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
    }

    .info-box h4 {
        color: #F58220;
        margin: 0 0 1rem;
        font-size: 1.2rem;
    }

    .info-box p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 0.75rem;
    }

    .info-box p:last-child {
        margin-bottom: 0;
    }

    .info-box ul {
        margin: 0 0 0.75rem;
        padding-left: 1.25rem;
    }

    .info-box ul:last-child {
        margin-bottom: 0;
    }

    .info-box ul li {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }

    /* Areas of study — 2x2 grid of cards */
    .areas-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
        margin: 1.5rem 0 2rem;
    }

    @media (max-width: 640px) {
        .areas-grid { grid-template-columns: 1fr; }
    }

    .area-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        padding: 1.5rem;
    }

    .area-card h4 {
        color: #F58220;
        font-size: 1rem;
        margin: 0 0 0.85rem;
    }

    .area-card ul {
        margin: 0;
        padding-left: 1.1rem;
    }

    .area-card ul li {
        font-size: 0.92rem;
        color: #555;
        margin-bottom: 0.4rem;
        line-height: 1.6;
    }

    /* Assessment cards — 3 across */
    .assessment-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
        margin: 1.5rem 0 2rem;
    }

    @media (max-width: 768px) {
        .assessment-grid { grid-template-columns: 1fr; }
    }

    .assessment-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .assessment-card .assess-number {
        display: inline-block;
        background: #F58220;
        color: white;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        padding: 0.2rem 0.75rem;
        border-radius: 20px;
        margin-bottom: 0.5rem;
        width: fit-content;
    }

    .assessment-card h4 {
        color: #F58220;
        font-size: 1rem;
        margin: 0 0 0.25rem;
    }

    .assessment-card p.assess-type {
        font-size: 0.82rem;
        color: #888;
        font-style: italic;
        margin: 0 0 0.75rem;
    }

    .assessment-card p {
        font-size: 0.92rem;
        color: #555;
        line-height: 1.7;
        margin: 0;
    }

    .assessment-card ul {
        margin: 0.5rem 0 0;
        padding-left: 1.1rem;
    }

    .assessment-card ul li {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 0.4rem;
        line-height: 1.6;
    }

    /* Careers pill grid */
    .careers-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        margin: 1.5rem 0 2rem;
        list-style: none;
        padding: 0;
    }

    .careers-grid li {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 0.6rem 1.25rem;
        font-size: 1rem;
        font-weight: 500;
        color: #333;
    }

    /* Further study left-border list */
    .further-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
    }

    .further-list li {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border-left: 3px solid #F58220;
        border-radius: 0 8px 8px 0;
        padding: 0.65rem 1rem;
        font-size: 0.95rem;
        color: #333;
        line-height: 1.5;
    }

    /* Synoptic themes pill list */
    .themes-list {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        list-style: none;
        padding: 0;
        margin: 0.75rem 0 0;
    }

    .themes-list li {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 0.45rem 1rem;
        font-size: 0.9rem;
        color: #555;
    }

    /* Spec link button */
    .spec-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #F58220;
        color: white;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        text-decoration: none;
        margin: 0.5rem 0 1.5rem;
        transition: background 0.2s ease;
    }

    .spec-link:hover {
        background: #d4711a;
        color: white;
    }

    /* Photo gallery strip */
    .photo-gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .photo-gallery img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    @media (max-width: 768px) {
        .photo-gallery { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 480px) {
        .photo-gallery { grid-template-columns: 1fr; }
    }

</style>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Hair &amp; Beauty</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Hair &amp; Beauty at Park Community School</h3>

                <div class="intro-box">
                    <p>Our Hair &amp; Beauty Technical Award gives students an inspiring introduction to the world of professional salon work. Learners build practical skills in hairdressing, make-up, skincare and nail services while also gaining essential theory in science, client care, and working safely.</p>
                    <p>This qualification reflects what the industry expects from new applicants: creativity, professionalism, confidence, and the ability to work independently with real clients and real styling challenges.</p>
                    <p><em>Visit our Hair &amp; Beauty learning spaces to see our students' professional work in action!</em></p>
                </div>

                <!-- Qualification details -->
                <div class="qual-bar">
                    <div class="qual-pill">
                        <span class="pill-label">Exam Board</span>
                        <span class="pill-value">City &amp; Guilds</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Qualification</span>
                        <span class="pill-value">City &amp; Guilds Technical Award in Hair &amp; Beauty Studies (3038)</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Level</span>
                        <span class="pill-value">Equivalent to GCSE</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Assessment</span>
                        <span class="pill-value">Exam, Practical Assignments &amp; Synoptic Assignment</span>
                    </div>
                </div>

                <!-- Spec link — update href when you have the URL -->
                <a href="https://www.cityandguilds.com/-/media/productdocuments/beauty_and_complementary_therapies/beauty/3038/3038-24/centre_documents/3038_24_l2_hair_beauty_studies_qualification_handbook_v1-4-pdf.pdf" class="spec-link" target="_blank" rel="noopener">
                    &#128196; View the Full Specification (City &amp; Guilds 3038)
                </a>

                <h3>Intent</h3>

                <div class="info-box">
                    <p>Our aim is to provide a rich, varied curriculum that enables every student to produce excellent work. Students are encouraged to stretch their creativity, problem-solve, and gain confidence through hands-on practical experiences in a realistic salon environment.</p>
                    <p><strong>Learners will:</strong></p>
                    <ul>
                        <li>Develop professional salon techniques</li>
                        <li>Understand hair and beauty science</li>
                        <li>Explore creative themed work</li>
                        <li>Learn how to meet client needs effectively</li>
                        <li>Build independence and resilience</li>
                        <li>Develop communication and customer service skills</li>
                        <li>Explore real career pathways within the growing beauty sector</li>
                    </ul>
                </div>

                <h3>Implementation</h3>

                <div class="info-box">
                    <p>The course blends theory with practical activities across a range of hair and beauty disciplines. Students learn through demonstrations, structured practice, creative exploration, and real-life scenarios.</p>
                    <p><strong>This includes:</strong></p>
                    <ul>
                        <li>Practical hair styling skills</li>
                        <li>Basic beauty therapy and nail services</li>
                        <li>Client consultation and care</li>
                        <li>Industry-standard health &amp; safety</li>
                        <li>Product and equipment knowledge</li>
                        <li>Understanding salon businesses and job roles</li>
                    </ul>
                    <p>The curriculum prepares learners for further study, apprenticeships, and direct employment pathways within the industry.</p>
                </div>

                <h3>Areas of Study</h3>

                <div class="areas-grid">

                    <div class="area-card">
                        <h4>Hairdressing Skills</h4>
                        <ul>
                            <li>Blow-drying, styling and finishing</li>
                            <li>Plaiting and twisting techniques</li>
                            <li>Preparation and sectioning</li>
                            <li>Understanding hair structure and types</li>
                        </ul>
                    </div>

                    <div class="area-card">
                        <h4>Beauty Therapy &amp; Make-Up</h4>
                        <ul>
                            <li>Skincare routines</li>
                            <li>Basic make-up application</li>
                            <li>Manual techniques for application</li>
                            <li>Nail shaping and natural nail care</li>
                        </ul>
                    </div>

                    <div class="area-card">
                        <h4>Science Behind Services</h4>
                        <ul>
                            <li>Hair and skin structure</li>
                            <li>Cleansing, exfoliation and moisturising theory</li>
                            <li>Effects of ingredients and products</li>
                            <li>Healthy working practices</li>
                        </ul>
                    </div>

                    <div class="area-card">
                        <h4>Client Care &amp; Communication</h4>
                        <ul>
                            <li>Professional conduct</li>
                            <li>Client consultations</li>
                            <li>Understanding salon roles</li>
                            <li>Customer service expectations</li>
                        </ul>
                    </div>

                </div>

                <h3>Assessment</h3>

                <p>Assessment is conducted through a combination of:</p>

                <div class="assessment-grid">

                    <div class="assessment-card">
                        <span class="assess-number">1</span>
                        <h4>Practical Assessments</h4>
                        <p class="assess-type">Internal</p>
                        <p>Students complete practical tasks throughout the course, graded against City &amp; Guilds criteria. These include hair finishing services, skin care routines, nail treatments, and make-up looks.</p>
                    </div>

                    <div class="assessment-card">
                        <span class="assess-number">2</span>
                        <h4>Written or Online Exam</h4>
                        <p class="assess-type">External</p>
                        <p>Learners complete an externally set exam assessing their knowledge of the hair and beauty sector, science, client care, and professional expectations.</p>
                    </div>

                    <div class="assessment-card">
                        <span class="assess-number">3</span>
                        <h4>Synoptic Assignment</h4>
                        <p class="assess-type">Theme or Era Based</p>
                        <p>The synoptic assessment is a major project where students bring together all the skills, knowledge, and techniques they have learned throughout the course.</p>
                        <ul>
                            <li>Work to a specific theme, concept, or historical era</li>
                            <li>Plan and create a complete look (hair, beauty and design elements)</li>
                            <li>Present a fully prepared model</li>
                            <li>Justify product, tool and technique choices</li>
                            <li>Demonstrate creativity, accuracy, and professionalism</li>
                            <li>Evaluate their own results</li>
                        </ul>
                    </div>

                </div>

                <!-- Synoptic themes -->
                <div class="info-box">
                    <h4>Possible Synoptic Themes &amp; Eras</h4>
                    <p>The synoptic task mirrors real industry expectations, allowing students to showcase originality, technical skill, and their understanding of how to design and execute a full professional look.</p>
                    <ul class="themes-list">
                        <li>Ancient Greece</li>
                        <li>1920s Flapper Style</li>
                        <li>1960s Mod Looks</li>
                        <li>Victorian Elegance</li>
                        <li>Fantasy or Editorial Concepts</li>
                        <li>Cultural or Artistic Movements</li>
                    </ul>
                </div>

                <h3>Further Study</h3>

                <div class="info-box">
                    <p>This qualification prepares learners for the next steps in education or work:</p>
                    <ul class="further-list">
                        <li>Level 2 Hairdressing</li>
                        <li>Level 2 Beauty Therapy</li>
                        <li>Level 2 Barbering</li>
                        <li>Apprenticeships</li>
                        <li>Further vocational qualifications</li>
                    </ul>
                </div>

                <h3>Career Opportunities</h3>

                <p>The Hair &amp; Beauty industry offers a wide variety of exciting and creative career pathways:</p>

                <ul class="careers-grid">
                    <li>Hairdresser</li>
                    <li>Barber</li>
                    <li>Beauty Therapist</li>
                    <li>Nail Technician</li>
                    <li>Make-up Artist</li>
                    <li>Spa Therapist</li>
                    <li>Salon Manager</li>
                    <li>Cosmetic Sales Consultant</li>
                    <li>Freelance Stylist</li>
                    <li>Skin Care Specialist</li>
                    <li>Massage Therapist</li>
                    <li>Salon Receptionist</li>
                </ul>

                <p>Students leave equipped with confidence, creativity and foundational professional skills that are highly valued in the industry.</p>

                <!-- IMAGE SLIDESHOW BELLOW -->
                <!--<h3>Hair &amp; Beauty at Park</h3>

                <div class="photo-gallery">
                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=800&q=80" alt="Hair styling in a professional salon">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?w=800&q=80" alt="Make-up application">
                    <img src="https://images.unsplash.com/photo-1519014816548-bf5fe059798b?w=800&q=80" alt="Nail care and beauty therapy">
                </div> -->

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>