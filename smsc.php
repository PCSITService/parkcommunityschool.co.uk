<?php
$pageTitle = 'Park Community School | SMSC';
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
        font-size: 1.2rem;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ul,
    .content-section ol {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li,
    .content-section ol li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .content-section a {
        color: #F58220;
    }
    
    .content-section a:hover {
        color: #d96f1a;
    }
    
    .areas-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1.5rem 0;
    }
    
    .areas-box ul {
        margin-bottom: 0;
    }
    
    .areas-box li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .areas-box li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .curriculum-image {
        text-align: center;
        margin: 2rem 0;
    }
    
    .curriculum-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .button-row {
        text-align: center;
        margin: 1.5rem 0;
    }
    
    .button-row .button {
        background-color: #F58220;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        margin: 0.25rem;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .button-row .button:hover {
        background-color: #d96f1a;
        color: white;
        transform: translateY(-2px);
    }
    
    .topic-section {
        background: white;
        border-left: 4px solid #F58220;
        padding: 1.25rem 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    
    .topic-section strong {
        color: #F58220;
        font-size: 1.1rem;
    }
    
    .quote-box {
        background: #f8f9fa;
        border-left: 4px solid #F58220;
        padding: 1.25rem 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
        font-style: italic;
    }
    
    .quote-box cite {
        display: block;
        font-size: 0.9rem;
        color: #666;
        margin-top: 0.5rem;
        font-style: normal;
    }
    
    .enterprise-list {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1rem 0;
    }
    
    .enterprise-list ul {
        margin: 0;
    }
    
    .re-aims {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1.5rem 0;
    }
    
    .re-aims ol {
        margin: 0;
    }
    
    .useful-links {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .useful-links ul {
        margin: 0;
        list-style: none;
        padding: 0;
    }
    
    .useful-links li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .useful-links li:last-child {
        border-bottom: none;
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Spiritual, Moral, Social and Cultural (SMSC)</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Purpose</h3>
                <p>This is the overarching umbrella that encompasses personal development across our curriculum.</p>
                <p>SMSC is at the heart of life at Park. It requires students to think about the kind of people they aspire to be, the kind of futures they aspire to build for themselves and the kind of world they aspire to create.</p>

                <h3>Aims</h3>
                <p>To prepare students positively for life in modern Britain, through the promotion of British values, diversity, equality and tolerance of those with different faiths, beliefs and life choices. We also aim to enable students to develop their self-knowledge, self-esteem and self-confidence while giving them the ability to make good life choices and also encouraging them to accept responsibility for their behaviour, its consequences, and how they can contribute to the wider world. The programme also covers the 65 elements of the statutory RSE curriculum to ensure pupils are fully prepared to positively manage their relationship choices both within and beyond their time in school.</p>

                <h3>Areas of Study</h3>
                <p>Our approach to SMSC is divided into three main areas of study:</p>
                
                <div class="areas-box">
                    <ul>
                        <li><strong>Body and Mind</strong> – includes wellbeing, health, self-care, mental health, the dangers of drugs and alcohol, and keeping yourself safe</li>
                        <li><strong>Relationships</strong> – includes sexual and non-sexual relationships, coping with those relationships, consent, coercion, and sexual health</li>
                        <li><strong>Being a Global Citizen</strong> – careers, British values, cultural awareness, racism, homophobia, and e-safety</li>
                        <li><strong>Religious Studies</strong> – taught in discrete lessons</li>
                    </ul>
                </div>

                <p>These areas are underpinned by our work as a Rights Respecting School. In a Rights Respecting School, students have the opportunity to learn about the United Nations Convention on the Rights of the Child through House assemblies and student-led groups. As a Rights Respecting School, we not only teach our students about children's rights but we also model rights and respect in all our relationships: between staff, between staff and students, and between students.</p>

                <h4>'More Than Just a School' – An Expansive Curriculum</h4>

                <div class="curriculum-image">
                    <img src="assets/curriculum/science/SMSC.jpg" alt="Expansive Curriculum">
                </div>

                <div class="topic-section">
                    <p><strong>Assemblies</strong> – At Park Community School we have weekly school, year and House assemblies where students gather together for a common purpose. A wide variety of areas are covered which are closely matched in content to different areas of the curriculum. There are common termly themes throughout the year which are underpinned by specific local, British or worldwide celebration and awareness days. This means that there is coherence to the delivery of SMSC across the school as a community.</p>
                </div>

                <div class="button-row">
                    <a href="/assemblies.php" class="button">Assemblies</a>
                    <a href="/religious-education.php" class="button">RE Curriculum</a>
                </div>

                <div class="topic-section">
                    <p><strong>Butterfly Broadcasts</strong> – This is a broadcast, which lasts around 4 minutes, shown during the week in a Personal Development slot. It covers the local, national and international news of the day. It is an important feature of the week as it allows students to consider current affairs, broadening their knowledge of the world around them.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Mentoring</strong> – Mentors have a specific slot during the Tuesday amphitheatre time where they mentor students on a one-to-one basis. These sessions focus on academic achievement and progress as well as community and extra-curricular involvement. It is an essential part of life at Park as we believe that good solid relationships should be forged between at least one adult and student during their time at school. This means that they always feel safe and supported in the school environment. Mentors also have opportunities to meet for one-to-one sessions with students and their parents at the two Student Review Days held at the start of each academic year and at the mid-point in February.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Personal Development</strong> – In these daily lessons students work with their mentors. The sessions are divided into three types:</p>
                    <ol>
                        <li><strong>Reading</strong> – Monday to Thursday. A programme for each year group will cover the key areas of reading aloud, reading in your head and being read to. Students will explore a range of texts from reading lists designed to develop cultural capital as well as selecting their own reading material from the library. Students will develop their active reading skills through the completion of a reading journal.</li>
                        <li><strong>Mentor Maths</strong> – a weekly class quiz covering different elements of maths, focussing on practising mathematical fluency.</li>
                        <li><strong>Personal Development (SMSC)</strong> – this is a slightly longer weekly discussion-based session. Here students cover issues related to Britishness and Culture (including Citizenship), Careers and Enterprise, Health and Well-being, and Relationships and Sex Education.</li>
                    </ol>
                </div>

                <div class="topic-section">
                    <p><strong>Challenge Days</strong> – Challenge days are whole days off curriculum where students learn and take part in activities that are over and above their normal working day, working on SMSC topics in greater depth. The topics covered include Britishness, tolerance, relationships education, citizenship, making informed choices with regards to alcohol and drugs as well as making good career choices. Challenge days are often supported by outside speakers with specialist knowledge and/or real-life experiences in the fields that they are exploring. The days provide invaluable opportunities for students to work outside of their normal comfort zones, which helps to develop their confidence.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Student Voice</strong> – Weekly meetings with the Student Voice Committee and monthly whole school representation gives all students the opportunity to have a voice on subjects that they feel strongly about, whether in school or the wider community. All students' opinions matter and we endeavour to be non-judgemental, giving students the chance to feel heard and have action taken as a result.</p>
                    <p>We like to be a supportive and slightly critical friend to our wonderful school. We are also linked to the Portsmouth University Unloc and Gosport and Fareham Unloc Forums and attend their bi-annual meetings where we represent the views and opinions of our school. The Student Voice Committee take their role very seriously and all meetings are minuted and sent to all staff, students and governors. The students on the committee are interviewed and include head students and prefects.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Ambassadors</strong> – Students have the opportunities to be Ambassadors for Sports, Food and iSTEM.</p>
                    
                    <p><em>Sports Ambassadors:</em> We have 150 Sports Ambassadors from Year 7 to Year 11. Sports Ambassadors have to have a practical interview and write an application. They are interviewed and selected by other Sports Ambassadors. The aim is to build confidence and develop self-esteem, and most importantly to be an excellent role model for the school. Once selected, students have compulsory training every Tuesday after school. They are then introduced to every Primary School in the area, where they officiate at every Sports Day and on a weekly basis deliver lessons, ranging from Gymnastics, Dance and Games to Outdoor Pursuits and Athletics. They have the opportunity to excel in all areas by giving them freedom to teach sports under supervision.</p>
                    
                    <p>The ambassadors also deliver the Young Leader Award to 20 students from each school and as a follow-on these students become Sports Ambassadors at Park. They also supervise at the Mountbatten Centre the Primary Schools Athletics Competition, Swimming Galas, Inclusive Competitions and Emsworth Cricket Festival. They have the opportunity to be nominated for Sports Ambassador of the Year and also to be part of the Dame Kelly Holmes Trust AQA Unlocking Potential Scheme. They learn to be organised, think on their feet, deal with health and safety issues, communicate clearly and be positive and upbeat when delivering sessions. It really is a wonderful experience for them.</p>
                    
                    <p><em>Food Ambassadors:</em> We have around 15 Food Ambassadors who meet with our catering team each week to help them understand what our students want in terms of food. In addition, the ambassadors have the opportunity to work alongside our multi-award-winning Head Chef and his award-winning catering team to deliver food for every occasion. Ambassadors meet for after-school clubs when the students have the opportunity to work in our professional kitchen or off-site with local businesses.</p>
                    
                    <p>Students also have the chance to work with the catering team at our school farm learning more about our field-to-fork mentality. This helps them to understand where their food comes from and what they are eating.</p>
                    
                    <p><em>iSTEM Ambassadors:</em> These meet every Wednesday after school for Year 7 &amp; 8 and Year 9s on Thursdays. Students are involved in multiple STEM-focused projects and competitions to enthuse and inspire them to pursue science, technology, engineering and maths careers. For example, a recycling project in school where plastic drink bottle tops are shredded and melted to make products such as flower pots, which can be sold to the public. Some of the products have been entered into the BP Ultimate STEM Challenge. We also run iSTEM parents sessions, which involve iSTEM ambassadors working alongside parents to create keepsake items such as Christmas decorations made from recycled materials.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Enterprise</strong> – Students are taught the capabilities of Enterprise through a range of activities that take place at our extended facilities. These capabilities allow our students to be creative, innovative, make decisions and build self-confidence. The enterprise curriculum allows students to learn how to manage resources, work with others, manage risk and to be effective communicators. Our enterprise curriculum aims to develop the employability and soft skills that underpin the hard skills and qualifications students can gain.</p>
                    
                    <div class="enterprise-list">
                        <p><strong>The activities include:</strong></p>
                        <ul>
                            <li><strong>Park Design and Print (PDP)</strong> – an introduction to setting up a small business. Students learn how a small business operates, spending time with each department: sales, design, production and admin.</li>
                            <li><strong>PDP Design Project</strong> – students work with our professional graphic designer to create a bespoke t-shirt, from start to finish, and then turn the design into reality.</li>
                            <li><strong>Park Farm Plant and Grow Project</strong> – an introduction to horticulture, learning about planting cycles and suitable crops.</li>
                            <li><strong>Park Farm Animal Husbandry</strong> – an introduction to looking after farm animals in the correct way, including feeding, general care and health.</li>
                            <li><strong>Park Kitchen</strong> – students are given the opportunity to experience working in our commercial kitchen. The experience covers health and safety and who does what to make a commercial kitchen run smoothly and efficiently to produce great food for large numbers.</li>
                            <li><strong>Apex Centre</strong> – an introduction to some of the different areas of construction which will include skills such as bricklaying, plastering, painting and decorating, and joinery.</li>
                        </ul>
                    </div>
                </div>

                <div class="topic-section">
                    <p><strong>Houses</strong> – The overall aim of the House system is to connect all year groups within the school, providing them with the opportunity to further develop skills and experiences to become confident and well-rounded individuals. Houses aim to get students to work to help each other build confidence through collaboration, persevering through a task, taking risks as a group to achieve a common goal and learning to be enquiring and creative in a safe atmosphere. Houses do this by providing House members with enjoyable and competitive House events as well as learning about the UNCRC and raising awareness of those in need.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Careers (Information, Advice and Guidance)</strong> – Students learn about the world of work and the range of opportunities open to them after their time at Park. We work very closely with local employers through our career-related sessions with EBP. We offer careers fairs, speakers, college taster days and university residentials including Oxford/Cambridge, and mock interviews with local employers. All students can have a 1:1 personal careers appointment with our trained independent impartial careers adviser. All students also undertake two weeks' work experience during Year 10.</p>
                </div>

                <div class="topic-section">
                    <p><strong>Religious Studies</strong> – 'To explore what it means to exist as a human being in today's world'</p>
                    
                    <div class="re-aims">
                        <ol>
                            <li>To allow students to consider the 'big questions', ethical, philosophical and spiritual, for themselves and so develop their own sense of purpose, meaning and place in the world. To allow them space to respond as unique individuals to the plurality within the classroom and society in relation to these questions.</li>
                            <li>To develop acceptance of difference and diversity and an awareness of the form our society takes and so leave as effective participants in a plural democracy.</li>
                            <li>To leave Park with a qualification in RE demonstrating secure knowledge and understanding of the issues and worldviews studied.</li>
                        </ol>
                    </div>

                    <div class="quote-box">
                        <p>"…entails teachers bringing children and young people first to attend to their own experience and that of others, to engage intellectually with material that is new and to discern with others what is valuable with regard to living a religious life or one informed by a non-religious or other perspective..."</p>
                        <cite>Living Difference III, The Agreed Syllabus for Hampshire, Portsmouth, Southampton and the Isle of Wight 2016</cite>
                    </div>

                    <p>At Park Community School, we aim to help students to develop a curiosity regarding the world around them, to attend to issues important in exploring what it means to exist as a human being in the world today. RE offers students the opportunity to explore questions of meaning for them as individuals, and to develop a greater sense of personal identity and purpose, a greater sense of their place in the world and what that world should be like.</p>

                    <p>Park Community School encourages students to value themselves and others, respecting different religions, cultures and attitudes. RE is not about promotion of a particular view but about challenging assumptions and exploration of life's questions in relation to, and in collaboration with, others.</p>

                    <div class="quote-box">
                        <p>"Religious education in Hampshire, Portsmouth, Southampton and the Isle of Wight intends to play an educative part in the lives of children and young people as they come to speak, think and act in the world."</p>
                        <cite>Living Difference III, The Agreed Syllabus for Hampshire, Portsmouth, Southampton and the Isle of Wight 2016</cite>
                    </div>

                    <p>Students are encouraged to reflect on a range of individual, school, local, national and world issues in order to develop a vision for their future and the future of others. It is our hope that our students recognise the importance of their own creativity in improving the quality of life not only for themselves but also for future generations.</p>

                    <p>Additionally, RE allows the development of rigorous, critical and analytical thinking and argumentation in the evaluation of particular concepts and ways of experiencing the world. Therefore, we aim to foster students' ability to reason, to avoid making assumptions or taking information at face value.</p>

                    <p>The school provides Religious Education for all students in accordance with the agreed Hampshire syllabus called '<a href="https://www.hants.gov.uk/educationandlearning/hias/curriculum-support/living-difference-re-syllabus" target="_blank">Living Difference III</a>'. This gives students the opportunity to explore a range of religious traditions, cultures and worldviews alongside developing their own in response to these. While a variety of perspectives will be investigated including secular traditions such as Humanism, the curriculum is mainly Christian based. This is to reflect the national and local character of religious belief, and to acknowledge the role that this religious tradition has had in underpinning the development of British values, laws and attitudes.</p>

                    <p>The way in which such worldviews are explored acknowledges that such questions can be answered in a number of qualitatively different ways. These include subscription to a set of propositional beliefs, to follow certain practices and traditions, and to have a particular way of existing or being in the world.</p>

                    <p><strong>Additional Aims:</strong></p>
                    <ul>
                        <li>Developing a broader cultural capital</li>
                        <li>The promotion of SMSC</li>
                        <li>The promotion of British values in line with government requirements</li>
                        <li>Developing resilience to radicalisation and extremism in accordance with the 'Prevent Duty' 2015</li>
                    </ul>
                </div>

                <h4>SMSC Implementation Map</h4>
                <p><a href="assets/curriculum/smsc.pdf" target="_blank">Our SMSC Curriculum</a></p>

                <div class="useful-links">
                    <p><strong>Useful Links:</strong></p>
                    <ul>
                        <li><a href="https://hampshirecamhs.nhs.uk" target="_blank">Hampshire CAMHS</a></li>
                        <li><a href="https://www.safe4me.co.uk" target="_blank">Safe4me</a></li>
                        <li><a href="https://www.careforthefamily.org.uk/family-life/parent-support" target="_blank">Care for the Family – Parent Support</a></li>
                        <li><a href="https://www.parentsupportlink.org.uk" target="_blank">Parent Support Link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>