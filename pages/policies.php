<?php
$pageTitle = 'Park Community School | Policies';
include('../partials/header.php');
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
    
    .policies-list {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .policies-list ul {
        list-style-type: disc !important;
        margin: 0;
        padding-left: 2rem;
        columns: 2;
        column-gap: 2rem;
    }
    
    .policies-list li {
        display: list-item !important;
        list-style-type: disc !important;
        color: #333;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e5e7eb;
        break-inside: avoid;
    }
    
    .policies-list li:last-child {
        border-bottom: none;
    }
    
    .policies-list li.hidden {
        display: none !important;
    }
    
    .policy-link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .policy-link:hover {
        color: #a3cd42;
        text-decoration: underline;
    }
    
    .info-section {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        border: 1px solid #e5e7eb;
    }
    
    .info-section h2 {
        color: #a3cd42;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }
    
    .info-section a {
        color: #a3cd42;
        font-weight: 600;
    }
    
    .info-section a:hover {
        color: #8fb332;
    }
    
    .no-results {
        padding: 1.5rem;
        text-align: center;
        color: #6b7280;
        display: none;
    }
    
    @media (max-width: 768px) {
        .policies-list ul {
            columns: 1;
        }
        
        .policies-list {
            padding: 1.5rem;
        }
        
        .policies-list li {
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
                    <p>Every maintained school must publish specific information on its website to comply with The School Information Regulations 2012. Below you'll find every piece of information we are required to provide as a Community School, organised for easy access.</p>
                </div>

                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" id="policySearch" class="search-input" placeholder="Search for a specific policy or information...">
                    <div id="searchResultsCount" class="search-results-count"></div>
                </div>

                <!-- Policies List -->
                <div class="policies-list">
                    <ul id="policiesList">
                        <li data-policy="accessibility"><a href="/assets/policies/Accessibility - December 2024.pdf" target="_blank" class="policy-link">Accessibility</a></li>
                        <li data-policy="administration of medicines"><a href="/assets/policies/administration-of-medicines.pdf" target="_blank" class="policy-link">Administration of Medicines</a></li>
                        <li data-policy="admission arrangements"><a href="/pages/admissions.php" class="policy-link">Admission Arrangements</a></li>
                        <li data-policy="admissions 2026-2027"><a href="/assets/policies/Admissions Policy 2026-2027.pdf" target="_blank" class="policy-link">Admissions 2026-2027</a></li>
                        <li data-policy="anti-bullying anti bullying"><a href="/assets/policies/Anti Bullying - December 2024.pdf" target="_blank" class="policy-link">Anti-Bullying</a></li>
                        <li data-policy="behaviour policy"><a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link">Behaviour Policy</a></li>
                        <li data-policy="careers education guidance ceiag"><a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link">Careers Education Guidance</a></li>
                        <li data-policy="cctv"><a href="/assets/policies/cctv.pdf" target="_blank" class="policy-link">CCTV</a></li>
                        <li data-policy="charging and remissions"><a href="/assets/policies/Charging and Remissions - January 2026.pdf" target="_blank" class="policy-link">Charging and Remissions</a></li>
                        <li data-policy="child protection safeguarding"><a href="/assets/policies/4.2 Child Protection - September 2025.pdf" target="_blank" class="policy-link">Child Protection</a></li>
                        <li data-policy="code of conduct"><a href="/assets/policies/code_of_conduct.pdf" target="_blank" class="policy-link">Code of Conduct</a></li>
                        <li data-policy="complaints policy procedure"><a href="/assets/policies/Complaints Policy and Procedure - December 2025.pdf" target="_blank" class="policy-link">Complaints Policy &amp; Procedure</a></li>
                        <li data-policy="confidentiality"><a href="/assets/policies/confidentiality.pdf" target="_blank" class="policy-link">Confidentiality</a></li>
                        <li data-policy="conflict of interests"><a href="/assets/policies/conflict-of-interests.pdf" target="_blank" class="policy-link">Conflict of Interests</a></li>
                        <li data-policy="curriculum"><a href="/pages/curriculum.php" class="policy-link">Curriculum</a></li>
                        <li data-policy="Careers Education Info"><a href="/assets/policies/Careers Education Information Advice and Guidance - January 2026.pdf" target="_blank" class="policy-link">Careers Education Info</a></li>
                        <li data-policy="data protection gdpr"><a href="/assets/policies/data-protection.pdf" target="_blank" class="policy-link">Data Protection</a></li>
                        <li data-policy="drugs and substance misuse"><a href="/assets/policies/drugs-substance-misuse.pdf" target="_blank" class="policy-link">Drugs and Substance Misuse</a></li>
                        <li data-policy="equality and diversity"><a href="/assets/policies/Equality and Diversity - December 2024.pdf" target="_blank" class="policy-link">Equality and Diversity</a></li>
                        <li data-policy="equality statement objectives"><a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link">Equality Statement</a></li>
                        <li data-policy="e-safety esafety online safety internet"><a href="/assets/policies/esafety.pdf" target="_blank" class="policy-link">E-Safety</a></li>
                        <li data-policy="ethos and values"><a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link">Ethos and Values</a></li>
                        <li data-policy="exams 2024 examinations"><a href="/assets/policies/exams-2024.pdf" target="_blank" class="policy-link">Exams 2024</a></li>
                        <li data-policy="Evacuation"><a href="/assets/policies/Evacuation - January 2026.pdf" target="_blank" class="policy-link">Evacuation</a></li>
                        <li data-policy="financial benchmarking"><a href="/pages/financial-benchmarking.php" class="policy-link">Financial Benchmarking</a></li>
                        <li data-policy="freedom of information foi"><a href="/assets/policies/freedom_of_information.pdf" target="_blank" class="policy-link">Freedom of Information</a></li>
                        <li data-policy="governors allowances"><a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link">Governors' Allowances</a></li>
                        <li data-policy="health and safety"><a href="/assets/policies/Health and Safety - January 2026.pdf" target="_blank" class="policy-link">Health and Safety</a></li>
                        <li data-policy="homework"><a href="/assets/policies/Homework - January 2026.pdf" target="_blank" class="policy-link">Homework</a></li>
                        <li data-policy="key stage 4 results ks4 gcse"><a href="/assets/statutory/ks4-results.pdf" target="_blank" class="policy-link">Key Stage 4 Results</a></li>
                        <li data-policy="leaver destinations"><a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link">Leaver Destinations</a></li>
                        <li data-policy="malpractice exams assessment"><a href="/assets/policies/malpractice-exams-assessment.pdf" target="_blank" class="policy-link">Malpractice (Exams Assessment)</a></li>
                        <li data-policy="medical conditions"><a href="/assets/policies/medical-conditions.pdf" target="_blank" class="policy-link">Medical Conditions</a></li>
                        <li data-policy="mental health emotional wellbeing"><a href="/assets/policies/mental-health-emotional-wellbeing-policy.pdf" target="_blank" class="policy-link">Mental Health and Emotional Wellbeing</a></li>
                        <li data-policy="mobile phones"><a href="/assets/policies/mobile-phones.pdf" target="_blank" class="policy-link">Mobile Phones</a></li>
                        <li data-policy="nqt induction ect"><a href="/assets/statutory/nqt_induction.pdf" target="_blank" class="policy-link">NQT Induction</a></li>
                        <li data-policy="performance tables results"><a href="https://www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link">Performance Tables</a></li>
                        <li data-policy="physical restraint use of reasonable force"><a href="/assets/policies/Physical Restraint  Use of Reasonable Force - January 2026.pdf" target="_blank" class="policy-link">Physical Restraint &amp; Use of Reasonable Force</a></li>
                        <li data-policy="prevention of radicalisation extremism prevent"><a href="/assets/policies/prevention-of-radicalisation-and-extremism.pdf" target="_blank" class="policy-link">Prevention of Radicalisation and Extremism</a></li>
                        <li data-policy="privacy notice for clients"><a href="/assets/policies/privacy_notice_for_clients.pdf" target="_blank" class="policy-link">Privacy Notice for Clients</a></li>
                        <li data-policy="privacy notice for job applicants"><a href="/assets/policies/privacy_notice_for_job_applicants.pdf" target="_blank" class="policy-link">Privacy Notice for Job Applicants</a></li>
                        <li data-policy="privacy notice for parents and students"><a href="/assets/policies/privacy_notice_for_parents_and_students.pdf" target="_blank" class="policy-link">Privacy Notice for Parents and Students</a></li>
                        <li data-policy="provider access"><a href="/assets/policies/Provider Access -January 2026.pdf" target="_blank" class="policy-link">Provider Access</a></li>
                        <li data-policy="pupil premium"><a href="/pages/pupil-premium.php" class="policy-link">Pupil Premium</a></li>
                        <li data-policy="religious education collective worship re"><a href="/assets/policies/Religious Education and Collective Worship - December 2025.pdf" target="_blank" class="policy-link">Religious Education and Collective Worship</a></li>
                        <li data-policy="safeguarding adults policy"><a href="/assets/policies/Safeguarding Adults  - November 2023.pdf" target="_blank" class="policy-link">Safeguarding Adults Policy</a></li>
                        <li data-policy="safeguarding policy procedure guidance child protection"><a href="/assets/policies/4.1 Safeguarding September 2025.pdf" target="_blank" class="policy-link">Safeguarding Policy, Procedure and Guidance</a></li>
                        <li data-policy="send information report special educational needs disabilities"><a href="/assets/policies/SEND Information Report - September 2025.pdf" target="_blank" class="policy-link">SEND Information Report</a></li>
                        <li data-policy="send policy special educational needs disabilities"><a href="/assets/policies/SEND - September 2025.pdf" target="_blank" class="policy-link">SEND Policy</a></li>
                        <li data-policy="sex education rse relationships"><a href="/assets/policies/Relationship  Sex Education - January 2026.pdf" target="_blank" class="policy-link">Sex Education</a></li>
                        <li data-policy="smsc spiritual moral social cultural"><a href="/pages/smsc.php" class="policy-link">SMSC (Spiritual, Moral, Social &amp; Cultural)</a></li>
                        <li data-policy="summer school"><a href="/pages/summer-school.php" class="policy-link">Summer School</a></li>
                        <li data-policy="uniform 2025-2026"><a href="/assets/policies/Uniform 2025-2026.pdf" target="_blank" class="policy-link">Uniform 2025-2026</a></li>
                        <li data-policy="volunteering"><a href="/assets/policies/volunteering.pdf" target="_blank" class="policy-link">Volunteering</a></li>
                        <li data-policy="work experience"><a href="/assets/policies/work-experience-march-2023.pdf" target="_blank" class="policy-link">Work Experience</a></li>
                        
                        
                    </ul>
                    <div id="noResults" class="no-results">No policies found matching your search.</div>
                </div>

                <!-- Policy Information -->
                <div class="info-section">
                    <h2>Policy Information</h2>
                    <p>All our policies are reviewed regularly by the Senior Leadership Team and approved by the Governing Body. If you have any questions about our policies or require an accessible format, please <a href="/pages/contact.php">contact us</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('policySearch');
    const policiesList = document.getElementById('policiesList');
    const policyItems = policiesList.querySelectorAll('li');
    const noResults = document.getElementById('noResults');
    const searchResultsCount = document.getElementById('searchResultsCount');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        let visibleCount = 0;

        policyItems.forEach(function(item) {
            const policyName = item.querySelector('.policy-link').textContent.toLowerCase();
            const policyData = item.getAttribute('data-policy').toLowerCase();
            
            if (policyName.includes(searchTerm) || policyData.includes(searchTerm)) {
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
            searchResultsCount.textContent = visibleCount + ' of ' + policyItems.length + ' policies found';
        } else {
            searchResultsCount.textContent = '';
        }
    });
});
</script>

<?php include('../partials/footer.php'); ?>