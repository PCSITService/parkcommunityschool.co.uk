<?php
$pageTitle = 'Park Community School | Careers and Guidance';
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
    
    /* =============================================
       ROADMAP + GATSBY BENCHMARKS
       ============================================= */
    .roadmap-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
        display: flex;
        gap: 2rem;
        align-items: center;
    }
    
    .roadmap-image {
        flex: 1 1 60%;
        min-width: 0;
    }
    
    .roadmap-image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    .roadmap-action {
        flex: 0 0 auto;
    }
    
    @media (max-width: 768px) {
        .roadmap-box {
            flex-direction: column;
        }
    }
    
    /* =============================================
       UNIFROG SECTION - Info Box + Image
       ============================================= */
    .unifrog-section {
        display: flex;
        gap: 2rem;
        align-items: stretch;
        margin: 1.5rem 0 2rem;
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
    }
    
    .unifrog-info {
        flex: 1 1 55%;
        min-width: 0;
    }
    
    .unifrog-info h4 {
        color: #F58220;
        margin: 0 0 1rem;
        font-size: 1.25rem;
    }
    
    .unifrog-info p {
        font-size: 1rem;
        line-height: 1.8;
        color: #333;
    }
    
    .unifrog-info img {
        max-width: 220px;
        height: auto;
        margin-top: 1rem;
    }
    
    .unifrog-image {
        flex: 1 1 40%;
        min-width: 0;
    }
    
    .unifrog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }
    
    @media (max-width: 768px) {
        .unifrog-section {
            flex-direction: column;
        }
        
        .unifrog-info,
        .unifrog-image {
            flex: 1 1 100%;
        }
    }
    
    .link-button {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: #F58220;
        color: #fff;
        padding: 0.85rem 2rem;
        border-radius: 8px;
        font-size: 1.05rem;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.3s ease, transform 0.2s ease;
        box-shadow: 0 2px 6px rgba(245, 130, 32, 0.3);
        flex-shrink: 0;
    }
    
    .link-button:hover {
        background: #d96f15;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(245, 130, 32, 0.4);
    }
    
    .link-button svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
    }
    
    /* =============================================
       LOCAL COLLEGES - Grid of Logo Cards
       ============================================= */
    .colleges-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
    }
    
    .colleges-box h4 {
        color: #F58220;
        margin: 0 0 1.25rem;
        font-size: 1.25rem;
    }
    
    .colleges-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.25rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    /*  ──────────────────────────────────────────────
        EDITABLE HOVER COLOURS FOR COLLEGE BUTTONS
        ────────────────────────────────────────────── */
    :root {
        --college-hover-1: #E63946;
        --college-hover-2: #457B9D;
        --college-hover-3: #2A9D8F;
        --college-hover-4: #E9C46A;
        --college-hover-5: #F4A261;
        --college-hover-6: #264653;
    }
    
    .college-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #f5f7f8;
        border-radius: 12px;
        padding: 1.25rem;
        text-decoration: none;
        color: #333;
        transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: pointer;
        width: 180px;
        flex-shrink: 0;
    }
    
    .college-card-image {
        width: 100%;
        aspect-ratio: 1 / 1;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
    }
    
    .college-card-image img {
        max-width: 85%;
        max-height: 85%;
        height: auto;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    
    .college-card-label {
        font-weight: 600;
        font-size: 0.95rem;
        text-align: center;
        line-height: 1.3;
        transition: color 0.3s ease;
    }
    
    .college-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    
    .college-card:hover .college-card-image img {
        transform: scale(1.05);
    }
    
    .college-card:nth-child(6n+1):hover { background: var(--college-hover-1); }
    .college-card:nth-child(6n+1):hover .college-card-label { color: #fff; }
    
    .college-card:nth-child(6n+2):hover { background: var(--college-hover-2); }
    .college-card:nth-child(6n+2):hover .college-card-label { color: #fff; }
    
    .college-card:nth-child(6n+3):hover { background: var(--college-hover-3); }
    .college-card:nth-child(6n+3):hover .college-card-label { color: #fff; }
    
    .college-card:nth-child(6n+4):hover { background: var(--college-hover-4); }
    .college-card:nth-child(6n+4):hover .college-card-label { color: #333; }
    
    .college-card:nth-child(6n+5):hover { background: var(--college-hover-5); }
    .college-card:nth-child(6n+5):hover .college-card-label { color: #fff; }
    
    .college-card:nth-child(6n+6):hover { background: var(--college-hover-6); }
    .college-card:nth-child(6n+6):hover .college-card-label { color: #fff; }
    
    @media (max-width: 480px) {
        .colleges-grid {
            flex-direction: column;
            align-items: center;
        }
    }
    
    /* =============================================
       HAMPSHIRE OPEN EVENTS - PDF Button
       ============================================= */
    .open-events-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    
    .open-events-box h4 {
        color: #F58220;
        margin: 0;
        font-size: 1.25rem;
    }
    
    .open-events-box p {
        margin: 0.5rem 0 0;
        color: #555;
        line-height: 1.6;
    }
    
    .open-events-info {
        flex: 1 1 auto;
    }
    
    /* =============================================
       RECENT CAREERS EVENTS - Dynamic Colour Grid
       ============================================= */
    .events-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
    }
    
    .events-box h4 {
        color: #F58220;
        margin: 0 0 1.25rem;
        font-size: 1.25rem;
    }
    
    .events-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.25rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    /*  ──────────────────────────────────────────────
        EDITABLE HOVER COLOURS FOR EVENT CARDS
        ────────────────────────────────────────────── */
    :root {
        --event-hover-1: #E63946;
        --event-hover-2: #457B9D;
        --event-hover-3: #2A9D8F;
        --event-hover-4: #6A4C93;
        --event-hover-5: #1982C4;
        --event-hover-6: #FF595E;
        --event-hover-7: #8AC926;
        --event-hover-8: #F4A261;
    }
    
    .event-card {
        display: flex;
        flex-direction: column;
        background: #f5f7f8;
        border-radius: 12px;
        overflow: hidden;
        text-decoration: none;
        color: #333;
        transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        cursor: pointer;
        width: 180px;
        flex-shrink: 0;
    }
    
    .event-card-image {
        width: 100%;
        aspect-ratio: 4 / 3;
        overflow: hidden;
        background: #eee;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .event-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }
    
    .event-card-title {
        padding: 0.75rem 1rem;
        font-weight: 600;
        font-size: 0.95rem;
        line-height: 1.4;
        text-align: center;
        transition: color 0.3s ease;
    }
    
    .event-card:nth-child(8n+1):hover { border: 2px solid var(--event-hover-1); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+1):hover .event-card-title { color: var(--event-hover-1); }

    .event-card:nth-child(8n+2):hover { border: 2px solid var(--event-hover-2); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+2):hover .event-card-title { color: var(--event-hover-2); }

    .event-card:nth-child(8n+3):hover { border: 2px solid var(--event-hover-3); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+3):hover .event-card-title { color: var(--event-hover-3); }

    .event-card:nth-child(8n+4):hover { border: 2px solid var(--event-hover-4); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+4):hover .event-card-title { color: var(--event-hover-4); }

    .event-card:nth-child(8n+5):hover { border: 2px solid var(--event-hover-5); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+5):hover .event-card-title { color: var(--event-hover-5); }

    .event-card:nth-child(8n+6):hover { border: 2px solid var(--event-hover-6); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+6):hover .event-card-title { color: var(--event-hover-6); }

    .event-card:nth-child(8n+7):hover { border: 2px solid var(--event-hover-7); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+7):hover .event-card-title { color: var(--event-hover-7); }

    .event-card:nth-child(8n+8):hover { border: 2px solid var(--event-hover-8); box-shadow: 0 8px 20px rgba(0,0,0,0.12); }
    .event-card:nth-child(8n+8):hover .event-card-title { color: var(--event-hover-8); }
    
    .event-card:hover {
        transform: translateY(-4px);
    }
    
    .event-card:hover .event-card-image img {
        transform: scale(1.05);
    }
    
    @media (max-width: 480px) {
        .events-grid {
            flex-direction: column;
            align-items: center;
        }
    }
    
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Careers and Guidance</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Careers and Guidance</h3>
                
                <!-- ==========================================
                     1. CEIAG TEXT (website words - not a link)
                     TODO: Paste the CEIAG text from L.Conner's
                     attached document here.
                     ========================================== -->
                <div class="intro-box">
                    <p><b>Careers Education, Information, Advice and Guidance – CEIAG</b></p>
                    
                    <p><b>Intent</b></p>
                    <ul style="padding-left: 15px;">
                        <li>To prepare students for life after school and encourage them to increase their aspirations through meaningful encounters and tailored support.</li>
                        <li>To utilise local colleges, businesses, staff and family knowledge to support young people in making informed decisions about their futures. Keeping all stakeholder informed throughout.</li>
                    </ul>
                    
                    <p><b>Implementation</b></p>
                    <ul style="padding-left: 15px;">
                        <li><strong>SMSC:</strong> This covers a wide range of content including careers. These sessions use Unifrog and allow students to build knowledge of who they are, what they are interested in and what future career they might be interested in.</li>
                        <li><strong>Careers Advisor (Hampshire Futures):</strong> A specialist careers advisor is in school twice a week to offer students and parents independent and impartial advice for their careers and life after they leave school.</li>
                        <li><strong>Colleges:</strong> Encounters with colleges for assemblies and workshops where they will offer advice and information about college, and whether it is right for you.</li>
                        <li><strong>Apprenticeship Providers:</strong> PETA, BAE and NHS are some names of companies' students will encounter participate in talks and workshops all to inform students of the alternative post-16 options and supporting the application process.</li>
                        <li><strong>Universities:</strong> Taster Days and workshops are offered to students across all year groups. These include campus tours, budgeting, assemblies and 1:1 meetings.</li>
                        <li><strong>Employers and Employees:</strong> Through our close connections with local businesses and support from EBP we have several businesses that offer a variety of meaningful encounters through work experience, assemblies and workshops.</li>
                        <li><strong>Curriculum links:</strong> Teachers are informed on how their subject can be utilised in a student's chosen career path and are able to provide support – or direct them to a more suitable advisor.</li>
                        <li><strong>Park Development Days:</strong> Whole days off curriculum that include activities that will support students in understanding the world of work and their employability skills.</li>
                        <li><strong>Carousel:</strong> KS3 will participate in a 6-week programme where they will understand how some businesses work and they will develop a project with them. These include visiting the schools farm, the school kitchen and the schools own printing shop.</li>
                    </ul>
                    
                    <p><b>Impact</b></p>
                    <ul style="padding-left: 15px;">
                        <li>Reduction in those students who are not in education, employment or training (NEET) when leaving school.</li>
                        <li>Students will be informed and ready to attend their post-16 options and excited about the future.</li>
                        <li>Students applying to and being accepted onto a wide range of courses from A Levels to apprenticeships and T-Levels.</li>
                        <li>Increased aspirations and enthusiasm when discussing their life after school.</li>
                    </ul>
                    
                    <p><b>For more information please contact:</b><br>
                    SLT Careers Lead: Miss L. Conner <a href="mailto:l.conner@pcs.hants.sch.uk">l.conner@pcs.hants.sch.uk</a><br>
                    Careers Administrator: Mrs C. Swann <a href="mailto:c.swann@pcs.hants.sch.uk">c.swann@pcs.hants.sch.uk</a></p>
                </div>

                <!-- ==========================================
                     2. CAREERS ROADMAP + GATSBY BENCHMARKS
                     ========================================== -->
                <div class="roadmap-box">
                    <div class="roadmap-image">
                        <!-- EDIT: Save the roadmap as a PNG/JPG and update the filename below -->
                        <img src="/assets/careers-guidance/careers-roadmap.png" alt="Careers Journey Roadmap">
                    </div>
                    <div class="roadmap-action">
                        <!-- EDIT: Update href to your Gatsby Benchmarks document -->
                        <a href="/assets/careers-guidance/Gatsby Benchmarks.pdf" target="_blank" rel="noopener" class="link-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 2l5 5h-5V4zm-3 9h4v1.5h-4V13zm0 3h4v1.5h-4V16zm-2-3h1v1.5H8V13zm0 3h1v1.5H8V16z"/></svg>
                            View Gatsby Benchmarks
                        </a>
                    </div>
                </div>

                <!-- ==========================================
                     3. UNIFROG SECTION
                     TODO: Get the Unifrog images and info text
                     from L.Conner's attachments.
                     ========================================== -->
                <h3>Unifrog</h3>
                
                <div class="unifrog-section">
                    <div class="unifrog-info">
                        <!-- REPLACE WITH UNIFROG INFO FROM ATTACHMENT -->
                        <h4>Unifrog</h4>
                        <p><!-- PASTE UNIFROG INFORMATION HERE --></p>
                        <!-- EDIT: Replace src with Unifrog logo from attachments -->
                        <img src="\assets\careers-guidance\unifrog-logo.png" alt="Unifrog Logo">
                    </div>
                    <div class="unifrog-image">
                        <!-- EDIT: Replace src with Unifrog image from attachments -->
                        <img src="\assets\careers-guidanceunifrog-screenshot.jpg" alt="Unifrog Platform">
                    </div>
                </div>

                <!-- ==========================================
                     5. LOCAL COLLEGES
                     TODO: Get the college logo images from
                     L.Conner's attachments and save to:
                     /images/careers/colleges/
                     ========================================== -->
                <h3>Local Colleges</h3>
                
                <div class="colleges-box">
                    <h4>Explore Local Colleges &amp; Providers</h4>
                    
                    <div class="colleges-grid">
                        
                        <!-- EDIT: Update logos and hrefs from the attachment -->
                        
                        <a href="https://www.hsdc.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/hsdc-logo.png" alt="HSDC">
                            </div>
                            <span class="college-card-label">HSDC</span>
                        </a>
                        
                        <a href="https://www.fareham.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/fareham-college-logo.png" alt="Fareham College">
                            </div>
                            <span class="college-card-label">Fareham College</span>
                        </a>
                        
                        <a href="https://www.highbury.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/highbury-logo.png" alt="Highbury College">
                            </div>
                            <span class="college-card-label">Highbury College</span>
                        </a>
                        
                        <a href="https://www.sparsholt.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/sparsholt-logo.png" alt="Sparsholt College">
                            </div>
                            <span class="college-card-label">Sparsholt College</span>
                        </a>
                        
                        <a href="https://www.brock.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/brock-logo.png" alt="Brockenhurst College">
                            </div>
                            <span class="college-card-label">Brockenhurst College</span>
                        </a>
                        
                        <a href="https://www.portsmouth-college.ac.uk/" target="_blank" rel="noopener" class="college-card">
                            <div class="college-card-image">
                                <img src="/images/careers/colleges/portsmouth-logo.png" alt="Portsmouth College">
                            </div>
                            <span class="college-card-label">Portsmouth College</span>
                        </a>
                        
                    </div>
                </div>

                <!-- ==========================================
                     5b. HAMPSHIRE COLLEGE OPEN EVENTS 25-26
                     TODO: Get the PDF from L.Conner's
                     attachments and save to:
                     /documents/careers/hampshire-open-events-25-26.pdf
                     ========================================== -->
                <h3>Hampshire College Open Events</h3>
                
                <div class="open-events-box">
                    <div class="open-events-info">
                        <h4>Hampshire College Open Events 25-26</h4>
                    </div>
                    <!-- EDIT: Update href to the attached PDF -->
                    <a href="/assets/careers-guidance/Hampshire college open events.pdf" target="_blank" rel="noopener" class="link-button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zm-1 2l5 5h-5V4zm-3 9h4v1.5h-4V13zm0 3h4v1.5h-4V16zm-2-3h1v1.5H8V13zm0 3h1v1.5H8V16z"/></svg>
                        View Open Events PDF
                    </a>
                </div>

                <!-- ==========================================
                     7. RECENT CAREERS EVENTS
                     TODO: Get the document/file for each event
                     from L.Conner's attachments and save to:
                     /documents/careers/events/
                     ========================================== -->
                <h3>Recent Careers Events</h3>
                
                <div class="events-box">
                    <h4>See What We've Been Up To</h4>
                    
                    <div class="events-grid">
                        
                        <!-- EDIT: Update href for each card to the attached documents -->
                        
                        <a href="/assets/careers-guidance/BBC Careers Roadshow.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/bbc-careers-roadshow.jpg" alt="BBC Careers Roadshow">
                            </div>
                            <div class="event-card-title">BBC Careers Roadshow</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/Year 10 Interview Ready Day.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/year10-interview-ready.jpg" alt="Year 10 Interview Ready">
                            </div>
                            <div class="event-card-title">Year 10 Interview Ready</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/Year 9 Super Careers.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/year9-super-careers.jpg" alt="Year 9 Super Careers">
                            </div>
                            <div class="event-card-title">Year 9 Super Careers</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/Year 8 Air Ambulance.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/year8-air-ambulance.jpg" alt="Year 8 Air Ambulance">
                            </div>
                            <div class="event-card-title">Year 8 Air Ambulance</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/National Apprenticeship 2026.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/national-apprenticeship-week.jpg" alt="National Apprenticeship Week 2026">
                            </div>
                            <div class="event-card-title">National Apprenticeship Week 2026</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/Speaker for Schools.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/speakers-for-schools.jpg" alt="Speakers for Schools">
                            </div>
                            <div class="event-card-title">Speakers for Schools</div>
                        </a>
                        
                        <a href="/assets/careers-guidance/Where are they now.pdf" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/where-are-they-now.jpg" alt="Where Are They Now?">
                            </div>
                            <div class="event-card-title">Where Are They Now?</div>
                        </a>
                        
                        <a href="https://forms.gle/pY2i7AmPj3bG41i88" class="event-card" target="_blank" rel="noopener">
                            <div class="event-card-image">
                                <img src="/images/careers/events/alumni.jpg" alt="Alumni">
                            </div>
                            <div class="event-card-title">Alumni</div>
                        </a>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>