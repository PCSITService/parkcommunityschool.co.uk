<?php
// Place this at the very top of your index.php file, before any HTML output
require_once('includes/rate_limiter.php');

// Create instance of rate limiter
$rateLimiter = new RateLimiter();

// Check if visitor has exceeded rate limit
$showCaptcha = $rateLimiter->isLimitExceeded();
?>
<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <title>Park Community School | Much More Than Just A School</title>
        <?php include("includes/head.html") ?>
        <link rel="stylesheet" href="css/bounce.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        
        <?php if ($showCaptcha): ?>
        <!-- Add Google reCAPTCHA API -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <?php endif; ?>
    </head>
<body class="page-base">

<?php 
// Display CAPTCHA overlay if rate limit exceeded
if ($showCaptcha) {
    include("includes/captcha_overlay.php");
}
?>

<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- HEADER SECTION -->
<header id="homepage-hero">
    <div class="row">
        <div class="medium-5 columns">
            <!-- Much More Logo -->
            <?php include( "includes/much_more_logo.html" ) ?>
            <br><br>
        </div>
        <div class="medium-7 columns">
            <p><em>&#8220;The school lives up to its motto of being 'much more than just a school'. Pupils benefit from an exceptional range of opportunities.&#8221; - </em>Ofsted 2022</p>
            
            <div class="small-text-center large-text-right">
                <a class="expand small button radius success" href="#" data-reveal-id="HeadsWelcome">Headteacher's Welcome</a>

                <div class="row">
                    <div class="columns">
                        <a class="small button radius warning" href="#" data-reveal-id="alumni">Alumni</a>
                        <a class="small button radius ofsted" style="background-color:#a3cd41; color:black" href="/ofsted-reports.php">Ofsted Reports 2022</a>
                        <a class="small button radius warning" href="#" data-reveal-id="transition">Year 6 -> 7 2025</a>
                    </div>
                </div>

                <div class="row">
                    <div class="columns">
                        <a class="small button radius warning" href="assets/curriculum/Options Booklet 2025 PV. V3.pdf" target="_blank">GCSE Courses 2025-2026</a>
                        <a class="small button radius" href="#" data-reveal-id="exam-information" style="background-color: #f08a24; border-color: #f08a24; color: #ffffff;">Exam Information</a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="columns">
                        <a class="small button radius success" href="assets/welcome-to-park-2024.pdf" target="_blank">Welcome to Park</a>
                        <a class="small button radius success" href="assets/prospectus.pdf" target="_blank">Prospectus</a>
                        <a class="small button radius success" href="https://pcs.hants.sch.uk/letters-home.php" target="_blank"><i class="fa fa-envelope-open-text"></i> Letters & Newsletters</a>
                    </div>
                </div>
            </div>
            <!-- HEADTEACHERS WELCOME -->
            <div id="HeadsWelcome" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Welcome to Park Community School</h2>
                <p>Our school provides an expansive park environment. Through a wide variety of lessons and other opportunities to learn, we encourage our young people to discover what they love. As well as the school site, we have several other facilities to provide a great curriculum and exciting places in which to learn. We think there are a number of important areas of learning while at school and describe these as attainment, resilience and autonomy; exams and qualifications matter in life along with the ability to cope with adversity, getting up when life knocks us down, as well as becoming independent and able to make good choices.</p>
                <p>Over the last decade we have planned and constructed our new buildings. The fantastic facilities support students' learning and enrich their time in school.</p>
                <p>We have a wonderful theatre, lecture theatre, restaurant, and outdoor areas, including a floodlit STP (synthetic turf pitch) as well as specialist classrooms for a wide range of subjects. Many areas are used by community groups, other organisations and even for children's parties outside school time. The Watering Hole restaurant serves award-winning school meals, prepared by our chefs and their catering team, all at affordable prices. Breakfast is available to all students for free each morning, thank you Magic Breakfast. Our classrooms include the latest large touch-screen technology. We have invested heavily in computers, laptops, iPads and software to allow students to use a comprehensive range of electronic devices to support their learning. Our learning bases away from the school site allow for the development of enterprise skills, teaching towards construction qualifications and finding out about plants and growing food on our small holding.</p>
                <p>I hope that the information on this website gives you some idea of our vision and principles, as well as the facilities, and curriculum that we offer to students. It also includes the details of other activities and opportunities such as our print business, construction skills centre and tearoom. Munch and our pantry are initiatives for the wider community. School should be about finding what you love to do, because each of us is different that doesn't just happen in the classroom; academic learning alongside other activities and lessons helps us to be well-prepared to take the next steps in life. At Park we are proud to be Much More Than Just a School.</p>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="medium-4 columns text-center  team-member-container">
                            <img src="images/slt/c-anders.jpg" alt="" class="team-member">
                            <p>Christopher Anders</p>
                            <p class="subheader">Headteacher</p>
                        </div>
                        <div class="medium-4 small-6 columns text-center  team-member-container">
                            <img src="images/slt/e-capaldi.jpg" alt="" class="team-member">
                            <p>Ella Capaldi</p>
                            <p class="subheader">Head of School</p>
                        </div>
                    </div>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <!-- /HEADTEACHERS WELCOME -->
        </div>
        
    </div>
    <div class="row bounce-arrow-container">
        <div class="small-centered large-1 column text-center"><i class="bounce fa fa-angle-down"></i></div>
    </div>
</header>

<!-- NOTIFICATION -->
<section class="page-notification">
  <div class="row">
    <div class="columns">
        <p>The full version of Welcome to Park can be found <a href="https://vimeo.com/658515057" target="_blank" style="color: #474747; text-decoration: underline;">here</a></p> 
    </div>
  </div>
</section>
<!-- END NOTIFICATION -->

<!-- BUTTONS -->
<section>
    <div class="row">
        <div class="columns">
            <br>
 
             <!-- Alumni -->
            <div id="alumni" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Alumni</h2>

                <p>Calling all Ex Park Students!!</p>
                <p>If you were once a student at Park, we would love to know what you are up to now. Please complete the short form to share your journey since leaving Park. We aim to create a range of case studies of ex-students to share with our current cohort in order to inspire them and to see how amazing Park students are. Please share with anyone who used to attend Park. Be part of Parks Alumni!</p>

                <a class="expand button radius success" href="https://docs.google.com/forms/d/e/1FAIpQLScSzx5TU8ICwjJnmkJdsny6v-hM4N40v1IgKwqWOX6l3YwlxA/viewform?usp=sf_link" target="_blank">Let Us Know Form</a>

                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
                       
            <!-- Transition -->
            <div id="transition" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Year 6 Transition Information</h2>

                <p>Here you will find all the information you need to help with your child's transition from Year 6 to Year 7.</p>
                <ul>
                    <li><a href="/assets/freshers.week/2025/Transition 2025 - letter 1 - March 2025.pdf" target="_blank">Transition Letter 1 - March 2025</a></li>
                </ul>

                <a class="expand button radius success" href="https://forms.office.com/e/rWrywTPz9p" target="_blank">Acceptance Form</a>
                     
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            
            <!-- EXAM Information -->
            <div id="exam-information" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">Exam Information</h2>

                <p>Here are some useful documents for Year 11 exams and Revision Studies in 2024 - 2025</p>
                    <ul>
                    <li><a href="assets/exam/complete-candidate-examinations-book-2024-2025.pdf" target="_blank">Candidate Handbook for examinations during School Year 2024-25</a></li>
                    <li><a href="assets/exam/Yr 11 MOCK 1 TT FEB-MAR 2025.pdf" target="_blank">Year 11 Mock 2 Timetable 2025</a></li>
                    <li><a href="assets/exam/september-y11-parent-student-eve.pdf" target="_blank">Year 11 Parent and Student | Parents Evening Information</a></li>
                    <li><a href="assets/revision/year -11-phase-1-revision-24-25.pdf" target="_blank">Year 11 Phase 1 Revision 24-25</a></li>
                    <li><a href="assets/revision/Year 11 Phase 2 Revision booklet 24-25.pdf" target="_blank">Year 11 Phase 2 Revision 24-25</a></li>
                    <li><a href="assets/revision/Revision Guide 2024.pdf" target="_blank">Revision Guide</a></li>
                </ul>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>     

        </div>
    </div>
</section>

<!-- CONTENT -->
<section>
    <div class="row">
        <div class="large-14 columns">
            <div class="row">
                <div class="large-8 columns">
                    <h3>Welcome to Park...</h3>
                    <div class="text-center">
                        <div class="medium-12 large-12">
                            <!-- SLIDER -->
                            <div class="homepage-slider">
                                <!-- VIMEO Showcase Video Reel -->
                                <div>
                                    <div class="flex-video widescreen border-radius-5">
                                        <p>Park's goal is 'Success for all through attainment, resilience and autonomy'. This is achieved by supporting each student to ensure they are given the opportunity to succeed.</p>
                                        <p>We are preparing students for their next steps in life and the world of work. This means they must be increasingly independent. We have high expectations and pride ourselves in being disciplined, smart and friendly.</p>
                                        <p>We expect mutual respect, hard work, good manners and a positive attitude from all. We are proud of our school and expect everyone to demonstrate this pride through their actions every day.</p>
                                        <p>We describe ourselves as 'Much more than just a school' because we provide opportunities and support that most schools cannot. This ethos continues to drive our actions regarding curriculum and support.</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex-video widescreen border-radius-5">
                                        <p>Ofsted said in 2022:</p>
                                        <p>Staff want the very best for all pupils. Staff know individual pupils well and work tirelessly to help them overcome any difficulties they face.</p>
                                        <p>Pupils are reading regularly in school and for pleasure.</p>
                                        <p>Leaders and governors have an ambitious long-term vision for the school and its local community. All decisions are guided by what is in the best interest of pupils. Staff share this vision and are proud to work at the school.</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex-video widescreen border-radius-5">
                                        <!-- Vimeo video "Park Community School - Belonging" -->
                                        <div style="padding:56.21% 0 0 0;position:relative;">
                                            <iframe src="https://player.vimeo.com/video/974947783?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Park Community School - Belonging"></iframe>
                                        </div>
                                        <script src="https://player.vimeo.com/api/player.js"></script>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

        <div class="large-4 columns show-for-large-up">
            <div>
                <br>
            </div>
        <br>
        </div>
    </div>
</section>
<br>
<section class="grey-bg">
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo white-bg"></div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <h3>Much More Than Just A School...</h3>

            <br>
<!-- EXTRA MILE -->
            <ul class="text-center medium-block-grid-2 small-block-grid-1">
                <h4>Going The Extra Mile</h4>
                <li>
                    <div class="menu-box"><a href="/Connect4Families.php">
                            <img src="assets/connect4families/2023-07/connect4families-logo.png" alt="Connect4Families">
                            <img src="assets/connect4families/2023-07/connect4youth-logo.png" alt="Connect4Youth">
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/munch.php">
                            <img src="images/index/munch.jpg" alt="MUNCH">
                            <p>MUNCH</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/tearooms.php">
                            <img src="images/index/tearooms.jpg" alt="Tea Rooms at The Coach House">
                            <p>Tea Rooms at The Coach House</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/pantry.php">
                            <img src="images/index/pantry.png" alt="MUNCH Pantry">
                            <p>MUNCH Pantry</p>
                        </a></div>
                </li>
            </ul>
<!-- STUDENT EXTRA -->
            <ul class="text-center medium-block-grid-5 small-block-grid-2">
                <h4>Giving Our Students Extra</h4>
                <li>
                    <div class="menu-box"><a href="/race-at-our-place.php">
                            <img src="images/index/cancer_research.jpg" alt="Park Community Race at Our Place - Much More Than Just a School">
                            <p>Race at Our Place</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/greenpower.php">
                            <img src="images/index/greenpower.jpg" alt="Park Community Greenpower - Much More Than Just a School">
                            <p>Greenpower</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/marketgarden.php">
                            <img src="images/index/farm.jpg" alt="Park Community Market Garden - Much More Than Just a School">
                            <p>Market Garden</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/apex-centre.php">
                            <img src="images/index/apex.jpg" alt="The Apex Centre - Much More Than Just a School">
                            <p>The Apex Centre</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/ventures.php">
                            <img src="images/index/charity.jpg" alt="Park Community Ventures - Much More Than Just a School">
                            <p>Charity</p>
                        </a></div>
                </li>
            </ul>
<!-- INHOUSE SERVICES -->
            <ul class="text-center medium-block-grid-3 small-block-grid-2">
                <h4>In-house Services</h4>
                <li>
                    <div class="menu-box"><a href="/dickinson-centre.php">
                            <img src="images/index/dickinson-centre.jpg" alt="Park Community Dickinson Centre - Much More Than Just a School">
                            <p>Dickinson Centre</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/community-services.php">
                            <img src="images/index/community.jpg" alt="Park Community - Much More Than Just a School">
                            <p>Community &amp; Services</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/design-print.php">
                            <img src="images/index/unit.jpg" alt="Park Community Enterprises - Much More Than Just a School">
                            <p>Park Design &amp; Print</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/suite.php">
                            <img src="images/index/sontronics.jpg" alt="The Suite - Much More Than Just a School">
                            <p>The Suite</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/theatre.php">
                            <img src="images/index/theatre.jpg" alt="Theatre Spaces for Hire - Much More Than Just a School">
                            <p>Theatre Hire</p>
                        </a></div>
                </li>
                <li>
                    <div class="menu-box"><a href="/catering.php#parkcatering">
                            <img src="images/index/park_catering.png" alt="Park Catering Services - Much More Than Just a School">
                            <p>Park Catering Services</p>
                        </a></div>
                </li>
            </ul>
<!-- OTHER COMPANIES -->
            <ul class="text-center medium-block-grid-3 small-block-grid-3">
                <h4>Facilitating Other Organisations</h4>
 
                <li>
                    <div class="menu-box">
                        <a href="/nursery.php">
                            <img src="images/nursery/pcn-converted/converted-nurserylogo-001.png" alt="Park Community Nursery - Much More Than Just a School">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="menu-box">
                        <a href="//theflashonair.co.uk/" target="_blank">
                            <img src="images/index/flash_radio.jpg" alt="The Flash Radio - Not for profit community radio station run entirely by volunteers">
                            <p>The Flash Radio</p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="menu-box">
                        <a href="//oarsomechance.org/" target="_blank">
                            <img src="images/index/oarsome_chance.jpg" alt="Oarsome Chance">
                            <p>Oarsome Chance</p>
                        </a>
                    </div>
                </li>
            </ul>

            <br>
        </div>

        <br>
    </div>
    <br>
<section id="meet-the-team" style="background-color: #333333; color: #ffffff; text-align: center;">
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
    </div>
    <div class="row">
        <div class="large-12 columns">
            <!-- Center the 'Leadership Team' text -->
            <h3 style="color: #ffffff;">Leadership Team</h3>
            <br>

            <!-- Team Members -->
            <div class="medium-4 columns text-center team-member-container">
                <img src="images/slt/c-anders.jpg" alt="" class="team-member">
                <p>Mr C Anders</p>
                <p class="subheader" style="color: #ffffff;">Headteacher</p>
            </div>
            <div class="medium-4 small-6 columns text-center team-member-container">
                <img src="images/slt/e-capaldi.jpg" alt="" class="team-member">
                <p>Mrs E Capaldi</p>
                <p class="subheader" style="color: #ffffff;">Head of School</p>
            </div>
        </div>
    </div>
    <br><br>

    <!-- Footer Section Included Here -->
    <?php include("includes/footer.html"); ?>
</section>

        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>
            
        <script type="text/javascript">
            $(document).ready(function(){
              $('.homepage-slider').slick({
                autoplay: true,
                dots: true,
                fade: true
              });
            });
        </script>
    </body>
</html>