<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="School Portal - Access resources for staff, students, and parents">
    <title><?php echo $title ?? 'School Portal'; ?></title>
    <!-- Load Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> 
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --card-hover-color: #f8f9fa;
            --security-color: #2e8b57; /* Sea Green for security section */
            --security-hover-color: #3cb371; /* Medium Sea Green for hover states */
        }
        
        body {
            background-color: white;
            color: #212529;
        }
        
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            background-color: #f8f9fa;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #e9ecef;
        }
        
        .card-img-top {
            width: 100%;
            height: 100px;
            object-fit: contain;
            margin: 0 auto;
            padding: 10px;
        }
        
        .card-body h5 {
            font-size: 1rem;
            overflow: hidden;
            text-overflow: ellipsis;
            word-wrap: break-word;
            hyphens: auto;
        }
        
        .section-header {
            margin-bottom: 1rem;
            position: relative;
        }
        
        .section-header .btn {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 0.75rem;
        }
        
        .footer {
            margin-top: 3rem;
            padding: 1rem 0;
            border-top: 1px solid #dee2e6;
        }
        
        /* Accessibility improvements */
        .btn:focus, a:focus {
            outline: 3px solid rgba(13, 110, 253, 0.5);
            outline-offset: 2px;
        }
        
        /* Cybersecurity section styles */
        .cybersecurity-tip {
            border-left: 4px solid var(--security-color);
            padding-left: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .tip-title {
            font-weight: 600;
            color: var(--security-color);
            margin-bottom: 0.5rem;
        }
        
        .resource-card {
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
            padding: 1rem;
            height: 100%;
            background-color: #f8f9fa;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #e9ecef;
        }
        
        .security-icon {
            font-size: 2rem;
            color: var(--security-color);
            margin-bottom: 1rem;
        }
        
        /* Cybersecurity section button */
        #cybersecurity-section-heading {
            background-color: var(--security-color);
            border-color: var(--security-color);
        }
        
        #cybersecurity-section-heading:hover,
        #cybersecurity-section-heading:focus {
            background-color: var(--security-hover-color);
            border-color: var(--security-hover-color);
        }
    </style>
</head>
<body>
    <header class="py-2 mb-4" style="background-color: #333333; color: white;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="https://pcs.hants.sch.uk" style="color: white;">School Website</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #f8f9fa;">Portal</li>
                </ol>
            </nav>
        </div>
    </header>

    <main class="container text-center">
        <h1 class="mb-4">Welcome to the School Portal</h1>

        <p class="lead mb-5">This portal provides easy access to a variety of resources and tools to support our school community, including staff, students, and parents. Click on the links below to access the platforms you need for efficient learning, communication, and management.</p>

        <!-- Staff Section -->
        <section class="mb-4" aria-labelledby="staff-section-heading">
            <div class="section-header">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#staffSection" aria-expanded="false" aria-controls="staffSection" id="staff-section-heading">
                    <span class="bi bi-people-fill me-2"></span>
                    Staff Resources
                    <span class="bi bi-caret-down-fill ms-2" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse" id="staffSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-3 mt-3">
                    <!-- Classcharts for Staff -->
                    <div class="col">
                        <a href="https://www.classcharts.com/account/login" class="text-decoration-none" aria-label="Access Classcharts for Staff">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                    <p class="card-text small text-muted">Behavior management and homework platform</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- CPOMs -->
                    <div class="col">
                        <a href="https://www.cpoms.co.uk/" class="text-decoration-none" aria-label="Access CPOMS for Staff">
                            <div class="card p-2">
                                <img src="https://www.cpoms.co.uk/wp-content/uploads/2023/05/CPOMS-Logo_FullColor-Transparent-BG.png" class="card-img-top" alt="CPOMs Logo">
                                <div class="card-body">
                                    <h5 class="card-title">CPOMs</h5>
                                    <p class="card-text small text-muted">Safeguarding and child protection software</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Google Classroom -->
                    <div class="col">
                        <a href="https://classroom.google.com/" class="text-decoration-none" aria-label="Access Google Classroom for Staff">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Google_Classroom_Logo.png" class="card-img-top" alt="Google Classroom Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Google Classroom</h5>
                                    <p class="card-text small text-muted">Virtual classroom management</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Microsoft 365 -->
                    <div class="col">
                        <a href="https://www.office.com/" class="text-decoration-none" aria-label="Access Microsoft 365 for Staff">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" class="card-img-top" alt="Microsoft 365 Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Microsoft 365</h5>
                                    <p class="card-text small text-muted">Office apps and email</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Tucasi -->
                    <div class="col">
                        <a href="https://www.scopay.com/login" class="text-decoration-none" aria-label="Access Tucasi for Staff">
                            <div class="card p-2">
                                <img src="https://www.tucasi.com/wp-content/uploads/2023/07/logo_tucasi.svg" class="card-img-top" alt="Tucasi Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Tucasi</h5>
                                    <p class="card-text small text-muted">Financial management system</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Students Section -->
        <section class="mb-4" aria-labelledby="students-section-heading">
            <div class="section-header">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#studentsSection" aria-expanded="false" aria-controls="studentsSection" id="students-section-heading">
                    <span class="bi bi-mortarboard-fill me-2"></span>
                    Student Resources
                    <span class="bi bi-caret-down-fill ms-2" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse" id="studentsSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mt-3">
                    <!-- Classcharts for Students -->
                    <div class="col">
                        <a href="https://www.classcharts.com/student/login" class="text-decoration-none" aria-label="Access Classcharts for Students">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                    <p class="card-text small text-muted">Check behavior points and homework</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Google Classroom -->
                    <div class="col">
                        <a href="https://classroom.google.com/" class="text-decoration-none" aria-label="Access Google Classroom for Students">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Google_Classroom_Logo.png" class="card-img-top" alt="Google Classroom Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Google Classroom</h5>
                                    <p class="card-text small text-muted">Access classwork and assignments</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Microsoft 365 -->
                    <div class="col">
                        <a href="https://www.office.com/" class="text-decoration-none" aria-label="Access Microsoft 365 for Students">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" class="card-img-top" alt="Microsoft 365 Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Microsoft 365</h5>
                                    <p class="card-text small text-muted">Access email and office applications</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Parents Section -->
        <section class="mb-4" aria-labelledby="parents-section-heading">
            <div class="section-header">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#parentsSection" aria-expanded="false" aria-controls="parentsSection" id="parents-section-heading">
                    <span class="bi bi-house-heart-fill me-2"></span>
                    Parent Resources
                    <span class="bi bi-caret-down-fill ms-2" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse" id="parentsSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mt-3">
                    <!-- Classcharts for Parents -->
                    <div class="col">
                        <a href="https://www.classcharts.com/parent/login" class="text-decoration-none" aria-label="Access Classcharts for Parents">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                    <p class="card-text small text-muted">Monitor your child's behavior and homework</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Tucasi for Parents -->
                    <div class="col">
                        <a href="https://www.scopay.com/login" class="text-decoration-none" aria-label="Access Tucasi for Parents">
                            <div class="card p-2">
                                <img src="https://www.tucasi.com/wp-content/uploads/2023/07/logo_tucasi.svg" class="card-img-top" alt="Tucasi Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Tucasi</h5>
                                    <p class="card-text small text-muted">Make payments for trips and meals</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Parents Evening Booking for Parents -->
                    <div class="col">
                        <a href="https://parkc.schoolcloud.co.uk" class="text-decoration-none" aria-label="Access Parents Evening Booking System">
                            <div class="card p-2">
                                <img src="https://pcs.hants.sch.uk/images/logo/schoolcloud-pe.png" class="card-img-top" alt="Parents Evening Booking System Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Parents Evening Booking</h5>
                                    <p class="card-text small text-muted">Book appointments with teachers</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cybersecurity Tips & Resources Section -->
        <section class="mb-4" aria-labelledby="cybersecurity-section-heading">
            <div class="section-header">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#cybersecuritySection" aria-expanded="false" aria-controls="cybersecuritySection" id="cybersecurity-section-heading">
                    <span class="bi bi-shield-lock-fill me-2"></span>
                    Cybersecurity Tips & Resources
                    <span class="bi bi-caret-down-fill ms-2" aria-hidden="true"></span>
                </button>
            </div>
            <div class="collapse" id="cybersecuritySection">
                <div class="row g-4 mt-3">
                    <!-- Cybersecurity Tips -->
                    <div class="col-12">
                        <div class="text-start mb-4">
                            <h3 class="h4 mb-3" style="color: var(--security-color);">Essential Cybersecurity Tips</h3>
                            
                            <div class="cybersecurity-tip">
                                <h4 class="tip-title">Use Strong, Unique Passwords</h4>
                                <p>Create passwords that are at least 12 characters long with a mix of letters, numbers, and symbols. Never use the same password for multiple accounts. Consider using a password manager to help generate and store secure passwords.</p>
                            </div>
                            
                            <div class="cybersecurity-tip">
                                <h4 class="tip-title">Enable Two-Factor Authentication (2FA)</h4>
                                <p>Add an extra layer of security to your accounts by enabling 2FA wherever possible, including your school accounts. This requires both your password and a second form of verification, such as a code sent to your phone.</p>
                            </div>
                            
                            <div class="cybersecurity-tip">
                                <h4 class="tip-title">Be Wary of Phishing Attempts</h4>
                                <p>Always verify the sender of emails, especially those asking for personal information or containing unusual links. Hover over links before clicking to see where they actually lead. When in doubt, contact the supposed sender directly through official channels.</p>
                            </div>
                            
                            <div class="cybersecurity-tip">
                                <h4 class="tip-title">Keep Software Updated</h4>
                                <p>Regularly update your operating system, browsers, and applications to protect against known security vulnerabilities. Enable automatic updates when possible.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cybersecurity Resources -->
                    <div class="col-12">
                        <h3 class="h4 mb-3" style="color: var(--security-color);">Helpful Guides & Resources</h3>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                            <!-- Password Security Guide -->
                            <div class="col">
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#passwordSecurityModal" aria-label="Password Security Guide">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-key-fill"></i>
                                        </div>
                                        <h4 class="h5">Password Security Guide</h4>
                                        <p class="small text-dark">Learn how to create and manage strong passwords</p>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Online Safety for Students -->
                            <div class="col">
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#onlineSafetyModal" aria-label="Online Safety for Students">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-person-lock"></i>
                                        </div>
                                        <h4 class="h5">Online Safety for Students</h4>
                                        <p class="small text-dark">Tips for staying safe online and on social media</p>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Phishing Awareness -->
                            <div class="col">
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#phishingAwarenessModal" aria-label="Phishing Awareness">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-envelope-exclamation-fill"></i>
                                        </div>
                                        <h4 class="h5">Phishing Awareness</h4>
                                        <p class="small text-dark">How to identify and avoid phishing attempts</p>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Data Protection Guide -->
                            <div class="col">
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#dataProtectionModal" aria-label="Data Protection Guide">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-file-earmark-lock2-fill"></i>
                                        </div>
                                        <h4 class="h5">Data Protection Guide</h4>
                                        <p class="small text-dark">Best practices for protecting sensitive information</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- External Resources -->
                    <div class="col-12">
                        <h3 class="h4 mb-3" style="color: var(--security-color);">External Resources</h3>
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <!-- NCSC -->
                            <div class="col">
                                <a href="https://www.ncsc.gov.uk/section/education-skills/cyber-security-schools" target="_blank" class="text-decoration-none" aria-label="National Cyber Security Centre Resources for Schools">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-building-fill-lock"></i>
                                        </div>
                                        <h4 class="h5">NCSC Resources for Schools</h4>
                                        <p class="small text-dark">National Cyber Security Centre guidance for educational institutions</p>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Internet Matters -->
                            <div class="col">
                                <a href="https://www.internetmatters.org/" target="_blank" class="text-decoration-none" aria-label="Internet Matters Resources">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-globe"></i>
                                        </div>
                                        <h4 class="h5">Internet Matters</h4>
                                        <p class="small text-dark">Resources to help children stay safe online</p>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- Childnet International -->
                            <div class="col">
                                <a href="https://www.childnet.com/" target="_blank" class="text-decoration-none" aria-label="Childnet International Resources">
                                    <div class="resource-card text-center">
                                        <div class="security-icon">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <h4 class="h5">Childnet International</h4>
                                        <p class="small text-dark">Making the internet a safer place for children</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modals for Cybersecurity Guides -->
    <!-- Password Security Modal -->
    <div class="modal fade" id="passwordSecurityModal" tabindex="-1" aria-labelledby="passwordSecurityModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--security-color); color: white;">
                    <h5 class="modal-title" id="passwordSecurityModalLabel">Password Security Guide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                </div>
                <div class="modal-body">
                    <h3>Creating Strong Passwords</h3>
                    <ul>
                        <li>Use at least 12 characters - the more characters, the better</li>
                        <li>Include a mix of uppercase and lowercase letters, numbers, and symbols</li>
                        <li>Avoid using easily guessable information such as names, birthdays, or common words</li>
                        <li>Consider using a passphrase: a series of random words with numbers and symbols</li>
                        <li>Example of a strong password: "Tr@vel27!Book$Horse" (Note: Never use example passwords)</li>
                    </ul>
                    
                    <h3>Password Management Tips</h3>
                    <ul>
                        <li>Use different passwords for each account, especially for important accounts</li>
                        <li>Consider using a reputable password manager to generate and store complex passwords</li>
                        <li>Change passwords periodically, especially if there's been a security breach</li>
                        <li>Never share your passwords with others or write them down where they can be found</li>
                        <li>Be careful when entering passwords on public computers or over public Wi-Fi</li>
                    </ul>
                    
                    <h3>Setting Up Multi-Factor Authentication</h3>
                    <p>For additional security, enable multi-factor authentication (MFA) whenever available. This requires something you know (your password) and something you have (like your mobile phone) to access your account.</p>
                    <ol>
                        <li>Go to the security settings in your account</li>
                        <li>Look for options like "Two-step verification" or "Multi-factor authentication"</li>
                        <li>Follow the setup instructions, which typically involve linking your mobile phone</li>
                        <li>Store backup codes in a secure location in case you lose access to your authentication device</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: var(--security-color); color: white;">Download Guide</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Online Safety Modal -->
    <div class="modal fade" id="onlineSafetyModal" tabindex="-1" aria-labelledby="onlineSafetyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--security-color); color: white;">
                    <h5 class="modal-title" id="onlineSafetyModalLabel">Online Safety for Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                </div>
                <div class="modal-body">
                    <h3>Social Media Safety</h3>
                    <ul>
                        <li>Keep your profiles private and only accept friend requests from people you know</li>
                        <li>Be mindful of what you share - once online, content can be hard to remove</li>
                        <li>Regularly review your privacy settings as they can change with app updates</li>
                        <li>Be aware that location services might be sharing your whereabouts</li>
                        <li>Think before posting - would you be comfortable with a teacher or future employer seeing this?</li>
                    </ul>
                    
                    <h3>Digital Footprint Awareness</h3>
                    <p>Your digital footprint is the trail of data you create while using the internet. It can have long-lasting impacts on your reputation and opportunities.</p>
                    <ul>
                        <li>Regularly search your name online to see what information is publicly available</li>
                        <li>Consider how your online behavior reflects on you as a person</li>
                        <li>Remember that deleted content may still exist in screenshots or archives</li>
                        <li>Use positive online activities to build a beneficial digital footprint</li>
                    </ul>
                    
                    <h3>Dealing with Online Issues</h3>
                    <p>If you encounter problems online:</p>
                    <ol>
                        <li>Don't respond to negative messages or cyberbullying</li>
                        <li>Save evidence by taking screenshots</li>
                        <li>Report inappropriate content to the platform</li>
                        <li>Block users who are bothering you</li>
                        <li>Talk to a trusted adult if you're feeling upset or threatened</li>
                        <li>Remember the school has a support system in place to help with online issues</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: var(--security-color); color: white;">Download Guide</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Phishing Awareness Modal -->
    <div class="modal fade" id="phishingAwarenessModal" tabindex="-1" aria-labelledby="phishingAwarenessModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--security-color); color: white;">
                    <h5 class="modal-title" id="phishingAwarenessModalLabel">Phishing Awareness</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                </div>
                <div class="modal-body">
                    <h3>What is Phishing?</h3>
                    <p>Phishing is when attackers attempt to trick you into revealing sensitive information such as passwords, credit card details, or personal data by pretending to be a trustworthy entity.</p>
                    
                    <h3>Common Signs of Phishing</h3>
                    <ul>
                        <li><strong>Urgent tone</strong>: Messages creating a sense of urgency or fear</li>
                        <li><strong>Generic greeting</strong>: "Dear Customer" instead of your name</li>
                        <li><strong>Poor spelling and grammar</strong>: Professional organizations typically proofread communications</li>
                        <li><strong>Suspicious sender address</strong>: Email addresses that mimic but don't exactly match official addresses</li>
                        <li><strong>Requests for personal information</strong>: Legitimate organizations rarely ask for sensitive data via email</li>
                        <li><strong>Too-good-to-be-true offers</strong>: Promises of prizes, money, or exclusive opportunities</li>
                    </ul>
                    
                    <h3>How to Protect Yourself</h3>
                    <ol>
                        <li>Hover over links before clicking to see the actual URL destination</li>
                        <li>Type website addresses directly in your browser instead of clicking links in emails</li>
                        <li>Never provide personal information in response to an unsolicited message</li>
                        <li>Verify requests for information by contacting the organization directly through official channels</li>
                        <li>Keep your browser and security software updated</li>
                        <li>Use multi-factor authentication whenever possible</li>
                        <li>Report suspicious emails to your IT department and the organization being impersonated</li>
                    </ol>
                    
                    <h3>School-Specific Phishing Concerns</h3>
                    <p>Be especially cautious of:</p>
                    <ul>
                        <li>Messages appearing to come from school administrators asking for login credentials</li>
                        <li>Emails claiming to be about grades, scholarships, or financial aid requiring immediate action</li>
                        <li>Links to fake login pages for school platforms like Google Classroom or Microsoft 365</li>
                        <li>Remember: School staff will never ask for your password via email</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: var(--security-color); color: white;">Download Guide</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Data Protection Modal -->
    <div class="modal fade" id="dataProtectionModal" tabindex="-1" aria-labelledby="dataProtectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: var(--security-color); color: white;">
                    <h5 class="modal-title" id="dataProtectionModalLabel">Data Protection Guide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                </div>
                <div class="modal-body">
                    <h3>Protecting Personal Information</h3>
                    <ul>
                        <li>Be selective about what personal information you share online</li>
                        <li>Regularly review privacy settings on all your accounts</li>
                        <li>Use secure, HTTPS websites when entering personal information</li>
                        <li>Be cautious about the information you share in online forms and surveys</li>
                        <li>Remember that public Wi-Fi networks may not be secure</li>
                    </ul>
                    
                    <h3>Handling School-Related Data</h3>
                    <ul>
                        <li>Never share your school account credentials with others</li>
                        <li>Log out of all accounts when using shared computers</li>
                        <li>Be careful when downloading attachments, even from known sources</li>
                        <li>Don't save sensitive documents to public or shared drives without proper permissions</li>
                        <li>Follow the school's data protection policies when handling any personal information</li>
                    </ul>
                    
                    <h3>Device Security</h3>
                    <ol>
                        <li><strong>Keep devices updated</strong>: Install security updates promptly</li>
                        <li><strong>Use screen locks</strong>: Protect all devices with PINs, passwords, or biometrics</li>
                        <li><strong>Install security software</strong>: Use reputable antivirus and anti-malware protection</li>
                        <li><strong>Back up important data</strong>: Regularly backup schoolwork and important files</li>
                        <li><strong>Be careful with USB drives</strong>: Scan them for viruses before opening files</li>
                        <li><strong>Encrypt sensitive data</strong>: Use encryption tools for very sensitive information</li>
                    </ol>
                    
                    <h3>Reporting Data Breaches</h3>
                    <p>If you suspect a data breach or accidentally share sensitive information:</p>
                    <ol>
                        <li>Report it immediately to the school's IT department or data protection officer</li>
                        <li>Do not attempt to resolve the issue yourself</li>
                        <li>Document what happened, when, and what information might be affected</li>
                        <li>Follow any instructions provided by the IT team</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn" style="background-color: var(--security-color); color: white;">Download Guide</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <p>To return to the main website, please <a href="https://pcs.hants.sch.uk" target="_blank">click here</a>.</p>
            <p class="small text-muted">&copy; <?php echo date('Y'); ?> School Name. All rights reserved.</p>
        </div>
    </footer>

    <!-- Load Bootstrap JS Bundle from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Save the state of collapsed sections to localStorage
        document.addEventListener('DOMContentLoaded', function() {
            const sections = ['staffSection', 'studentsSection', 'parentsSection', 'cybersecuritySection'];
            
            // Restore collapsed state from localStorage
            sections.forEach(function(sectionId) {
                const savedState = localStorage.getItem(sectionId);
                if (savedState === 'expanded') {
                    const section = document.getElementById(sectionId);
                    if (section) {
                        section.classList.add('show');
                        
                        // Update the aria-expanded attribute of the button
                        const button = document.querySelector(`[data-bs-target="#${sectionId}"]`);
                        if (button) {
                            button.setAttribute('aria-expanded', 'true');
                        }
                    }
                }
            });
            
            // Save collapsed state when toggled
            document.body.addEventListener('shown.bs.collapse', function(e) {
                localStorage.setItem(e.target.id, 'expanded');
            });
            
            document.body.addEventListener('hidden.bs.collapse', function(e) {
                localStorage.setItem(e.target.id, 'collapsed');
            });
        });
    </script>
</body>
</html>