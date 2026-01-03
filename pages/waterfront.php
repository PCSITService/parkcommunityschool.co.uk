<?php
$pageTitle = 'Park Community School | The Waterfront';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h4 {
        color: #EE3A80;
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section a {
        color: #EE3A80;
    }
    
    .content-section a:hover {
        color: #d81b60;
    }
    
    .logo-image {
        max-width: 300px;
        margin: 0 auto;
        display: block;
    }
    
    .visit-button {
        display: inline-block;
        background-color: #EE3A80;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-bottom: 1.5rem;
    }
    
    .visit-button:hover {
        background-color: #d81b60;
        color: white;
        transform: translateY(-2px);
    }
    
    .seasonal-notice {
        background: linear-gradient(135deg, #fff3cd, #fef8e1);
        border-left: 4px solid #ffc107;
        padding: 1.25rem;
        border-radius: 0 8px 8px 0;
        margin-top: 1rem;
    }
    
    .seasonal-notice p {
        margin: 0;
        color: #856404;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .contact-box {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .contact-box h4 {
        margin-top: 0;
    }
    
    .contact-box h4:not(:first-child) {
        margin-top: 1.5rem;
    }
    
    .contact-box hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 0.75rem 0;
    }
    
    .contact-box ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .contact-box li {
        padding: 0.35rem 0;
    }
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
    }
    
    .gallery-grid img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .gallery-grid img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    
    .partners-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        margin-top: 2rem;
        align-items: center;
    }
    
    .partners-grid img {
        max-height: 80px;
        width: auto;
        margin: 0 auto;
        display: block;
    }
    
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>


<!-- INTRO SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>The Waterfront is managed by Park Community School, Havant. We are a non-profit-making enterprise supporting our students in learning, catering and business skills.</p>

                <a class="visit-button" href="https://goo.gl/maps/bh7zap53ACAYAUZV6" target="_blank">Come Visit Us</a>
                
                <div class="seasonal-notice">
                    <p><strong>Seasonal Opening:</strong> The Waterfront operates during the summer season. Please check back for our opening dates.</p>
                </div>
            </div>
            <div class="cell medium-6 text-center">
                <img src="/images/waterfront/waterfront_logo.png" alt="The Waterfront logo" class="logo-image">
            </div>
        </div>
    </div>
</section>

<!-- CONTACT & GALLERY SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-5">
                <div class="contact-box">
                    <h4>Address</h4>
                    <hr>
                    <ul>
                        <li>The Waterfront</li>
                        <li>Avenue de Caen</li>
                        <li>Southsea</li>
                        <li>Portsmouth</li>
                        <li>PO5 3NS</li>
                    </ul>
                    
                    <h4>Contact Information</h4>
                    <hr>
                    <ul>
                        <li><strong>Email:</strong> <a href="mailto:waterfront@pcs.hants.sch.uk">waterfront@pcs.hants.sch.uk</a></li>
                    </ul>
                </div>
            </div>
            <div class="cell medium-7">
                <div class="gallery-grid">
                    <img src="/images/waterfront/waterfront.jpg" alt="The Waterfront seafront location">
                    <img src="/images/waterfront/image_1.jpeg" alt="Food at The Waterfront">
                    <img src="/images/waterfront/image_2.jpeg" alt="The Waterfront serving area">
                    <img src="/images/waterfront/image_3.jpeg" alt="Customers at The Waterfront">
                    <img src="/images/waterfront/image_4.jpeg" alt="The Waterfront team">
                    <img src="/images/waterfront/image_5.jpeg" alt="Seaside views from The Waterfront">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h4>Why Are We Managing The Waterfront?</h4>
                <p>We have a nationally award-winning Catering Team led by Alex Moody and Andy Grant and provide high-quality meals daily for our students, alongside catering for business conferences, parties, weddings, and festivals. We also successfully manage the Tea Rooms at the Coach House in Staunton Country Park.</p>
                <p>Managing The Waterfront gives us the opportunity to showcase our skills and provide great food to the public and provides students the opportunity to learn skills both in catering and what it takes to run a business. Any profits will support our school and community activities including our Munch Community Food Pantry and our free Munch community meals programme.</p>
                <p>We are pleased to work in partnership with Portsmouth City Council who are leasing this property to us. There is synergy between both parties to provide a great destination for food and to be able to offer young people skills and employment.</p>

                <div class="partners-grid">
                    <img src="/images/waterfront/waterfront_logo.png" alt="The Waterfront">
                    <img src="/images/waterfront/portsmouth-city-council.jpg" alt="Portsmouth City Council">
                    <img src="/images/waterfront/park_community_school.jpg" alt="Park Community School">
                    <img src="/images/waterfront/community_heritage_fund.jpg" alt="Community Heritage Fund">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>