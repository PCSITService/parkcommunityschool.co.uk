<!doctype html>
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
					<p>At Park Community School, we believe in providing our students with diverse and enriching experiences beyond the classroom. Our carefully planned trips are designed to enhance learning, develop life skills, and create lasting memories.</p>
					<p>All trips are meticulously organized with student safety as our highest priority. Our experienced staff ensures that each excursion offers meaningful educational value while being enjoyable and accessible.</p>
					<p>The easiest way to pay for trips is online at <a href="//www.scopay.com/pcs" target="_blank">SCO Online Payments</a>. Alternatively, payment can be made at reception using card, cash or cheque made payable to Hampshire County Council.</p>
					
					<!-- Trip Planning Tools (Quick Access) -->
					<div style="margin-top: 20px; display: flex; flex-wrap: wrap; gap: 10px;">
						<a href="#upcoming-trips" class="btn-trip btn-primary"><i class="fas fa-calendar-alt"></i> View Upcoming Trips</a>
						<a href="#trip-faq" class="btn-trip btn-outline"><i class="fas fa-question-circle"></i> Trip FAQs</a>
						<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Make a Payment</a>
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
		
		<!-- INTERACTIVE TRIP SECTION -->
		<section id="upcoming-trips">
			<div class="row">
				<div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
			</div>
			
			<div class="row">
				<div class="large-12 columns">
					<h2 style="text-align: center; margin-bottom: 30px;">Explore Our Trips</h2>
					
					<!-- Trip Category Tabs -->
					<div class="trip-category-tabs">
						<div class="trip-tab active" data-target="upcoming-content">Upcoming Trips</div>
						<div class="trip-tab" data-target="overseas-content">Overseas Trips</div>
						<div class="trip-tab" data-target="daytrips-content">Day Trips</div>
						<div class="trip-tab" data-target="past-content">Past Trips</div>
					</div>
					
					<!-- Filter Section with inline styles for precise alignment -->
					<div class="filter-section">
						<div style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px; flex-wrap: nowrap;">
							<div style="display: flex; align-items: center; margin-right: 15px;">
								<label for="year-filter" style="font-weight: 600; margin-right: 5px; white-space: nowrap; position: relative; top: -4px;">Year Group:</label>
								<select id="year-filter" style="height: 38px; border: 1px solid #ddd; border-radius: 4px; padding: 0 15px;">
									<option value="all">All Years</option>
									<option value="7">Year 7</option>
									<option value="8">Year 8</option>
									<option value="9">Year 9</option>
									<option value="10">Year 10</option>
									<option value="11">Year 11</option>
								</select>
							</div>
							
							<div style="display: flex; align-items: center;">
								<input type="text" placeholder="Search trips..." style="height: 38px; border: 1px solid #ddd; border-radius: 4px; padding: 0 15px; width: 200px; margin-right: 5px;">
								<button id="search-btn" style="height: 38px; background-color: #a3cd42; color: white; border: none; border-radius: 4px; padding: 0 15px; font-weight: 600; display: flex; align-items: center; justify-content: center; cursor: pointer;">
									<i class="fas fa-search" style="margin-right: 5px;"></i> Search
								</button>
							</div>
						</div>
						
						<!-- View Toggle Buttons -->
						<div class="view-toggle">
							<div class="view-toggle-btn active" data-view="list-view"><i class="fas fa-list"></i> List View</div>
							<div class="view-toggle-btn" data-view="calendar-view"><i class="fas fa-calendar-alt"></i> Calendar View</div>
						</div>
					</div>
					
					<!-- Tab Content - Upcoming Trips -->
					<div class="trip-content active" id="upcoming-content">
						<!-- List View -->
						<div class="list-view active">
							<div class="trip-cards-container">
								<!-- Trip Card 1 -->
								<div class="trip-card">
									<div class="trip-badge">Spaces Available</div>
									<div class="trip-card-img">
										<a href="images/trips/france.jpg" data-fancybox="france-trip">
											<img src="images/trips/france.jpg" alt="French Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">French Language Immersion</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> June 15-20, 2025
										</div>
										<p class="trip-card-description">A 6-day immersive experience in France for language students to practice their French with native speakers, explore cultural sites, and enjoy authentic cuisine.</p>
										<div class="trip-details">
											<div class="trip-cost">£450</div>
											<div class="trip-year-groups">Years 9-11</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-1"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
								
								<!-- Trip Card 2 -->
								<div class="trip-card">
									<div class="trip-badge">Limited Places</div>
									<div class="trip-card-img">
										<a href="images/trips/science-museum.jpg" data-fancybox="science-trip">
											<img src="images/trips/science-museum.jpg" alt="Science Museum Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">Science Museum Visit</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> April 12, 2025
										</div>
										<p class="trip-card-description">A day trip to the Science Museum in London to explore interactive exhibits, attend a special workshop, and enhance classroom learning with hands-on experiences.</p>
										<div class="trip-details">
											<div class="trip-cost">£35</div>
											<div class="trip-year-groups">Years 7-8</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-2"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
								
								<!-- Trip Card 3 -->
								<div class="trip-card">
									<div class="trip-badge">New</div>
									<div class="trip-card-img">
										<a href="images/trips/newyork.jpg" data-fancybox="newyork-trip">
											<img src="images/trips/newyork.jpg" alt="New York Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">New York Arts & Culture</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> July 10-17, 2025
										</div>
										<p class="trip-card-description">An incredible opportunity to experience the vibrant arts and culture scene of New York City, including Broadway shows, museum visits, and iconic landmarks.</p>
										<div class="trip-details">
											<div class="trip-cost">£1,250</div>
											<div class="trip-year-groups">Years 10-11</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-3"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Calendar View -->
						<div class="calendar-view">
							<div class="calendar-container">
								<iframe src="https://calendar.google.com/calendar/embed?src=c_classroom12345abcde%40group.calendar.google.com&ctz=Europe%2FLondon" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
							</div>
							<p style="text-align: center; margin-top: 10px; font-style: italic;">Note: Add our school trips calendar to your own Google Calendar to stay updated automatically.</p>
						</div>
					</div>
					
					<!-- Tab Content - Overseas Trips -->
					<div class="trip-content" id="overseas-content">
						<div class="list-view active">
							<div class="trip-cards-container">
								<!-- Trip Card 1 (from above) -->
								<div class="trip-card">
									<div class="trip-badge">Spaces Available</div>
									<div class="trip-card-img">
										<a href="images/trips/france.jpg" data-fancybox="france-trip">
											<img src="images/trips/france.jpg" alt="French Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">French Language Immersion</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> June 15-20, 2025
										</div>
										<p class="trip-card-description">A 6-day immersive experience in France for language students to practice their French with native speakers, explore cultural sites, and enjoy authentic cuisine.</p>
										<div class="trip-details">
											<div class="trip-cost">£450</div>
											<div class="trip-year-groups">Years 9-11</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-1"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
								
								<!-- Trip Card 3 (from above) -->
								<div class="trip-card">
									<div class="trip-badge">New</div>
									<div class="trip-card-img">
										<a href="images/trips/newyork.jpg" data-fancybox="newyork-trip">
											<img src="images/trips/newyork.jpg" alt="New York Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">New York Arts & Culture</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> July 10-17, 2025
										</div>
										<p class="trip-card-description">An incredible opportunity to experience the vibrant arts and culture scene of New York City, including Broadway shows, museum visits, and iconic landmarks.</p>
										<div class="trip-details">
											<div class="trip-cost">£1,250</div>
											<div class="trip-year-groups">Years 10-11</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-3"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
								
								<!-- Additional Overseas Trip -->
								<div class="trip-card">
									<div class="trip-badge">Booking Soon</div>
									<div class="trip-card-img">
										<a href="images/trips/spain.jpg" data-fancybox="spain-trip">
											<img src="images/trips/spain.jpg" alt="Spain Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">Spanish Cultural Experience</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> October 5-12, 2025
										</div>
										<p class="trip-card-description">Explore the rich cultural heritage of Spain with visits to Barcelona and Madrid. This trip offers language practice, architectural appreciation, and authentic Spanish experiences.</p>
										<div class="trip-details">
											<div class="trip-cost">£675</div>
											<div class="trip-year-groups">Years 8-10</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-4"><i class="fas fa-info-circle"></i> Details</a>
											<a href="#" class="btn-trip btn-primary"><i class="fas fa-bell"></i> Notify Me</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Calendar View (same framework) -->
						<div class="calendar-view">
							<div class="calendar-container">
								<iframe src="https://calendar.google.com/calendar/embed?src=c_classroom12345abcde%40group.calendar.google.com&ctz=Europe%2FLondon" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
							</div>
							<p style="text-align: center; margin-top: 10px; font-style: italic;">Note: Add our overseas trips calendar to your own Google Calendar to stay updated automatically.</p>
						</div>
					</div>
					
					<!-- Tab Content - Day Trips -->
					<div class="trip-content" id="daytrips-content">
						<div class="list-view active">
							<div class="trip-cards-container">
								<!-- Trip Card 2 (from above) -->
								<div class="trip-card">
									<div class="trip-badge">Limited Places</div>
									<div class="trip-card-img">
										<a href="images/trips/science-museum.jpg" data-fancybox="science-trip">
											<img src="images/trips/science-museum.jpg" alt="Science Museum Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">Science Museum Visit</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> April 12, 2025
										</div>
										<p class="trip-card-description">A day trip to the Science Museum in London to explore interactive exhibits, attend a special workshop, and enhance classroom learning with hands-on experiences.</p>
										<div class="trip-details">
											<div class="trip-cost">£35</div>
											<div class="trip-year-groups">Years 7-8</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-2"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
								
								<!-- Additional Day Trips -->
								<div class="trip-card">
									<div class="trip-badge">Free Trip</div>
									<div class="trip-card-img">
										<a href="images/trips/library.jpg" data-fancybox="library-trip">
											<img src="images/trips/library.jpg" alt="Library Visit">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">Local Library Workshop</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> March 8, 2025
										</div>
										<p class="trip-card-description">A visit to our local library for a special author talk and writing workshop. Students will gain insights into the creative writing process and research skills.</p>
										<div class="trip-details">
											<div class="trip-cost">Free</div>
											<div class="trip-year-groups">Year 7</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-5"><i class="fas fa-info-circle"></i> Details</a>
											<a href="#" class="btn-trip btn-primary"><i class="fas fa-clipboard-check"></i> Permission Form</a>
										</div>
									</div>
								</div>
								
								<div class="trip-card">
									<div class="trip-badge">New</div>
									<div class="trip-card-img">
										<a href="images/trips/theatre.jpg" data-fancybox="theatre-trip">
											<img src="images/trips/theatre.jpg" alt="Theatre Trip">
										</a>
									</div>
									<div class="trip-card-content">
										<h3 class="trip-card-title">Shakespeare Performance</h3>
										<div class="trip-card-date">
											<i class="fas fa-calendar-alt"></i> May 18, 2025
										</div>
										<p class="trip-card-description">A trip to see a professional performance of Macbeth at the local theatre. This experience will complement English Literature studies and bring the text to life.</p>
										<div class="trip-details">
											<div class="trip-cost">£25</div>
											<div class="trip-year-groups">Years 9-10</div>
										</div>
										<div class="trip-actions">
											<a href="#" class="btn-trip btn-outline" data-fancybox data-src="#trip-details-6"><i class="fas fa-info-circle"></i> Details</a>
											<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay"><i class="fas fa-credit-card"></i> Pay Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Calendar View (same framework) -->
						<div class="calendar-view">
							<div class="calendar-container">
								<iframe src="https://calendar.google.com/calendar/embed?src=c_classroom12345abcde%40group.calendar.google.com&ctz=Europe%2FLondon" style="border: 0" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
							</div>
							<p style="text-align: center; margin-top: 10px; font-style: italic;">Note: Add our day trips calendar to your own Google Calendar to stay updated automatically.</p>
						</div>
					</div>
					
					<!-- Tab Content - Past Trips -->
					<div class="trip-content" id="past-content">
						<!-- Trip Gallery -->
						<div class="trip-gallery">
							<div class="gallery-heading">
								<h2>Memories from Previous Trips</h2>
							</div>
							
							<div class="gallery-container">
								<div class="gallery-item">
									<a href="images/trips/farm1.jpg" data-fancybox="gallery">
										<img src="images/trips/farm1.jpg" alt="Farm Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/nyc1.jpg" data-fancybox="gallery">
										<img src="images/trips/nyc1.jpg" alt="New York Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/nyc2.jpg" data-fancybox="gallery">
										<img src="images/trips/nyc2.jpg" alt="New York Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/kewgardens.jpg" data-fancybox="gallery">
										<img src="images/trips/kewgardens.jpg" alt="Kew Gardens Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/tanzania.jpg" data-fancybox="gallery">
										<img src="images/trips/tanzania.jpg" alt="Tanzania Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/disney1.jpg" data-fancybox="gallery">
										<img src="images/trips/disney1.jpg" alt="Disney Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/winchester1.jpg" data-fancybox="gallery">
										<img src="images/trips/winchester1.jpg" alt="Winchester Trip">
									</a>
								</div>
								<div class="gallery-item">
									<a href="images/trips/newyork.jpg" data-fancybox="gallery">
										<img src="images/trips/newyork.jpg" alt="New York Trip">
									</a>
								</div>
							</div>
							
							<!-- Testimonials from Past Trips -->
							<div style="max-width: 800px; margin: 40px auto; padding: 30px; background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
								<h3 style="text-align: center; margin-bottom: 30px;">What Our Students Say</h3>
								
								<div style="display: flex; flex-wrap: wrap; gap: 20px;">
									<div style="flex: 1 0 300px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
										<p style="font-style: italic;">"The French trip was amazing! I got to practice my language skills with real French people and try so many new foods. It's definitely helped my confidence in speaking French."</p>
										<p style="text-align: right; font-weight: 600;">- Emma, Year 10</p>
									</div>
									
									<div style="flex: 1 0 300px; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
										<p style="font-style: italic;">"The Science Museum trip was so interesting! I loved the interactive exhibits and the planetarium show was incredible. I learned so much more than I would have just from a textbook."</p>
										<p style="text-align: right; font-weight: 600;">- James, Year 8</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- TRIP PLANNING TOOLS -->
		<section class="planning-tools">
			<div class="row">
				<div class="large-12 columns">
					<h2 style="text-align: center; margin-bottom: 30px;">Trip Planning Resources</h2>
					
					<div style="display: flex; flex-wrap: wrap; text-align: center; gap: 20px; justify-content: center;">
						<div class="tool-item" style="flex: 1 0 200px; max-width: 300px;">
							<div class="tool-icon">
								<i class="fas fa-clipboard-list"></i>
							</div>
							<h3 class="tool-title">Packing Checklist</h3>
							<p class="tool-description">Use our comprehensive packing lists to ensure your child has everything they need for their trip.</p>
							<a href="#" class="btn-trip btn-outline"><i class="fas fa-download"></i> Download</a>
						</div>
						
						<div class="tool-item" style="flex: 1 0 200px; max-width: 300px;">
							<div class="tool-icon">
								<i class="fas fa-passport"></i>
							</div>
							<h3 class="tool-title">Travel Documents</h3>
							<p class="tool-description">Information about required documents for overseas trips, including passport requirements.</p>
							<a href="#" class="btn-trip btn-outline"><i class="fas fa-info-circle"></i> Learn More</a>
						</div>
						
						<div class="tool-item" style="flex: 1 0 200px; max-width: 300px;">
							<div class="tool-icon">
								<i class="fas fa-hand-holding-medical"></i>
							</div>
							<h3 class="tool-title">Medical Forms</h3>
							<p class="tool-description">Download and complete medical information forms for school trips.</p>
							<a href="#" class="btn-trip btn-outline"><i class="fas fa-download"></i> Download</a>
						</div>
						
						<div class="tool-item" style="flex: 1 0 200px; max-width: 300px;">
							<div class="tool-icon">
								<i class="fas fa-credit-card"></i>
							</div>
							<h3 class="tool-title">Payment Plans</h3>
							<p class="tool-description">Information about payment schedules and financial assistance for school trips.</p>
							<a href="#" class="btn-trip btn-outline"><i class="fas fa-info-circle"></i> Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- TRIP FAQ SECTION -->
		<section id="trip-faq" class="faq-section">
			<div class="row">
				<div class="large-12 columns">
					<h2 style="text-align: center; margin-bottom: 30px;">Frequently Asked Questions</h2>
					
					<div class="faq-container">
						<div class="faq-item">
							<div class="faq-question">
								How do I pay for a school trip? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>The easiest way to pay for trips is online at <a href="//www.scopay.com/pcs" target="_blank">SCO Online Payments</a>. Alternatively, payment can be made at reception using card, cash or cheque made payable to Hampshire County Council. For more expensive trips, we often offer payment plans to spread the cost over several months.</p>
							</div>
						</div>
						
						<div class="faq-item">
							<div class="faq-question">
								What happens if my child is ill on the day of a trip? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>If your child is unable to attend a trip due to illness, please contact the school as soon as possible. Depending on the nature of the trip and our insurance policy, you may be eligible for a partial or full refund. Please note that each case is assessed individually.</p>
							</div>
						</div>
						
						<div class="faq-item">
							<div class="faq-question">
								What if my child has special dietary requirements or medical needs? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>We accommodate all dietary requirements and medical needs. When you complete the trip permission form, there is a section to provide details about any special requirements or medical conditions. Our staff will ensure these are catered for during the trip. For more complex medical needs, we may ask for additional information or a meeting to discuss arrangements.</p>
							</div>
						</div>
						
						<div class="faq-item">
							<div class="faq-question">
								Do students need spending money for trips? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>For most trips, we recommend students bring a small amount of spending money for souvenirs or additional snacks. The amount will depend on the duration and nature of the trip. For overseas trips, we provide specific guidance on appropriate amounts and currency information in the pre-trip information pack.</p>
							</div>
						</div>
						
						<div class="faq-item">
							<div class="faq-question">
								What happens if we cannot afford a school trip? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>We believe that financial constraints should not prevent any student from participating in educational trips. If you are experiencing financial difficulties, please contact our Finance Office or your child's Head of Year in confidence. We have various support options available, including payment plans and possible financial assistance for families who qualify.</p>
							</div>
						</div>
						
						<div class="faq-item">
							<div class="faq-question">
								How are students supervised on trips? <i class="fas fa-chevron-down"></i>
							</div>
							<div class="faq-answer">
								<p>All school trips maintain appropriate staff-to-student ratios in line with safety guidelines. For residential trips, staff are on duty 24 hours a day. Our trip leaders are experienced and receive specific training, and all trips undergo a thorough risk assessment process before approval. On overseas trips, we often work with reputable tour operators who provide additional support.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Hidden trip detail popups for Fancybox -->
		<div id="trip-details-1" style="display: none; max-width: 800px; padding: 20px;">
			<h2>French Language Immersion</h2>
			<p><strong>Dates:</strong> June 15-20, 2025</p>
			<p><strong>Location:</strong> Paris and Loire Valley, France</p>
			<p><strong>Cost:</strong> £450</p>
			<p><strong>Year Groups:</strong> 9-11</p>
			
			<h3>Trip Overview</h3>
			<p>This 6-day immersive experience in France is designed to enhance students' language skills through real-world practice. Students will stay with host families, attend language workshops, and visit cultural and historical sites.</p>
			
			<h3>What's Included</h3>
			<ul>
				<li>Return travel by coach and ferry</li>
				<li>Accommodation with host families (2-3 students per family)</li>
				<li>All meals</li>
				<li>Language workshops</li>
				<li>Entrance fees to all attractions</li>
				<li>Travel insurance</li>
				<li>Evening activities</li>
			</ul>
			
			<h3>Itinerary Highlights</h3>
			<ul>
				<li><strong>Day 1:</strong> Travel to France, meet host families</li>
				<li><strong>Day 2:</strong> Language workshops and Paris sightseeing</li>
				<li><strong>Day 3:</strong> Visit to Loire Valley châteaux</li>
				<li><strong>Day 4:</strong> Local market visit and cooking class</li>
				<li><strong>Day 5:</strong> Cultural activities and language practice</li>
				<li><strong>Day 6:</strong> Return journey to UK</li>
			</ul>
			
			<h3>Payment Schedule</h3>
			<ul>
				<li><strong>Deposit:</strong> £100 (Due by January 31, 2025)</li>
				<li><strong>Second payment:</strong> £150 (Due by March 15, 2025)</li>
				<li><strong>Final payment:</strong> £200 (Due by May 1, 2025)</li>
			</ul>
			
			<h3>Trip Leader Contact</h3>
			<p>For more information, please contact Ms. Johnson at <a href="mailto:k.johnson@pcs.hants.sch.uk">k.johnson@pcs.hants.sch.uk</a></p>
			
			<div style="text-align: center; margin-top: 20px;">
				<a href="//www.scopay.com/pcs" target="_blank" class="btn-trip btn-pay" style="padding: 10px 20px; text-decoration: none;"><i class="fas fa-credit-card"></i> Make Payment</a>
			</div>
		</div>
		
		<!-- Additional hidden detail popups would be added here -->
		
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
				
				// Trip notification form functionality removed
			});
		</script>
	</body>
</html>