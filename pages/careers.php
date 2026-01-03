<?php
$pageTitle = 'Park Community School | Careers';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 2rem 0;
    }
    
    .content-section h2,
    .grey-section h2 {
        color: #F58220;
        margin-bottom: 1rem;
    }
    
    .content-section h3,
    .grey-section h3 {
        color: #F58220;
        margin-bottom: 1rem;
    }
    
    .content-section h4,
    .grey-section h4 {
        color: #333;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .button {
        background-color: #F58220;
        color: white;
        border-radius: 3px;
        margin: 0.25rem;
    }
    
    .button:hover {
        background-color: #d96f1a;
        color: white;
    }
    
    .content-section img,
    .grey-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
    }
    
    /* Resource grid */
    .resource-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    @media (max-width: 640px) {
        .resource-grid {
            grid-template-columns: 1fr;
        }
    }
    
    @media (min-width: 641px) and (max-width: 1024px) {
        .resource-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    .resource-grid a {
        color: #F58220;
    }
    
    .resource-grid a:hover {
        color: #d96f1a;
    }
    
    /* Card grid for logos */
    .logo-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    @media (max-width: 640px) {
        .logo-grid {
            grid-template-columns: 1fr;
        }
    }
    
    .logo-grid li {
        text-align: center;
    }
    
    .logo-grid img {
        height: 70px;
        width: auto;
        margin-bottom: 0.5rem;
    }
    
    .logo-grid p {
        margin: 0;
        font-size: 0.9rem;
    }
    
    .logo-grid a {
        color: #333;
        text-decoration: none;
    }
    
    .logo-grid a:hover {
        color: #F58220;
    }
    
    /* Menu box grid */
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    @media (max-width: 640px) {
        .menu-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (min-width: 641px) and (max-width: 1024px) {
        .menu-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    
    .menu-box {
        background: white;
        border-radius: 8px;
        padding: 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .menu-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    
    .menu-box img {
        max-height: 60px;
        width: auto;
        margin-bottom: 0.5rem;
    }
    
    .menu-box p {
        margin: 0;
        font-size: 0.9rem;
        color: #333;
    }
    
    .menu-box a {
        text-decoration: none;
        color: #333;
    }
    
    .menu-box a:hover {
        color: #F58220;
    }
    
    /* Options grid (2x2 on small screens) */
    .options-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    @media (max-width: 1024px) {
        .options-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    /* Modal styling */
    .reveal {
        border-radius: 8px;
        padding: 2rem;
    }
    
    .reveal h2 {
        color: #F58220;
        border-bottom: 2px solid #f5f5f5;
        padding-bottom: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .reveal h4 {
        color: #333;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .reveal ul, .reveal ol {
        margin-bottom: 1rem;
    }
    
    .reveal li {
        margin-bottom: 0.5rem;
    }
    
    .reveal a {
        color: #F58220;
    }
    
    /* Inline list for business links */
    .business-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .business-list li {
        display: inline-block;
        margin-right: 1rem;
        margin-bottom: 0.5rem;
    }
    
    .business-list a {
        color: #F58220;
    }
    
    /* Video embed */
    .responsive-embed {
        border-radius: 8px;
        overflow: hidden;
    }
    
    .back-to-top {
        text-align: center;
        margin: 2rem 0;
    }
    
    .back-to-top a {
        color: #F58220;
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <h2>Prepare for your Next Step</h2>
                <p>At Park we believe that a good careers education is a vital part in raising our student's aspirations and assist them in making informed decisions about their future. We pride ourselves in ensuring that our students are ready and prepare for their next steps in many ways.</p>
                <p><a href="#" data-open="careers-prepare">Read More...</a></p>
                <br>
                <a href="#" class="button" data-open="careers-gatsby">Gatsby Benchmarks</a>
                <a href="/assets/apprenticeship_parent_pack.pdf" class="button" target="_blank">Parent and Carer Apprenticeship Pack</a>
                <a href="../assets/curriculum/smsc/overview_ceiag.pdf" class="button" target="_blank">Overview of CEIAG per year</a>
                <a href="../assets/curriculum/smsc/careers-31.01.2023.pdf" class="button" target="_blank">Intention, Implementation and Impact</a>
            </div>
            <div class="cell medium-4">
                <img src="/images/careers/logo.png" alt="Careers">
            </div>
        </div>
    </div>
</section>

<!-- Careers Information 24/7 -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Careers Information 24/7</h2>
                <p>We know our students like to investigate in their own time, so we have ensured to provided access to careers information 24/7. Our students can assess through the school website a range of online resources to assist them. Within our Careers programme there is allocated time to explore these resources with their mentors.</p>
                <ul class="logo-grid">
                    <li>
                        <a href="//bespoke.careercompanion.co.uk/libraries/index" target="_blank">
                            <img src="/images/careers/career_companion.jpg" alt="Careers Companion">
                            <p>Careers Companion</p>
                        </a>
                    </li>
                    <li>
                        <a href="//www.fasttomato.com/" target="_blank">
                            <img src="/images/careers/fasttomato.jpg" alt="FastTomato">
                            <p>FastTomato</p>
                        </a>
                    </li>
                    <li>
                        <a href="//www.eclips-online.co.uk/" target="_blank">
                            <img src="/images/careers/eclips.jpg" alt="eClips">
                            <p>eClips</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <h2>Work Experience</h2>
                <p>In July all of year 10 have an opportunity to complete a two-week work experience placement. This is an exciting opportunity for students to develop an understanding of the skills and knowledge that is required in a variety of careers.</p>
                <p>All students have access to the <a href="//ebpsouth.work-experience.co.uk/">EBP South's work experience database</a>. Within this work experience program, you will find a full list of all placement opportunities offered by the employers taking part in the Work Experience. Alternatively, students can source their own private placement, if they already have a work placement in mind.</p>
            </div>
            <div class="cell medium-4">
                <a href="//ebpsouth.work-experience.co.uk/" target="_blank">
                    <img src="/images/careers/ebp.jpg" alt="EBP">
                </a>
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top">↑ Back to Top</a>
        </div>
    </div>
</section>

<!-- Colleges -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Colleges</h2>
                <ul class="menu-grid">
                    <li>
                        <div class="menu-box">
                            <a href="//www.hsdc.ac.uk/" target="_blank">
                                <img src="/images/careers/hsdc_college_logo.jpg" alt="HSDC">
                                <p>Havant &amp; South Downs College</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.portsmouth-college.ac.uk/" target="_blank">
                                <img src="/images/careers/portsmouth_college_logo.jpg" alt="Portsmouth College">
                                <p>Portsmouth College</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.highbury.ac.uk/" target="_blank">
                                <img src="/images/careers/highbury_college_logo.jpg" alt="Highbury College">
                                <p>Highbury College</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//chichester.ac.uk/" target="_blank">
                                <img src="/images/careers/chichester_college_logo.jpg" alt="Chichester College">
                                <p>Chichester College</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.fareham.ac.uk/" target="_blank">
                                <img src="/images/careers/fareham_college_logo.jpg" alt="Fareham College">
                                <p>Fareham College</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.sparsholt.ac.uk/" target="_blank">
                                <img src="/images/careers/sparsholt_college_logo.jpg" alt="Sparsholt">
                                <p>Sparsholt</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.peta.co.uk/" target="_blank">
                                <img src="/images/careers/peta_college_logo.jpg" alt="PETA">
                                <p>PETA</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Universities -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Universities</h2>
                <ul class="menu-grid">
                    <li>
                        <div class="menu-box">
                            <a href="//www.port.ac.uk/" target="_blank">
                                <img src="/images/careers/portsmouth_uni_logo.jpg" alt="University of Portsmouth">
                                <p>University of Portsmouth</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.chi.ac.uk/" target="_blank">
                                <img src="/images/careers/chichester_uni_logo.jpg" alt="University of Chichester">
                                <p>University of Chichester</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.southampton.ac.uk/" target="_blank">
                                <img src="/images/careers/southampton_uni_logo.jpg" alt="University of Southampton">
                                <p>University of Southampton</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="//www.ox.ac.uk/" target="_blank">
                                <img src="/images/careers/oxford_uni_logo.jpg" alt="University of Oxford">
                                <p>University of Oxford</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Working with Universities -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <h2>Working with Universities</h2>
                <p>By the age of 16, every student should have had a meaningful encounter (a 'meaningful encounter' is one in which the student has an opportunity to explore what it is like to learn in that environment) with providers of the full range of learning opportunities, including sixth forms, colleges, universities and apprenticeship providers. This should include the opportunity to meet both staff and students. By the age of 18, all students who are considering applying for university should have had at least two visits to universities to meet staff and students.</p>
                <p>At Park Community School we have an excellent Gifted and Talented programme where gifted and talented students are taken to a selection of universities to experience what it is like and the opportunities open to them.</p>
                <p>Our gifted and talented students visit Portsmouth, Southampton, Oxford including a residential open to Y10 students and 1:1 mentoring program.</p>
                <p>However all students also get the opportunity to work with Chichester and Portsmouth University several times throughout their time at Park.</p>
            </div>
            <div class="cell medium-4">
                <img src="/images/careers/uni_students.jpg" alt="University Students">
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top">↑ Back to Top</a>
        </div>
    </div>
</section>

<!-- Options after Park -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>What options do I have when I leave Park?</h2>
                <p>Click on the links to find out more about the options available to you…</p>
                <ul class="options-grid">
                    <li>
                        <div class="menu-box">
                            <a href="#" data-open="Alevels_Modal">
                                <p>A Levels</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="#" data-open="Vocational_Modal">
                                <p>Vocational Courses</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="#" data-open="Apprenticeship_Modal">
                                <p>Apprenticeships &amp; Degree Level Apprenticeships</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="menu-box">
                            <a href="#" data-open="HigherEducation_Modal">
                                <p>Higher Education</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Local Colleges Map -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Local Colleges</h2>
                <p>We are very lucky to have such a wide range of local colleges, information can be found about the colleges and the courses they offer online. In Year 10 students get an opportunity to visit the local colleges for a taster day, experiencing what it would be like to study at the college and experience the courses they are interested in. Year 11 have further visits and talks from the colleges.</p>
                <div class="responsive-embed widescreen">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m10!1m3!1d40320.72837701382!2d-1.0246444!3d50.8294529!2m1!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sColleges!5e0!3m2!1sen!2suk!4v1532009755498" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Careers Adviser -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Careers Adviser</h2>
                <h4>What is available?</h4>
                <p>The school buys in Hampshire Futures to provide 2 days a week of impartial information, advice and guidance support.</p>
                <p>Our careers adviser will see students individually, for appointments lasting around 50 minutes (however is able see you more than once if needed!) and is also available to answer any quick questions or take referrals on a drop-in basis at break and lunchtime on her days in school.</p>
                <p>Students do not have to know what they want to do before they have a careers appointment as our adviser can talk through options, suggest resources for research, and provide detailed information on college courses, qualifications, apprenticeship opportunities and jobs.</p>
                
                <h4>Referral</h4>
                <p>Students can self-refer, parents/carers can request an appointment or mentors can refer students. This can be done in a variety of ways:</p>
                <ul>
                    <li>Email: <a href="mailto:Careers@pcs.hants.sch.uk">Careers</a></li>
                    <li>Phone Reception: <a href="/pages/contact.php">Contact Information Page</a></li>
                    <li>Face to Face via the Drop-in Clinics</li>
                    <li>Drop-in to the Careers Office</li>
                </ul>
                
                <h4>Appointments System</h4>
                <p>Our careers adviser will email mentors with the list of appointments for the week and mentors will then let their mentees know if they have an appointment.</p>
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top">↑ Back to Top</a>
        </div>
    </div>
</section>

<!-- Business Links -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Business Links</h2>
                <p>At Park Community School we are 'Much More Than Just a School' as part of our drive to ensure our students have more than just qualifications we are keen to ensure our students are set for their future in the work of work.</p>
                <p>Could you or your company make a real and lasting difference to the lives of our students here at Park whilst benefitting your own business? At Park we are looking to set up links with businesses to enable our students to access skills from experts within a wide range of industries. Our Business links also enables your companies to connect with each other forming a fantastic business network through the membership of our business ambassador club.</p>
                <p>We have already set up links with a variety of companies throughout the school including:</p>
                <ul class="business-list">
                    <li>APS Producers</li>
                    <li><a href="//bishops.co.uk/" target="_blank">Bishops Printers</a></li>
                    <li>Ceaward Properties</li>
                    <li>Emari Marketing</li>
                    <li><a href="//www.fatface.com/" target="_blank">Fat Face</a></li>
                    <li>Giant Leap</li>
                    <li><a href="//www.havant.gov.uk/" target="_blank">Havant Borough Council</a></li>
                    <li><a href="//www.hants.gov.uk/" target="_blank">Hampshire County Council</a></li>
                    <li>IPA</li>
                    <li>Norse</li>
                    <li>P09 Publications</li>
                    <li><a href="/pages/design-print.php" target="_blank">Park Design &amp; Print</a></li>
                    <li><a href="//www.pfizer.co.uk/" target="_blank">Pfizer</a></li>
                    <li><a href="//www.portsmouthfc.co.uk/" target="_blank">Portsmouth Football Club</a></li>
                    <li>Rotary</li>
                    <li><a href="//sse.co.uk" target="_blank">SSE</a></li>
                    <li><a href="//www.tuppennybarn.co.uk/" target="_blank">Tuppenny Barn</a></li>
                </ul>
                <p>There are many ways in which you and your company can get involved from one off short talks to an extended commitment.</p>
                <ul>
                    <li>Mock interviews - spend some time interviewing very nervous students, then choosing your top applicant to "give the job" to.</li>
                    <li>Talks to students - my job role and how I got here</li>
                    <li>Hosting work experience students for two weeks in the summer term</li>
                    <li>Speed networking events - talk to small groups about your role and what skills and qualities you require</li>
                    <li>Discovery Days - taking a small group of Y9 on site giving them a taste of what it's like to work within your industry</li>
                    <li>Expert sessions – linking your industry to subjects in school – giving talks and assisting subject teachers about how the subject links into the world of work.</li>
                </ul>
                <p>Working with Park Community School will bring direct and tangible benefits:</p>
                <ul>
                    <li>Raising your profile</li>
                    <li>Developing the future workforce</li>
                    <li>Improving staff recruitment</li>
                    <li>Achieving your Corporate Social Responsibility objectives (CSR)</li>
                    <li>Use of our beautiful conference facilities for your training needs</li>
                    <li>Use of our design and print company providing quality printing</li>
                    <li>Moulding your future apprentices from as early as Y9</li>
                    <li>Networking through our ambassador club events</li>
                </ul>
                <p>If you would like to find out more about the possibility of becoming a business ambassador please contact us via Email: <a href="mailto:BusinessLinks@pcs.hants.sch.uk">Business Links</a>.</p>
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top">↑ Back to Top</a>
        </div>
    </div>
</section>

<!-- Resources -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3>More Resources</h3>
                <ul class="resource-grid">
                    <li><a href="/assets/policies/ceiag.pdf" target="_blank">CEIAG Policy</a></li>
                    <li><a href="//bespoke.careercompanion.co.uk/libraries/index" target="_blank">Careers Companion</a></li>
                    <li><a href="//ebpsouth.work-experience.co.uk/" target="_blank">EBP</a></li>
                    <li><a href="//www.fasttomato.com/">Fast Tomato</a></li>
                    <li><a href="//www.eclips-online.co.uk/">eClips</a></li>
                    <li><a href="//www.ucas.com/">UCAS</a></li>
                    <li><a href="//icould.com/buzz/">Buzz Quiz</a></li>
                    <li><a href="//www.prospects.ac.uk/">Prospects</a></li>
                    <li><a href="//www.sunoutreach.org/">Southern Universities Network</a></li>
                    <li><a href="//www.myworldofwork.co.uk/my-career-options/choosing-my-subjects">My World of Work</a></li>
                </ul>
            </div>
        </div>
        <div class="back-to-top">
            <a href="#top">↑ Back to Top</a>
        </div>
    </div>
</section>

<!-- MODALS (Foundation 6) -->

<!-- Prepare Modal -->
<div class="reveal large" id="careers-prepare" data-reveal>
    <h2>How do we prepare you for your next step?</h2>
    <p>At Park we have countless opportunities for our students to work with employers, further and higher education providers. All of our year 10 students undertake hands on work experience for two weeks in the summer term, building on smaller work experiences we offer to the younger year groups.</p>
    <p>Every student is given a 1:1 appointment with our Hampshire Futures Careers Adviser, where time is spent thinking about their next step and choosing a course, college or apprenticeship to suit them. They also have a chance to explore the labour market with a fully qualified Level 6 adviser ensuring they are making informed decisions about where their educational choices could lead them.</p>
    <p>Our Careers programme ensures all students are provided with opportunities to think about their strengths and weaknesses and how this could link to their futures in the world of work. All our subject departments are experts at linking their subjects to possible career paths and encourage our students to look to where their subject specialism could lead them.</p>
    <p>The careers programme is lead by Kirsty Jervis, the school's Career Leader, and is reviewed and adapted annually. <a href="/assets/policies/ceiag.pdf">The full Careers Education, Information, Advice and Guidance (CEIAG) Policy</a> can be viewed online. The next few pages will show you exactly what the students experience in each year group within our careers programme.</p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Gatsby Benchmarks Modal -->
<div class="reveal large" id="careers-gatsby" data-reveal>
    <h2>Gatsby Benchmarks</h2>
    <p>The Gatsby Benchmarks are now used to define the essentials of good career guidance in schools. The seven Gatsby Benchmarks are explained below. Schools are asked to use a compass tool to assess their progress to achieving the seven Gatsby Benchmarks and I am pleased to say Park Community School achieves very highly in each of the sections.</p>
    <ol>
        <li><strong>A STABLE CAREERS PROGRAMME</strong>
            <p>Every school and college should have an embedded programme of career education and guidance that is known and understood by students, parents, teachers and employers.</p>
        </li>
        <li><strong>LEARNING FROM CAREER AND LABOUR MARKET INFORMATION</strong>
            <p>Every student should have access to good quality information about future study options and labour market opportunities. They will need the support of an informed adviser to make the best use of available information.</p>
        </li>
        <li><strong>ADDRESSING THE NEEDS OF EACH STUDENT</strong>
            <p>Students have different career guidance needs at different stages. Opportunities for advice and support need to be tailored to the needs of each student. A school's careers programme should embed equality and diversity considerations throughout.</p>
        </li>
        <li><strong>LINKING CURRICULUM LEARNING TO CAREERS</strong>
            <p>All teachers should link curriculum learning with careers. For example, STEM subject teachers should highlight the relevance of STEM subjects for a wide range of career pathways.</p>
        </li>
        <li><strong>ENCOUNTERS WITH EMPLOYERS AND EMPLOYEES</strong>
            <p>Every student should have multiple opportunities to learn from employers about work, employment and the skills that are valued in the workplace. This can be through a range of enrichment opportunities including visiting speakers, mentoring and enterprise schemes.</p>
        </li>
        <li><strong>EXPERIENCE OF WORKPLACES</strong>
            <p>Every student should have first-hand experiences of the workplace through work visits, work shadowing and/or work experience to help their exploration of career opportunities and expand their networks.</p>
        </li>
        <li><strong>ENCOUNTERS WITH FURTHER AND HIGHER EDUCATION</strong>
            <p>All students should understand the full range of learning opportunities that are available to them. This includes both academic and vocational routes and learning in schools, colleges, universities and in the workplace.</p>
        </li>
        <li><strong>PERSONAL GUIDANCE</strong>
            <p>Every student should have opportunities for guidance interviews with a Careers Adviser. These should be available whenever significant study or career choices are being made.</p>
        </li>
    </ol>
    <p>Ref: <a href="//www.careersandenterprise.co.uk/schools-colleges/gatsby-benchmarks">Careers and Enterprise Gatsby Benchmarks</a></p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- A Levels Modal -->
<div class="reveal large" id="Alevels_Modal" data-reveal>
    <h2>A Levels</h2>
    <h4>What do I need for A-Levels?</h4>
    <ul>
        <li>At least 5 GCSE at grades 9 – 4 including English and Maths.</li>
        <li>Often you will need higher grades in the subjects you are choosing. E.g. you need a 9 – 7 in Maths GCSE to study A level Maths.</li>
    </ul>
    <h4>How Long?</h4>
    <p>A levels are a 2-year pathway.</p>
    <h4>How Many?</h4>
    <p>You would usually study 3 A levels in different subjects.</p>
    <h4>How are they assessed?</h4>
    <p>A-Levels are exam based and the majority of your final grade is achieved by examination at the end of your two-year study.</p>
    <h4>Why choose A-Levels?</h4>
    <ul>
        <li>A-Levels are a good way to keep your options open.</li>
        <li>In some colleges it is possible to combine an A-Level with a vocational qualification such as a BTEC Level 3.</li>
    </ul>
    <h4>How do I find out more?</h4>
    <ul>
        <li>Talk to your teachers or careers adviser – Candice (located in the careers office).</li>
        <li>Read local college prospectuses – all are now online as well as college applications.</li>
        <li>Talk to young people who have completed A Levels.</li>
        <li>Look at career ideas on <a href="//www.eclips-online.co.uk/" target="_blank">eClips</a> and <a href="//www.fasttomato.com/" target="_blank">Fast Tomato</a>.</li>
    </ul>
    <p>Further information can be found on <a href="//www.careerpilot.org.uk/information/your-choices-at-16/help-with-choosing-your-post-16-options" target="_blank">Career Pilot</a>.</p>
    <p>If you are considering university, we would always recommend you research degrees and check entry requirements using <a href="//www.ucas.com" target="_blank">UCAS</a>.</p>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Vocational Courses Modal -->
<div class="reveal large" id="Vocational_Modal" data-reveal>
    <h2>Vocational Courses</h2>
    <h4>What do I need for a vocational course?</h4>
    <p>Entry requirements vary depending on the level at which you study:</p>
    <ul>
        <li>You will need a positive school report (attendance; punctuality; behaviour)</li>
        <li>You will continue to study functional skills in English and maths</li>
    </ul>
    <p><strong>Level 3 (Advanced)</strong> – most courses require five grades at 4/5 or above including English and Maths. Some require 4/5 in a specific subject</p>
    <p><strong>Level 2 (Intermediate)</strong> – most courses require four grades 3 – 4 at GCSE if you do not have a 4/5 in English or Maths you will continue to work towards this alongside your course.</p>
    <p><strong>Level 1 (Foundation)</strong> - Some level 1 courses do not require any qualifications. For others you might need 2 grades 1 – 3 at GCSE.</p>
    <h4>How long?</h4>
    <p>This will depend on the level at which you study. Level 1 and 2 are 1-year courses and level 3 is a 2-year course.</p>
    <h4>How many?</h4>
    <p>You would usually study 1 vocational course however some colleges offer the opportunity to combine an A-Level with a vocational qualification such as a BTEC Level 3.</p>
    <h4>How are they assessed?</h4>
    <p>Most of the course is assessed via assignments however they do now have examined assessment for some courses.</p>
    <h4>Why choose a vocational course?</h4>
    <p>A student might choose a vocational course if they have decided on a certain career path and want to gain industry approved qualifications or further information on the career sector before entering the work place. E.g. Hairdressing, Beauty Therapy, Childcare, Motor Vehicle Engineering, Construction, Engineering etc.</p>
    <p>You may progress up the levels of your chosen qualification or move into employment or apprenticeship.</p>
    <h4>How do I find out more?</h4>
    <ul>
        <li>Talk to your teachers or careers adviser – Candice (located in the careers office)</li>
        <li>Read local college prospectuses – all are now online as well as college applications</li>
        <li>Talk to young people who have completed vocational qualifications</li>
        <li>Look at career ideas on <a href="//www.eclips-online.co.uk/" target="_blank">eClips</a> and <a href="//www.fasttomato.com/" target="_blank">Fast Tomato</a>.</li>
        <li>If you are considering university, <strong>we would always recommend you research degrees and check entry requirements</strong> using <a href="//www.ucas.com" target="_blank">UCAS</a>.</li>
    </ul>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Apprenticeships Modal -->
<div class="reveal large" id="Apprenticeship_Modal" data-reveal>
    <h2>Apprenticeships &amp; Degree Level Apprenticeships</h2>
    <h4>What are they?</h4>
    <ul>
        <li>Apprenticeships are a mixture of working (and earning) and learning. Just like college, there are apprenticeships for all levels of ability and qualifications.</li>
        <li>They range from "Intermediate" apprenticeships that may require anything from no qualifications to 5 GCSEs, to "Degree" apprenticeships.</li>
        <li>Apprenticeships are skills-based, flexible learning programmes and can take anything between 1 to 4 years to complete, depending on the level of difficulty involved and the ability of the apprentice.</li>
    </ul>
    <h4>Why choose an Apprenticeship?</h4>
    <ul>
        <li>Earn while you learn. Rates of pay vary, but the national minimum hourly wage is currently £3.50 per hour.</li>
        <li>You know what you want to do for a career and are keen to start getting qualified and gain the skills you need.</li>
        <li>You like the idea of working alongside experienced staff who will train you.</li>
        <li>You are confident and committed enough to face strong competition for an apprenticeship place and can pass the initial assessments.</li>
        <li>You are happy and able to work a minimum of 30 hours a week and study alongside this to gain your qualifications.</li>
        <li>You can now study at degree level and an apprenticeship is a good way to gain a degree level qualification without paying university fees.</li>
    </ul>
    <h4>Where can an Apprenticeship lead?</h4>
    <p>From an Apprenticeship you can go on to:</p>
    <ul>
        <li>Further professional training or continue to the next level apprenticeship</li>
        <li>Employment</li>
    </ul>
    <h4>How to find out more?</h4>
    <ul>
        <li>To search for apprenticeship vacancies on <a href="//www.getingofar.gov.uk" target="_blank">Get in Go Far</a>.</li>
        <li>For more information on degree level apprenticeships use the apprenticeship tab on www.ucas.com</li>
        <li>Talk to your teachers or careers adviser – Candice (located in the careers office)</li>
        <li>Find out more on Career Companion</li>
    </ul>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Higher Education Modal -->
<div class="reveal large" id="HigherEducation_Modal" data-reveal>
    <h2>Higher Education</h2>
    <h4>What is it?</h4>
    <ul>
        <li>HE provides a range of qualifications including honours degrees such as Bachelor of Arts (BA) or Bachelor of Science (BSc) courses.</li>
        <li>There are over 50,000 different courses available in over 300 universities, ranging from animation, astrophysics to languages, drama and zoology.</li>
        <li>Each has a different mix of theory and practical learning.</li>
        <li>Courses vary from two to five years, some can be studied part time.</li>
        <li>Most HE accept a wide range of level 3 qualifications, including A Levels and vocational qualifications – always check entry requirements as these vary from each university.</li>
        <li>You will need to pay tuition fees as well as for things like food and accommodation if studying away from home.</li>
    </ul>
    <h4>Why choose Higher Education?</h4>
    <ul>
        <li>Some jobs still require specific degree entry and are not currently available via a degree apprenticeship.</li>
        <li>You would like to continue your studies to a higher level.</li>
        <li>You will then have the opportunity to apply for vacancies advertised only to graduates.</li>
        <li>You would like to experience 'university life'.</li>
    </ul>
    <h4>Where will Higher Education lead?</h4>
    <ul>
        <li>Having a HE qualification gives you many employment options.</li>
        <li>You can also choose to continue studying for a Masters.</li>
        <li>Entry to specific careers of choice which require a degree qualification for entry.</li>
    </ul>
    <h4>How do I find out more?</h4>
    <ul>
        <li>Talk to your teachers or careers adviser – Candice (located in the careers office).</li>
        <li>Talk to young people who have followed this option.</li>
        <li><a href="//www.ucas.com/" target="_blank">UCAS</a> – look at the entry requirements for the courses you are interested in.</li>
        <li>Visit <a href="//www.gov.uk/browse/education/student-finance" target="_blank">Student finance</a>.</li>
        <li>Career Companion.</li>
        <li>Visit <a href="//www.prospects.ac.uk/" target="_blank">Prospects</a>.</li>
        <li>Visit open evenings/days at universities.</li>
    </ul>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php include('../partials/footer.php'); ?>