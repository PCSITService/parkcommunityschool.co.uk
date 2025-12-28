<?php
$pageTitle = 'Park Community School | MUNCH Pantry';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h3 {
        color: #EE3A80;
        margin-bottom: 1rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .address-box {
        background: #f8f9fa;
        border-left: 4px solid #EE3A80;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .address-box p {
        margin: 0;
        line-height: 1.8;
    }
    
    .button-row {
        margin: 2rem 0;
    }
    
    .pantry-button {
        background-color: #27ae60;
        color: white;
        padding: 0.85rem 2rem;
        border-radius: 30px;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .pantry-button:hover {
        background-color: #219a52;
        color: white;
        transform: translateY(-2px);
    }
    
    .pantry-button small {
        opacity: 0.8;
    }
    
    .video-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        margin: 2rem 0;
    }
    
    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .partners-section {
        margin: 2rem 0;
    }
    
    .partners-section > p {
        margin-bottom: 1.5rem;
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
        filter: grayscale(20%);
        transition: all 0.3s ease;
    }
    
    .partners-grid img:hover {
        filter: grayscale(0%);
        transform: scale(1.05);
    }
    
    .location-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .location-section h3 {
        color: #EE3A80;
        margin-bottom: 1rem;
    }
    
    .contact-section {
        padding: 3rem 0;
    }
    
    .contact-section h4 {
        color: #EE3A80;
        margin-bottom: 0.5rem;
    }
    
    .contact-section hr {
        border-color: #e0e0e0;
        margin: 0.75rem 0 1rem;
    }
    
    .contact-list {
        list-style: none;
        margin: 0 0 1.5rem;
        padding: 0;
    }
    
    .contact-list li {
        margin-bottom: 0.5rem;
    }
    
    .contact-section a {
        color: #EE3A80;
        font-weight: 600;
    }
    
    .contact-section a:hover {
        color: #d62e6e;
    }
    
    .contact-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .opening-hours {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        margin-bottom: 2rem;
    }
    
    .opening-hours h4 {
        margin-top: 0;
    }
    
    @media (max-width: 768px) {
        .partners-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h3>What is a community pantry?</h3>
                <p>A pantry is 'get more for less' – it is designed to help family budgets go further.</p>
                
                <p>Our community has been receiving food from Foodbank PO9 and the Munch fridge in the Dickinson Centre for several years. A Community Food Pantry is the next step for families, enabling them to make a choice of the food that they can have in return for a weekly subscription of £5.</p>
                
                <p>We are extremely grateful to Havant Borough Council and the Guinness Partnership who recognised the idea as an alternative way of helping the community. Once the promise of funding had been made we sought premises. We were fortunate that the landlady of The Swallow Pub, who was always supportive of our charity initiatives, gave over one side of the pub to house the pantry. We were made truly welcome and we moved into the pub in November 2020. By 2021, over 400 members a month were regularly using the Munch Pantry.</p>
                
                <p>In December 2021, The Swallow Pub was sold and the landlady retired. We will always be eternally grateful for all the help and commitment she gave to getting this started. From this one pantry, we have been able to use the model and, through funding from HCC Connect4Communities, there are now another 15 pantries established in Hampshire.</p>
                
                <p><strong>The Munch Community Food Pantry has moved to:</strong></p>
                
                <div class="address-box">
                    <p>The Dickinson Centre<br>
                    Park Community School<br>
                    Middle Park Way<br>
                    Havant<br>
                    PO9 4BU</p>
                </div>

                <p>Munch Community Food Pantry continues to operate in the same way. Opening hours are Monday 11am-1pm, Tuesday 11am-1pm, Wednesday 5pm-7pm and Thursday 11am-1pm.</p>

                <div class="button-row text-center">
                    <a class="pantry-button" href="assets/pantry/flyer.pdf" target="_blank">Pantry Flyer <small>(PDF)</small></a>
                </div>

                <div class="video-embed">
                    <iframe src="https://player.vimeo.com/video/515253878" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>

                <div class="partners-section">
                    <p>This project would not be possible without:</p>
                    <ul class="partners-grid">
                        <li><img src="images/pantry/theguinnesspartnership.png" alt="The Guinness Partnership"></li>
                        <li><img src="images/pantry/hampshirecountycouncil.png" alt="Hampshire County Council"></li>
                        <li><img src="images/pantry/havantboroughcouncil.png" alt="Havant Borough Council"></li>
                        <li><img src="images/pantry/fareshare.png" alt="FareShare"></li>
                        <li><img src="images/pantry/c4c.png" alt="Connect4Communities"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="location-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h3>How to Find Us</h3>
                <p>Dickinson Centre, Park Community School, Middle Park Way, Havant, PO9 4BU</p>

                <div class="video-embed">
                    <iframe src="https://player.vimeo.com/video/482577938" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-5">
                <div class="opening-hours">
                    <h4>Opening Hours</h4>
                    <hr>
                    <ul class="contact-list">
                        <li><strong>Monday:</strong> 11am - 1pm</li>
                        <li><strong>Tuesday:</strong> 11am - 1pm</li>
                        <li><strong>Wednesday:</strong> 5pm - 7pm</li>
                        <li><strong>Thursday:</strong> 11am - 1pm</li>
                    </ul>
                    
                    <h4>Contact Information</h4>
                    <hr>
                    <ul class="contact-list">
                        <li><strong>Telephone:</strong> 02392 489811</li>
                        <li><strong>Email:</strong> <a href="mailto:munch@pcs.hants.sch.uk">munch@pcs.hants.sch.uk</a></li>
                    </ul>
                </div>
            </div>
            <div class="cell medium-7">
                <img src="images/pantry/pantry.png" alt="MUNCH Pantry - A helping hand, not a hand out">
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>