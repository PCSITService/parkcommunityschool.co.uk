<?php
$pageTitle = 'Park Community School | Gym - Fitness Suite';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .grey-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .schedule-section {
        padding: 3rem 0;
    }
    
    .schedule-section h4 {
        color: #EE3A80;
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    
    .schedule-section p {
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }
    
    .schedule-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .schedule-table th {
        background-color: #EE3A80;
        color: white;
        padding: 1rem;
        text-align: center;
        font-weight: 600;
    }
    
    .schedule-table td {
        padding: 1rem;
        text-align: center;
        border-bottom: 1px solid #eee;
        vertical-align: middle;
    }
    
    .schedule-table tr:last-child td {
        border-bottom: none;
    }
    
    .schedule-table tbody tr:hover {
        background-color: #fdf2f6;
    }
    
    .schedule-table td:first-child {
        font-weight: 600;
        background-color: #f9f9f9;
        color: #333;
    }
    
    .image-gallery {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .image-gallery img {
        border-radius: 8px;
        width: 100%;
        height: 300px;
        object-fit: cover;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    
    .image-gallery img:hover {
        transform: scale(1.02);
    }
    
    @media (max-width: 768px) {
        .schedule-table {
            font-size: 0.85rem;
        }
        
        .schedule-table th,
        .schedule-table td {
            padding: 0.5rem;
        }
        
        .schedule-table-wrapper {
            overflow-x: auto;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="image-gallery">
            <img src="images/gym/gym-01.jpg" alt="The Gym - Brand new Matrix machines">
            <img src="images/gym/gym-02.jpg" alt="The Gym - Weight training">
        </div>
    </div>
</section>

<section class="schedule-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <h4>Fitness Club</h4>
                <p>Why not come down to Park's Fitness Suite after school? You will get a full gym induction and a programme to follow.</p>
                
                <div class="schedule-table-wrapper">
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Times</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15:00 to 15:45</td>
                                <td>Fitness Suite<br>Years 8 &amp; 9</td>
                                <td>Circuit (KSH)<br>Years 8 &amp; 9</td>
                                <td>Fitness Suite<br>Years 8 &amp; 9</td>
                                <td>Fitness Suite<br>Year 10</td>
                                <td rowspan="2">Fitness Suite<br>All Years</td>
                            </tr>
                            <tr>
                                <td>16:00 to 16:45</td>
                                <td>Fitness Suite<br>Year 11</td>
                                <td>Circuits (KSH)<br>Years 10 &amp; 11</td>
                                <td>Fitness Suite<br>Year 11</td>
                                <td>Fitness Suite<br>Year 11</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>