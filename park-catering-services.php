<?php
$pageTitle = 'Park Community School | Catering Services';
include('partials/header.php');
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

<style>
    :root {
        --primary-color: #2c5aa0;
        --secondary-color: #3d7c47;
        --accent-color: #ff6b35;
        --success-color: #28a745;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --bg-white: #ffffff;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #3d7c47, #5a9a5a);
    }

    /* Header */
    .catering-header {
        background: var(--gradient);
        padding: 3rem 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .catering-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="food" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white" opacity="0.1"/><circle cx="20" cy="20" r="1.5" fill="white" opacity="0.08"/></pattern></defs><rect width="100" height="100" fill="url(%23food)"/></svg>');
    }

    .catering-header h1 {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        position: relative;
        z-index: 2;
        color: white;
    }

    .catering-header p {
        font-size: 1.2rem;
        opacity: 0.9;
        position: relative;
        z-index: 2;
        margin: 0;
        color: white;
    }

    /* Services Section */
    .services-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .services-content {
        max-width: 900px;
        margin: 0 auto;
    }

    .services-content h3 {
        font-size: 2rem;
        color: var(--primary-color);
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
    }

    .services-content p {
        font-size: 1.05rem;
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
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #e0e0e0;
        color: var(--text-dark);
    }

    .services-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: var(--success-color);
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Menus Section */
    .menus-section {
        background: var(--bg-white);
        padding: 4rem 0;
    }

    .section-divider {
        text-align: center;
        margin-bottom: 3rem;
    }

    .divider-line {
        width: 60px;
        height: 4px;
        background: var(--gradient);
        margin: 0 auto;
        border-radius: 2px;
    }

    .section-title {
        font-size: 2rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 700;
        text-align: center;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--text-light);
        max-width: 800px;
        margin: 0 auto 3rem;
        text-align: center;
    }

    .menu-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .menu-card {
        border-radius: 20px;
        padding: 2.5rem;
        text-align: center;
        color: white;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }

    .menu-card:hover {
        transform: translateY(-8px);
    }

    .menu-card.secondary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .menu-card.primary {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }

    .menu-card.nursery {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .menu-card .icon {
        font-size: 3.5rem;
        margin-bottom: 1rem;
    }

    .menu-card h4 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
        color: white;
    }

    .menu-card .button {
        display: inline-block;
        background: white;
        padding: 12px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .menu-card.secondary .button {
        color: #667eea;
    }

    .menu-card.primary .button {
        color: #f5576c;
    }

    .menu-card.nursery .button {
        color: #4facfe;
    }

    .menu-card .button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.3);
    }

    /* Linked Schools Section */
    .schools-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .schools-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2.5rem;
        max-width: 900px;
        margin: 0 auto;
    }

    .school-card {
        background: white;
        border-radius: 15px;
        padding: 2.5rem;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 180px;
    }

    .school-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.15);
        border-color: var(--primary-color);
    }

    .school-card .icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .school-card h4 {
        font-size: 1.4rem;
        color: var(--primary-color);
        margin-bottom: 0.5rem;
        font-weight: 700;
    }

    .school-card p {
        color: #666;
        margin: 0;
        font-size: 0.95rem;
    }

    .school-card .visit-link {
        margin-top: 1rem;
        color: var(--secondary-color);
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .catering-header {
            padding: 2rem 0;
        }

        .catering-header h1 {
            font-size: 2rem;
        }

        .menu-cards {
            grid-template-columns: 1fr;
        }

        .schools-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="catering-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Catering Services</h1>
                <p>Award-winning chef led catering solutions</p>
            </div>
        </div>
    </div>
</header>

<!-- SERVICES SECTION -->
<section class="services-section">
    <div class="grid-container">
        <div class="services-content">
            <h3>Services</h3>
            <p>Our established award-winning in-house chef led catering team have honed their skills over many years, working throughout all areas of the hospitality and catering industry. The team have in-depth knowledge of restaurant, events and public sector hospitality and catering. The Park Catering Service Team are highly motivated, driven and standard led. We have now worked with a range of audiences, always meeting set standards and ensuring to deliver and work within statutory guidelines.</p>
            
            <p><strong>So, how can we help you to go further and develop your service?</strong></p>
            
            <ul class="services-list">
                <li>Support and guidance helping you to bring your catering operation in house within all education settings</li>
                <li>Commercial catering support</li>
                <li>Award winning chef led catering support</li>
                <li>Consultancy and support services</li>
                <li>Advice on rebranding of your provision and helping you create your own style</li>
                <li>Supplier setup and financial support services</li>
                <li>Environmental Health support, ensuring you're working to correct standards</li>
                <li>Training catering staff to high modern standards that help your service succeed</li>
                <li>Menu development</li>
                <li>Allergen and intolerance support</li>
                <li>Event catering</li>
                <li>Function catering</li>
            </ul>
            
            <p>We work closely with other schools helping to support their journey and ensure they can always offer the best possible options for their provision.</p>
        </div>
    </div>
</section>

<!-- SAMPLE MENUS SECTION -->
<section class="menus-section">
    <div class="grid-container">
        <div class="section-divider">
            <div class="divider-line"></div>
        </div>
        
        <h3 class="section-title">Sample Menu Packs</h3>
        <p class="section-subtitle">Explore our professionally designed menu packs tailored for different educational settings</p>

        <div class="menu-cards">
            <div class="menu-card secondary">
                <div class="icon">🎓</div>
                <h4>Secondary School</h4>
                <a href="/assets/schoolmeals/menu.pdf" target="_blank" class="button">View Menu Pack</a>
            </div>

            <div class="menu-card primary">
                <div class="icon">📚</div>
                <h4>Primary / Junior School</h4>
                <a href="/assets/schoolmeals/Riders Menu Pack 2025 Proof.pdf" target="_blank" class="button">View Menu Pack</a>
            </div>

            <div class="menu-card nursery">
                <div class="icon">🧸</div>
                <h4>Nursery</h4>
                <a href="#" class="button">View Menu Pack</a>
            </div>
        </div>
    </div>
</section>

<!-- LINKED SCHOOLS SECTION -->
<section class="schools-section">
    <div class="grid-container">
        <h3 class="section-title" style="color: var(--primary-color);">Linked Schools</h3>
        <p class="section-subtitle">Schools we proudly work with and support</p>

        <div class="schools-grid">
            <a href="https://www.crookhorn.hants.sch.uk/" target="_blank" class="school-card">
                <div class="icon">🏫</div>
                <h4>Crookhorn College</h4>
                <p>Secondary School</p>
                <div class="visit-link">Visit Website →</div>
            </a>

            <a href="https://www.ridersschools.co.uk/" target="_blank" class="school-card">
                <div class="icon">🎒</div>
                <h4>Riders Federation</h4>
                <p>Infant &amp; Junior Schools</p>
                <div class="visit-link">Visit Website →</div>
            </a>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>