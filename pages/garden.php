<?php
$pageTitle = 'Park Community School | Garden';
include('../partials/header.php');
?>

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h2 {
        color: #3d7c47;
        margin-bottom: 1.5rem;
    }
    
    .content-section p {
        line-height: 1.7;
        margin-bottom: 1rem;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .garden-slider {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .garden-slider img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    .garden-slider .slick-dots {
        bottom: -35px;
    }
    
    .garden-slider .slick-dots li button:before {
        color: #3d7c47;
        font-size: 12px;
    }
    
    .garden-slider .slick-dots li.slick-active button:before {
        color: #a3cd42;
    }
    
    .newsletter-section {
        padding: 3rem 0;
    }
    
    .newsletter-section h2 {
        color: #3d7c47;
        margin-bottom: 1rem;
    }
    
    .newsletter-list {
        list-style: none;
        margin: 1.5rem 0 0;
        padding: 0;
    }
    
    .newsletter-list li {
        margin-bottom: 0.75rem;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .newsletter-list li::before {
        content: '🌱';
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .newsletter-list a {
        color: #3d7c47;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .newsletter-list a:hover {
        color: #a3cd42;
        text-decoration: underline;
    }
    
    @media (max-width: 639px) {
        .content-section img,
        .grey-section img {
            margin-top: 1.5rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <h2>Horticulture in the Park</h2>
                <p>Horticulture in Park Community School (PCS) is more than just a simple gardening experience, it is one that develops our students' interests and understanding of the interconnectedness of people, soils, plants, and animals (large and microscopic); generating a practical awareness of where our food comes from and the resources and processes it takes to produce it; the ways in which horticultural practices impact on the environment, and how good practices sustain and enhance the environment.</p>
            </div>
            <div class="cell medium-5">
                <div class="garden-slider">
                    <div><img src="/images/garden/garden1.jpg" alt="Horticulture at Park Community School"></div>
                    <div><img src="/images/garden/garden2.jpg" alt="Horticulture at Park Community School"></div>
                    <div><img src="/images/garden/garden3.jpg" alt="Horticulture at Park Community School"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6 medium-order-1 small-order-2">
                <img src="/images/garden/garden4.jpg" alt="Student Shrubs">
            </div>
            <div class="cell medium-6 medium-order-2 small-order-1">
                <p>Learning horticulture in PCS is also designed to open pathways to a wide range of learning and eventual careers opportunities such as Horticultural consultant, turf manager, landscape designer, agribusiness consultant, wine consultant, plant pathologist, orchardist, forestry worker and florist. Collectively, learning horticulture helps our learners gain valuable, transferable skills in science, technology, numeracy and literacy, self-management and independence skills.</p>
                <p>These skills are not an end in themselves, but through learning each process, our students gain personal satisfaction and an incentive to become life-long learners, eager to learn more.</p>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Garden Calendar Monthly</h2>
                <p>Our monthly newsletters keep you up to date with seasonal gardening tips and activities.</p>
                <ul class="newsletter-list">
                    <li><a href="../assets/garden/2018-01.pdf" target="_blank">Issue 01 - Beauties for January 2018</a></li>
                    <li><a href="../assets/garden/2018-03.pdf" target="_blank">Issue 02 - Mulching in March 2018</a></li>
                    <li><a href="../assets/garden/2018-10.pdf" target="_blank">Issue 03 - Gardening Notes: November 2018</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
$(document).ready(function(){
    $('.garden-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        fade: true,
        arrows: false,
        pauseOnHover: true
    });
});
</script>

<?php include('../partials/footer.php'); ?>