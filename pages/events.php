<?php
$pageTitle = 'Park Community School | Events';
include('../partials/header.php');
?>


<style>
    /* Modern CSS Variables */
    :root {
        --primary-green: #a3cd41;
        --primary-orange: #f08a24;
        --dark-bg: #333333;
        --light-gray: #f8f9fa;
        --text-dark: #2d3748;
        --text-light: #718096;
        --white: #ffffff;
        --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --shadow-heavy: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        --border-radius: 12px;
        --transition: all 0.3s ease;
    }

    /* Modern Events Container */
    .events-section {
        padding: 3rem 0;
    }

    .event-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 2rem;
        padding: 2rem 0;
    }

    /* Enhanced Event Cards */
    .event-wrap {
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-light);
        padding: 2rem;
        transition: var(--transition);
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .event-wrap::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
    }

    .event-wrap:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-heavy);
        border-color: var(--primary-green);
    }

    /* Date Badge */
    .date-wrap {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        background: linear-gradient(135deg, var(--primary-orange), #fb923c);
        color: white;
        padding: 0.75rem 1rem;
        border-radius: 8px;
        text-align: center;
        box-shadow: var(--shadow-light);
        min-width: 100px;
    }

    .event-date {
        font-size: 0.9rem;
        font-weight: 700;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .event-time {
        font-size: 0.8rem;
        margin: 0.25rem 0 0 0;
        opacity: 0.9;
    }

    /* Event Content */
    .event-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
        padding-right: 120px;
    }

    .event-subheader {
        font-size: 1rem;
        font-weight: 600;
        color: var(--primary-green);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .event-subheader::before {
        content: '';
        width: 4px;
        height: 4px;
        background: var(--primary-orange);
        border-radius: 50%;
    }

    .event-description {
        font-size: 1rem;
        line-height: 1.7;
        color: var(--text-light);
        margin-bottom: 2rem;
    }

    /* Enhanced Buttons */
    .event-button {
        background: linear-gradient(135deg, var(--primary-green), #68d391);
        border: none;
        color: white;
        padding: 0.8rem 2rem;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        box-shadow: var(--shadow-light);
    }

    .event-button:hover {
        background: linear-gradient(135deg, #8fb332, var(--primary-green));
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
        color: white;
        text-decoration: none;
    }

    /* Bottom Section */
    .bottom-wrap {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 2rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e2e8f0;
    }

    .location-wrap {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
    }

    .location-wrap::before {
        content: '📍';
        font-size: 1rem;
    }

    .location-wrap a {
        color: var(--text-light);
        text-decoration: none;
        transition: var(--transition);
    }

    .location-wrap a:hover {
        color: var(--primary-green);
    }

    .cost-wrap {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
        padding: 0.4rem 1rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Special Event Styling */
    .feature-event {
        background: linear-gradient(135deg, #fef7e0, #fef3c7);
        border-color: var(--primary-orange);
    }

    .feature-event::before {
        background: linear-gradient(90deg, var(--primary-orange), #fb923c);
    }

    /* Christmas Event Styling */
    .christmas-event {
        background: linear-gradient(135deg, #fef2f2, #fee2e2);
        border-color: #dc2626;
    }

    .christmas-event::before {
        background: linear-gradient(90deg, #dc2626, #b91c1c);
    }

    .christmas-event .date-wrap {
        background: linear-gradient(135deg, #dc2626, #b91c1c);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .event-container {
            grid-template-columns: 1fr;
            gap: 1.5rem;
            padding: 1rem 0;
        }

        .event-wrap {
            padding: 1.5rem;
        }

        .event-title {
            font-size: 1.5rem;
            padding-right: 0;
            margin-bottom: 1rem;
        }

        .date-wrap {
            position: static;
            margin-bottom: 1rem;
            width: fit-content;
        }

        .bottom-wrap {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }

        .cost-wrap {
            text-align: center;
        }
    }

    /* Focus States for Accessibility */
    .event-button:focus,
    a:focus {
        outline: 3px solid var(--primary-green);
        outline-offset: 2px;
    }

    /* Loading Animation */
    .event-wrap {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .event-wrap:nth-child(1) { animation-delay: 0.1s; }
    .event-wrap:nth-child(2) { animation-delay: 0.2s; }
    .event-wrap:nth-child(3) { animation-delay: 0.3s; }
    .event-wrap:nth-child(4) { animation-delay: 0.4s; }
    .event-wrap:nth-child(5) { animation-delay: 0.5s; }
    .event-wrap:nth-child(6) { animation-delay: 0.6s; }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- CONTENT -->
<section class="events-section">
    <div class="grid-container">
        <div class="event-container">

            <div class="event-wrap christmas-event">
                <div class="date-wrap">
                    <p class="event-date">25 Dec 2025</p>
                    <p class="event-time">12:00-2:00pm</p>
                </div>
                <h2 class="event-title">Christmas Day Celebration</h2>
                <p class="event-subheader">Special Christmas Day gathering for the community</p>
                <p class="event-description">Join us for a festive Christmas Day celebration! Enjoy a traditional meal, great company, and holiday cheer in a warm and welcoming environment. Everyone is welcome to share in the joy of the season.</p>
                <div class="link-wrap">
                    <a href="../assets/events/Christmas Day Invite 2025 Proof.pdf" target="_blank" class="event-button">View Invitation</a>
                </div>
                <div class="bottom-wrap">
                    <div class="location-wrap">
                        <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                    </div>
                    <div class="cost-wrap">Free</div>
                </div>
            </div>

            <div class="event-wrap">
                <h2 class="event-title">MUNCH Community Programme</h2>
                <p class="event-subheader">School Holidays 12-1pm • Thursday 4:00pm-5:30pm</p>
                <p class="event-description">MUNCH began as a holiday hunger scheme providing children with free meals, but has evolved into much more. We now provide a safe environment for families to meet, combat loneliness, and enjoy fun activities for all ages.</p>
                <div class="link-wrap">
                    <a href="../assets/munch/munch_flyer.pdf" target="_blank" class="event-button">Learn More</a>
                </div>
                <div class="bottom-wrap">
                    <div class="location-wrap">
                        <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                    </div>
                    <div class="cost-wrap">Free</div>
                </div>
            </div>

            <div class="event-wrap feature-event">
                <div class="date-wrap">
                    <p class="event-date">Every Day</p>
                    <p class="event-time">07:45-08:15</p>
                </div>
                <h2 class="event-title">The Big Healthy Breakfast</h2>
                <p class="event-subheader">Daily breakfast service for all students</p>
                <p class="event-description">Free breakfast for EVERY student every school day! Choose from hot bagels, cereals, or porridge. Additional options are available for purchase.</p>
                <div class="link-wrap">
                    <a href="/assets/events/big_breakfast.pdf" target="_blank" class="event-button">View Flyer</a>
                </div>
                <div class="bottom-wrap">
                    <div class="location-wrap">
                        <a href="https://www.google.com/maps/place/Park+Community+School/@50.8727033,-0.986906,14z/data=!4m5!3m4!1s0x487444917f5df9f1:0x1e05d50144e0a88a!8m2!3d50.87005!4d-1.001233" target="_blank">Park Community School</a>
                    </div>
                    <div class="cost-wrap">Free</div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth hover effects for event cards
        const eventCards = document.querySelectorAll('.event-wrap');
        
        eventCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    });
</script>

<?php include('../partials/footer.php'); ?>