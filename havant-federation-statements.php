<?php
$pageTitle = 'Park Community School | Havant Federation Statements';
include('partials/header.php');
?>


<style>
    /* Modern CSS Variables */
    :root {
        --primary-green: #a3cd41;
        --primary-orange: #f08a24;
        --dark-bg: #333333;
        --light-gray: #f8f9fa;
        --text-dark: #2d3748;
        --text-light: #718096;
        --white: #ffffff;
        --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        --shadow-medium: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --shadow-heavy: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        --border-radius: 12px;
        --transition: all 0.3s ease;
    }

    /* Page Title Section */
    .page-title-section {
        background: linear-gradient(135deg, var(--light-gray), #e2e8f0);
        padding: 3rem 0 2rem;
        border-bottom: 4px solid var(--primary-green);
        position: relative;
        overflow: hidden;
    }

    .page-title-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(163, 205, 65, 0.05) 25%, transparent 25%), 
                    linear-gradient(-45deg, rgba(163, 205, 65, 0.05) 25%, transparent 25%), 
                    linear-gradient(45deg, transparent 75%, rgba(163, 205, 65, 0.05) 75%), 
                    linear-gradient(-45deg, transparent 75%, rgba(163, 205, 65, 0.05) 75%);
        background-size: 30px 30px;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        text-align: center;
        position: relative;
        z-index: 2;
    }

    .page-subtitle {
        font-size: 1.1rem;
        color: var(--text-light);
        text-align: center;
        margin: 0;
        position: relative;
        z-index: 2;
    }

    /* Enhanced Content Section */
    .content-section {
        padding: 4rem 0;
        background: white;
    }

    .content-wrapper {
        max-width: 800px;
        margin: 0 auto;
    }

    /* Modern Document Cards */
    .documents-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .document-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 2rem;
        box-shadow: var(--shadow-light);
        border: 2px solid transparent;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .document-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-green), var(--primary-orange));
    }

    .document-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-heavy);
        border-color: var(--primary-green);
    }

    .document-link {
        display: flex;
        align-items: center;
        gap: 1rem;
        text-decoration: none;
        color: var(--text-dark);
        font-weight: 600;
        font-size: 1.1rem;
        transition: var(--transition);
    }

    .document-link:hover {
        color: var(--primary-green);
        text-decoration: none;
    }

    .document-icon {
        flex-shrink: 0;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--primary-green), #68d391);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        transition: var(--transition);
    }

    .document-card:hover .document-icon {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, var(--primary-orange), #fb923c);
    }

    .document-text {
        flex: 1;
    }

    .document-title {
        margin: 0;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-dark);
        transition: var(--transition);
    }

    .document-card:hover .document-title {
        color: var(--primary-green);
    }

    .document-meta {
        font-size: 0.9rem;
        color: var(--text-light);
        margin-top: 0.25rem;
        margin-bottom: 0;
    }

    .download-indicator {
        flex-shrink: 0;
        color: var(--text-light);
        font-size: 1.2rem;
        transition: var(--transition);
    }

    .document-card:hover .download-indicator {
        color: var(--primary-green);
        transform: translateX(5px);
    }

    /* Document type indicators */
    .doc-mobile { background: linear-gradient(135deg, #667eea, #764ba2); }
    .doc-conflict { background: linear-gradient(135deg, #f093fb, #f5576c); }
    .doc-standards { background: linear-gradient(135deg, #4facfe, #00f2fe); }
    .doc-vaping { background: linear-gradient(135deg, #43e97b, #38f9d7); }
    .doc-letter { background: linear-gradient(135deg, #fa709a, #fee140); }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-title-section {
            padding: 2rem 0 1.5rem;
        }

        .page-title {
            font-size: 2rem;
        }

        .content-section {
            padding: 2rem 0;
        }

        .document-card {
            padding: 1.5rem;
        }

        .document-link {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .document-text {
            text-align: center;
        }
    }

    /* Focus States for Accessibility */
    .document-link:focus {
        outline: 3px solid var(--primary-green);
        outline-offset: 2px;
    }

    /* Loading Animation */
    .document-card {
        opacity: 0;
        animation: fadeInUp 0.6s ease forwards;
    }

    .document-card:nth-child(1) { animation-delay: 0.1s; }
    .document-card:nth-child(2) { animation-delay: 0.2s; }
    .document-card:nth-child(3) { animation-delay: 0.3s; }
    .document-card:nth-child(4) { animation-delay: 0.4s; }
    .document-card:nth-child(5) { animation-delay: 0.5s; }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="content-wrapper">
            
            <div class="documents-grid">
                
                <div class="document-card">
                    <a href="/assets/havant-federation-statements/Parent Letter re Federation Joint Statements Oct 2025.pdf" 
                       target="_blank" 
                       class="document-link">
                        <div class="document-icon doc-letter">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="document-text">
                            <h3 class="document-title">Parent Letter re Federation Joint Statements</h3>
                            <p class="document-meta">October 2025 • PDF Document</p>
                        </div>
                        <div class="download-indicator">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>

                <div class="document-card">
                    <a href="/assets/havant-federation-statements/Joint Statement Mobile Phones Oct 2025.pdf" 
                       target="_blank" 
                       class="document-link">
                        <div class="document-icon doc-mobile">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="document-text">
                            <h3 class="document-title">Joint Statement Mobile Phones</h3>
                            <p class="document-meta">October 2025 • Policy Document</p>
                        </div>
                        <div class="download-indicator">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>

                <div class="document-card">
                    <a href="/assets/havant-federation-statements/Joint Statement Relational Conflict and Bullying Oct 2025.pdf" 
                       target="_blank" 
                       class="document-link">
                        <div class="document-icon doc-conflict">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="document-text">
                            <h3 class="document-title">Joint Statement Relational Conflict and Bullying</h3>
                            <p class="document-meta">October 2025 • Guidance Document</p>
                        </div>
                        <div class="download-indicator">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>

                <div class="document-card">
                    <a href="/assets/havant-federation-statements/Joint Statement Standards and Attendance Oct 2025.pdf" 
                       target="_blank" 
                       class="document-link">
                        <div class="document-icon doc-standards">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="document-text">
                            <h3 class="document-title">Joint Statement Standards and Attendance</h3>
                            <p class="document-meta">October 2025 • Policy Document</p>
                        </div>
                        <div class="download-indicator">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>

                <div class="document-card">
                    <a href="/assets/havant-federation-statements/Joint Statement Vaping Smoking and banned substances Oct 2025.pdf" 
                       target="_blank" 
                       class="document-link">
                        <div class="document-icon doc-vaping">
                            <i class="fas fa-lungs"></i>
                        </div>
                        <div class="document-text">
                            <h3 class="document-title">Joint Statement Vaping and Smoking</h3>
                            <p class="document-meta">2025 • Health Policy Document</p>
                        </div>
                        <div class="download-indicator">
                            <i class="fas fa-download"></i>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const documentCards = document.querySelectorAll('.document-card');
    
    documentCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});
</script>

<?php include('partials/footer.php'); ?>