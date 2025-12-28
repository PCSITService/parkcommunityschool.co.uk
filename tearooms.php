<?php
$pageTitle = 'Park Community School | Tea Rooms at The Coach House';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h4 {
        color: #EE3A80;
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section a {
        color: #EE3A80;
    }
    
    .content-section a:hover {
        color: #d81b60;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .visit-button {
        display: inline-block;
        background-color: #EE3A80;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }
    
    .visit-button:hover {
        background-color: #d81b60;
        color: white;
        transform: translateY(-2px);
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .video-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .partners-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-top: 2rem;
        align-items: center;
    }
    
    .partners-grid img {
        box-shadow: none;
        max-height: 80px;
        width: auto;
        margin: 0 auto;
        display: block;
    }
    
    .contact-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .contact-box h4 {
        margin-top: 0;
    }
    
    .contact-box h4:not(:first-child) {
        margin-top: 1.5rem;
    }
    
    .contact-box hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 0.75rem 0;
    }
    
    .contact-box ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .contact-box li {
        padding: 0.35rem 0;
    }
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1rem;
    }
    
    .gallery-grid img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .gallery-grid img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>


<!-- INTRO SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>Welcome to the Tea Rooms. The Coach House was built in the nineteenth century. As a result of Heritage Lottery funding, the building and the surrounding park have been beautifully renovated for the benefit of the public.</p>

                <a class="visit-button" href="https://www.google.co.uk/maps/dir//Tea+Rooms+at+the+Coach+House,+Havant+PO9+5HD/@50.8754276,-1.0088072,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4874450c0d6826bb:0xf1afb98058faa293!2m2!1d-0.973788!2d50.8754328" target="_blank">Come Visit Us</a>
            </div>
            <div class="cell medium-6">
                <img src="images/tearooms/tearooms_coachhouse.png" alt="Tea Rooms at The Coach House">
            </div>
        </div>
    </div>
</section>

<!-- VIDEO SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <div class="video-embed">
                    <iframe src="https://player.vimeo.com/video/454696378" allow="autoplay; fullscreen" allowfullscreen title="Tea Rooms at The Coach House"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h4>So, you may be asking why is a school managing the Tea Rooms?</h4>
                <p>When the initial consultations took place to renovate the buildings and grounds of Leigh Park Gardens, Park Community School were invited to join the board managing the process. We were able to support and provide information when plans were being generated to ensure use of the park would be engaging for young people and increase their use both socially and educationally. We have also been able to offer job opportunities to former and current students.</p>

                <p>At Park Community School we have a nationally awarded Catering Team led by Executive Chef Steve Cross and Head Chef Alex Moody. We provide high-quality meals for our students, alongside catering for business conferences, parties, weddings and festivals. We believe managing the Tea Rooms will give us the opportunity to showcase our skills and provide great food to the public. Any profits will support our school and community activities including our food bank and free community meals programme, Munch.</p>

                <div class="partners-grid">
                    <img src="images/tearooms/staunton_country_park.jpg" alt="Staunton Country Park">
                    <img src="images/tearooms/hampshire_countryside_service.jpg" alt="Hampshire Countryside Service">
                    <img src="images/tearooms/park_community_school.jpg" alt="Park Community School">
                    <img src="images/tearooms/community_heritage_fund.jpg" alt="Community Heritage Fund">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT & GALLERY SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-5">
                <div class="contact-box">
                    <h4>Address</h4>
                    <hr>
                    <ul>
                        <li>Tea Rooms at The Coach House</li>
                        <li>c/o Park Community School</li>
                        <li>143 Middle Park Way</li>
                        <li>Havant</li>
                        <li>PO9 4DQ</li>
                    </ul>
                    
                    <h4>Contact Information</h4>
                    <hr>
                    <ul>
                        <li><strong>Telephone:</strong> 07734 227058</li>
                        <li><strong>Email:</strong> <a href="mailto:tearooms@pcs.hants.sch.uk">tearooms@pcs.hants.sch.uk</a></li>
                    </ul>
                </div>
            </div>
            <div class="cell medium-7">
                <div class="gallery-grid">
                    <img src="images/tearooms/afternoon_tea.jpg" alt="Afternoon tea at The Coach House">
                    <img src="images/tearooms/image_1.jpeg" alt="Tea Rooms interior">
                    <img src="images/tearooms/image_2.jpeg" alt="Tea Rooms seating area">
                    <img src="images/tearooms/image_3.jpeg" alt="Tea Rooms outdoor area">
                    <img src="images/tearooms/cake.jpeg" alt="Delicious homemade cake">
                    <img src="images/tearooms/coffee.jpeg" alt="Freshly brewed coffee">
                    <img src="images/tearooms/coffee_art.jpeg" alt="Beautiful coffee art">
                    <img src="images/tearooms/flowers.jpg" alt="Fresh flowers at the Tea Rooms">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>