<?php
$pageTitle = 'Park Community School | Uniform';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 3rem 0;
    }
    
    .principle-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border-left: 4px solid #1E7AB9;
        height: 100%;
    }
    
    .principle-card h3 {
        color: #1E7AB9;
        font-size: 1.5rem;
        margin-bottom: 1.25rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .principle-card p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 1rem;
    }
    
    .principle-card p:last-child {
        margin-bottom: 0;
    }
    
    .image-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .image-container:hover {
        transform: translateY(-3px);
    }
    
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    .grey-section {
        background: #f8f9fa;
        padding: 3rem 0;
    }
    
    .uniform-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border-left: 4px solid #a3cd42;
        height: 100%;
    }
    
    .uniform-card h4 {
        color: #333;
        font-size: 1.35rem;
        margin-bottom: 1.5rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .uniform-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem;
    }
    
    .uniform-list li {
        background: #f8f9fa;
        margin-bottom: 0.75rem;
        padding: 1rem 1.25rem;
        border-radius: 8px;
        border-left: 3px solid #1E7AB9;
        font-size: 1rem;
        color: #333;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    
    .uniform-list li:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }
    
    .uniform-list li::before {
        content: "✓";
        color: #a3cd42;
        font-weight: bold;
        margin-right: 0.75rem;
        font-size: 1.1rem;
    }
    
    .policy-link {
        text-align: center;
        margin-top: 1.5rem;
    }
    
    .policy-btn {
        background: #1E7AB9;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .policy-btn:hover {
        background: #155a8a;
        transform: translateY(-2px);
        color: white;
    }
    
    .purchasing-card {
        background: linear-gradient(135deg, #1E7AB9, #2a8fd4);
        color: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .purchasing-card h4 {
        color: white;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .purchasing-card p {
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 1rem;
        opacity: 0.95;
    }
    
    .purchase-btn {
        background: #a3cd42;
        color: #333;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        display: inline-block;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
    }
    
    .purchase-btn:hover {
        background: #8fb332;
        transform: translateY(-2px);
        color: #333;
    }
    
    @media screen and (max-width: 768px) {
        .principle-card,
        .uniform-card,
        .purchasing-card {
            margin-bottom: 1.5rem;
        }
        
        .image-container {
            margin-bottom: 1.5rem;
        }
    }
</style>


<!-- PRINCIPLE SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <div class="principle-card">
                    <h3>The Principle of Uniform</h3>
                    <p>Students should take pride in their uniform, care in their appearance, and look smart at all times.</p>
                    <p>School is a place of work and preparation for working life. The school uniform and appearance rules support good behaviour and discipline across the school.</p>
                    <p>We wish to encourage some choice, however we do avoid extremes or competition in fashion.</p>
                </div>
            </div>
            <div class="cell medium-5">
                <div class="image-container">
                    <img src="/images/uniform/uniform-01.jpg" alt="Students in Park Community School uniform">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- REQUIREMENTS SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-5 medium-order-1 small-order-2">
                <div class="image-container">
                    <img src="/images/uniform/uniform-02.jpg" alt="Happy students in uniform">
                </div>
            </div>
            <div class="cell medium-7 medium-order-2 small-order-1">
                <div class="uniform-card">
                    <h4>Required Uniform Items</h4>
                    <ul class="uniform-list">
                        <li>Park black blazer (compulsory)</li>
                        <li>White shirt with collar capable of taking a tie</li>
                        <li>School tie and House pin</li>
                        <li>Black formal trousers or black box-pleat skirt</li>
                        <li>Plain black outdoor shoes with sensible heels</li>
                    </ul>
                    <div class="policy-link">
                        <a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="policy-btn">View Uniform Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PURCHASING SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <div class="purchasing-card">
                    <h4>Purchase Your Uniform</h4>
                    <p>Park Community School partners with Skoolkit to bring all of our uniform to one place and reduce costs.</p>
                    <p>Visit their website where you can purchase all of your uniform requirements and even collect in-store.</p>
                    <a href="https://www.skoolkit.co.uk/" target="_blank" class="purchase-btn">Shop Uniform Now</a>
                </div>
            </div>
            <div class="cell medium-5">
                <div class="image-container">
                    <img src="/images/uniform/uniform-03.jpg" alt="Uniform suitable for all year round">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>