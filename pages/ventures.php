<?php
$pageTitle = 'Park Community School | Park Ventures';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 1rem 0 3rem;
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
    
    .intro-text {
        font-size: 1.1rem;
    }
    
    .objectives-box {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem 2rem;
        margin: 1.5rem 0;
        border-left: 4px solid #EE3A80;
    }
    
    .objectives-box h4 {
        color: #EE3A80;
        margin-top: 0;
        margin-bottom: 1rem;
        font-size: 1.15rem;
    }
    
    .objectives-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .objectives-list li {
        padding: 0.75rem 0;
        border-bottom: 1px solid #e0e0e0;
        line-height: 1.7;
        display: flex;
        align-items: flex-start;
    }
    
    .objectives-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .objectives-list li::before {
        content: "●";
        color: #EE3A80;
        font-weight: bold;
        margin-right: 0.75rem;
        flex-shrink: 0;
    }
    
    .charity-info {
        background: linear-gradient(135deg, #fce4ec, #fff);
        border-radius: 8px;
        padding: 1.25rem;
        margin-top: 1.5rem;
        text-align: center;
    }
    
    .charity-info p {
        margin: 0.35rem 0;
        color: #555;
        font-size: 0.95rem;
    }
    
    .charity-number {
        font-weight: 600;
        color: #EE3A80;
    }
    
    .images-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .images-grid img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .images-grid img:hover {
        transform: translateY(-3px);
    }
    
    @media (max-width: 768px) {
        .images-grid {
            margin-top: 2rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-6">
                <p class="intro-text">Park Community Ventures is a charity formed by members of the community and friends of the school. It was established in March 2010.</p>
                
                <div class="objectives-box">
                    <h4>The Charity's Objectives</h4>
                    <ul class="objectives-list">
                        <li>To improve the levels of educational attainment, resilience and autonomy of the school's students and community</li>
                        <li>To prepare young people for work through practical skills, enterprise and workplace training</li>
                        <li>To provide an assistance fund to support Leigh Park children, individuals and families</li>
                        <li>Help address holiday hunger through programmes such as Munch Meals, Munch Community Food Pantry and Connect4Families/Youth holiday programmes</li>
                        <li>Increase cultural capital through our YES (Young Explorers Squad) programme and providing opportunities for worldwide travel</li>
                    </ul>
                </div>
                
                <div class="charity-info">
                    <p>Park Community Ventures registration number: <span class="charity-number">1134562</span></p>
                    <p>Registered February 2010</p>
                    <p>For more information, please ask at <a href="/pages/contact.php">the school reception</a>.</p>
                </div>
            </div>
            <div class="cell medium-6 show-for-medium">
                <div class="images-grid">
                    <img src="/images/ventures/ventures-02.png" alt="Park Community Ventures fundraising for education">
                    <img src="/images/ventures/ventures-01.png" alt="Park Community Ventures supporting the community">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>