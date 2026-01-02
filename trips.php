<?php
$pageTitle = 'Park Community School | Trips';
include('partials/header.php');
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
    }
    
    @media (max-width: 480px) {
        .trip-slideshow {
            height: 180px;
        }
    }
</style>


<!-- INTRO SECTION -->
<section class="content-section intro-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-7">
                <h2>Our Trips Are Amazing!</h2>
                <p>All trips at Park are carefully planned with student safety as our top priority. We offer diverse learning experiences beyond the classroom.</p>
                <p>Our trips are designed to enhance learning, develop life skills, and create lasting memories for all students.</p>
                <p>Payment is easy – pay online at <a href="https://www.scopay.com/pcs" target="_blank">SCO Online Payments</a> or at reception with card, cash or cheque.</p>
                
                <a href="https://www.scopay.com/pcs" target="_blank" class="payment-button">
                    <i class="fas fa-credit-card"></i>
                    Make a Payment
                </a>
            </div>
            <div class="cell medium-5">
                <div class="slideshow-container">
                    <div class="trip-slideshow">
                        <img src="images/trips/kewgardens.jpg" alt="School trip to Kew Gardens" class="active">
                        <img src="images/trips/tanzania.jpg" alt="Educational trip to Tanzania">
                        <img src="images/trips/disney1.jpg" alt="Students at Disney">
                        <img src="images/trips/farm1.jpg" alt="Learning at the farm">
                        <img src="images/trips/winchester1.jpg" alt="Trip to Winchester">
                        
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
    </div>
</section>

<!-- SCHOOL TRIPS SECTION -->
<section class="trips-section">
    <div class="grid-container">
        <h2>Current Trips</h2>
            
            <!-- Trip 1 - Hercules -->
            <div class="trip-card">
                <div class="trip-card-header">
                    <h3>Hercules the Musical</h3>
                </div>
                <div class="trip-card-body">
                    <div class="trip-detail">
                        <i class="fas fa-calendar-alt"></i>
                        <strong>Date:</strong>
                        <span>Thursday 8th January 2026</span>
                    </div>
                    <div class="trip-detail">
                        <i class="fas fa-user"></i>
                        <strong>Lead:</strong>
                        <span>Jodie Brown</span>
                    </div>
                    <div class="trip-detail">
                        <i class="fas fa-users"></i>
                        <strong>Year Group:</strong>
                        <span>Years 7–11</span>
                    </div>
                </div>
                <div class="trip-card-footer">
                    <div class="trip-cost">
                        <span class="trip-cost-label">Total Cost</span>
                        <span class="trip-cost-amount">£59</span>
                    </div>
                </div>
            </div>
        </div>
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

<?php include('partials/footer.php'); ?>