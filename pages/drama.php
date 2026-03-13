<?php
$pageTitle = 'Park Community School | Drama';
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

    .component-box {
        background: #f5f5f5;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1rem 0;
        border-radius: 0 8px 8px 0;
    }

    .component-box h4 {
        color: #F58220;
        margin-top: 0;
        margin-bottom: 0.75rem;
        font-size: 1.1rem;
    }

    .component-box ul {
        margin-bottom: 0;
        padding-left: 1.25rem;
    }

    .component-box ul li {
        margin-bottom: 0.4rem;
    }

    .component-box ul li:last-child {
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
        <li role="menuitem" class="current"><a href="#">Drama</a></li>
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

                <p>The skills that are learnt by studying Drama are invaluable in later life. For example, being able to speak and present confidently in front of people, and the skill of planning that is required in any production, are useful in many careers. Drama can be a good basis for a career not only in the theatre, but in advertising, the film industry and even in events planning, among many others.</p>

                <div class="aims-box">
                    <h4>What we aim to provide for our students:</h4>
                    <ul>
                        <li>Skills in creativity, physical competence, self-confidence, concentration, self-discipline, and communication.</li>
                        <li>An appreciation of empathy and sensitivity.</li>
                        <li>An understanding of the benefits of participation in the arts, performance and creativity whilst at Park Community School and throughout their life.</li>
                        <li>An understanding of a range of plays, texts and theatre styles.</li>
                        <li>An appreciation of skilful and creative performances through improvisation, rehearsal, performance, evaluation, appreciation and assessment.</li>
                        <li>An understanding of communication through voice and movement.</li>
                        <li>An appreciation of the ways in which playwrights achieve their effects and communicate their intentions to an audience.</li>
                        <li>An awareness of social, historical and cultural contexts and influences within plays and other style of dramatic presentation.</li>
                        <li>Self and group awareness, personal responsibility, negotiation and teamwork skills.</li>
                        <li>Evaluation of their own and other's work.</li>
                    </ul>
                </div>

                <div class="aims-box">
                    <h4>Drama will also contribute towards the development of:</h4>
                    <ul>
                        <li>The development of problem solving skills (e.g. by giving pupils the opportunity to devise, refine and create their own work).</li>
                        <li>The development of self-esteem through the development of confidence in performance.</li>
                        <li>The development of inter-personal skills (e.g. by helping students to be aware of their roles as members of groups, and through taking into account other pupil's thoughts and ideas).</li>
                        <li>The development of functional skills, which will enable them to operate confidently, effectively and independently in life and work.</li>
                    </ul>
                </div>

                <h3>Implementation</h3>
                <p><strong>Releasing Potential</strong> – In Year 7 students are introduced to the basic conventions of theatre and storytelling, exploring skill of characterisation, using physical and vocal skills. Students will also learn the basics of staging plays they have devised themselves. In these lessons, students will develop group work and problem-solving abilities alongside dramatic techniques. The emphasis is on mastering the skills required to perform in character, with confidence to a small audience of their peers.</p>
                
                <p>Once in Year 8, all students explore ways that movement can be used within performance to communicate meaning to an audience. Students learn about genres in theatre and start off with Murder Mystery and working with professional scripts. This scheme aims to develop student's self confidence in moving with control in a range of scenes. This topic also covers the basics of technical directing for stage, learning lines and recreating characters an important part of study at Key Stage 4 whilst looking at script work.</p>
                
                <p>In year 9 students begin to develop the skills autonomously in readiness for RSL Acting. These topics look at different genres in Drama, devising from a set stimulus and learning lines to recreate a well-known script. Students will also take part in performance within school as well as to parents to help prepare them for the performance aspect that is essential when studying RSL Acting.</p>
                
                <p>Once in KS4 students then begin studying for the BTEC TECH Award Level 2 in Performing Arts. The course has three components and learners are required to achieve all three in order to pass the course.</p>

                <div class="component-box">
                    <h4>Component 1 – 'Exploring the Performing Arts'</h4>
                    <p>This unit is an internal assessment set by Pearson, marked by the centre and moderated by Pearson. Learners will develop their understanding of the Performing Arts by examining the work of performing arts professionals and the processes used to create performance.</p>
                    <ul>
                        <li><strong>Learning outcome A</strong> – Investigate how professional performance or production work is created.</li>
                        <li><strong>Learning outcome B</strong> – Demonstrate understanding of the skills, techniques, and approaches used by professionals to create performance/production work.</li>
                    </ul>
                </div>

                <div class="component-box">
                    <h4>Component 2 – 'Developing skills and techniques in the Performing Arts'</h4>
                    <p>This is an internal assessment set by Pearson, marked by the centre and moderated by Pearson. Learners will develop their performing arts skills and techniques through the reproduction of acting, dance and musical theatre repertoire as performers or designers.</p>
                    <ul>
                        <li><strong>Learning outcome A</strong> – Use rehearsal or production/design processes</li>
                        <li><strong>Learning outcome B</strong> – Apply skills and techniques in Performance or realisation</li>
                        <li><strong>Learning outcome C</strong> – Review own development and application of performance or design skills</li>
                    </ul>
                </div>

                <div class="component-box">
                    <h4>Component 3 – 'Responding to a brief'</h4>
                    <p>This unit is an externally marked unit set by Pearson. Learners will be given the opportunity to work as part of a group to contribute to a workshop performance as either a performer or a designer in response to a brief and stimulus.</p>
                </div>

                <p>Homework is set every 2 weeks via Multiple Choice Questioning (MCQ).</p>

                <h3>Further Studies and Careers</h3>

                <h4 style="color: #F58220; margin-top: 1.5rem; margin-bottom: 0.75rem;">Post-16 Study Options in Drama</h4>

                <div class="aims-box">
                    <h4>A-Levels (Academic Route)</h4>
                    <ul>
                        <li>A-Level Drama &amp; Theatre</li>
                        <li>Often combined with English, Media Studies, History, Psychology or Music</li>
                        <li>Includes performance, directing, and written theatre analysis.</li>
                    </ul>
                    <p style="margin-top: 1rem; margin-bottom: 0.5rem;"><strong>Leads to university degrees such as:</strong></p>
                    <ul>
                        <li>Drama &amp; Theatre Studies</li>
                        <li>Acting</li>
                        <li>Directing</li>
                        <li>Theatre Production</li>
                        <li>Scriptwriting</li>
                        <li>Performing Arts</li>
                    </ul>
                </div>

                <div class="aims-box">
                    <h4>Vocational Qualifications (Practical Route)</h4>
                    <ul>
                        <li><strong>BTEC Level 3 in Performing Arts (Acting Pathway)</strong> – Practical and coursework-based. Equivalent to A-Levels. Focus on rehearsal, performance, and industry skills.</li>
                        <li><strong>UAL Level 3 Diploma/Extended Diploma in Performing &amp; Production Arts</strong> – Industry-focused training. Often audition/interview based.</li>
                        <li><strong>T-Level in Media, Broadcast &amp; Production</strong> – Ideal for technical theatre, lighting, sound, costume, or stage management.</li>
                    </ul>
                </div>

                <div class="aims-box">
                    <h4>Apprenticeships</h4>
                    <ul>
                        <li>Creative Venue Technician</li>
                        <li>Community Arts Assistant</li>
                        <li>Backstage / Production Assistant</li>
                        <li>Costume or Props Assistant</li>
                    </ul>
                    <p style="margin-top: 1rem; margin-bottom: 0;">Earn while training in theatres or production companies.</p>
                </div>

                <h4 style="color: #F58220; margin-top: 1.5rem; margin-bottom: 1rem;">Career Pathways in Drama</h4>

                <div class="careers-grid">
                    <div class="careers-card">
                        <h4>Acting (Performance Careers)</h4>
                        <ul>
                            <li>Stage Actor</li>
                            <li>TV Actor</li>
                            <li>Film Actor</li>
                            <li>Voice Actor</li>
                            <li>Musical Theatre Performer</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Film &amp; Television</h4>
                        <ul>
                            <li>Screen Actor</li>
                            <li>Scriptwriter</li>
                            <li>Director</li>
                            <li>Casting Director</li>
                            <li>Producer</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Theatre Production (Behind the Scenes)</h4>
                        <ul>
                            <li>Stage Manager</li>
                            <li>Lighting Designer</li>
                            <li>Sound Technician</li>
                            <li>Costume Designer</li>
                            <li>Set Designer</li>
                            <li>Theatre Technician</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Writing &amp; Creative Roles</h4>
                        <ul>
                            <li>Playwright</li>
                            <li>Screenwriter</li>
                            <li>Dramaturg</li>
                            <li>Theatre Critic</li>
                        </ul>
                    </div>
                    <div class="careers-card">
                        <h4>Teaching &amp; Education</h4>
                        <ul>
                            <li>Primary/Secondary Drama Teacher (requires Degree + PGCE)</li>
                            <li>Workshop Leader</li>
                            <li>Youth Theatre Director</li>
                            <li>University Lecturer</li>
                        </ul>
                    </div>
                </div>

                <h3>Impact</h3>
                <p><strong>Building Dreams</strong></p>

                <div class="text-center">
                    <img src="../assets/curriculum/drama/impact.png" alt="Drama Impact">
                </div>

                <div class="text-center">
                    <img src="../assets/curriculum/pa.png" alt="Performing Arts">
                </div>

                <div class="handbook-section">
                    <h3>Performing Arts Department Handbook</h3>
                    <p>Please click the Performing Arts handbook to view department guidance:</p>
                    <div class="text-center">
                        <a href="../assets/curriculum/pa/handbook.pdf" target="_blank" class="handbook-link">
                            <img alt="Performing Arts Handbook" src="../assets/curriculum/pa/handbook.jpg" width="150">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>