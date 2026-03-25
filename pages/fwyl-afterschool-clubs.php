<?php
$pageTitle = 'Park Community School | Finding What You Love – Clubs';
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

    /* 3-up Carousel */
    .clubs-carousel {
        position: relative;
        margin: 1.5rem 0 2rem;
        overflow: hidden;
    }

    .carousel-track-wrap {
        overflow: hidden;
        border-radius: 8px;
    }

    .carousel-track {
        display: flex;
        transition: transform 0.45s ease;
    }

    .carousel-track .carousel-slide {
        flex: 0 0 calc(33.333% - 0.5rem);
        margin-right: 0.75rem;
    }

    .carousel-track .carousel-slide:last-child {
        margin-right: 0;
    }

    .carousel-track .carousel-slide img {
        width: 100%;
        height: 240px;
        object-fit: contain;
        object-position: center center;
        border-radius: 8px;
        display: block;
        background: #f5f5f5;
        box-shadow: 0 3px 10px rgba(0,0,0,0.12);
    }

    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: #F58220;
        color: #fff;
        border: none;
        width: 38px;
        height: 38px;
        font-size: 1.3rem;
        line-height: 1;
        cursor: pointer;
        border-radius: 50%;
        z-index: 10;
        transition: background 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .carousel-btn:hover { background: #d96f1a; }
    .carousel-btn.prev  { left: -18px; }
    .carousel-btn.next  { right: -18px; }

    .carousel-dots {
        text-align: center;
        margin-top: 0.85rem;
    }

    .carousel-dot {
        display: inline-block;
        width: 9px;
        height: 9px;
        margin: 0 3px;
        background: #ddd;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.2s;
    }

    .carousel-dot.active { background: #F58220; }

    /* keep old grid class harmless */
    .clubs-photo-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(2, 200px);
        gap: 0.75rem;
        margin: 1.5rem 0 2rem;
    }

    .clubs-photo-grid img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center top;
        border-radius: 6px;
        display: block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.12);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .clubs-photo-grid img:hover {
        transform: scale(1.02);
        box-shadow: 0 6px 18px rgba(0,0,0,0.18);
    }

    /* 9th image: sits in second row, span to keep even look */
    .clubs-photo-grid img:nth-child(9) {
        grid-column: 5;
    }

    /* Clubs table */
    .clubs-table-wrapper {
        overflow-x: auto;
        margin: 2rem 0;
    }

    .clubs-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9rem;
    }

    .clubs-table thead th {
        background-color: #F58220;
        color: #fff;
        padding: 0.75rem 1rem;
        text-align: left;
        font-weight: 600;
        border: 1px solid #e0820a;
    }

    .clubs-table tbody td {
        padding: 0.6rem 1rem;
        border: 1px solid #e0e0e0;
        vertical-align: middle;
    }

    .clubs-table tbody tr:nth-child(even) {
        background-color: #fafafa;
    }

    .clubs-table tbody tr:hover {
        background-color: #fff8f0;
    }

    /* Day header rows */
    .clubs-table .day-header td {
        background-color: #333;
        color: #fff;
        font-weight: 700;
        font-size: 0.95rem;
        padding: 0.6rem 1rem;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        border: 1px solid #222;
    }

</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Finding What You Love – Clubs</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Finding What You Love – Clubs</h3>
                <p>The wide range of after school enrichment opportunities for our students to 'Find What They Love'-</p>

                <!-- 3-up Carousel -->
                <div class="clubs-carousel">
                    <button class="carousel-btn prev" onclick="carouselMove(-1)" aria-label="Previous">&#8249;</button>
                    <button class="carousel-btn next" onclick="carouselMove(1)"  aria-label="Next">&#8250;</button>

                    <div class="carousel-track-wrap">
                        <div class="carousel-track" id="carouselTrack">
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL-football.jpg"     alt="Football"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL-HB2.jpg"          alt="Hair and Beauty"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL - Clubs Page.jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL BB .jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL - GFB.jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL - bee2.jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL clubs... .jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL - bee22.jpg"     alt="club"></div>
                            <div class="carousel-slide"><img src="../images/fwyl-clubs/FWYL - Clubs page.. .jpg"     alt="club"></div>
                        </div>
                    </div>

                    <div class="carousel-dots" id="carouselDots"></div>
                </div>

                <script>
                (function () {
                    var track      = document.getElementById('carouselTrack');
                    var dotsWrap   = document.getElementById('carouselDots');
                    var slides     = track.querySelectorAll('.carousel-slide');
                    var total      = slides.length;
                    var visible    = 3;
                    var current    = 0;
                    var pages      = Math.ceil(total / visible);
                    var timer;

                    // Build dots
                    for (var i = 0; i < pages; i++) {
                        var d = document.createElement('span');
                        d.className = 'carousel-dot' + (i === 0 ? ' active' : '');
                        (function(idx){ d.addEventListener('click', function(){ goTo(idx); }); })(i);
                        dotsWrap.appendChild(d);
                    }

                    function getSlideWidth() {
                        return slides[0].offsetWidth + 12; // 12 = gap (0.75rem)
                    }

                    function goTo(page) {
                        current = (page + pages) % pages;
                        track.style.transform = 'translateX(-' + (current * visible * getSlideWidth()) + 'px)';
                        Array.from(dotsWrap.children).forEach(function(d, i){
                            d.classList.toggle('active', i === current);
                        });
                        resetTimer();
                    }

                    function resetTimer() {
                        clearInterval(timer);
                        timer = setInterval(function(){ goTo(current + 1); }, 4000);
                    }

                    window.carouselMove = function(dir){ goTo(current + dir); };

                    resetTimer();
                })();
                </script>

                <!-- Clubs table -->
                <div class="clubs-table-wrapper">
                    <table class="clubs-table">
                        <thead>
                            <tr>
                                <th>Club Title</th>
                                <th>Department</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Year Group</th>
                                <th>Lead staff</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Monday -->
                            <tr class="day-header">
                                <td colspan="6">Monday</td>
                            </tr>
                            <tr>
                                <td>Girls Football Academy</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>STP</td>
                                <td>All years</td>
                                <td>ABW/TMO</td>
                            </tr>
                            <tr>
                                <td>Boys Football Academy</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>STP</td>
                                <td>All years</td>
                                <td>KPO</td>
                            </tr>
                            <tr>
                                <td>Language Ambassadors</td>
                                <td>MFL</td>
                                <td>15.00 - 16.00</td>
                                <td>C10</td>
                                <td>All years</td>
                                <td>ANU</td>
                            </tr>
                            <tr>
                                <td>Chinese Lessons</td>
                                <td>International Connections</td>
                                <td>15.00 – 16.00</td>
                                <td>JO6</td>
                                <td>All years</td>
                                <td>LCV</td>
                            </tr>
                            <tr>
                                <td>Science Club</td>
                                <td>Science</td>
                                <td>15.00-16.00</td>
                                <td>G06</td>
                                <td>All years</td>
                                <td>PBL</td>
                            </tr>
                            <tr>
                                <td>Warhammer and D&amp;D Club</td>
                                <td>Art</td>
                                <td>15.00-16.00</td>
                                <td>S01</td>
                                <td>All years</td>
                                <td>JWA</td>
                            </tr>
                            <tr>
                                <td>KS3 Homework Club</td>
                                <td>SEND</td>
                                <td>14.45-15.45</td>
                                <td>Hub</td>
                                <td>Years 7-9</td>
                                <td>SRO/SEND</td>
                            </tr>
                            <tr>
                                <td>KS3 Handwriting Club</td>
                                <td>SEND</td>
                                <td>14.45-15.45</td>
                                <td>Hub</td>
                                <td>Years 7-9</td>
                                <td>SRO/SEND</td>
                            </tr>
                            <tr>
                                <td>Bookbusters Book Club</td>
                                <td>Library</td>
                                <td>15.00-16.00</td>
                                <td>KDC</td>
                                <td>All years</td>
                                <td>AMH</td>
                            </tr>

                            <!-- Tuesday -->
                            <tr class="day-header">
                                <td colspan="6">Tuesday</td>
                            </tr>
                            <tr>
                                <td>Swimming</td>
                                <td>PE</td>
                                <td>10.30 – 12.30</td>
                                <td>OS</td>
                                <td>Years 7 &amp; 8</td>
                                <td>FPE</td>
                            </tr>
                            <tr>
                                <td>Sports Ambassador Training</td>
                                <td>PE</td>
                                <td>13.45–14.45</td>
                                <td>KSH</td>
                                <td>Years 7-10</td>
                                <td>KPO</td>
                            </tr>
                            <tr>
                                <td>Badminton Fixtures Yr9/10</td>
                                <td>PE</td>
                                <td>13.45–14.45</td>
                                <td>OS</td>
                                <td>Years 9 &amp; 10</td>
                                <td>ABW</td>
                            </tr>
                            <tr>
                                <td>Games Club</td>
                                <td>Pastoral</td>
                                <td>13.45 – 14.45</td>
                                <td>KRS</td>
                                <td>All years</td>
                                <td>KBA</td>
                            </tr>
                            <tr>
                                <td>Becoming a Barista</td>
                                <td>Catering Team</td>
                                <td>13.45 – 15.00</td>
                                <td>TT</td>
                                <td>Years 10 &amp; 11</td>
                                <td>SCR</td>
                            </tr>

                            <!-- Wednesday -->
                            <tr class="day-header">
                                <td colspan="6">Wednesday</td>
                            </tr>
                            <tr>
                                <td>Butterfly Broadcast Production</td>
                                <td>English</td>
                                <td>15.00-16.00</td>
                                <td>Y03</td>
                                <td>All years</td>
                                <td>AMA</td>
                            </tr>
                            <tr>
                                <td>All About Books Quiz Club</td>
                                <td>Library</td>
                                <td>15.00-16.00</td>
                                <td>KDC</td>
                                <td>All years</td>
                                <td>AMH</td>
                            </tr>
                            <tr>
                                <td>Maths Homework Club</td>
                                <td>Maths</td>
                                <td>15.00-16.00</td>
                                <td>KO1</td>
                                <td>All years</td>
                                <td>TMO</td>
                            </tr>
                            <tr>
                                <td>Bee Buddies</td>
                                <td>Catering Team</td>
                                <td>14.45-16.45</td>
                                <td>KRS</td>
                                <td>Years 8 - 10</td>
                                <td>SCR</td>
                            </tr>
                            <tr>
                                <td>Robotics and coding Club</td>
                                <td>Computer Science</td>
                                <td>15.00-16.00</td>
                                <td>J04</td>
                                <td>All years</td>
                                <td>CWR</td>
                            </tr>
                            <tr>
                                <td>APEX</td>
                                <td>Technology</td>
                                <td>15.00-16.00</td>
                                <td>APEX</td>
                                <td>Years 10 &amp; 11</td>
                                <td>DDA</td>
                            </tr>
                            <tr>
                                <td>Cooking Club</td>
                                <td>Technology</td>
                                <td>15.00-16.00</td>
                                <td>F01</td>
                                <td>Years 7-9</td>
                                <td>TCU</td>
                            </tr>
                            <tr>
                                <td>Hair and Beauty Club</td>
                                <td>Hair and Beauty</td>
                                <td>15.00-16.00</td>
                                <td>S03</td>
                                <td>Years 7-9</td>
                                <td>ECH</td>
                            </tr>
                            <tr>
                                <td>Swimming</td>
                                <td>PE</td>
                                <td>11.00 – 13.30</td>
                                <td>OS</td>
                                <td>Years 7 &amp; 8</td>
                                <td>FPE</td>
                            </tr>
                            <tr>
                                <td>Badminton</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>KSH</td>
                                <td>All years</td>
                                <td>ABW</td>
                            </tr>
                            <tr>
                                <td>Fitness Club</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>KFS</td>
                                <td>All years</td>
                                <td>LCV</td>
                            </tr>
                            <tr>
                                <td>Dance Live Rehearsals</td>
                                <td>PA</td>
                                <td>15.00 – 16.00</td>
                                <td>KTH</td>
                                <td>All years</td>
                                <td>LCH</td>
                            </tr>
                            <tr>
                                <td>Girls Running Club</td>
                                <td>MFL</td>
                                <td>15.00 – 16.00</td>
                                <td>C07</td>
                                <td>All years</td>
                                <td>NHA</td>
                            </tr>
                            <tr>
                                <td>Comfort Corner</td>
                                <td>SMSC</td>
                                <td>15.00 – 16.00</td>
                                <td>SO4</td>
                                <td>All years</td>
                                <td>HTU/SLO</td>
                            </tr>
                            <tr>
                                <td>GGS Club (Geography, Geology and Sustainability)</td>
                                <td>Geography</td>
                                <td>15.00-16.00</td>
                                <td>J01</td>
                                <td>All years</td>
                                <td>JMA</td>
                            </tr>

                            <!-- Thursday -->
                            <tr class="day-header">
                                <td colspan="6">Thursday</td>
                            </tr>
                            <tr>
                                <td>Greenpower (by invitation only)</td>
                                <td>Technology</td>
                                <td>15.00 - 16.00</td>
                                <td>Tech</td>
                                <td>All years</td>
                                <td>DPA</td>
                            </tr>
                            <tr>
                                <td>Horti' Club</td>
                                <td>Technology</td>
                                <td>15.00 – 16.00</td>
                                <td>YO1</td>
                                <td>All years</td>
                                <td>HSP/TSH</td>
                            </tr>
                            <tr>
                                <td>Food Ambassadors</td>
                                <td>Catering Team</td>
                                <td>13.45–15.00</td>
                                <td>KRS</td>
                                <td>All years</td>
                                <td>SCL/AMO</td>
                            </tr>
                            <tr>
                                <td>Tech Club</td>
                                <td>Performing Arts</td>
                                <td>15.00-16.00</td>
                                <td>KMS</td>
                                <td>All years</td>
                                <td>BFO</td>
                            </tr>
                            <tr>
                                <td>Fitness Club</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>KFS</td>
                                <td>All years</td>
                                <td>KPO</td>
                            </tr>
                            <tr>
                                <td>Badminton Fixtures Yr7/8</td>
                                <td>PE</td>
                                <td>15.00 – 16.00</td>
                                <td>OS</td>
                                <td>Years 7 &amp; 8</td>
                                <td>ABW</td>
                            </tr>
                            <tr>
                                <td>Choir</td>
                                <td>PA</td>
                                <td>15.00 – 16.00</td>
                                <td>KO3</td>
                                <td>All years</td>
                                <td>LWI/JAC</td>
                            </tr>
                            <tr>
                                <td>KS3 Dance Club</td>
                                <td>PA</td>
                                <td>15.00 – 16.00</td>
                                <td>KTH</td>
                                <td>Years 7 – 9</td>
                                <td>KPR/JCM</td>
                            </tr>

                            <!-- Friday -->
                            <tr class="day-header">
                                <td colspan="6">Friday</td>
                            </tr>
                            <tr>
                                <td>Chess Club</td>
                                <td>Maths</td>
                                <td>15.00-16.00</td>
                                <td>C04</td>
                                <td>All Years</td>
                                <td>SDA</td>
                            </tr>
                            <tr>
                                <td>Musical Theatre</td>
                                <td>PA</td>
                                <td>15.00 – 16.00</td>
                                <td>KTH</td>
                                <td>All years</td>
                                <td>JBW</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>