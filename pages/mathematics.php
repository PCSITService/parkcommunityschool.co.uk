<?php
$pageTitle = 'Park Community School | Mathematics';
include('../partials/header.php');
?>

<style>
    
    
    .breadcrumbs {
        background-color: #f5f5f5;
        padding: 0.75rem 1rem;
        margin-bottom: 2rem;
        list-style: none;
        border-radius: 0;
    }
    
    .breadcrumbs li {
        display: inline-block;
        margin-right: 0.5rem;
    }
    
    .breadcrumbs li::after {
        content: '/';
        margin-left: 0.5rem;
        color: #999;
    }
    
    .breadcrumbs li:last-child::after {
        content: '';
    }
    
    .breadcrumbs li a {
        color: #F58220;
    }
    
    .breadcrumbs li.current a {
        color: #666;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .content-section h3 {
        color: #F58220;
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section h3:first-of-type {
        margin-top: 0;
    }
    
    .content-section p {
        margin-bottom: 1rem;
        line-height: 1.7;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
    }
    
    .content-section a {
        color: #F58220;
    }
    
    .content-section a:hover {
        color: #d96f1a;
    }
    
    .button-group {
        margin: 2rem 0;
    }
    
    .button-group .button {
        background-color: #F58220;
        color: white;
        border-radius: 3px;
        margin: 0.25rem;
        padding: 0.75rem 1.5rem;
    }
    
    .button-group .button:hover {
        background-color: #d96f1a;
        color: white;
    }
    
    .topics-list {
        background: #f5f5f5;
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .topics-list ul {
        margin: 0;
        padding-left: 1.25rem;
        columns: 2;
    }
    
    .topics-list ul li {
        margin-bottom: 0.5rem;
    }
    
    .course-accordion {
        margin: 2rem 0;
    }
    
    .accordion-item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 1rem;
        overflow: hidden;
    }
    
    .accordion-header {
        background: #f8f9fa;
        padding: 1rem 1.5rem;
        cursor: pointer;
        font-weight: 600;
        color: #333;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }
    
    .accordion-header:hover {
        background: #F58220;
        color: white;
    }
    
    .accordion-header::after {
        content: '+';
        font-size: 1.5rem;
        font-weight: 300;
    }
    
    .accordion-item.active .accordion-header::after {
        content: '−';
    }
    
    .accordion-item.active .accordion-header {
        background: #F58220;
        color: white;
    }
    
    .accordion-content {
        display: none;
        padding: 1.5rem;
        background: white;
        border-top: 1px solid #e0e0e0;
    }
    
    .accordion-item.active .accordion-content {
        display: block;
    }
    
    .exam-info {
        background: #fff8f0;
        border: 1px solid #F58220;
        border-radius: 8px;
        padding: 1.5rem;
        margin: 2rem 0;
    }
    
    .exam-info p:first-child {
        margin-top: 0;
    }
    
    .exam-info ul {
        margin-bottom: 0;
    }
    
    @media (max-width: 639px) {
        .topics-list ul {
            columns: 1;
        }
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Mathematics</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <p>The vision of mathematics teaching at Park Community School is to inspire and engage students in their understanding of number and wider areas of the subject. Problem solving is integral to the way in which we teach mathematics at the school. Our curriculum provides a foundation for understanding and developing students' ability to reason, whilst also nurturing curiosity and enjoyment for the subject.</p>
                
                <p>We aim to develop students' understanding of mathematical concepts and processes to enable students to solve problems using a variety of techniques and skills. This requires students to be fluent in the fundamentals of mathematics and to reason mathematically. This occurs through repeated practice to increase fluency and mastery, use of skills in familiar and unfamiliar contexts, learning of formulae, application to calculations, analysis and interpretation of mathematical information, as well as contextualising and applying appropriate elements to situations within which students are familiar.</p>

                <h3>Implementation</h3>
                <p>Our curriculum covers the following key areas:</p>
                
                <div class="topics-list">
                    <ul>
                        <li>Number</li>
                        <li>Algebra</li>
                        <li>Ratio, Proportion and Rates of Change</li>
                        <li>Geometry and Measures</li>
                        <li>Probability</li>
                        <li>Statistics</li>
                    </ul>
                </div>
                
                <p><strong>Years 7-11:</strong> From Years 7 to 11 we follow a single programme of study leading to a GCSE in Mathematics.</p>
                
                <p><strong>Years 7-9:</strong> Our Key Stage 3 curriculum is designed to equip students with the mathematical knowledge and skill to successfully embark on their GCSE course in Year 10. It covers the full mathematical spectrum of Number, Ratio, Algebra, Geometry, Statistics and Probability required for their GCSE. We help the students achieve mastery in the use of this knowledge by emphasising the importance of using mathematical reasoning when solving problems in many different contexts.</p>
                
                <p><strong>Years 10-11:</strong> Our Key Stage 4 curriculum continues to build towards GCSE Mathematics. The syllabus we follow is AQA for students studying foundation level and Edexcel for students studying higher level.</p>
                
                <p>We also offer GCSE Statistics as an additional GCSE qualification to those pupils who wish to pursue it.</p>

                <div class="button-group text-center">
                    <a role="button" target="_blank" href="../assets/curriculum/maths/learning-journey.pdf" class="button">Learning Journey</a>
                    <a role="button" target="_blank" href="../assets/curriculum/maths/curriculum-map.pdf" class="button">Curriculum Roadmap</a>
                </div>

                <div class="course-accordion">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            The Foundation Course, Grades 1-5
                        </div>
                        <div class="accordion-content">
                            <p>The foundation course covers a range of topics in Number, Algebra, Shape and Data handling. It emphasises students' ability to reason with and use these skills in unfamiliar contexts in order for them to be able to apply them to real life problems.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            The Higher Course, Grades 4-9
                        </div>
                        <div class="accordion-content">
                            <p>The higher course takes these topics further so students can tackle more complex and mathematically abstract problems, as well as giving them the basis they need to use Mathematics beyond GCSE.</p>
                        </div>
                    </div>
                </div>

                <div class="exam-info">
                    <p><strong>Examination Structure:</strong> The final qualification consists of three written examination papers:</p>
                    <ul>
                        <li>Paper 1 is a non-calculator assessment. A calculator is allowed for Paper 2 and Paper 3.</li>
                        <li>Each paper is 1 hour and 30 minutes long.</li>
                    </ul>
                </div>

                <p><strong>Note:</strong> The GCSE syllabus is far more demanding than in previous years. To help you understand some of the changes to mathematics please see the <a href="https://qualifications.pearson.com/en/home.html" target="_blank">Edexcel website</a>, <a href="https://www.aqa.org.uk/subjects/mathematics/gcse/mathematics-8300" target="_blank">AQA website</a> and '<a href="https://qualifications.pearson.com/content/dam/pdf/GCSE/mathematics/2015/misc/T772%20GCSE%20Maths%20Guide%20(web%20-%20final).pdf" target="_blank">The Guide to Edexcel GCSE Mathematics (9-1)</a>'.</p>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const isActive = item.classList.contains('active');
            
            // Close all accordion items
            document.querySelectorAll('.accordion-item').forEach(i => {
                i.classList.remove('active');
            });
            
            // Open clicked item if it wasn't already active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php include('../partials/footer.php'); ?>