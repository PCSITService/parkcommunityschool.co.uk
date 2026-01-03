<?php
$pageTitle = 'Park Community School | Forms';
include('partials/header.php');
?>

<style>
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .intro-text {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        font-size: 1.05rem;
        line-height: 1.7;
    }
    
    .search-box {
        background: white;
        padding: 1.5rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .search-input {
        width: 100%;
        padding: 0.85rem 1rem;
        border: 2px solid #e5e7eb;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: #a3cd42;
        box-shadow: 0 0 0 3px rgba(163, 205, 66, 0.15);
    }
    
    .search-results-count {
        margin-top: 0.75rem;
        font-size: 0.9rem;
        color: #6b7280;
    }
    
    .forms-list {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .forms-list ul {
        list-style-type: disc !important;
        margin: 0;
        padding-left: 2rem;
        columns: 2;
        column-gap: 2rem;
    }
    
    .forms-list li {
        display: list-item !important;
        list-style-type: disc !important;
        color: #333;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e5e7eb;
        break-inside: avoid;
    }
    
    .forms-list li:last-child {
        border-bottom: none;
    }
    
    .forms-list li.hidden {
        display: none !important;
    }
    
    .form-link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .form-link:hover {
        color: #a3cd42;
        text-decoration: underline;
    }
    
    .no-results {
        padding: 1.5rem;
        text-align: center;
        color: #6b7280;
        display: none;
    }
    
    @media (max-width: 768px) {
        .forms-list ul {
            columns: 1;
        }
        
        .forms-list {
            padding: 1.5rem;
        }
        
        .forms-list li {
            font-size: 0.95rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <!-- Introduction -->
                <div class="intro-text">
                    <p>Below you'll find all the forms you may need during your time at Park Community School. Click on any form to download or open it.</p>
                </div>

                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" id="formSearch" class="search-input" placeholder="Search for a specific form...">
                    <div id="searchResultsCount" class="search-results-count"></div>
                </div>

                <!-- Forms List -->
                <div class="forms-list">
                    <ul id="formsList">
                        <li data-form="covid consent"><a href="assets/forms/covid-consent-form.pdf" target="_blank" class="form-link">COVID Consent Form</a></li>
                        <li data-form="covid guide"><a href="assets/forms/covid-guide.pdf" target="_blank" class="form-link">COVID Guide</a></li>
                        <li data-form="covid testing student"><a href="https://forms.office.com/r/TFewraG_pe" target="_blank" class="form-link">Consent form for Student COVID Testing</a></li>
                        <li data-form="consent images biometrics internet trips"><a href="assets/forms/combined_consent.doc" target="_blank" class="form-link">Consent Form for Images, Biometrics, Internet Access and School Trips</a></li>
                        <li data-form="consent withdraw"><a href="assets/forms/consent_withdraw.pdf" target="_blank" class="form-link">Consent Withdraw Form</a></li>
                        <li data-form="parental consent booklet"><a href="assets/admissions/pcs_parental_combined_consent_booklet.pdf" target="_blank" class="form-link">Parental Combined Consent Booklet</a></li>
                        <li data-form="educational visit guests"><a href="assets/forms/consent_form_guests.doc" target="_blank" class="form-link">Educational Visit Information and Consent Form - Guests</a></li>
                        <li data-form="educational visit students"><a href="assets/forms/consent_form_students.doc" target="_blank" class="form-link">Educational Visit Information and Consent Form - Students</a></li>
                        <li data-form="free school meals application"><a href="https://www.hants.gov.uk/educationandlearning/freeschoolmeals/juniorsecondary" target="_blank" class="form-link">Free School Meals Application Form</a></li>
                        <li data-form="admission application hampshire"><a href="assets/forms/out-round-application-inc-guidance.doc" target="_blank" class="form-link">Application form for admission to a Hampshire school outside the main admission round</a></li>
                        <li data-form="medical"><a href="assets/forms/medical_consent_form.doc" target="_blank" class="form-link">Medical Form</a></li>
                        <li data-form="absence request student"><a href="assets/forms/application_form_to_request_absence.docx" target="_blank" class="form-link">Application Form to Request Absence</a></li>
                    </ul>
                    <div id="noResults" class="no-results">No forms found matching your search.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('formSearch');
    const formsList = document.getElementById('formsList');
    const formItems = formsList.querySelectorAll('li');
    const noResults = document.getElementById('noResults');
    const searchResultsCount = document.getElementById('searchResultsCount');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        let visibleCount = 0;

        formItems.forEach(function(item) {
            const formName = item.querySelector('.form-link').textContent.toLowerCase();
            const formData = item.getAttribute('data-form').toLowerCase();
            
            if (formName.includes(searchTerm) || formData.includes(searchTerm)) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });

        if (visibleCount === 0 && searchTerm !== '') {
            noResults.style.display = 'block';
        } else {
            noResults.style.display = 'none';
        }

        if (searchTerm !== '') {
            searchResultsCount.textContent = visibleCount + ' of ' + formItems.length + ' forms found';
        } else {
            searchResultsCount.textContent = '';
        }
    });
});
</script>

<?php include('partials/footer.php'); ?>