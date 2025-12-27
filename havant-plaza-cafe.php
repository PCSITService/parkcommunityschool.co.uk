<?php
$pageTitle = 'Park Community School | The Havant Plaza Café';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #EE3A80;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0;
    }
    
    .content-section {
        padding: 2rem 0 4rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.25rem;
        font-size: 1.05rem;
    }
    
    .content-section img {
        border-radius: 12px;
        width: 100%;
        height: auto;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    }
    
    .cafe-features {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        margin-top: 2rem;
    }
    
    .cafe-features h4 {
        color: #EE3A80;
        margin-bottom: 1rem;
    }
    
    .supplier-list {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        list-style: none;
        margin: 1rem 0 0;
        padding: 0;
    }
    
    .supplier-list li {
        background: #EE3A80;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }
    
    @media (max-width: 639px) {
        .content-section img {
            margin-top: 2rem;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>The Havant Plaza Café</h1>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>We are pleased to work in partnership with Havant Borough Council to re-open The Plaza Café in December 2022. There is synergy between us to provide a great experience for years to come.</p>
                <p>We offer a range of hot and cold drinks, fresh cakes made by chefs at Park Community School, a selection of hot and cold lunches, and afternoon treats.</p>
                <p>We use a range of local suppliers including:</p>
                <ul class="supplier-list">
                    <li>Sunday Coffee Roasters</li>
                    <li>Northney Farm</li>
                    <li>Tuppeny Barn Organic Produce</li>
                </ul>
                <p style="margin-top: 1.5rem;">The menu will adapt as we learn customers' requirements and as the seasons change.</p>
            </div>
            <div class="cell medium-6">
                <img src="images/havant-plaza-cafe/park-at-the-plaza.png" alt="Park at the Plaza">
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>