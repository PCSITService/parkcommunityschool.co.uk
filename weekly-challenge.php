<?php
$pageTitle = 'Park Community School | Weekly Challenge';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h3 {
        color: #1E7AB9;
        margin-bottom: 1.5rem;
        font-size: 1.5rem;
    }
    
    .archive-notice {
        background: linear-gradient(135deg, #e3f2fd, #fff);
        border-left: 4px solid #1E7AB9;
        padding: 1.25rem;
        border-radius: 0 8px 8px 0;
        margin-bottom: 2rem;
    }
    
    .archive-notice p {
        margin: 0;
        color: #555;
    }
    
    .challenges-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
    }
    
    .challenge-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        text-decoration: none;
        display: block;
    }
    
    .challenge-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    }
    
    .challenge-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-bottom: 3px solid #1E7AB9;
    }
    
    .challenge-card p {
        padding: 1rem;
        margin: 0;
        text-align: center;
        font-weight: 600;
        color: #333;
        font-size: 0.95rem;
    }
    
    .challenge-card:hover p {
        color: #1E7AB9;
    }
    
    @media (max-width: 1024px) {
        .challenges-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .challenges-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .challenge-card img {
            height: 150px;
        }
    }
    
    @media (max-width: 480px) {
        .challenges-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <div class="archive-notice">
                    <p><strong>Archive:</strong> These challenges were created during the school closure period in 2020. They remain available as additional learning resources for students and families.</p>
                </div>
                
                <h3>Weekly Challenges</h3>

                <div class="challenges-grid">
                    <a href="assets/challenge/pe_competition-2.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/pe_competition-2.jpg" alt="PE Competition challenge">
                        <p>PE Competition</p>
                    </a>

                    <a href="assets/challenge/art_comp.jpg" target="_blank" class="challenge-card">
                        <img src="images/challenge/art_comp.jpg" alt="Art Competition challenge">
                        <p>Art Competition</p>
                    </a>

                    <a href="assets/challenge/kindness_challenge.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/kindness-challenge.jpg" alt="Kindness Challenge">
                        <p>Kindness Challenge</p>
                    </a>

                    <a href="assets/challenge/history_project.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/history_project.jpg" alt="History Project challenge">
                        <p>History Project</p>
                    </a>

                    <a href="assets/challenge/art-31-03.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/art-31-03.jpg" alt="Art Challenge">
                        <p>Art Challenge</p>
                    </a>

                    <a href="assets/challenge/stem-31-03.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/stem-31-03.jpg" alt="STEM Challenge">
                        <p>STEM Challenge</p>
                    </a>

                    <a href="assets/challenge/geography-31-03.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/geography-31-03.jpg" alt="Geography Challenge">
                        <p>Geography Challenge</p>
                    </a>

                    <a href="assets/challenge/poetry-competition.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/poetry-comp.jpg" alt="Poetry Competition">
                        <p>Poetry Competition</p>
                    </a>

                    <a href="assets/challenge/pe-competition.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/pe-comp.jpg" alt="PE Competition">
                        <p>PE Competition</p>
                    </a>

                    <a href="assets/challenge/maths.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/maths.jpg" alt="Maths Challenge">
                        <p>Maths Challenge</p>
                    </a>

                    <a href="assets/challenge/spanish.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/spanish.jpg" alt="Spanish Challenge">
                        <p>Spanish Challenge</p>
                    </a>

                    <a href="assets/challenge/maths-puzzle.pdf" target="_blank" class="challenge-card">
                        <img src="images/challenge/maths-puzzle.jpg" alt="Maths Puzzle">
                        <p>Maths Puzzle</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>