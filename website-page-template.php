<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Park Community School</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Link your main stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header-style.css">

  <!-- Optional: Foundation or other frameworks -->
  <link rel="stylesheet" href="css/app.min.css">

  <style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      color: #000;
    }

    h1, h2 {
      color: #000;
    }

    /* Section styles */
    .section {
      padding: 40px 0;
      background-color: white; /* All sections will have a white background */
      color: black;
      text-align: center;
    }

    .section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
    }

    /* Green Line to separate sections */
    .section + .section {
      border-top: 5px solid #a3cd42; /* Green line between sections */
    }

    /* Button for sections */
    .button {
      padding: 10px 20px;
      background-color: #a3cd42;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
    }

    .button:hover {
      background-color: #8da93f;
    }

    /* Header styles */
    .header {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 20px 0;
      background-color: #fff;
    }

    .header .logo {
      max-width: 120px; /* Adjust to fit logo size */
    }

    .header .school-name {
      font-size: 2.5rem;
      font-weight: bold;
      margin-left: 20px;
      color: #000;
    }

    /* Footer Styles */
    footer {
      background-color: #333333;
      color: #ffffff;
      padding: 20px 0;
      text-align: center;
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- HEADER SECTION -->
  <header class="header">
    <img src="/images/logo.svg" alt="Park Community School Logo" class="logo">
    <div class="school-name">
      Park Community <br>
      School
    </div>
  </header>

  <!-- TOP NAVIGATION -->
  <?php include("includes/topnav.html"); ?>

  <!-- SECTION 2 -->
  <section class="section section-2">
    <h2>Opportunities</h2>
    <p>We offer a wide range of roles, from teaching to support staff, and everything in between.</p>
  </section>

  <!-- SECTION 3 -->
  <section class="section section-3">
    <h2>What We Offer</h2>
    <p>From professional development to wellbeing support, we value our people.</p>
  </section>

  <!-- SECTION 4 -->
  <section class="section section-4">
    <h2>Join Us</h2>
    <p>Explore our current vacancies and become a part of our community.</p>
    <a href="/employment.php" class="button">View Vacancies</a>
  </section>

  <!-- SECTION 5 -->
  <section class="section section-5">
    <h2>Our Commitment</h2>
    <p>We are committed to creating an inclusive and diverse environment for everyone.</p>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Park Community School | All rights reserved.</p>
      <p>
        <a href="/privacy-policy">Privacy Policy</a> | 
        <a href="/terms">Terms & Conditions</a>
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="js/vendor/modernizr.min.js" defer></script>
  <script src="js/vendor/libraries.min.js" defer></script>
  <script src="js/app.min.js" defer></script>

</body>
</html>
