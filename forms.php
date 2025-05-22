<!doctype html>
<html class="no-js" lang="en" >
    <head>
        
        <title>Park Community School | Forms</title>
        <?php include("includes/head.html") ?>
        <style>
            .category-buttons-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1rem;
                margin-bottom: 2rem;
            }
            
            .category-dropdown {
                position: relative;
            }
            
            .category-btn {
                background: linear-gradient(135deg, #3498db, #2980b9);
                color: white;
                border: none;
                border-radius: 8px;
                padding: 1.5rem;
                cursor: pointer;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: space-between;
                font-size: 1rem;
                font-weight: 500;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                width: 100%;
            }
            
            .category-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                background: linear-gradient(135deg, #2980b9, #3498db);
            }
            
            .category-btn.active {
                background: linear-gradient(135deg, #27ae60, #2ecc71);
            }
            
            .category-btn.active .category-arrow {
                transform: rotate(180deg);
            }
            
            .category-icon {
                font-size: 1.5rem;
                margin-right: 0.5rem;
            }
            
            .category-title {
                flex-grow: 1;
                text-align: left;
            }
            
            .category-arrow {
                transition: transform 0.3s ease;
                font-size: 0.8rem;
            }
            
            .dropdown-content {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 1000;
                margin-top: 0.5rem;
                border: 1px solid #e9ecef;
                animation: slideDown 0.3s ease-out;
            }
            
            .dropdown-content.show {
                display: block;
            }
            
            @keyframes slideDown {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .dropdown-content a {
                display: block;
                padding: 1rem;
                color: #2c3e50;
                text-decoration: none;
                border-bottom: 1px solid #f8f9fa;
                transition: all 0.3s ease;
                font-weight: 500;
            }
            
            .dropdown-content a:last-child {
                border-bottom: none;
                border-radius: 0 0 8px 8px;
            }
            
            .dropdown-content a:first-child {
                border-radius: 8px 8px 0 0;
            }
            
            .dropdown-content a:hover {
                background: #f8f9fa;
                color: #3498db;
                padding-left: 1.5rem;
            }
            
            .dropdown-info {
                padding: 1rem;
                background: #fff3cd;
                color: #856404;
                border-bottom: 1px solid #f8f9fa;
                border-radius: 8px 8px 0 0;
            }
            
            .dropdown-info p {
                margin: 0;
                font-size: 0.9rem;
            }
            
            .search-box input {
                width: 100%;
                padding: 0.8rem;
                border: 2px solid #e9ecef;
                border-radius: 4px;
                font-size: 1rem;
            }
            
            .search-box input:focus {
                border-color: #3498db;
                outline: none;
            }
            
            @media screen and (max-width: 768px) {
                .category-buttons-grid {
                    grid-template-columns: 1fr;
                }
                
                .category-btn {
                    padding: 1rem;
                }
            }
        </style>
    </head>
<body class="page-parent">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>
<!-- CONTENT -->
<section>
    <div class="row">
        <div class="medium-12 columns">
            
            <div class="search-box" style="background: white; padding: 1rem; border-radius: 6px; margin-bottom: 2rem;">
                <input type="text" id="formSearch" placeholder="🔍 Search for a specific form..." onkeyup="searchForms()">
            </div>

            <!-- Category Buttons Grid with Dropdowns -->
            <div class="category-buttons-grid">
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('covid')" data-category="covid">
                        <span class="category-icon">🦠</span>
                        <span class="category-title">COVID-19</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="covid-dropdown">
                        <a href="assets/forms/covid-consent-form.pdf" target="_blank">COVID Consent Form 📄</a>
                        <a href="assets/forms/covid-guide.pdf" target="_blank">COVID Guide 📄</a>
                        <a href="https://forms.office.com/r/TFewraG_pe" target="_blank" class="external-link">Consent form for Student COVID Testing 🔗</a>
                    </div>
                </div>
                
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('consent')" data-category="consent">
                        <span class="category-icon">✅</span>
                        <span class="category-title">Consent Forms</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="consent-dropdown">
                        <a href="assets/forms/combined_consent.doc" target="_blank">Consent Form for Images, Biometrics, Internet Access and School Trips 📄</a>
                        <a href="assets/forms/consent_withdraw.pdf" target="_blank">Consent Withdraw Form 📄</a>
                        <a href="assets/admissions/pcs_parental_combined_consent_booklet.pdf" target="_blank">Parental Combined Consent Booklet 📄</a>
                    </div>
                </div>
                
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('visits')" data-category="visits">
                        <span class="category-icon">🚌</span>
                        <span class="category-title">Educational Visits</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="visits-dropdown">
                        <a href="assets/forms/consent_form_guests.doc" target="_blank">Educational Visit Information and Consent Form - Guests 📄</a>
                        <a href="assets/forms/consent_form_students.doc" target="_blank">Educational Visit Information and Consent Form - Students 📄</a>
                    </div>
                </div>
                
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('applications')" data-category="applications">
                        <span class="category-icon">📝</span>
                        <span class="category-title">Applications</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="applications-dropdown">
                        <a href="https://www.hants.gov.uk/educationandlearning/freeschoolmeals/juniorsecondary" target="_blank" class="external-link">Free School Meals Application Form 🔗</a>
                        <a href="assets/forms/out-round-application-inc-guidance.doc" target="_blank">Application form for admission to a Hampshire school outside the main admission round 📄</a>
                    </div>
                </div>
                
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('medical')" data-category="medical">
                        <span class="category-icon">🏥</span>
                        <span class="category-title">Medical Forms</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="medical-dropdown">
                        <a href="assets/forms/medical_consent_form.doc" target="_blank">Medical Form 📄</a>
                    </div>
                </div>
                
                <div class="category-dropdown">
                    <button class="category-btn" onclick="toggleDropdown('absence')" data-category="absence">
                        <span class="category-icon">📅</span>
                        <span class="category-title">Student Absence</span>
                        <span class="category-arrow">▼</span>
                    </button>
                    <div class="dropdown-content" id="absence-dropdown">
                        <div class="dropdown-info">
                            <p><strong>📋 How to Request Absence:</strong> Download and complete the form below. Please bring the completed form to your meeting with school staff.</p>
                        </div>
                        <a href="assets/forms/application_form_to_request_absence.docx" target="_blank">Application Form to Request Absence 📄</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
function toggleDropdown(categoryId) {
    const dropdown = document.getElementById(categoryId + '-dropdown');
    const button = document.querySelector(`[data-category="${categoryId}"]`);
    const isVisible = dropdown.classList.contains('show');
    
    // Close all other dropdowns
    document.querySelectorAll('.dropdown-content').forEach(d => d.classList.remove('show'));
    document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
    
    // Toggle the clicked dropdown
    if (!isVisible) {
        dropdown.classList.add('show');
        button.classList.add('active');
    }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    if (!event.target.closest('.category-dropdown')) {
        document.querySelectorAll('.dropdown-content').forEach(d => d.classList.remove('show'));
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
    }
});

function searchForms() {
    const searchTerm = document.getElementById('formSearch').value.toLowerCase();
    const dropdowns = document.querySelectorAll('.category-dropdown');
    
    if (searchTerm === '') {
        // Close all dropdowns when search is empty
        document.querySelectorAll('.dropdown-content').forEach(d => d.classList.remove('show'));
        document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
        dropdowns.forEach(dropdown => dropdown.style.display = 'block');
        return;
    }
    
    // Show/hide dropdowns based on search results
    dropdowns.forEach(dropdown => {
        const links = dropdown.querySelectorAll('.dropdown-content a');
        let hasMatch = false;
        
        links.forEach(link => {
            const linkText = link.textContent.toLowerCase();
            if (linkText.includes(searchTerm)) {
                hasMatch = true;
                link.style.backgroundColor = '#fff3cd';
            } else {
                link.style.backgroundColor = '';
            }
        });
        
        if (hasMatch) {
            dropdown.style.display = 'block';
            const dropdownContent = dropdown.querySelector('.dropdown-content');
            const button = dropdown.querySelector('.category-btn');
            dropdownContent.classList.add('show');
            button.classList.add('active');
        } else {
            dropdown.style.display = 'none';
        }
    });
}
</script>
    
<!-- FOOTER -->
<?php include("includes/footer.html") ?>
        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
    </body>
</html>