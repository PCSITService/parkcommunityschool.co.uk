<?php
$pageTitle = 'Park Community School | Safeguarding';
include('partials/header.php');
?>


<style>
    :root {
        --primary-color: #1E7AB9;
        --secondary-color: #a3cd42;
        --accent-color: #F58220;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #1E7AB9, #4a9fd4);
    }

    /* Emergency Banner */
    .emergency-banner {
        background: #dc3545;
        color: white;
        padding: 1rem 0;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .emergency-text {
        font-weight: 600;
        margin: 0;
        font-size: 0.95rem;
    }

    .emergency-text i {
        margin-right: 0.5rem;
    }

    /* Hero Section */
    .hero-section {
        background: var(--gradient);
        padding: 3rem 0;
        color: white;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.75rem;
        color: white;
    }

    .hero-subtitle {
        font-size: 1.1rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    /* DSL Section */
    .dsl-section {
        padding: 4rem 0;
        background: var(--bg-light);
    }

    .section-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 0.75rem;
    }

    .section-subtitle {
        font-size: 1.05rem;
        color: var(--text-light);
        max-width: 600px;
        margin: 0 auto;
    }

    /* Team Grid */
    .team-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .team-member-card {
        background: white;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
    }

    .team-member-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient);
    }

    .team-member-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(30, 122, 185, 0.2);
    }

    .team-member-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 1.25rem;
        border: 4px solid var(--bg-light);
        display: block;
    }

    .member-name {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.35rem;
    }

    .member-role {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 0.35rem;
    }

    .member-additional {
        font-size: 0.85rem;
        color: var(--text-light);
        font-style: italic;
    }

    /* Resources Section */
    .resources-section {
        background: white;
        padding: 4rem 0;
    }

    .resources-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .resource-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
    }

    .resource-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }

    .resource-icon {
        font-size: 2.5rem;
        color: var(--secondary-color);
        margin-bottom: 1.25rem;
    }

    .resource-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
    }

    .resource-description {
        color: var(--text-light);
        margin-bottom: 1.5rem;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .resource-button {
        display: inline-block;
        background: var(--secondary-color);
        color: white;
        padding: 0.75rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .resource-button:hover {
        background: #8fb332;
        transform: translateY(-2px);
        color: white;
    }

    /* Contact Section */
    .contact-section {
        background: var(--gradient);
        color: white;
        padding: 4rem 0;
    }

    .contact-section .section-title {
        color: white;
    }

    .contact-section .section-subtitle {
        color: rgba(255,255,255,0.9);
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        text-align: center;
    }

    .contact-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 2rem;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .contact-icon {
        font-size: 2rem;
        margin-bottom: 0.75rem;
        color: var(--accent-color);
    }

    .contact-title {
        font-size: 1.15rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .contact-info {
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
        opacity: 0.9;
    }

    .contact-phone {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--accent-color);
    }

    .contact-phone i {
        margin-right: 0.35rem;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .team-grid,
        .resources-grid,
        .contact-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .team-grid,
        .resources-grid,
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .hero-section h1 {
            font-size: 2rem;
        }

        .dsl-section,
        .resources-section,
        .contact-section {
            padding: 3rem 0;
        }

        .emergency-text {
            font-size: 0.85rem;
        }
    }
</style>

<!-- Emergency Banner -->
<div class="emergency-banner">
    <div class="grid-container">
        <p class="emergency-text">
            <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
            Child in immediate danger? Call 999 | Safeguarding concerns: 023 9248 9800 | HCC Children's Services: 0300 555 1384
        </p>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section">
    <div class="grid-container">
        <h1>Safeguarding</h1>
        <p class="hero-subtitle">Keeping every child safe is our highest priority at Park Community School</p>
    </div>
</section>

<!-- DSL Team Section -->
<section class="dsl-section">
    <div class="grid-container">
        <div class="section-header">
            <h2 class="section-title">Designated Safeguarding Leads</h2>
            <p class="section-subtitle">Our experienced team of safeguarding professionals are here to protect and support every child at Park Community School</p>
        </div>

        <div class="team-grid">
            <div class="team-member-card">
                <img src="images/dsl/SBN.png" alt="Ms S Bannard" class="team-member-image">
                <h3 class="member-name">Ms S Bannard</h3>
                <p class="member-role">Lead DSL</p>
                <p class="member-additional">Designated Teacher for LAC</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/JBY.png" alt="Mr J Bryce" class="team-member-image">
                <h3 class="member-name">Mr J Bryce</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/ELE.png" alt="Mrs E Leach" class="team-member-image">
                <h3 class="member-name">Mrs E Leach</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/TSE.png" alt="Mrs T Seaman" class="team-member-image">
                <h3 class="member-name">Mrs T Seaman</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/SHO.jpg" alt="Mrs Sian Howes" class="team-member-image">
                <h3 class="member-name">Mrs Sian Howes</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/JBR.png" alt="Mrs Jo-Anne Breedon" class="team-member-image">
                <h3 class="member-name">Mrs Jo-Anne Breedon</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/FFE.png" alt="Miss Florence Fearon" class="team-member-image">
                <h3 class="member-name">Miss Florence Fearon</h3>
                <p class="member-role">Community DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/FMA.jpg" alt="Mrs Fiona Maskill" class="team-member-image">
                <h3 class="member-name">Mrs Fiona Maskill</h3>
                <p class="member-role">Deputy DSL</p>
            </div>

            <div class="team-member-card">
                <img src="images/dsl/RBI.png" alt="Mrs Rachel Bird" class="team-member-image">
                <h3 class="member-name">Mrs Rachel Bird</h3>
                <p class="member-role">Nursery DSL</p>
            </div>
        </div>
    </div>
</section>

<!-- Resources Section -->
<section class="resources-section">
    <div class="grid-container">
        <div class="section-header">
            <h2 class="section-title">Safeguarding Resources</h2>
            <p class="section-subtitle">Access important information and tools to help keep children safe</p>
        </div>

        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-file-pdf" aria-hidden="true"></i>
                </div>
                <h3 class="resource-title">Visitor Information</h3>
                <p class="resource-description">Essential safeguarding information for all visitors to our school</p>
                <a href="assets/safeguarding/visitor.pdf" target="_blank" class="resource-button">Download Leaflet</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-book" aria-hidden="true"></i>
                </div>
                <h3 class="resource-title">Safeguarding Policy</h3>
                <p class="resource-description">Comprehensive safeguarding policy, procedures and guidance for the school</p>
                <a href="assets/policies/safeguarding.pdf" target="_blank" class="resource-button">Download Policy</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-file-contract" aria-hidden="true"></i>
                </div>
                <h3 class="resource-title">Safeguarding Adults</h3>
                <p class="resource-description">Safeguarding policy for adults within our school community</p>
                <a href="assets/policies/Safeguarding Adults  - November 2023.pdf" target="_blank" class="resource-button">Download Policy</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                </div>
                <h3 class="resource-title">Safe4me Platform</h3>
                <p class="resource-description">Online safety resources and guidance for parents and families</p>
                <a href="https://www.safe4me.co.uk/parents/" target="_blank" class="resource-button">Visit Safe4me</a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <i class="fas fa-users" aria-hidden="true"></i>
                </div>
                <h3 class="resource-title">Parent Advice</h3>
                <p class="resource-description">Comprehensive guidance and support for parents on safeguarding matters</p>
                <a href="/parent-advice.php" class="resource-button">Get Advice</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="grid-container">
        <div class="section-header">
            <h2 class="section-title">Contact Information</h2>
            <p class="section-subtitle">If you have any safeguarding concerns, please don't hesitate to contact us</p>
        </div>

        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-school" aria-hidden="true"></i>
                </div>
                <h3 class="contact-title">School Hours</h3>
                <p class="contact-info">For urgent safeguarding concerns</p>
                <p class="contact-phone"><i class="fas fa-phone" aria-hidden="true"></i> 023 9248 9800</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                </div>
                <h3 class="contact-title">HCC Children's Services</h3>
                <p class="contact-info">Hampshire County Council MASH Team</p>
                <p class="contact-phone"><i class="fas fa-phone" aria-hidden="true"></i> 0300 555 1384</p>
            </div>

            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-clock" aria-hidden="true"></i>
                </div>
                <h3 class="contact-title">Out of Hours</h3>
                <p class="contact-info">HCC Out of Hours Service</p>
                <p class="contact-phone"><i class="fas fa-phone" aria-hidden="true"></i> 0300 555 1373</p>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>