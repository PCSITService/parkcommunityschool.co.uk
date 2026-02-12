<?php
$pageTitle = 'Park Community School | STAR';
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
    
    .subjects-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
    }
    
    .subjects-box h4 {
        color: #F58220;
        margin: 0 0 1.25rem;
        font-size: 1.25rem;
    }
    
    .subjects-list {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .subjects-list li {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 0.6rem 1.25rem;
        font-size: 1rem;
        font-weight: 500;
        color: #333;
        margin: 0;
    }
    
    .skills-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
        margin: 1.5rem 0 2rem;
    }
    
    .skills-box h4 {
        color: #F58220;
        margin: 0 0 1.25rem;
        font-size: 1.25rem;
    }
    
    .skills-box ul {
        margin: 0;
        padding: 0 0 0 1.25rem;
    }
    
    .skills-box ul li {
        margin-bottom: 0.6rem;
        line-height: 1.6;
        font-size: 0.95rem;
        color: #555;
    }
    
    .skills-box ul li strong {
        color: #333;
    }
    
    .journey-section {
        display: flex;
        gap: 2rem;
        align-items: flex-start;
        margin: 1.5rem 0 2rem;
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #F58220;
    }
    
    .journey-image {
        flex: 1 1 55%;
        min-width: 0;
    }
    
    .journey-image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    .journey-text {
        flex: 1 1 40%;
        min-width: 0;
    }
    
    .journey-text p {
        font-size: 1rem;
        line-height: 1.8;
        color: #333;
    }
    
    .journey-text p:last-child {
        margin-bottom: 0;
    }
    
    @media (max-width: 768px) {
        .journey-section {
            flex-direction: column;
        }
        
        .journey-image,
        .journey-text {
            flex: 1 1 100%;
        }
    }
    
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">STAR</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>STAR Curriculum</h3>
                
                <div class="intro-box">
                    <p><b>What is STAR?</b></p>
                    <p>At Park, we want all students to be Great Learners who expect to think hard, engage with learning and find what they love to do.</p>
                    <p>With this in mind, year 7 students begin life at Park studying the Star Curriculum.</p>
                    <p>Our innovative approach to Year 7 curriculum design aims to ensure students have a smooth transition to secondary education whilst making excellent progress.</p>
                    <p>We believe that for students to succeed they need to be:</p>

                    <ul style="padding-left: 15px;">
                        <li>Great Learners</li>
                        <li>Independent Thinkers</li>
                        <li>Effective Communicators</li>
                        <li>Responsible Citizens</li>
                        <li>Healthy Individuals</li>
                    </ul>
                </div>

                <p class="section-label">Main Topics Students Study - How does it work?</p>
                <p>Students are in 'Star' lessons for approximately 50% of their curriculum time in Year 7. Alongside their Star lessons, students will attend other discrete lessons so that they experience a broad curriculum and the transition to secondary school is scaffolded. The Star Curriculum includes the following:</p>

                <div class="subjects-box">
                    <h4>Subjects Studied in STAR</h4>
                    <ul class="subjects-list">
                        <li>English</li>
                        <li>History</li>
                        <li>Geography</li>
                        <li>RE</li>
                        <li>Horticulture</li>
                        <li>PE</li>
                        <li>Drama</li>
                    </ul>
                </div>

                <p class="section-label">Main Skills Students Develop</p>

                <div class="skills-box">
                    <p>The curriculum is designed to develop students' skills in each of these areas as well as being relevant and aspirational, encouraging depth of thinking and providing opportunities for students to apply their learning regularly to a real-life context.</p>
                    <p><strong>The curriculum aims to:</strong></p>
                    <ul>
                        <li>Secure student progress by getting to know students quickly and embedding high expectations.</li>
                        <li>Focus on transferable skills by underpinning all learning with Literacy and Oracy.</li>
                        <li>Engage and challenge learners through enquiry-led learning where deep thinking is expected.</li>
                        <li>Reduce the challenges which often surround transition.</li>
                        <li>Expect learning to be applied to a relevant, real-life context so that it is memorable and serves a purpose.</li>
                    </ul>
                    <p>Our intention is that all students settle into life at Park quickly, developing positive professional relationships with staff which are built on high expectations and a thorough understanding of students' strengths and areas for development.</p>
                </div>

                <h3>Our Learning Journey</h3>

                <div class="journey-section">
                    <div class="journey-image">
                        <img src="/images/star/star-learning-journey.jpg" alt="Star Curriculum 2025-2026 Our Learning Journey - showing the termly topics and rich challenges throughout Year 7">
                    </div>
                    <div class="journey-text">
                        <p>Each group has one or two Star teachers who deliver these subjects and, in most cases, one of these Star teachers is also the tutor for the group, allowing for strong relationships to be built.</p>
                        <p>Curriculum design makes links across subject disciplines with lead subjects driving the learning each half term. Learning is enquiry led, driven by big questions that students work towards answering.</p>
                    </div>
                </div>

                <h3>Rich Challenges</h3>

                <div class="skills-box">
                    <p>Learning is always applied at the end of each unit to a 'Rich Challenge'- a task designed for students to show what they know to a real audience and purpose. Rich Challenges have included:</p>
                    <ul>
                        <li>An Oral Histories exhibition for Parents, Carers and members of the Community.</li>
                        <li>Green in the Grey- making a positive change to an area of the environment.</li>
                        <li>Pay it Forward- taking over elements of school life to make a positive difference and to show compassion for others.</li>
                        <li>Election Campaign- creating a Manifesto for Change that is presented, voted on and pitched to School Leaders.</li>
                        <li>A Year group adaptation of a Shakespeare play.</li>
                        <li>A Legacy project- designed to pass on their experiences to Year 6 students.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>