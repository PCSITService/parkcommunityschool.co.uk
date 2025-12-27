<?php
$pageTitle = 'Park Community School | Parent Partnership';
include('partials/header.php');
?>

<style>
    .page-header {
        background-color: #1E7AB9;
        color: white;
        padding: 2rem 0;
        margin-bottom: 2rem;
    }
    
    .page-header h1 {
        color: white;
        margin-bottom: 0.5rem;
    }
    
    .page-header p {
        color: white;
        margin-bottom: 0;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h2 {
        color: #1E7AB9;
        margin-bottom: 1rem;
    }
    
    .content-section h3 {
        color: #333;
        margin-top: 2rem;
        margin-bottom: 0.5rem;
        font-size: 1.3rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 1rem;
    }
    
    /* Table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    
    th {
        background-color: #1E7AB9;
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 600;
    }
    
    td {
        padding: 1rem;
        border-bottom: 1px solid #e0e0e0;
        vertical-align: top;
    }
    
    tr:nth-child(even) {
        background-color: #f5f5f5;
    }
    
    tr:last-child td {
        border-bottom: none;
    }
    
    /* Score highlighting */
    td:first-child {
        font-weight: bold;
        text-align: center;
        width: 80px;
    }
    
    tr:nth-child(2) td:first-child { color: #2e7d32; } /* 12 - green */
    tr:nth-child(3) td:first-child { color: #388e3c; } /* 9 - green */
    tr:nth-child(4) td:first-child { color: #1976d2; } /* 2 - blue */
    tr:nth-child(5) td:first-child { color: #f57c00; } /* -1 - orange */
    tr:nth-child(6) td:first-child { color: #d32f2f; } /* -4 - red */
    
    .back-to-top {
        text-align: center;
        margin: 2rem 0;
    }
    
    .back-to-top a {
        color: #1E7AB9;
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Parent Partnership</h1>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h2>Assessment and Reporting 2024-2025</h2>
                <p>At Park Community School we assess your child regularly in lessons to allow us to monitor their progress in relation to what we would expect them to achieve. We then adjust our lesson planning or implement interventions to ensure they are making suitable progress.</p>
                
                <h3>There will be two Student Review Days per year</h3>
                <p>The Student Review Days take place on the first day of the academic year and just before the February half-term holiday. These are opportunities to meet to discuss your child's targets with his/her tutor. It is also an opportunity to discuss how, together, we can better support his/her progress.</p>
                
                <h3>There will be one traditional Parents' Evening per year.</h3>
                <p>The traditional Parents' Evening is your opportunity to discuss your child's progress with their subject teachers.</p>
                <p>We also hold additional evenings for parents on specific topics such as how to support your child to achieve success in their examination courses. These evenings usually include a combination of presentations and master-classes.</p>
                
                <h3>We will report home to parents three times a year.</h3>
                
                <ul>
                    <li><strong>School projection:</strong> For years 10 to 11 this is what we expect your child to achieve. For GCSEs this is a grade 9-1. BTECs and other vocational course are graded using Pass, Merit, Distinction and Distinction*. For years 7, 8 and 9 we report whether students are Working Towards [WT] age related expectations, are at Age Related Expectations [ARE] or are working At Greater Depth [AGD].</li>
                    <li><strong>Teacher Projection:</strong> For years 10 to 11 this is the teacher's professional judgement of what your child is likely to achieve. They have assumed that your child will continue to work as they are at present. It is based on a combination of information, including mock exams, class work and coursework where appropriate. For GCSEs this is a grade 9-1. BTECs and other vocational course are graded using Pass, Merit, Distinction and Distinction*. For years 7, 8 and 9 we report whether students are Working Towards [WT] age related expectations, are at Age Related Expectations [ARE] or are working At Greater Depth [AGD].</li>
                    <li><strong>Test Score:</strong> For Years 7-9, this is the score your child has achieved on their most recent multiple-choice test. For years 10 and 11 the percentage reported is based on their most recent mock exam and is a percentage out of the total marks available over all of the papers they will sit in each subject. The percentage score may therefore be low earlier in the course and increase as they get closer to the final exams. If this space is blank, your child has not had a mock exam in the subject this half term.</li>
                    <li><strong>Overall Attitude to Learning (OATL):</strong> This is a score from -4 up to 12 which shows how well your child is working.</li>
                    <li><strong>Homework:</strong> This is also a score from -4 up to 12 reflecting your child's commitment to completing their homework at a high standard.</li>
                </ul>
                
                <p>The following table explains what each of the numbers for overall attitude to learning and homework mean.</p>
                
                <table>
                    <tr>
                        <th>Score</th>
                        <th>Description</th>
                        <th>Homework</th>
                        <th>OATL</th>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Excellent Performance</td>
                        <td>All homework is completed on time and usually completed to a very high standard.</td>
                        <td>Consistently positive attitude and is proactive in the pursuit of their learning.</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Very Good Performance</td>
                        <td>All homework is completed on time and to a good standard.</td>
                        <td>Positive attitude to learning and will do everything asked of them.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Good Performance</td>
                        <td>All homework is completed with most it on time. The standard is generally good.</td>
                        <td>Generally positive attitude to their learning. Completes most tasks with little fuss and without disrupting the learning of others.</td>
                    </tr>
                    <tr>
                        <td>-1</td>
                        <td>Need for Improvement</td>
                        <td>Homework is not consistently completed, and/or it is often late. Homework is consistently to a low standard</td>
                        <td>Inconsistent in their attitude to their learning. Can occasionally be disruptive to the learning of others.</td>
                    </tr>
                    <tr>
                        <td>-4</td>
                        <td>Cause for Concern</td>
                        <td>Generally, homework is not completed. Homework is always late.</td>
                        <td>Attitude to learning is consistently detrimental to their own and to the learning of others.</td>
                    </tr>
                </table>
                
                <div class="back-to-top">
                    <a href="#top">↑ Back to Top</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>