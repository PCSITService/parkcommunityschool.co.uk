<?php
$pageTitle = 'Park Community School | Race at Our Place';
include('partials/header.php');
?>


<style>
    :root {
        --primary-color: #e91e63;
        --secondary-color: #2196f3;
        --accent-color: #ff9800;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #e91e63, #ff6b9d);
    }

    /* Header */
    .race-header {
        background: var(--gradient);
        color: white;
        padding: 2.5rem 0;
        text-align: center;
    }

    .race-header h1 {
        color: white;
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .race-header p {
        color: white;
        margin-bottom: 0;
        opacity: 0.9;
        font-size: 1.1rem;
    }

    /* Video Section */
    .video-section {
        padding: 3rem 0;
        background: var(--bg-light);
    }

    .video-container-modern {
        position: relative;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease;
        background: white;
        padding: 1rem;
        max-width: 800px;
        margin: 0 auto;
    }

    .video-container-modern:hover {
        transform: translateY(-5px);
    }

    .video-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 15px;
    }

    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Content Section */
    .content-section {
        background: var(--bg-white);
        padding: 3rem 0;
    }

    .cancer-content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .cancer-content h3 {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        font-weight: 700;
    }

    .cancer-content p {
        font-size: 1.05rem;
        color: var(--text-light);
        margin-bottom: 1.25rem;
        line-height: 1.8;
    }

    .cancer-logo-container {
        text-align: center;
    }

    .logo-modern-card {
        background: white;
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: var(--shadow);
        display: inline-block;
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }

    .logo-modern-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(233, 30, 99, 0.2);
    }

    .logo-modern-card img {
        max-width: 350px;
        width: 100%;
        height: auto;
        display: block;
    }

    /* Statistics Cards */
    .stats-section {
        padding: 3rem 0;
        background: var(--bg-light);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2rem;
    }

    .stat-card {
        background: white;
        padding: 2rem 1.5rem;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .stat-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 0.95rem;
        color: var(--text-light);
        font-weight: 500;
    }

    /* Call to Action Section */
    .cta-section {
        background: var(--gradient);
        padding: 4rem 0;
        text-align: center;
        color: white;
    }

    .cta-content h3 {
        font-size: 2rem;
        margin-bottom: 1rem;
        font-weight: 700;
        color: white;
    }

    .cta-content p {
        font-size: 1.1rem;
        margin-bottom: 0;
        opacity: 0.9;
        color: white;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .cancer-content-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .cancer-logo-container {
            order: -1;
        }

        .stats-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .race-header h1 {
            font-size: 2rem;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .stat-card {
        animation: fadeInUp 0.6s ease-out;
    }

    .stat-card:nth-child(1) { animation-delay: 0.1s; }
    .stat-card:nth-child(2) { animation-delay: 0.2s; }
    .stat-card:nth-child(3) { animation-delay: 0.3s; }
    .stat-card:nth-child(4) { animation-delay: 0.4s; }
</style>


<!-- VIDEO CONTENT -->
<section class="video-section">
    <div class="grid-container">
        <div class="video-container-modern">
            <div class="video-embed">
                <iframe src="https://player.vimeo.com/video/299177336" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen
                        title="Race at Our Place Event Video">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- CANCER RESEARCH SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="cancer-content-grid">
            <div class="cancer-content">
                <h3>Raising Awareness of Cancer</h3>
                <p>Race at Our Place started in 2013 as more than just a fun run – it's a powerful demonstration of community unity in the fight against cancer. Our students and staff come together annually to raise both funds and awareness for vital cancer research.</p>
                <p>Each year, we witness the incredible power of community as local residents, families, and supporters gather to cheer on our runners. This heartwarming display of solidarity shows how a school event can become a beacon of hope for such an important cause.</p>
                <p>Through this initiative, Park Community School demonstrates our commitment to making a meaningful difference in the lives of those affected by cancer while educating our students about the importance of community service and scientific research.</p>
            </div>
            
            <div class="cancer-logo-container">
                <div class="logo-modern-card">
                    <img src="images/race-at-our-place/cancer_research.png" alt="Cancer Research UK Logo">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT STATISTICS -->
<section class="stats-section">
    <div class="grid-container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                </div>
                <div class="stat-number">11+</div>
                <div class="stat-label">Years Running</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users" aria-hidden="true"></i>
                </div>
                <div class="stat-number">1,000+</div>
                <div class="stat-label">Community Participants</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-heart" aria-hidden="true"></i>
                </div>
                <div class="stat-number">100%</div>
                <div class="stat-label">Community Spirit</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-microscope" aria-hidden="true"></i>
                </div>
                <div class="stat-number">∞</div>
                <div class="stat-label">Hope Generated</div>
            </div>
        </div>
    </div>
</section>

<!-- GET INVOLVED SECTION -->
<section class="cta-section">
    <div class="grid-container">
        <div class="cta-content">
            <h3>Join Us Next Year</h3>
            <p>Be part of something bigger. Help us continue supporting cancer research and our community.</p>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>