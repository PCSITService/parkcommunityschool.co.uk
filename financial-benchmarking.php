<?php
$pageTitle = 'Park Community School | Financial Benchmarking';
include('partials/header.php');
?>

<style>
    .benchmarking-section {
        padding: 3rem 0;
        background-color: #f4f4f4;
    }
    
    .image-section {
        text-align: center;
        margin: 20px auto;
    }
    
    .image-section img {
        width: 100%;
        height: auto;
        max-width: 700px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .image-section h3 {
        margin-top: 15px;
        font-size: 1.4rem;
        color: #333;
    }
    
    .link-section {
        text-align: center;
        margin: 30px auto;
        max-width: 700px;
    }
    
    .link-section p {
        margin-bottom: 1rem;
        color: #555;
    }
    
    .link-section a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
    }
    
    .link-section a:hover {
        text-decoration: underline;
        color: #0056b3;
    }
    
    .pay-table-section {
        max-width: 700px;
        margin: 2rem auto;
        padding: 0 1rem;
    }
    
    .pay-table-section h2 {
        text-align: center;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
        color: #333;
        line-height: 1.5;
    }
    
    .pay-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px auto;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .pay-table th,
    .pay-table td {
        border: 1px solid #ddd;
        padding: 12px 8px;
        text-align: center;
    }
    
    .pay-table th {
        background-color: #a3cd42;
        color: white;
        font-weight: 600;
    }
    
    .pay-table tbody tr:hover {
        background-color: #f5f5f5;
    }
    
    @media (max-width: 768px) {
        .pay-table-section h2 {
            font-size: 1rem;
        }
        
        .pay-table th,
        .pay-table td {
            padding: 10px 6px;
            font-size: 0.9rem;
        }
    }
</style>

<!-- CONTENT -->
<section class="benchmarking-section">
    <div class="grid-container">
        <div class="image-section">
            <img src="assets/financial-benchmarking/2024-2025.png" alt="Financial Benchmarking 2024-2025">
            <h3>Financial Benchmarking Insights</h3>
        </div>
        
        <div class="link-section">
            <p>You can view the school's financial data and see how it compares with others by following the link below:</p>
            <p><a href="https://financial-benchmarking-and-insights-tool.education.gov.uk/school/116473" target="_blank">Government Financial Benchmarking and Insights Tool</a></p>
        </div>
        
        <div class="pay-table-section">
            <h2>The number of employees whose pay exceeded £100k, in £10k bandings for FY 2024 / 2025 was:</h2>
            <table class="pay-table">
                <thead>
                    <tr>
                        <th>Number of Employees</th>
                        <th>£10,000 Banding</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>£120,000 to £130,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>