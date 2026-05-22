<?php
$pageTitle = 'Park Community School | Uniform';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 3rem 0;
    }
    
    .principle-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border-left: 4px solid #1E7AB9;
        height: 100%;
    }
    
    .principle-card h3 {
        color: #1E7AB9;
        font-size: 1.5rem;
        margin-bottom: 1.25rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .principle-card p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 1rem;
    }
    
    .principle-card p:last-child {
        margin-bottom: 0;
    }
    
    .image-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .image-container:hover {
        transform: translateY(-3px);
    }
    
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    
    .grey-section {
        background: #f8f9fa;
        padding: 3rem 0;
    }
    
    .uniform-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        border-left: 4px solid #a3cd42;
        height: 100%;
    }
    
    .uniform-card h4 {
        color: #333;
        font-size: 1.35rem;
        margin-bottom: 1.5rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .uniform-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem;
    }
    
    .uniform-list li {
        background: #f8f9fa;
        margin-bottom: 0.75rem;
        padding: 1rem 1.25rem;
        border-radius: 8px;
        border-left: 3px solid #1E7AB9;
        font-size: 1rem;
        color: #333;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    
    .uniform-list li:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }
    
    .uniform-list li::before {
        content: "✓";
        color: #a3cd42;
        font-weight: bold;
        margin-right: 0.75rem;
        font-size: 1.1rem;
    }
    
    .policy-link {
        text-align: center;
        margin-top: 1.5rem;
    }
    
    .policy-btn {
        background: #1E7AB9;
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1rem;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .policy-btn:hover {
        background: #155a8a;
        transform: translateY(-2px);
        color: white;
    }
    
    .purchasing-card {
        background: linear-gradient(135deg, #1E7AB9, #2a8fd4);
        color: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .purchasing-card h4 {
        color: white;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        margin-top: 0;
        font-weight: 600;
    }
    
    .purchasing-card p {
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 1rem;
        opacity: 0.95;
    }
    
    .purchase-btn {
        background: #a3cd42;
        color: #333;
        padding: 1rem 2rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        display: inline-block;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
    }
    
    .purchase-btn:hover {
        background: #8fb332;
        transform: translateY(-2px);
        color: #333;
    }

    /* Uniform links section */
    .uniform-links-section {
        padding: 4rem 0;
        background: #f8f9fa;
    }

    .uniform-links-grid {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
        justify-content: center;
    }

    .uniform-link-card {
        background: white;
        border-radius: 12px;
        padding: 2rem 2.5rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        text-decoration: none;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 1rem;
        flex: 1 1 220px;
        max-width: 280px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-top: 4px solid #1E7AB9;
    }

    .uniform-link-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.13);
        text-decoration: none;
    }

    .uniform-link-card.green-top {
        border-top-color: #a3cd42;
    }

    .uniform-link-card .link-icon {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: #eaf4fb;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .uniform-link-card.green-top .link-icon {
        background: #f3fadf;
    }

    .uniform-link-card .link-icon svg {
        width: 26px;
        height: 26px;
    }

    .uniform-link-card .link-label {
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: #1E7AB9;
        margin: 0;
    }

    .uniform-link-card.green-top .link-label {
        color: #6a9a1a;
    }

    .uniform-link-card .link-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: #222;
        margin: 0;
        line-height: 1.35;
    }

    .uniform-link-card .link-cta {
        margin-top: 0.25rem;
        background: #1E7AB9;
        color: white;
        padding: 0.55rem 1.4rem;
        border-radius: 30px;
        font-size: 0.9rem;
        font-weight: 600;
        display: inline-block;
        transition: background 0.2s ease;
    }

    .uniform-link-card:hover .link-cta {
        background: #155a8a;
    }

    .uniform-link-card.green-top .link-cta {
        background: #a3cd42;
        color: #333;
    }

    .uniform-link-card.green-top:hover .link-cta {
        background: #8fb332;
    }

    @media screen and (max-width: 768px) {
        .principle-card,
        .uniform-card,
        .purchasing-card {
            margin-bottom: 1.5rem;
        }
        
        .image-container {
            margin-bottom: 1.5rem;
        }

        .uniform-link-card {
            max-width: 100%;
        }
    }
</style>


<section class="uniform-links-section">
    <div class="grid-container">
        <div class="uniform-links-grid">

            <!-- Policy Sept 2025 -->
            <a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="uniform-link-card">
                <div class="link-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#1E7AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <p class="link-label">Policy Document</p>
                <p class="link-title">Uniform Policy<br>September 2025</p>
                <span class="link-cta">View PDF</span>
            </a>

            <!-- Policy Sept 2026 -->
            <a href="/assets/policies/Uniform 2026-2027 .pdf" target="_blank" class="uniform-link-card">
                <div class="link-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#1E7AB9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10 9 9 9 8 9"/>
                    </svg>
                </div>
                <p class="link-label">Policy Document</p>
                <p class="link-title">Uniform Policy<br>September 2026</p>
                <span class="link-cta">View PDF</span>
            </a>

            <!-- Skoolkit -->
            <a href="https://www.skoolkit.co.uk/" target="_blank" class="uniform-link-card green-top">
                <div class="link-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#a3cd42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"/>
                        <circle cx="20" cy="21" r="1"/>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
                    </svg>
                </div>
                <p class="link-label">Purchase Uniform</p>
                <p class="link-title">Shop on<br>Skoolkit</p>
                <span class="link-cta">Visit Skoolkit</span>
            </a>

        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>