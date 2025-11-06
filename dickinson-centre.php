<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <title>Park Community School | Dickinson Centre</title>
        <?php include("includes/head.html") ?>
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
                --white: #ffffff;
                --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
                --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
                --border-radius: 16px;
                --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            /* Reset and Base Styles */
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

            /* Modern Container */
            .modern-container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            /* Content Sections */
            .content-section {
                padding: 4rem 0;
            }

            .content-text-center {
                max-width: 800px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            .content-text-center h2 {
                font-size: 2.5rem;
                color: var(--text-dark);
                margin-bottom: 2rem;
                font-weight: 700;
            }

            .content-text-center p {
                font-size: 1.1rem;
                color: var(--text-light);
                margin-bottom: 1.5rem;
                line-height: 1.8;
            }

            /* Feature Cards */
            .feature-card {
                background: white;
                padding: 2.5rem;
                border-radius: var(--border-radius);
                box-shadow: var(--shadow-md);
                transition: var(--transition);
                border: 2px solid transparent;
            }

            .feature-card:hover {
                transform: translateY(-5px);
                box-shadow: var(--shadow-xl);
                border-color: var(--primary-green);
            }

            .feature-card h4 {
                font-size: 1.5rem;
                color: var(--text-dark);
                margin-bottom: 1rem;
                font-weight: 700;
                display: flex;
                align-items: center;
                gap: 0.75rem;
            }

            .feature-card h4::before {
                content: '';
                width: 4px;
                height: 24px;
                background: linear-gradient(135deg, var(--primary-green), var(--primary-orange));
                border-radius: 2px;
            }

            .feature-card hr {
                border: none;
                height: 2px;
                background: linear-gradient(90deg, var(--primary-green), transparent);
                margin: 1rem 0 1.5rem 0;
            }

            .feature-card ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .feature-card ul li {
                padding: 0.75rem 0;
                font-size: 1.05rem;
                color: var(--text-dark);
            }

            /* Contact card specific - no tick marks */
            .feature-card.contact-card ul li::before {
                content: none;
            }

            /* Button Styling */
            .cta-button {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                background: linear-gradient(135deg, var(--primary-green), #68d391) !important;
                color: white !important;
                padding: 1rem 2.5rem;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1.05rem;
                transition: var(--transition);
                box-shadow: var(--shadow-md);
                border: none;
            }

            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: var(--shadow-lg);
                background: linear-gradient(135deg, #8fb332, var(--primary-green)) !important;
                text-decoration: none;
                color: white !important;
            }

            .cta-button::after {
                content: '→';
                transition: var(--transition);
                color: white;
            }

            .cta-button:hover::after {
                transform: translateX(5px);
            }

            .button-center {
                text-align: center;
                margin: 2rem 0;
            }

            /* Alternating Background Sections */
            .alt-bg {
                background: var(--light-gray);
            }

            /* Contact Section */
            .contact-section {
                background: var(--light-gray);
                padding: 4rem 0;
            }

            .contact-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 3rem;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            /* Gallery Section */
            .gallery-section {
                padding: 4rem 0;
                background: white;
            }

            .gallery-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 2rem;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 2rem;
            }

            .gallery-item {
                border-radius: var(--border-radius);
                overflow: hidden;
                box-shadow: var(--shadow-md);
                transition: var(--transition);
            }

            .gallery-item img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
                transition: var(--transition);
            }

            .gallery-item:hover {
                transform: translateY(-8px);
                box-shadow: var(--shadow-xl);
            }

            .gallery-item:hover img {
                transform: scale(1.1);
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .contact-grid {
                    grid-template-columns: 1fr;
                    gap: 2rem;
                }

                .gallery-grid {
                    grid-template-columns: 1fr;
                    gap: 1.5rem;
                }

                .content-section {
                    padding: 2rem 0;
                }

                .modern-container,
                .content-text-center {
                    padding: 0 1rem;
                }

                .content-text-center h2 {
                    font-size: 2rem;
                }

                .feature-card {
                    padding: 1.5rem;
                }
            }

            /* Animation */
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

            /* Smooth Scrolling */
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
<body class="page-misc">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- CONTENT -->
<section class="content-section">
    <div class="content-text-center">
        <h2>Welcome to the Dickinson Centre</h2>
        <p>The Dickinson Centre is the perfect venue for meetings, conferences and training sessions, and is able to accommodate one-to-one meetings through to 90 visitors.</p>
        <p>The rooms are equipped with super-fast WiFi 6, projection and speakers.</p>
        <p>We are able to provide catering facilities to meet your needs and there are vending facilities in the café area, which has a bank of computers with free internet access for the general public.</p>
    </div>
</section>

<section class="gallery-section alt-bg">
    <div class="modern-container">
        <h2 style="text-align: center; font-size: 2.2rem; color: var(--text-dark); margin-bottom: 3rem; font-weight: 700;">Our Facilities</h2>
    </div>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="assets/community/pictures/processed-D0204E57-4C2F-4734-BFD1-8C5F11233AF7.jpeg" alt="Dickinson Centre Facility">
        </div>
        <div class="gallery-item">
            <img src="assets/community/pictures/processed-DD1209C6-34E5-46CF-BFBC-3E7F933ED521.jpeg" alt="Dickinson Centre Facility">
        </div>
        <div class="gallery-item">
            <img src="assets/community/pictures/1000006398.jpg" alt="Dickinson Centre Facility">
        </div>
    </div>
</section>

<section class="content-section">
    <div class="content-text-center">
        <h2>Flexible & Affordable</h2>
        <p>These facilities are available for use at all times.</p>
        <p>The rooms are competitively priced.</p>
        <div class="button-center">
            <a href="assets/community/Facilities Leaflet - 06.11.2025.pdf" target="_blank" class="cta-button">Facilities Price List</a>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="contact-grid">
        <div class="feature-card contact-card">
            <h4>Address</h4>
            <hr>
            <ul>
                <li>Dickinson Centre</li>
                <li>c/o Park Community School</li>
                <li>Havant</li>
                <li>PO9 4BU</li>
            </ul>
        </div>
        <div class="feature-card contact-card">
            <h4>Contact Information</h4>
            <hr>
            <ul>
                <li>Telephone: 02392 489 811</li>
                <li>Email: <a href="javascript:location='mailto:\u0062\u006f\u006f\u006b\u0069\u006e\u0067\u0073\u0040\u0070\u0063\u0073\u002e\u0068\u0061\u006e\u0074\u0073\u002e\u0073\u0063\u0068\u002e\u0075\u006b';void 0" style="color: #38bdf8; text-decoration: none; font-weight: 600;">bookings@pcs.hants.sch.uk</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- FOOTER -->
<?php include("includes/footer.html") ?>
        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
    </body>
</html>