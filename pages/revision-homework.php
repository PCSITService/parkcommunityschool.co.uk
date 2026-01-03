<?php
$pageTitle = 'Park Community School | Remote Learning, Revision and Homework';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h3 {
        color: #F58220;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section h3 small {
        font-weight: 400;
        color: #666;
        font-size: 0.7em;
    }
    
    .content-section h4 {
        color: #333;
        font-size: 1.15rem;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
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
    
    .content-section a {
        color: #F58220;
    }
    
    .content-section a:hover {
        color: #d96f1a;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .login-button {
        display: inline-block;
        background-color: #a3cd42;
        color: white;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
    }
    
    .login-button:hover {
        background-color: #8fb332;
        color: white;
        transform: translateY(-2px);
    }
    
    .login-section {
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .lockdown-box {
        background: #fff3cd;
        border-left: 4px solid #ffc107;
        padding: 1.5rem;
        border-radius: 0 8px 8px 0;
        margin: 1.5rem 0;
    }
    
    .lockdown-box p:first-child {
        font-weight: 600;
        color: #856404;
        margin-bottom: 0.5rem;
    }
    
    .resources-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .resources-box ul {
        margin: 0;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .purpose-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .purpose-list li:last-child {
        border-bottom: none;
    }
    
    .tips-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .documents-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin-top: 1rem;
    }
    
    .doc-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
    }
    
    .doc-card h3 {
        margin-top: 0;
    }
    
    .doc-card ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .doc-card a {
        display: inline-block;
        margin-bottom: 0.25rem;
    }
    
    .doc-card small {
        color: #666;
        font-size: 0.85rem;
    }
    
    @media (max-width: 768px) {
        .documents-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- REMOTE LEARNING SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3>Student – Remote Learning</h3>
                
                <div class="login-section">
                    <a class="login-button" href="https://pcshantssch.sharepoint.com/sites/students" target="_blank">Student Login</a>
                </div>

                <p>Use the link above and your school log-on to access learning for all of your subject areas. You'll find:</p>
                <ul>
                    <li>An overview of every half term for each subject</li>
                    <li>Lead PowerPoints with videos explaining your learning</li>
                    <li>All the resources you will need including video clips and live demonstrations</li>
                    <li>Quizzes and application tasks to help you show you know</li>
                </ul>
                <p>You can use this area to revise, access homework and revision and use for remote learning if you are required to work from home.</p>

                <div class="lockdown-box">
                    <p>In the Event of Lockdown</p>
                    <p>If school is required to lockdown for some or all students, all your learning is there ready for you. Teachers will:</p>
                    <ul>
                        <li>Set your work via Teams each week</li>
                        <li>Offer Live lessons once every week</li>
                        <li>Give you feedback on your work via Teams</li>
                    </ul>
                </div>
                
                <div class="resources-box">
                    <p><strong>Additional lessons and support:</strong></p>
                    <ul>
                        <li><a href="../assets/login-help.pdf" target="_blank">Need help logging in?</a></li>
                        <li><a href="https://vimeo.com/showcase/7029024" target="_blank">Video Assemblies</a></li>
                        <li><a href="https://vimeo.com/showcase/7145412" target="_blank">Lockdown Learning Revision Videos</a></li>
                        <li><a href="../assets/reading_plus_top_tips.pptx" target="_blank">Reading Plus Top Tips</a></li>
                        <li><a href="weekly-challenge.php">Weekly Challenge March–June 2020</a></li>
                        <li><a href="../assets/reading_process.pdf" target="_blank">Reading Process</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPORTANCE SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <p>Working independently is an essential skill for success in school, exams and life. At Park, we develop this through the provision of our full curriculum being accessible remotely to ensure that all students can access learning at any time and revisit their learning to master it. We expect students to work at home as well as in school.</p>

                <p>Homework is a significant way through which we increase students' <strong>Understanding</strong> and <strong>Mastery</strong> of content and skills, and raise standards.</p>

                <p>The expectations of new exam syllabuses and a move to terminal examinations in all subjects over the next three years, means that students must be supported to consolidate, review and revise learning outside of lessons in order to fully master the knowledge and skills they require. Homework is a vital part of this.</p>
            </div>
            <div class="cell medium-5">
                <img src="/images/homework/homework-01.jpg" alt="Park Community School - Understanding and Mastery of Subjects">
            </div>
        </div>
    </div>
</section>

<!-- PURPOSE SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h3>Purpose of Homework</h3>
                <ul class="purpose-list">
                    <li>Set a clear expectation that students must work independently to truly master a given body of knowledge or skills set</li>
                    <li>Consolidate learning from the classroom through further independent application, practice or revision</li>
                    <li>Prepare students for new learning through independent research and inquiry</li>
                    <li>Allow students to develop their learning in different or creative ways</li>
                    <li>Encourage students to explore an area in greater depth and develop a thirst for learning</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- TIPS SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <div class="tips-card">
                    <h3>Tips &amp; Tricks <small>| Student &amp; Parent</small></h3>
                    <p>Students are more successful in school when parents take an active interest in their homework — it shows students that what they do is important.</p>
                    <p><strong>How can you support your child:</strong></p>
                    <ul>
                        <li>Encourage students to value their homework and work hard</li>
                        <li>Ensure students have a quiet space where they can work</li>
                        <li>Set a regular slot for homework after school</li>
                        <li>Help your child manage their time</li>
                        <li>Keep distractions to a minimum</li>
                        <li>Praise their work and efforts</li>
                        <li>Daily reading is essential</li>
                        <li>Access <a href="https://insight.pcs.hants.sch.uk:444" target="_blank">Insight</a> to view homework assignments</li>
                    </ul>
                    
                    <h4>The Internet Has Lots of Helpful Resources</h4>
                    <p>If your child has forgotten some facts or how to solve a maths problem, there will always be a <a href="https://www.youtube.com/channel/UC3yA8nDwraeOfnYfBWun83g" target="_blank">YouTube</a> video on it that you can watch together.</p>
                </div>
            </div>
            <div class="cell medium-5 show-for-medium">
                <img src="/images/homework/homework-02.jpg" alt="Park Community School - Encourage students to value their work">
            </div>
        </div>
    </div>
</section>

<!-- DOCUMENTS SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="documents-grid">
                    <div class="doc-card">
                        <h3>Supporting Documents</h3>
                        <ul>
                            <li><a href="../assets/homework/yr10_parent_revision_information.pdf" target="_blank">Year 10 parent revision information presentation</a> <small>(PDF)</small></li>
                            <li><a href="../assets/homework/memory_revision.pdf" target="_blank">Memory and Revision</a> <small>(PDF)</small></li>
                            <li><a href="../assets/homework/revision_guides.pdf" target="_blank">Revision Guides</a> <small>(PDF)</small></li>
                            <li><a href="../assets/homework/yr9_revision_booklet.pdf" target="_blank">Year 9 Revision Booklet</a> <small>(PDF)</small></li>
                            <li><a href="../assets/homework/pixl_revisit.pdf" target="_blank">PiXL Revisit Handbook</a> <small>(PDF)</small></li>
                        </ul>
                    </div>

                    <div class="doc-card">
                        <h3>External Resources</h3>
                        <ul>
                            <li><a href="https://www.bbc.com/ownit" target="_blank">BBC Own IT</a></li>
                            <li><a href="https://www.learningscientists.org/" target="_blank">The Learning Scientists website</a></li>
                            <li><a href="https://www.understood.org/en/school-learning/learning-at-home/homework-study-skills/7-tips-for-improving-your-childs-homework-and-study-skills" target="_blank">Top 10 Homework Tips</a></li>
                            <li><a href="https://www.bbc.co.uk/bitesize/levels/z4kw2hv" target="_blank">Key Stage 3 Bitesize</a></li>
                            <li><a href="https://www.bbc.co.uk/bitesize/levels/z98jmp3" target="_blank">GCSE Bitesize</a></li>
                            <li><a href="https://www.mymaths.co.uk" target="_blank">MyMaths</a></li>
                            <li><a href="https://corbettmaths.com/" target="_blank">Corbettmaths</a></li>
                            <li><a href="https://www.youtube.com/channel/UChtsYbgvLf9Ac0b1GnZ_1lw" target="_blank">Murphy's Maths YouTube</a></li>
                            <li><a href="https://www.youtube.com/user/mrbruff/featured" target="_blank">MrBruff</a></li>
                            <li><a href="https://www.youtube.com/channel/UC0jbf4wI1GPts6hpbKZ-7Bw/featured" target="_blank">Mrs Whelan's English</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>