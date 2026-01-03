<?php
$pageTitle = 'Park Community School | Suite - Audio Video Recording';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h3 {
        color: #EE3A80;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section h4 {
        color: #333;
        font-size: 1.2rem;
        margin-bottom: 0.75rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .content-section a {
        color: #EE3A80;
    }
    
    .content-section a:hover {
        color: #d81b60;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .video-embed {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .video-embed iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .social-links {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        text-align: center;
        margin-top: 2rem;
    }
    
    .social-link {
        background: white;
        padding: 1.25rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .social-link i {
        font-size: 1.5rem;
        color: #EE3A80;
        margin-bottom: 0.5rem;
        display: block;
    }
    
    .pricing-list {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 1rem 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .pricing-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .pricing-list li:last-child {
        border-bottom: none;
    }
    
    .contact-box {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .contact-box h4 {
        color: #EE3A80;
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
    
    @media (max-width: 768px) {
        .social-links {
            grid-template-columns: 1fr;
        }
    }
</style>



<!-- INTRO SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-8">
                <p>The Suite recording studios are a state-of-the-art recording facility, which specialise in video, pro audio and radio.</p>
                <p>The BBC opened the studios in 2003 with the aim of providing a high quality of service and education to the pupils of Park Community School and to the general public.</p>
                <p>As part of the school's rebuild, The Suite's equipment was upgraded to reflect the ever-changing world of technology.</p>
            </div>
            <div class="cell medium-4">
                <img src="/images/suite/suite.jpg" alt="The Suite, Audio and Video Recording Studio">
            </div>
        </div>
    </div>
</section>

<!-- THE RAVEN -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7 medium-order-1 small-order-2">
                <img src="/images/suite/theraven.jpg" alt="The Raven MTX 2 touch screen mixing console">
            </div>
            <div class="cell medium-5 medium-order-2 small-order-1">
                <h3>The Raven</h3>
                <p>Park Community became the first school in the country to own and use <a href="https://www.slatemt.com/products/raven-mtx/" target="_blank">The Raven MTX 2</a> touch screen mixing console designed by <a href="https://www.slatedigital.com/" target="_blank">Slate Digital</a>.</p>
                <p>This new desk allows our clients and engineers to get hands-on and integrate with their audio projects.</p>
            </div>
        </div>
    </div>
</section>

<!-- SONTRONICS -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <h3>Sontronics Partnership</h3>
                <p>The Suite are proud to have a partnership with British microphone manufacturers <a href="https://sontronics.com/" target="_blank">Sontronics</a>, allowing us to offer the very best in high-quality audio capturing, enhancing your band's sound.</p>

                <p><strong>Examples of hardware available:</strong></p>
                <ul>
                    <li><a href="https://www.sontronics.com/saturn.htm" target="_blank">Sontronics Saturn</a></li>
                    <li><a href="https://www.sontronics.com/dm1b.htm" target="_blank">Sontronics DM-1B</a></li>
                    <li><a href="https://www.sontronics.com/delta.htm" target="_blank">Sontronics Delta</a></li>
                </ul>
            </div>
            <div class="cell medium-5">
                <img src="/images/suite/sontronics.jpg" alt="Sontronics partnership - the best of British microphones">
            </div>
        </div>
    </div>
</section>

<!-- PARK RADIO -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-5 medium-order-1 small-order-2">
                <img src="/images/suite/studentradio.jpg" alt="Park Radio student broadcasting">
            </div>
            <div class="cell medium-7 medium-order-2 small-order-1">
                <h3>Park Radio and News</h3>
                <p>The Studio plays host to the school's weekly news broadcast.</p>
                <p>Butterfly Broadcast is a news show written, filmed and produced by the pupils of Park Community School with the intention of informing and educating their fellow peers.</p>
                <p>The pupil-led radio station grants students the opportunity to showcase their interviewing, presenting and research skills, whilst entertaining the community with the latest tracks in the charts.</p>
            </div>
        </div>
    </div>
</section>

<!-- LIVE ROOM A -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-5">
                <h3>Live Room A</h3>
                <p>Sound-treated, asymmetric rehearsal room, ideal for band rehearsal, recordings, and as a teaching space.</p>
                <p>This room is also used as a television studio by Park Community School and is a perfect quiet space for recording interviews, voice-overs and even string quartets.</p>
                <p>The Danemann baby grand piano is included in the hire of this room.</p>
            </div>
            <div class="cell medium-7">
                <img src="/images/suite/liverooma.jpg" alt="Live Room A - professional recording space with grand piano">
            </div>
        </div>
    </div>
</section>

<!-- LIVE ROOM B -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7 medium-order-1 small-order-2">
                <img src="/images/suite/liveroomb.jpg" alt="Live Room B - band rehearsal space">
            </div>
            <div class="cell medium-5 medium-order-2 small-order-1">
                <h3>Live Room B</h3>
                <p>The smaller of the two spaces, this room can either be used as a recording space or as a band rehearsal room. Perfect for 4/5-piece bands who like to make a BIG sound!</p>
                <ul>
                    <li>Private Practice Space</li>
                    <li>Suitable for 4/5-Piece Band</li>
                    <li>Hireable Drum Kit, Guitars and Basses</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PRICING -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <h3>Pricing</h3>
                <p>The diversity of our facilities allows us to work on a whole host of projects both large and small, catering for all budgets.</p>

                <ul class="pricing-list">
                    <li>Rehearsal Rooms for Hire – £10 per hour</li>
                    <li>Professional recordings from £180 per day</li>
                    <li>Audio Mixing and Mastering starting from £30</li>
                    <li>Professional, Corporate and Music Videos</li>
                    <li>Band Photography</li>
                    <li>Studio Dry Hire</li>
                </ul>

                <p>Food available on request. Contact for more information and a full list of services.</p>
            </div>
            <div class="cell medium-5 show-for-medium">
                <img src="/images/suite/suite-01.jpg" alt="The Suite professional recording equipment">
            </div>
        </div>
    </div>
</section>

<!-- SHOW REEL -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h3>Show Reel</h3>
                
                <div class="video-embed">
                    <iframe src="https://www.youtube.com/embed/vMQdL_Rlz00?rel=0&amp;showinfo=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="The Suite Show Reel"></iframe>
                </div>

                <div class="social-links">
                    <div class="social-link">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                        <a href="https://www.facebook.com/thesuiterecordings" target="_blank">TheSuiteRecordings</a>
                    </div>
                    <div class="social-link">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                        <a href="https://twitter.com/SuiteRecordings" target="_blank">@SuiteRecordings</a>
                    </div>
                    <div class="social-link">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                        <a href="https://instagram.com/thesuiterecordings/" target="_blank">TheSuiteRecordings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-5">
                <div class="contact-box">
                    <h4>Opening Hours</h4>
                    <hr>
                    <ul>
                        <li>Monday – Friday: 5pm–10pm</li>
                        <li>Saturday &amp; Sunday: 9am–4pm</li>
                    </ul>
                    
                    <h4>Contact Information</h4>
                    <hr>
                    <ul>
                        <li><strong>Telephone:</strong> 023 9248 9810</li>
                        <li><strong>Email:</strong> <a href="mailto:bookings@pcs.hants.sch.uk">bookings@pcs.hants.sch.uk</a></li>
                    </ul>
                </div>
            </div>
            <div class="cell medium-7 show-for-medium">
                <img src="/images/suite/suite-03.jpg" alt="The Suite caters for diverse music genres">
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>