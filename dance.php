<?php
$pageTitle = 'Park Community School | Dance';
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
    
    .page-header p {
        color: white;
        margin-bottom: 0;
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
    
    .content-section h3:first-of-type {
        margin-top: 0;
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
    
    .content-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }
    
    .component-box {
        background: #f5f5f5;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .component-box p {
        margin-bottom: 0.5rem;
    }
    
    .component-box p:last-child {
        margin-bottom: 0;
    }
    
    .handbook-section {
        background: #fff;
        border-radius: 8px;
        padding: 1.5rem;
        margin-top: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .handbook-section h3 {
        margin-top: 0;
    }
    
    .handbook-link img {
        transition: transform 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .handbook-link:hover img {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Dance</h1>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Dance</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p><strong>Lighting Fires</strong> – The Performing Arts intention is to ignite the flame of curiosity and passion within in the hearts and minds of the students at Park. We thrive to deliver and develop key life skills and to nurture passionate, imaginative, and creative individuals, preparing them for further education and future careers. The performing arts curriculum prepares students to become independent and creative through the delivery of a diverse range of schemes of work which allows students to develop an understanding of different styles and practitioners. Furthermore, the performing arts curriculum promotes a sense of self-worth and encourages a growth in confidence, resilience, and autonomy.</p>
                        
                <h3>Implementation</h3>
                <p><strong>Releasing Potential</strong> – The KS3 curriculum enables students to build up a repertoire of basic skills that students need to master before they go into KS4. Students learn a range of different choreographic devices and performance skills that build their self-confidence and teamwork skills that are fundamental to their learning. Students have the opportunity to learn different styles of Dance and are encouraged to self-assess and evaluate the work of others. Examples of units are Video games, Nutcracker, Madhatter's tea party, Swan Song, Soldiers and Choreography project. All units will equip students with relevant skills in order to access our KS4 courses. Students will also have the opportunity to achieve an Arts Award within their theory lessons.</p>
                
                <p>Homework is set every 2 weeks via Multiple Choice Questioning (MCQ). KS3 students have the opportunity to be involved in our Performing Arts ambassador team. This involves working with students across our feeder schools as well as supporting our department with shows and extra curricular activities.</p>

                <p>Once in KS4 students then begin studying for the BTEC TECH Award Level 2 in Performing Arts. The course has three components and learners are required to achieve all three in order to pass the course.</p>

                <div class="component-box">
                    <p><strong>Component 1 – 'Exploring the Performing Arts'</strong></p>
                    <p>This unit is an internal assessment set by Pearson, marked by the centre and moderated by Pearson. Learners will develop their understanding of the Performing Arts by examining the work of performing arts professionals and the processes used to create performance.</p>
                    <p>Learning outcome A – Investigate how professional performance or production work is created.</p>
                    <p>Learning outcome B – Demonstrate understanding of the skills, techniques, and approaches used by professionals to create performance/production work.</p>
                </div>

                <div class="component-box">
                    <p><strong>Component 2 – 'Developing skills and techniques in the Performing Arts'</strong></p>
                    <p>This is an internal assessment set by Pearson, marked by the centre and moderated by Pearson. Learners will develop their performing arts skills and techniques through the reproduction of acting, dance and musical theatre repertoire as performers or designers.</p>
                    <p>Learning outcome A – Use rehearsal or production/design processes</p>
                    <p>Learning outcome B – Apply skills and techniques in Performance or realisation</p>
                    <p>Learning outcome C – Review own development and application of performance or design skills</p>
                </div>

                <div class="component-box">
                    <p><strong>Component 3 – 'Responding to a brief'</strong></p>
                    <p>This unit is an externally marked unit set by Pearson. Learners will be given the opportunity to work as part of a group to contribute to a workshop performance as either a performer or a designer in response to a brief and stimulus.</p>
                </div>

                <p>Homework is set every 2 weeks via Multiple Choice Questioning (MCQ).</p>

                <h3>Impact</h3>
                <p><strong>Building Dreams</strong></p>
                <p>There are multiple ways students can Find What They Love within Performing Arts beyond the classroom. For example:</p>
                <ul>
                    <li>Performing Arts ambassador programme – allowing students to develop their ability to coach and support students within our school and local junior schools in a creative setting.</li>
                    <li>Invitations to attend a variety of after school clubs and activities.</li>
                    <li>Students are invited to support within our school productions as either a performer or production role.</li>
                    <li>Amphitheatre – Students are offered the opportunity to perform live within our bespoke assembly setting.</li>
                </ul>

                <div class="text-center">
                    <img src="assets/curriculum/dance/impact.png" alt="Dance Impact">
                </div>

                <div class="text-center">
                    <img src="assets/curriculum/pa.png" alt="Performing Arts">
                </div>

                <div class="handbook-section">
                    <h3>Performing Arts Department Handbook</h3>
                    <p>Please click the Performing Arts handbook to view department guidance:</p>
                    <div class="text-center">
                        <a href="assets/curriculum/pa/handbook.pdf" target="_blank" class="handbook-link">
                            <img alt="Performing Arts Handbook" src="assets/curriculum/pa/handbook.jpg" width="150">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>