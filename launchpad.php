<?php
$pageTitle = 'Park Community School | Launchpad';
include('partials/header.php');
?>

<style>
    
    
    .content-section {
        padding: 2rem 0 4rem;
    }
    
    .document-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .document-list li {
        margin-bottom: 1rem;
    }
    
    .document-card {
        display: flex;
        align-items: center;
        gap: 1rem;
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-left: 4px solid #a3cd42;
        text-decoration: none;
        color: #333;
        transition: all 0.3s ease;
    }
    
    .document-card:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        color: #333;
    }
    
    .document-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #a3cd42, #8fb332);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.25rem;
        flex-shrink: 0;
    }
    
    .document-info {
        flex: 1;
    }
    
    .document-title {
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 0.25rem;
    }
    
    .document-meta {
        color: #666;
        font-size: 0.9rem;
    }
    
    .document-arrow {
        color: #a3cd42;
        font-size: 1.25rem;
        transition: transform 0.3s ease;
    }
    
    .document-card:hover .document-arrow {
        transform: translateX(5px);
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <ul class="document-list">
                    <li>
                        <a href="/assets/launchpad/PressReleaseFINAL23Dec2024.pdf" target="_blank" class="document-card">
                            <div class="document-icon">
                                📄
                            </div>
                            <div class="document-info">
                                <div class="document-title">Press Release</div>
                                <div class="document-meta">Monday 23rd December 2024 • PDF Document</div>
                            </div>
                            <div class="document-arrow">→</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>