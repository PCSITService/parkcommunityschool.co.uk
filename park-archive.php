<?php
$pageTitle = 'Park Community School | Park Archive';
include('partials/header.php');
?>

<style>
    
    
    
    .breadcrumbs {
        background-color: #f5f5f5;
        padding: 0.75rem 1rem;
        margin-bottom: 2rem;
        list-style: none;
        border-radius: 0;
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
    }
    
    .breadcrumbs li.current a {
        color: #666;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h3 {
        color: #a3cd42;
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
    }
    
    .content-section > p {
        color: #666;
        margin-bottom: 2rem;
    }
    
    .archive-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 1.5rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .archive-item {
        text-align: center;
    }
    
    .archive-link {
        display: block;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease;
    }
    
    .archive-link:hover {
        color: #a3cd42;
    }
    
    .archive-link img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .archive-link:hover img {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        border-color: #a3cd42;
    }
    
    .archive-link p {
        margin-top: 0.5rem;
        font-weight: 500;
        font-size: 0.85rem;
    }
    
    .section-divider {
        border: none;
        border-top: 2px solid #e0e0e0;
        margin: 3rem 0;
    }
    
    @media (max-width: 1024px) {
        .archive-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .archive-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
    }
    
    @media (max-width: 480px) {
        .archive-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/news.php">News</a></li>
        <li role="menuitem" class="current"><a href="#">Park Archive</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h3>Park Post</h3>
                <p>Previous editions</p>

                <ul class="archive-grid">
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue23-jan2020.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue23-jan2020.jpg" alt="Park Post Issue 23 Front Cover">
                            <p>Issue 23 - 2020</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue22-jul2019.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue22-jul2019.jpg" alt="Park Post Issue 22 Front Cover">
                            <p>Issue 22 - 2019</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue21-apr2019.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue21-apr2019.jpg" alt="Park Post Issue 21 Front Cover">
                            <p>Issue 21 - 2019</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue20-dec2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue20-dec2018.jpg" alt="Park Post Issue 20 Front Cover">
                            <p>Issue 20 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue19-oct2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue19-oct2018.jpg" alt="Park Post Issue 19 Front Cover">
                            <p>Issue 19 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue18-july2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue18-july2018.jpg" alt="Park Post Issue 18 Front Cover">
                            <p>Issue 18 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue17-may2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue17-may2018.jpg" alt="Park Post Issue 17 Front Cover">
                            <p>Issue 17 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue16-apr2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue16-apr2018.jpg" alt="Park Post Issue 16 Front Cover">
                            <p>Issue 16 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue15-feb2018.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue15-feb2018.jpg" alt="Park Post Issue 15 Front Cover">
                            <p>Issue 15 - 2018</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue14-dec2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue14-dec2017.jpg" alt="Park Post Issue 14 Front Cover">
                            <p>Issue 14 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue13-oct2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue13-oct2017.jpg" alt="Park Post Issue 13 Front Cover">
                            <p>Issue 13 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue12-jul2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue12-jul2017.jpg" alt="Park Post Issue 12 Front Cover">
                            <p>Issue 12 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue11-jun2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue11-jun2017.jpg" alt="Park Post Issue 11 Front Cover">
                            <p>Issue 11 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue10-apr2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue10-apr2017.jpg" alt="Park Post Issue 10 Front Cover">
                            <p>Issue 10 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue09-feb2017.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue09-feb2017.jpg" alt="Park Post Issue 09 Front Cover">
                            <p>Issue 09 - 2017</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue08-dec2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue08-dec2016.jpg" alt="Park Post Issue 08 Front Cover">
                            <p>Issue 08 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue07-oct2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue07-oct2016.jpg" alt="Park Post Issue 07 Front Cover">
                            <p>Issue 07 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue06-jul2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue06-jul2016.jpg" alt="Park Post Issue 06 Front Cover">
                            <p>Issue 06 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue05-jun2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue05-jun2016.jpg" alt="Park Post Issue 05 Front Cover">
                            <p>Issue 05 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue04-may2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue04-may2016.jpg" alt="Park Post Issue 04 Front Cover">
                            <p>Issue 04 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue03-apr2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue03-apr2016.jpg" alt="Park Post Issue 03 Front Cover">
                            <p>Issue 03 - 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue02-dec2015.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue02-dec2015.jpg" alt="Park Post Issue 02 Front Cover">
                            <p>Issue 02 - 2015</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue01-oct2015.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue01-oct2015.jpg" alt="Park Post Issue 01 Front Cover">
                            <p>Issue 01 - 2015</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue19-2015.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue19-2015.jpg" alt="Park Post Issue 19 Front Cover">
                            <p>Issue 19 - 2015</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue18-2013.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue18-2013.jpg" alt="Park Post Issue 18 Front Cover">
                            <p>Issue 18 - 2013</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue17-2013.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue17-2013.jpg" alt="Park Post Issue 17 Front Cover">
                            <p>Issue 17 - 2013</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue16-2013.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue16-2013.jpg" alt="Park Post Issue 16 Front Cover">
                            <p>Issue 16 - 2013</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue15-2012.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue15-2012.jpg" alt="Park Post Issue 15 Front Cover">
                            <p>Issue 15 - 2012</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue14-2011.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue14-2011.jpg" alt="Park Post Issue 14 Front Cover">
                            <p>Issue 14 - 2011</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue13-2011.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue13-2011.jpg" alt="Park Post Issue 13 Front Cover">
                            <p>Issue 13 - 2011</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue12-2011.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue12-2011.jpg" alt="Park Post Issue 12 Front Cover">
                            <p>Issue 12 - 2011</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue11-2010.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue11-2010.jpg" alt="Park Post Issue 11 Front Cover">
                            <p>Issue 11 - 2010</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/parkpost/issue10-2010.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/parkpost/covers/issue10-2010.jpg" alt="Park Post Issue 10 Front Cover">
                            <p>Issue 10 - 2010</p>
                        </a>
                    </li>
                </ul>

                <hr class="section-divider">

                <h3>Primary Link</h3>
                <p>Previous editions</p>

                <ul class="archive-grid">
                    <li class="archive-item">
                        <a href="assets/news/primarylink/issue3-summer2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/primarylink/covers/issue3.jpg" alt="Primary Link Issue 3 Front Cover">
                            <p>Issue 03 - Summer 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/primarylink/issue2-spring2016.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/primarylink/covers/issue2.jpg" alt="Primary Link Issue 2 Front Cover">
                            <p>Issue 02 - Spring 2016</p>
                        </a>
                    </li>
                    <li class="archive-item">
                        <a href="assets/news/primarylink/issue1-autumn2015.pdf" target="_blank" class="archive-link">
                            <img src="assets/news/primarylink/covers/issue1.jpg" alt="Primary Link Issue 1 Front Cover">
                            <p>Issue 01 - Autumn 2015</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>