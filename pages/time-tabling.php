<?php
$pageTitle = 'Park Community School | Calendar & School Day';
include('../partials/header.php');
?>


<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }
    
    .resource-card {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        border-left: 4px solid #a3cd42;
    }
    
    .resource-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    
    .resource-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    
    .resource-link {
        color: #333;
        text-decoration: none;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex: 1;
    }
    
    .resource-link:hover {
        color: #a3cd42;
    }
    
    .resource-icon {
        font-size: 1.75rem;
    }
    
    .resource-title {
        display: flex;
        flex-direction: column;
    }
    
    .resource-title strong {
        font-size: 1.05rem;
    }
    
    .resource-title span {
        font-size: 0.9rem;
        color: #666;
        font-weight: normal;
    }
    
    .download-button {
        background-color: #a3cd42;
        color: white;
        padding: 0.65rem 1.25rem;
        border-radius: 30px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .download-button:hover {
        background-color: #8fb332;
        color: white;
        transform: translateY(-2px);
    }
    
    .img-container {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .img-container:hover img {
        transform: scale(1.03);
    }
    
    .info-note {
        background: linear-gradient(135deg, #f0f9e8, #fff);
        border-radius: 8px;
        padding: 1.25rem;
        margin-top: 2rem;
        border-left: 4px solid #a3cd42;
    }
    
    .info-note p {
        margin: 0;
        font-size: 0.95rem;
        color: #555;
    }

    /* ── Dates Table ── */
    .dates-table-wrapper {
        margin-bottom: 2.5rem;
    }

    .dates-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }

    .dates-table thead tr {
        background-color: #f5a623;
        color: #fff;
        text-align: left;
    }

    .dates-table thead th {
        padding: 0.9rem 1rem;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .dates-table tbody tr.section-header td {
        background-color: #3a3a3a;
        color: #fff;
        font-weight: 700;
        font-size: 0.9rem;
        padding: 0.6rem 1rem;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .dates-table tbody tr:not(.section-header) td {
        padding: 0.8rem 1rem;
        border-bottom: 1px solid #e8e8e8;
        vertical-align: top;
        color: #333;
    }

    .dates-table tbody tr:not(.section-header):nth-child(even) {
        background-color: #fdf6ec;
    }

    .dates-table tbody tr:not(.section-header):nth-child(odd) {
        background-color: #fff;
    }

    .dates-table tbody tr:not(.section-header):hover {
        background-color: #fdefd6;
    }

    .dates-table tbody td:first-child {
        font-weight: 600;
        width: 230px;
        color: #444;
    }

    @media (max-width: 768px) {
        .resource-content {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .download-button {
            width: 100%;
            justify-content: center;
        }

        .dates-table tbody td:first-child {
            width: auto;
        }

        .dates-table thead th,
        .dates-table tbody td {
            padding: 0.6rem 0.6rem;
            font-size: 0.875rem;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">

        <div class="dates-table-wrapper">
            <table class="dates-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Event</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="section-header">
                        <td colspan="2">Summer Term Dates to Remember</td>
                    </tr>
                    <tr>
                        <td>Saturday 11 April – Monday 20 April</td>
                        <td>Park on tour in China. International study in Shanghai, China</td>
                    </tr>
                    <tr>
                        <td>Monday 13 April</td>
                        <td>1st day of the Summer term</td>
                    </tr>
                    <tr>
                        <td>Monday 13 April – Thursday 23 April</td>
                        <td>Park on tour in India #2. International study at SKV girls' school, Gwalior, India</td>
                    </tr>
                    <tr>
                        <td>Tuesday 14 April</td>
                        <td>Year 7 Rich Challenge: Making a meaningful change</td>
                    </tr>
                    <tr>
                        <td>Wednesday 15 April</td>
                        <td>Year 8 and 9 Option Choices deadline</td>
                    </tr>
                    <tr>
                        <td>Wednesday 22 April</td>
                        <td>Dance Live Finals</td>
                    </tr>
                    <tr>
                        <td>Monday 4 May – Friday 8 May</td>
                        <td>GL Progress testing Years 7, 8, 9</td>
                    </tr>
                    <tr>
                        <td>Friday 1 May</td>
                        <td>GCSE external examinations begin</td>
                    </tr>
                    <tr>
                        <td>Thursday 21 May</td>
                        <td>STEM ambassadors at Wisley<br>Year 10 Travel and Tourism at Southampton Port</td>
                    </tr>
                    <tr class="section-header">
                        <td colspan="2">Half Term – Monday 25 – Friday 29 May</td>
                    </tr>
                    <tr>
                        <td>Monday 25 – Friday 29 May</td>
                        <td>GCSE masterclass run throughout the half term. Please see separate programme for details</td>
                    </tr>
                    <tr>
                        <td>Monday 1 June</td>
                        <td>15 x French students begin their 3 week immersion at Park</td>
                    </tr>
                    <tr>
                        <td>Monday 8 June – Friday 19 June</td>
                        <td>Year 10 Mocks</td>
                    </tr>
                    <tr>
                        <td>Monday 22 June – Friday 3 July</td>
                        <td>Year 10 Work Experience Fortnight</td>
                    </tr>
                    <tr>
                        <td>Monday 22 June – Friday 26 June</td>
                        <td>Year 7, 8, 9 Testing week and annual reading tests<br>Abbey Farm residential</td>
                    </tr>
                    <tr>
                        <td>Thursday 25 June</td>
                        <td>Year 8 at Tate Modern and walking tour of London<br>Year 11 Leavers' Assembly and Leavers' Ball</td>
                    </tr>
                    <tr>
                        <td>Tuesday 30 June</td>
                        <td>Year 7 trip to Natural History Museum and London tour</td>
                    </tr>
                    <tr>
                        <td>Monday 29 June – Friday 3 July</td>
                        <td>Freshers Week: Year 6 at Park all week<br>SKV India exchange – we welcome 45 girls from India for the week</td>
                    </tr>
                    <tr>
                        <td>Wednesday 1 July</td>
                        <td>Year 6 Parent and Carer Transition evening and BBQ</td>
                    </tr>
                    <tr>
                        <td>Thursday 2 July</td>
                        <td>Festival of Sport</td>
                    </tr>
                    <tr>
                        <td>Friday 3 July</td>
                        <td>Year 9 trip to Stone Henge</td>
                    </tr>
                    <tr>
                        <td>Monday 6 July</td>
                        <td>22 Students from Liangfeng Middle School, China buddied with Year 8 for the week</td>
                    </tr>
                    <tr>
                        <td>Thursday 9 July</td>
                        <td>Year 7, 8, 9, 10 Awards Evening</td>
                    </tr>
                    <tr>
                        <td>Monday 20 July</td>
                        <td>End of year reports go home</td>
                    </tr>
                    <tr>
                        <td>Wednesday 22 July</td>
                        <td>Last day of term - Students dismissed at 1pm</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-6">
                <p>Access the latest school calendar and daily schedule information. These resources contain the most up-to-date timetables and relevant academic information for the current school year.</p>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-calendar.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">📅</span>
                            <div class="resource-title">
                                <strong>School Calendar</strong>
                                <span>Important Dates 2025–2026</span>
                            </div>
                        </a>
                        <a href="/assets/timetabling/school-calendar.pdf" download="School-Calendar-2024-2025.pdf" class="download-button" aria-label="Download School Calendar PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
                
                <div class="resource-card">
                    <div class="resource-content">
                        <a href="/assets/timetabling/school-day.pdf" target="_blank" class="resource-link">
                            <span class="resource-icon">⏰</span>
                            <div class="resource-title">
                                <strong>The School Day</strong>
                                <span>Shape of the Day 2025–2026</span>
                            </div>
                        </a>
                        <a href="/assets/timetabling/school-day.pdf" download="School-Day-2024-2025.pdf" class="download-button" aria-label="Download School Day PDF">
                            <i class="fas fa-download" aria-hidden="true"></i> Download
                        </a>
                    </div>
                </div>
                
                <div class="info-note">
                    <p><strong>Note:</strong> These documents are updated at the start of each academic year. Please ensure you have the latest version for accurate information.</p>
                </div>
            </div>
            
            <div class="cell medium-6 show-for-medium">
                <div class="img-container">
                    <img src="/images/timetabling/timetabling-01.jpg" alt="Park Community School students in the classroom">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>