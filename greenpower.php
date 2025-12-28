<?php
$pageTitle = 'Park Community School | Greenpower';
include('partials/header.php');
?>

<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<style>
    
    
    
    .video-section {
        padding: 3rem 0;
    }
    
    .video-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .content-section {
        padding: 3rem 0;
    }
    
    .content-section h3,
    .grey-section h3 {
        color: #a3cd42;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section p,
    .grey-section p {
        line-height: 1.7;
        margin-bottom: 1rem;
    }
    
    .content-section ul,
    .grey-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li,
    .grey-section ul li {
        margin-bottom: 0.5rem;
    }
    
    .content-section a,
    .grey-section a {
        color: #a3cd42;
    }
    
    .content-section a:hover,
    .grey-section a:hover {
        color: #8fb332;
    }
    
    .greenpower-slider {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin: 2rem auto;
        max-width: 600px;
    }
    
    .greenpower-slider img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    .greenpower-slider .slick-dots {
        bottom: -35px;
    }
    
    .greenpower-slider .slick-dots li button:before {
        color: #a3cd42;
        font-size: 12px;
    }
    
    .greenpower-slider .slick-dots li.slick-active button:before {
        color: #8fb332;
    }
    
    .slider-caption {
        text-align: center;
        margin-top: 2.5rem;
        color: #666;
        font-style: italic;
    }
    
    .car-list {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        list-style: none;
        margin: 1rem 0 1.5rem;
        padding: 0;
    }
    
    .car-list li {
        background: #a3cd42;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
    }
    
    @media (max-width: 639px) {
        .greenpower-slider {
            margin: 1.5rem 0;
        }
    }
</style>


<!-- VIDEO SECTION -->
<section class="video-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell small-10 small-offset-1 medium-8 medium-offset-2">
                <div class="video-embed">
                    <iframe src="https://player.vimeo.com/video/299177214" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3>To Design, Build and Race an Electric Car</h3>
                <p>Greenpower helps unlock potential and spark enthusiasm for Science, Technology, Engineering and Maths (STEM) through the excitement of motorsport.</p>
                <p>Park Community School has 3 cars, these are called:</p>
                <ul class="car-list">
                    <li>Keep Up</li>
                    <li>Team Spirit 2</li>
                    <li>Chase</li>
                </ul>
                <p>The full race results are hosted by <a href="https://www.bbk-online.net/gpt/" target="_blank">BBK online</a> and can be found on their website.</p>

                <h3>How to join the team?</h3>
                <p>Students can take part by having an exemplary behaviour record and have a keen interest in engineering. Places are limited – please see Mr Payne for details.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <p>Greenpower is a charity funded organisation that invites young students from the age of 11-16 to build an electric car (hence the name Greenpower) and race it at a variety of different venues around the country. Greenpower is an organisation that "Promotes sustainable engineering to young people". Park Community School, Havant, Hampshire, believe that they are "Much more than just a school" – this is part of the reason why they have become part of the Greenpower family.</p>
                
                <p>Park have been competing for 10 years in Greenpower with their original car called 'Team Spirit' being designed and built by its students. They have recently invested in 3 new kit cars manufactured by Greenpower and recruited new enthusiastic Park STEM engineers to build these new cars to try and become more competitive and challenge the top teams. The new Greenpower teams built the 3 new cars which are aptly named 'Team Spirit 2', 'Keep Up' and 'Chase'.</p>
                
                <p>The cars have been built by students to allow them to develop their STEM knowledge and to give an insight into possible future careers. They then compete at a national level in different areas of the country. Some of the races include Goodwood Motor Circuit, Ford Dunton Test Track, Dunsfold (Top Gear Test Track) and Rockingham Motor Speedway. Over 260 cars competed in 2018 with 10,000 students taking part across the country. We finished 6th, 29th and 39th out of 160 cars within our category of car.</p>

                <div class="greenpower-slider">
                    <div><img src="images/greenpower/greenpower1.jpg" alt="Park Community Schools Greenpower Team"></div>
                    <div><img src="images/greenpower/greenpower2.jpg" alt="Park Community Schools Greenpower Team"></div>
                    <div><img src="images/greenpower/greenpower3.jpg" alt="Park Community Schools Greenpower Team"></div>
                </div>
                <p class="slider-caption">Park's Greenpower Team</p>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
$(document).ready(function(){
    $('.greenpower-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        fade: true,
        arrows: false,
        pauseOnHover: true
    });
});
</script>

<?php include('partials/footer.php'); ?>