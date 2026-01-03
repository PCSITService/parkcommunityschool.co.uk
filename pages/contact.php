<?php
$pageTitle = 'Park Community School | Contact Information';
include('../partials/header.php');
?>

<style>
    /* Contact section styling */
    .contact-section {
        padding: 60px 0;
    }

    .contact-intro {
        max-width: 800px;
        margin: 0 auto 40px;
        text-align: center;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    /* Force equal height with fixed min-height */
    .contact-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        padding: 30px;
        transition: transform 0.3s, box-shadow 0.3s;
        border-top: 4px solid #A3CD42;
        min-height: 230px;
        height: 100%;
        margin-bottom: 20px;
    }

    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .contact-card h4 {
        color: #333;
        font-weight: 600;
        margin-bottom: 20px;
        font-size: 1.4rem;
        position: relative;
        padding-bottom: 12px;
    }

    .contact-card h4::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background-color: #A3CD42;
    }

    .contact-card ul {
        margin-left: 0;
        list-style: none;
    }

    .contact-card ul li {
        margin-bottom: 10px;
        color: #555;
    }

    .contact-card .subheader {
        color: #777;
        font-size: 0.9rem;
        font-style: italic;
        margin-top: 5px;
    }

    .contact-card hr {
        border: none;
        border-top: 1px solid #eee;
        margin: 15px 0;
    }

    .contact-card a {
        color: #156A9C;
        font-weight: 500;
        transition: color 0.2s;
    }

    .contact-card a:hover {
        color: #A3CD42;
        text-decoration: none;
    }

    /* Map container */
    .map-container {
        margin-top: 30px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        height: 450px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
        display: block;
    }

    /* Responsive adjustments */
    @media (max-width: 639px) {
        .contact-card {
            min-height: auto;
        }
        
        .map-container {
            height: 300px;
        }
    }
</style>

<!-- CONTENT -->
<section class="contact-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <p class="contact-intro">Have a question or require assistance? Please feel free to contact us via the methods below; we'd love to hear from you and will make every effort to respond quickly and efficiently.</p>
            </div>
        </div>
        
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 medium-6">
                <div class="contact-card">
                    <h4>Address</h4>
                    <ul>
                        <li>Park Community School</li>
                        <li>Middle Park Way</li>
                        <li>Havant</li>
                        <li>PO9 4BU</li>
                    </ul>
                </div>
            </div>

            <div class="cell small-12 medium-6">
                <div class="contact-card">
                    <h4>Telecoms</h4>
                    <ul>
                        <li><strong>Tel:</strong> 02392 489800</li>
                        <li><strong>Fax:</strong> 02392 481012</li>
                        <li><strong>Email:</strong> <a href="mailto:info@pcs.hants.sch.uk">info@pcs.hants.sch.uk</a></li>
                    </ul>
                    <hr>
                    <ul>
                        <li>Community</li>
                        <li><strong>Tel:</strong> 02392 489811</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="cell small-12">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.0068087258668!2d-1.0014129935647632!3d50.86989900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48744493c92c85a5%3A0x1e0eedaa1c8e9b9a!2sPark%20Community%20School!5e1!3m2!1sen!2sus!4v1714521650972!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map of Park Community School"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Manual equal height function for contact cards
        function equalizeContactCards() {
            if (window.innerWidth >= 640) {
                const contactCards = document.querySelectorAll('.contact-card');
                let maxHeight = 0;
                
                // First reset heights
                contactCards.forEach(card => {
                    card.style.height = 'auto';
                });
                
                // Find max height
                contactCards.forEach(card => {
                    const height = card.offsetHeight;
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });
                
                // Apply max height to all cards
                contactCards.forEach(card => {
                    card.style.height = maxHeight + 'px';
                });
            } else {
                // Reset on mobile
                const contactCards = document.querySelectorAll('.contact-card');
                contactCards.forEach(card => {
                    card.style.height = 'auto';
                });
            }
        }
        
        // Run on load and resize
        equalizeContactCards();
        window.addEventListener('resize', equalizeContactCards);
    });
</script>

<?php include('../partials/footer.php'); ?>