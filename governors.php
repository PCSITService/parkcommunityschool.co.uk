<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Park Community School | Governors</title>
    <?php include("includes/head.html") ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset and base styles */
        .modern-content {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        /* Modern header styling */
        .header-school {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .header-school::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="0%" r="100%"><stop offset="0%" stop-color="white" stop-opacity="0.1"/><stop offset="100%" stop-color="white" stop-opacity="0"/></radialGradient></defs><rect width="100" height="20" fill="url(%23a)"/></svg>');
            opacity: 0.3;
        }

        .header-school .row {
            position: relative;
            z-index: 1;
        }

        .header-school h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header-school p {
            font-size: 1.3rem;
            opacity: 0.9;
            font-weight: 300;
        }

        /* Modern section styling */
        .modern-section {
            padding: 4rem 0;
            background: white;
        }

        .modern-section.alt-bg {
            background: #f8f9fa;
        }

        /* Role section styling */
        .role-content h3 {
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .role-content p {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 2rem;
        }

        .modern-list {
            list-style: none;
            padding: 0;
        }

        .modern-list li {
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
            position: relative;
            padding-left: 2rem;
            font-size: 1.1rem;
        }

        .modern-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .role-image-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .role-image-container img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .role-image-container:hover img {
            transform: scale(1.05);
        }

        /* Governors section */
        .governors-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .governors-title h3 {
            font-size: 2.5rem;
            color: #1e3c72;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .governors-title h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            border-radius: 2px;
        }

        /* Modern governor cards */
        .modern-governor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .modern-governor-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .modern-governor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            text-decoration: none;
            color: inherit;
        }

        .modern-governor-image {
            width: 100%;
            height: 250px;
            overflow: hidden;
            background: #f8f9fa;
        }

        .modern-governor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            transition: transform 0.3s ease;
        }

        .modern-governor-card:hover .modern-governor-image img {
            transform: scale(1.1);
        }

        /* Specific photo adjustments */
        .modern-governor-card[data-governor="arowsell"] .modern-governor-image img {
            object-position: center 20%;
        }

        .modern-governor-card[data-governor="bharwood"] .modern-governor-image img {
            object-position: center 15%;
            transform: scale(1.3);
        }

        .modern-governor-info {
            padding: 1.5rem;
        }

        .modern-governor-name {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 0.5rem;
        }

        .modern-governor-role {
            color: #6c757d;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1rem;
        }

        .modern-view-details {
            display: inline-flex;
            align-items: center;
            color: #2a5298;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .modern-view-details:hover {
            color: #1e3c72;
        }

        .modern-view-details i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .modern-governor-card:hover .modern-view-details i {
            transform: translateX(5px);
        }

        /* Committee cards */
        .committees-modern-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 3rem;
            margin-top: 2rem;
        }

        .committee-modern-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-left: 5px solid #2a5298;
        }

        .committee-modern-title {
            font-size: 1.5rem;
            color: #1e3c72;
            margin-bottom: 1rem;
        }

        .committee-modern-list {
            list-style: none;
            padding: 0;
        }

        .committee-modern-list li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }

        .committee-modern-list li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #2a5298;
            font-weight: bold;
        }

        /* CTA Section */
        .modern-cta-section {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 4rem 0;
        }

        .modern-cta-content {
            text-align: center;
        }

        .modern-cta-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
        }

        .modern-cta-text {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .modern-btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: white;
            color: #1e3c72;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            margin: 0 0.5rem;
        }

        .modern-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            text-decoration: none;
            color: #1e3c72;
        }

        /* Modern modal */
        .modern-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
            backdrop-filter: blur(5px);
        }

        .modern-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        .modern-modal-content {
            background: white;
            border-radius: 20px;
            max-width: 500px;
            width: 90%;
            max-height: 80%;
            overflow-y: auto;
            position: relative;
            animation: slideIn 0.3s ease;
        }

        .modern-modal-header {
            padding: 2rem;
            border-bottom: 1px solid #e9ecef;
        }

        .modern-modal-title {
            font-size: 1.5rem;
            color: #1e3c72;
            margin-bottom: 1rem;
        }

        .modern-modal-body {
            padding: 2rem;
        }

        .modern-modal-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #6c757d;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .modern-modal-close:hover {
            background: #e9ecef;
            color: #1e3c72;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-school h1 {
                font-size: 2.5rem;
            }

            .modern-governor-grid {
                grid-template-columns: 1fr;
            }

            .committees-modern-grid {
                grid-template-columns: 1fr;
            }

            .role-content h3 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body class="page-school">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- CONTENT -->
<section class="modern-content">
    <div class="row modern-section">
        <div class="medium-7 columns">
            <div class="role-content">
                <h3>What do the Governors do?</h3>
                <p>The Governors act as a 'critical friend' to the school by:</p>
                <ul class="modern-list">
                    <li>Ensuring clarity of vision, ethos and strategic direction and supporting staff to achieve this.</li>
                    <li>Holding the Headteacher to account for the educational performance of the school and its pupils.</li>
                    <li>Overseeing the financial performance of the school and making sure money is well spent.</li>
                </ul>
            </div>
        </div>
        <div class="small-offset-2 small-pull-2 small-8 small-8 medium-pull-0 medium-offset-0 medium-5 columns">
            <div class="role-image-container">
                <img src="images/governors/governors-01.jpg" alt="Park Community School - A Hive of Education">
            </div>
        </div>
    </div>
</section>

<section id="meet-the-team" class="modern-section alt-bg">
    <div class="row">
        <div class="large-12 columns">
            <div class="governors-title">
                <h3>Our Governors</h3>
            </div>
            
            <div class="modern-governor-grid">
                <!-- Governor Cards -->
                <div class="modern-governor-card" data-governor="bharwood" onclick="openModernModal('bharwood')">
                    <div class="modern-governor-image">
                        <img src="images/governors/b-harwood.jpg" alt="Mr B Harwood">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr B Harwood</h3>
                        <p class="modern-governor-role">Local Authority Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="arowsell" onclick="openModernModal('arowsell')">
                    <div class="modern-governor-image">
                        <img src="images/governors/a-rowsell.jpg" alt="Mr A Rowsell">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr A Rowsell</h3>
                        <p class="modern-governor-role">Co-opted Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="canders" onclick="openModernModal('canders')">
                    <div class="modern-governor-image">
                        <img src="images/governors/c-anders.jpg" alt="Mr C Anders">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr C Anders</h3>
                        <p class="modern-governor-role">Headteacher</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="rcousins" onclick="openModernModal('rcousins')">
                    <div class="modern-governor-image">
                        <img src="images/governors/r-cousins.jpg" alt="Mr R Cousins">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr R Cousins</h3>
                        <p class="modern-governor-role">Co-opted Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="amays" onclick="openModernModal('amays')">
                    <div class="modern-governor-image">
                        <img src="images/governors/a-mays.jpg" alt="Mrs A Mays">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mrs A Mays</h3>
                        <p class="modern-governor-role">Co-opted Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="mturnernorgate" onclick="openModernModal('mturnernorgate')">
                    <div class="modern-governor-image">
                        <img src="images/governors/m-turner-norgate.jpg" alt="Mr M Turner-Norgate">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr M Turner-Norgate</h3>
                        <p class="modern-governor-role">Staff Member</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="cemery" onclick="openModernModal('cemery')">
                    <div class="modern-governor-image">
                        <img src="images/governors/c-emery.jpg" alt="Mrs C Emery">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mrs C Emery</h3>
                        <p class="modern-governor-role">Co-opted Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="cmiller" onclick="openModernModal('cmiller')">
                    <div class="modern-governor-image">
                        <img src="images/governors/c-miller.400x400 - GIMPExport.jpg" alt="Mrs C Miller">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mrs C Miller</h3>
                        <p class="modern-governor-role">Co-opted Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="kdenyer" onclick="openModernModal('kdenyer')">
                    <div class="modern-governor-image">
                        <img src="images/governors/K Denyer 400 x400.jpg" alt="Mrs K Denyer">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mrs K Denyer</h3>
                        <p class="modern-governor-role">Parent Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="pfry" onclick="openModernModal('pfry')">
                    <div class="modern-governor-image">
                        <img src="images/governors/P Fry 400 x 400.jpg" alt="Mr P Fry">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr P Fry</h3>
                        <p class="modern-governor-role">Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="ecapaldi" onclick="openModernModal('ecapaldi')">
                    <div class="modern-governor-image">
                        <img src="images/governors/E Capaldi 400 x 400.jpg" alt="Mrs E Capaldi">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mrs E Capaldi</h3>
                        <p class="modern-governor-role">Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card" data-governor="wgoldsmith" onclick="openModernModal('wgoldsmith')">
                    <div class="modern-governor-image">
                        <img src="images/governors/W.Goldsmith 400 x 400.jpg" alt="Mr W Goldsmith">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Mr W Goldsmith</h3>
                        <p class="modern-governor-role">Associate Governor</p>
                        <span class="modern-view-details">View Details <i class="fas fa-arrow-right"></i></span>
                    </div>
                </div>

                <div class="modern-governor-card">
                    <div class="modern-governor-image">
                        <img src="images/governors/person.jpg" alt="Pending Governor">
                    </div>
                    <div class="modern-governor-info">
                        <h3 class="modern-governor-name">Pending</h3>
                        <p class="modern-governor-role">Parent Governor</p>
                        <span style="color: #6c757d;">Position Available</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="modern-section">
    <div class="row">
        <div class="columns">
            <div class="governors-title">
                <h3>Committee Responsibilities</h3>
            </div>
            <div class="committees-modern-grid">
                <div class="committee-modern-card">
                    <h5 class="committee-modern-title">Administration Committee</h5>
                    <p style="color: #6c757d; margin-bottom: 1.5rem;">The Administration Committee is responsible for the following:</p>
                    <ul class="committee-modern-list">
                        <li>Finance</li>
                        <li>Premises</li>
                        <li>Health & Safety</li>
                        <li>Personnel Inc. Performance Management</li>
                        <li>Safeguarding</li>
                    </ul>
                </div>
                <div class="committee-modern-card">
                    <h5 class="committee-modern-title">Performance Committee</h5>
                    <p style="color: #6c757d; margin-bottom: 1.5rem;">The Performance Committee is responsible for the following:</p>
                    <ul class="committee-modern-list">
                        <li>Standards</li>
                        <li>Curriculum</li>
                        <li>Attainment</li>
                        <li>Teaching & Learning</li>
                        <li>SEN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="modern-cta-section" id="becoming-a-governor">
    <div class="row">
        <div class="columns">
            <div class="modern-cta-content">
                <h4 class="modern-cta-title">Becoming a Governor</h4>
                <p class="modern-cta-text">Becoming a Governor at Park Community School couldn't be simpler, simply fill in the provided form and send it in.</p>
                <a href="#" class="modern-btn" onclick="openVacanciesModal()">View Vacancies</a>
                <a href="/assets/governors/role-of-parent-governor.pdf" target="_blank" class="modern-btn">Role of Parent Governor</a>
                <a href="/assets/governors/governors-need-you.pdf" target="_blank" class="modern-btn">Park Governors Need You!</a>
            </div>
        </div>
    </div>
</section>

<section class="modern-section">
    <div class="row">
        <div class="medium-7 columns">
            <div class="role-content">
                <h3>Meeting Attendance</h3>
                <p>Records of the governor meetings.</p>
                <a href="assets/governors/governors-attendance.pdf" target="_blank" class="modern-btn" style="color: white; background: #2a5298;">Governor Attendance</a>
                <p style="margin-top: 2rem;">For more information about school Governors please visit the <a href="http://www.nga.org.uk/Home.aspx" target="_blank" style="color: #2a5298;">National Governors' Association</a></p>
            </div>
        </div>
        <div class="small-offset-2 small-pull-2 small-8 small-8 medium-pull-0 medium-offset-0 medium-5 columns">
            <div class="role-image-container">
                <img src="images/governors/governors-03.jpg" alt="Park Community - Happy, Friendly Students Eager to Learn">
            </div>
        </div>
    </div>
</section>

<!-- COMPLETE GOVERNOR MODALS -->

<!-- Mr B Harwood Modal -->
<div id="bharwood-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('bharwood')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr B Harwood</h2>
            <p><strong>Appointed:</strong> 11.05.2019 | <strong>Term Expires:</strong> 15.03.2027</p>
            <p><strong>Category:</strong> Local Authority Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Co-Chair of Full Governing Body (FGB)</li>
                <li>Member of Performance Committee</li>
            </ul>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr A Rowsell Modal -->
<div id="arowsell-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('arowsell')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr A Rowsell</h2>
            <p><strong>Appointed:</strong> 22.06.2022 | <strong>Term Expires:</strong> 21.06.2026</p>
            <p><strong>Category:</strong> Co-opted</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Co-Chair of Full Governing Body (FGB)</li>
                <li>Chair of the Administration Committee</li>
                <li>Member of Administration Committee</li>
            </ul>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr C Anders Modal -->
<div id="canders-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('canders')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr C Anders</h2>
            <p><strong>Appointed:</strong> 01.09.2017 | <strong>Term Expires:</strong> Ex-Officio</p>
            <p><strong>Category:</strong> Headteacher</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mr Anders joined Park Community School as Headteacher in September 2017. He brings extensive experience in secondary education and is committed to ensuring every student achieves their potential.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr R Cousins Modal -->
<div id="rcousins-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('rcousins')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr R Cousins</h2>
            <p><strong>Appointed:</strong> 15.03.2023 | <strong>Term Expires:</strong> 14.03.2027</p>
            <p><strong>Category:</strong> Co-opted Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mr Cousins brings valuable business and finance experience to the governing body, supporting the school's strategic development and financial oversight.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mrs A Mays Modal -->
<div id="amays-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('amays')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mrs A Mays</h2>
            <p><strong>Appointed:</strong> 18.05.2020 | <strong>Term Expires:</strong> 12.08.2029</p>
            <p><strong>Category:</strong> Co-opted Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mrs Mays has extensive experience in education and brings valuable insights into teaching and learning practices to support the school's continued improvement.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr M Turner-Norgate Modal -->
<div id="mturnernorgate-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('mturnernorgate')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr M Turner-Norgate</h2>
            <p><strong>Appointed:</strong> 12.10.2021 | <strong>Term Expires:</strong> 11.10.2025</p>
            <p><strong>Category:</strong> Staff Member</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>As a staff governor, Mr Turner-Norgate provides valuable insight from the teaching perspective, ensuring staff views are represented in governance decisions.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mrs C Emery Modal -->
<div id="cemery-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('cemery')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mrs C Emery</h2>
            <p><strong>Appointed:</strong> 25.09.2019 | <strong>Term Expires:</strong> 24.09.2023</p>
            <p><strong>Category:</strong> Co-opted Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mrs Emery brings professional expertise in community development and stakeholder engagement, supporting the school's community partnerships.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mrs C Miller Modal -->
<div id="cmiller-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('cmiller')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mrs C Miller</h2>
            <p><strong>Appointed:</strong> 14.07.2022 | <strong>Term Expires:</strong> 13.07.2026</p>
            <p><strong>Category:</strong> Co-opted Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mrs Miller has a background in educational leadership and curriculum development, providing expertise in school improvement and student outcomes.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mrs K Denyer Modal -->
<div id="kdenyer-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('kdenyer')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mrs K Denyer</h2>
            <p><strong>Appointed:</strong> 03.11.2023 | <strong>Term Expires:</strong> 02.11.2027</p>
            <p><strong>Category:</strong> Parent Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>As a parent governor, Mrs Denyer represents the views and interests of parents and the wider school community, ensuring their voice is heard in governance decisions.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr P Fry Modal -->
<div id="pfry-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('pfry')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr P Fry</h2>
            <p><strong>Appointed:</strong> 16.01.2024 | <strong>Term Expires:</strong> 15.01.2028</p>
            <p><strong>Category:</strong> Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mr Fry brings professional experience in business management and strategic planning, supporting the school's long-term development and sustainability.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mrs E Capaldi Modal -->
<div id="ecapaldi-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('ecapaldi')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mrs E Capaldi</h2>
            <p><strong>Appointed:</strong> 01.09.2023 | <strong>Term Expires:</strong> Ex-Officio</p>
            <p><strong>Category:</strong> Head of School</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
                <li>Member of Performance Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>Mrs Capaldi serves as Head of School and brings extensive educational leadership experience, working closely with the Headteacher to ensure excellent educational outcomes.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Mr W Goldsmith Modal -->
<div id="wgoldsmith-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeModernModal('wgoldsmith')">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Mr W Goldsmith</h2>
            <p><strong>Appointed:</strong> 12.03.2024 | <strong>Term Expires:</strong> 11.03.2026</p>
            <p><strong>Category:</strong> Associate Governor</p>
        </div>
        <div class="modern-modal-body">
            <h4>Committee Membership:</h4>
            <ul>
                <li>Associate Member of Full Governing Body (FGB)</li>
                <li>Member of Administration Committee</li>
            </ul>
            <h4>Background:</h4>
            <p>As an Associate Governor, Mr Goldsmith provides specialist expertise and support to the governing body, contributing valuable skills and knowledge to governance processes.</p>
            <p style="margin-top: 1rem;"><a href="/assets/governors/pecuniary-interests.pdf" target="_blank">Pecuniary Interests</a></p>
        </div>
    </div>
</div>

<!-- Vacancies Modal -->
<div id="vacancies-modern-modal" class="modern-modal">
    <div class="modern-modal-content">
        <button class="modern-modal-close" onclick="closeVacanciesModal()">&times;</button>
        <div class="modern-modal-header">
            <h2 class="modern-modal-title">Governor Vacancies</h2>
            <p>Below are the currently available governor positions.</p>
        </div>
        <div class="modern-modal-body">
            <h4>Current Vacancies:</h4>
            <ul>
                <li><strong>Parent Governor</strong> - We are seeking a parent or carer of a current student to represent parent views on the governing body.</li>
            </ul>
            <p style="margin-top: 2rem;">Please complete the <a href="assets/governors/governor-application-form.doc" target="_blank">Application Form</a> and submit to our Clerk for consideration.</p>
            <p><strong>Email:</strong> <a href="mailto:Clerk@pcs.hants.sch.uk">Clerk@pcs.hants.sch.uk</a></p>
            <p style="margin-top: 1rem;"><em>Being a school governor is a rewarding way to contribute to your local community and help shape the future of education for our students.</em></p>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include("includes/footer.html") ?>

<!-- End Site Footer -->
<script src="js/vendor/libraries.min.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script src="js/app.min.js"></script>

<script>
    function openModernModal(governorId) {
        const modal = document.getElementById(governorId + '-modern-modal');
        if (modal) {
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModernModal(governorId) {
        const modal = document.getElementById(governorId + '-modern-modal');
        if (modal) {
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }

    function openVacanciesModal() {
        const modal = document.getElementById('vacancies-modern-modal');
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeVacanciesModal() {
        const modal = document.getElementById('vacancies-modern-modal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modern-modal')) {
            event.target.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
</script>
</body>
</html>