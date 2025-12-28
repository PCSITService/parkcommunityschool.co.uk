<?php
$pageTitle = 'Park Community School | Statutory Information';
include('partials/header.php');
?>

<style>
    
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .intro-box {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        line-height: 1.8;
    }
    
    .intro-box p {
        margin: 0;
    }
    
    .policy-nav {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
    }
    
    .nav-button {
        flex: 1;
        padding: 1rem 1.5rem;
        background: #f3f4f6;
        color: #333;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid #e5e7eb;
        text-align: center;
    }
    
    .nav-button:hover {
        background: #e5e7eb;
        color: #333;
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
        transition: all 0.3s ease;
    }
    
    .search-input:focus {
        outline: none;
        border-color: #a3cd42;
        box-shadow: 0 0 0 3px rgba(163, 205, 66, 0.2);
    }
    
    .search-results-count {
        margin-top: 0.75rem;
        font-size: 0.9rem;
        color: #666;
    }
    
    .policies-list {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .policies-list ul {
        list-style: none;
        margin: 0;
        padding: 0;
        column-count: 2;
        column-gap: 2rem;
    }
    
    .policies-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e5e7eb;
        break-inside: avoid;
    }
    
    .policies-list li:last-child {
        border-bottom: none;
    }
    
    .policies-list li.hidden {
        display: none;
    }
    
    .policy-link {
        color: #a3cd42;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .policy-link:hover {
        color: #8fb332;
        text-decoration: underline;
    }
    
    .no-results {
        padding: 1.5rem;
        text-align: center;
        color: #666;
        display: none;
    }
    
    .info-box {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        border-left: 4px solid #a3cd42;
    }
    
    .info-box h3 {
        color: #333;
        margin-top: 0;
        margin-bottom: 1rem;
    }
    
    .info-box p {
        margin: 0;
        color: #555;
    }
    
    .info-box a {
        color: #a3cd42;
        font-weight: 600;
    }
    
    .info-box a:hover {
        color: #8fb332;
    }
    
    @media (max-width: 768px) {
        .policy-nav {
            flex-direction: column;
        }
        
        .policies-list ul {
            column-count: 1;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <!-- Introduction -->
                <div class="intro-box">
                    <p>Every maintained school must publish specific information on its website to comply with The School Information Regulations 2012. Below you'll find every piece of information we are required to provide as a Community School, organised for easy access.</p>
                </div>

                <!-- Policy Navigation -->
                <div class="policy-nav">
                    <a href="/policies.php" class="nav-button">Non-Statutory Policies</a>
                    <a href="/exams-policies.php" class="nav-button">Exams Policies</a>
                </div>

                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" id="policySearch" class="search-input" placeholder="Search for a specific policy or information...">
                    <div id="searchResultsCount" class="search-results-count"></div>
                </div>

                <!-- Policies List -->
                <div class="policies-list">
                    <ul id="policiesList">
                        <li data-policy="admission arrangements admissions"><a href="/admissions.php" class="policy-link">Admission Arrangements</a></li>
                        <li data-policy="behaviour policy conduct"><a href="/assets/policies/behaviour.pdf" target="_blank" class="policy-link">Behaviour Policy</a></li>
                        <li data-policy="careers education guidance ceiag"><a href="/assets/policies/ceiag.pdf" target="_blank" class="policy-link">Careers Education Guidance</a></li>
                        <li data-policy="charging and remissions fees payments"><a href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank" class="policy-link">Charging and Remissions</a></li>
                        <li data-policy="child protection safeguarding"><a href="/assets/policies/4.2 Child Protection - September 2025.pdf" target="_blank" class="policy-link">Child Protection</a></li>
                        <li data-policy="complaints procedure"><a href="/assets/policies/complaints.pdf" target="_blank" class="policy-link">Complaints Procedure</a></li>
                        <li data-policy="curriculum subjects"><a href="/curriculum.php" class="policy-link">Curriculum</a></li>
                        <li data-policy="ect induction nqt early career teacher"><a href="/assets/policies/ect-induction.pdf" target="_blank" class="policy-link">ECT Induction</a></li>
                        <li data-policy="equality statement objectives diversity"><a href="/assets/policies/Equality statement and objectives 2024-25.pdf" target="_blank" class="policy-link">Equality Statement</a></li>
                        <li data-policy="ethos and values"><a href="/assets/statutory/ethos-values.pdf" target="_blank" class="policy-link">Ethos and Values</a></li>
                        <li data-policy="financial benchmarking budget spending"><a href="/financial-benchmarking.php" class="policy-link">Financial Benchmarking</a></li>
                        <li data-policy="governors allowances"><a href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank" class="policy-link">Governors' Allowances</a></li>
                        <li data-policy="key stage 4 results ks4 gcse exam results"><a href="/assets/statutory/Website KS4 Results 2025 GCSEs.pdf" target="_blank" class="policy-link">Key Stage 4 Results</a></li>
                        <li data-policy="leaver destinations"><a href="/assets/statutory/leaver-destinations.pdf" target="_blank" class="policy-link">Leaver Destinations</a></li>
                        <li data-policy="ofsted reports inspection"><a href="/ofsted-reports.php" class="policy-link">Ofsted Reports</a></li>
                        <li data-policy="performance tables results"><a href="https://www.education.gov.uk/cgi-bin/schools/performance/school.pl?urn=116473" target="_blank" class="policy-link">Performance Tables</a></li>
                        <li data-policy="pupil premium disadvantaged funding"><a href="/pupil-premium.php" class="policy-link">Pupil Premium</a></li>
                        <li data-policy="safeguarding policy procedure guidance child protection"><a href="/assets/policies/4.1 Safeguarding September 2025.pdf" target="_blank" class="policy-link">Safeguarding Policy</a></li>
                        <li data-policy="send information report special educational needs disabilities"><a href="/assets/policies/SEND Information Report - September 2025.pdf" target="_blank" class="policy-link">SEND Information Report</a></li>
                        <li data-policy="send policy special educational needs disabilities"><a href="/assets/policies/SEND - September 2025.pdf" target="_blank" class="policy-link">SEND Policy</a></li>
                        <li data-policy="smsc spiritual moral social cultural"><a href="/smsc.php" class="policy-link">SMSC</a></li>
                        <li data-policy="summer school"><a href="/summer-school.php" class="policy-link">Summer School</a></li>
                        <li data-policy="suspension and permanent exclusion expelled"><a href="/assets/policies/suspension_and_permanent_exclusion.pdf" target="_blank" class="policy-link">Suspension and Permanent Exclusion</a></li>
                    </ul>
                    <div id="noResults" class="no-results">No policies found matching your search.</div>
                </div>

                <!-- Policy Information -->
                <div class="info-box">
                    <h3>Policy Information</h3>
                    <p>All our policies are reviewed regularly by the Senior Leadership Team and approved by the Governing Body. If you have any questions about our policies or require an accessible format, please <a href="/contact.php">contact us</a>.</p>
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

<?php include('partials/footer.php'); ?>