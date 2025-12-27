<?php
$pageTitle = 'Park Community School - Farm';
include('partials/header.php');
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #2c5aa0;
        --secondary-color: #3d7c47;
        --accent-color: #ff6b35;
        --success-color: #28a745;
        --warning-color: #ffc107;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #3d7c47, #5a9a5a);
    }

    /* Slideshow Styles */
    .slideshow-section {
        background: var(--bg-white);
        padding: 4rem 0;
        overflow: hidden;
    }

    .slideshow-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }

    .slide {
        display: none;
        position: relative;
        width: 100%;
        animation: fadeIn 0.8s ease-in-out;
    }

    .slide.active {
        display: block;
    }

    .slide img {
        width: 100%;
        height: 600px;
        object-fit: cover;
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0.6; }
        to { opacity: 1; }
    }

    /* Navigation Arrows */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        color: var(--secondary-color);
        font-size: 24px;
        border: none;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .prev:hover, .next:hover {
        background: var(--secondary-color);
        color: white;
        transform: translateY(-50%) scale(1.1);
    }

    .prev {
        left: 20px;
    }

    .next {
        right: 20px;
    }

    /* Dot Navigation */
    .dots-container {
        text-align: center;
        padding: 25px 0;
        background: linear-gradient(to bottom, rgba(255,255,255,0.95), rgba(255,255,255,1));
        position: relative;
    }

    .dot {
        cursor: pointer;
        height: 14px;
        width: 14px;
        margin: 0 6px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .dot.active, .dot:hover {
        background-color: var(--secondary-color);
        transform: scale(1.3);
        border-color: var(--secondary-color);
    }

    /* Content Sections */
    .content-section {
        padding: 4rem 0;
    }

    .chef-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .chef-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .chef-content h3 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        color: var(--secondary-color);
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
    }

    .chef-content p {
        font-size: 1.1rem;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }

    .services-list {
        list-style: none;
        padding-left: 0;
        margin: 2rem 0;
    }

    .services-list li {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #e0e0e0;
        color: var(--text-dark);
    }

    .services-list li:before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: var(--success-color);
        font-weight: bold;
        font-size: 1.2rem;
    }

    .contact-info {
        background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
        padding: 2rem;
        border-radius: 15px;
        margin-top: 3rem;
        text-align: center;
        border: 1px solid #d4edda;
    }

    .contact-info p {
        font-size: 1.1rem;
        margin: 0;
    }

    .contact-info a {
        color: var(--secondary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .contact-info a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .content-section {
            padding: 3rem 0;
        }

        .slide img {
            height: 400px;
        }

        .prev, .next {
            width: 45px;
            height: 45px;
            font-size: 18px;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .slideshow-section {
            padding: 2rem 0;
        }
    }

    @media (max-width: 480px) {
        .slide img {
            height: 300px;
        }
    }

    /* Focus styles */
    a:focus, button:focus {
        outline: 3px solid var(--accent-color);
        outline-offset: 2px;
    }
</style>

<!-- SLIDESHOW SECTION -->
<section class="slideshow-section">
    <div class="grid-container">
        <div class="slideshow-container">
            <!-- Slides -->
            <div class="slide active">
                <img src="/assets/farm/pictures/thumbnail_image0.jpg" alt="Park Community School Farm - View 1">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image1.jpg" alt="Park Community School Farm - View 2">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image2.jpg" alt="Park Community School Farm - View 3">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image3.jpg" alt="Park Community School Farm - View 4">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image4.jpg" alt="Park Community School Farm - View 5">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image5.jpg" alt="Park Community School Farm - View 6">
            </div>
            <div class="slide">
                <img src="/assets/farm/pictures/thumbnail_image6.jpg" alt="Park Community School Farm - View 7">
            </div>

            <!-- Navigation Arrows -->
            <button class="prev" aria-label="Previous slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="next" aria-label="Next slide">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Dot Navigation -->
            <div class="dots-container">
                <span class="dot active" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
                <span class="dot" data-slide="4"></span>
                <span class="dot" data-slide="5"></span>
                <span class="dot" data-slide="6"></span>
                <span class="dot" data-slide="7"></span>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="chef-section">
    <div class="grid-container">
        <div class="chef-content">
            <h3>Extra Curricular Activities</h3>
            <p>Here at Park Community School we are incredibly proud that we offer all of our students a wide range of extra curricular activities, we feel this really does help when they are developing into rounded people which helps them to better understand our world.</p>
            
            <p>Our small holding on a farm is set three miles away from the main school site and is home to a vast array of plant life, animals and insects. This allows all of our students to discover, explore and engage with nature.</p>
            
            <p>Students in years 7, 8, 9 and 10 all get the opportunity during our "Much More Than" rotation to experience the farm with our horticulture department and Animal care instructors. At the farm we have 28 raised beds, 2 large industrial poly tunnels, a dozen active bee hives, and animal pens. Visits to our small holding help students to learn about how vital farming is to our country and where our food really comes from.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let slideIndex = 1;
        let slideTimer;
        
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        const slideshowContainer = document.querySelector('.slideshow-container');

        // Initialize slideshow
        showSlides(slideIndex);
        startAutoPlay();

        // Event listeners
        prevBtn.addEventListener('click', function() {
            changeSlide(-1);
        });

        nextBtn.addEventListener('click', function() {
            changeSlide(1);
        });

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentSlide(parseInt(this.dataset.slide));
            });
        });

        // Next/previous controls
        function changeSlide(n) {
            stopAutoPlay();
            showSlides(slideIndex += n);
            startAutoPlay();
        }

        // Thumbnail image controls
        function currentSlide(n) {
            stopAutoPlay();
            showSlides(slideIndex = n);
            startAutoPlay();
        }

        function showSlides(n) {
            if (n > slides.length) { slideIndex = 1; }
            if (n < 1) { slideIndex = slides.length; }
            
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[slideIndex - 1].classList.add('active');
            dots[slideIndex - 1].classList.add('active');
        }

        // Auto-play functionality
        function autoPlaySlides() {
            slideIndex++;
            showSlides(slideIndex);
        }

        function startAutoPlay() {
            slideTimer = setInterval(autoPlaySlides, 5000);
        }

        function stopAutoPlay() {
            clearInterval(slideTimer);
        }

        // Pause on hover
        slideshowContainer.addEventListener('mouseenter', stopAutoPlay);
        slideshowContainer.addEventListener('mouseleave', startAutoPlay);

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (event.key === 'ArrowRight') {
                changeSlide(1);
            }
        });
    });
</script>

<?php include('partials/footer.php'); ?>