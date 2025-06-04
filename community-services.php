<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Community and Services</title>
    <?php include("includes/head.html") ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Modern CSS Variables */
        :root {
            --primary-green: #a3cd41;
            --primary-orange: #f08a24;
            --primary-blue: #38bdf8;
            --dark-bg: #1e293b;
            --light-gray: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            --border-radius: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Reset and base styles */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            margin: 0;
            padding: 0;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-green) 100%);
            color: white;
            padding: 6rem 0 4rem;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="0%" r="100%"><stop offset="0%" stop-color="white" stop-opacity="0.1"/><stop offset="100%" stop-color="white" stop-opacity="0"/></radialGradient></defs><rect width="100" height="20" fill="url(%23a)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            background: white;
            color: var(--text-dark);
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
        }

        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
            text-decoration: none;
            color: var(--text-dark);
        }

        /* Modern sections */
        .modern-section {
            padding: 5rem 0;
        }

        .modern-section.alt-bg {
            background: var(--light-gray);
        }

        /* Intro section */
        .intro-section {
            background: white;
            padding: 4rem 0;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .intro-content h2 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .intro-content p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .intro-video {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .intro-video iframe {
            width: 100%;
            height: 300px;
        }

        /* Section headers */
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.8rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Facilities section */
        .facilities-section {
            background: var(--light-gray);
            padding: 5rem 0;
        }

        .facilities-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .facilities-list {
            list-style: none;
            padding: 0;
        }

        .facilities-list li {
            padding: 1rem 0;
            border-bottom: 1px solid #e2e8f0;
            position: relative;
            padding-left: 3rem;
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .facilities-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 1rem;
            color: var(--primary-green);
            font-weight: bold;
            font-size: 1.5rem;
        }

        .facilities-list li a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
        }

        .facilities-list li a:hover {
            text-decoration: underline;
        }

        .facilities-image {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .facilities-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .facilities-image:hover img {
            transform: scale(1.05);
        }

        /* Party packages grid */
        .packages-section {
            background: white;
            padding: 5rem 0;
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .package-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: var(--transition);
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            border: 2px solid transparent;
        }

        .package-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-green);
            text-decoration: none;
            color: inherit;
        }

        .package-image {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .package-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .package-card:hover .package-image img {
            transform: scale(1.1);
        }

        .package-content {
            padding: 1.5rem;
        }

        .package-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .package-description {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .package-cta {
            display: inline-flex;
            align-items: center;
            color: var(--primary-blue);
            font-weight: 600;
            text-decoration: none;
        }

        .package-cta i {
            margin-left: 0.5rem;
            transition: var(--transition);
        }

        .package-card:hover .package-cta i {
            transform: translateX(5px);
        }

        /* Sports awards section */
        .sports-section {
            background: var(--light-gray);
            padding: 5rem 0;
        }

        .sports-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .feature-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .feature-description {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Wedding section */
        .wedding-section {
            background: white;
            padding: 5rem 0;
        }

        .wedding-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .wedding-intro {
            text-align: center;
            margin-bottom: 3rem;
        }

        .wedding-intro p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 0 auto 1.5rem;
            line-height: 1.7;
        }

        .wedding-slider {
            margin: 3rem 0;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-xl);
        }

        .wedding-slider img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        /* Contact section */
        .contact-section {
            background: var(--dark-bg);
            color: white;
            padding: 5rem 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
        }

        .contact-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }

        .contact-hours {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .hours-block h5 {
            color: var(--primary-green);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .hours-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hours-list li {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 0.25rem;
        }

        .contact-info {
            margin-top: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .contact-item i {
            color: var(--primary-green);
            margin-right: 1rem;
            width: 20px;
        }

        .contact-item a {
            color: white;
            text-decoration: none;
        }

        .contact-item a:hover {
            color: var(--primary-green);
        }

        /* CTA Buttons */
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow-md);
            margin: 0.5rem;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            text-decoration: none;
            color: white;
        }

        .cta-button.secondary {
            background: white;
            color: var(--text-dark);
        }

        .cta-button.secondary:hover {
            color: var(--text-dark);
        }

        .cta-center {
            text-align: center;
            margin: 3rem 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .intro-grid,
            .facilities-grid,
            .sports-grid,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .packages-grid {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .modern-section {
                padding: 3rem 0;
            }

            .contact-hours {
                grid-template-columns: 1fr;
            }
        }

        /* Animation keyframes */
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

        .animate-in {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Custom slick slider styles */
        .slick-dots {
            bottom: -50px;
        }

        .slick-dots li button:before {
            color: var(--primary-green);
            font-size: 12px;
        }

        .slick-dots li.slick-active button:before {
            color: var(--primary-orange);
        }
    </style>
</head>
<body class="page-misc">

<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>



<!-- INTRO SECTION -->
<section class="intro-section">
    <div class="intro-grid">
        <div class="intro-content">
            <h2>Exceptional Facilities, Outstanding Service</h2>
            <p>Our Community & Services Department provides a comprehensive range of activities and facilities for students and the wider community.</p>
            <p>From intimate gatherings to large celebrations, we're open evenings until 10pm, weekends, and holidays to accommodate your needs.</p>
            <div class="cta-center">
                <a href="assets/community/price_list.pdf" target="_blank" class="cta-button">
                    <i class="fas fa-download"></i>
                    Download Price List
                </a>
            </div>
        </div>
        <div class="intro-video">
            <iframe src="https://player.vimeo.com/video/299177303" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- FACILITIES SECTION -->
<section class="facilities-section">
    <div class="section-header">
        <h2 class="section-title">World-Class Facilities</h2>
        <p class="section-subtitle">State-of-the-art venues and equipment to make your event unforgettable</p>
    </div>
    <div class="facilities-grid">
        <div>
            <ul class="facilities-list">
                <li>Theatre - seating 245 guests</li>
                <li>Lecture Theatre - seating 180 guests</li>
                <li>3G FIFA accredited Synthetic Turf Pitch (STP)</li>
                <li>4 Badminton court sized Sports Hall</li>
                <li><a href="suite.php">Professional Media Suite</a></li>
                <li><a href="dickinson-centre.php">Dickinson Centre</a> - conference and training venue</li>
                <li><a href="nursery.php">On-site Nursery and Pre-school</a></li>
                <li>Variety of room sizes and outdoor spaces available</li>
            </ul>
        </div>
        <div class="facilities-image">
            <img src="images/community/community-03.jpg" alt="Park Community School Facilities">
        </div>
    </div>
</section>

<!-- PARTY PACKAGES SECTION -->
<section class="packages-section">
    <div class="section-header">
        <h2 class="section-title">Children's Party Packages</h2>
        <p class="section-subtitle">Magical celebrations that create lasting memories for your little ones</p>
    </div>
    <div class="packages-grid">
        <div class="package-card" data-reveal-id="pty-BouncyCastle">
            <div class="package-image">
                <img src="images/community/bouncycastle.jpg" alt="Pirate Bouncy Castle">
            </div>
            <div class="package-content">
                <h3 class="package-title">Pirate Bouncy Castle</h3>
                <p class="package-description">Adventure awaits with our exciting pirate-themed bouncy castle</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="package-card" data-reveal-id="pty-SoftPlay">
            <div class="package-image">
                <img src="images/community/softplay.jpg" alt="Bouncy Castle & Soft Play">
            </div>
            <div class="package-content">
                <h3 class="package-title">Bouncy Castle & Soft Play</h3>
                <p class="package-description">Perfect combination for younger children to play safely</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="package-card" data-reveal-id="pty-AssaultCourse">
            <div class="package-image">
                <img src="images/community/assaultcourse.jpg" alt="Assault Course & Bouncy Castle">
            </div>
            <div class="package-content">
                <h3 class="package-title">Assault Course & Bouncy Castle</h3>
                <p class="package-description">Action-packed adventure for energetic party-goers</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="package-card" data-reveal-id="pty-TreasureHunt">
            <div class="package-image">
                <img src="images/community/treasurehunt.jpg" alt="Treasure Hunt Play">
            </div>
            <div class="package-content">
                <h3 class="package-title">Treasure Hunt & Play</h3>
                <p class="package-description">Interactive treasure hunt with slides and bouncy castle fun</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="package-card" data-reveal-id="pty-PartySpace">
            <div class="package-image">
                <img src="images/community/venuespace.jpg" alt="Party Venue Space">
            </div>
            <div class="package-content">
                <h3 class="package-title">Party Venue Space</h3>
                <p class="package-description">Flexible indoor spaces perfect for any celebration</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>

        <div class="package-card" data-reveal-id="pty-Extras">
            <div class="package-image">
                <img src="images/community/optionalextras.jpg" alt="Optional Extras">
            </div>
            <div class="package-content">
                <h3 class="package-title">Optional Extras</h3>
                <p class="package-description">Add special touches to make your party even more memorable</p>
                <span class="package-cta">Learn More <i class="fas fa-arrow-right"></i></span>
            </div>
        </div>
    </div>
    <div class="cta-center">
        <a href="assets/community/partyleaflet.pdf" target="_blank" class="cta-button">
            <i class="fas fa-download"></i>
            Party Package Brochure
        </a>
    </div>
</section>

<!-- SPORTS AWARDS SECTION -->
<section class="sports-section">
    <div class="section-header">
        <h2 class="section-title">Sports Awards Presentations</h2>
        <p class="section-subtitle">Professional venue hire for your sporting celebrations</p>
    </div>
    <div class="sports-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-theater-masks"></i>
            </div>
            <h3 class="feature-title">Professional Theatre Setup</h3>
            <p class="feature-description">Full theatre with professional lighting and PA system. Special discounts available for clubs using our facilities regularly!</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-clock"></i>
            </div>
            <h3 class="feature-title">Flexible Timing</h3>
            <p class="feature-description">Choose afternoon or evening slots to suit your schedule. We work around your needs to ensure the perfect timing.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-glass-cheers"></i>
            </div>
            <h3 class="feature-title">Licensed Bar</h3>
            <p class="feature-description">Full licensed bar available, or we can provide soft drinks only if preferred. Perfect for post-ceremony celebrations.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <h3 class="feature-title">Catering Services</h3>
            <p class="feature-description">Hot and cold food options available, plus pick and mix sweets. Our award-winning catering team will take care of everything.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-print"></i>
            </div>
            <h3 class="feature-title">Printing Services</h3>
            <p class="feature-description">Professional printing for certificates, programs, banners and more. Complete your event with high-quality materials.</p>
        </div>

        <div class="feature-card">
            <div class="feature-icon">
                <i class="fas fa-concierge-bell"></i>
            </div>
            <h3 class="feature-title">Bespoke Services</h3>
            <p class="feature-description">Need something special? Get in touch! We pride ourselves on accommodating unique requirements for your special event.</p>
        </div>
    </div>
</section>

<!-- WEDDING SECTION -->
<section class="wedding-section">
    <div class="wedding-content">
        <div class="section-header">
            <h2 class="section-title">Weddings at Park Community School</h2>
            <p class="section-subtitle">Unique, affordable wedding venue with exceptional flexibility</p>
        </div>
        
        <div class="wedding-intro">
            <p>We hold weddings at Park Community School to support our local community while raising essential funds for our students' benefit.</p>
            <p>Celebrating your wedding here gives you the affordability and flexibility to select rooms and facilities exactly how you want them.</p>
            <p>Choose from two stunning venues depending on your party size, with our largest space seating 250 guests, plus various optional extras to ensure you have the wedding of your dreams.</p>
        </div>

        <div class="wedding-slider homepage-slider">
            <div><img src="/images/community/wedding/weddings_at_park_table_2.jpg" alt="Elegant Wedding Table Setting"></div>
            <div><img src="/images/community/wedding/weddings_at_park_table_1.jpg" alt="Beautiful Wedding Reception"></div>
            <div><img src="/images/community/wedding/weddings_at_park_food_1.jpg" alt="Exquisite Wedding Catering"></div>
            <div><img src="/images/community/wedding/weddings_at_park_food_2.jpg" alt="Wedding Food Presentation"></div>
            <div><img src="/images/community/wedding/weddings_at_park_thrones.jpg" alt="Wedding Ceremony Setup"></div>
        </div>

        <div class="wedding-intro">
            <p>Our award-winning head chef will help plan your perfect menu - from intimate cold buffets to elegant three-course meals, from casual hog roasts to sophisticated barbecues. We provide everything from disposable service to full silver service with linen, cutlery, and glassware.</p>
            <p>We can even design and create your wedding cake! Our excellent bar serves wines, beers, ciders, soft drinks, and spirits, and we'll consult with you to ensure perfect refreshments for your guests.</p>
            <p>We highly recommend visiting Park Community School to experience our unique wedding venue firsthand - it truly has to be seen to be believed!</p>
        </div>

        <div class="cta-center">
            <a href="assets/community/wedding_brochure.pdf" target="_blank" class="cta-button">
                <i class="fas fa-heart"></i>
                Wedding Brochure
            </a>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section" id="contact">
    <div class="section-header">
        <h2 class="section-title" style="color: white;">Get In Touch</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Ready to book your perfect event? We're here to help make it happen</p>
    </div>
    <div class="contact-grid">
        <div class="contact-card">
            <h3 class="contact-title">Opening Hours</h3>
            <div class="contact-hours">
                <div class="hours-block">
                    <h5>Office Hours</h5>
                    <ul class="hours-list">
                        <li>Monday - Friday: 9am - 8pm</li>
                        <li>Saturday: 9am - 4pm</li>
                        <li>Sunday: 9am - 4pm</li>
                    </ul>
                </div>
                <div class="hours-block">
                    <h5>Site Hours</h5>
                    <ul class="hours-list">
                        <li>Monday - Friday: 9am - 10pm</li>
                        <li>Saturday: 9am - 4pm</li>
                        <li>Sunday: 9am - 4pm</li>
                    </ul>
                </div>
            </div>
            <p style="color: rgba(255,255,255,0.6); font-size: 0.9rem;">* Closed Bank Holidays - please contact us for information</p>
        </div>

        <div class="contact-card">
            <h3 class="contact-title">Contact Information</h3>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>02392 489 811</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="javascript:location='mailto:\u0062\u006f\u006f\u006b\u0069\u006e\u0067\u0073\u0040\u0070\u0063\u0073\u002e\u0068\u0061\u006e\u0074\u0073\u002e\u0073\u0063\u0068\u002e\u0075\u006b';void 0">bookings@pcs.hants.sch.uk</a>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Park Community School<br>Leigh Park, Hampshire</span>
                </div>
            </div>
            <div class="cta-center" style="margin-top: 2rem;">
                <a href="tel:02392489811" class="cta-button secondary">
                    <i class="fas fa-phone"></i>
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- MODALS -->
<!-- BouncyCastle -->
<?php include( "includes/community/bouncycastle.html" ) ?>

<!-- SoftPlay -->
<?php include( "includes/community/softplay.html" ) ?>

<!-- AssaultCourse -->
<?php include( "includes/community/assaultcourse.html" ) ?>

<!-- TreasureHunt -->
<?php include( "includes/community/treasurehunt.html" ) ?>

<!-- PartySpace -->
<?php include( "includes/community/partyspace.html" ) ?>

<!-- Extras -->
<?php include( "includes/community/extras.html" ) ?>

<!-- FOOTER -->
<?php include("includes/footer.html") ?>

<!-- Scripts -->
<script src="js/vendor/libraries.min.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/app.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
$(document).ready(function(){
    // Initialize slider
    $('.homepage-slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        fade: true,
        adaptiveHeight: true,
        pauseOnHover: true
    });

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if(target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }
    });

    // Add click handlers for package cards
    $('.package-card').on('click', function() {
        var modalId = $(this).attr('data-reveal-id');
        if(modalId) {
            $('#' + modalId).foundation('reveal', 'open');
        }
    });

    // Intersection Observer for animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        });

        document.querySelectorAll('.feature-card, .package-card').forEach(el => {
            observer.observe(el);
        });
    }
});
</script>
</body>
</html>