<?php
$pageTitle = 'Park Community School | Theatre';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h2 {
        color: #EE3A80;
        margin-bottom: 1.25rem;
        font-size: 1.75rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.35rem;
        line-height: 1.7;
    }
    
    .content-section a {
        color: #EE3A80;
    }
    
    .content-section a:hover {
        color: #d81b60;
    }
    
    .content-section hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 2rem 0;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .intro-section {
        padding: 1rem 0 2rem;
    }
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 1rem;
        margin: 2rem 0;
    }
    
    .gallery-grid img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .gallery-grid img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    
    .cta-button {
        display: inline-block;
        background-color: #a3cd42;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .cta-button:hover {
        background-color: #8fb332;
        color: white;
        transform: translateY(-2px);
    }
    
    .floor-plan-button {
        display: inline-block;
        background-color: #EE3A80;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }
    
    .floor-plan-button:hover {
        background-color: #d81b60;
        color: white;
        transform: translateY(-2px);
    }
    
    .button-row {
        text-align: center;
        margin: 1.5rem 0;
    }
    
    .space-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .space-card h2 {
        margin-top: 0;
    }
    
    .space-uses {
        background: linear-gradient(135deg, #fce4ec, #fff);
        border-left: 4px solid #EE3A80;
        padding: 1rem 1.5rem;
        border-radius: 0 8px 8px 0;
        margin-top: 1rem;
    }
    
    .space-uses strong {
        color: #EE3A80;
    }
    
    .equipment-section h4 {
        color: #EE3A80;
        font-size: 1.1rem;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .equipment-section h4:first-of-type {
        margin-top: 0;
    }
    
    .equipment-note {
        font-size: 0.9rem;
        color: #666;
        font-style: italic;
        margin-top: 0.5rem;
    }
    
    .customers-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .customer-item {
        background: #f8f9fa;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        text-align: center;
    }
    
    @media (max-width: 1024px) {
        .gallery-grid {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .customers-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 640px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .customers-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- INTRO -->
<section class="intro-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <p>Park Community Theatre is situated on the outskirts of Havant and comprises the main theatre, a lecture theatre/cinema, a drama studio and a dance studio as well as dressing rooms, ample toilet facilities and showers.</p>
                <p>In addition, we also have a licensed bar, which can be located in either the foyer or the auditorium, and restaurant-quality catering facilities overseen by our multi-award-winning chef.</p>
                <p>Outside we offer free on-site parking for over 400 cars and ample space for vans and lorries delivering equipment and scenery.</p>
                <p>The whole complex is on the ground floor and therefore offers flat, direct access from the loading areas to the stage for easy access with scenery etc., and excellent disabled access for audience and performers alike. All spaces are equipped with induction loop facilities and have underfloor heating.</p>
                
                <div class="gallery-grid">
                    <img src="/images/theatre/theatre_1.jpg" alt="Main theatre space with seating">
                    <img src="/images/theatre/theatre_2.jpg" alt="Main theatre band performance">
                    <img src="/images/theatre/theatre_3.jpg" alt="Main theatre drama performance">
                    <img src="/images/theatre/theatre_4.jpg" alt="LDN Wrestling event at Park">
                    <img src="/images/theatre/theatre_5.jpg" alt="Backstage area">
                </div>
                
                <div class="button-row">
                    <a href="/pages/contact.php" class="cta-button">Contact Us Today</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN THEATRE -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="space-card">
                    <h2>Main Theatre</h2>
                    <p>Our main theatre comprises a 245-seat auditorium with raked seating looking down onto a flat "black box" stage. The stage has greater wing space than many local professional venues and a crossover. It is equipped with adequate masking to hide all backstage areas and in addition to the upstage black tabs there is also a white cyclorama.</p>
                    <p>Usable stage area is approximately 9m wide by 10m deep which includes a 2.5m apron in front of the FOH tabs. Overhead height is in excess of 6m.</p>
                    <p>The theatre features retractable seating which allows for the space to be set up in a cabaret style with chairs and tables. In this configuration the venue can hold 100 people seated and 80 standing and have the bar located in the auditorium; an ideal setup for concerts and cabaret events.</p>
                    
                    <div class="space-uses">
                        <strong>Perfect for:</strong> Dance shows, musical theatre, theatre productions, concert venue, rehearsal room, <a href="/pages/community-services.php">party room, wedding receptions and children's parties</a>.
                    </div>
                    
                    <div class="button-row">
                        <a href="/images/theatre/theatre_ground_plan.pdf" target="_blank" class="floor-plan-button">Main Theatre Floor Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LECTURE THEATRE -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="space-card">
                    <h2>Lecture Theatre &amp; Cinema</h2>
                    <p>The lecture theatre comprises up to 180 seats which can be set out in a variety of seating configurations allowing for a smaller audience and a larger floor area.</p>
                    <p>The cinema has a Dolby 5.1 surround sound system and a Panasonic EZ580 projector which together deliver bright, crisp images and deep, immersive sound for that genuine cinematic experience.</p>
                    <p>As a lecture theatre, the room is equipped with a bespoke lectern to which you can connect a wide variety of A/V and IT equipment.</p>
                    <p>The Lecture Theatre also has audio and video links to the main theatre and so can be used as a further dressing room or as a holding area for cast members where they can watch the show and warm up before going on stage. There is also the provision for placing your band or orchestra in this space and for setting up a two-way video link for your musical director to cue the cast.</p>
                    <p>The lecture theatre connects directly to the main theatre via a single door which allows access to the stage right wing and the crossover to stage left.</p>
                    
                    <div class="space-uses">
                        <strong>Perfect for:</strong> Cinema screenings, meeting room, lecture space, rehearsal room, dressing room and live performance.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DRAMA STUDIO -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="space-card">
                    <h2>Drama Studio</h2>
                    <p>The Drama Studio is the stage area of the Main Theatre which is closed off by a semi-soundproof wall across the proscenium. Available as a rehearsal or performance space, the studio is equipped with lighting, sound equipment and a stage as well as loose seating for an audience of up to 50 people.</p>
                    
                    <div class="space-uses">
                        <strong>Perfect for:</strong> Rehearsal room, dance studio and studio-scale performances.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DANCE STUDIO -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="space-card">
                    <h2>Dance Studio</h2>
                    <p>The Dance Studio features a cushioned floor, mirrors and a basic sound system. The dance floor is 12m wide by 10m deep and also has an extra 10m by 4m protective floor should you wish to have tap rehearsals/lessons in the space. An extra area behind the Dance Studio can extend the depth by a further 6m.</p>
                    
                    <div class="space-uses">
                        <strong>Perfect for:</strong> Dance studio, rehearsal room and <a href="/pages/community-services.php">soft play parties</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EQUIPMENT -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="space-card equipment-section">
                    <h2>Facilities and Equipment</h2>
                    
                    <h4>Lighting Equipment</h4>
                    <ul>
                        <li>8× 2kW Profiles</li>
                        <li>7× 1.2kW Profiles</li>
                        <li>8× 800W Profiles</li>
                        <li>6× 650W Profiles</li>
                        <li>2× 150W LED Profiles (WW)</li>
                        <li>2× Source4 Junior Profiles</li>
                        <li>16× 1.2kW Fresnels (12 with scrollers)</li>
                        <li>20× 1kW Par64s (8 with scrollers)</li>
                        <li>10× LED Par64s (RGBAW)</li>
                        <li>4× LED Floods (RGB)</li>
                        <li>2× 1.2kW Follow Spots</li>
                        <li>2× UV Cannons</li>
                        <li>Mirror Ball with LED spots (RGBW)</li>
                        <li>Chamsys QuickQ 30 Lighting Desk</li>
                        <li>96 direct patch circuits on the grid and at floor level</li>
                        <li>Extensive colour stock</li>
                        <li>Selection of common gobos</li>
                    </ul>

                    <hr>

                    <h4>Sound Equipment</h4>
                    <ul>
                        <li>4kW FOH EV PA system</li>
                        <li>6× Mackie SR450 foldback wedges*</li>
                        <li>2× Mackie SR450 fill</li>
                        <li>Allen &amp; Heath GLD80 digital mixing desk</li>
                        <li>2× Numark MP103 CD players</li>
                        <li>17" iMac with QLab Lite</li>
                        <li>10× Sennheiser EW100 G4 personal radio mics*</li>
                        <li>4× Shure SM57 hand-held radio mics*</li>
                        <li>8× Choir mics (permanently over the stage)</li>
                        <li>Selection of dynamic microphones</li>
                        <li>Selection of condenser microphones</li>
                        <li>Selection of DI boxes</li>
                        <li>Selection of microphone stands</li>
                        <li>Selection of analogue control desks*</li>
                        <li>Selection of XLR leads, looms and multicores*</li>
                        <li>Selection of miscellaneous audio leads and adaptors*</li>
                    </ul>
                    <p class="equipment-note">*These items are available for external hire.</p>

                    <hr>

                    <h4>Other Equipment</h4>
                    <ul>
                        <li>2× Cinema-quality Panasonic EZ580 projectors – 1 in each theatre</li>
                        <li>Tecpro communication system with master station and 6 belt packs</li>
                        <li>2× Smoke machines</li>
                        <li>1× Haze machine</li>
                        <li>10× SteelDeck 8'×4' with various length legs</li>
                        <li>Show relay to dressing rooms (audio only)</li>
                        <li>Show relay to Lecture Theatre (audio and video)</li>
                        <li>Genie AWP aerial platform (licence required)</li>
                    </ul>

                    <hr>

                    <p>In addition to this, the theatre has a very experienced full-time theatre technician who is only too happy to work with you and to help you stage your production to the highest possible standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PREVIOUS CUSTOMERS -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Past Customers</h2>
                <div class="customers-grid">
                    <div class="customer-item">Havant Borough Council</div>
                    <div class="customer-item">Hampshire County Council</div>
                    <div class="customer-item">Hampshire Music Service</div>
                    <div class="customer-item">Brightstars Dance Company</div>
                    <div class="customer-item">Portsmouth Music Festival</div>
                    <div class="customer-item">Southern Arts Academy</div>
                    <div class="customer-item">SD Studios</div>
                    <div class="customer-item">TADAA</div>
                    <div class="customer-item">Dynamic Dance</div>
                    <div class="customer-item">Performers Theatre Company</div>
                    <div class="customer-item">Timestep Dance</div>
                    <div class="customer-item">The Academy of Musical Theatre</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>