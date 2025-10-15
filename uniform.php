<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <title>Park Community School | Uniform</title>
        <?php include("includes/head.html") ?>
        <style>
            /* Remove hero section styles since we're using original header */
            .content-section {
                padding: 4rem 0;
            }
            
            .principle-card {
                background: white;
                border-radius: 12px;
                padding: 3rem;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-left: 5px solid #3498db;
                margin-bottom: 2rem;
            }
            
            .principle-card h3 {
                color: #2c3e50;
                font-size: 2rem;
                margin-bottom: 1.5rem;
                font-weight: 600;
            }
            
            .principle-card p {
                font-size: 1.1rem;
                line-height: 1.6;
                color: #555;
                margin-bottom: 1rem;
            }
            
            .image-container {
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;
            }
            
            .image-container:hover {
                transform: translateY(-5px);
            }
            
            .image-container img {
                width: 100%;
                height: auto;
                display: block;
            }
            
            .uniform-requirements {
                background: #f8f9fa;
                padding: 4rem 0;
            }
            
            .uniform-card {
                background: white;
                border-radius: 12px;
                padding: 3rem;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-left: 5px solid #27ae60;
            }
            
            .uniform-card h4 {
                color: #2c3e50;
                font-size: 1.8rem;
                margin-bottom: 2rem;
                font-weight: 600;
                display: flex;
                align-items: center;
            }
            
            .uniform-card h4::before {
                content: "👔";
                font-size: 2rem;
                margin-right: 1rem;
            }
            
            .uniform-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            
            .uniform-list li {
                background: #f8f9fa;
                margin-bottom: 1rem;
                padding: 1rem 1.5rem;
                border-radius: 8px;
                border-left: 4px solid #3498db;
                font-size: 1.1rem;
                color: #2c3e50;
                transition: all 0.3s ease;
            }
            
            .uniform-list li:hover {
                background: #e9ecef;
                transform: translateX(5px);
            }
            
            .uniform-list li::before {
                content: "✓";
                color: #27ae60;
                font-weight: bold;
                margin-right: 1rem;
                font-size: 1.2rem;
            }
            
            .policy-link {
                text-align: center;
                margin-top: 2rem;
            }
            
            .policy-btn {
                background: #3498db;
                color: black;
                padding: 0.8rem 1.5rem;
                border-radius: 25px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1rem;
                display: inline-block;
                transition: all 0.3s ease;
                border: none;
                box-shadow: 0 3px 10px rgba(52, 152, 219, 0.3);
            }
            
            .policy-btn:hover {
                background: #2980b9;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
                color: black;
                text-decoration: none;
            }
            
            .purchasing-section {
                padding: 4rem 0;
                background: white;
            }
            
            .purchasing-card {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: white;
                border-radius: 12px;
                padding: 3rem;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                text-align: center;
            }
            
            .purchasing-card h4 {
                color: white;
                font-size: 2rem;
                margin-bottom: 1.5rem;
                font-weight: 600;
            }
            
            .purchasing-card p {
                font-size: 1.1rem;
                line-height: 1.6;
                margin-bottom: 1.5rem;
                opacity: 0.9;
            }
            
            .purchase-btn {
                background: #27ae60;
                color: black;
                padding: 1rem 2rem;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                font-size: 1.1rem;
                display: inline-block;
                transition: all 0.3s ease;
                border: none;
                box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
            }
            
            .purchase-btn:hover {
                background: #219a52;
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
                color: black;
                text-decoration: none;
            }
            
            .brand-highlight {
                background: #e8f5e8;
                border-radius: 8px;
                padding: 1.5rem;
                margin: 1.5rem 0;
                border-left: 4px solid #27ae60;
            }
            
            .brand-highlight p {
                margin: 0;
                color: #2c3e50;
                font-style: italic;
            }
            
            @media screen and (max-width: 768px) {
                .principle-card,
                .uniform-card,
                .purchasing-card {
                    padding: 2rem;
                }
                
                .content-section,
                .uniform-requirements,
                .purchasing-section {
                    padding: 2rem 0;
                }
            }
        </style>
    </head>
<body class="page-parent">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- CONTENT -->
<section class="content-section">
    <div class="row">
        <div class="medium-7 columns">
            <div class="principle-card">
                <h3>The Principle of Uniform</h3>
                <p>Students should take pride in their uniform, care in their appearance, and look smart at all times.</p>
                <p>School is a place of work and preparation for working life. The school uniform and appearance rules support good behaviour and discipline across the school.</p>
                <p>We wish to encourage some choice, however do avoid extremes or competition in fashion.</p>
            </div>
        </div>
        <div class="medium-5 columns">
            <div class="image-container">
                <img src="images/uniform/uniform-01.jpg" alt="Uniform helps students focus on their education">
            </div>
        </div>
    </div>
</section>

<section class="uniform-requirements">
    <div class="row">
        <div class="medium-5 columns">
            <div class="image-container">
                <img src="images/uniform/uniform-02.jpg" alt="Happy Students in Uniform">
            </div>
        </div>
        <div class="medium-7 columns">
            <div class="uniform-card">
                <h4>Required Uniform Items</h4>
                <ul class="uniform-list">
                    <li>Park Black Blazer (Compulsory)</li>
                    <li>White shirt with collar capable of taking a tie</li>
                    <li>School tie and House pin</li>
                    <li>Black formal trousers or black box pleat skirt</li>
                    <li>Plain black outdoor shoes with sensible heels</li>
                </ul>
                <div class="policy-link">
                    <a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="policy-btn">📋 View Uniform Policy</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="purchasing-section">
    <div class="row">
        <div class="medium-7 columns">
            <div class="purchasing-card">
                <h4>🛒 Purchase Your Uniform</h4>
                <p>Park Community School partners with Skoolkit to bring all of our uniform to one place and reduce costs.</p>
                <p>Visit their wonderful website where you can purchase all of your uniform requirements and even collect in-store.</p>
                <a href="//www.skoolkit.co.uk/" target="_blank" class="purchase-btn">Shop Uniform Now! 🛍️</a>
            </div>
        </div>
        <div class="medium-5 columns">
            <div class="image-container">
                <img src="images/uniform/uniform-03.jpg" alt="Uniform to suit all year round">
            </div>
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