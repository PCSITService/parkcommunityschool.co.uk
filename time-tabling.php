<?php
$pageTitle = 'Park Community School | Calendar & School Day';
include('partials/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .page-header {
        background-color: #a3cd42;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0.25rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
        opacity: 0.9;
    }
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }
    
    .resource-card {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        border-left: 4px solid #a3cd42;
    }
    
    .resource-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    .resource-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .resource-link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex: 1;
    }
    
    .resource-link:hover {
        color: #a3cd42;
    }
    
    .resource-icon {
        font-size: 1.75rem;
    }
    
    .resource-title {
        display: flex;
        flex-direction: column;
    }
    
    .resource-title strong {
        font-size: 1.05rem;
    }
    
    .resource-title span {
        font-size: 0.9rem;
        color: #666;
        font-weight: normal;
    }
    
    .download-button {
        background-color: #a3cd42;
        color: white;
        padding: 0.65rem 1.25rem;
        border-radius: 30px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .download-button:hover {
        background-color: #8fb332;
        color: white;
        transform: translateY(-2px);
    }
    
    .img-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .img-container:hover img {
        transform: scale(1.03);
    }
    
    .info-note {
        background: linear-gradient(135deg, #f0f9e8, #fff);
        border-radius: 8px;
        padding: 1.25rem;
        margin-top: 2rem;
        border-left: 4px solid #a3cd42;
    }
    
    .info-note p {
        margin: 0;
        font-size: 0.95rem;
        color: #555;
    }
    
    @media (max-width: 768px) {
        .resource-content {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .download-button {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Calendar &amp; School Day</h1>
                <p>Important dates and daily schedule information</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>Access the latest school calendar and daily schedule information. These resources contain the most up-to-date timetables and relevant academic information for the current school year.</p>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-calendar.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">📅</span>
                            <div class="resource-title">
                                <strong>School Calendar</strong>
                                <span>Important Dates 2024–2025</span>
                            </div>
                        </a>
                        <a href="/assets/timetabling/school-calendar.pdf" download="School-Calendar-2024-2025.pdf" class="download-button" aria-label="Download School Calendar PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-day.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">⏰</span>
                            <div class="resource-title">
                                <strong>The School Day</strong>
                                <span>Shape of the Day 2024–2025</span>
                            </div>
                        </a>
                        <a href="/assets/timetabling/school-day.pdf" download="School-Day-2024-2025.pdf" class="download-button" aria-label="Download School Day PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
                
                <div class="info-note">
                    <p><strong>Note:</strong> These documents are updated at the start of each academic year. Please ensure you have the latest version for accurate information.</p>
                </div>
            </div>
            
            <div class="cell medium-6 show-for-medium">
                <div class="img-container">
                    <img src="images/timetabling/timetabling-01.jpg" alt="Park Community School students in the classroom">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>