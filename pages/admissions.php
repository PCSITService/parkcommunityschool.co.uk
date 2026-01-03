<?php
$pageTitle = 'Park Community School | Admissions';
include('../partials/header.php');
?>

<style>
    /* Modern styling for admissions page while maintaining site structure */
    
    .admissions-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 1.5rem;
        margin-bottom: 2rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .admissions-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    
    .admissions-card h3 {
        color: #0078a0;
        border-bottom: 2px solid #f5f5f5;
        padding-bottom: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .process-steps {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        counter-reset: step-counter;
        margin: 2rem 0;
    }
    
    .process-step {
        flex: 1;
        min-width: 200px;
        padding: 1rem;
        text-align: center;
        position: relative;
    }
    
    .process-step::before {
        counter-increment: step-counter;
        content: counter(step-counter);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background-color: #0078a0;
        color: white;
        border-radius: 50%;
        margin: 0 auto 1rem;
        font-weight: bold;
        font-size: 1.25rem;
    }
    
    .process-step:not(:last-child)::after {
        content: '';
        position: absolute;
        top: 25px;
        right: 0;
        width: 100%;
        height: 2px;
        background-color: #e0e0e0;
        z-index: -1;
    }
    
    .process-step-content {
        background: white;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .admissions-cta {
        background: linear-gradient(to right, #0078a0, #005a70);
        color: white;
        text-align: center;
        padding: 3rem;
        border-radius: 8px;
        margin: 2rem 0;
    }
    
    .admissions-cta h3 {
        color: white;
        margin-bottom: 1rem;
    }
    
    .admissions-features {
        list-style-type: none;
        margin-left: 0;
    }
    
    .admissions-features li {
        padding: 0.5rem 0;
        position: relative;
        padding-left: 1.5rem;
    }
    
    .admissions-features li::before {
        content: '✓';
        color: #0078a0;
        position: absolute;
        left: 0;
        font-weight: bold;
    }
    
    .button.radius {
        border-radius: 3px;
    }
    
    .button.primary {
        background-color: #0078a0;
        color: white;
    }
    
    .button.primary:hover {
        background-color: #005a70;
    }
    
    .button.secondary {
        background-color: #666;
        color: white;
    }
    
    .button.secondary:hover {
        background-color: #555;
    }
    
    .faq-item {
        margin-bottom: 1rem;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .faq-question {
        background-color: #f5f5f5;
        padding: 1rem;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .faq-question:hover {
        background-color: #e5e5e5;
    }
    
    .faq-question::after {
        content: '+';
        font-size: 1.5rem;
        font-weight: bold;
    }
    
    .faq-question.active::after {
        content: '-';
    }
    
    .faq-answer {
        padding: 1rem;
        background-color: white;
        display: none;
    }
    
    .faq-answer.show {
        display: block;
    }
    
    /* Responsive improvements */
    @media only screen and (max-width: 40em) {
        .process-steps {
            flex-direction: column;
        }
        
        .process-step {
            margin-bottom: 2rem;
        }
        
        .process-step::after {
            display: none;
        }
    }

    /* Enhanced table styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 1rem 0;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    
    th {
        background-color: #0078a0;
        color: white;
        padding: 1rem;
        text-align: left;
    }
    
    td {
        padding: 1rem;
        border-bottom: 1px solid #e0e0e0;
    }
    
    tr:nth-child(even) {
        background-color: #f5f5f5;
    }
    
    tr:last-child td {
        border-bottom: none;
    }
    
    /* Improve modal appearance */
    .reveal-modal {
        border-radius: 8px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
        border: none;
    }
    
    .reveal-modal h2 {
        color: #0078a0;
        margin-bottom: 1.5rem;
    }
    
    .reveal-modal .close-reveal-modal {
        color: #666;
        opacity: 0.8;
        transition: opacity 0.3s;
    }
    
    .reveal-modal .close-reveal-modal:hover {
        opacity: 1;
    }
</style>

<!-- CONTENT -->
<section class="page-content">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <br>
            <div class="cell medium-8">
                <div class="admissions-card">
                    <h3>Welcome to Park Community School</h3>
                    <p>We are delighted you're considering Park Community School for your child's education. Our admissions process is designed to be straightforward, transparent, and supportive, guiding you through each step of the journey to becoming part of our vibrant school community.</p>
                    <p>If you are interested in applying for a place at Park Community School, we warmly invite you to visit us. Experience our school in action, speak with our students and staff, and get a firsthand feel for our supportive learning environment.</p>
                    <div class="text-center">
                        <a href="../assets/policies/admissions-2025-2026.pdf" class="button radius primary">Admission Policy 2025-2026</a>
                        <a href="/assets/policies/Admissions Policy 2026-2027.pdf" class="button radius primary">Admission Policy 2026-2027</a>
                        <a href="/assets/admissions/pcs_parental_combined_consent_booklet.pdf" target="_blank" class="button radius secondary">Parental Consent Booklet</a>
                    </div>
                </div>
                
                <div class="admissions-card">
                    <h3>Application Process</h3>
                    
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="process-step-content">
                                <h4>Visit Us</h4>
                                <p>Arrange a tour to see our school in action and speak with students and staff.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-step-content">
                                <h4>Apply</h4>
                                <p>Complete the Hampshire County Council application or our school form.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-step-content">
                                <h4>Confirmation</h4>
                                <p>Receive confirmation and details about next steps.</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="process-step-content">
                                <h4>Welcome</h4>
                                <p>Attend induction events and join our school community.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center" style="margin-top: 2rem;">
                        <a href="https://www.hants.gov.uk/educationandlearning/admissions" target="_blank" class="button radius primary">Apply Online</a>
                        <a href="/pages/forms.php" class="button radius secondary">Use the Form</a>
                    </div>
                </div>
                
                <div class="admissions-card">
                    <h3>Frequently Asked Questions</h3>
                    
                    <div class="faq-item">
                        <div class="faq-question">What is the admissions criteria for Park Community School?</div>
                        <div class="faq-answer">Our admissions criteria follow Hampshire County Council guidelines and typically include factors such as siblings already at the school, catchment area, and distance from home to school. For detailed information, please refer to our Admissions Policy on the Policies page.</div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">When should I apply for a Year 7 place?</div>
                        <div class="faq-answer">Applications for Year 7 entry in September open in September of the previous year and close at the end of October. Offers are typically made in March.</div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">How do I arrange a school tour?</div>
                        <div class="faq-answer">We welcome visits from prospective families. Please contact our admissions team at admissions@pcs.hants.sch.uk to arrange a tour. We also hold regular open evenings throughout the year.</div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">What is a managed move?</div>
                        <div class="faq-answer">A managed move is an agreement between schools to transfer a student. This can be requested by parents or recommended by schools. The process involves a 10-week trial period with reviews to ensure a successful transition. For more details, please click the "Procedure for students joining school after year 7" button below.</div>
                    </div>
                </div>
                
                <div class="admissions-cta">
                    <h3>Ready to Join Our Community?</h3>
                    <p>Take the first step towards an exceptional education experience at Park Community School.</p>
                    <a href="https://www.hants.gov.uk/educationandlearning/admissions" target="_blank" class="button radius large">Apply Now</a>
                    <a href="/assets/prospectus.pdf" target="_blank" class="button radius large secondary">Download Prospectus</a>
                </div>
            </div>
            
            <div class="cell medium-4">
                <div class="admissions-card">
                    <img src="/images/admissions/admissions-01.jpg" alt="Park Community School Grounds" style="width: 100%; border-radius: 8px; margin-bottom: 1rem;">
                    <div class="text-center">
                        <a href="/assets/prospectus.pdf" target="_blank" class="button radius">View Our Prospectus</a>
                    </div>
                </div>
                
                <div class="admissions-card">
                    <h3>New Students Moving Up</h3>
                    <p>We've created a comprehensive guide to help new students and their families transition smoothly to Park Community School.</p>
                    <p>Our "Moving Up" guide includes information on:</p>
                    <ul class="admissions-features">
                        <li>Key members of staff</li>
                        <li>Attendance and punctuality</li>
                        <li>What you'll be studying</li>
                        <li>The school day</li>
                        <li>Required equipment</li>
                        <li>Extra-curricular opportunities</li>
                    </ul>
                    <div class="text-center">
                        <a href="/assets/moving-up.pdf" target="_blank" class="button radius">Moving Up Guide</a>
                    </div>
                </div>
                
                <div class="admissions-card">
                    <h3>Further Information</h3>
                    <p>You can find out more about the admissions process or what to do if you are unhappy with your allocated place at: <a href="//www3.hants.gov.uk/education/admissions/ad-guidance/main-admissions-round/ed-ad-mainround-process.htm" target="_blank">www.hants.gov.uk</a></p>
                    <p>If you have any questions or would like help with any aspect of the admissions process, please visit our <a href="/pages/contact.php">Contact Page</a> for details on how to reach our admissions team.</p>
                    <div class="text-center">
                        <a href="#" data-open="yr7_procedure" class="button radius">Procedure for students joining school after year 7</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL (Foundation 6 style) -->
<div class="reveal large" id="yr7_procedure" data-reveal>
    <h2>Procedure for students joining school after year 7</h2>
    <p>There are two procedures for children joining us during the year.</p>
    <p>The first is through a managed move and the second an admission through Hampshire County Council.</p>

    <table>
      <tr>
        <th>Step</th>
        <th>Admission from County</th>
        <th>Managed Move</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Initial meeting between parent, student and a senior member of staff [pastoral.] <br>A tour of school. <br>Copies of the new parent registration and consent documents provided.</td>
        <td>Managed move agreed between Park and the Federation School at either: <br>a) Parental request <br>Or <br>b) at school request for behaviour reasons</td>
      </tr>
      <tr>
        <td>2</td>
        <td>School review of admission request</td>
        <td>Home school sends student information pack to Park</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Senior member of staff [pastoral] agrees start date with parent, if admission request successful</td>
        <td>Initial meeting between parent, student and senior member of staff [pastoral.]  Contract signed for the 10-week programme. Copies of the new parent registration and consent documents provided. Start date agreed.</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Head of Year identifies mentor group and timetable. Administration team action parental registration and consent forms.</td>
        <td>Mid point review with parent and student with senior member of staff [pastoral.]</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Review of any special educational needs by the SENCO [Special Educational Needs Coordinator.]</td>
        <td>Final review with parent and student with senior member of staff [pastoral.] Outcomes: a) Return to home school, b) Redo part of 10-week programme [if there are extenuating circumstances for the programme not being completed or targets not met] or c) Acceptance on Park Role</td>
      </tr>
      <tr>
        <td>6</td>
        <td></td>
        <td>Head of Year identifies mentor group and timetable. Administration team action parental registration and consent forms.</td>
      </tr>
      <tr>
        <td>7</td>
        <td></td>
        <td>Review of any SEND needs by SENCO</td>
      </tr>
    </table>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- FAQ Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                this.classList.toggle('active');
                const answer = this.nextElementSibling;
                answer.classList.toggle('show');
            });
        });
    });
</script>

<?php include('../partials/footer.php'); ?>