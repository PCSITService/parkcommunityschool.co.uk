<?php
$pageTitle = 'Park Community School | Summer School';
include('partials/header.php');
?>

<style>
    
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.25rem;
    }
    
    .content-wrapper {
        max-width: 900px;
    }
    
    .highlight-box {
        background: linear-gradient(135deg, #fce4ec, #fff);
        border-left: 4px solid #EE3A80;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .highlight-box p {
        margin: 0;
    }
    
    .activities-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .activity-tag {
        background: #f8f9fa;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        text-align: center;
        font-weight: 500;
        color: #555;
        border: 1px solid #e0e0e0;
    }
    
    .summer-image {
        text-align: center;
        margin-top: 2rem;
    }
    
    .summer-image img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .stats-row {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        margin: 2rem 0;
    }
    
    .stat-box {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #EE3A80;
    }
    
    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #EE3A80;
        margin-bottom: 0.25rem;
    }
    
    .stat-label {
        color: #666;
        font-size: 0.95rem;
    }
    
    @media (max-width: 768px) {
        .activities-list,
        .stats-row {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <div class="content-wrapper">
                    <div class="stats-row">
                        <div class="stat-box">
                            <div class="stat-number">143</div>
                            <div class="stat-label">Students Attended</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Year Groups</div>
                        </div>
                        <div class="stat-box">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Week of Learning</div>
                        </div>
                    </div>

                    <p>Summer School at Park always provides an exciting opportunity to ensure that transition to secondary school is smooth and a positive experience, and for students to demonstrate their skills as Great Learners. Summer School 2021 was no exception! This year, Summer School was open to all students who were due to be in Years 7, 8 and 9 in September.</p>
                    
                    <div class="highlight-box">
                        <p><strong>Crime Investigation Theme:</strong> Learning was designed to ensure that key skills in English, science and maths were developed through the real-life context of a crime investigation. Students took on the role of detective and pieced together clues to create a hypothesis about a culprit and motive.</p>
                    </div>
                    
                    <p>Using reading skills to skim and scan for information, science skills to carry out fingerprinting and chromatography, and maths skills to problem-solve and eliminate suspects, students created a crime board before presenting their evidence to their peers. Alongside this, all students engaged with 1:1 reading opportunities and were given a free book to develop their passion for the genre of crime further.</p>
                    
                    <p>Wellbeing was a high priority for Summer School and, alongside the crime investigation, students had a range of opportunities to find what they love to do.</p>
                    
                    <div class="activities-list">
                        <div class="activity-tag">Technology</div>
                        <div class="activity-tag">Computer Science</div>
                        <div class="activity-tag">Climbing</div>
                        <div class="activity-tag">Archery</div>
                        <div class="activity-tag">Yoga</div>
                        <div class="activity-tag">Dance</div>
                    </div>
                    
                    <p>Summer School provided the perfect opportunity for our new Year 7 cohort to meet staff and new friends, and for all year groups to secure key curriculum skills whilst allowing time for wellbeing. Students were also given the opportunity to experience learning in a different setting through a visit to our smallholding where they developed skills in horticulture and animal husbandry.</p>
                    
                    <p>An excellent week was had by staff and students alike!</p>
                    
                    <div class="summer-image">
                        <img src="images/summer-school/ss.jpg" alt="Summer School students engaged in activities">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>