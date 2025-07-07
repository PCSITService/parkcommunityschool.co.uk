<!doctype html>
<html class="no-js" lang="en" >
<html class="no-js" lang="en">
	<head>
		<title>Park Community School | Trips</title>
		<?php include("includes/head.html") ?>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
		<style>
			/* Custom styling for the trips page */
			:root {
				--primary-color: #a3cd42;
				--primary-dark: #8da93f;
				--secondary-color: #333333;
				--text-color: #333333;
				--light-bg: #f8f9fa;
				--white: #ffffff;
				--section-padding: 40px 0;
			}
			
			/* Header section removed */
			
			/* Trip Slider Improvements */
			.trip-slider-container {
				border-radius: 8px;
				overflow: hidden;
				box-shadow: 0 5px 15px rgba(0,0,0,0.1);
				position: relative;
			}
			
			.trip-slider img {
				width: 100%;
				height: 350px;
				object-fit: cover;
				border-radius: 8px;
			}
			
			/* Interactive Trip Cards */
			.trip-category-tabs {
				display: flex;
				justify-content: center;
				margin-bottom: 30px;
				border-bottom: 1px solid #dee2e6;
				flex-wrap: wrap;
			}
			
			.trip-tab {
				padding: 10px 20px;
				cursor: pointer;
				font-weight: 600;
				margin: 0 5px;
				border-bottom: 3px solid transparent;
				transition: all 0.3s ease;
			}
			
			.trip-tab.active {
				border-bottom: 3px solid var(--primary-color);
				color: var(--primary-color);
			}
			
			.trip-tab:hover {
				border-bottom: 3px solid var(--primary-color);
				color: var(--primary-color);
			}
			
			.trip-cards-container {
				display: flex;
				flex-wrap: wrap;
				gap: 20px;
				margin-bottom: 30px;
			}
			
			.trip-card {
				flex: 1 0 300px;
				border-radius: 8px;
				overflow: hidden;
				box-shadow: 0 3px 10px rgba(0,0,0,0.1);
				transition: all 0.3s ease;
				background-color: white;
				position: relative;
				display: flex;
				flex-direction: column;
				height: 100%;
			}
			
			.trip-card:hover {
				transform: translateY(-5px);
				box-shadow: 0 10px 20px rgba(0,0,0,0.15);
			}
			
			.trip-card-img {
				height: 180px;
				overflow: hidden;
			}
			
			.trip-card-img img {
				width: 100%;
				height: 100%;
				object-fit: cover;
				transition: transform 0.5s ease;
			}
			
			.trip-card:hover .trip-card-img img {
				transform: scale(1.05);
			}
			
			.trip-badge {
				position: absolute;
				top: 10px;
				right: 10px;
				background-color: var(--primary-color);
				color: white;
				padding: 5px 10px;
				border-radius: 20px;
				font-size: 0.8rem;
				font-weight: 600;
				z-index: 2;
			}
			
			.trip-card-content {
				padding: 20px;
				flex-grow: 1;
				display: flex;
				flex-direction: column;
			}
			
			.trip-card-title {
				font-size: 1.3rem;
				margin-bottom: 10px;
				color: var(--text-color);
				font-weight: 600;
			}
			
			.trip-card-date {
				font-size: 0.9rem;
				color: #666;
				margin-bottom: 15px;
				display: flex;
				align-items: center;
			}
			
			.trip-card-date i {
				margin-right: 5px;
				color: var(--primary-color);
			}
			
			.trip-card-description {
				font-size: 0.95rem;
				color: #555;
				margin-bottom: 15px;
				flex-grow: 1;
			}
			
			.trip-details {
				display: flex;
				justify-content: space-between;
				padding-top: 15px;
				border-top: 1px solid #eee;
				margin-top: auto;
			}
			
			.trip-cost {
				font-weight: 600;
				font-size: 1.1rem;
				color: var(--text-color);
			}
			
			.trip-year-groups {
				color: #666;
				font-size: 0.9rem;
				text-align: right;
			}
			
			.trip-actions {
				display: flex;
				justify-content: space-between;
				margin-top: 15px;
			}
			
			.btn-trip {
				padding: 8px 15px;
				border-radius: 4px;
				font-weight: 600;
				text-align: center;
				transition: all 0.3s ease;
				text-decoration: none;
				display: inline-block;
				font-size: 0.9rem;
			}
			
			.btn-primary {
				background-color: var(--primary-color);
				color: white;
				border: 2px solid var(--primary-color);
			}
			
			.btn-primary:hover {
				background-color: var(--primary-dark);
				border-color: var(--primary-dark);
			}
			
			.btn-outline {
				background-color: transparent;
				color: var(--primary-color);
				border: 2px solid var(--primary-color);
			}
			
			.btn-outline:hover {
				background-color: var(--primary-color);
				color: white;
			}
			
			.btn-pay {
				background-color: #28a745;
				color: white;
				border: 2px solid #28a745;
			}
			
			.btn-pay:hover {
				background-color: #218838;
				border-color: #218838;
			}
			
			/* Trip Gallery */
			.trip-gallery {
				margin-top: 40px;
			}
			
			.gallery-heading {
				text-align: center;
				margin-bottom: 30px;
				position: relative;
			}
			
			.gallery-heading h2 {
				display: inline-block;
				padding: 0 20px;
				background-color: white;
				position: relative;
				z-index: 1;
			}
			
			.gallery-heading::after {
				content: '';
				position: absolute;
				top: 50%;
				left: 0;
				right: 0;
				height: 1px;
				background-color: #ddd;
				z-index: 0;
			}
			
			.gallery-container {
				display: grid;
				grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
				gap: 10px;
				margin-bottom: 30px;
			}
			
			.gallery-item {
				border-radius: 8px;
				overflow: hidden;
				height: 180px;
			}
			
			.gallery-item img {
				width: 100%;
				height: 100%;
				object-fit: cover;
				transition: transform 0.3s ease;
			}
			
			.gallery-item:hover img {
				transform: scale(1.05);
			}
			
			/* Trip FAQ Section */
			.faq-section {
				margin: 50px 0;
				background-color: var(--light-bg);
				padding: 40px 0;
			}
			
			.faq-container {
				max-width: 800px;
				margin: 0 auto;
			}
			
			.faq-item {
				margin-bottom: 15px;
				border-radius: 8px;
				overflow: hidden;
				box-shadow: 0 2px 5px rgba(0,0,0,0.05);
			}
			
			.faq-question {
				background-color: white;
				padding: 15px 20px;
				cursor: pointer;
				font-weight: 600;
				display: flex;
				justify-content: space-between;
				align-items: center;
				transition: background-color 0.3s ease;
			}
			
			.faq-question:hover {
				background-color: #f5f5f5;
			}
			
			.faq-question i {
				transition: transform 0.3s ease;
			}
			
			.faq-answer {
				padding: 0 20px;
				max-height: 0;
				overflow: hidden;
				transition: max-height 0.3s ease, padding 0.3s ease;
				background-color: white;
			}
			
			.faq-item.active .faq-question {
				background-color: var(--primary-color);
				color: white;
			}
			
			.faq-item.active .faq-question i {
				transform: rotate(180deg);
			}
			
			.faq-item.active .faq-answer {
				max-height: 1000px;
				padding: 15px 20px;
			}
			
			/* Trip Timeline */
			.timeline-section {
				margin: 50px 0;
				position: relative;
			}
			
			.timeline-container {
				position: relative;
			}
			
			.timeline-container::before {
				content: '';
				position: absolute;
				top: 0;
				bottom: 0;
				left: 50%;
				width: 4px;
				background-color: var(--primary-color);
				transform: translateX(-50%);
			}
			
			.timeline-item {
				margin-bottom: 50px;
				position: relative;
				width: 50%;
				padding: 0 40px;
			}
			
			.timeline-item:nth-child(odd) {
				left: 0;
				text-align: right;
			}
			
			.timeline-item:nth-child(even) {
				left: 50%;
				text-align: left;
			}
			
			.timeline-item::before {
				content: '';
				position: absolute;
				width: 20px;
				height: 20px;
				background-color: white;
				border: 4px solid var(--primary-color);
				border-radius: 50%;
				top: 0;
			}
			
			.timeline-item:nth-child(odd)::before {
				right: -10px;
			}
			
			.timeline-item:nth-child(even)::before {
				left: -10px;
			}
			
			.timeline-date {
				font-weight: 600;
				margin-bottom: 5px;
				color: var(--primary-color);
			}
			
			.timeline-title {
				font-size: 1.1rem;
				margin-bottom: 10px;
			}
			
			.timeline-content {
				background-color: white;
				padding: 20px;
				border-radius: 8px;
				box-shadow: 0 3px 10px rgba(0,0,0,0.1);
			}
			
			/* Trip Planning Tools */
			.planning-tools {
				background-color: var(--light-bg);
				padding: 40px 0;
				margin: 50px 0 30px;
			}
			
			.tool-item {
				text-align: center;
				padding: 20px;
				transition: all 0.3s ease;
			}
			
			.tool-icon {
				font-size: 2.5rem;
				color: var(--primary-color);
				margin-bottom: 15px;
			}
			
			.tool-title {
				font-weight: 600;
				margin-bottom: 10px;
			}
			
			.tool-description {
				color: #666;
				margin-bottom: 15px;
			}
			
			/* Calendar Integration */
			.calendar-container {
				margin: 40px 0;
				border-radius: 8px;
				overflow: hidden;
				box-shadow: 0 3px 15px rgba(0,0,0,0.1);
			}
			
			/* Notification System */
			.notification-signup {
				background-color: var(--primary-color);
				color: white;
				padding: 30px;
				border-radius: 8px;
				margin: 40px 0;
				text-align: center;
			}
			
			.notification-title {
				font-size: 1.5rem;
				margin-bottom: 15px;
			}
			
			.notification-form {
				max-width: 500px;
				margin: 0 auto;
				display: flex;
				flex-wrap: wrap;
				gap: 10px;
				justify-content: center;
			}
			
			.notification-input {
				flex: 1 0 250px;
				padding: 10px 15px;
				border: none;
				border-radius: 4px;
			}
			
			.notification-btn {
				padding: 10px 20px;
				background-color: var(--secondary-color);
				color: white;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				font-weight: 600;
				transition: background-color 0.3s ease;
			}
			
			.notification-btn:hover {
				background-color: #444;
			}
			
			/* Responsive Adjustments */
			@media (max-width: 768px) {
				.filter-container {
					flex-wrap: wrap;
					justify-content: flex-start;
				}
				
				.filter-group {
					margin-bottom: 10px;
					flex: 1 0 100%;
				}
				
				.search-input {
					width: 60%;
				}
				
				.trip-tab {
					padding: 8px 15px;
					font-size: 0.9rem;
				}
				
				.trip-cards-container {
					justify-content: center;
				}
				
				.timeline-container::before {
					left: 40px;
				}
				
				.timeline-item {
					width: 100%;
					left: 0 !important;
					text-align: left !important;
					padding-left: 70px;
					padding-right: 20px;
				}
				
				.timeline-item::before {
					left: 30px !important;
				}
			}
			
			/* Filter System with improved alignment */
			.filter-section {
				margin: 30px 0;
			}
			
			.filter-container {
				display: flex;
				flex-wrap: nowrap;
				gap: 15px;
				margin-bottom: 20px;
				align-items: center;
				justify-content: center;
			}
			
			.filter-label {
				font-weight: 600;
				margin-right: 5px;
				white-space: nowrap;
				line-height: 40px;
				vertical-align: middle;
			}
			
			.filter-group {
				display: flex;
				align-items: center;
				white-space: nowrap;
			}
			
			.filter-select,
			.search-input,
			.filter-btn {
				box-sizing: border-box;
				height: 40px;
				vertical-align: middle;
				line-height: normal;
			}
			
			.filter-select {
				padding: 0 15px;
				border: 1px solid #ddd;
				border-radius: 4px;
				background-color: white;
				margin: 0 10px 0 5px;
				appearance: menulist;
			}
			
			.filter-btn {
				padding: 0 15px;
				background-color: var(--primary-color);
				color: white;
				border: none;
				border-radius: 4px;
				cursor: pointer;
				font-weight: 600;
				transition: background-color 0.3s ease;
				white-space: nowrap;
				display: inline-flex;
				align-items: center;
				justify-content: center;
			}
			
			.filter-btn:hover {
				background-color: var(--primary-dark);
			}
			
			.filter-btn i {
				margin-right: 5px;
			}
			
			.search-input {
				padding: 0 15px;
				border: 1px solid #ddd;
				border-radius: 4px;
				width: 200px;
				margin-right: 5px;
			}
			
			/* Category Tab Content */
			.trip-content {
				display: none;
			}
			
			.trip-content.active {
				display: block;
			}
			
			/* Trip Calendar Toggle */
			.view-toggle {
				display: flex;
				justify-content: center;
				margin-bottom: 20px;
			}
			
			.view-toggle-btn {
				padding: 8px 15px;
				border: 1px solid #ddd;
				background-color: white;
				cursor: pointer;
				transition: all 0.3s ease;
			}
			
			.view-toggle-btn:first-child {
				border-radius: 4px 0 0 4px;
				border-right: none;
			}
			
			.view-toggle-btn:last-child {
				border-radius: 0 4px 4px 0;
			}
			
			.view-toggle-btn.active {
				background-color: var(--primary-color);
				color: white;
				border-color: var(--primary-color);
			}
			
			.calendar-view, .list-view {
				display: none;
			}
			
			.calendar-view.active, .list-view.active {
				display: block;
			}
		</style>
	</head>
	<body class="page-parent">
		<!-- NAVIGATION -->
		<?php include("includes/topnav.html") ?>
		
		<!-- TOP CONTENT -->
		<section>
			<div class="row">
				<br>
				<div class="medium-7 columns">
					<h2>Our Trips are Amazing!</h2>
					<p>All trips at Park are carefully planned with student safety as our top priority. We offer diverse learning experiences beyond the classroom.</p>
					<p>Our trips are designed to enhance learning, develop life skills, and create lasting memories for all students.</p>
					<p>Payment is easy - pay online at <a href="//www.scopay.com/pcs" target="_blank">SCO Online Payments</a> or at reception with card, cash or cheque.</p>
					
					<!-- Trip Planning Tools (Quick Access) -->
					<div style="margin-top: 20px; display: flex; flex-wrap: wrap; gap: 10px;">
						<a href="//www.scopay.com/pcs" target="_blank" style="display: inline-block; background-color: #5cb85c; color: white; text-decoration: none; padding: 15px 35px; border-radius: 8px; font-weight: 600; font-size: 1.1rem; transition: all 0.3s; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
							<i class="fas fa-credit-card" style="margin-right: 10px;"></i>
							Make a Payment
						</a>
					</div>
					<br>
				</div>
				<div class="medium-5 columns">
					<div class="trip-slider-container">
						<div class="trip-slider">
							<div><img src="images/trips/newyork.jpg" alt="Students visiting New York"></div>
							<div><img src="images/trips/kewgardens.jpg" alt="School trip to Kew Gardens"></div>
							<div><img src="images/trips/tanzania.jpg" alt="Educational trip to Tanzania"></div>
							<div><img src="images/trips/disney1.jpg" alt="Students at Disney"></div>
							<div><img src="images/trips/farm1.jpg" alt="Learning at the farm"></div>
							<div><img src="images/trips/winchester1.jpg" alt="Trip to Winchester"></div>
							<div><img src="images/trips/nyc1.jpg" alt="New York City experience"></div>
							<div><img src="images/trips/nyc2.jpg" alt="Students in Times Square"></div>
						</div>
					</div>
				</div>
			</div>
			<br>
		</section>

		
		<!-- Installment Plan Modal -->
		<div id="installmentModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 1000;">
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; border-radius: 12px; max-width: 650px; width: 90%; max-height: 90vh; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column;">
				<!-- Header -->
				<div style="background: linear-gradient(135deg, #4a90a4 0%, #5ba0b5 100%); color: white; padding: 25px 30px; position: relative; flex-shrink: 0;">
					<h2 id="modalTitle" style="margin: 0; font-size: 1.8rem; font-weight: 500;">Installment Plan</h2>
					<button onclick="closeInstallmentModal()" style="position: absolute; top: 15px; right: 20px; background: none; border: none; font-size: 28px; cursor: pointer; color: white; opacity: 0.8; transition: opacity 0.3s;">&times;</button>
				</div>
				
				<!-- Content -->
				<div style="padding: 30px; overflow-y: auto; flex-grow: 1;">
					<div id="modalContent">
						<!-- Content will be populated by JavaScript -->
					</div>
				</div>
				
				<!-- Footer -->
				<div style="background-color: #f8f9fa; padding: 25px 30px 30px 30px; text-align: center; border-top: 1px solid #e9ecef; flex-shrink: 0;">
					<button onclick="closeInstallmentModal()" style="background-color: #4a90a4; color: white; border: none; padding: 12px 30px; border-radius: 6px; cursor: pointer; font-weight: 500; font-size: 1rem; transition: background-color 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">Close</button>
					<a href="http://www.scopay.com/pcs" target="_blank" style="display: inline-block; margin-left: 15px; background-color: #5cb85c; color: white; text-decoration: none; padding: 12px 30px; border-radius: 6px; font-weight: 500; font-size: 1rem; transition: background-color 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">Pay Online</a>
				</div>
			</div>
		</div>
		
		<!-- Letters Modal -->
		<div id="lettersModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 1000;">
			<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; border-radius: 12px; max-width: 650px; width: 90%; max-height: 90vh; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column;">
				<!-- Header -->
				<div style="background: linear-gradient(135deg, #4a90a4 0%, #5ba0b5 100%); color: white; padding: 25px 30px; position: relative; flex-shrink: 0;">
					<h2 id="lettersModalTitle" style="margin: 0; font-size: 1.8rem; font-weight: 500;">Trip Letters</h2>
					<button onclick="closeLettersModal()" style="position: absolute; top: 15px; right: 20px; background: none; border: none; font-size: 28px; cursor: pointer; color: white; opacity: 0.8; transition: opacity 0.3s;">&times;</button>
				</div>
				
				<!-- Content -->
				<div style="padding: 30px; overflow-y: auto; flex-grow: 1;">
					<div id="lettersModalContent">
						<!-- Content will be populated by JavaScript -->
					</div>
				</div>
				
				<!-- Footer -->
				<div style="background-color: #f8f9fa; padding: 25px 30px 30px 30px; text-align: center; border-top: 1px solid #e9ecef; flex-shrink: 0;">
					<button onclick="closeLettersModal()" style="background-color: #4a90a4; color: white; border: none; padding: 12px 30px; border-radius: 6px; cursor: pointer; font-weight: 500; font-size: 1rem; transition: background-color 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">Close</button>
				</div>
			</div>
		</div>
		


		<!-- SCHOOL TRIPS SECTION -->
		<section style="background-color: #4a90a4; color: white; padding: 60px 0;">
			<div class="row">
				<div class="large-12 columns">
					<h2 style="text-align: center; color: white; margin-bottom: 50px; font-size: 2.5rem; font-weight: 300;">School Trips</h2>
					
					<!-- Trip Card 1 - Krakow Poland (July 8-11) -->
					<div style="margin-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.2);">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">Krakow, Poland - July 2025</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Humanities Residential Visit: Auschwitz - Birkenau, Poland.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('krakow')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('krakow')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Tuesday 8th July 2025 - Friday 11th July 2025</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Barney Pycroft</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £579</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> All Years</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Trip Card 2 - Barcelona 2026 (October 13-17, 2025) -->
					<div style="margin-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.2);">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">Barcelona 2026 - MFL Residential Trip</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Modern Foreign Languages residential trip to Barcelona.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('barcelona')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('barcelona')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Monday 13th October 2025 - Friday 17th October 2025</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Marie Dermy</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £600</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> Year 9's & 10's</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Trip Card 3 - Bude Activity Centre (October 13-17) -->
					<div style="margin-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.2);">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">2024 - 2025 Year 7 - Bude Activity Centre Residential</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Students in Year 7 will visit Bude Activity Centre Residential.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('bude')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('bude')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Monday 13th October 2025 - Friday 17th October 2025</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Edd Harrison</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £395</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> Year 7</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Trip Card 4 - Disney 2026 (February 3-6, 2026) -->
					<div style="margin-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.2);">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">Disney 2026</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Educational and recreational trip to Disney for Year 10 students.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('disney')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('disney')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Tuesday 3rd February 2026 - Friday 6th February 2026</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Soo Bannard & Marie Dermy</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £450</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> Year 10 (From Sept 2025)</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Trip Card 5 - New York 2026 (March 29 - April 2, 2026) -->
					<div style="margin-bottom: 40px; border-bottom: 1px solid rgba(255,255,255,0.2);">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">New York 2026</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Educational trip to New York City for Year 11 students.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('newyork')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('newyork')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Sunday 29th March 2026 - Thursday 2nd April 2026</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Soo Bannard</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £1625 (15-year-olds) / £1710 (16-year-olds)</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> Year 11 (From Sept 2025)</p>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Trip Card 6 - Isle of Wight Geology Fieldtrip (July 17, 2026) -->
					<div style="margin-bottom: 40px;">
						<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 30px; flex-wrap: wrap;">
							<div style="flex: 2; margin-right: 40px; min-width: 300px;">
								<h3 style="color: white; font-size: 1.5rem; margin-bottom: 15px; font-weight: 400;">Isle of Wight Geology Fieldtrip</h3>
								<div style="margin-bottom: 20px;">
									<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">Summary</h4>
									<p style="color: rgba(255,255,255,0.9); line-height: 1.6;">Geology fieldtrip to the Isle of Wight for Year 10 students.</p>
								</div>
								<div style="display: flex; gap: 15px; flex-wrap: nowrap; justify-content: flex-start; align-items: center;">
									<button onclick="showInstallmentPlan('isleofwight')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Payment Plan</button>
									<button onclick="showLetters('isleofwight')" style="background-color: #5cb85c; color: white; border: none; padding: 12px 20px; border-radius: 4px; cursor: pointer; font-weight: 500; font-size: 1rem; white-space: nowrap; flex-shrink: 0; min-width: 120px; height: 44px; display: flex; align-items: center; justify-content: center;">Letters</button>
								</div>
							</div>
							<div style="flex: 1; min-width: 250px;">
								<h4 style="color: rgba(255,255,255,0.8); font-size: 1rem; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">Details</h4>
								<div style="line-height: 1.8; color: rgba(255,255,255,0.9);">
									<p style="margin: 5px 0;"><strong>Date:</strong> Thursday 17th July 2026</p>
									<p style="margin: 5px 0;"><strong>Lead:</strong> Joshua Macefield</p>
									<p style="margin: 5px 0;"><strong>Total Cost:</strong> £12.50</p>
									<p style="margin: 5px 0;"><strong>Year Group:</strong> Year 10</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<!-- FOOTER -->
		<?php include("includes/footer.html") ?>
		<!-- End Site Footer -->
		<script src="js/vendor/libraries.min.js"></script>
		<script src="js/vendor/foundation.min.js"></script>
		<script src="js/app.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				// Slick slider initialization
				$('.trip-slider').slick({
					autoplay: true,
					dots: true,
					fade: true,
					autoplaySpeed: 5000
				});
				
				// Fancybox initialization
				Fancybox.bind("[data-fancybox]", {
					// Options here
				});
				
				// Tab switching
				$('.trip-tab').on('click', function() {
					const target = $(this).data('target');
					
					// Update active tab
					$('.trip-tab').removeClass('active');
					$(this).addClass('active');
					
					// Show corresponding content
					$('.trip-content').removeClass('active');
					$('#' + target).addClass('active');
				});
				
				// View toggle
				$('.view-toggle-btn').on('click', function() {
					const view = $(this).data('view');
					
					// Update active button
					$('.view-toggle-btn').removeClass('active');
					$(this).addClass('active');
					 
					// Show corresponding view
					$('.calendar-view, .list-view').removeClass('active');
					$('.' + view).addClass('active');
				});
				
				// FAQ accordion
				$('.faq-question').on('click', function() {
					const faqItem = $(this).parent();
					
					if (faqItem.hasClass('active')) {
						faqItem.removeClass('active');
					} else {
						$('.faq-item').removeClass('active');
						faqItem.addClass('active');
					}
				});
				
				// Search functionality - keep references to the new inline elements
				$('#search-btn').on('click', function() {
					const searchTerm = $(this).prev('input').val().toLowerCase();
					
					// Basic search implementation - would be enhanced with real data
					if (searchTerm !== '') {
						alert('Search functionality would filter trips based on: "' + searchTerm + '"');
					}
				});
			});
			
			// Installment Plan Modal Functions
			function showInstallmentPlan(tripType) {
				const modal = document.getElementById('installmentModal');
				const title = document.getElementById('modalTitle');
				const content = document.getElementById('modalContent');
				
				const installmentPlans = {
					krakow: {
						title: 'Krakow, Poland - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #4a90a4;">Total Cost: £579</h3>
								</div>
							</div>
							
							<h4 style="color: #4a90a4; margin-bottom: 20px; font-size: 1.2rem; text-align: center;">📅 Payment Schedule</h4>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%); padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
									<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
										<div>
											<strong style="color: #2d5a2d; font-size: 1.1rem;">💰 Deposit</strong>
											<div style="color: #666; font-size: 0.9rem; margin-top: 2px;">Initial payment to secure place</div>
										</div>
										<div style="text-align: right;">
											<div style="font-size: 1.3rem; font-weight: bold; color: #2d5a2d;">£150</div>
											<div style="font-size: 0.9rem; color: #666;">Due: Jan 31, 2025</div>
										</div>
									</div>
								</div>
								
								<div style="background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
									<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
										<div>
											<strong style="color: #856404; font-size: 1.1rem;">💳 Second Payment</strong>
											<div style="color: #666; font-size: 0.9rem; margin-top: 2px;">Midway payment</div>
										</div>
										<div style="text-align: right;">
											<div style="font-size: 1.3rem; font-weight: bold; color: #856404;">£200</div>
											<div style="font-size: 0.9rem; color: #666;">Due: Mar 31, 2025</div>
										</div>
									</div>
								</div>
								
								<div style="background: linear-gradient(135deg, #d1ecf1 0%, #e1f3f7 100%); padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
									<div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
										<div>
											<strong style="color: #2c5f6f; font-size: 1.1rem;">✅ Final Payment</strong>
											<div style="color: #666; font-size: 0.9rem; margin-top: 2px;">Complete your booking</div>
										</div>
										<div style="text-align: right;">
											<div style="font-size: 1.3rem; font-weight: bold; color: #2c5f6f;">£229</div>
											<div style="font-size: 0.9rem; color: #666;">Due: May 31, 2025</div>
										</div>
									</div>
								</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">💡 Payment Information</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">All payments can be made online through our secure payment portal or at the school reception using card, cash, or cheque.</p>
							</div>
						`
					},
					barcelona: {
						title: 'Barcelona 2026 - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #4a90a4;">Total Cost: £600</h3>
								</div>
							</div>
							
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 4rem; margin-bottom: 15px;">⏰</div>
								<h4 style="color: #4a90a4; margin: 0 0 15px 0; font-size: 1.3rem;">Payment Plan Coming Soon</h4>
							</div>
							
							<div style="background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 25px; border-radius: 8px; border-left: 4px solid #ffc107; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: center;">
								<strong style="color: #856404; font-size: 1.1rem;">📋 Payment plan will be available once the trip details are finalized</strong>
								<div style="color: #666; margin-top: 10px; line-height: 1.5;">We're organizing the details for this MFL residential trip. Full payment information including installment options will be provided closer to the trip date.</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">📧 Stay Updated</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">More information including pricing and payment schedules will be sent to parents via email and posted on the school website.</p>
							</div>
						`
					},
					bude: {
						title: 'Bude Activity Centre - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #856404;">Total Cost: £395</h3>
								</div>
							</div>
							
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 4rem; margin-bottom: 15px;">⏰</div>
								<h4 style="color: #4a90a4; margin: 0 0 15px 0; font-size: 1.3rem;">Payment Plan Coming Soon</h4>
							</div>
							
							<div style="background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 25px; border-radius: 8px; border-left: 4px solid #ffc107; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: center;">
								<strong style="color: #856404; font-size: 1.1rem;">📋 Payment plan will be available once the total cost is confirmed</strong>
								<div style="color: #666; margin-top: 10px; line-height: 1.5;">We're finalizing the details for this residential trip. Full payment information including installment options will be provided closer to the trip date.</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">📧 Stay Updated</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">More information including pricing and payment schedules will be sent to parents via email and posted on the school website.</p>
							</div>
						`
					},
					disney: {
						title: 'Disney 2026 - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #4a90a4;">Total Cost: £450</h3>
								</div>
							</div>
							
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 4rem; margin-bottom: 15px;">⏰</div>
								<h4 style="color: #4a90a4; margin: 0 0 15px 0; font-size: 1.3rem;">Payment Plan Coming Soon</h4>
							</div>
							
							<div style="background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 25px; border-radius: 8px; border-left: 4px solid #ffc107; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: center;">
								<strong style="color: #856404; font-size: 1.1rem;">📋 Payment plan will be available once the trip details are finalized</strong>
								<div style="color: #666; margin-top: 10px; line-height: 1.5;">We're organizing the details for this Disney trip. Full payment information including installment options will be provided closer to the trip date.</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">📧 Stay Updated</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">More information including pricing and payment schedules will be sent to parents via email and posted on the school website.</p>
							</div>
						`
					},
					newyork: {
						title: 'New York 2026 - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #4a90a4;">Total Cost: £1625 / £1710</h3>
									<p style="margin: 5px 0 0 0; font-size: 0.9rem; color: #666;">£1625 for 15-year-olds, £1710 for 16-year-olds</p>
								</div>
							</div>
							
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 4rem; margin-bottom: 15px;">⏰</div>
								<h4 style="color: #4a90a4; margin: 0 0 15px 0; font-size: 1.3rem;">Payment Plan Coming Soon</h4>
							</div>
							
							<div style="background: linear-gradient(135deg, #fff3cd 0%, #fef8e1 100%); padding: 25px; border-radius: 8px; border-left: 4px solid #ffc107; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: center;">
								<strong style="color: #856404; font-size: 1.1rem;">📋 Payment plan will be available once the trip details are finalized</strong>
								<div style="color: #666; margin-top: 10px; line-height: 1.5;">We're organizing the details for this New York trip. Full payment information including installment options will be provided closer to the trip date. Note: £85 adult supplement applies for those who turn 16 before departure.</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">📧 Stay Updated</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">More information including pricing and payment schedules will be sent to parents via email and posted on the school website.</p>
							</div>
						`
					},
					isleofwight: {
						title: 'Isle of Wight Geology Fieldtrip - Payment Plan',
						content: `
							<div style="text-align: center; margin-bottom: 25px;">
								<div style="display: inline-block; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 15px 30px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<h3 style="margin: 0; font-size: 1.5rem; color: #4a90a4;">Total Cost: £12.50</h3>
								</div>
							</div>
							
							<h4 style="color: #4a90a4; margin-bottom: 20px; font-size: 1.2rem; text-align: center;">📅 Payment Schedule</h4>
							
							<div style="background: linear-gradient(135deg, #e8f5e8 0%, #f0f8f0 100%); padding: 25px; border-radius: 8px; border-left: 4px solid #5cb85c; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: center;">
								<div style="margin-bottom: 15px;">
									<strong style="color: #2d5a2d; font-size: 1.2rem;">💰 Full Payment</strong>
								</div>
								<div style="font-size: 1.5rem; font-weight: bold; color: #2d5a2d; margin-bottom: 10px;">£12.50</div>
								<div style="color: #666; font-size: 1rem;">Due by: July 10, 2026</div>
							</div>
							
							<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 25px; border: 1px solid #e9ecef;">
								<h5 style="margin: 0 0 10px 0; color: #4a90a4;">💡 Payment Information</h5>
								<p style="margin: 0; color: #666; line-height: 1.5;">Payment can be made online through our secure payment portal or at the school reception.</p>
							</div>
						`
					}
				};
				
				const plan = installmentPlans[tripType];
				if (plan) {
					title.textContent = plan.title;
					content.innerHTML = plan.content;
					modal.style.display = 'block';
				}
			}
			
			function closeInstallmentModal() {
				document.getElementById('installmentModal').style.display = 'none';
			}
			
			// Letters Modal Functions
			function showLetters(tripType) {
				const modal = document.getElementById('lettersModal');
				const title = document.getElementById('lettersModalTitle');
				const content = document.getElementById('lettersModalContent');
				
				const tripLetters = {
					krakow: {
						title: 'Krakow, Poland - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter1.pdf</h4>
										<a href="assets/trips/letters/krakow/letter1.pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/krakow/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter3.pdf</h4>
										<a href="assets/trips/letters/krakow/letter3.pdf" target="_blank" style="background-color: #ffc107; color: #333; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #dc3545;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter4.pdf</h4>
										<a href="assets/trips/letters/krakow/letter4.pdf" target="_blank" style="background-color: #dc3545; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					},
					barcelona: {
						title: 'Barcelona 2026 - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter1.pdf</h4>
										<a href="assets/trips/letters/barcelona/letter1.pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/barcelona/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter3.pdf</h4>
										<a href="assets/trips/letters/barcelona/letter3.pdf" target="_blank" style="background-color: #ffc107; color: #333; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					},
					bude: {
						title: 'Bude Activity Centre - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter1.pdf</h4>
										<a href="assets/trips/letters/bude/letter1.pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/bude/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter3.pdf</h4>
										<a href="assets/trips/letters/bude/letter3.pdf" target="_blank" style="background-color: #ffc107; color: #333; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #dc3545;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter4.pdf</h4>
										<a href="assets/trips/letters/bude/letter4.pdf" target="_blank" style="background-color: #dc3545; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					},
					disney: {
						title: 'Disney 2026 - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">Initial Letter</h4>
										<a href="assets/trips/letters/disney-2026/Disney 2026 - initial letter June 2025.pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/disney-2026/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter3.pdf</h4>
										<a href="assets/trips/letters/disney/letter3.pdf" target="_blank" style="background-color: #ffc107; color: #333; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					},
					newyork: {
						title: 'New York 2026 - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">Initial Letter</h4>
										<a href="assets/trips/letters/newyork-2026/New York 2026 - initial letter (June 2025).pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/newyork/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter3.pdf</h4>
										<a href="assets/trips/letters/newyork/letter3.pdf" target="_blank" style="background-color: #ffc107; color: #333; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #dc3545;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter4.pdf</h4>
										<a href="assets/trips/letters/newyork/letter4.pdf" target="_blank" style="background-color: #dc3545; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					},
					isleofwight: {
						title: 'Isle of Wight Geology Fieldtrip - Trip Letters',
						content: `
							<div style="text-align: center; margin-bottom: 30px;">
								<div style="font-size: 3rem; margin-bottom: 15px;">📋</div>
								<h3 style="color: #4a90a4; margin: 0;">Available Letters</h3>
							</div>
							
							<div style="display: flex; flex-direction: column; gap: 15px;">
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #4a90a4;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">Initial Letter</h4>
										<a href="assets/trips/letters/iow-2025/Geology IOW Fieldtrip Parent Letter 17 06 25.pdf" target="_blank" style="background-color: #4a90a4; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
								
								<div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #5cb85c;">
									<div style="display: flex; justify-content: space-between; align-items: center;">
										<h4 style="margin: 0; color: #333;">letter2.pdf</h4>
										<a href="assets/trips/letters/isleofwight/letter2.pdf" target="_blank" style="background-color: #5cb85c; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; font-size: 0.9rem; text-decoration: none; display: inline-block;">Download</a>
									</div>
								</div>
							</div>
						`
					}
				};
				
				const letters = tripLetters[tripType];
				if (letters) {
					title.textContent = letters.title;
					content.innerHTML = letters.content;
					modal.style.display = 'block';
				}
			}
			
			function closeLettersModal() {
				document.getElementById('lettersModal').style.display = 'none';
			}
			
			// Close modal when clicking outside of it
			window.onclick = function(event) {
				const installmentModal = document.getElementById('installmentModal');
				const lettersModal = document.getElementById('lettersModal');
				if (event.target === installmentModal) {
					closeInstallmentModal();
				}
				if (event.target === lettersModal) {
					closeLettersModal();
				}
			}
		</script>
		
		<script type="text/javascript">
		    $(document).ready(function(){
		      $('.trip-slider').slick({
		        autoplay: true,
		        dots: true,
		        fade: true
		      });
		    });
		</script>

	</body>
</html>