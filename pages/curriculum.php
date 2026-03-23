<?php
$pageTitle = 'Park Community School | Curriculum';
include('../partials/header.php');
?>


<style>
    :root {
        --primary-color: #2c5aa0;
        --secondary-color: #3d7c47;
        --accent-color: #ff6b35;
        --learning-color: #8e44ad;
        --success-color: #28a745;
        --warning-color: #ffc107;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #8e44ad, #9b59b6);
        --learning-gradient: linear-gradient(135deg, #2c5aa0, #3498db);
    }

    /* Layout */
    .main-content {
        padding: 4rem 0;
        background: var(--bg-light);
    }

    .curriculum-layout {
        display: block;
        max-width: 1100px;
        margin: 0 auto;
    }

/* Main Content */
    .main-content-area {
        background: white;
        border-radius: 15px;
        padding: 3rem;
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
    }

    /* Great Learners Image */
    .learners-image {
        text-align: center;
        margin-bottom: 3rem;
    }

    .learners-image img {
        max-width: 600px;
        width: 100%;
        height: auto;
        border-radius: 15px;
        box-shadow: var(--shadow);
    }

    /* Content Typography */
    .main-content-area h3 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        color: var(--learning-color);
        margin-bottom: 2rem;
        font-weight: 700;
    }

    .main-content-area p {
        font-size: 1.1rem;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }

    /* Enhanced List Styling */
    .curriculum-features {
        list-style: none;
        padding-left: 0;
        margin: 2rem 0;
    }

    .curriculum-features > li {
        position: relative;
        padding: 1rem 0 1rem 3rem;
        margin-bottom: 1rem;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .curriculum-features > li:hover {
        background: var(--bg-light);
        border-radius: 10px;
        padding-left: 3.5rem;
    }

    .curriculum-features > li:before {
        content: '✓';
        position: absolute;
        left: 0.5rem;
        top: 1rem;
        width: 30px;
        height: 30px;
        background: var(--learning-gradient);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.9rem;
    }

    /* Button Styling */
    .cta-button {
        display: inline-block;
        background: var(--learning-gradient);
        color: white;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        margin: 2rem 0;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .cta-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(44, 90, 160, 0.3);
        text-decoration: none;
        color: white;
    }

    /* Year Groups Section */
    .year-groups-section {
        margin: 3rem 0;
    }

    .year-groups-title {
        font-size: 1.8rem;
        color: #a3cd40;
        margin-bottom: 2rem;
        font-weight: 700;
    }

    /* ── KS Block wrapper ── */
    .ks-block {
        margin-bottom: 2.5rem;
        opacity: 0;
        transform: translateY(18px);
        animation: fadeInUp 0.5s ease forwards;
    }
    .ks-block:nth-child(2) { animation-delay: 0.05s; }
    .ks-block:nth-child(3) { animation-delay: 0.15s; }
    .ks-block:nth-child(4) { animation-delay: 0.25s; }
    .ks-block:nth-child(5) { animation-delay: 0.35s; }

    @keyframes fadeInUp {
        to { opacity: 1; transform: translateY(0); }
    }

    /* ── KS block header ── */
    .ks-block-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
        padding-bottom: 10px;
        border-bottom: 2px solid #f0f0f0;
    }
    .ks-block-header h5 {
        font-size: 1.15rem;
        font-weight: 700;
        color: #a3cd40;
        margin: 0;
    }

    .ks-tag {
        background: #a3cd40;
        color: #050505;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 4px 11px;
        border-radius: 100px;
        white-space: nowrap;
        flex-shrink: 0;
    }
    .ks-tag--green  { background: #a3cd40; }
    .ks-tag--orange { background: #a3cd40; }

    /* ── Compulsory bar ── */
    .compulsory-bar {
        background: #a3cd4014;
        border: 1px solid #a3cd409b;
        border-left: 4px solid #a3cd40;
        border-radius: 0 10px 10px 0;
        padding: 13px 18px;
        margin-bottom: 16px;
        display: flex;
        flex-wrap: wrap;
        align-items: baseline;
        gap: 5px 8px;
    }
    .compulsory-label {
        font-size: 11px;
        font-weight: 700;
        color: #a3cd40;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        white-space: nowrap;
    }
    .compulsory-subjects {
        font-size: 13px;
        color: #334155;
        line-height: 1.6;
    }

    .compulsory-subjects a {
        color: #334155;
        text-decoration: none;
        font-weight: 600;
    }
    .compulsory-subjects a:hover {
        color: #a3cd40;
        text-decoration: underline;
    }

    /* ── Options heading ── */
    .options-heading {
        font-size: 11px !important;
        font-weight: 700 !important;
        color: #94a3b8 !important;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 12px !important;
    }

    /* ── Subject list grid ── */
    .subject-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
        gap: 8px;
    }
    .subject-list--full {
        grid-template-columns: 1fr;
    }

    /* ── Subject card — "The Arts" style ── */
    .subject-item {
        background: var(--bg-light);
        border: 1px solid #e2e8f0;
        border-left: 4px solid #a3cd40;
        border-radius: 0 8px 8px 0;
        transition: all 0.18s ease;
        overflow: hidden;
        position: relative;
    }
    .subject-item::before {
        content: '';
        position: absolute;
        left: 0; top: 0; bottom: 0;
        width: 0;
        background: #a3cd40;
        opacity: 0.05;
        transition: width 0.2s ease;
    }
    .subject-item:hover::before { width: 100%; }
    .subject-item:hover {
        transform: translateY(-2px) translateX(2px);
        box-shadow: 0 4px 14px rgba(0,0,0,0.09);
        border-left-width: 6px;
    }
    .subject-item a {
        display: block;
        padding: 11px 14px;
        font-size: 13.5px;
        font-weight: 600;
        color: #334155;
        text-decoration: none !important;
        position: relative;
    }
    .subject-item a:hover { text-decoration: none !important; color: #7aad10; }

    /* KS4 accent */
    .subject-item--ks4  { border-left-color: #a3cd40; }
    .subject-item--ks4::before { background: #a3cd40; }
    .subject-item--ks4 a:hover { color: #7aad10; }

    /* Enrichment accent */
    .subject-item--enrich { border-left-color: #a3cd40; }
    .subject-item--enrich::before { background: #a3cd40; }
    .subject-item--enrich a:hover { color: #7aad10; }

    /* Wide item (spans full row) */
    .subject-item--wide { grid-column: 1 / -1; }

    /* Tagged item (Year 7 only pill) */
    .subject-item--tagged a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
    }
    .subject-tag {
        font-size: 10px;
        font-weight: 700;
        color: #000000;
        background: #a3cd4077;
        padding: 2px 8px;
        border-radius: 100px;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* Download Section */
    .download-section {
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        margin: 2rem 0;
        border-left: 4px solid var(--warning-color);
    }

    .download-section h4 {
        color: var(--text-dark);
        margin-bottom: 1rem;
    }

    .download-section p {
        color: var(--text-dark);
        margin-bottom: 1.5rem;
    }

    .download-button {
        background: var(--warning-color);
        color: var(--text-dark);
        padding: 0.8rem 1.5rem;
        border-radius: 25px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }

    .download-button:hover {
        background: #e0a800;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        text-decoration: none;
        color: var(--text-dark);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .curriculum-layout {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .sidebar {
            position: static;
            order: 2;
        }

        .main-content-area {
            padding: 2rem;
        }

        .subject-list {
            grid-template-columns: 1fr 1fr;
        }
        .subject-item--wide { grid-column: 1 / -1; }
    }

    @media (max-width: 480px) {
        .subject-list { grid-template-columns: 1fr; }
    }

    /* Focus styles */
    a:focus, button:focus {
        outline: 3px solid var(--accent-color);
        outline-offset: 2px;
    }

    /* Animation for content loading */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s ease forwards;
    }
</style>

<!-- MAIN CONTENT -->
<section class="main-content">
    <div class="grid-container">
        <div class="curriculum-layout">
<!-- Main Content Area -->
            <div class="main-content-area fade-in">
                <div class="learners-image">
                    <img src="../assets/curriculum/great-learners-2026.png" alt="Great Learners at Park Community School">
                </div>

                <h3>Our Curriculum</h3>
                <p>At Park we provide a broad curriculum which allows students to find what they love to do. Our curriculum is designed to promote attainment, build resilience and increase autonomy. We are known for our inclusive approach and others describe us as 'much more than just a school'.</p>

                <ul class="curriculum-features">
                    <li>A broad and traditional curriculum which leads to a wide range of GCSEs and other qualifications</li>
                    <li>Our 'Much More Than Just a School' curriculum which provides an exciting range of memorable experiences for our students</li>
                    <li>Literacy underpins education at Park. Children read each day; those who struggle with their reading are well supported</li>
                    <li>Cultural capital is important for GCSE success and success in life. We build cultural capital throughout the curriculum</li>
                    <li>Personal development is fundamental to what we do in preparing students for life after school and the world of work. Our widely recognised careers programme gives children in every year group opportunities to consider their future and meet people from outside of school</li>
                    <li>We encourage students to be ambitious through our links with colleges and universities</li>
                    <li>SMSC at Park promotes British Values through a comprehensive programme of assemblies, personal development and Challenge Days</li>
                    <li>Engaging Park students in our story and developing a sense of pride in this community</li>
                </ul>

                <p>We aim to help students find what they love and therefore our curriculum focusses on developing depth of understanding, sequencing of learning to allow revisiting of concepts and application of knowledge at regular opportunities.</p>
                
                <p>All students study a broad and balanced curriculum. At Key Stage 3 (years 7,8 and 9) this includes our Much More Than Just A School (MMTJAS) experiences including Enterprise at our print unit, Media making in our Media Suite, Construction at our Construction Skills Centre, Catering in the school restaurant and work at our small holding. At Key Stage 4, students study between 9-11 subjects for which they take formal qualifications.</p>
                
                <p>Our curriculum is designed to fit with our school context. It begins in year 7 with a focus on Identity across all subjects wherein core knowledge and concepts are introduced, developed and explored and linked to students' own experiences and local context initially, and ultimately one's role as an individual in society.</p>
                
                <p>When planning curriculum, subject leaders use the National Curriculum, GCSE syllabi and subject specific research to develop curriculums that match our curriculum vision.</p>

                <!-- Year Groups Section -->
                <div class="year-groups-section">
                    <h4 class="year-groups-title">Which subjects do students study?</h4>

                    <!-- KS3 -->
                    <div class="ks-block ks3-block">
                        <div class="ks-block-header">
                            <span class="ks-tag">KS3</span>
                            <h5>At Key Stage 3 students study</h5>
                        </div>
                        <ul class="subject-list">
                            <li class="subject-item"><a href="/art.php">Art</a></li>
                            <li class="subject-item"><a href="/english.php">English</a></li>
                            <li class="subject-item"><a href="/catering.php">Catering</a></li>
                            <li class="subject-item"><a href="/computer-science.php">Computer Science</a></li>
                            <li class="subject-item"><a href="/geography.php">Geography</a></li>
                            <li class="subject-item"><a href="/history.php">History</a></li>
                            <li class="subject-item"><a href="/horticulture.php">Horticulture</a></li>
                            <li class="subject-item"><a href="/mathematics.php">Mathematics</a></li>
                            <li class="subject-item"><a href="/dance.php">Dance</a></li>
                            <li class="subject-item"><a href="/drama.php">Drama</a></li>
                            <li class="subject-item"><a href="/music.php">Music</a></li>
                            <li class="subject-item"><a href="/pe.php">Physical Education</a></li>
                            <li class="subject-item"><a href="/religious-education.php">Religious Education</a></li>
                            <li class="subject-item"><a href="/science.php">Science</a></li>
                            <li class="subject-item"><a href="/modern-foreign-languages.php">Spanish</a></li>
                            <li class="subject-item subject-item--tagged"><a href="/star.php">STAR <span class="subject-tag">Year 7 only</span></a></li>
                            <li class="subject-item"><a href="/technology.php">Technology</a></li>
                        </ul>
                    </div>

                    <!-- KS4 -->
                    <div class="ks-block ks4-block">
                        <div class="ks-block-header">
                            <span class="ks-tag ks-tag--green">KS4</span>
                            <h5>At Key Stage 4 students study</h5>
                        </div>

                        <div class="compulsory-bar">
                            <span class="compulsory-label">All students:</span>
                            <span class="compulsory-subjects">
                                <a href="/english.php">English Language</a>,
                                <a href="/english.php">English Literature</a>,
                                <a href="/mathematics.php">Mathematics</a>,
                                <a href="/science.php">Science</a>,
                                <a href="/religious-education.php">Religious Education</a>,
                                <a href="/pe.php">Physical Education</a>,
                                <a href="/smsc.php">SMSC</a>
                            </span>
                        </div>

                        <p class="options-heading">4 options from the following</p>

                        <ul class="subject-list">
                            <li class="subject-item subject-item--ks4"><a href="/art.php">Art and Design: 3D</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/art.php">Art and Design: Graphics</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/computer-science.php">Computer Science</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/dance.php">Dance</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/drama.php">Drama</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/geography.php">Geography</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/hair-beauty.php">Hair and Beauty</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/health-social-care.php">Health and Social Care</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/history.php">History</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/catering.php">Hospitality and Catering</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/photography.php">Photography</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/psychology.php">Psychology</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/music.php">Music</a></li>
                           <!-- <li class="subject-item subject-item--ks4"><a href="/performing-arts.php">Musical Theatre</a></li>-->
                            <li class="subject-item subject-item--ks4"><a href="/modern-foreign-languages.php">Spanish</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/art.php">Textiles</a></li>
                            <li class="subject-item subject-item--ks4"><a href="/travel-tourism.php">Travel and Tourism</a></li>
                        </ul>
                    </div>

                    <!-- SMSC -->
                    <div class="ks-block smsc-block">
                        <div class="ks-block-header">
                            <span class="ks-tag">SMSC</span>
                            <h5>Personal Development</h5>
                        </div>
                        <ul class="subject-list subject-list--full">
                            <li class="subject-item"><a href="/smsc.php" target="_blank">SMSC</a></li>
                        </ul>
                    </div>

                    <!-- Enrichment -->
                    <div class="ks-block enrich-block">
                        <div class="ks-block-header">
                            <span class="ks-tag ks-tag--orange">Enrichment</span>
                            <h5>Beyond the Classroom</h5>
                        </div>
                        <ul class="subject-list subject-list--full">
                            <li class="subject-item subject-item--enrich"><a href="fwyl-enrichment.php">Finding What You Love — Enrichment Opportunities</a></li>
                            <li class="subject-item subject-item--enrich"><a href="fwyl-mmtjas.php">Much More Than Just a School Carousel</a></li>
                            <li class="subject-item subject-item--enrich"><a href="fwyl-afterschool-clubs.php">Finding What You Love — After School Clubs</a></li>
                        </ul>
                    </div>

                </div>

                <!-- Download Section -->
                <div class="download-section">
                    <h4>GCSE Options Information</h4>
                    <p>Download our comprehensive guide to GCSE course options for 2025-2027</p>
                    <a class="download-button" href="/assets/curriculum/Options Booklet 2025 PV. V3.pdf" target="_blank">
                        <i class="fas fa-download" aria-hidden="true"></i>
                        GCSE Courses Booklet (2025-2027)
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>