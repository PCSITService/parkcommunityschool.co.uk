<?php
$pageTitle = 'Park Community School | Finding What You Love – Enrichment Opportunities';
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

    .content-section a {
        color: #F58220;
    }

    .content-section a:hover {
        color: #d96f1a;
    }

    /* Click here button in bullet list */
    .enrichment-btn {
        display: inline-block;
        margin-left: 0.6rem;
        padding: 0.2rem 0.75rem;
        background-color: #F58220 !important;
        color: #fff !important;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 600;
        line-height: 1.6;
        vertical-align: middle;
        text-decoration: none;
        transition: background-color 0.2s ease;
    }

    .enrichment-btn:hover {
        background-color: #d96f1a !important;
        color: #fff !important;
    }

    /* Much More Than – flexbox image + text rows */
    .mmt-item {
        display: flex;
        align-items: flex-start;
        gap: 1.25rem;
        margin-bottom: 1.5rem;
    }

    .mmt-item img {
        flex-shrink: 0;
        width: 220px;
        height: 155px;
        object-fit: contain;
        object-position: center center;
        background: #f5f5f5;
        border-radius: 6px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .mmt-text {
        flex: 1;
        background: #f9f9f9;
        border-left: 4px solid #F58220;
        border-radius: 4px;
        padding: 0.85rem 1rem;
    }

    .mmt-text p:last-child {
        margin-bottom: 0;
    }

    /* 3-column image grid used for Representing Park & Trips */
    .three-image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
        margin: 1.25rem 0 1.75rem;
    }

    .three-image-grid img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        object-position: center center;
        background: #f5f5f5;
        border-radius: 6px;
        display: block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    /* Responsive */
    @media screen and (max-width: 640px) {
        .mmt-item {
            flex-direction: column;
        }

        .mmt-item img {
            width: 100%;
            height: 180px;
        }

        .three-image-grid {
            grid-template-columns: 1fr;
        }
    }

</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Finding What You Love – Enrichment Opportunities</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Finding What You Love – Enrichment Opportunities</h3>

                <p><strong><em>Finding What You Love</em></strong> is the principle we apply to our curriculum and wider opportunities at Park, there are an incredible range of activities on offer.</p>

                <p>Our enrichment opportunities for students allow them to <strong>spark an interest and develop a passion</strong>. Our enrichment programme incorporates a variety of in school and after school activities from across all areas of the school.</p>

                <p>Our enrichment opportunities for students include –</p>

                <ul>
                    <li>Much More Than Just a School Carousel</li>
                    <li>Extra-curricular enrichment clubs <a href="fwyl-afterschool-clubs.php" class="enrichment-btn">Click here</a></li>
                    <li>Opportunities to represent Park</li>
                    <li>Student Voice</li>
                    <li>Trips (local, UK and international)</li>
                    <li>Extended Enrichment (Jet project, Rap project, Rock to the beat, politely rebellious workshops)</li>
                </ul>

                <!-- Much More Than -->
                <h3>Much More Than –</h3>

                <p>Our Much More Than carousel will run across the year for students in years 7-9. With this experience you will take part in the activities below:</p>

                <div class="mmt-item">
                    <img src="../images/fwyl-enrichment/Enrichment-farm.jpg" alt="Horticulture and animal care at The Farm">
                    <div class="mmt-text">
                        <p><strong>Horticulture and animal care at The Farm</strong> - Students spend time at the small holding, developing teamwork and problem-solving skills. This includes growing new crops maintaining beds and basic animal care.</p>
                        <p><strong>Enterprise at Park Design and Print:</strong> Students will learn about design and printing processes and apply these to create and produce their own design - exercise books, mugs and much more.</p>
                    </div>
                </div>

                <div class="mmt-item">
                    <img src="../images/fwyl-enrichment/Enrichment-construction.jpg" alt="Construction skills at The Apex Centre">
                    <div class="mmt-text">
                        <p><strong>Construction skills at The Apex Centre:</strong> Students experience basic construction skills including plastering and some bricklaying. This includes preparation and tidying.</p>
                    </div>
                </div>

                <div class="mmt-item">
                    <img src="../images/fwyl-enrichment/Enrichment - media.jpg" alt="Media skills in The Media Suite">
                    <div class="mmt-text">
                        <p><strong>Media skills in The Media Suite:</strong> Students learn about the production skills in the suite and apply the to a simple podcast or recording interview.</p>
                    </div>
                </div>

                <div class="mmt-item">
                    <img src="../images/fwyl-enrichment/Enrichment-kitchen.jpg" alt="Catering in The School Kitchen">
                    <div class="mmt-text">
                        <p><strong>Catering in The School Kitchen</strong>: Students experienced life in a working kitchen, learning basic food prep skills and contributing to preparing food for our school community.</p>
                    </div>
                </div>

                <!-- Extra-curricular enrichment clubs -->
                <h3>Extra-curricular enrichment clubs –</h3>

                <p>After-school clubs are a vital part of school life, offering students opportunities to <strong>grow beyond the classroom</strong> while developing skills, confidence, and a <strong>strong sense of belonging</strong>.</p>

                <p>One of the key benefits is the chance to <strong>explore interests and talents</strong>. Whether through sports teams, performance groups such as drama and music, or technology-based clubs like coding, robotics and Greenpower, students can <strong>pursue activities they are passionate about and discover new strengths.</strong></p>

                <p>Participation in these clubs also promotes teamwork and collaboration. Students learn to work together towards shared goals, whether competing in fixtures, rehearsing for performances, or developing projects. These experiences help build <strong>communication skills, resilience, and a positive work ethic.</strong></p>

                <p>After-school activities provide valuable opportunities for students to represent the school in competitions, events, and showcases. This not only builds <strong>pride and a sense of achievement</strong> but also encourages students to <strong>strive for excellence and develop leadership qualities</strong>.</p>

                <p>In addition, clubs create a <strong>supportive social environment</strong> where students can connect with like-minded peers and build a <strong>sense of belonging</strong>. This helps foster friendships, improve wellbeing, and strengthen their sense of community within the school.</p>

                <!-- Representing Park -->
                <h3>Representing Park –</h3>

                <!-- Row 1: existing ambassador images -->
                <div class="three-image-grid">
                    <img src="../images/fwyl-enrichment/Enrichment-Sports- Ambassadors1.jpg"  alt="Representing Park – Sports Ambassadors">
                    <img src="../images/fwyl-enrichment/Enrichment-Sports- Ambassadors 2.jpg" alt="Representing Park – Sports Ambassadors">
                    <img src="../images/fwyl-enrichment/Enrichment-PA- Ambassadors.jpg"        alt="Representing Park – Performing Arts Ambassadors">
                </div>

                <!-- Row 2: language ambassadors & dance -->
                <div class="three-image-grid">
                    <img src="../images/fwyl-enrichment/Prepresenting Park - lang ambas.jpg" alt="Representing Park – Language Ambassadors">
                    <img src="../images/fwyl-enrichment/Representing park - Lang.jpg"        alt="Representing Park – Language Ambassador teaching">
                    <img src="../images/fwyl-enrichment/Representing - dance live.jpg" alt="Representing Park – Dance Live">
                </div>

                <!-- Row 3: sport representing images -->
                <div class="three-image-grid">
                    <img src="../images/fwyl-enrichment/Representing park - BB .jpg"  alt="Representing Park – Basketball">
                    <img src="../images/fwyl-enrichment/Representing park FB.jpg"  alt="Representing Park – Football">
                    <img src="../images/fwyl-enrichment/Representing park GFB.jpg" alt="Representing Park – Girls Football">
                </div>

                <p>Our <strong>ambassador programmes</strong> provide students with meaningful opportunities to take on leadership roles, represent their peers, and contribute positively to the school community. Whether as STEM, Reading, Performing Arts, Language, or Sports Ambassadors, students play an active role in shaping and promoting key areas of school life.</p>

                <p>One of the main benefits is the development of <strong>leadership and communication skills</strong>. Ambassadors act as role models, supporting younger students both within Park and our local feeder schools, leading initiatives, and sharing their enthusiasm for their subject or activity. This helps them build confidence, responsibility, and the ability to inspire others.</p>

                <p>Ambassador roles also deepen students' engagement with their interests. For example, <strong>STEM Ambassadors</strong> may lead practical activities or support events, <strong>Reading Ambassadors</strong> can promote a love of literature, and <strong>Performing Arts Ambassadors</strong> may help organise productions or workshops. This active involvement allows students to extend their <strong>knowledge and passion beyond the classroom.</strong></p>

                <p>In addition, these programmes foster a <strong>strong sense of community and belonging</strong>. Ambassadors work collaboratively with staff and peers, contributing ideas and helping to create an inclusive and supportive environment where all students feel encouraged to participate.</p>

                <p>Students also benefit from the opportunity to <strong>represent the school</strong> at events, open evenings, and competitions. This not only builds <strong>pride in their school</strong> but also develops valuable skills in public speaking, organisation, and teamwork.</p>

                <!-- Student Voice -->
                <h3>Student Voice –</h3>

                <p>Student voice is a vital part of our thriving school community, ensuring that <strong>students feel heard, valued, and actively involved in shaping their educational experience</strong>.</p>

                <p>One of the key benefits of student voice is <strong>empowerment</strong>. By providing opportunities for students to share their views, ideas, and feedback—through <strong>school councils, surveys, and leadership groups</strong>—students develop confidence and a <strong>sense of ownership</strong> over their school environment.</p>

                <p>Student voice also supports the development of important life skills. By participating in discussions, presenting ideas, and working collaboratively with staff and peers, students strengthen their <strong>communication, leadership, and problem-solving abilities</strong>. These are essential skills that will benefit them in further education and future careers.</p>

                <p>In addition, involving students in decision-making helps to create a more <strong>inclusive and responsive school culture.</strong></p>

                <!-- Trips -->
                <h3>Trips –</h3>

                <div class="three-image-grid">
                    <img src="../images/fwyl-enrichment/Enrichment-Trips1.jpg" alt="School trips">
                    <img src="../images/fwyl-enrichment/Enrichment-Trip2.jpg"  alt="School trips">
                    <img src="../images/fwyl-enrichment/Enrichment-Trips3.jpg" alt="School trips">
                </div>

                <p>Educational trips are a powerful way to <strong>enrich learning</strong>, offering students <strong>memorable experiences</strong> that extend far <strong>beyond the classroom</strong>. Through a range of local, national, and international visits—including both day trips and residential opportunities—students are able to deepen their understanding of the curriculum while developing essential life skills.</p>

                <p>Trips are carefully designed to <strong>complement and enhance classroom learning</strong>. For example, Year 7 students visit Butser Ancient Farm in the first half term, bringing history to life through hands-on experiences of ancient living. Students in Years 7 and 8 also explore the Natural History Museum and the Science Museum, where they engage with interactive exhibits that support their studies in science. In Year 9, a visit to Stonehenge provides a valuable opportunity to explore Britain's prehistoric past in a meaningful and engaging way.</p>

                <p>International experiences further broaden students' horizons. Year 9 students have the opportunity to visit New Delhi, gaining first-hand insight into a <strong>different culture, history, and way of life</strong>. In Years 10 and 11, students can take part in a range of overseas trips to destinations such as China, New York, Poland, Barcelona, and India, each offering unique cultural, historical, and educational experiences.</p>

                <p>In addition to curriculum-linked trips, students can participate in <strong>YES trips</strong>, which take place at weekends and are led by staff. These experiences encourage independence, teamwork, and resilience, while allowing students to build stronger relationships with peers and staff in a different setting.</p>

                <p>All trips—whether local or international—contribute to the development of <strong>cultural capital,</strong> helping students to <strong>understand the wider world and their place within it</strong>. They also support the growth of key life skills such as communication, adaptability, and problem-solving. Residential trips, in particular, encourage independence and confidence as students navigate new environments and experiences.</p>

                <p>Overall, educational visits play a vital role in inspiring curiosity, broadening perspectives, and creating lasting memories, while ensuring that learning is both engaging and relevant to the real world.</p>

                <!-- Extended Enrichment -->
                <h3>Extended Enrichment –</h3>

                <p>Extended enrichment projects such as The Jet Project, The Rap Project, Rock to the Beat, and Politely Rebellious provide targeted, structured support that helps students make meaningful progress while also building confidence and independence. These workshops are designed to reinforce key concepts and extend learning beyond the core curriculum.</p>

                <p>Enrichment workshops support independent learning skills. Through guided practice, targeted feedback, and structured activities, students develop strategies for revision, problem-solving, and self-reflection—skills that are essential for life beyond Park.</p>

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>