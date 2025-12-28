<?php
$pageTitle = 'Park Community School | Trips';
include('partials/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section a {
        color: #1E7AB9;
    }
    
    .content-section a:hover {
        color: #155a8a;
    }
    
    .intro-section h2 {
        color: #1E7AB9;
        margin-bottom: 1rem;
    }
    
    /* Gallery Grid */
    .trip-gallery {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }
    
    .trip-gallery img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .trip-gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    
    .payment-button {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background-color: #28a745;
        color: white;
        padding: 1rem 2rem;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .payment-button:hover {
        background-color: #218838;
        color: white;
        transform: translateY(-2px);
    }
    
    /* Trips Section */
    .trips-section {
        background-color: #1E7AB9;
        color: white;
        padding: 3rem 0;
    }
    
    .trips-section h2 {
        text-align: center;
        color: white;
        margin-bottom: 2.5rem;
        font-size: 2rem;
        font-weight: 400;
    }
    
    .trip-item {
        margin-bottom: 2.5rem;
        padding-bottom: 2.5rem;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    
    .trip-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    
    .trip-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        align-items: start;
    }
    
    .trip-info h3 {
        color: white;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 400;
    }
    
    .trip-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }
    
    .trip-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 0.75rem 1.25rem;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 500;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .trip-btn:hover {
        background-color: #218838;
    }
    
    .trip-details h4 {
        color: rgba(255,255,255,0.8);
        font-size: 0.9rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .trip-details p {
        margin: 0.35rem 0;
        color: rgba(255,255,255,0.9);
        line-height: 1.8;
    }
    
    .trip-details strong {
        color: white;
    }
    
    /* Modal */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        z-index: 1000;
    }
    
    .modal-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        border-radius: 12px;
        max-width: 600px;
        width: 90%;
        max-height: 90vh;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        display: flex;
        flex-direction: column;
    }
    
    .modal-header {
        background: linear-gradient(135deg, #1E7AB9, #2a8fd4);
        color: white;
        padding: 1.5rem 2rem;
        position: relative;
    }
    
    .modal-header h2 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 500;
        color: white;
    }
    
    .modal-close {
        position: absolute;
        top: 1rem;
        right: 1.25rem;
        background: none;
        border: none;
        font-size: 1.75rem;
        cursor: pointer;
        color: white;
        opacity: 0.8;
        transition: opacity 0.3s;
    }
    
    .modal-close:hover {
        opacity: 1;
    }
    
    .modal-body {
        padding: 2rem;
        overflow-y: auto;
        flex-grow: 1;
    }
    
    .modal-footer {
        background-color: #f8f9fa;
        padding: 1.5rem 2rem;
        text-align: center;
        border-top: 1px solid #e9ecef;
    }
    
    .modal-footer-btn {
        background-color: #1E7AB9;
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        font-size: 1rem;
        transition: background-color 0.3s;
    }
    
    .modal-footer-btn:hover {
        background-color: #155a8a;
    }
    
    .cost-badge {
        display: inline-block;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        padding: 1rem 2rem;
        border-radius: 8px;
        border-left: 4px solid #1E7AB9;
        margin-bottom: 1.5rem;
    }
    
    .cost-badge h3 {
        margin: 0;
        font-size: 1.5rem;
        color: #1E7AB9;
    }
    
    .payment-info-box {
        background: linear-gradient(135deg, #e8f5e9, #f1f8f2);
        padding: 1.5rem;
        border-radius: 8px;
        border-left: 4px solid #28a745;
        text-align: center;
        margin-bottom: 1.5rem;
    }
    
    .payment-info-box .amount {
        font-size: 1.5rem;
        font-weight: bold;
        color: #2d5a2d;
        margin: 0.5rem 0;
    }
    
    .payment-info-box .due-date {
        color: #666;
    }
    
    .info-note {
        background-color: #f8f9fa;
        padding: 1.25rem;
        border-radius: 8px;
        border: 1px solid #e9ecef;
    }
    
    .info-note h5 {
        margin: 0 0 0.5rem;
        color: #1E7AB9;
    }
    
    .info-note p {
        margin: 0;
        color: #666;
        line-height: 1.6;
    }
    
    .pending-box {
        background: linear-gradient(135deg, #fff3cd, #fef8e1);
        padding: 1.5rem;
        border-radius: 8px;
        border-left: 4px solid #ffc107;
        text-align: center;
    }
    
    .pending-box strong {
        color: #856404;
        font-size: 1.1rem;
    }
    
    .pending-box p {
        color: #666;
        margin-top: 0.5rem;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .trip-gallery {
            grid-template-columns: repeat(3, 1fr);
        }
        
        .trip-content {
            grid-template-columns: 1fr;
        }
        
        .trip-buttons {
            margin-bottom: 1.5rem;
        }
    }
    
    @media (max-width: 480px) {
        .trip-gallery {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>


<!-- INTRO SECTION -->
<section class="content-section intro-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-7">
                <h2>Our Trips Are Amazing!</h2>
                <p>All trips at Park are carefully planned with student safety as our top priority. We offer diverse learning experiences beyond the classroom.</p>
                <p>Our trips are designed to enhance learning, develop life skills, and create lasting memories for all students.</p>
                <p>Payment is easy – pay online at <a href="https://www.scopay.com/pcs" target="_blank">SCO Online Payments</a> or at reception with card, cash or cheque.</p>
                
                <a href="https://www.scopay.com/pcs" target="_blank" class="payment-button">
                    <i class="fas fa-credit-card"></i>
                    Make a Payment
                </a>
            </div>
            <div class="cell medium-5">
                <div class="trip-gallery">
                    <img src="images/trips/kewgardens.jpg" alt="School trip to Kew Gardens">
                    <img src="images/trips/tanzania.jpg" alt="Educational trip to Tanzania">
                    <img src="images/trips/disney1.jpg" alt="Students at Disney">
                    <img src="images/trips/farm1.jpg" alt="Learning at the farm">
                    <img src="images/trips/winchester1.jpg" alt="Trip to Winchester">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SCHOOL TRIPS SECTION -->
<section class="trips-section">
    <div class="grid-container">
        <h2>Current Trips</h2>
        
        <!-- Trip 1 - Lion King -->
        <div class="trip-item">
            <div class="trip-content">
                <div class="trip-info">
                    <h3>Lion King the Musical</h3>
                    <div class="trip-buttons">
                        <button class="trip-btn" onclick="showModal('lionking-payment')">Payment Plan</button>
                        <button class="trip-btn" onclick="showModal('lionking-letters')">Letters</button>
                    </div>
                </div>
                <div class="trip-details">
                    <h4>Details</h4>
                    <p><strong>Date:</strong> Wednesday 10th December 2025</p>
                    <p><strong>Lead:</strong> Chelsea Marr</p>
                    <p><strong>Total Cost:</strong> £43</p>
                    <p><strong>Year Group:</strong> Year 7 &amp; 8</p>
                </div>
            </div>
        </div>
        
        <!-- Trip 2 - Hercules -->
        <div class="trip-item">
            <div class="trip-content">
                <div class="trip-info">
                    <h3>Hercules the Musical</h3>
                    <div class="trip-buttons">
                        <button class="trip-btn" onclick="showModal('hercules-payment')">Payment Plan</button>
                        <button class="trip-btn" onclick="showModal('hercules-letters')">Letters</button>
                    </div>
                </div>
                <div class="trip-details">
                    <h4>Details</h4>
                    <p><strong>Date:</strong> Thursday 8th January 2026</p>
                    <p><strong>Lead:</strong> Jodie Brown</p>
                    <p><strong>Total Cost:</strong> £59</p>
                    <p><strong>Year Group:</strong> Years 7–11</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<div id="lionking-payment" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Lion King the Musical – Payment Plan</h2>
            <button class="modal-close" onclick="closeModal('lionking-payment')">&times;</button>
        </div>
        <div class="modal-body">
            <div style="text-align: center;">
                <div class="cost-badge">
                    <h3>Total Cost: £43</h3>
                </div>
            </div>
            
            <h4 style="color: #1E7AB9; text-align: center; margin-bottom: 1.5rem;">📅 Payment Schedule</h4>
            
            <div class="payment-info-box">
                <strong style="color: #2d5a2d; font-size: 1.1rem;">💰 Full Payment</strong>
                <div class="amount">£43</div>
                <div class="due-date">Due by: 3rd December 2025</div>
            </div>
            
            <div class="info-note">
                <h5>💡 Payment Information</h5>
                <p>Payment can be made online through our secure payment portal or at the school reception.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-footer-btn" onclick="closeModal('lionking-payment')">Close</button>
        </div>
    </div>
</div>

<div id="lionking-letters" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Lion King the Musical – Trip Letters</h2>
            <button class="modal-close" onclick="closeModal('lionking-letters')">&times;</button>
        </div>
        <div class="modal-body">
            <div style="text-align: center; margin-bottom: 1.5rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">📋</div>
                <h3 style="color: #1E7AB9; margin: 0;">Available Letters</h3>
            </div>
            
            <div class="pending-box">
                <strong>📄 Trip letters will be available soon</strong>
                <p>Letters with full trip details will be distributed to students and uploaded here.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-footer-btn" onclick="closeModal('lionking-letters')">Close</button>
        </div>
    </div>
</div>

<div id="hercules-payment" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Hercules the Musical – Payment Plan</h2>
            <button class="modal-close" onclick="closeModal('hercules-payment')">&times;</button>
        </div>
        <div class="modal-body">
            <div style="text-align: center;">
                <div class="cost-badge">
                    <h3>Total Cost: £59</h3>
                </div>
            </div>
            
            <h4 style="color: #1E7AB9; text-align: center; margin-bottom: 1.5rem;">📅 Payment Schedule</h4>
            
            <div class="pending-box">
                <strong>📋 Payment plan will be available soon</strong>
                <p>We're finalising the details for this theatre trip. Full payment information including instalment options will be provided soon.</p>
            </div>
            
            <div class="info-note" style="margin-top: 1.5rem;">
                <h5>📧 Stay Updated</h5>
                <p>More information including pricing and payment schedules will be sent to parents via email and posted on the school website.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-footer-btn" onclick="closeModal('hercules-payment')">Close</button>
        </div>
    </div>
</div>

<div id="hercules-letters" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <h2>Hercules the Musical – Trip Letters</h2>
            <button class="modal-close" onclick="closeModal('hercules-letters')">&times;</button>
        </div>
        <div class="modal-body">
            <div style="text-align: center; margin-bottom: 1.5rem;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">📋</div>
                <h3 style="color: #1E7AB9; margin: 0;">Available Letters</h3>
            </div>
            
            <div class="pending-box">
                <strong>📄 Trip letters will be available soon</strong>
                <p>Letters with full trip details will be distributed to students and uploaded here.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-footer-btn" onclick="closeModal('hercules-letters')">Close</button>
        </div>
    </div>
</div>

<script>
function showModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
    document.body.style.overflow = '';
}

// Close modal when clicking outside
document.querySelectorAll('.modal-overlay').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.style.display = 'none';
        });
        document.body.style.overflow = '';
    }
});
</script>

<?php include('partials/footer.php'); ?>