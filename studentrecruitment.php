<?php
$pageTitle = 'Park Community School | Student Recruitment';
include('partials/header.php');
?>


<style>
    :root {
        --primary-color: #a3cd42;
        --secondary-color: #F58220;
        --text-dark: #333;
        --text-light: #666;
        --bg-light: #f8f9fa;
        --shadow: 0 4px 20px rgba(0,0,0,0.1);
        --gradient: linear-gradient(135deg, #a3cd42, #8fb332);
    }

    /* Header */



    /* Intro Section */
    .intro-section {
        background: var(--bg-light);
        padding: 3rem 0;
    }

    .intro-content {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .intro-text {
        font-size: 1.15rem;
        color: var(--text-light);
        line-height: 1.8;
    }

    /* Section Titles */
    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 1rem;
    }

    .section-subtitle {
        text-align: center;
        color: var(--text-light);
        margin-bottom: 2.5rem;
        font-size: 1.05rem;
    }

    /* Process Section */
    .process-section {
        background: white;
        padding: 4rem 0;
    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .process-step {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        text-align: center;
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
        position: relative;
        transition: all 0.3s ease;
    }

    .process-step::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient);
        border-radius: 12px 12px 0 0;
    }

    .process-step:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(163, 205, 66, 0.2);
    }

    .step-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        color: white;
        font-size: 1.5rem;
    }

    .step-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
    }

    .step-description {
        color: var(--text-light);
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* Age Info */
    .age-info {
        background: linear-gradient(135deg, #fef7e6, #fff3cd);
        border-left: 4px solid var(--secondary-color);
        padding: 1.5rem 2rem;
        border-radius: 0 10px 10px 0;
        margin: 2rem 0;
    }

    .age-info-title {
        font-size: 1.15rem;
        font-weight: 600;
        color: var(--secondary-color);
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .age-info p {
        margin: 0;
        line-height: 1.7;
    }

    /* Jobs Section */
    .jobs-section {
        background: var(--bg-light);
        padding: 4rem 0;
    }

    .jobs-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        align-items: start;
    }

    .job-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
    }

    .job-card h4 {
        font-size: 1.35rem;
        color: var(--primary-color);
        margin-top: 0;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .job-card p {
        color: var(--text-light);
        margin-bottom: 1rem;
        line-height: 1.7;
    }

    .job-highlight {
        background: linear-gradient(135deg, #f0f9e8, #e8f5e0);
        border-radius: 8px;
        padding: 1.25rem;
        margin: 1rem 0;
    }

    .job-highlight p {
        margin: 0;
    }

    /* Doc Card */
    .doc-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
    }

    .doc-card h4 {
        font-size: 1.35rem;
        color: var(--secondary-color);
        margin-top: 0;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .doc-card p {
        color: var(--text-light);
        line-height: 1.7;
    }

    .download-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: var(--secondary-color);
        color: white;
        padding: 0.85rem 1.75rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .download-link:hover {
        background: #d96f1a;
        transform: translateY(-2px);
        color: white;
    }

    .file-note {
        margin-top: 1.5rem;
        font-size: 0.9rem;
        color: var(--text-light);
    }

    .file-note i {
        margin-right: 0.35rem;
    }

    /* Final Steps */
    .final-steps {
        background: white;
        padding: 4rem 0;
    }

    .steps-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
    }

    .step-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
        text-align: center;
    }

    .step-number {
        width: 45px;
        height: 45px;
        background: var(--primary-color);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-weight: 700;
        font-size: 1.25rem;
    }

    .step-card h3 {
        color: var(--text-dark);
        font-size: 1.15rem;
        margin-bottom: 0.75rem;
    }

    .step-card p {
        color: var(--text-light);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
    }

    /* Contact Section */
    .contact-section {
        background: var(--gradient);
        color: white;
        padding: 3rem 0;
        text-align: center;
    }

    .contact-content h3 {
        font-size: 1.75rem;
        margin-bottom: 0.75rem;
        font-weight: 600;
        color: white;
    }

    .contact-content p {
        margin-bottom: 1.5rem;
        opacity: 0.9;
        color: white;
    }

    .contact-email {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.15);
        padding: 1rem 2rem;
        border-radius: 30px;
        color: white;
        text-decoration: none;
        font-weight: 600;
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }

    .contact-email:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-2px);
        color: white;
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .process-grid,
        .steps-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .jobs-grid,
        .process-grid,
        .steps-grid {
            grid-template-columns: 1fr;
        }

</style>


<!-- INTRO SECTION -->
<section class="intro-section">
    <div class="grid-container">
        <div class="intro-content">
            <p class="intro-text">At Park we recognise how difficult it is for young people to gain valuable work experience, so we provide meaningful opportunities for students to develop professional skills and earn while they learn.</p>
        </div>
    </div>
</section>

<!-- RECRUITMENT PROCESS -->
<section class="process-section">
    <div class="grid-container">
        <h2 class="section-title">Recruitment Process</h2>
        <p class="section-subtitle">Students will go through a comprehensive recruitment process to ensure they're ready for the workplace</p>
        
        <div class="process-grid">
            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                </div>
                <h3 class="step-title">Application</h3>
                <p class="step-description">Complete an application form and supply references to demonstrate your suitability for the role</p>
            </div>

            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-users" aria-hidden="true"></i>
                </div>
                <h3 class="step-title">Group Task</h3>
                <p class="step-description">Participate in a collaborative group activity to showcase your teamwork and problem-solving skills</p>
            </div>

            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-comments" aria-hidden="true"></i>
                </div>
                <h3 class="step-title">Interview</h3>
                <p class="step-description">Attend a professional interview to discuss your motivations and demonstrate your communication skills</p>
            </div>
        </div>

        <div class="age-info">
            <h3 class="age-info-title">
                <i class="fas fa-info-circle" aria-hidden="true"></i>
                Age Requirements
            </h3>
            <p>The law states that children must be 13 years of age to be employed. Therefore, Year 7/8 students can only volunteer and will receive reward points. Their work experience will be recognised in any application for paid positions in Year 9.</p>
        </div>
    </div>
</section>

<!-- JOBS SECTION -->
<section class="jobs-section">
    <div class="grid-container">
        <div class="jobs-grid">
            <div class="job-card">
                <h4>Available Positions</h4>
                <p>Please visit the recruitment board outside KD3 to see if a position is available.</p>
                
                <div class="job-highlight">
                    <p><strong>What you'll do:</strong> Student workers will assist with general site upkeep, support with school and community events, and provide excellent customer service.</p>
                </div>
                
                <p>Specific roles may be available depending on school needs. If you have particular interests or skills, please speak with community staff to discuss potential opportunities.</p>
            </div>

            <div class="doc-card">
                <h4>Documentation</h4>
                <p>Download the required forms to begin your application process:</p>
                
                <a href="assets/studentrecruitment/documentation/application-form.docx" target="_blank" class="download-link">
                    <i class="fas fa-download" aria-hidden="true"></i>
                    Application Form
                </a>
                
                <p class="file-note">
                    <i class="fas fa-file-word" aria-hidden="true"></i>
                    Downloadable Word Document
                </p>
            </div>
        </div>
    </div>
</section>

<!-- NEXT STEPS -->
<section class="final-steps">
    <div class="grid-container">
        <h2 class="section-title">After Successful Application</h2>
        
        <div class="steps-grid">
            <div class="step-card">
                <div class="step-number">1</div>
                <h3>Work Permit</h3>
                <p>Complete a work permit form that a parent or carer must sign. Hampshire County Council will approve this to ensure you work the appropriate hours for your age.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <h3>Training &amp; Equipment</h3>
                <p>Receive necessary training and equipment to ensure you can perform your role safely and effectively.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <h3>Bank Account</h3>
                <p>Set up a bank account to receive payment for your work (required for paid positions in Year 9 and above).</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="grid-container">
        <div class="contact-content">
            <h3>Ready to Apply?</h3>
            <p>Fill in the application form and return completed applications to our Student Recruitment team</p>
            <a href="mailto:studentrecruitment@pcs.hants.sch.uk" class="contact-email">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                studentrecruitment@pcs.hants.sch.uk
            </a>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>