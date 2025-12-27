<?php
$pageTitle = 'Park Community School | MUNCH & Community Pantry';
include('partials/header.php');
?>

<style>
    :root {
        --green: #27ae60;
        --blue: #3498db;
        --red: #e74c3c;
        --purple: #9b59b6;
        --dark: #2c3e50;
        --light-gray: #f8f9fa;
        --text-gray: #555;
        --shadow: 0 4px 6px rgba(0,0,0,0.1);
        --shadow-hover: 0 8px 15px rgba(0,0,0,0.15);
    }

    /* Header */
    .munch-header {
        background: linear-gradient(135deg, var(--dark) 0%, #34495e 100%);
        color: white;
        padding: 3rem 0;
        text-align: center;
    }

    .munch-header h1 {
        color: white;
        margin: 0;
        font-size: 2.5rem;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    /* Info cards */
    .info-cards-section {
        padding: 3rem 0;
    }

    .info-card {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: var(--shadow);
        height: 140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .info-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 5px;
        background: var(--accent-color);
    }

    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-hover);
    }

    .info-card.green { --accent-color: var(--green); }
    .info-card.blue { --accent-color: var(--blue); }
    .info-card.red { --accent-color: var(--red); }
    .info-card.purple { --accent-color: var(--purple); }

    .info-card h5 {
        margin: 0 0 0.75rem 0;
        color: var(--accent-color);
        font-size: 1.3rem;
        font-weight: 600;
    }

    .info-card p {
        margin: 0;
        font-size: 1rem;
        line-height: 1.5;
        color: var(--text-gray);
    }

    /* Opening times */
    .opening-times-section {
        background: var(--light-gray);
        padding: 3rem 0;
    }

    .opening-times-section h3 {
        margin-bottom: 2rem;
        color: var(--dark);
        text-align: center;
    }

    .time-blocks {
        text-align: center;
    }

    .time-block {
        display: inline-block;
        margin: 0.5rem 0.75rem;
        padding: 1rem 1.5rem;
        background: white;
        border-radius: 30px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        font-size: 0.95rem;
        transition: transform 0.2s ease;
    }

    .time-block:hover {
        transform: translateY(-2px);
    }

    .time-block .day {
        font-weight: bold;
        color: var(--dark);
    }

    .button-row {
        margin-top: 2rem;
    }

    .munch-button {
        background: var(--green);
        border: none;
        padding: 0.85rem 2rem;
        border-radius: 30px;
        font-weight: 500;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(39, 174, 96, 0.3);
        display: inline-block;
        margin: 0 0.5rem;
    }

    .munch-button:hover {
        background: #219a52;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(39, 174, 96, 0.4);
        color: white;
    }

    /* About section */
    .about-section {
        padding: 4rem 0;
    }

    .about-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 3rem;
    }

    .about-column h3 {
        color: var(--dark);
        margin-bottom: 1.5rem;
        font-size: 1.75rem;
    }

    .about-column p {
        color: var(--text-gray);
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 12px;
        box-shadow: var(--shadow);
        transition: box-shadow 0.3s ease;
    }

    .video-wrapper:hover {
        box-shadow: var(--shadow-hover);
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 12px;
    }

    /* Impact section */
    .impact-section {
        background: var(--dark);
        color: white;
        padding: 4rem 0;
    }

    .impact-section h3 {
        color: white;
        margin-bottom: 3rem;
        text-align: center;
        font-size: 2rem;
    }

    .impact-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 2rem;
    }

    .impact-item {
        text-align: center;
        padding: 1rem;
    }

    .impact-number {
        font-size: 3.5rem;
        margin: 0 0 0.5rem 0;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    .impact-number.green { color: var(--green); }
    .impact-number.blue { color: var(--blue); }
    .impact-number.red { color: var(--red); }
    .impact-number.purple { color: var(--purple); }

    .impact-item p {
        margin: 0;
        font-size: 1.1rem;
        opacity: 0.9;
    }

    /* Testimonial */
    .testimonial-section {
        padding: 4rem 0;
    }

    .testimonial-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }

    .testimonial-quote {
        border: none;
        font-size: 1.4rem;
        color: var(--text-gray);
        font-style: italic;
        text-align: center;
        position: relative;
        padding: 2rem;
        background: var(--light-gray);
        border-radius: 15px;
        margin: 0;
    }

    .testimonial-quote::before {
        content: '"';
        font-size: 4rem;
        color: var(--green);
        position: absolute;
        left: 1rem;
        top: -0.5rem;
        font-family: serif;
    }

    .testimonial-cite {
        display: block;
        margin-top: 1.5rem;
        font-size: 1.1rem;
        color: var(--dark);
        font-weight: 500;
        font-style: normal;
    }

    /* Location section */
    .location-section {
        background: var(--light-gray);
        padding: 4rem 0;
    }

    .location-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 3rem;
        align-items: center;
    }

    .location-info h3 {
        color: var(--dark);
        margin-bottom: 1.5rem;
        font-size: 1.75rem;
    }

    .location-info h4 {
        color: var(--dark);
        margin-top: 2.5rem;
        margin-bottom: 1rem;
    }

    .location-info p {
        font-size: 1.1rem;
        color: var(--text-gray);
        line-height: 1.6;
    }

    .location-info a {
        color: var(--green);
        text-decoration: none;
        font-weight: 500;
    }

    .location-info a:hover {
        color: #219a52;
        text-decoration: underline;
    }

    /* Help section */
    .help-section {
        padding: 4rem 0;
    }

    .help-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .help-item {
        text-align: center;
        padding: 2rem 1rem;
    }

    .help-item h4 {
        color: var(--dark);
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .help-item p {
        color: var(--text-gray);
        margin-bottom: 2rem;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    /* Partners section */
    .partners-section {
        background: var(--light-gray);
        padding: 3rem 0;
    }

    .partners-section p {
        text-align: center;
        margin-bottom: 2rem;
        color: var(--text-gray);
        font-size: 1.1rem;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 2rem;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .partners-grid li {
        text-align: center;
    }

    .partners-grid img {
        max-width: 100%;
        height: auto;
        max-height: 60px;
        object-fit: contain;
        opacity: 0.7;
        transition: all 0.3s ease;
        filter: grayscale(20%);
    }

    .partners-grid img:hover {
        opacity: 1;
        filter: grayscale(0%);
        transform: scale(1.05);
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .impact-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .help-grid {
            grid-template-columns: 1fr;
        }
        
        .partners-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {
        .munch-header h1 {
            font-size: 2rem;
        }

        .time-block {
            display: block;
            margin: 0.5rem auto;
            max-width: 250px;
        }

        .about-grid,
        .location-grid {
            grid-template-columns: 1fr;
        }

        .testimonial-quote {
            font-size: 1.2rem;
            padding: 1.5rem;
        }

        .testimonial-quote::before {
            font-size: 3rem;
            left: 0.5rem;
        }

        .impact-number {
            font-size: 2.5rem;
        }
        
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="munch-header">
    <div class="grid-container">
        <h1>MUNCH &amp; Community Pantry</h1>
    </div>
</header>

<!-- QUICK INFO CARDS -->
<section class="info-cards-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-3">
                <div class="info-card green">
                    <h5>Free Meals</h5>
                    <p>2-course meals during holidays</p>
                </div>
            </div>
            <div class="cell medium-3">
                <div class="info-card blue">
                    <h5>Community Pantry</h5>
                    <p>£5 weekly subscription</p>
                </div>
            </div>
            <div class="cell medium-3">
                <div class="info-card red">
                    <h5>Emergency Food</h5>
                    <p>Always stocked fridge</p>
                </div>
            </div>
            <div class="cell medium-3">
                <div class="info-card purple">
                    <h5>Activities</h5>
                    <p>Learning through play</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OPENING TIMES -->
<section class="opening-times-section">
    <div class="grid-container">
        <h3>When We're Open</h3>
        <div class="time-blocks">
            <div class="time-block">
                <span class="day">Monday</span> 11am-1pm
            </div>
            <div class="time-block">
                <span class="day">Tuesday</span> 11am-1pm
            </div>
            <div class="time-block">
                <span class="day">Wednesday</span> 5pm-7pm
            </div>
            <div class="time-block">
                <span class="day">Thursday</span> 11am-1pm &amp; 4pm-5:30pm
            </div>
        </div>
        <div class="button-row text-center">
            <a href="assets/munch/MUNCH Sept 25.pdf" target="_blank" class="munch-button">MUNCH Flyer</a>
            <a href="assets/pantry/flyer.pdf" target="_blank" class="munch-button">Pantry Info</a>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="about-section">
    <div class="grid-container">
        <div class="about-grid">
            <div class="about-column">
                <h3>Fighting Food Poverty Since 2017</h3>
                <p>MUNCH provides free nutritious meals and activities for children and families during school holidays. We've expanded to include Thursday tea times and Sunday lunches.</p>
                <div class="video-wrapper">
                    <iframe src="https://player.vimeo.com/video/299177359" allowfullscreen></iframe>
                </div>
            </div>
            <div class="about-column">
                <h3>Community Pantry</h3>
                <p>Get more for less with our £5 weekly subscription. Choose the food your family needs from our well-stocked pantry at the Dickinson Centre.</p>
                <div class="video-wrapper">
                    <iframe src="https://player.vimeo.com/video/515253878" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT NUMBERS -->
<section class="impact-section">
    <div class="grid-container">
        <h3>Our Impact in 2023-24</h3>
        <div class="impact-grid">
            <div class="impact-item">
                <h2 class="impact-number green">9,788</h2>
                <p>Meals Served</p>
            </div>
            <div class="impact-item">
                <h2 class="impact-number blue">895</h2>
                <p>Emergency Meals</p>
            </div>
            <div class="impact-item">
                <h2 class="impact-number red">140+</h2>
                <p>Christmas Guests</p>
            </div>
            <div class="impact-item">
                <h2 class="impact-number purple">60</h2>
                <p>Schools Involved</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIAL -->
<section class="testimonial-section">
    <div class="grid-container">
        <div class="testimonial-wrapper">
            <blockquote class="testimonial-quote">
                We love MUNCH! The food is lovely, the games are fantastic for the kids. It's a great way to get them out of the house and eating a healthy meal.
                <cite class="testimonial-cite">– Ms Roberts</cite>
            </blockquote>
        </div>
    </div>
</section>

<!-- LOCATION -->
<section class="location-section">
    <div class="grid-container">
        <div class="location-grid">
            <div class="location-info">
                <h3>Find Us</h3>
                <p><strong>Dickinson Centre</strong><br>
                Park Community School<br>
                Middle Park Way, Havant PO9 4BU</p>
                
                <h4>Contact</h4>
                <p>Tel: 02392 489811<br>
                Email: <a href="mailto:munch@pcs.hants.sch.uk">munch@pcs.hants.sch.uk</a></p>
            </div>
            <div>
                <div class="video-wrapper">
                    <iframe src="https://player.vimeo.com/video/482577938" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW TO HELP -->
<section class="help-section">
    <div class="grid-container">
        <div class="help-grid">
            <div class="help-item">
                <h4>Support MUNCH</h4>
                <p>Order a money box for your business to help feed local children.</p>
                <a href="mailto:munch@pcs.hants.sch.uk" class="munch-button">Get a Money Box</a>
            </div>
            <div class="help-item">
                <h4>Join Our Pantry</h4>
                <p>£5 weekly subscription helps your family budget go further.</p>
                <a href="assets/pantry/flyer.pdf" target="_blank" class="munch-button">Learn More</a>
            </div>
            <div class="help-item">
                <h4>Need Help?</h4>
                <p>If you're struggling, we're here to help. No questions asked.</p>
                <a href="/contact.php" class="munch-button">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- PARTNERS -->
<section class="partners-section">
    <div class="grid-container">
        <p>Made possible by our partners:</p>
        <ul class="partners-grid">
            <li><img src="images/pantry/theguinnesspartnership.png" alt="The Guinness Partnership"></li>
            <li><img src="images/pantry/hampshirecountycouncil.png" alt="Hampshire County Council"></li>
            <li><img src="images/pantry/havantboroughcouncil.png" alt="Havant Borough Council"></li>
            <li><img src="images/pantry/fareshare.png" alt="FareShare"></li>
            <li><img src="images/pantry/c4c.png" alt="Connect4Communities"></li>
        </ul>
    </div>
</section>

<?php include('partials/footer.php'); ?>