<?php
$pageTitle = 'Park Community School | Parent Advice';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #1E7AB9;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0;
    }
    
    .content-section {
        padding: 1rem 0 4rem;
    }
    
    .content-section h3 {
        color: #1E7AB9;
        margin-bottom: 2rem;
    }
    
    .flyers-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .flyer-item {
        text-align: center;
    }
    
    .flyer-link {
        display: block;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease;
    }
    
    .flyer-link:hover {
        color: #1E7AB9;
    }
    
    .flyer-link img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .flyer-link:hover img {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        border-color: #1E7AB9;
    }
    
    .flyer-link p {
        margin-top: 0.75rem;
        font-weight: 500;
        font-size: 0.95rem;
    }
    
    .back-to-top {
        text-align: center;
        margin-top: 3rem;
    }
    
    .back-to-top a {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: #1E7AB9;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .back-to-top a:hover {
        background: #165d8c;
        transform: translateY(-2px);
        color: white;
    }
    
    @media (max-width: 768px) {
        .flyers-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
    }
    
    @media (max-width: 480px) {
        .flyers-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Parent Advice</h1>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h3>Parent Advice Flyers</h3>

                <ul class="flyers-grid">
                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-surgery.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-surgery.jpg" alt="Parent Surgery flyer">
                            <p>Parent Surgery</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/drop-in.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/drop-in.jpg" alt="Parent Drop In flyer">
                            <p>Parent Drop In</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-1.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-1.jpg" alt="Parent Advice Flyer 1">
                            <p>Parent Advice Flyer 1</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-2.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-2.jpg" alt="Parent Advice Flyer 2">
                            <p>Parent Advice Flyer 2</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-3.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-3.jpg" alt="Parent Advice Flyer 3">
                            <p>Parent Advice Flyer 3</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-4.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-4.jpg" alt="Parent Advice Flyer 4">
                            <p>Parent Advice Flyer 4</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-5.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-5.jpg" alt="Parent Advice Flyer 5">
                            <p>Parent Advice Flyer 5</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-6.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-6.jpg" alt="Parent Advice Flyer 6">
                            <p>Parent Advice Flyer 6</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-7.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-7.jpg" alt="Parent Advice Flyer 7">
                            <p>Parent Advice Flyer 7</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-8.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-8.jpg" alt="Parent Advice Flyer 8">
                            <p>Parent Advice Flyer 8</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-9.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-9.jpg" alt="Parent Advice Flyer 9">
                            <p>Parent Advice Flyer 9</p>
                        </a>
                    </li>

                    <li class="flyer-item">
                        <a href="assets/parent-advice/parent-advice-10.jpg" target="_blank" class="flyer-link">
                            <img src="assets/parent-advice/parent-advice-10.jpg" alt="Parent Advice Flyer 10">
                            <p>Parent Advice Flyer 10</p>
                        </a>
                    </li>
                </ul>

                <div class="back-to-top">
                    <a href="#top">↑ Back to Top</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>