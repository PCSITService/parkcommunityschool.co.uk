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
                <p><span class="section-subtitle">Lighting Fires</span> – The Performing Arts intention is to ignite the flame of curiosity and passion within the hearts and minds of the students at Park. We strive to deliver and develop key life skills and to nurture passionate, imaginative, and creative individuals, preparing them for further education and future careers.</p>
                
                <p>The performing arts curriculum prepares students to become independent and creative through the delivery of a diverse range of schemes of work which allows students to develop an understanding of different styles and practitioners. Furthermore, the performing arts curriculum promotes a sense of self-worth and encourages a growth in confidence, resilience, and autonomy.</p>

                <h3>Implementation</h3>
                <p><span class="section-subtitle">Releasing Potential</span> – The Key Stage 3 curriculum at Park is broad and enables students to build up a good repertoire of songs and improve their vocal skills, learn basic keyboard skills and progress to playing with both hands.</p>
                
                <p>In Years 7, 8, and 9, genre projects last between 5-7 weeks of exploring, learning, precise practising, challenging, reviewing, performing, composing, and listening and evaluating activities. Pupils have opportunities to work individually, in pairs and in larger groups on a range of different instruments. They are encouraged to evaluate and improve upon their ideas as well as discussing the work of their peers in a positive, supportive atmosphere which leads towards setting personalised goals of improvement for the future.</p>
                
                <p>Students will have the opportunity to experience a range of instruments, learning about a wide variety of topics including world music, popular music as well as the fundamentals of western music. Examples of units of work include Rhythm, Melody, Blues, Rock, Classical Film Composition, Music in the Media – Composition for Game Music, and Showcasing.</p>
                
                <div class="key-info-box">
                    <h4>Homework</h4>
                    <p>Homework is set every 2 weeks via Multiple Choice Questioning (MCQ) which concludes in a written evaluation in conjunction with practical peer assessment. This encourages students to remember and retain key vocabulary and performance skills. As KS3 music work is largely practical, we ask pupils to practise anything they are currently working on in lessons. Students are also welcome to use the music facilities before and after school to rehearse.</p>
                </div>
                
                <p>Once in KS4, students begin studying for the RSL Level 2 Certificate in Performance for Music Practitioners which consists of three units:</p>
                <ul>
                    <li><strong>Instrumental Study</strong> – Students are offered a professional environment to further explore their chosen instrument(s) and taught the vital skills needed to become successful performers.</li>
                    <li><strong>Music Knowledge</strong> – Students widen their understanding and knowledge in music theory and history.</li>
                    <li><strong>Live Performance</strong> – Students work together as a team and get the exciting opportunity to organise their own live performance with a theme and expectations provided directly from RSL.</li>
                </ul>

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