<?php
$pageTitle = 'Park Community School | Journey to Health';
include('../partials/header.php');
?>

<style>
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.25rem;
    }
    
    .video-section {
        background-color: #f5f5f5;
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
    
    .partners-section {
        padding: 3rem 0;
    }
    
    .partners-section h4 {
        text-align: center;
        color: #EE3A80;
        margin-bottom: 2rem;
    }
    
    .partners-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 2rem;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .partners-grid li {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .partners-grid img {
        max-width: 100%;
        height: auto;
        max-height: 80px;
        object-fit: contain;
        filter: grayscale(20%);
        transition: all 0.3s ease;
    }
    
    .partners-grid img:hover {
        filter: grayscale(0%);
        transform: scale(1.05);
    }
    
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
    }
    
    @media (max-width: 480px) {
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <p>As a school we always welcome the opportunity to work with partners to benefit the students, families, and wider community.</p>
                
                <p>During the Covid pandemic, through our Munch Community Food Programme, we were able to provide meals and food to our community. We were in discussion with lots of organisations during this time about how the shutdown had affected individuals and we met the Social Prescribers. In April 2021, funding was provided by Government to support schools to open their facilities up after the school day. Energise Me were the distributors of the funding in our area.</p>
                
                <p>This allowed us the opportunity to explore how we could make a difference to our community who were suffering with mental health problems, had been shielding throughout, were overweight, had lost confidence and were generally unfit.</p>
                
                <p>Social Prescribers had identified a group of ladies who were in need, and we decided to provide a fitness coach and open our facilities to these ladies.</p>
                
                <p>It started very slowly with lots of hand-holding and encouragement. To begin with, ladies walked around the site, going upstairs and downstairs, and gradually over time as confidence grew and the ladies became more confident of their surroundings, they moved to the fitness suite and bigger areas for doing circuits.</p>
                
                <p>The film below shows this amazing Journey to Health.</p>
                
                <p>Everyone involved is proud of the ladies' achievements and it shows what can be achieved when a small amount of funding is combined with everyone working towards one goal.</p>
            </div>
        </div>
    </div>
</section>

<section class="video-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-10 medium-offset-1">
                <div class="video-embed">
                    <iframe src="https://player.vimeo.com/video/710816344?h=bbfe4b300a&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="grid-container">
        <h4>Our Partners</h4>
        <ul class="partners-grid">
            <li><img src="/images/journey-to-health/park_community_school.jpg" alt="Park Community School"></li>
            <li><img src="/images/journey-to-health/energise_me.png" alt="Energise Me"></li>
            <li><img src="/images/journey-to-health/hwpcn.png" alt="HWPCN"></li>
            <li><img src="/images/journey-to-health/nhs.png" alt="NHS"></li>
            <li><img src="/images/journey-to-health/the_national_lottery.png" alt="The National Lottery"></li>
            <li><img src="/images/journey-to-health/sport_england.png" alt="Sport England"></li>
        </ul>
    </div>
</section>

<?php include('../partials/footer.php'); ?>