<!doctype html>
<html class="no-js" lang="en" >
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
            }

            .team-member-container p {
                margin: 5px 0;
                min-height: 20px; /* Ensures consistent height for alignment */
            }

            .dsl-role {
                font-weight: bold;
            }

            .team-member {
                max-width: 100%;
                height: auto;
                border-radius: 50%;
            }

            .row {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 30px; /* Adds spacing between rows */
            }

            .columns {
                flex: 1;
                max-width: 300px;
                padding: 10px;
            }

            h3 {
                text-align: center;
                margin: 50px 0; /* Adds space above and below heading */
            }

            /* Specific adjustment for Fiona Maskill's text spacing */
            .fma-container p:first-of-type {
                margin-top: 20px; /* Moves name down */
            }

            /* CSS for vertical alignment in columns */
            .medium-6.columns {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
            }

            /* CSS for horizontal layout and icon bullets */
            .grey-bg .columns {
                display: inline-block;
                width: auto;
                margin-right: 20px;
            }

            .grey-bg .columns ul,
            .grey-bg .columns p {
                width: auto;
            }

            .icon-bullets li {
                list-style: none;
                padding-left: 20px;
                background-image: url("path/to/your/icon.png"); /* Replace with your icon URL */
                background-repeat: no-repeat;
                background-position: left center;
            }
        </style>
    </head>
<body class="page-parent">
<?php include("includes/topnav.html") ?>

<section>
    <h3>Designated Safeguarding Leads</h3>
    
    <div class="row">
        <div class="columns text-center team-member-container">
            <img src="images/dsl/SBN.png" alt="Lead DSL" class="team-member">
            <p>Ms S Bannard</p>
            <p class="dsl-role">Lead DSL</p>
            <p>Designated Teacher for LAC</p>
        </div>

        <div class="columns text-center team-member-container">
            <img src="images/dsl/JBY.png" alt="Deputy DSL" class="team-member">
            <p>Mr J Bryce</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>

        <div class="columns text-center team-member-container">
            <img src="images/dsl/ELE.png" alt="Deputy DSL" class="team-member">
            <p>Mrs E Leach</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>
    </div>

    <div class="row">
        <div class="columns text-center team-member-container">
            <img src="images/dsl/TSE.png" alt="Deputy DSL" class="team-member">
            <p>Mrs T Seaman</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>

        <div class="columns text-center team-member-container">
            <img src="images/dsl/SHO.jpg" alt="Deputy DSL" class="team-member">
            <p>Mrs Sian Howes</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>

        <div class="columns text-center team-member-container">
            <img src="images/dsl/JBR.png" alt="Deputy DSL" class="team-member">
            <p>Mrs Jo-Anne Breedon</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>
    </div>

    <div class="row">
        <div class="columns text-center team-member-container">
            <img src="images/dsl/FFE.png" alt="Deputy DSL" class="team-member">
            <p>Miss Florence Fearon</p>
            <p class="dsl-role">Community DSL</p>
        </div>

        <div class="columns text-center team-member-container fma-container">
            <img src="images/dsl/FMA.jpg" alt="Deputy DSL" class="team-member">
            <p>Mrs Fiona Maskill</p>
            <p class="dsl-role">Deputy DSL</p>
        </div>

        <div class="columns text-center team-member-container">
            <img src="images/dsl/RBI.png" alt="Deputy DSL" class="team-member">
            <p>Mrs Rachel Bird</p>
            <p class="dsl-role">Nursery DSL</p>
        </div>
    </div>
</section>

<section class="grey-bg" style="background-color: #333333; color: #ffffff;">
    <div class="row">
        <div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
    </div>

    <!-- Buttons Section -->
    <div class="row">
        <div class="columns medium-4" style="display: flex; justify-content: center;">
            <div class="button-container">
                <a href="assets/safegaurding/visitor.pdf" target="_blank" class="button radius success">Visitor Leaflet</a>
            </div>
        </div>

        <div class="columns medium-4" style="display: flex; justify-content: center;">
            <div class="button-container">
                <a href="https://www.safe4me.co.uk/parents/" target="_blank" class="button radius success">Safe4me</a>
            </div>
        </div>

        <div class="columns medium-4" style="display: flex; justify-content: center;">
            <div class="button-container">
                <a href="/parent-advice.php" target="_blank" class="button radius success">Parent Advice</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>

   
    <br><br>
    <!-- FOOTER -->
            <?php include("includes/footer.html") ?>
            <!-- End Site Footer -->
            <script src="js/vendor/libraries.min.js"></script>
            <script src="js/vendor/foundation.min.js"></script>
            <script src="js/app.min.js"></script>
            <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            <script type="text/javascript" src="slick/slick.min.js"></script>
                
            <script type="text/javascript">
                $(document).ready(function(){
                  $('.trip-slider').slick({
                    autoplay: true,
                    dots: true,
                    fade: true
                  });
                });
            </script>

        </body>
    </html>