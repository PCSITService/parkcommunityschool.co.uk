<?php
$pageTitle = 'Page Not Found';
include('partials/header.php');
?>

<style>
    .error-page {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 3rem 1rem;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }
    
    .error-content {
        max-width: 600px;
    }
    
    .error-code {
        font-size: 8rem;
        font-weight: 700;
        color: #a3cd42;
        line-height: 1;
        margin-bottom: 1rem;
        text-shadow: 4px 4px 0 #333;
    }
    
    .error-title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1rem;
    }
    
    .error-message {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 2rem;
        line-height: 1.6;
    }
    
    .error-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .error-btn {
        display: inline-flex;
        align-items: center;
        padding: 0.875rem 1.75rem;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .error-btn-primary {
        background: #a3cd42;
        color: #fff;
    }
    
    .error-btn-primary:hover {
        background: #8fb332;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(163, 205, 66, 0.4);
    }
    
    .error-btn-secondary {
        background: #333;
        color: #fff;
    }
    
    .error-btn-secondary:hover {
        background: #444;
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    .error-btn i {
        margin-right: 0.5rem;
    }
    
    .helpful-links {
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid #ddd;
    }
    
    .helpful-links h3 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 1rem;
    }
    
    .helpful-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem 1.5rem;
    }
    
    .helpful-links a {
        color: #1E7AB9;
        text-decoration: none;
        font-weight: 500;
    }
    
    .helpful-links a:hover {
        color: #a3cd42;
        text-decoration: underline;
    }
    
    @media (max-width: 768px) {
        .error-code {
            font-size: 5rem;
        }
        
        .error-title {
            font-size: 1.5rem;
        }
        
        .error-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .error-btn {
            width: 100%;
            max-width: 250px;
            justify-content: center;
        }
    }
</style>

<section class="error-page">
    <div class="error-content">
        <div class="error-code">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-message">
            Sorry, we couldn't find the page you're looking for. 
            It may have been moved, deleted, or perhaps the URL was typed incorrectly.
        </p>
        
        <div class="error-buttons">
            <a href="/" class="error-btn error-btn-primary">
                <i class="fas fa-home"></i> Go to Homepage
            </a>
            <a href="/contact.php" class="error-btn error-btn-secondary">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
        
        <div class="helpful-links">
            <h3>Helpful Links</h3>
            <ul>
                <li><a href="/about.php">About Us</a></li>
                <li><a href="/admissions.php">Admissions</a></li>
                <li><a href="/curriculum.php">Curriculum</a></li>
                <li><a href="/safeguarding.php">Safeguarding</a></li>
                <li><a href="/contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>
