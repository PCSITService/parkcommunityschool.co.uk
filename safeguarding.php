<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Park Community School | Safeguarding</title>
        <?php include("includes/head.html") ?>
        <style>
            .team-member-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                text-align: center;
                margin-bottom: 20px;
            }

            .team-member-container p {
                margin: 5px 0;
                min-height: 20px; /* Ensures consistent height for alignment */
            }

            .dsl-role {
                font-weight: bold;
                color: #0d6efd;
            }

            .team-member {
                max-width: 100%;
                height: auto;
                border-radius: 50%;
                width: 150px;
                height: 150px;
                object-fit: cover;
                margin-bottom: 10px;
                border: 3px solid #f8f9fa;
                box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
            }

            .safeguarding-row {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 30px; /* Adds spacing between rows */
            }

            .safeguarding-column {
                flex: 1;
                max-width: 300px;
                padding: 15px;
            }

            .safeguarding-heading {
                text-align: center;
                margin: 50px 0 30px 0; /* Adds space above and below heading */
                color: #333;
                font-weight: bold;
            }

            /* Dark section styling */
            .dark-section {
                background-color: #333333;
                color: #ffffff;
                padding: 40px 0;
                margin-top: 40px;
            }

            /* Button styling */
            .resource-button {
                display: inline-block;
                padding: 12px 20px;
                font-weight: bold;
                text-align: center;
                background-color: #2e8b57; /* Sea Green color */
                color: white;
                border-radius: 4px;
                margin: 10px;
                transition: background-color 0.3s, transform 0.2s;
                text-decoration: none;
                min-width: 180px;
            }

            .resource-button:hover {
                background-color: #3cb371; /* Medium Sea Green on hover */
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .button-container {
                display: flex;
                justify-content: center;
                margin: 10px 0;
            }

            /* Responsive adjustments */
            @media screen and (max-width: 640px) {
                .safeguarding-column {
                    max-width: 100%;
                    margin-bottom: 20px;
                }
                
                .team-member {
                    width: 120px;
                    height: 120px;
                }
            }
        </style>
    </head>
<body class="page-parent">
    <?php include("includes/topnav.html") ?>

    <section class="main-content">
        <div class="container">
            <h3 class="safeguarding-heading">Designated Safeguarding Leads</h3>
            
            <div class="safeguarding-row">
                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/SBN.png" alt="Ms S Bannard" class="team-member">
                    <p>Ms S Bannard</p>
                    <p class="dsl-role">Lead DSL</p>
                    <p>Designated Teacher for LAC</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/JBY.png" alt="Mr J Bryce" class="team-member">
                    <p>Mr J Bryce</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/ELE.png" alt="Mrs E Leach" class="team-member">
                    <p>Mrs E Leach</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>
            </div>

            <div class="safeguarding-row">
                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/TSE.png" alt="Mrs T Seaman" class="team-member">
                    <p>Mrs T Seaman</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/SHO.jpg" alt="Mrs Sian Howes" class="team-member">
                    <p>Mrs Sian Howes</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/JBR.png" alt="Mrs Jo-Anne Breedon" class="team-member">
                    <p>Mrs Jo-Anne Breedon</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>
            </div>

            <div class="safeguarding-row">
                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/FFE.png" alt="Miss Florence Fearon" class="team-member">
                    <p>Miss Florence Fearon</p>
                    <p class="dsl-role">Community DSL</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/FMA.jpg" alt="Mrs Fiona Maskill" class="team-member">
                    <p>Mrs Fiona Maskill</p>
                    <p class="dsl-role">Deputy DSL</p>
                </div>

                <div class="safeguarding-column team-member-container">
                    <img src="images/dsl/RBI.png" alt="Mrs Rachel Bird" class="team-member">
                    <p>Mrs Rachel Bird</p>
                    <p class="dsl-role">Nursery DSL</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-section">
        <div class="container">
            <h3 class="safeguarding-heading" style="color: white;">Safeguarding Resources</h3>
            
            <!-- Resources Section -->
            <div class="safeguarding-row">
                <div class="safeguarding-column" style="display: flex; justify-content: center;">
                    <div class="button-container">
                        <a href="assets/safegaurding/visitor.pdf" target="_blank" class="resource-button">
                            <i class="fa fa-file-pdf" aria-hidden="true"></i> Visitor Leaflet
                        </a>
                    </div>
                </div>

                <div class="safeguarding-column" style="display: flex; justify-content: center;">
                    <div class="button-container">
                        <a href="https://www.safe4me.co.uk/parents/" target="_blank" class="resource-button">
                            <i class="fa fa-shield-alt" aria-hidden="true"></i> Safe4me
                        </a>
                    </div>
                </div>

                <div class="safeguarding-column" style="display: flex; justify-content: center;">
                    <div class="button-container">
                        <a href="/parent-advice.php" class="resource-button">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Parent Advice
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="safeguarding-row">
                <div class="safeguarding-column" style="text-align: center; color: #fff;">
                    <p>For urgent safeguarding concerns, please contact the school office at:</p>
                    <p><strong><i class="fa fa-phone" aria-hidden="true"></i> 023 9248 9800</strong></p>
                    <p>Out of hours, please contact Hampshire Children's Services:</p>
                    <p><strong><i class="fa fa-phone" aria-hidden="true"></i> 0300 555 1384</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>
    
    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
</body>
</html>