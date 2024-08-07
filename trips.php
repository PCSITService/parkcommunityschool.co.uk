<!doctype html>
<html class="no-js" lang="en" >
	<head>
		<title>Park Community School | Trips</title>
		<?php include("includes/head.html") ?>
		
	</head>
	<body class="page-parent">
		<!-- NAVIGATION -->
		<?php include("includes/topnav.html") ?>
		<!-- HEADER SECTION -->
		<header class="header-parent">
			<div class="row">
				<div class="medium-8 large-8 columns">
					<h1>Trips</h1>
					<p class="text-capitalize">Current list of available trips</p>
				</div>
			</div>
		</header>
		<!-- TOP CONTENT -->
		<section>
			<div class="row">
				<br>
				<div class="medium-7 columns">
					<h2>Our Trips are Amazing!</h2>
					<p>All School Trips at Park are planned well in advance, ensuring student safety is at the forefront of our priorities. Our trips offer the students new experiences and diverse learning opportunities.</p>
					<p>The easiest way to pay for trips is online at <a href="//www.scopay.com/pcs" target="_blank">SCO Online Payments</a>. Alternatively, payment can be made at reception using card, cash or cheque made payable to Hampshire County Council.</p>
					<br>
				</div>
				<div class="medium-5 columns">
					
					<div class="trip-slider">
					    <div><img src="images/trips/newyork.jpg" alt=""></div>
					    <div><img src="images/trips/kewgardens.jpg" alt=""></div>
					    <div><img src="images/trips/tanzania.jpg" alt=""></div>
					    <div><img src="images/trips/disney1.jpg" alt=""></div>
					    <div><img src="images/trips/farm1.jpg" alt=""></div>
					    <div><img src="images/trips/winchester1.jpg" alt=""></div>
					    <div><img src="images/trips/nyc1.jpg" alt=""></div>
					    <div><img src="images/trips/nyc2.jpg" alt=""></div>
					</div>

				</div>
			</div>
			<br><br>
		</section>

		<?php include 'includes/pay-trips.html'; ?>

		<?php include 'includes/nonpay-trips.html'; ?>

		<?php //include 'includes/past-trips.html'; ?>

		<!-- BLANK -->
		<!-- <section>
			<div class="row">
		        <div class="small-centered large-1 column text-center hr-logo grey-bg"></div>
		    </div>
			<div class="row">
			</div>
			<br><br>
		</section> -->


			<!-- FOOTER -->
			<?php include("includes/footer.html") ?>
			<!-- End Site Footer -->
			<script src="js/vendor/libraries.min.js"></script>
			<script src="js/vendor/foundation.min.js"></script>
			<script src="js/app.min.js"></script>
			<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
			<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript" src="slick/slick.min.js"></script>
				
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