<?php
$pageTitle = 'Park Community School | Catering';
include('../partials/header.php');
?>

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
        --food-gradient: linear-gradient(135deg, #ff6b35, #ff8c42);
    }

    /* Content Sections */
    .content-section {
        padding: 4rem 0;
    }

    .chef-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .chef-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 4rem;
        align-items: start;
    }

    .chef-content h3 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        color: var(--primary-color);
        margin-bottom: 2rem;
        font-weight: 700;
    }

    .chef-content h3 small {
        color: var(--text-light);
        font-weight: 400;
        font-size: 0.7em;
    }

    .chef-team {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    }

    .chef-team h4 {
        font-size: 1.3rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .chef-team ul {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .chef-team ul li {
        padding: 0.5rem 0;
        color: var(--text-dark);
        font-size: 1.05rem;
        border-bottom: 1px solid #f0f0f0;
        display: grid;
        grid-template-columns: 160px 1fr auto;
        gap: 1rem;
        align-items: center;
    }

    .chef-team ul li:last-child {
        border-bottom: none;
    }

    .chef-team ul li strong {
        color: var(--primary-color);
    }

    .chef-role {
        text-align: left;
    }

    .chef-name {
        text-align: left;
    }

    .chef-bio-btn {
        display: inline-block;
        background: var(--secondary-color);
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        flex-shrink: 0;
        margin-left: 1rem;
    }

    .chef-bio-btn:hover {
        background: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* Chef Modal Styles */
    .chef-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.6);
        backdrop-filter: blur(5px);
    }

    .chef-modal-content {
        background-color: white;
        margin: 5% auto;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        width: 90%;
        max-width: 700px;
        position: relative;
        animation: modalSlideIn 0.3s ease;
    }

    @keyframes modalSlideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .chef-modal-close {
        color: var(--text-light);
        position: absolute;
        top: 1rem;
        right: 1.5rem;
        font-size: 2rem;
        font-weight: bold;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .chef-modal-close:hover,
    .chef-modal-close:focus {
        color: var(--accent-color);
    }

    .chef-modal-content h3 {
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        font-weight: 700;
    }

    .chef-modal-content p {
        color: var(--text-light);
        line-height: 1.8;
        margin-bottom: 1rem;
        font-size: 1.05rem;
    }

    .chef-content p {
        font-size: 1.1rem;
        color: var(--text-light);
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }

    .chef-sidebar {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .chef-image {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .chef-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .resource-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: var(--shadow);
        text-align: center;
        transition: all 0.3s ease;
        border: 1px solid #f0f0f0;
        text-decoration: none;
        display: block;
    }

    .resource-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        text-decoration: none;
    }

    .resource-card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 1rem;
    }

    .resource-card p {
        font-weight: 600;
        color: var(--text-dark);
        margin: 0;
    }

    .cta-button {
        display: inline-block;
        background: var(--success-color);
        color: white;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        margin: 2rem 0;
        transition: all 0.3s ease;
    }

    .cta-button:hover {
        background: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        text-decoration: none;
        color: white;
    }

    /* Video Container Styles */
    .video-container {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: var(--shadow);
        margin-top: 2rem;
    }

    .video-container h4 {
        font-size: 1.1rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .video-container video {
        width: 100%;
        max-height: 400px;
        border-radius: 10px;
        display: block;
        object-fit: contain;
        background: #000;
    }

    /* Brands Section */
    .brands-section {
        background: var(--bg-white);
        padding: 4rem 0;
    }

    .section-divider {
        text-align: center;
        margin: 3rem 0;
    }

    .divider-line {
        width: 60px;
        height: 4px;
        background: var(--gradient);
        margin: 0 auto;
        border-radius: 2px;
    }

    .brands-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 4rem;
        align-items: center;
        margin-bottom: 3rem;
    }

    .brands-content h3 {
        font-size: clamp(2rem, 4vw, 2.5rem);
        color: var(--secondary-color);
        margin-bottom: 2rem;
        font-weight: 700;
    }

    .brands-content h3 small {
        color: var(--text-light);
        font-weight: 400;
        font-size: 0.6em;
    }

    .brand-logo {
        text-align: center;
    }

    .brand-logo img {
        max-width: 100%;
        height: auto;
    }

    .products-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 4rem;
        align-items: start;
        margin-bottom: 3rem;
    }

    .product-section h4 {
        font-size: 1.5rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .product-section ul {
        list-style: none;
        padding-left: 0;
    }

    .product-section ul li {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 0.5rem;
        color: var(--text-light);
    }

    .product-section ul li:before {
        content: '🥓';
        position: absolute;
        left: 0;
        top: 0;
    }

    .farm-link {
        background: var(--food-gradient);
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
    }

    .farm-link:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
        text-decoration: none;
        color: white;
    }

    .farm-link img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 1rem;
    }

    .suppliers-section {
        margin-top: 2rem;
    }

    .suppliers-section h4 {
        font-size: 1.5rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .suppliers-section ul {
        list-style: none;
        padding-left: 0;
    }

    .suppliers-section ul li {
        position: relative;
        padding-left: 2rem;
        margin-bottom: 0.5rem;
        color: var(--text-light);
    }

    .suppliers-section ul li:before {
        content: '🌱';
        position: absolute;
        left: 0;
        top: 0;
    }

    .suppliers-section a {
        color: var(--secondary-color);
        text-decoration: none;
        font-weight: 600;
    }

    .suppliers-section a:hover {
        text-decoration: underline;
    }

    /* Awards Section */
    .awards-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .award-card {
        background: white;
        border-radius: 15px;
        padding: 3rem;
        box-shadow: var(--shadow);
        text-align: center;
        margin-bottom: 3rem;
        border: 1px solid #f0f0f0;
    }

    .award-card h4 {
        font-size: 1.8rem;
        color: var(--primary-color);
        margin-bottom: 1.5rem;
        font-weight: 700;
    }

    .award-card img {
        max-width: 300px;
        height: auto;
        margin: 2rem 0;
        border-radius: 10px;
    }

    .award-highlight {
        background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
        border-radius: 10px;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-left: 4px solid var(--success-color);
    }

    .award-card a {
        color: var(--secondary-color);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .chef-grid,
        .brands-grid,
        .products-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .chef-sidebar {
            order: -1;
        }

        .content-section {
            padding: 3rem 0;
        }

        .chef-team ul li {
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        .chef-role {
            text-align: left;
        }

        .chef-name {
            text-align: left;
            margin-bottom: 0.5rem;
        }

        .chef-bio-btn {
            justify-self: start;
            margin-left: 0;
        }
    }

    /* Focus styles */
    a:focus, button:focus {
        outline: 3px solid var(--accent-color);
        outline-offset: 2px;
    }
</style>

<!-- CHEF SECTION -->
<section class="chef-section">
    <div class="grid-container">
        <div class="chef-grid">
            <div class="chef-content">
                <h3>Our Chefs</h3>
                
                <div class="chef-team">
                    <ul>
                        <li>
                            <span class="chef-role"><strong>Executive Chef</strong></span>
                            <span class="chef-name">Steven Cross</span>
                            <button class="chef-bio-btn" data-chef="steven">View Bio</button>
                        </li>
                        <li>
                            <span class="chef-role"><strong>Head Chef</strong></span>
                            <span class="chef-name">Alex Moody</span>
                            <button class="chef-bio-btn" data-chef="alex">View Bio</button>
                        </li>
                    </ul>
                </div>
                
                <!-- Chef Bio Modals -->
                <div id="modal-steven" class="chef-modal">
                    <div class="chef-modal-content">
                        <span class="chef-modal-close" data-modal="steven">&times;</span>
                        <h3>Steve Cross - Executive Chef</h3>
                        <p>Cooking and working with food has been important to Steve from a young age, living with his mother Marie who was also a budding chef and baker was where the inspiration started, helping his mother to cook dinner or bake cakes really helped.</p>
                        <p>Steve spent 4 years at local Havant and Southdown's college studying catering and patisserie on a full time course, in the evening Steve would work at local prestigious restaurants increasing is knowledge and passion for the food world.</p>
                        <p>During his training Steve spent time working for Her Majesty Queen Elizabeth II at both Buckingham Palace and Windsor Castle cooking with the royal chef team.After Steves training was finished he quickly moved into working at local award winning restaurants and hotels honing his skills and helping him to better understand the Hospitality industry.</p>
                        <p>Steve joined Park Community School in 2014 as Head Chef and has helped the school to develop the catering provision along with his team. During this time Steve won the LACA School Chef of the Year in 2019 and still works closely with LACA. In 2021, Steve left the school to open his own bistro cafe in Emsworth but then returned to school as Executive Chef in 2023 to continue his work within education catering.</p>
                        <p>Currently Steve oversees all catering for Park Catering Service and works closely with other local school and food businesses.</p>
                    </div>
                </div>                
                
                <div id="modal-alex" class="chef-modal">
                    <div class="chef-modal-content">
                        <span class="chef-modal-close" data-modal="alex">&times;</span>
                        <h3>Alex Moody - Head Chef</h3>
                        <p>Cooking has always been Alex's passion. From a very young age, Alex cooked at home with his parents. After leaving school, he studied catering at South Downs College for two years and went on to an apprenticeship at a local hotel. Alex has spent years at Park working with Steve Cross, LACA School Chef of the Year. Alex won the South East LACA competition in 2021.</p>
                        <p>At Park Community School, Alex and the school's multi-award winning catering team continue to redefine school food to ensure all students receive a healthy well-balanced meal during the school day. Alex is developing and nurturing the talents within the catering team, whose members are rightly proud of the good food that has successfully been embedded into the life of the school and its community.</p>
                    </div>
                </div>
                
                <div class="video-container">
                    <h4>Jamie Oliver Food Award - 10 Downing Street</h4>
                    <video controls preload="metadata">
                        <source src="/images/awards/Catering - Jamie Oliver Food Award - 10 Downing Street.MP4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p style="margin-top: 1rem; margin-bottom: 0;"><a href="https://schoolfoodawards.jamieoliver.com/winner/alex-moody/" target="_blank" style="color: var(--secondary-color); font-weight: 600;">View Alex Moody's Jamie Oliver School Food Award →</a></p>
                </div>
                
            </div>
            
            <div class="chef-sidebar">
                <div class="chef-image">
                    <img src="../assets/schoolmeals/team25.jpg" alt="Park Community School Catering Team">
                </div>
                
                <a href="/assets/schoolmeals/menu.pdf" target="_blank" class="resource-card">
                    <img src="/images/schoolmeals/menu.png" alt="Park Community School Kitchen - The Watering Hole Menu">
                    <p>School Menu</p>
                </a>
                
                <a href="/assets/schoolmeals/educatering.pdf" target="_blank" class="resource-card">
                    <img src="/images/schoolmeals/educatering.jpg" alt="Educatering">
                    <p>Educatering - Magazine</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- BRANDS SECTION -->
<section class="brands-section">
    <div class="grid-container">
        <div class="section-divider">
            <div class="divider-line"></div>
        </div>
        
        <div class="brands-grid">
            <div class="brands-content">
                <h3>Cross&Moody | <small>Our Brands</small></h3>
                <p>These brand favourites have been developed by our award winning chefs Steven Cross and Alex Moody. All products used are of the best quality and we always try to use local seasonal organic produce.</p>
            </div>
            <div class="brand-logo">
                <img src="/images/schoolmeals/crossandmoody.png" alt="Cross and Moody brand logo">
            </div>
        </div>

        <div class="products-grid">
            <div class="product-section">
                <h4>Park Porkies</h4>
                <p>Park Community School have developed its own Pork based products which are now used in school and sold to external customers.</p>
                <ul>
                    <li>Pulled Pork</li>
                    <li>Park Porkies Sausages</li>
                    <li>Sausage Roll</li>
                </ul>
            </div>

            <div>
                <div class="farm-link" style="cursor: default;">
                    <img src="/images/schoolmeals/porky_logo.jpg" alt="Park Farm - Grow and Eat, our Chef uses our own produce">
                </div>
            </div>
        </div>
        
        <div class="products-grid">
            <div class="suppliers-section">
                <h4>Local & Organic Food</h4>
                <p>From summer 2016 Park Community School kitchens are now using seasonal, local and organic produce.</p>
                
                <h4>Our Suppliers</h4>
                <ul>
                    <li><a href="//www.tuppennybarn.co.uk/" target="_blank">Tuppenny Barn</a> - Fruit and Vegetables.</li>
                    <li><a href="https://www.treagustbutchers.co.uk/" target="_blank">Treagust Butchers</a> - Meat Products.</li>
                </ul>
            </div>
            <div>
                <img src="/images/schoolmeals/organic-standards.jpg" alt="Park Community School using local and organic produce in their school menu." style="width: 100%; border-radius: 15px;">
            </div>
        </div>
    </div>
</section>

<!-- AWARDS SECTION -->
<section class="awards-section">
    <div class="grid-container">
        <div class="award-card">
            <h4>Public Sector Catering Awards Winner 2020</h4>
            <div class="award-highlight">
                <p><strong>Education Award</strong> - Park Community School Catering Team</p>
                <p><strong>Chef of the Year</strong> - Steven Cross</p>
            </div>
            <p>Park Community School are thrilled that we scooped both Education Catering Award and Steven Cross for becoming the Public Sector Chef of the year. It's not every day you win these prestigious awards.</p>
            <img src="/images/schoolmeals/publicsectorcatering-winner2020.jpg" alt="Public Sector Catering Award 2020">
            <p>Head Chef Steven Cross worked with Tilda throughout October to <a href="//www.tilda.com/professionals/meet-the-chefs/steven-cross-head-chef-park-community-school/">create amazing onepot vegan dishes</a>. Why not check them out at the link attached and create your own one pot dish.</p>
            <p>Click <a href="https://3lamxj2sv6yp1bq9nd8t12bt-wpengine.netdna-ssl.com/professionals/wp-content/uploads/sites/2/2020/12/TIL19212-TILDA-case-study-pdf-Aw-web.pdf" target="_blank">here</a> for the recipe.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Animate cards
        const animatedElements = document.querySelectorAll('.resource-card, .award-card, .farm-link');
        animatedElements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
            observer.observe(el);
        });

        // Chef Bio Modal Functionality
        const bioButtons = document.querySelectorAll('.chef-bio-btn');
        const modals = document.querySelectorAll('.chef-modal');
        const closeButtons = document.querySelectorAll('.chef-modal-close');

        // Open modal when button is clicked
        bioButtons.forEach(button => {
            button.addEventListener('click', function() {
                const chefName = this.getAttribute('data-chef');
                const modal = document.getElementById('modal-' + chefName);
                if (modal) {
                    modal.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        // Close modal when X is clicked
        closeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const modalName = this.getAttribute('data-modal');
                const modal = document.getElementById('modal-' + modalName);
                if (modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Close modal when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target.classList.contains('chef-modal')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                modals.forEach(modal => {
                    modal.style.display = 'none';
                });
                document.body.style.overflow = 'auto';
            }
        });
    });
</script>

<?php include('../partials/footer.php'); ?>