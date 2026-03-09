<?php
$pageTitle = 'Park Community School | Travel & Tourism';
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

    /* Intro box — orange left border card */
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

    /* White raised info box — same pattern as skills-box on STAR page */
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
        margin: 0;
        padding-left: 1.25rem;
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

    .comp-badge--coursework {
        background: #fff0e0;
        color: #c95f00;
    }

    .comp-badge--exam {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .comp-badge--pct {
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

    /* Assessment split bar */
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

    .bar-coursework { background: #F58220; width: 60%; }
    .bar-exam       { background: #c95f00; width: 40%; }

    /* Careers pill grid — same pattern as subjects-list on STAR page */
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

    /* Further studies left-border list */
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

    /* Photo gallery strip — same pattern as rich-challenges-gallery on STAR page */
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
        <li role="menuitem" class="current"><a href="#">Travel &amp; Tourism</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Why study BTEC Travel and Tourism?</h3>

                <div class="intro-box">
                    <p>Travel and Tourism helps you understand world around you.&nbsp;The course is hands on, relevant,&nbsp;and engaging.&#8203; The travel industry is one of the largest sectors around the world,&nbsp;with a range of career opportunities which could take you from Sydney to New York.&#8203;</p>
                    <p>The course is a mixture of practical and theory based learning, allowing students to thrive throughout.</p>
                    <p>The course will give students the chance to get to grips with why people visit certain places on holiday compared to others. Whilst also understanding the social, economic and physical factors that contribute to the tourism industry.</p>
                    <p>The course will also give students the chance to visit a variety of organisations and destinations and gain first hand experience of the travel industry.</p>
                </div>

                <!-- Qualification details -->
                <div class="qual-bar">
                    <div class="qual-pill">
                        <span class="pill-label">Exam Board</span>
                        <span class="pill-value">Pearsons</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Qualification</span>
                        <span class="pill-value">BTEC Level 1 and 2 Travel and Tourism</span>
                    </div>
                    <div class="qual-pill">
                        <span class="pill-label">Full Title</span>
                        <span class="pill-value">Pearsons BTEC Tech Award Level 1 &amp; 2</span>
                    </div>
                </div>

                <h3>Breakdown of the Course</h3>

                <p>Pearsons BTEC Tech Award Level 1 &amp; 2 is split into three parts. Component 1, Organisations and Destinations (Coursework worth 30% of the overall mark). Component 2, Customers Needs (Coursework worth 30% of the overall mark). Component 3, Influences on Global Travel and Tourism (Exam worth 40% of overall mark).</p>

                <div class="component-grid">

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--coursework">Coursework</span>
                            <span class="comp-badge comp-badge--pct">30%</span>
                        </div>
                        <h4>Component 1</h4>
                        <p class="comp-subtitle">Organisations and Destinations</p>
                        <p>In this component students will look at the variety of organisations within the travel industry and how they meet the customers needs. They will also focus on a UK destination and explore the variety of attractions on offer at that destination.</p>
                    </div>

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--coursework">Coursework</span>
                            <span class="comp-badge comp-badge--pct">30%</span>
                        </div>
                        <h4>Component 2</h4>
                        <p class="comp-subtitle">Customers Needs</p>
                        <p>In this component students will look at what gives companies the edge of each other and how there services and products need to adapt to suit the customers needs.</p>
                    </div>

                    <div class="component-card">
                        <div class="comp-meta">
                            <span class="comp-badge comp-badge--exam">Exam</span>
                            <span class="comp-badge comp-badge--pct">40%</span>
                        </div>
                        <h4>Component 3</h4>
                        <p class="comp-subtitle">Influences on Global Travel and Tourism</p>
                        <p>In this component students will look at how different types of factors can contribute to why people may or may not visit certain destinations. They will also look at the effect tourism can have on a destination.</p>
                    </div>

                </div>

                <!-- Assessment split bar -->
                <div class="assessment-bar">
                    <div class="bar-coursework">Coursework &mdash; 60%</div>
                    <div class="bar-exam">Exam &mdash; 40%</div>
                </div>

                <h3>Career Opportunities</h3>

                <ul class="careers-grid">
                    <li>Travel Agent</li>
                    <li>Resort Rep</li>
                    <li>Cruise Ship Crew</li>
                    <li>Tourism Officer</li>
                    <li>Hotel Manager</li>
                    <li>Cabin Crew</li>
                    <li>Interpreter</li>
                    <li>Tour Guide</li>
                    <li>Event Manager</li>
                    <li>Travel Consultant</li>
                </ul>

                <h3>Further Studies</h3>

                <div class="info-box">
                    <ul class="further-list">
                        <li>BTEC Level 3 Travel and Tourism</li>
                        <li>City &amp; Guilds Level 2 Diploma Air Cabin Crew Training</li>
                        <li>NCFE Level 2 Award for Resort Representatives</li>
                        <li>Geography A Level</li>
                        <li>BSC Degree in Tourism Management</li>
                    </ul>
                </div>


                <!-- PHOTO SLIDESHOW BELLOW -->
                <!--<h3>Travel &amp; Tourism at Park</h3>

                <div class="photo-gallery">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800&q=80" alt="Aeroplane wing at sunset">
                    <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=800&q=80" alt="World map and travel planning">
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800&q=80" alt="Scenic holiday destination">
                </div> -->

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>