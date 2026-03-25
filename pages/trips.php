<?php
$pageTitle = 'Park Community School | Trips';
include('../partials/header.php');
?>

<style>
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
        color: #333;
    }
    
    .content-section a {
        color: #3498db;
    }
    
    .content-section a:hover {
        color: #2980b9;
    }
    
    .intro-section h2 {
        color: #3498db;
        margin-bottom: 1rem;
    }

    /* India 2026 section */
    .india-section {
        padding: 2rem 0 3rem;
        margin-bottom: 0;
    }

    .india-section h2 {
        color: #F58220;
        font-size: 1.6rem;
        margin-bottom: 1rem;
    }

    .india-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
        color: #333;
    }

    .india-section strong {
        color: #333;
    }

    /* Video embed wrapper */
    .video-wrapper {
        margin: 1.25rem 0 1.5rem;
        background: #f5f5f5;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    }

    .video-wrapper video,
    .video-wrapper iframe {
        width: 100%;
        display: block;
        border: none;
        border-radius: 10px;
    }

    /* 5-photo grid: 3 top, 2 centred bottom */
    .trips-photo-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
        margin: 1.5rem 0;
    }

    .trips-photo-grid .bottom-row {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
        max-width: 66.66%;
        margin: 0 auto;
        width: 100%;
    }

    .trips-photo-grid img,
    .trips-photo-grid .bottom-row img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        object-position: center center;
        border-radius: 8px;
        display: block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    }

    /* What to expect subheading */
    .what-to-expect-heading {
        color: #F58220;
        font-size: 1.3rem;
        font-weight: 700;
        margin: 2rem 0 1rem;
        padding-bottom: 0.4rem;
        border-bottom: 2px solid #f0f0f0;
    }
    
    /* Gallery Slideshow */
    .slideshow-container {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        height: 100%;
    }
    
    .trip-slideshow {
        position: relative;
        width: 100%;
        max-width: 400px;
        height: 250px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    
    .trip-slideshow img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
    
    .trip-slideshow img.active {
        opacity: 1;
    }
    
    .slideshow-controls {
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        z-index: 10;
    }
    
    .slideshow-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255,255,255,0.5);
        cursor: pointer;
        transition: all 0.3s ease;
        border: 2px solid white;
    }
    
    .slideshow-dot.active {
        background: #a3cd42;
    }
    
    .slideshow-dot:hover {
        background: rgba(255,255,255,0.8);
    }
    
    .slideshow-arrows {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        box-sizing: border-box;
        z-index: 10;
    }
    
    .slideshow-arrow {
        background: rgba(0,0,0,0.4);
        color: white;
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .slideshow-arrow:hover {
        background: rgba(0,0,0,0.7);
    }
    
    .payment-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: #28a745;
        color: white !important;
        padding: 1rem 2rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .payment-button:hover {
        background-color: #218838;
        color: white !important;
        transform: translateY(-2px);
    }
    
    /* Trips Section */
    .trips-section {
        background-color: #3498db;
        color: white;
        padding: 3rem 0;
    }
    
    .trips-section h2 {
        text-align: center;
        color: white;
        margin-bottom: 2.5rem;
        font-size: 2rem;
        font-weight: 700;
    }
    
    /* Trip Cards Grid */
    .trips-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
    }
    
    .trip-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .trip-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .trip-card-header {
        background: linear-gradient(135deg, #a3cd42, #8fb332);
        padding: 1.25rem 1.5rem;
    }
    
    .trip-card-header h3 {
        color: white;
        margin: 0;
        font-size: 1.35rem;
        font-weight: 600;
    }
    
    .trip-card-body {
        padding: 1.5rem;
    }
    
    .trip-detail {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0.75rem;
        color: #333;
    }
    
    .trip-detail:last-child {
        margin-bottom: 0;
    }
    
    .trip-detail i {
        width: 24px;
        color: #3498db;
        margin-right: 0.75rem;
        margin-top: 2px;
    }
    
    .trip-detail strong {
        color: #333;
        margin-right: 0.5rem;
    }
    
    .trip-detail span {
        color: #555;
    }
    
    .trip-card-footer {
        padding: 1rem 1.5rem;
        background: #f8f9fa;
        border-top: 1px solid #e9ecef;
    }
    
    .trip-cost {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }
    
    .trip-letter-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        width: 100%;
        padding: 0.75rem 1rem;
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white !important;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        box-shadow: 0 3px 8px rgba(52, 152, 219, 0.4);
        border-bottom: 3px solid #1f6aa5;
        box-sizing: border-box;
        letter-spacing: 0.02em;
    }
    
    .trip-letter-btn:hover {
        background: linear-gradient(135deg, #2980b9, #1f6aa5);
        color: white !important;
        transform: translateY(-1px);
        box-shadow: 0 5px 12px rgba(52, 152, 219, 0.5);
    }
    
    .trip-letter-btn:active {
        transform: translateY(1px);
        box-shadow: 0 2px 4px rgba(52, 152, 219, 0.4);
        border-bottom-width: 1px;
    }
    
    .trip-cost-label {
        color: #666;
        font-weight: 500;
    }
    
    .trip-cost-amount {
        font-size: 1.5rem;
        font-weight: 700;
        color: #28a745;
    }
    
    /* No trips message */
    .no-trips {
        text-align: center;
        padding: 3rem;
        background: rgba(255,255,255,0.1);
        border-radius: 12px;
    }
    
    .no-trips i {
        font-size: 3rem;
        margin-bottom: 1rem;
        opacity: 0.7;
    }
    
    .no-trips p {
        color: white;
        font-size: 1.1rem;
        margin: 0;
    }
    
    @media (max-width: 768px) {
        .slideshow-container {
            margin-top: 1.5rem;
        }
        
        .trip-slideshow {
            max-width: 100%;
            height: 200px;
        }
        
        .trips-grid {
            grid-template-columns: 1fr;
        }

        .trips-photo-grid {
            grid-template-columns: 1fr;
        }

        .trips-photo-grid .bottom-row {
            max-width: 100%;
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 480px) {
        .trip-slideshow {
            height: 180px;
        }
    }
</style>

<!-- INDIA 2026 SECTION -->
<section class="india-section content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h2>India 2026 -</h2>

                <p>The January 2026  India trip offered a unique 10-day experience in New Delhi. This was a culturally rich visit is designed to build bonds beyond borders, giving students the opportunity to explore iconic landmarks  whilst being fully immersed in daily life. The trip provided an unforgettable opportunity to develop global awareness, cultural understanding, and lasting connections whilst truly living the culture.</p>

                <p><strong>Watch our adventures through this short film -</strong></p>

                <a href="https://vimeo.com/1174842121?share=copy&fl=sv&fe=ci" target="_blank" class="payment-button" style="margin: 0.5rem 0 1.5rem; display: inline-flex;">
                    <i class="fas fa-play-circle"></i>
                    India 2026 Film
                </a>

            </div>
        </div>
    </div>
</section>


<!-- INTRO SECTION -->
<section class="content-section intro-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h2 class="what-to-expect-heading">What to expect from our amazing trips -</h2>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell medium-7">
                <p>At Park Community School we offer a wide range of trips for students within the local area, Hampshire, the UK and internationally. School trips are fantastic for transforming theoretical classroom knowledge into tangible, real-world experiences.</p>
                <p>Our trips enrich learning, offering students memorable experiences that extend far beyond the classroom. Through a range of local, national, and international visits—including both day trips and residential opportunities—students are able to deepen their understanding of the curriculum while developing essential life skills. In addition, our trips help to foster personal development, boost confidence, enhance social skills through collaboration, and often provide students with better subject comprehension.</p>
                <p>Throughout time at Park students will have to opportunity to participate in a range of trips within each year group, each trip is carefully planned with student safety as our top priority. </p>
            </div>
            <div class="cell medium-5">
                <div class="slideshow-container">
                    <div class="trip-slideshow">
                        <img src="/images/trips/kewgardens.jpg" alt="School trip to Kew Gardens" class="active">
                        <img src="/images/trips/tanzania.jpg" alt="Educational trip to Tanzania">
                        <img src="/images/trips/disney1.jpg" alt="Students at Disney">
                        <img src="/images/trips/farm1.jpg" alt="Learning at the farm">
                        <img src="/images/trips/winchester1.jpg" alt="Trip to Winchester">
                        
                        <div class="slideshow-arrows">
                            <button class="slideshow-arrow" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></button>
                            <button class="slideshow-arrow" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></button>
                        </div>
                        
                        <div class="slideshow-controls">
                            <span class="slideshow-dot active" onclick="goToSlide(0)"></span>
                            <span class="slideshow-dot" onclick="goToSlide(1)"></span>
                            <span class="slideshow-dot" onclick="goToSlide(2)"></span>
                            <span class="slideshow-dot" onclick="goToSlide(3)"></span>
                            <span class="slideshow-dot" onclick="goToSlide(4)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5-photo grid matching PDF layout: 3 top, 2 centred bottom -->
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <div class="trips-photo-grid">
                    <img src="/images/trips/TRIPS1.jpg" alt="School trips">
                    <img src="/images/trips/TRIPS2.jpg" alt="School trips">
                    <img src="/images/trips/TRIPS3.jpg" alt="School trips">
                    <div class="bottom-row">
                    </div>
                </div>

                <p>Payment for current trips is easy – pay online at <a href="https://www.scopay.com/pcs" target="_blank">SCO Online Payments</a> or at reception with card, cash or cheque.</p>
                
                <a href="https://www.scopay.com/pcs" target="_blank" class="payment-button">
                    <i class="fas fa-credit-card"></i>
                    Make a Payment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- SCHOOL TRIPS SECTION -->
<section class="trips-section">
    <div class="grid-container">
        <h2>Current Trips:</h2>
        <div class="trips-grid">
            <!--<div class="no-trips">
                <i class="fas fa-suitcase"></i>
                <p>Sorry there is currently no trips at the moment</p>
            </div>-->
            <div class="trip-card">
                <div class="trip-card-header">
                    <h3>Barcelona 2026</h3>
                </div>
                <div class="trip-card-body">
                    <div class="trip-detail">
                        <i class="fas fa-calendar-alt"></i>
                        <strong>Date:</strong>
                        <span>5th October 2026</span>
                    </div>
                    <div class="trip-detail">
                        <i class="fas fa-user"></i>
                        <strong>Lead:</strong>
                        <span>Marie Dermy</span>
                    </div>
                    <div class="trip-detail">
                        <i class="fas fa-users"></i>
                        <strong>Year Group:</strong>
                        <span>Years 9–10</span>
                    </div>
                </div>
                <div class="trip-card-footer">
                    <div class="trip-cost">
                        <span class="trip-cost-label">Total Cost</span>
                        <span class="trip-cost-amount">£700</span>
                    </div>
                    <a href="/assets/letters/2026-03/Barcelona 2026.pdf" target="_blank" class="trip-letter-btn">
                        <i class="fas fa-file-alt"></i>
                        Trip Letter
                    </a>
                </div>
            </div><!-- /.trip-card -->
        </div><!-- /.trips-grid -->
    </div>
</section>



<script>
// Slideshow functionality
let currentSlide = 0;
const slides = document.querySelectorAll('.trip-slideshow img');
const dots = document.querySelectorAll('.slideshow-dot');
const totalSlides = slides.length;
let autoSlideTimer;

function showSlide(index) {
    // Handle wrapping
    if (index >= totalSlides) currentSlide = 0;
    else if (index < 0) currentSlide = totalSlides - 1;
    else currentSlide = index;
    
    // Update slides
    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === currentSlide);
    });
    
    // Update dots
    dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentSlide);
    });
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
    resetAutoSlide();
}

function goToSlide(index) {
    showSlide(index);
    resetAutoSlide();
}

function autoSlide() {
    showSlide(currentSlide + 1);
}

function resetAutoSlide() {
    clearInterval(autoSlideTimer);
    autoSlideTimer = setInterval(autoSlide, 4000);
}

// Start auto-slide
autoSlideTimer = setInterval(autoSlide, 4000);
</script>

<?php include('../partials/footer.php'); ?>