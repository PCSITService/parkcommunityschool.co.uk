<?php
$pageTitle = 'Park Community School | Physical Education';
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
        margin-bottom: 0.25rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
        opacity: 0.9;
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
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .button-row {
        text-align: center;
        margin: 1.5rem 0 2rem;
    }
    
    .button-row .button {
        background-color: #F58220;
        color: white;
        padding: 0.75rem 1.5rem;
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
    }
    
    /* Results Box */
    .results-box {
        background: linear-gradient(135deg, #f8f9fa, #fff);
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .results-box h4 {
        color: #F58220;
        margin-top: 0;
        margin-bottom: 1rem;
    }
    
    .results-box p {
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .results-box em {
        color: #666;
    }
    
    /* Accordion */
    .accordion {
        list-style: none;
        margin: 2rem 0;
        padding: 0;
    }
    
    .accordion-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 0.75rem;
        overflow: hidden;
    }
    
    .accordion-header {
        background: #f8f9fa;
        padding: 1rem 1.5rem;
        cursor: pointer;
        font-weight: 600;
        color: #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .accordion-header:hover {
        background: #F58220;
        color: white;
    }
    
    .accordion-header::after {
        content: '+';
        font-size: 1.5rem;
        font-weight: 300;
    }
    
    .accordion-item.active .accordion-header::after {
        content: '−';
    }
    
    .accordion-item.active .accordion-header {
        background: #F58220;
        color: white;
    }
    
    .accordion-content {
        display: none;
        padding: 1.5rem;
        background: white;
    }
    
    .accordion-item.active .accordion-content {
        display: block;
    }
    
    .accordion-content p {
        margin-bottom: 1rem;
    }
    
    .accordion-content table {
        width: 100%;
        border-collapse: collapse;
        margin: 1rem 0;
    }
    
    .accordion-content th {
        background: #F58220;
        color: white;
        padding: 0.75rem;
        text-align: left;
    }
    
    .accordion-content td {
        padding: 0.75rem;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .accordion-content blockquote {
        background: #f8f9fa;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1rem 0;
        border-radius: 0 8px 8px 0;
        font-style: italic;
    }
    
    .accordion-content blockquote cite {
        display: block;
        margin-top: 0.75rem;
        font-style: normal;
        font-weight: 600;
        color: #F58220;
    }
    
    /* Tables Grid */
    .tables-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        margin: 1.5rem 0;
    }
    
    /* After Park Grid */
    .after-park-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin: 2rem 0;
        list-style: none;
        padding: 0;
    }
    
    .after-park-grid li {
        text-align: center;
    }
    
    .after-park-grid a {
        display: block;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease;
    }
    
    .after-park-grid a:hover {
        color: #F58220;
    }
    
    .after-park-grid img {
        width: 100%;
        max-width: 300px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .after-park-grid a:hover img {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    
    .after-park-grid p {
        margin-top: 1rem;
        font-weight: 500;
    }
    
    /* Revision Resources */
    .revision-resources {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        margin: 2rem 0;
        list-style: none;
        padding: 0;
    }
    
    .revision-card {
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .revision-card:hover {
        border-color: #F58220;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .revision-card .title {
        background: #F58220;
        color: white;
        padding: 1rem;
        font-weight: 600;
        text-align: center;
    }
    
    .revision-card .isbn {
        background: #f8f9fa;
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
        color: #666;
        text-align: center;
    }
    
    .revision-card .features {
        padding: 1rem;
        list-style: none;
        margin: 0;
    }
    
    .revision-card .features li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #f0f0f0;
        font-size: 0.9rem;
    }
    
    .revision-card .features li:last-child {
        border-bottom: none;
    }
    
    .revision-card .buy-button {
        padding: 1rem;
        text-align: center;
    }
    
    .revision-card .buy-button a {
        display: block;
        background: #F58220;
        color: white;
        padding: 0.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .revision-card .buy-button a:hover {
        background: #d96f1a;
    }
    
    /* Handbook */
    .handbook-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        margin: 2rem 0;
        text-align: center;
    }
    
    .handbook-section h3 {
        margin-top: 0;
    }
    
    .handbook-link img {
        max-width: 150px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transition: all 0.3s ease;
    }
    
    .handbook-link:hover img {
        transform: scale(1.05);
    }
    
    /* Clubs Image */
    .clubs-image {
        text-align: center;
        margin: 1.5rem 0;
    }
    
    .clubs-image img {
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 768px) {
        .tables-grid,
        .after-park-grid {
            grid-template-columns: 1fr;
        }
        
        .revision-resources {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>PE</h1>
                <p>Physical Education</p>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">PE</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p>As a department we aim to create an inspirational working environment for both staff and students, where, together, we strive to actively engage students in learning. Participation and achievement are measured, monitored and celebrated. By the end of their physical education at Park, students should have developed a personal commitment to, and genuine passion for, maintaining their health and well-being into adult life.</p>
                
                <p>During Key Stage 3 and 4 core PE the department aim to inspire students to be active and engaged in a range of sports and activities contributing to an active healthy lifestyle. This is achieved by offering routeways to personalised learning and promoting physical activity – for example, competitive sports versus health related fitness.</p>
                
                <p>Within Key Stage 4 examination PE we endeavour to develop depth of knowledge in areas of sport and fitness, aiding success through the implementation of revision strategies for unit focus. We link practical and theory to apply knowledge, ensuring feedback is given constantly – both verbally and in writing throughout tasks. Progress is tracked and visible to all throughout lessons. Summative feedback is assigned with an expectation of independent application with a 15-day improvement window. A comprehensive revision guide is produced by the department and given to all students to support independent preparation for exams.</p>
                
                <p>In summary, our core curriculum offers students ownership of their physical education experience at Park, allowing each student to select the most suitable routeway for themselves. This may be through a highly competitive sports route, with specific focus on examination criteria and a high level of execution of key skills; through a traditional PE experience; or through an alternative health related fitness programme. The latter allows students to develop in-depth knowledge of body systems, components of fitness and methods of training through a range of fitness activities such as Zumba, yoga or circuit training – with a view that this empowers the students to continue practical involvement outside of education.</p>

                <h3>Implementation</h3>
                <div class="button-row">
                    <a href="/assets/curriculum/pe/implementation.pdf" target="_blank" class="button">View our Implementation Table</a>
                    <a href="/assets/curriculum/pe/ks-3-learning-journey.pdf" target="_blank" class="button">Key Stage 3 Learning Journey</a>
                    <a href="/assets/curriculum/pe/ks-4-learning-journey.pdf" target="_blank" class="button">Key Stage 4 Learning Journey</a>
                </div>

                <h3>Impact</h3>
                <p>All students will study sport at Park and within this they will develop a clear understanding of where to go next with assignments – this is shared within all lessons (pass criteria to merit, merit to distinction, etc.). We promote accountability through strict deadlines and the sharing of each student's assignment completions, grade and actions to achieve projection (or higher). The department develops independence through structured stuck resources and models used within lessons and available to students through a shared platform.</p>
                
                <p>Through our structured curriculum and precise delivery of theory content, examination outcomes have seen superb improvements over recent years with students becoming highly confident in unit content and assignment application.</p>
                
                <div class="results-box">
                    <h4>Examination Results</h4>
                    <p><strong>2023:</strong> 98% Pass - Distinction* <em>(12 Distinction*, 15 Distinctions, 51 Merits, 60 Pass)</em></p>
                    <p><strong>2022:</strong> 92.7% Pass - Distinction* <em>(19 Distinction*/Distinctions, 46 Merits, 129 Pass)</em></p>
                    <p><strong>2021:</strong> 98.7% Pass - Distinction* <em>(11 Distinction*, 47 Distinctions, 68 Merits, 60 Pass)</em></p>
                    <p><strong>2020:</strong> 98.7% Pass - Distinction* <em>(4 Distinction*, 36 Distinctions, 49 Merits, 74 Pass)</em></p>
                    <p><strong>2019:</strong> 100% Pass - Distinction* <em>(66 Distinction*, 23 Distinctions, 36 Merits, 19 Pass)</em></p>
                    <p><strong>2018:</strong> 100% Pass - Distinction* <em>(63 Distinction*, 17 Distinctions, 54 Merits, 20 Pass)</em></p>
                    <p><strong>2017:</strong> 98% Pass - Distinction*</p>
                </div>
                
                <p>Through our involvement of the students in their own learning, practical and physical improvement and development are evident within core PE. We experience increased participation and enjoyment seen through high levels of engagement in their personally chosen routeway within the subject. Students arrive to lessons with full PE kit and positive attitudes towards the lessons. This is seen through student voice surveys and lesson observations. Our curriculum allows connectedness between practical improvement and secured theory knowledge through deep thinking, high challenge and precise knowledge. Improvement in practical ability is not only seen within their chosen routeway activities but also measured through regular fitness testing throughout the year so students are able to celebrate their individual development at regular intervals.</p>

                <!-- ACCORDION -->
                <ul class="accordion">
                    <li class="accordion-item">
                        <div class="accordion-header">Teaching and Learning in PE</div>
                        <div class="accordion-content">
                            <p>PE lessons will take many forms which will engage and challenge students. PE teachers will use a combination of drill and game approaches to ensure that students understand the requirements of certain sports and physical activities. Key skills such as leadership, teamwork and positive communication are encouraged throughout, and students will frequently be expected to problem solve as part of a group to overcome a scenario provided to them.</p>
                            <p>Students who want to improve further will be encouraged to attend extra-curricular opportunities, and at times be asked to represent the school across a number of sports. Those students that are outstanding performers may be asked to take on leadership roles within lessons, with the opportunity to be part of the sports ambassador programme.</p>
                        </div>
                    </li>
                    
                    <li class="accordion-item">
                        <div class="accordion-header">Assessment and Feedback</div>
                        <div class="accordion-content">
                            <p><strong>Key Stage 3:</strong></p>
                            <p>Multiple choice testing will take place half termly with structured end of unit/topic teacher assessment, focusing on specific theory content which is mapped across the year to establish a basic understanding of key elements (muscles, body systems, components of fitness and methods of training). Teacher assessment will also be conducted half termly to assess practical performance in each discipline.</p>
                            <p>Feedback is given as regular verbal feedback throughout practical lessons. Students will be able to identify working levels and how to improve through verbal feedback and practical application. Models are used through teacher and student demonstrations enabling improvement of performance analysis.</p>
                            
                            <p><strong>Core PE:</strong></p>
                            <div class="tables-grid">
                                <table>
                                    <tr><th>Practical Assessments</th></tr>
                                    <tr><td>Frequent verbal feedback given to all students from both teaching staff and coaching from peers.</td></tr>
                                    <tr><td>End of half term moderation week to assess in formal conditions the application of skill and understanding.</td></tr>
                                    <tr><td>Use of iPads in small groups to self review and assess performance.</td></tr>
                                    <tr><td>Use of practical exam board criteria to grade skill level.</td></tr>
                                </table>
                                <table>
                                    <tr><th>Multiple Choice Testing</th></tr>
                                    <tr><td>Once a fortnight.</td></tr>
                                    <tr><td>Content delivered to all groups through practical – relating to BTEC criteria and link to real world context.</td></tr>
                                    <tr><td>Students are given a list of topics to revise through on HW forum and handouts.</td></tr>
                                    <tr><td>Follow up activities – class led and individual.</td></tr>
                                    <tr><td>Revision drop-in sessions.</td></tr>
                                </table>
                            </div>
                            
                            <p><strong>Key Stage 4:</strong></p>
                            <p>Online exams are completed in BTEC Sport by students to ensure unit achievement – this is through developed knowledge from KS3 theory input. Practical assessment is completed through BTEC criteria of Pass / Merit in relation to performance and application of skills within practice and competitive situations.</p>
                            <p>A tracker is used throughout every lesson for immediate feedback on progress to course / unit completion and to what grade. Students can reflect on current working grade compared to projection and are able to then implement feedback and next step criteria effectively. Further feedback takes place after students have completed units of work at the end of each term/deadline which they are then issued this feedback form and 15 days to implement improvements.</p>
                            <p>Regular feedback is given in books and on summative assessment forms at the end of units/assignments. It is also seen every lesson through verbal diagnostic conversations with suggested improvements. Books show specific feedback which stretch the level of understanding which is also specific to the attainment criteria for that task. Exemplar assignments are used throughout the course to promote independence and implementation of "I do, you do, we do". This is measured through progress on the class tracker and shown in improved work within portfolios.</p>
                            
                            <p><strong>Year 10-11 Examination PE:</strong></p>
                            <div class="tables-grid">
                                <table>
                                    <tr><th>Practical Assessments</th></tr>
                                    <tr><td>Frequent verbal feedback.</td></tr>
                                    <tr><td>Use of iPads to compare performance to high level performance.</td></tr>
                                    <tr><td>Self analysis of performance.</td></tr>
                                    <tr><td>Half term assessment and moderation weeks.</td></tr>
                                    <tr><td>Use of practical exam board criteria to grade skill level.</td></tr>
                                </table>
                                <table>
                                    <tr><th>Testing and Coursework</th></tr>
                                    <tr><td>Online tests for unit content.</td></tr>
                                    <tr><td>Mocks used (paper based) to assess retention of content.</td></tr>
                                    <tr><td>Strict coursework deadlines, marking and resubmission (15 day window).</td></tr>
                                    <tr><td>Assessment tracked and displayed to students to see progress and current attainment score/grade.</td></tr>
                                    <tr><td>Feedback given in books and through summative assessment forms.</td></tr>
                                </table>
                            </div>
                        </div>
                    </li>
                    
                    <li class="accordion-item">
                        <div class="accordion-header">Participation</div>
                        <div class="accordion-content">
                            <p>All students are given the opportunity to participate in after school clubs, irrespective of their experience or ability.</p>
                            <p>The department have been recognised by National School Sports Awards gaining both Silver and Gold Awards for their sporting opportunities for young people over the last two years.</p>
                            <p>Our fitness clubs run every evening with an average of 20 students attending each session. We participate in area competitions/leagues with teams for each year group in the following sports: Netball, Football, Basketball, Volleyball, Athletics, Cross Country, Badminton and Dodgeball.</p>
                        </div>
                    </li>
                    
                    <li class="accordion-item">
                        <div class="accordion-header">Destinations</div>
                        <div class="accordion-content">
                            <p>Our subject has seen an increase in not only student enjoyment but student successes over recent years. There has been a considerable increase in the number of students who continue to study sports related qualifications after Park at either Havant or South Downs Colleges.</p>
                            <p>The department has very positive relationships with various further education and higher education facilities (Havant, South Downs and Chichester University). This enables the opportunity for many young people's study of sports courses to continue to develop and the ability to work within our team on placements.</p>
                            <p>We have recently accommodated 2 previous Park Community students who are currently studying a degree in 'Physical Education in Secondary Years' at Chichester University, with a plan to then complete PGCE qualifications in PE. We have also worked with an additional 6 students studying 'BTEC Level 3 in Sport and Fitness' at South Downs through work experiences enabling them to enrich their university applications with in-school experience.</p>
                        </div>
                    </li>
                    
                    <li class="accordion-item">
                        <div class="accordion-header">Student Voice</div>
                        <div class="accordion-content">
                            <blockquote>
                                "PE at Park is so different to my old school. The PE teachers have fun with you and join in to help you play better sometimes. They tell you how to improve, let your friends give feedback and we use the iPads to watch professionals and compare ourselves. I really like all the clubs we can do after school as well. I am going to join the Football and Basketball teams."
                                <cite>Alfie, Year 7</cite>
                            </blockquote>
                            
                            <blockquote>
                                "I enjoy PE because we can develop skills in our chosen sports and develop our overall health. We can see how much we have improved with fitness testing."
                                <cite>Asha, Year 9</cite>
                            </blockquote>
                            
                            <blockquote>
                                "I really like that I got to choose the types of activities I complete. I chose HRE, health related exercise. I have really liked doing Aerobics and Zumba because I enjoy independent activities a lot more than invasion games."
                                <cite>Chloe, Year 9</cite>
                            </blockquote>
                            
                            <blockquote>
                                "Within PE we are always very active. The PE department push you to work hard but in a positive way. They reward us loads for hard work and celebrate our achievements in assemblies, on social media, display boards and in assemblies all the time. I really like that because it feels good to know your effort is noticed."
                                <cite>Jake, Year 8</cite>
                            </blockquote>
                            
                            <blockquote>
                                "Theory lessons are demanding. You are given sporting scenarios and assignments that relate to them. Then you learn a lot of content through the PE department in theory and practical lessons which will help you to apply it to the assignment set. This is marked and you get opportunities to improve these. You always know the grade you are working at and it's clear how you can improve. I like the link that is made between the practical and theory lessons."
                                <cite>Ben, Year 11</cite>
                            </blockquote>
                        </div>
                    </li>
                    
                    <li class="accordion-item">
                        <div class="accordion-header">Dictionary of Terms</div>
                        <div class="accordion-content">
                            <table>
                                <tr>
                                    <th>Assessment/Command Word</th>
                                    <th>Definition</th>
                                </tr>
                                <tr><td colspan="2"><strong>Pass Command Words</strong></td></tr>
                                <tr><td>List</td><td>Write a list of the main items (not sentences).</td></tr>
                                <tr><td>State</td><td>Point out or list the main features.</td></tr>
                                <tr><td>Define</td><td>To state the meaning of something using the correct terms.</td></tr>
                                <tr><td>Identify</td><td>Give all the basic facts which relate to a topic.</td></tr>
                                <tr><td>Outline</td><td>Write a clear description but without going into too much detail.</td></tr>
                                <tr><td>Demonstrate</td><td>Show that you can do a particular activity or skill.</td></tr>
                                <tr><td>Explain</td><td>Make your point clear by providing sufficient detail.</td></tr>
                                <tr><td>Describe</td><td>Give a clear, straightforward description which includes all of the main points.</td></tr>
                                <tr><td>Summarise</td><td>Write down or articulate briefly the main points or essential features.</td></tr>
                                <tr><td colspan="2"><strong>Merit Command Words</strong></td></tr>
                                <tr><td>Discuss</td><td>To present an argument for and against.</td></tr>
                                <tr><td>Explain</td><td>Give logical reasons to support your view.</td></tr>
                                <tr><td>Describe</td><td>Give a full description including details of all the relevant features.</td></tr>
                                <tr><td>Demonstrate</td><td>Prove you can carry out a more complex activity.</td></tr>
                                <tr><td>Analyse</td><td>Identify the factors that apply, and state how these are linked and how each of them relates to the topic.</td></tr>
                                <tr><td>Justify</td><td>Give reasons for the points you are making so that the marker knows how you arrived at that conclusion.</td></tr>
                                <tr><td>Suggest</td><td>Give your own ideas and thoughts.</td></tr>
                                <tr><td colspan="2"><strong>Distinction Command Words</strong></td></tr>
                                <tr><td>Assess</td><td>Evaluate in terms of advantages and disadvantages.</td></tr>
                                <tr><td>Analyse</td><td>Identify several relevant factors, show how they are linked, and explain the importance of each.</td></tr>
                                <tr><td>Evaluate</td><td>Bring together all of your information and make a judgement on the importance or success of something.</td></tr>
                                <tr><td>Recommend</td><td>Suggest changes or improvements.</td></tr>
                                <tr><td>Make recommendations</td><td>Make relevant and appropriate suggestions; usually for improvement.</td></tr>
                                <tr><td>Select and demonstrate</td><td>Select several relevant examples or pieces of related evidence which clearly support the arguments you are making. This may include showing particular practical skills.</td></tr>
                                <tr><td>Review</td><td>Consider each factor in turn, providing a description and explanation of their uses, strengths and weaknesses, making recommendations.</td></tr>
                            </table>
                            <div class="button-row" style="margin-top: 1.5rem;">
                                <a href="/assets/curriculum/pe/pe_dictionary.pdf" target="_blank" class="button">Full Dictionary - Glossary - Key Words</a>
                            </div>
                        </div>
                    </li>
                </ul>

                <h3>Additional Opportunities</h3>
                <ul>
                    <li>Sports ambassador programme allowing students to develop their ability to coach and support students within our school, local junior schools and area competitions.</li>
                    <li>Invitations to a wide variety of after school clubs and events.</li>
                    <li>Representative opportunities in all area sports.</li>
                    <li>Selection opportunities to represent the district and county in various sports.</li>
                    <li>Sports development programme through a selection process run by two high level sports performers.</li>
                    <li>Involvement in the Duke of Edinburgh Award.</li>
                    <li>Sports captains for inter-family sport and Park's Festival of Sport (Sports Day).</li>
                    <li>Race at our Place for Cancer Research.</li>
                    <li>Off-site opportunities with the department through OAA orienteering and Cross Country.</li>
                </ul>

                <h3>Extra Curricular Sporting Opportunities</h3>
                <div class="clubs-image">
                    <img src="assets/curriculum/pe/pe-after-school-clubs-ht6.jpg" alt="PE After School Clubs">
                </div>

                <h3>After Park PE - What's Next?</h3>
                <ul class="after-park-grid">
                    <li>
                        <a href="assets/curriculum/pe/sporting-future.pdf" target="_blank">
                            <img src="assets/curriculum/pe/sporting-future.jpg" alt="Sporting Future">
                            <p>Sporting Future - Jobs in the Sports Industry</p>
                        </a>
                    </li>
                    <li>
                        <a href="assets/curriculum/pe/where-next.pdf" target="_blank">
                            <img src="assets/curriculum/pe/where-next.jpg" alt="Where Next">
                            <p>Where Next - Studying Sport at College and University</p>
                        </a>
                    </li>
                </ul>

                <div class="handbook-section">
                    <h3>PE Department Handbook</h3>
                    <p>Please click below to view department guidance:</p>
                    <a href="assets/curriculum/pe/handbook.pdf" target="_blank" class="handbook-link">
                        <img alt="PE Handbook" src="assets/curriculum/pe/handbook.jpg">
                    </a>
                </div>

                <h3>BTEC Specifications</h3>
                <p>Click below to view the specifications for BTEC Sport:</p>
                <div class="button-row">
                    <a href="https://qualifications.pearson.com/content/dam/pdf/btec-tec-awards/sport/2022/specification-and-sample-assessments/btec-tech-award-sport-spec.pdf" target="_blank" class="button">Pearson BTEC Sport Specification</a>
                </div>

                <h3>Supportive Guides for Revision</h3>
                <ul class="revision-resources">
                    <li>
                        <div class="revision-card">
                            <div class="title">Tech Award Sport Student Book</div>
                            <div class="isbn">ISBN: 9781446905555</div>
                            <ul class="features">
                                <li>Covers Units 1–6 with relevant and specific content for the Pearson BTEC Level 1/Level 2 First Award in Sport.</li>
                                <li>Underpinning knowledge and understanding needed at Level 2.</li>
                                <li>Activities in each unit.</li>
                                <li>Grading tips and support.</li>
                            </ul>
                            <div class="buy-button">
                                <a href="https://www.whsmith.co.uk/products/btec-tech-award-2022-sport-student-book-btec-tech-award-sports-leadership-2nd-edition/paperback/9781292444581.html" target="_blank">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="revision-card">
                            <div class="title">Tech Award in Sport Revision Guide</div>
                            <div class="isbn">ISBN: 9781446906705</div>
                            <ul class="features">
                                <li>The one topic-per-page format provides hassle-free revision.</li>
                                <li>Written with learners in mind.</li>
                                <li>Visually engaging pages break the content down into easily-digestible points.</li>
                                <li>Designed to be used alongside the Workbook.</li>
                            </ul>
                            <div class="buy-button">
                                <a href="https://www.amazon.co.uk/New-BTEC-Tech-Award-Sport/dp/1837740615/" target="_blank">Buy Now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="revision-card">
                            <div class="title">Tech Award in Sport Revision Workbook</div>
                            <div class="isbn">ISBN: 9781446906712</div>
                            <ul class="features">
                                <li>Hassle-free question practice, covering one topic per page.</li>
                                <li>Build your confidence with guided practice questions.</li>
                                <li>Unguided questions and practice tests.</li>
                                <li>One-to-one page correspondence with the Revision Guide.</li>
                            </ul>
                            <div class="buy-button">
                                <a href="https://www.amazon.co.uk/Pearson-REVISE-Award-Sport-Revision/dp/129243614X/" target="_blank">Buy Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionItems = document.querySelectorAll('.accordion-item');
    
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        
        header.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            
            // Close all items
            accordionItems.forEach(i => i.classList.remove('active'));
            
            // Open clicked item if it wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php include('partials/footer.php'); ?>