<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Catering</title>
    <?php include("includes/head.html") ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Modern Header */
        .header-school {
            background: var(--gradient);
            padding: 3rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .header-school::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="food" width="30" height="30" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="2" fill="white" opacity="0.1"/><circle cx="20" cy="20" r="1.5" fill="white" opacity="0.08"/><path d="M5 15 L15 15 L10 25 Z" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23food)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .header-school .row {
            position: relative;
            z-index: 2;
        }

        .header-school h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header-school .text-capitalize {
            font-size: clamp(1.1rem, 2.5vw, 1.4rem);
            opacity: 0.9;
            font-weight: 300;
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
        }

        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
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

        .suppliers-section ul li {
            padding-left: 2rem;
        }

        .suppliers-section ul li:before {
            content: '🌱';
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

        /* Services Section */
        .services-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .services-content h3 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .services-list {
            list-style: none;
            padding-left: 0;
        }

        .services-list li {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .services-list li:before {
            content: '✓';
            position: absolute;
            left: 0;
            top: 0;
            color: var(--warning-color);
            font-weight: bold;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
            backdrop-filter: blur(10px);
        }

        .contact-info a {
            color: var(--warning-color);
            text-decoration: none;
            font-weight: 600;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .chef-grid,
            .brands-grid,
            .products-grid,
            .services-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .chef-sidebar {
                order: -1;
            }

            .header-school {
                padding: 2rem 0;
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
            }
        }

        /* Accessibility */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Focus styles */
        a:focus, button:focus {
            outline: 3px solid var(--accent-color);
            outline-offset: 2px;
        }

        /* Modal styles for existing functionality */
        .reveal-modal {
            background: white;
            border-radius: 15px;
            padding: 2rem;
        }

        .reveal-modal h2 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        /* Back to top button styling */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>
    


    <!-- CHEF SECTION -->
    <section class="chef-section">
        <div class="container">
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
                            <li>
                                <span class="chef-role"><strong>Sous Chef</strong></span>
                                <span class="chef-name">Rebecca Moore</span>
                                <button class="chef-bio-btn" data-chef="rebecca">View Bio</button>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Chef Bio Modals -->
                    <div id="modal-steven" class="chef-modal">
                        <div class="chef-modal-content">
                            <span class="chef-modal-close" data-modal="steven">&times;</span>
                            <h3>Steven Cross - Executive Chef</h3>
                            <p>Add Steven Cross's biography here...</p>
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
                    
                    <div id="modal-rebecca" class="chef-modal">
                        <div class="chef-modal-content">
                            <span class="chef-modal-close" data-modal="rebecca">&times;</span>
                            <h3>Rebecca Moore - Sous Chef</h3>
                            <p>Add Rebecca Moore's biography here...</p>
                        </div>
                    </div>
                    
                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DQ9w3NZDO5E/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DQ9w3NZDO5E/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DQ9w3NZDO5E/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Jamie Oliver (@jamieoliver)</a></p></div></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                    
                </div>
                
                <div class="chef-sidebar">
                    <div class="chef-image">
                        <img src="assets/schoolmeals/team25.jpg" alt="">
                    </div>
                    
                    <a href="/assets/schoolmeals/menu.pdf" target="_blank" class="resource-card">
                        <img src="images/schoolmeals/menu.png" alt="Park Community School Kitchen - The Watering Hole Menu">
                        <p>School Menu</p>
                    </a>
                    
                    <a href="/assets/schoolmeals/educatering.pdf" target="_blank" class="resource-card">
                        <img src="images/schoolmeals/educatering.jpg" alt="Educatering">
                        <p>Educatering - Magazine</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- BRANDS SECTION -->
    <section class="brands-section">
        <div class="container">
            <div class="section-divider">
                <div class="divider-line"></div>
            </div>
            
            <div class="brands-grid">
                <div class="brands-content">
                    <h3>Cross&Moody | <small>Our Brands</small></h3>
                    <p>These brand favourites have been developed by our award winning chefs Steven Cross and Alex Moody. All products used are of the best quality and we always try to use local seasonal organic produce.</p>
                </div>
                <div class="brand-logo">
                    <img src="images/schoolmeals/crossandmoody.png" alt="Cross and Moody brand logo">
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
                        <img src="images/schoolmeals/porky_logo.jpg" alt="Park Farm - Grow and Eat, our Chef uses our own produce">
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
                    <img src="images/schoolmeals/organic-standards.jpg" alt="Park Community School using local and organic produce in their school menu." style="width: 100%; border-radius: 15px;">
                </div>
            </div>
        </div>
    </section>

    <!-- AWARDS SECTION -->
    <section class="awards-section">
        <div class="container">
            <div class="award-card">
                <h4>Public Sector Catering Awards Winner 2020</h4>
                <div class="award-highlight">
                    <p><strong>Education Award</strong> - Park Community School Catering Team</p>
                    <p><strong>Chef of the Year</strong> - Steven Cross</p>
                </div>
                <p>Park Community School are thrilled that we scooped both Education Catering Award and Steven Cross for becoming the Public Sector Chef of the year. It's not every day you win these prestigious awards.</p>
                <img src="images/schoolmeals/publicsectorcatering-winner2020.jpg" alt="Public Sector Catering Award 2020">
                <p>Head Chef Steven Cross worked with Tilda throughout October to <a href="//www.tilda.com/professionals/meet-the-chefs/steven-cross-head-chef-park-community-school/">create amazing onepot vegan dishes</a>. Why not check them out at the link attached and create your own one pot dish.</p>
                <p>Click <a href="https://3lamxj2sv6yp1bq9nd8t12bt-wpengine.netdna-ssl.com/professionals/wp-content/uploads/sites/2/2020/12/TIL19212-TILDA-case-study-pdf-Aw-web.pdf" target="_blank">here</a> for the recipe.</p>
            </div>
        </div>
    </section>

    <!-- Note: Additional sections (LACA Awards, Soil Association, Free School Meals, etc.) would continue with similar modern styling -->
    
    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>
    
    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
    
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
                        document.body.style.overflow = 'hidden'; // Prevent background scrolling
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
                        document.body.style.overflow = 'auto'; // Re-enable scrolling
                    }
                });
            });

            // Close modal when clicking outside of it
            window.addEventListener('click', function(event) {
                if (event.target.classList.contains('chef-modal')) {
                    event.target.style.display = 'none';
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    modals.forEach(modal => {
                        modal.style.display = 'none';
                    });
                    document.body.style.overflow = 'auto'; // Re-enable scrolling
                }
            });
        });
    </script>
</body>
</html>