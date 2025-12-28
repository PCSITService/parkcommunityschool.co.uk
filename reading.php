<?php
$pageTitle = 'Park Community School | Reading';
include('partials/header.php');
?>

<style>
    
    
    .breadcrumbs {
        background-color: #f5f5f5;
        padding: 0.75rem 1rem;
        margin-bottom: 2rem;
        list-style: none;
        border-bottom: 3px solid #a3cd42;
    }
    
    .breadcrumbs li {
        display: inline-block;
        margin-right: 0.5rem;
    }
    
    .breadcrumbs li::after {
        content: '/';
        margin-left: 0.5rem;
        color: #999;
    }
    
    .breadcrumbs li:last-child::after {
        content: '';
    }
    
    .breadcrumbs li a {
        color: #a3cd42;
        font-weight: 500;
    }
    
    .breadcrumbs li.current a {
        color: #666;
    }
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h3 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    .content-section h3::after {
        content: '';
        display: block;
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #a3cd42, #F58220);
        margin: 1rem auto 0;
        border-radius: 2px;
    }
    
    .content-section h4 {
        font-size: 1.35rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    .content-section p {
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 1.25rem;
        color: #333;
    }
    
    .intro-card {
        background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
        border-left: 5px solid #F58220;
        border-radius: 0 12px 12px 0;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    
    .intro-card h3 {
        margin-top: 0;
    }
    
    .reading-quote {
        font-style: italic;
        font-size: 1.15rem;
        color: #a3cd42;
        text-align: center;
        margin: 1.5rem 0 0;
        padding: 1.25rem;
        border-left: 4px solid #F58220;
        background: rgba(163, 205, 65, 0.08);
        border-radius: 0 12px 12px 0;
    }
    
    .content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
        align-items: start;
    }
    
    .content-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        border-left: 5px solid #a3cd42;
        transition: all 0.3s ease;
    }
    
    .content-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }
    
    .content-card h3 {
        text-align: left;
        font-size: 1.5rem;
        margin-top: 0;
    }
    
    .content-card h3::after {
        margin: 1rem 0 0;
    }
    
    .image-section {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        position: relative;
    }
    
    .image-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #a3cd42, #F58220);
        border-radius: 12px 12px 0 0;
    }
    
    .image-section h4 {
        margin-top: 0;
    }
    
    .image-section h4 i {
        color: #a3cd42;
        margin-right: 0.5rem;
    }
    
    .image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .image-section img:hover {
        transform: scale(1.03);
        box-shadow: 0 20px 25px rgba(0,0,0,0.15);
    }
    
    .button-section {
        text-align: center;
        margin: 2rem 0;
        padding: 2.5rem;
        background: linear-gradient(135deg, #f8f9fa, #e2e8f0);
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    
    .button-section h4 {
        margin-bottom: 1.5rem;
    }
    
    .button-section h4 i {
        color: #a3cd42;
        margin-right: 0.5rem;
    }
    
    .resource-button {
        background: linear-gradient(135deg, #a3cd42, #68d391);
        border: none;
        color: white;
        padding: 1rem 2rem;
        border-radius: 30px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        margin: 0.5rem;
        font-size: 1rem;
    }
    
    .resource-button:hover {
        background: linear-gradient(135deg, #8fb332, #a3cd42);
        transform: translateY(-3px);
        box-shadow: 0 10px 15px rgba(0,0,0,0.15);
        color: white;
    }
    
    .resource-button i {
        font-size: 1.1rem;
    }
    
    @media (max-width: 768px) {
        .content-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
        
        .content-section h3 {
            font-size: 1.5rem;
        }
        
        .content-section h4 {
            font-size: 1.2rem;
        }
        
        .content-card,
        .intro-card {
            padding: 1.5rem;
        }
        
        .image-section {
            padding: 1.5rem;
        }
        
        .button-section {
            padding: 1.5rem;
        }
        
        .resource-button {
            width: 100%;
            justify-content: center;
            margin: 0.5rem 0;
        }
    }
</style>



<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Reading</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                
                <div class="intro-card">
                    <h3>Reading at Park</h3>
                    <p>Reading at Park is given status – we know it develops not only literacy, but also cultural capital, a sense of identity, empathy and compassion for others. Reading is placed at the heart of our daily work.</p>
                    
                    <div class="reading-quote">
                        "Above all, the books are chosen because they are great books which support a love of reading."
                    </div>
                </div>

                <div class="content-grid">
                    <div class="content-card">
                        <p>Park's Reading Canon is a set of literature all students should read during their time at Park. Some of the texts will be read in tutor time together, others in English lessons, while most are promoted for independent reading.</p>
                        
                        <p>The canon is revised regularly and incorporates a range of authors and genres designed to focus on breadth, the theme of identity, relationships and our place in society. The choices celebrate diversity, challenge discrimination and promote thinking.</p>
                    </div>

                    <div class="image-section">
                        <h4><i class="fas fa-book-open"></i>Reading Canon</h4>
                        <img src="images/reading/canon.jpg" alt="Reading Canon - A collection of diverse literature for Park students">
                    </div>
                </div>

                <div class="content-grid">
                    <div class="content-card">
                        <h3>Reading Within the Curriculum</h3>
                        <p>Within the curriculum, texts are chosen carefully to ensure they are of good quality and provide sufficient challenge for students. Teachers draw upon a range of strategies to support students to read at an appropriately challenging level.</p>
                        
                        <p>Through exposure to challenging texts and appropriate strategies to support access to these, teaching works to extend vocabulary, improve fluency and deepen understanding of subjects.</p>
                    </div>

                    <div class="image-section">
                        <h4><i class="fas fa-route"></i>Reading Process</h4>
                        <img src="images/reading/reading-process.jpg" alt="Reading Process - Our structured approach to developing reading skills">
                    </div>
                </div>

                <div class="button-section">
                    <h4><i class="fas fa-download"></i>Reading Resources</h4>
                    <a href="assets/reading/book-week.pdf" target="_blank" class="resource-button">
                        <i class="fas fa-book"></i> Park Book Week Resources
                    </a>
                    <a href="assets/reading/read-together.pdf" target="_blank" class="resource-button">
                        <i class="fas fa-users"></i> Reading Together Guide
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>