<?php
$pageTitle = 'Park Community School | Design and Print';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .contact-section {
        padding: 3rem 0;
    }
    
    .contact-section h4 {
        color: #EE3A80;
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
    }
    
    .contact-section hr {
        border: none;
        border-top: 2px solid #EE3A80;
        width: 50px;
        margin: 0.5rem 0 1rem;
    }
    
    .contact-list {
        list-style: none;
        margin: 0 0 2rem 0;
        padding: 0;
    }
    
    .contact-list li {
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .contact-list a {
        color: #EE3A80;
    }
    
    .contact-list a:hover {
        color: #c42d68;
    }
    
    .contact-note {
        font-size: 0.9rem;
        color: #666;
        font-style: italic;
    }
    
    @media (max-width: 639px) {
        .content-section img {
            margin-top: 1.5rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-8">
                <p>Park Design and Print Services (PDP) initially began as an enterprise project, using digital reproducing equipment to produce all of the internal school reprographics.</p>
                <p>Over time they have become established and now produce bespoke educational printing, meeting the exact requirements of school staff e.g. student planners and learning materials.</p>
                <p>Students have been involved in the creation of some of the school products and have helped to produce the printed material and carry out the specialist finishing of some products. We continue to look for ways to involve present and past students.</p>
                <p>We have expanded by offering this service out to other schools, as the quality is extremely high and the bespoke nature of materials exceed expectations.</p>
            </div>
            <div class="cell medium-4">
                <img src="images/unit/unit-02.jpg" alt="Park Design and Print - Large Range of Professional Quality Products">
            </div>
        </div>
    </div>
</section>

<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-4 medium-order-1 small-order-2">
                <img src="images/unit/unit-01.jpg" alt="Design and Print - Adding the personal touch to your designs and ideas">
            </div>
            <div class="cell medium-8 medium-order-2 small-order-1">
                <p>Organisations outside education have embraced the ideology of PDP and we now receive work from them. PDP is based away from the school site in an industrial unit in Leigh Park.</p>
                <p>The unit allows PDP to develop, design, create, and offer our services to both internal and external customers. We produce printed mugs, canvas prints, badges, T-shirts, diaries and calendars all at affordable prices and on a scale which allows many to commission our services.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <h4>Opening Hours</h4>
                <hr>
                <ul class="contact-list">
                    <li>Monday - Friday: 9am - 4pm</li>
                    <li>Saturday: Closed</li>
                    <li>Sunday: Closed</li>
                </ul>
                <p class="contact-note">* Closed Bank Holidays, any queries please contact for information.</p>
                
                <h4>Address</h4>
                <hr>
                <ul class="contact-list">
                    <li>Park Design and Print</li>
                    <li>6 Fulflood Road</li>
                    <li>Dunsbury Way</li>
                    <li>Havant</li>
                    <li>PO9 5AX</li>
                </ul>
                
                <h4>Contact Information</h4>
                <hr>
                <ul class="contact-list">
                    <li>Telephone: 023 9248 9840</li>
                    <li>Email: <a href="mailto:pdp@pcs.hants.sch.uk">pdp@pcs.hants.sch.uk</a></li>
                </ul>
            </div>
            <div class="cell medium-4 show-for-medium">
                <img src="images/unit/unit-04.jpg" alt="Park Community School, Design and Print - Offering students real life experiences">
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>