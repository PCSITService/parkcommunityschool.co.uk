<?php
$pageTitle = 'Park Community School | Music';
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
        margin-bottom: 1rem;
        line-height: 1.7;
    }
    
    .section-subtitle {
        color: #d96f1a;
        font-weight: 600;
    }
    
    .impact-images {
        margin: 2rem 0;
    }
    
    .impact-images img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }
    
    .handbook-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        margin-top: 2rem;
        text-align: center;
    }
    
    .handbook-section h3 {
        margin-top: 0;
    }
    
    .handbook-link {
        display: inline-block;
        transition: transform 0.3s ease;
    }
    
    .handbook-link:hover {
        transform: scale(1.05);
    }
    
    .handbook-link img {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        max-width: 150px;
        height: auto;
    }
    
    .key-info-box {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .key-info-box h4 {
        color: #F58220;
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    
    .key-info-box p {
        margin: 0;
    }

    .key-info-box p + p {
        margin-top: 0.75rem;
    }

    .aims-box {
        background: #f5f5f5;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }

    .aims-box h4 {
        color: #F58220;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .aims-box ul {
        margin-bottom: 0;
        padding-left: 1.25rem;
    }

    .aims-box ul li {
        margin-bottom: 0.5rem;
    }

    .aims-box ul li:last-child {
        margin-bottom: 0;
    }

    .careers-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1rem;
        margin: 1.5rem 0;
    }

    .careers-card {
        background: #f5f5f5;
        border-top: 4px solid #F58220;
        border-radius: 0 0 8px 8px;
        padding: 1.25rem;
    }

    .careers-card h4 {
        color: #F58220;
        margin-top: 0;
        margin-bottom: 0.75rem;
        font-size: 1rem;
    }

    .careers-card ul {
        margin-bottom: 0;
        padding-left: 1.25rem;
    }

    .careers-card ul li {
        margin-bottom: 0.4rem;
        font-size: 0.95rem;
    }

    .careers-card ul li:last-child {
        margin-bottom: 0;
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Music</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p><em>"Creativity takes courage." – Henri Matisse</em></p>
                <p>The intention of Performing Arts at Park is to spark curiosity and foster a deep passion for creativity within the hearts and minds of our students. We strive to develop key life skills while nurturing imaginative, expressive, and innovative individuals, preparing them for further education and future careers.</p>

                <p>Our curriculum supports students in becoming independent and inventive through a diverse range of schemes of work that encourage exploration of different styles and practitioners. Furthermore, Performing Arts promotes a strong sense of self-worth and supports the growth of confidence, resilience, and autonomy.</p>

                <p>The skills developed through studying Music are invaluable in later life. For example, performing with confidence, listening attentively, and working collaboratively in ensembles help to build strong communication and teamwork skills. The discipline required to practise regularly, refine techniques, and prepare for performances develops resilience, organisation, and self-motivation — qualities that are highly valued in many careers. Music can provide a strong foundation not only for careers in performance, composition, or production, but also in areas such as media, sound engineering, education, marketing, and the wider creative industries, among many others.</p>

                <h3>Implementation</h3>
                <p><span class="section-subtitle">Releasing Potential</span> – The Key Stage 3 curriculum at Park is broad and enables students to build up a good range of musical skills and techniques through learning basic keyboard skills, progressing to playing with both hands, along with other popular instruments such as guitar, drums, and improving vocal skills.</p>
                
                <p>In Years 7 and 8, units last between 5-7 weeks of exploring, learning, precise practising, challenging, reviewing, performing, composing, and listening and evaluating activities. Pupils have opportunities to work individually, in pairs and in larger groups on a range of different instruments. They are encouraged to evaluate and improve upon their ideas as well as discussing the work of their peers in a positive, supportive atmosphere which leads towards setting personalised goals of improvement for the future.</p>
                
                <p>Students will have the opportunity to experience a range of musical realisation techniques and instruments, learning about a wide variety of topics including world music, popular music as well as the fundamentals of western music. Examples of units of work include African Drumming, Elements of Music and Foundational Keyboard with notation, Britpop and Soundscapes.</p>
                
                <div class="key-info-box">
                    <h4>Homework</h4>
                    <p>Homework is set every 2 weeks via Multiple Choice Questioning (MCQ) which concludes in a written evaluation in conjunction with practical peer assessment. This encourages students to remember and retain key vocabulary and performance skills. As KS3 music work is largely practical, we ask pupils to practise anything they are currently working on in lessons. Students are also welcome to use the music facilities before and after school to rehearse.</p>
                    <p>A homework task is also set through Homework booklets bi-weekly along with the MCQ that focuses on completing short activities or tasks related to the current unit students are working on. Homework booklets are refreshed every half term to reflect current units.</p>
                </div>
                
                <p>Once in KS4 (with an option for early entrance in Year 9), students begin studying for the BTEC Tech Award in Music Practice which consists of three core components (units).</p>
                <ol>
                    <li><strong>Exploring Music Products and Styles</strong> – learners investigate different musical styles, genres and how music is created and produced.</li>
                    <li><strong>Music Skills Development</strong> – learners develop practical musical skills (such as performance, composition and music-making techniques).</li>
                    <li><strong>Responding to a Music Brief</strong> – learners apply their skills and knowledge to create and present music in response to a set brief.</li>
                </ol>
                <p>These three units together form the structure of the Level 1/2 qualification, with the third component typically externally assessed.</p>

                <h3>Further Studies and Careers</h3>

                <div class="aims-box">
                    <h4>Post-16 Pathways</h4>
                    <p>After completing KS4 Music qualifications, students may progress to:</p>
                    <ul>
                        <li>A Level Music</li>
                        <li>Level 3 BTEC Music or Music Technology</li>
                        <li>Performing Arts qualifications</li>
                        <li>Apprenticeships in creative industries</li>
                        <li>Specialist music colleges and conservatoires</li>
                    </ul>
                </div>

                <h4 style="color: #F58220; margin-top: 1.5rem; margin-bottom: 1rem;">Career Pathways in Music</h4>
                <p>A qualification in Music can lead to a wide variety of careers, including:</p>

                <div class="careers-grid">
                    <div class="careers-card">
                        <h4>Performance &amp; Creative Roles</h4>
                        <ul>
                            <li>Performer (solo artist, session musician, band member)</li>
                            <li>Singer-songwriter</li>
                            <li>Composer for film, TV and games</li>
                            <li>Musical Director</li>
                            <li>DJ or Producer</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Production &amp; Technology</h4>
                        <ul>
                            <li>Music Producer</li>
                            <li>Sound Engineer</li>
                            <li>Live Sound Technician</li>
                            <li>Studio Manager</li>
                            <li>Game Audio Designer</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Media &amp; Creative Industries</h4>
                        <ul>
                            <li>Film Composer</li>
                            <li>Radio Producer</li>
                            <li>Music Supervisor</li>
                            <li>Content Creator</li>
                            <li>Podcast Producer</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Education &amp; Community</h4>
                        <ul>
                            <li>Classroom Music Teacher</li>
                            <li>Peripatetic Instrumental Teacher</li>
                            <li>Community Arts Practitioner</li>
                            <li>Workshop Leader</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Business &amp; Management</h4>
                        <ul>
                            <li>Artist Manager</li>
                            <li>Event Promoter</li>
                            <li>Music Marketing Executive</li>
                            <li>A&amp;R Representative</li>
                            <li>Arts Administrator</li>
                        </ul>
                    </div>
                </div>

                <h3>Impact</h3>
                <p><span class="section-subtitle">Building Dreams</span></p>

                <div class="impact-images text-center">
                    <img src="../assets/curriculum/music/impact.png" alt="Music curriculum impact">
                    <img src="../assets/curriculum/pa.png" alt="Performing Arts overview">
                </div>

                <div class="handbook-section">
                    <h3>Performing Arts Department Handbook</h3>
                    <p>Please click below to view the department guidance:</p>
                    <a href="../assets/curriculum/pa/handbook.pdf" target="_blank" class="handbook-link">
                        <img alt="Performing Arts Handbook" src="../assets/curriculum/pa/handbook.jpg">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>