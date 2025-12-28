<?php
$pageTitle = 'Park Community School | Letters Home and Newsletters';
include('partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 1rem 0 4rem;
    }
    
    .newsletter-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
    
    .newsletter-item {
        background-color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border-top: 4px solid #1E7AB9;
    }
    
    .newsletter-item:hover {
        background-color: #f0f4f8;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        transform: translateY(-3px);
    }
    
    .newsletter-item h4 {
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: #1E7AB9;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .newsletter-item ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    .newsletter-item ul li {
        margin-bottom: 0.5rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #eee;
    }
    
    .newsletter-item ul li:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    
    .newsletter-item a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        display: block;
        padding: 0.25rem 0;
        transition: all 0.2s ease;
        font-size: 0.95rem;
        line-height: 1.4;
    }
    
    .newsletter-item a:hover {
        color: #1E7AB9;
        padding-left: 0.5rem;
    }
    
    .newsletter-item a::before {
        content: '📄 ';
        font-size: 0.85rem;
    }
    
    @media (max-width: 1024px) {
        .newsletter-list {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 640px) {
        .newsletter-list {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="newsletter-list">
            <!-- December 2025 -->
            <div class="newsletter-item">
                <h4>December 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-12/Park Newsletter 19 Dec.pdf" target="_blank">Newsletter - 19th December 2025</a></li>
                    <li><a href="/assets/letters/2025-12/End of Term letter - December 2025.pdf" target="_blank">End of Term Letter - December 2025</a></li>
                    <li><a href="/assets/letters/2025-12/Rich challenge 2 letter_.pdf" target="_blank">Year 7 Rich Challenge</a></li>
                    <li><a href="/assets/letters/2025-12/Additional Year 11 parents evening 02 12 24.pdf" target="_blank">Important Year 11 Parent and Carer Meeting</a></li>
                    <li><a href="/assets/letters/2025-12/Park Newsletter 1 Dec.pdf" target="_blank">School Newsletter - Monday 1st December</a></li>
                </ul>
            </div>
            
            <!-- November 2025 -->
            <div class="newsletter-item">
                <h4>November 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-11/Park Riders - Consultee Letter (PN).pdf" target="_blank">Riders Federation - Consultee Letter</a></li>
                    <li><a href="/assets/letters/2025-11/Year 10 Testing week 1 10 11 2025.pdf" target="_blank">Year 10 Testing Week</a></li>
                    <li><a href="/assets/letters/2025-11/Work Experience 2026 Letter Nov25.pdf" target="_blank">Work Experience 2026</a></li>
                    <li><a href="/assets/letters/2025-11/BBC Bitesize Event Oct 25.pdf" target="_blank">BBC Bitesize Careers Tour</a></li>
                </ul>
            </div>
            
            <!-- October 2025 -->
            <div class="newsletter-item">
                <h4>October 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-10/Park Newsletter 24 Oct.pdf" target="_blank">School Newsletter - Friday 24th October</a></li>
                    <li><a href="/assets/letters/2025-10/Riders Letter 22 10 25.pdf" target="_blank">Riders Letter - Wednesday 22nd October</a></li>
                    <li><a href="/assets/letters/2025-10/Year 10 Revision and Independent Study 2025-26.pdf" target="_blank">Year 10 - Revision and Independent Study</a></li>
                    <li><a href="/assets/letters/2025-10/2025 Oct Y7 Parents Evening.pdf" target="_blank">Year 7 - Parents Evening</a></li>
                    <li><a href="/assets/letters/2025-10/2025 Oct Y11 Parents Evening.pdf" target="_blank">Year 11 - Parents Evening</a></li>
                    <li><a href="/assets/letters/2025-10/Park Newsletter 3 Oct.pdf" target="_blank">School Newsletter - Friday 3rd October</a></li>
                    <li><a href="/assets/havant-federation-statements/Parent Letter re Federation Joint Statements Oct 2025.pdf" target="_blank">Parent Letter re Federation</a></li>
                    <li><a href="/assets/havant-federation-statements/Joint Statement Mobile Phones Oct 2025.pdf" target="_blank">Joint Statement Mobile Phones</a></li>
                    <li><a href="/assets/havant-federation-statements/Joint Statement Relational Conflict and Bullying Oct 2025.pdf" target="_blank">Joint Statement Relational Conflict and Bullying</a></li>
                    <li><a href="/assets/havant-federation-statements/Joint Statement Standards and Attendance Oct 2025.pdf" target="_blank">Joint Statement Standards and Attendance</a></li>
                    <li><a href="/assets/havant-federation-statements/Joint Statement Vaping Smoking and banned substances Oct 2025.pdf" target="_blank">Joint Statement Vaping and Smoking</a></li>
                    <li><a href="/assets/exam/academic-year-2025-2026/Year 11 Autumn Mock Timetable Final (2) (1).pdf" target="_blank">Year 11 - Autumn Mock Exam Timetable</a></li>
                </ul>
            </div>
            
            <!-- August 2025 -->
            <div class="newsletter-item">
                <h4>August 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-08/Final version Return to school letter September 2025 with Phone Puch FAQa.pdf" target="_blank">Return to School - September 2025</a></li>
                </ul>
            </div>
            
            <!-- July 2025 -->
            <div class="newsletter-item">
                <h4>July 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-07/Park Newsletter End of Term Newsletter-compressed.pdf" target="_blank">Newsletter - 17th July 2025</a></li>
                    <li><a href="/assets/letters/2025-07/15 07 25 Support  Resources for Parents - Self-harm Reduction and Suicide Prevention.pdf" target="_blank">Parents - Self-harm Reduction and Suicide Prevention</a></li>
                    <li><a href="/assets/letters/2025-07/End of term letter - July 2025.pdf" target="_blank">End of Term Letter - July 2025</a></li>
                    <li><a href="/assets/Welcome to Park 2025 (All Students).pdf" target="_blank">Welcome to Park - All Students Booklet</a></li>
                    <li><a href="/assets/Welcome to Park 2025 (Year 7).pdf" target="_blank">Welcome to Park - Year 7 Booklet</a></li>
                    <li><a href="/assets/letters/2025-07/Year 9 end of year July 2025.pdf" target="_blank">End of Year Review - Year 9</a></li>
                    <li><a href="/assets/letters/2025-07/Park Newsletter 7 July 2.pdf" target="_blank">Newsletter - 7th July 2025</a></li>
                    <li><a href="/assets/letters/2025-07/DofE Launch - Year 8.pdf" target="_blank">DofE Launch - Year 8</a></li>
                    <li><a href="/assets/letters/2025-07/Riders  Park - Consultee Letter.pdf" target="_blank">Consultation Letter: Park Community School and Riders Federation</a></li>
                </ul>
            </div>

            <!-- June 2025 -->
            <div class="newsletter-item">
                <h4>June 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-06/Year 7 HOY change and thanks.pdf" target="_blank">Year 7 Head of Year Change</a></li>
                    <li><a href="/assets/letters/2025-06/The power of music letter 08 07 25.pdf" target="_blank">The Power of Music Letter - 8th July 2025</a></li>
                    <li><a href="/assets/letters/2025-06/Yr11 Leavers Letter.pdf" target="_blank">Year 11 Leavers Letter</a></li>
                    <li><a href="/assets/letters/2025-06/Riders Letter.pdf" target="_blank">Letter Regarding Park Community School and Riders Federation</a></li>
                    <li><a href="/assets/letters/2025-06/Hoodie Letter 030625.pdf" target="_blank">2025 Leavers Hoodies</a></li>
                    <li><a href="/assets/letters/2025-06/Year 11 after half-term.pdf" target="_blank">Year 11 After Half-term</a></li>
                </ul>  
            </div>
            
            <!-- May 2025 -->
            <div class="newsletter-item">
                <h4>May 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-05/HSDC LETTER 2025.pdf" target="_blank">Year 10 Taster Day</a></li>
                    <li><a href="/assets/letters/2025-05/Park Newsletter 16 May.pdf" target="_blank">Newsletter - 16th May 2025</a></li>
                    <li><a href="/assets/letters/2025-05/Year 9 end of half term May 2025.docx" target="_blank">Year 9 End of Half Term May 2025</a></li>
                    <li><a href="/assets/letters/2025-05/e scooter letter_ (002).pdf" target="_blank">E-Scooters and the Law</a></li>
                    <li><a href="/assets/letters/2025-05/Year 11 Period 6 letter May 7.pdf" target="_blank">Year 11 Period 6 Letter</a></li>
                    <li><a href="/assets/letters/2025-05/Year 11 - Exams & Leavers' Ball.pdf" target="_blank">Year 11 - Exams &amp; Leavers' Ball</a></li>
                </ul>
            </div>
            
            <!-- April 2025 -->
            <div class="newsletter-item">
                <h4>April 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-04/Summer Uniform Letter 06 05 25.pdf" target="_blank">Summer Uniform</a></li>
                    <li><a href="/assets/letters/2025-04/Year 8 Creative Options Parents Information Evening 23 04 25.pdf" target="_blank">Year 8 - Creative Options Parents Information</a></li>
                    <li><a href="/assets/letters/2025-04/Park Newsletter 4 April.pdf" target="_blank">Newsletter - 4th April 2025</a></li>
                    <li><a href="/assets/letters/2025-04/Year 11  Easter study sessions 2025.pdf" target="_blank">Year 11 - Easter Study Sessions</a></li>
                    <li><a href="/assets/letters/2025-04/Y10 English Literature - revision  masterclasses 2025.pdf" target="_blank">Year 10 - English Literature Masterclass</a></li>
                    <li><a href="/assets/letters/2025-04/Year 9 end of half term March 2025.pdf" target="_blank">Year 9 - End of Half Term Review</a></li>
                </ul>
            </div>
            
            <!-- March 2025 -->
            <div class="newsletter-item">
                <h4>March 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-03/Year 10 Parents Evening 030425.docx" target="_blank">Year 10 Parents Evening - Thursday 3rd April 2025</a></li>    
                    <li><a href="/assets/letters/2025-03/Park Newsletter 26 March.pdf" target="_blank">Newsletter - 26th March 2025</a></li>     
                    <li><a href="/assets/letters/2025-03/Year 9 Options evening - 27 03 25.pdf" target="_blank">Year 9 Options Evening - Thursday 27th March 2025</a></li>     
                    <li><a href="/assets/letters/2025-03/Year 11 letter - mar 2025.docx" target="_blank">Mock Exam Results &amp; Important Meeting for All Year 11 Parents and Students</a></li>      
                </ul>
            </div>

            <!-- February 2025 -->
            <div class="newsletter-item">
                <h4>February 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-02/Year 9 End of Year Trip - 02 07 25 checked.pdf" target="_blank">Year 9 End of Year Trip - 2nd July 2025</a></li> 
                    <li><a href="/assets/letters/2025-02/Year 8 End of Year trip.pdf" target="_blank">Year 8 End of Year Trip - 1st July 2025</a></li> 
                    <li><a href="/assets/letters/2025-02/Year 7 End Of Year Trip - 30 06 25 (1).pdf" target="_blank">Year 7 End of Year Trip - 30th June 2025</a></li> 
                    <li><a href="/assets/letters/2025-02/Park Newsletter 17 Feb 1.pdf" target="_blank">Newsletter - 17th February 2025</a></li>    
                    <li><a href="/assets/letters/2025-02/Half Term Review 140225.pdf" target="_blank">Year 9 Half Term Review - February 2025</a></li>    
                    <li><a href="/assets/letters/2025-02/Student Review Day 14 February 2025.pdf" target="_blank">Student Review Day 14 February 2025</a></li>    
                </ul>
            </div>

            <!-- January 2025 -->
            <div class="newsletter-item">
                <h4>January 2025</h4>
                <ul>
                    <li><a href="/assets/letters/2025-01/Park Newsletter 27 January 2025.pdf" target="_blank">Newsletter - 27 January 2025</a></li>    
                    <li><a href="/assets/letters/2025-01/National Apprenticeships Week events - 10  11 February 2025.pdf" target="_blank">National Apprenticeships Week Events</a></li>      
                    <li><a href="/assets/letters/2025-01/Duke of Edinburgh Open Evening 24 01 25.pdf" target="_blank">Duke of Edinburgh Open Evening</a></li>     
                    <li><a href="/assets/letters/2025-01/Bude residential - 13-17 October 2025.pdf" target="_blank">Bude Residential - 13-17 October 2025</a></li>    
                    <li><a href="/assets/letters/2025-01/Year 8 - Spring Term 2025.pdf" target="_blank">Year 8 - Spring Term 2025</a></li>     
                    <li><a href="/assets/letters/2025-01/KS3 Autumn Term Reports 2024.pdf" target="_blank">KS3 Autumn Term Reports 2024</a></li>     
                    <li><a href="/assets/letters/2025-01/Year 10 - Spring Term 2025.pdf" target="_blank">Year 10 - Spring Term 2025</a></li>      
                </ul>
            </div>

            <!-- December 2024 -->
            <div class="newsletter-item">
                <h4>December 2024</h4>
                <ul>
                    <li><a href="/assets/letters/2024-12/Park Newsletter 20 Dec 2024.pdf" target="_blank">Newsletter - 20th December 2024</a></li>     
                    <li><a href="/assets/letters/2024-12/End Of Term Letter 2024.pdf" target="_blank">End of Term Letter December 2024</a></li>    
                    <li><a href="/assets/letters/2024-12/Year 8 half term letter - December 2024.pdf" target="_blank">Year 8 Half Term Letter</a></li>    
                    <li><a href="/assets/letters/2024-12/Year 10 half term review - December 2024.pdf" target="_blank">Year 10 Half Term Letter</a></li>    
                </ul>
            </div>

            <!-- November 2024 -->
            <div class="newsletter-item">
                <h4>November 2024</h4>
                <ul>
                    <li><a href="/assets/letters/2024-11/Additional Year 11 parents evening 02 12 24.pdf" target="_blank">Additional Year 11 Parents Evening - Monday 2nd December</a></li>    
                    <li><a href="/assets/letters/2024-11/Park Newsletter Nov 2024.pdf" target="_blank">Newsletter - 25th November 2024</a></li>    
                    <li><a href="/assets/letters/2024-11/Year 9 end of half term.pdf" target="_blank">Year 9 End of Half Term</a></li>     
                    <li><a href="/assets/letters/2024-11/Year 10 Testing week 1 18 11 2024.pdf" target="_blank">Year 10 Testing Week 1</a></li>       
                </ul>
            </div>

            <!-- October 2024 -->
            <div class="newsletter-item">
                <h4>October 2024</h4>
                <ul>
                    <li><a href="/assets/letters/2024-10/Year 10 Candidate Exam Handbook 2024-2025.pdf" target="_blank">Year 10 Candidate Exam Handbook 2024 - 2025</a></li>    
                    <li><a href="/assets/havant-federation-statements/Parent letter re Federation Joint Statements - October 2024.pdf" target="_blank">Parent Letter re Federation Joint Statements</a></li>
                    <li><a href="/assets/havant-federation-statements/Joint Statement Mobile Phones Oct 2024.pdf" target="_blank">Joint Statement Mobile Phones</a></li> 
                    <li><a href="/assets/havant-federation-statements/Joint Statement Relational Conflict and Bullying Oct 2024.pdf" target="_blank">Joint Statement Relational Conflict and Bullying</a></li> 
                    <li><a href="/assets/havant-federation-statements/Joint Statement Standards and Attendance Oct 2024.pdf" target="_blank">Joint Statement Standards and Attendance</a></li> 
                    <li><a href="/assets/havant-federation-statements/Joint Statement Vaping and Smoking 2024.pdf" target="_blank">Joint Statement Vaping and Smoking</a></li>    
                    <li><a href="/assets/letters/2024-10/year8-rse-sessions-24.10.24.pdf" target="_blank">Year 8 RSE Session | Thursday 24th October 2024</a></li>    
                    <li><a href="/assets/letters/2024-10/year7-rse-sessions-24.10.24.pdf" target="_blank">Year 7 RSE Session | Thursday 24th October 2024</a></li>     
                    <li><a href="/assets/letters/2024-10/newsletter-14.10.2024.pdf" target="_blank">Newsletter | Monday 14th October 2024</a></li>  
                    <li><a href="/assets/letters/2024-10/science-revision-guide-letter-03-10-24.pdf" target="_blank">Science Revision Guide</a></li>    
                    <li><a href="/assets/letters/2024-10/year-11-parents-evening.pdf" target="_blank">Year 11 Parents Evening | Thursday 17th October 2024</a></li>   
                    <li><a href="/assets/letters/2024-10/year-7-parents-evening.pdf" target="_blank">Year 7 Parents Evening | Thursday 17th October 2024</a></li>
                    <li><a href="/assets/letters/2024-10/year-10-parents-evening-09.10.24.pdf" target="_blank">Year 10 Parents Evening | Wednesday 9th October 2024</a></li>   
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>