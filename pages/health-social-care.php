<?php
$pageTitle = 'Park Community School | Health & Social Care';
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

    /* Qual pills */
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

    /* Component cards — 3 across */
    .component-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
        margin: 1.5rem 0 2rem;
    }

    @media (max-width: 768px) {
        .component-grid { grid-template-columns: 1fr; }
    }

    .component-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .component-card .comp-meta {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 0.5rem;
    }

    .comp-badge {
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        padding: 0.2rem 0.65rem;
        border-radius: 20px;
    }

    .comp-badge--internal {
        background: #fff0e0;
        color: #c95f00;
    }

    .comp-badge--external {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .comp-badge--glh {
        background: #f0f0f0;
        color: #555;
    }

    .component-card h4 {
        color: #F58220;
        font-size: 1.05rem;
        margin: 0 0 0.25rem;
    }

    .component-card p.comp-subtitle {
        font-size: 0.85rem;
        color: #888;
        font-style: italic;
        margin: 0 0 0.75rem;
    }

    .component-card p {
        font-size: 0.92rem;
        color: #555;
        line-height: 1.7;
        margin: 0;
    }

    /* Assessment bar */
    .assessment-bar {
        display: flex;
        height: 44px;
        border-radius: 8px;
        overflow: hidden;
        margin: 0 0 2rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .assessment-bar div {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.82rem;
        font-weight: 700;
        color: white;
        letter-spacing: 0.03em;
    }

    .bar-internal { background: #F58220; width: 60%; }
    .bar-external { background: #c95f00; width: 40%; }

    /* Opportunities grid — 3 icon cards */
    .opportunities-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.25rem;
        margin: 1.5rem 0 2rem;
    }

    @media (max-width: 768px) {
        .opportunities-grid { grid-template-columns: 1fr; }
    }

    .opportunity-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        padding: 1.5rem 1.25rem;
        text-align: center;
    }

    .opportunity-card .opp-icon {
        font-size: 2rem;
        margin-bottom: 0.75rem;
    }

    .opportunity-card h4 {
        color: #F58220;
        font-size: 1rem;
        margin: 0 0 0.5rem;
    }

    .opportunity-card p {
        font-size: 0.9rem;
        color: #555;
        margin: 0;
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

    .further-list li a {
        display: block;
        font-size: 0.8rem;
        color: #F58220;
        margin-top: 0.2rem;
        word-break: break-all;
    }

    .further-list li a:hover {
        text-decoration: underline;
    }

    /* Spec/download button */
    .doc-link {
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
        margin: 0.5rem 0.5rem 1.5rem 0;
        transition: background 0.2s ease;
    }

    .doc-link:hover {
        background: #d4711a;
        color: white;
    }

    .doc-link--secondary {
        background: white;
        color: #F58220;
        border: 2px solid #F58220;
    }

    .doc-link--secondary:hover {
        background: #fff8f0;
        color: #c95f00;
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
        <li role="menuitem" class="current"><a href="#">Health &amp; Social Care</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Course Intent</h3>

                <div class="intro-box">
                    <p>Health and Social Care is part of everyone's life, looking at what makes us healthy and how to look after our wellbeing. In health and social care, we strive to ignite a passion for the health and social care sector through studying thought-provoking content surrounding human development, life events and the services provided by the health and social care sector.</p>
                    <p>Students learn about the different needs of individuals throughout their lives and the support available to them, such as the National Health Service (NHS). We study people of all ages and abilities, ranging from infants through to the elderly, identifying the changes they go through and what they need to develop holistically.</p>
                    <p>Students will get the opportunity to take part in a placement at the Park Nursery during Year 11 to allow those who would like to explore childcare the opportunity to experience life working in a nursery.</p>
                </div>

                <!-- Qualification details -->
                <div class="qual-bar">
                    <div class="qual-pill">
                        <span class="pill-label">Exam Board</span>
                        <span class="pill-value">Pearson</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Qualification</span>
                        <span class="pill-value">BTEC Level 1/Level 2 Tech Award in Health and Social Care</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Qualification Number</span>
                        <span class="pill-value">603/7047/6</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Total Hours</span>
                        <span class="pill-value">150 hours (120 GLH)</span>
                    </div>
                </div>

                <!-- Spec download -->
                <a href="/assets/curriculum/HSC/HSC Spec.pdf" class="doc-link" target="_blank" rel="noopener">
                    &#128196; Download Full Specification (Pearson BTEC)
                </a>

                <h3>Curriculum Implementation</h3>

                <div class="info-box">
                    <p>The Pearson BTEC Level 1/Level 2 Tech Award in Health and Social Care is for learners who want to acquire sector-specific applied knowledge through vocational contexts by studying human lifespan development, health and social care services and values, and health and wellbeing as part of their Key Stage 4 learning.</p>
                    <p><strong>The Tech Award gives learners the opportunity to develop applied knowledge in the following areas:</strong></p>
                    <ul>
                        <li>The life stages and key characteristics in the physical, intellectual, emotional and social (PIES) development classifications and the different factors that can affect an individual's growth and development</li>
                        <li>Different life events and how individuals can adapt or be supported through changes caused by life events</li>
                        <li>Health and social care conditions, how they can be managed by the individual and the different health and social care services that are available</li>
                        <li>The barriers and obstacles an individual may encounter and how these can be overcome</li>
                        <li>The skills, attributes and values required to give care and how these benefit the individual</li>
                        <li>How factors can affect an individual's current health and wellbeing</li>
                        <li>How physiological indicators and an individual's lifestyle choices determine physical health</li>
                        <li>The use of the person-centred approach</li>
                        <li>Recommendations and actions to improving health and wellbeing and the barriers or obstacles individuals may face when following recommendations and the support available to overcome</li>
                    </ul>
                </div>

                <h3>Breakdown of the Course</h3>

                <p>The qualification is made up of three components. All three must be completed and achieved to gain the full qualification.</p>

                <div class="component-grid">

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--internal">Internal</span>
                            <span class="comp-badge comp-badge--glh">36 GLH</span>
                        </div>
                        <h4>Component 1</h4>
                        <p class="comp-subtitle">Human Lifespan Development</p>
                        <p>Learners explore different aspects of growth and development and the factors that can affect this across the life stages. They also explore life events that can impact on individuals' physical, intellectual, emotional and social (PIES) development and how individuals cope with and are supported through changes.</p>
                    </div>

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--internal">Internal</span>
                            <span class="comp-badge comp-badge--glh">36 GLH</span>
                        </div>
                        <h4>Component 2</h4>
                        <p class="comp-subtitle">Health and Social Care Services and Values</p>
                        <p>Learners explore health and social care services and how they meet the needs of service users. They also study the skills, attributes and values required when giving care, and the barriers that can make it difficult to access services.</p>
                    </div>

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--external">External Exam</span>
                            <span class="comp-badge comp-badge--glh">48 GLH</span>
                        </div>
                        <h4>Component 3</h4>
                        <p class="comp-subtitle">Health and Wellbeing</p>
                        <p>The synoptic external component. Learners explore the factors that affect health and wellbeing, learn about physiological and lifestyle indicators, and use person-centred approaches to make recommendations to improve an individual's health and wellbeing. Assessed by a 2-hour written exam (60 marks).</p>
                    </div>

                </div>

                <!-- Assessment bar -->
                <div class="assessment-bar">
                    <div class="bar-internal">Internal Coursework &mdash; Components 1 &amp; 2 (60%)</div>
                    <div class="bar-external">External Exam &mdash; Component 3 (40%)</div>
                </div>

                <h3>Additional Opportunities</h3>

                <div class="opportunities-grid">

                    <div class="opportunity-card">
                        <div class="opp-icon">&#128218;</div>
                        <h4>Study &amp; Revision Groups</h4>
                        <p>Additional sessions available to support students in preparing for Pearson-set Assignments and the Component 3 external exam.</p>
                    </div>

                    <div class="opportunity-card">
                        <div class="opp-icon">&#127970;</div>
                        <h4>Park Nursery Placement</h4>
                        <p>Year 11 students have the opportunity to take part in a placement at the Park Nursery, gaining first-hand experience of working in a childcare setting.</p>
                    </div>

                    <div class="opportunity-card">
                        <div class="opp-icon">&#127891;</div>
                        <h4>Talks with Professionals</h4>
                        <p>Guest speakers from the health and social care sector visit to share their professional experiences and career pathways, bringing the subject to life.</p>
                    </div>

                </div>

                <h3>What's Next?</h3>

                <div class="info-box">
                    <p>This qualification prepares learners for a range of post-16 pathways in health and social care:</p>
                    <ul class="further-list">
                        <li>
                            Level 3 Certificate in Health &amp; Social Care
                            <a href="https://www.city-of-portsmouth-college.ac.uk/vocational/level-3-certificate-in-health-social-care-p259974/" target="_blank" rel="noopener">City of Portsmouth College &mdash; Course Code: P259974</a>
                        </li>
                        <li>
                            Health and Social Care &mdash; ALMP Level 3 Certificate (HF1-HESC3C/C01)
                            <a href="https://www.hsdc.ac.uk/courses/havant-campus/vocational/health-social-care-a-level-havant-campus/" target="_blank" rel="noopener">HSDC Havant Campus</a>
                        </li>
                    </ul>
                </div>

                <h3>Career Opportunities</h3>

                <p>This subject leads to a variety of career opportunities, including, but not limited to, over 350 different careers within the NHS.</p>

                <ul class="careers-grid">
                    <li>Nurse</li>
                    <li>Social Worker</li>
                    <li>Support Worker</li>
                    <li>Counsellor</li>
                    <li>Youth Worker</li>
                    <li>Ambulance Care Assistant</li>
                    <li>And many more!</li>
                </ul>

               <!-- <h3>Health &amp; Social Care at Park</h3>

                <div class="photo-gallery">
                    <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?w=800&q=80" alt="Healthcare professionals working together">
                    <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?w=800&q=80" alt="Care and support in a health setting">
                    <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&q=80" alt="Health and social care learning environment">
                </div> -->

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>