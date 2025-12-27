<?php
$pageTitle = 'Park Community School | Market Garden';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #EE3A80;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0.5rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
        text-transform: capitalize;
    }
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.25rem;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
    
    .contact-section {
        padding: 3rem 0;
    }
    
    .contact-section h4 {
        color: #3d7c47;
        margin-bottom: 1rem;
    }
    
    .contact-section hr {
        border-color: #e0e0e0;
        margin: 1rem 0;
    }
    
    .contact-section a {
        color: #3d7c47;
        font-weight: 600;
    }
    
    .contact-section a:hover {
        color: #2d5c37;
    }
    
    .contact-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    @media (max-width: 639px) {
        .content-section img,
        .contact-section img {
            margin-top: 2rem;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Market Garden</h1>
                <p>We Learn, We Grow, We Eat!</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>Park Community Enterprises lease a piece of farm land on which we have created a smallholding.</p>
                <p>Students are taught to grow vegetables and look after and rear animals. The vegetables, and in some cases meat from the farm, are used in the school kitchen. This not only promotes healthy eating but allows students to make the connection between what they eat and where and how it is grown.</p>
            </div>
            <div class="cell medium-6">
                <img src="images/farm/farm-01.jpg" alt="Park Community School Farm - Students grow their own food">
            </div>
        </div>
    </div>
</section>

<section class="video-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <div class="video-embed">
                    <iframe src="https://vimeo.com/album/5535864/embed" width="1280" height="720" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <h4>Contact</h4>
                <hr>
                <p>For questions and queries please visit Park Community School Reception on our <a href="/contact.php">Contact page</a>.</p>
            </div>
            <div class="cell medium-6 show-for-medium">
                <img src="images/farm/farm-03.jpg" alt="Park Farm - Grow and Eat, our Chef uses our own produce">
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>