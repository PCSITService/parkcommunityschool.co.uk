<?php
$pageTitle = 'Park Community School | Computer Science';
include('partials/header.php');
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
    
    .content-section h4 {
        color: #333;
        margin-top: 1.5rem;
        margin-bottom: 0.75rem;
        font-size: 1.2rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
    }
    
    .content-section a {
        color: #F58220;
    }
    
    .content-section a:hover {
        color: #d96f1a;
    }
    
    .content-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 1rem 0;
    }
    
    .handbook-link img {
        transition: transform 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .handbook-link:hover img {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .opportunity-card {
        background: #f5f5f5;
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    .opportunity-card img {
        max-height: 80px;
        width: auto;
        margin-bottom: 1rem;
    }
    
    .opportunity-card p {
        text-align: left;
    }
    
    .back-to-top {
        text-align: center;
        margin: 2rem 0;
    }
    
    .back-to-top a {
        color: #F58220;
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Computer Science</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p>Computing sits at the cornerstone of the modern world, affecting the way we communicate and work as it encompasses Digital Literacy, IT and Computer Science. Our curriculum offers a pathway for our students to explore the use of applications and the creation of software to solve complex real-world problems using algorithmic thinking, which consists of abstraction, decomposition, and pattern recognition. Our focus is to develop confident independent learners who can apply thinking and reasoning skills developed in computing and other iStem subjects across the curriculum.</p>
                <p>We aim to develop competent students who can express themselves using a variety of applications and problem-solving techniques which allows them to tackle challenging problems related to business and the communication of data. To achieve this, students must master several applications including the ability to decompose a problem into smaller more manageable tasks using abstraction to clarify the important details contained in a specification brief. To master these skills students are exposed to familiar and unfamiliar contexts which require the application of critical thinking skills to simplify computable problems. Due to the crossover between Maths and Computer Science students will be encouraged to make use of mathematical formulae when they develop software solutions as well as the use of algebra to develop and test programming concepts.</p>

                <h3>Implementation</h3>
                <div class="text-center">
                    <img src="images/computer-science/cs-progression-map.jpg" alt="Computer Science Progression Map">
                </div>

                <h4>Year 7</h4>
                <p>In year 7 students will develop their skills and knowledge of a range of software which will allow them to be creative and prepare them for further study.</p>
                <p>The curriculum includes opportunities to:</p>
                <ul>
                    <li>Understanding the rules of the computer lab and how to Collaborate online respectfully</li>
                    <li>The History of Networks and the Internet</li>
                    <li>Using Media Software to create a Blog</li>
                    <li>Introduction to Scratch Programming</li>
                    <li>Using Scratch to solve a real-world problem</li>
                    <li>Model Data using Excel</li>
                </ul>

                <h4>Year 8</h4>
                <p>Through Year 8 students will deepen their knowledge and proficiency of computing by:</p>
                <ul>
                    <li>Designing Vector Graphics using Media Software</li>
                    <li>Develop a strong understandings of Computing Systems</li>
                    <li>Create a Webpage using HTML CSS and JavaScript</li>
                    <li>The developments of Computers: from Clay to Silicon</li>
                    <li>Developing Mobile Apps using specialist software</li>
                    <li>Introduction to Python Programming</li>
                </ul>

                <h4>Year 9</h4>
                <p>The areas of study for this year builds on prior learning in years 7 & 8 and constructs the foundations for further study at GCSE through:</p>
                <ul>
                    <li>Developing a mini project using Python</li>
                    <li>Creating 3D animations using industry standard software</li>
                    <li>Using data to investigate real world problems, identifying trends and patterns</li>
                    <li>Discover the binary digits that lie beneath Audio and Visual</li>
                    <li>Developing an understanding of Cyber Threats and how to protect networks</li>
                    <li>Building your own Physical Computing Project using BBC Micro:Bit</li>
                </ul>

                <h3>GCSE</h3>
                <p>Computer Science is a highly creative subject that calls on learners to be inventive. To help us develop this engaging, modern qualification, we talked to companies like Microsoft, Google, and Cisco; organisations like Computing at School (CAS) and teachers and other academics.</p>
                <p>At GCSE our students will follow the OCR Specification which explores a range of concepts which aims to equip and prepare candidates to complete programming projects with an awareness of the technologies that support their creation. This is achieved through two strands, Computer Systems and Computational Thinking.</p>

                <p>Understanding of computer systems will include:</p>
                <ul>
                    <li>Studying how processors work especially the Von Neumann architecture</li>
                    <li>Investigating computer memory and storage.</li>
                    <li>Exploring modern network layouts and how they function to provide platforms for communication and collaboration</li>
                    <li>Building skills in the increasingly important realm of cyber security</li>
                    <li>Investigating how types of software are used within computer systems</li>
                    <li>Considering how computing can affect ethical, legal, cultural and environmental issues</li>
                </ul>

                <p>Computational Thinking is approached though:</p>
                <ul>
                    <li>Solve complex problems through abstraction and decomposition</li>
                    <li>Studying fundamental algorithms in computer science</li>
                    <li>Building a firm foundation in programming techniques</li>
                    <li>Producing programs through planning via flow diagrams</li>
                    <li>Thoroughly testing programs and make them resistant to misuse</li>
                    <li>Exploring Boolean algebra (AND, OR, NOT).</li>
                    <li>Understanding how we store data within computers using binary</li>
                </ul>

                <h3>Key Skills Gained on this Course</h3>
                <ul>
                    <li>Valuable thinking and programming skills that are extremely attractive in the modern workplace</li>
                    <li>A deep understanding of problem solving and experience in creating logical and efficient solutions</li>
                    <li>Ability to demonstrate solutions to problems for other people to understand.</li>
                    <li>A good grounding in mainstream computing theory and understanding</li>
                </ul>

                <h3>Where to Next?</h3>
                <p>There are many Different careers that our qualifications could help students move towards. Below are some examples of possible career paths:</p>
                <ul>
                    <li>Data Analyst</li>
                    <li>Games Developer</li>
                    <li>Network Manager</li>
                    <li>Software Architect</li>
                    <li>Robotics Engineer</li>
                    <li>Multimedia Programmer</li>
                    <li>Cyber Security</li>
                    <li>Forensic Computing</li>
                    <li>Animator</li>
                    <li>Web Design</li>
                    <li>App Development</li>
                    <li>Nanotechnologist</li>
                </ul>

                <h3>College Links</h3>
                <ul>
                    <li><a target="_blank" href="https://www.hsdc.ac.uk/courses/computer-science/">HSDC - Computer Science</a></li>
                    <li><a target="_blank" href="https://www.portsmouth-college.ac.uk/courses/computer-science/">Portsmouth College - Computer Science</a></li>
                    <li><a target="_blank" href="https://www.highbury.ac.uk/computing-it/">Highbury College - Computing & IT</a></li>
                </ul>

                <h3>Careers in Computing Technology</h3>
                <ul>
                    <li><a target="_blank" href="https://nationalcareers.service.gov.uk/job-categories/computing-technology-and-digital">National Careers Service - Computing, Technology and Digital</a></li>
                </ul>

                <h3>Parents can help their children by:</h3>
                <ul>
                    <li>Encouraging your son/daughter to discuss the different ways of arriving an answer. Reasoning and conversation lie at the heart of developing problem-solving skills, so talking about school work will help him/her develop as a good computer scientist.</li>
                    <li>Additional challenge can be added by asking 'What if…?', and then change the problem in some way.</li>
                    <li>Allowing your son/daughter to 'teach' you.</li>
                    <li>Involving him/her in real-life problem-solving, such as algorithms used for decision making for example: traffic light sequences, level crossings, heating controls and alarm systems</li>
                    <li>Challenging him/her to draw algorithms as flow diagrams of write pseudocode to solve problems</li>
                    <li>If your son/daughter is doing well, praise him/her for the effort s/he has put in ('well done, you worked so hard!'), rather than applauding her 'talent'. This will help him/her to learn that s/he can always develop his/her abilities as long as s/he works hard.</li>
                    <li>When s/he gets stuck, ask him/her to explain what s/he has done so far and what exactly s/he is finding hard. Try and help him/her to work out where s/he has gone wrong.</li>
                    <li>Trying to ask open-ended questions to keep a conversation going and explain that, with maths, there is often more than one way to solve problems</li>
                </ul>

                <h3>Department Handbook</h3>
                <p>Please click the Computer Science handbook to view department guidance:</p>
                <div class="text-center">
                    <a href="assets/curriculum/computer-science/handbook.pdf" target="_blank" class="handbook-link">
                        <img alt="Computer Science Handbook" src="assets/curriculum/computer-science/handbook.jpg" width="150">
                    </a>
                </div>

                <h3>Exciting Opportunities</h3>
                <p>Our extra-curricular activities include:</p>

                <div class="opportunity-card">
                    <img src="images/computer-science/vex.jpg" alt="Vex IQ">
                    <p>Robotics and digital innovation workshop – Hands-on, minds on! VEX IQ is a programmable, snap-together, robotics system. Watch code come alive on a physical robot and learn key STEM skills that easily transition into the real world. Classroom STEM concepts are put to the test as students learn lifelong skills in teamwork, leadership, communications, and more.</p>
                </div>

                <div class="opportunity-card">
                    <img src="images/computer-science/rp.jpg" alt="Raspberry Pi Foundation">
                    <p>Raspberry PI competition – innovate to make the world a more sustainable place. The prize for each category is £1,000 per winning team. Entries will be evaluated on their creativity and originality.</p>
                </div>

                <div class="opportunity-card">
                    <img src="images/computer-science/amazon.jpg" alt="Amazon">
                    <p>AWS Get IT competition for girls – Be inspired, Be creative, think BIG. A chance to take part in an exciting competition where girls lead and develop on app ideas.</p>
                </div>

                <div class="back-to-top">
                    <a href="#top">↑ Back to Top</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>