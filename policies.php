<!doctype html>
<html class="no-js" lang="en" >
    <head>
        <title>Park Community School | Policies</title>
        <!-- Include FontAwesome (via CDN) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <?php include("includes/head.html") ?>
    </head>
<body class="page-school">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- CONTENT -->
<section>
    <div class="row">
        <br>
        <!-- Inline Style - Float None workaround for MS Edge issue. -->
        <div style="float:none;" class="medium-12 columns">
        <br>

<div class="section1">
  <style>
  .policies-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 30px 20px; /* Reduced horizontal gap to give more space for text */
    margin-top: 30px;
  }

  .policy-item {
    text-align: center;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    height: 100%;
    /* Set a maximum width to ensure consistent sizing */
    max-width: 100%;
    /* Add some padding to ensure content doesn't touch edges */
    padding: 0 5px;
  }

  .policy-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 10px;
    background-color: #e74c3c; /* PDF red color */
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    flex-shrink: 0; /* Prevent icon from shrinking */
  }

  /* FontAwesome PDF Icon */
  .policy-icon::before {
    content: "\f1c1"; /* FontAwesome's PDF icon */
    font-family: 'Font Awesome 5 Free';
    font-weight: 900; /* Ensure it uses the solid version */
    font-size: 36px;
    color: white; /* PDF icon color */
  }

  .policy-title {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #0072bb;
    text-decoration: none;
    display: block;
    /* Enhanced text wrapping */
    overflow-wrap: break-word;
    word-wrap: break-word;
    word-break: keep-all; /* Prevents breaking within words if possible */
    hyphens: auto;
    /* Make title take up all available space except what's needed for button */
    flex: 1;
    /* Fixed height for consistent layout */
    min-height: 3.5em; /* Provides enough space for 2-3 lines of text */
    /* Encourage whole words to stay together when possible */
    white-space: normal;
    /* Add slight padding to ensure text doesn't touch edges */
    padding: 0 2px;
  }

  .download-button {
    color: #000 !important; /* Force black color and override any inherited colors */
    padding: 6px 12px;
    font-size: 14px;
    text-decoration: none;
    display: inline-block;
    /* Ensure buttons are at the bottom of their containers */
    margin-top: auto;
    background-color: transparent;
    border: none;
    flex-shrink: 0; /* Prevent button from shrinking */
  }

  /* Responsive adjustments */
  @media screen and (max-width: 1200px) {
    .policies-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }
  
  @media screen and (max-width: 768px) {
    .policies-grid {
      grid-template-columns: repeat(3, 1fr);
    }
    .policy-title {
      font-size: 15px; /* Slightly smaller font for better fit */
    }
  }
  
  @media screen and (max-width: 480px) {
    .policies-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .policy-title {
      font-size: 14px; /* Even smaller font for mobile */
    }
  }
</style>

  <h3 style="text-align: center; font-weight: bold;">Statutory Policies</h3>
  <div class="policies-grid">
    <!-- Accessibility Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Accessibility - December 2024.pdf" class="policy-title" target="_blank">Accessibility</a>
      <a class="download-button" href="/assets/policies/Accessibility - December 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Administration of Medicines Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/administration-of-medicines.pdf" class="policy-title" target="_blank">Administration of Medicines</a>
      <a class="download-button" href="/assets/policies/administration-of-medicines.pdf" target="_blank">Download</a>
    </div>

    <!-- Anti-Bullying Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Anti Bullying - December 2024.pdf" class="policy-title" target="_blank">Anti-Bullying</a>
      <a class="download-button" href="/assets/policies/Anti Bullying - December 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Attendance Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/attendance.pdf" class="policy-title" target="_blank">Attendance</a>
      <a class="download-button" href="/assets/policies/attendance.pdf" target="_blank">Download</a>
    </div>

    <!-- Behaviour Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/behaviour.pdf" class="policy-title" target="_blank">Behaviour</a>
      <a class="download-button" href="/assets/policies/behaviour.pdf" target="_blank">Download</a>
    </div>

    <!-- Child Protection Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/child-protection.pdf" class="policy-title" target="_blank">Child Protection</a>
      <a class="download-button" href="/assets/policies/child-protection.pdf" target="_blank">Download</a>
    </div>

    <!-- Code of Conduct Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/code_of_conduct.pdf" class="policy-title" target="_blank">Code of Conduct</a>
      <a class="download-button" href="/assets/policies/code_of_conduct.pdf" target="_blank">Download</a>
    </div>

    <!-- Conflict of Interests Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/conflict-of-interests.pdf" class="policy-title" target="_blank">Conflict of Interests</a>
      <a class="download-button" href="/assets/policies/conflict-of-interests.pdf" target="_blank">Download</a>
    </div>

    <!-- Complaints Policy and Procedure -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Complaints Policy and Procedure - April 2023.pdf" class="policy-title" target="_blank">Complaints Policy and Procedure</a>
      <a class="download-button" href="/assets/policies/Complaints Policy and Procedure - April 2023.pdf" target="_blank">Download</a>
    </div>

    <!-- Confidentiality Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/confidentiality.pdf" class="policy-title" target="_blank">Confidentiality</a>
      <a class="download-button" href="/assets/policies/confidentiality.pdf" target="_blank">Download</a>
    </div>

    <!-- Data Protection Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/data-protection.pdf" class="policy-title" target="_blank">Data Protection</a>
      <a class="download-button" href="/assets/policies/data-protection.pdf" target="_blank">Download</a>
    </div>

    <!-- Drugs and Substance Misuse Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/drugs-substance-misuse.pdf" class="policy-title" target="_blank">Drugs and Substance Misuse</a>
      <a class="download-button" href="/assets/policies/drugs-substance-misuse.pdf" target="_blank">Download</a>
    </div>

    <!-- E-Safety Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/esafety.pdf" class="policy-title" target="_blank">E-Safety</a>
      <a class="download-button" href="/assets/policies/esafety.pdf" target="_blank">Download</a>
    </div>

    <!-- Equality & Diversity Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Equality and Diversity - December 2024.pdf" class="policy-title" target="_blank">Equality & Diversity</a>
      <a class="download-button" href="/assets/policies/Equality and Diversity - December 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Exams Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/exams-2024.pdf" class="policy-title" target="_blank">Exams</a>
      <a class="download-button" href="/assets/policies/exams-2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Freedom of Information Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/freedom_of_information.pdf" class="policy-title" target="_blank">Freedom of Information</a>
      <a class="download-button" href="/assets/policies/freedom_of_information.pdf" target="_blank">Download</a>
    </div>

    <!-- Health and Safety Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/health-and-safety.pdf" class="policy-title" target="_blank">Health and Safety</a>
      <a class="download-button" href="/assets/policies/health-and-safety.pdf" target="_blank">Download</a>
    </div>

    <!-- Prevention of Radicalisation and Extremism Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/prevention-of-radicalisation-and-extremism.pdf" class="policy-title" target="_blank">Prevention of Radicalisation and Extremism</a>
      <a class="download-button" href="/assets/policies/prevention-of-radicalisation-and-extremism.pdf" target="_blank">Download</a>
    </div>

    <!-- Safeguarding Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/safeguarding.pdf" class="policy-title" target="_blank">Safeguarding</a>
      <a class="download-button" href="/assets/policies/safeguarding.pdf" target="_blank">Download</a>
    </div>

    <!-- SEND Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/SEND - September 2024.pdf" class="policy-title" target="_blank">SEND Policy</a>
      <a class="download-button" href="/assets/policies/SEND - September 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- SEND Information Report Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/SEND Information Report - September 2024.pdf" class="policy-title" target="_blank">SEND Information Report</a>
      <a class="download-button" href="/assets/policies/SEND Information Report - September 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Suspension and Permanent Exclusion Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/suspension_and_permanent_exclusion.pdf" class="policy-title" target="_blank">Suspension and Permanent Exclusion</a>
      <a class="download-button" href="/assets/policies/suspension_and_permanent_exclusion.pdf" target="_blank">Download</a>
    </div>

    <!-- Uniform Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Uniform 2024-2025.pdf" class="policy-title" target="_blank">Uniform Policy</a>
      <a class="download-button" href="/assets/policies/Uniform 2024-2025.pdf" target="_blank">Download</a>
    </div>
  </div>

  <!-- Spacer between sections -->
  <div style="height: 40px;"></div>
</div>

  <!-- Non-Statutory Policies Section -->
  <h3 style="text-align: center; font-weight: bold;">Non-Statutory Policies</h3>
  <div class="policies-grid">

    <!-- Admission Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/admissions-2024-2025.pdf" class="policy-title" target="_blank">Admissions</a>
      <a class="download-button" href="/assets/policies/admissions-2024-2025.pdf" target="_blank">Download</a>
    </div>

    <!-- Careers Education, Information, Advice and Guidance Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/ceiag.pdf" class="policy-title" target="_blank">Careers Education, Information, Advice and Guidance</a>
      <a class="download-button" href="/assets/policies/ceiag.pdf" target="_blank">Download</a>
    </div>

    <!-- CCTV Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/cctv.pdf" class="policy-title" target="_blank">CCTV</a>
      <a class="download-button" href="/assets/policies/cctv.pdf" target="_blank">Download</a>
    </div>

    <!-- Charging and Remissions Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Charging and Remissions - January 2025.pdf" class="policy-title" target="_blank">Charging and Remissions</a>
      <a class="download-button" href="/assets/policies/Charging and Remissions - January 2025.pdf" target="_blank">Download</a>
    </div>

    <!-- Governors' Allowances Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/Governor Allowances - Nov 2024.pdf" class="policy-title" target="_blank">Governors' Allowances</a>
      <a class="download-button" href="/assets/policies/Governor Allowances - Nov 2024.pdf" target="_blank">Download</a>
    </div>

    <!-- Homework Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/homework.pdf" class="policy-title" target="_blank">Homework</a>
      <a class="download-button" href="/assets/policies/homework.pdf" target="_blank">Download</a>
    </div>

    <!-- Malpractice (Exams Assessment) Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/malpractice.pdf" class="policy-title" target="_blank">Malpractice (Exams Assessment)</a>
      <a class="download-button" href="/assets/policies/malpractice.pdf" target="_blank">Download</a>
    </div>

    <!-- Mental Health and Emotional Wellbeing Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/mental-health-and-emotional-wellbeing.pdf" class="policy-title" target="_blank">Mental Health and Emotional Wellbeing</a>
      <a class="download-button" href="/assets/policies/mental-health-and-emotional-wellbeing.pdf" target="_blank">Download</a>
    </div>

    <!-- Pupil Premium Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/pupil-premium.pdf" class="policy-title" target="_blank">Pupil Premium</a>
      <a class="download-button" href="/assets/policies/pupil-premium.pdf" target="_blank">Download</a>
    </div>

    <!-- Risk Assessment Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/risk-assessment.pdf" class="policy-title" target="_blank">Risk Assessment</a>
      <a class="download-button" href="/assets/policies/risk-assessment.pdf" target="_blank">Download</a>
    </div>

    <!-- Volunteering Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/volunteering.pdf" class="policy-title" target="_blank">Volunteering</a>
      <a class="download-button" href="/assets/policies/volunteering.pdf" target="_blank">Download</a>
    </div>

    <!-- Word Processor Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/word-processor.pdf" class="policy-title" target="_blank">Word Processor</a>
      <a class="download-button" href="/assets/policies/word-processor.pdf" target="_blank">Download</a>
    </div>

    <!-- Work Experience Policy -->
    <div class="policy-item">
      <div class="policy-icon"></div>
      <a href="/assets/policies/work-experience.pdf" class="policy-title" target="_blank">Work Experience</a>
      <a class="download-button" href="/assets/policies/work-experience.pdf" target="_blank">Download</a>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer style="background-color: #333333; color: white; padding: 20px 0;">
<?php include("includes/footer.html") ?>
</footer>


  <!-- Scripts -->
  <script src="js/vendor/libraries.min.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.min.js"></script>
</body>
</html>