<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Park Community School | Calendar & School Day</title>
    <?php include("includes/head.html") ?>
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        .hero {
            background-color: var(--light-color);
            padding: 3rem 0;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }
        
        .hero h1 {
            color: var(--dark-color);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .hero p {
            color: var(--secondary-color);
            font-size: 1.25rem;
        }
        
        .calendar-section {
            padding: 2rem 0;
        }
        
        .resource-card {
            background-color: var(--light-color);
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .resource-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .resource-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .resource-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            flex: 1;
        }
        
        .resource-link:hover {
            text-decoration: underline;
        }
        
        .download-btn {
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: background-color 0.3s ease;
        }
        
        .download-btn:hover {
            background-color: #0b5ed7;
        }
        
        .resource-icon {
            font-size: 1.5rem;
        }
        
        .download-icon {
            font-size: 1.25rem;
        }
        
        .img-container {
            border-radius: 0.5rem;
            overflow: hidden;
            height: 100%;
        }
        
        .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .img-container:hover img {
            transform: scale(1.05);
        }
        
        .format-note {
            text-align: center;
            color: var(--secondary-color);
            font-size: 0.875rem;
            margin-top: 1rem;
        }
    </style>
</head>
<body class="page-school">
    <!-- NAVIGATION -->
    <?php include("includes/topnav.html") ?>
    

    <!-- CONTENT -->
    <section class="calendar-section">
        <div class="row">
            <div class="medium-6 columns">
                <h1>Calendar & School Day</h1>
                <p>Access the latest school calendar and daily schedule information. These resources contain the most up-to-date timetables and relevant academic information for the current school year.</p>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-calendar.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">📅</span>
                            <span>Important Dates - School Calendar 2024-2025</span>
                        </a>
                        <a href="/assets/timetabling/school-calendar.pdf" download="School Calendar 2024-2025.pdf" class="download-button" aria-label="Download School Calendar PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-day.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">⏰</span>
                            <span>The School Day - Shape of the Day 2024-2025</span>
                        </a>
                        <a href="/assets/timetabling/school-day.pdf" download="School Day 2024-2025.pdf" class="download-button" aria-label="Download School Day PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="hide-for-small-only medium-6 columns">
                <div class="img-container">
                    <img src="images/timetabling/timetabling-01.jpg" alt="Park Community School students studying for exams">
                </div>
            </div>
        </div>
    </section>
    
    <!-- FOOTER -->
    <?php include("includes/footer.html") ?>
    
    <!-- Scripts -->
    <script src="js/vendor/libraries.min.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.min.js"></script>
</body>
</html>