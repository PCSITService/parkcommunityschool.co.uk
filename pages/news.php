<?php
$pageTitle = 'Park Community School | News';
include('../partials/header.php');
?>

<style>
    :root {
        --primary-color: #1a1a1a;
        --secondary-color: #0066cc;
        --success-color: #00a86b;
        --park-green: #a3cd42;
        --background-light: #ffffff;
        --background-dark: #f8f9fa;
        --text-primary: #333;
        --border-radius: 12px;
        --shadow: 0 4px 20px rgba(0,0,0,0.08);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Page Header */
    .news-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, #333 100%);
        color: white;
        padding: 3rem 0;
        text-align: center;
    }

    .news-header h1 {
        color: white;
        font-size: 2.5rem;
        margin: 0;
    }

    /* Content Section */
    .content-section {
        padding: 3rem 0;
        background: var(--background-light);
    }


    .main-nav-button {
        background: linear-gradient(135deg, var(--park-green), #8fb332);
        border: none;
        color: white;
        padding: 1rem 2rem;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: 0 4px 15px rgba(163, 205, 66, 0.3);
    }

    .main-nav-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(163, 205, 66, 0.4);
        color: white;
        background: linear-gradient(135deg, #8fb332, #7a9c2d);
    }

    .main-nav-button .icon {
        font-size: 1.2rem;
    }

    /* Video Container */
    .video-container {
        position: relative;
        margin: 2rem 0;
        border-radius: var(--border-radius);
        overflow: hidden;
        box-shadow: var(--shadow);
        background: white;
    }

    .video-container iframe {
        width: 100%;
        height: 500px;
        border: none;
    }

    /* Content Intro */
    .content-intro {
        text-align: center;
        margin: 3rem 0 2rem;
    }

    .content-intro h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 1rem;
    }

    .content-intro p {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }

    /* News Grid */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
    }

    .news-item {
        background: white;
        padding: 1.5rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        transition: var(--transition);
        border: 1px solid #f0f0f0;
        position: relative;
        overflow: hidden;
    }

    .news-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: var(--secondary-color);
        transform: scaleY(0);
        transition: var(--transition);
    }

    .news-item:hover::before {
        transform: scaleY(1);
    }

    .news-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0,0,0,0.15);
    }

    .news-item a {
        color: var(--text-primary);
        text-decoration: none;
        font-weight: 500;
        display: block;
        font-size: 1rem;
        line-height: 1.5;
    }

    .news-item a:hover {
        color: var(--secondary-color);
    }

    .news-item .news-icon {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    /* Award Sections */
    .award-section {
        padding: 3rem 0;
        position: relative;
    }

    .award-section.grey-bg {
        background: #fafafa;
    }

    .award-section h3,
    .award-section h4,
    .award-section p {
        color: #333;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .news-header h1 {
            font-size: 2rem;
        }
        
        .content-intro h2 {
            font-size: 2rem;
        }
        
        .video-container iframe {
            height: 300px;
        }
        
        .news-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .news-item {
        animation: fadeInUp 0.6s ease-out;
    }

    .news-item:nth-child(1) { animation-delay: 0.1s; }
    .news-item:nth-child(2) { animation-delay: 0.15s; }
    .news-item:nth-child(3) { animation-delay: 0.2s; }
    .news-item:nth-child(4) { animation-delay: 0.25s; }
    .news-item:nth-child(5) { animation-delay: 0.3s; }
    .news-item:nth-child(6) { animation-delay: 0.35s; }
    .news-item:nth-child(7) { animation-delay: 0.4s; }
    .news-item:nth-child(8) { animation-delay: 0.45s; }
    .news-item:nth-child(9) { animation-delay: 0.5s; }
    .news-item:nth-child(10) { animation-delay: 0.55s; }
    .news-item:nth-child(11) { animation-delay: 0.6s; }
    .news-item:nth-child(12) { animation-delay: 0.65s; }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="page-header">
            <a class="main-nav-button" href="/pages/letters-home.php">
                <span class="icon">📧</span>
                Letters &amp; Newsletters
            </a>
        </div>

        <div class="video-container">
            <iframe src="https://player.vimeo.com/video/515253878" 
                    allow="autoplay; fullscreen" 
                    allowfullscreen
                    title="Park Community School Video">
            </iframe>
        </div>

        <div class="content-intro">
            <h2>Latest News Articles</h2>
            <p>Discover the amazing stories and achievements from our school community</p>
        </div>

        <div class="news-grid">
            <article class="news-item">
                <span class="news-icon">🎓</span>
                <a href="/pages/summer-school.php">Summer School 2021</a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">📈</span>
                <a href="https://www.portsmouth.co.uk/news/people/park-community-school-in-havant-sees-almost-100-per-cent-attendance-as-pupils-return-3158621" target="_blank">
                    Park Community School in Havant sees almost 100 per cent attendance as pupils return
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🦠</span>
                <a href="https://www.portsmouth.co.uk/education/coronavirus-hampshire-schools-unveil-new-measures-keep-children-covid-safe-2966694" target="_blank">
                    Coronavirus: Hampshire schools unveil new measures to keep children Covid safe
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🎉</span>
                <a href="https://www.portsmouth.co.uk/education/park-community-school-leigh-park-celebrates-fantastic-gcse-results-pupils-tough-out-rubbish-year-2948478" target="_blank">
                    Park Community School celebrates 'fantastic' GCSE results as pupils tough out challenging year
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🍽️</span>
                <a href="https://www.portsmouth.co.uk/education/thousands-hampshire-children-will-go-hungry-half-term-after-free-schools-meals-decision-headteachers-say-3013240" target="_blank">
                    Supporting Hampshire families during challenging times
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🏃‍♀️</span>
                <a href="https://www.portsmouth.co.uk/education/park-community-pupils-receive-award-olympic-champion-dame-kelly-holmes-2914772" target="_blank">
                    Park Community pupils receive award from Olympic champion Dame Kelly Holmes
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">📚</span>
                <a href="https://www.portsmouth.co.uk/education/hampshire-headteachers-gcse-concerns-returning-year-10-pupils-2879597" target="_blank">
                    Supporting Year 10 pupils in their GCSE journey
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🎰</span>
                <a href="https://www.portsmouth.co.uk/education/national-lottery-windfall-helps-park-community-school-feed-disadvantaged-families-during-pandemic-2865324" target="_blank">
                    National Lottery windfall helps Park Community School support families during pandemic
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🛡️</span>
                <a href="https://www.portsmouth.co.uk/education/park-community-school-key-worker-children-make-protective-shields-which-literally-could-save-family-members-lives-2845063" target="_blank">
                    Park Community students create life-saving protective equipment
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🍎</span>
                <a href="https://www.portsmouth.co.uk/education/chef-year-cites-lack-funding-and-concentration-fast-food-joints-obesity-cause-2050409" target="_blank">
                    Promoting healthy eating and nutrition in schools
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🎨</span>
                <a href="https://www.portsmouth.co.uk/education/leigh-parks-park-community-school-teacher-turns-his-design-skills-saving-lives-new-face-shield-2536701" target="_blank">
                    Teacher uses design skills to create innovative safety equipment
                </a>
            </article>
            
            <article class="news-item">
                <span class="news-icon">🤝</span>
                <a href="https://www.portsmouth.co.uk/education/cash-grant-helps-park-community-school-feed-community-during-pandemic-2536164" target="_blank">
                    Community support during challenging times
                </a>
            </article>
        </div>
    </div>
</section>

<!-- AWARD SECTIONS -->
<section class="award-section grey-bg">
    <div class="grid-container">
        <?php include('../includes/news/persimmon-building-futures-award.html') ?>
    </div>
</section>

<section class="award-section">
    <div class="grid-container">
        <?php include('../includes/news/social-good-award.html') ?>
    </div>
</section>

<section class="award-section grey-bg">
    <div class="grid-container">
        <?php include('../includes/news/children-and-young-people-award.html') ?>
    </div>
</section>

<section class="award-section">
    <div class="grid-container">
        <?php include('../includes/news/hcc-community-impact-award.html') ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

<?php include('../partials/footer.php'); ?>