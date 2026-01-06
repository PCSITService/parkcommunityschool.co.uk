<?php
$pageTitle = 'Park Community School | Pupil Premium';
include('../partials/header.php');
?>

<style>
    
    
    
    .content-section {
        padding: 2rem 0 3rem;
    }
    
    .content-section h3 {
        color: #a3cd42;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }
    
    .content-section h4 {
        color: #333;
        font-size: 1.15rem;
        margin-bottom: 0.5rem;
    }
    
    .content-section h4 small {
        display: block;
        font-weight: 400;
        color: #666;
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ol,
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ol li,
    .content-section ul li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .content-section a {
        color: #a3cd42;
        font-weight: 600;
    }
    
    .content-section a:hover {
        color: #8fb332;
    }
    
    .content-section img {
        border-radius: 8px;
        width: 100%;
        height: auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    .funding-table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .funding-table td {
        padding: 0.85rem 1rem;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .funding-table tr:last-child td {
        border-bottom: none;
    }
    
    .funding-table tr:nth-child(even) {
        background: #f8f9fa;
    }
    
    .funding-table td:last-child {
        text-align: right;
        font-weight: 600;
        color: #a3cd42;
    }
    
    .grey-section {
        background-color: #f5f5f5;
        padding: 3rem 0;
    }
    
    .data-box {
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .data-box p {
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }
    
    .barriers-box {
        background: white;
        border-left: 4px solid #a3cd42;
        padding: 1.5rem;
        border-radius: 0 8px 8px 0;
        margin-top: 1.5rem;
    }
    
    .barriers-box p:first-child {
        font-weight: 600;
        color: #333;
    }
    
    .interventions-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
        margin: 2rem 0;
    }
    
    .intervention-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        border-top: 4px solid #a3cd42;
    }
    
    .intervention-card h4 {
        margin-top: 0;
    }
    
    .intervention-card hr {
        border: none;
        border-top: 1px solid #e0e0e0;
        margin: 1rem 0;
    }
    
    .intervention-card ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .impact-list li {
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .impact-list li:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }
    
    .impact-list strong {
        color: #a3cd42;
    }
    
    .impact-list em {
        color: #666;
        font-size: 0.9rem;
    }
    
    .recovery-section {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        margin: 1.5rem 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    
    .recovery-section h3 {
        margin-top: 0;
    }
    
    .recovery-section h3:not(:first-child) {
        margin-top: 2rem;
    }
    
    @media (max-width: 768px) {
        .interventions-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<!-- INTRO SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7">
                <p>At Park Community School we are committed to providing ALL students with a great education; securing strong academic outcomes alongside experiences of the curriculum and the world around us which broaden horizons and encourage a love of learning. We encourage students to discover what they love and therefore invest heavily in developing the quality of teaching and enabling all students to access a broad and balanced curriculum, which includes a wealth of experiences outside of the classroom.</p>
                
                <p>Our Pupil Premium Strategy is focussed on 4 broad areas:</p>
                <ol>
                    <li>Behaviour for learning that allows all to succeed</li>
                    <li>Attendance and parental engagement</li>
                    <li>All students to be able to read at their chronological age and above</li>
                    <li>High quality teaching which develops independence</li>
                </ol>

                <p><a href="/assets/pupilpremium/Pupil Premium Statement 2025-2028.pdf" target="_blank">Pupil Premium Strategy Document</a></p>

                <p>Our Pupil Premium strategy is based on a comprehensive understanding of our students, their families and the community. We regularly review its impact using internal and external data and current research produced by the Education Endowment Foundation. Park Community School participated in the 'Improving Outcomes for Disadvantaged Learners' project with Hampshire and Rosendale Research, and took part in the Havant Tackling Disadvantage project in partnership with other local schools and HIAS.</p>
            </div>
            <div class="cell medium-5">
                <img src="/images/pupil-premium/pupil-premium-01.jpg" alt="Park Community School students enjoy school life">
            </div>
        </div>
        
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <p>For Academic Year 2024/2025, the school received the following amounts:</p>
                <table class="funding-table">
                    <tr>
                        <td>Pupil Premium</td>
                        <td>£580,650</td>
                    </tr>
                    <tr>
                        <td>Service Children</td>
                        <td>£2,040</td>
                    </tr>
                    <tr>
                        <td>Post Looked After Children</td>
                        <td>£5,140</td>
                    </tr>
                </table>

                <p><strong>Grant Allocation:</strong> In 2024/2025 the school received £602,087.</p>
                <p>The school spent £722,824 providing additional support for PP students. The Pupil Premium is grant funding and is in addition to the school's delegated budget. The school chooses to invest additional funding from its delegated budget to support Pupil Premium funding.</p>
                <p>The Pupil Premium is allocated by calculating the number of students who are on Free School Meals (FSM) or have had FSM in the last six years. Students who have been in care continuously for more than six months or have a parent in the Armed Services also lead to some additional funding for the school.</p>
            </div>
        </div>
    </div>
</section>

<!-- DATA SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-4 medium-order-1 small-order-2 show-for-medium">
                <img src="/images/pupil-premium/pupil-premium-02.jpg" alt="Park Community School creativity blooms">
            </div>
            <div class="cell medium-8 medium-order-2 small-order-1">
                <div class="data-box">
                    <p><strong>2019:</strong> The gap in achievement between non-PP and PP students in GCSEs was -0.39 for Progress 8 (PP -1.09, non-PP -0.69)</p>
                    <p><strong>2020:</strong> The gap for Basics at 4+ was 20% (non-PP: 48%, PP: 28%). The gap for Basics at 5+ was 7% (non-PP: 14%, PP: 7%)</p>
                    <p><strong>2021:</strong> The gap for Basics at 4+ was 3% (non-PP: 58%, PP: 53%). The gap for Basics at 5+ was 18% (non-PP: 30%, PP: 12%)</p>
                    <p><strong>2020-21:</strong> 1:1 reading intervention with 38 students improved either reading comprehension or decoding age for all students, with 70% improving both. An average improvement was evidenced of at least double ratio gains.</p>
                    <p><strong>2022:</strong> The gap for Basics at 4+ was 14% (non-PP: 33%, PP: 19%). The gap for Basics at 5+ was 6% (non-PP: 12%, PP: 6%)</p>
                    <p><strong>2023:</strong> The gap for Basics at 4+ was 24% (non-PP: 46%, PP: 22%). The gap for Basics at 5+ was 12% (non-PP: 18%, PP: 6%)</p>
                    <p><strong>2024:</strong> The gap for Basics at 4+ was 15% (non-PP: 32%, PP: 17%). The gap for Basics at 5+ was 14% (non-PP: 20%, PP: 6%)</p>
                </div>
                
                <div class="barriers-box">
                    <p>Main barriers to educational achievement faced by eligible students could include:</p>
                    <ul>
                        <li>Low aspiration</li>
                        <li>Gaps in learning, including for a significant number of low reading ages that makes accessing texts a significant challenge</li>
                        <li>Reading ages below chronological age</li>
                        <li>Parents who have poor experiences of school, or have not completed further education or in some cases do not value education</li>
                        <li>Large number of siblings</li>
                        <li>Often in single parent families</li>
                        <li>May have experienced significant trauma in earlier years, e.g. alcohol abuse, domestic violence</li>
                        <li>Lack of trust in, or significant dependence on, outside agencies</li>
                        <li>Inconsistent attendance at school</li>
                        <li>Personal health related and well-being issues</li>
                        <li>Low self-esteem</li>
                        <li>Low exposure to the wider community which impacts negatively on a student's Cultural Capital</li>
                    </ul>
                    <p><em>This is not an exhaustive list and by no means applies to all students who may qualify for Pupil Premium.</em></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INTERVENTIONS SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Pupil Premium Interventions</h3>

                <div class="interventions-grid">
                    <div class="intervention-card">
                        <h4>Teaching &amp; Learning<br><small>Addressing student low aspiration and gaps in learning</small></h4>
                        <hr>
                        <ul>
                            <li>Emphasis on effective feedback and marking</li>
                            <li>Focus on collaborative learning</li>
                            <li>Explicit teaching of memory and revision</li>
                            <li>Residential visits</li>
                            <li>Staff focus on success for all PP students</li>
                            <li>Academic and reading coaches</li>
                            <li>Dedicated projects aimed at raising expectations and aspirations aimed at Year 7 and 8 boys</li>
                        </ul>
                    </div>

                    <div class="intervention-card">
                        <h4>Curriculum Experiences<br><small>School farm and printing unit addressing low aspiration</small></h4>
                        <hr>
                        <ul>
                            <li>Period 6</li>
                            <li>Literacy programmes</li>
                            <li>Interventions to support learning</li>
                            <li>Enrichment activities</li>
                            <li>International visits/trips</li>
                            <li>Social &amp; cultural visits/trips</li>
                            <li>Year 7 and 8 Much More Than Just A School curriculum experiences, including PDP, Farm and school kitchens</li>
                        </ul>
                    </div>

                    <div class="intervention-card">
                        <h4>Inclusion<br><small>Addressing vulnerability from mental health and trauma</small></h4>
                        <hr>
                        <ul>
                            <li>Home Liaison team; fortnightly referral meeting to follow up targeted PP students</li>
                            <li>Referral meeting attended by Heads of House, Welfare, support and guidance leads, SENCO, Deputy Head of School</li>
                            <li>Nurture programmes</li>
                            <li>Individual programmes</li>
                            <li>Medical &amp; Emotional support</li>
                        </ul>
                    </div>

                    <div class="intervention-card">
                        <h4>Community &amp; Partnership<br><small>Addressing education and low aspiration</small></h4>
                        <hr>
                        <ul>
                            <li>Interventions to support families (those families identified on the Supporting Families programme; Attendance where there is family history of poor attendance)</li>
                            <li>IAG (Information, Advice and Guidance) support &amp; intervention</li>
                        </ul>
                    </div>

                    <div class="intervention-card">
                        <h4>Attendance &amp; Behaviour<br><small>Addressing inconsistent attendance and well-being issues</small></h4>
                        <hr>
                        <ul>
                            <li>Attendance groups</li>
                            <li>1:1 Support and intervention</li>
                            <li>Dedicated Attendance team</li>
                            <li>Include provision and parent drop-ins and surgeries</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMPACT MEASUREMENT SECTION -->
<section class="grey-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell medium-7 large-8">
                <h3>How the Impact of Pupil Premium is Measured</h3>

                <ul class="impact-list">
                    <li><strong>Improvement in overall attendance</strong><br><em>Monitored daily by Attendance Officer</em></li>
                    <li><strong>Reduction in the number of persistent absentees and/or improved attendance</strong><br><em>Monitored weekly by Attendance Officer</em></li>
                    <li><strong>Reduction of truancy from lessons</strong><br><em>Monitored by 'alerts' recorded lesson by lesson. Follow up by WSG/on call</em></li>
                    <li><strong>Academic progress and attainment data</strong><br><em>Monitored by HODs, HOYs, mentors and Year 11 intervention team</em></li>
                    <li><strong>Overall attitude to learning scores (OATL)</strong><br><em>Analysed and followed up by Heads of House and tutors</em></li>
                </ul>
            </div>
            <div class="cell medium-5 large-4">
                <img src="/images/pupil-premium/pupil-premium-03.jpg" alt="Teaching at Park Community School is an enjoyable experience">
            </div>
        </div>
    </div>
</section>

<!-- RECOVERY PREMIUM SECTION -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <div class="recovery-section">
                    <h3>Coronavirus Catch-up Premium (2020-2021)</h3>
                    <p>The final allocation of £30,580 of the total funding for academic year 2021/2022 which amounted to £73,400 was received in the summer term. This funding was used to help students secure and close gaps in their literacy and numeracy through small group intervention, 1 to 1 intervention, the reading plus programme and in class support.</p>

                    <p>This money was used for:</p>
                    <ul>
                        <li>One to one reading, spelling and literacy intervention for 49 students</li>
                        <li>Additional classroom support for one class (18 students)</li>
                        <li>Reading Plus programme brought in for use with the year group</li>
                        <li>In total more than 150 students benefitted from this intervention, 49 from 1 to 1 intervention. The impact of this support was measured through: student and parent feedback, progress data, reading and spelling data</li>
                    </ul>

                    <p>All students receiving intervention demonstrated improvement in their reading, language or spelling skills with the average gain at or above double ratio. Spelling and reading data collections demonstrated that this progress was maintained after the intervention therefore demonstrating the mastery of key skills enabling them to continue to make progress.</p>

                    <p>Parent and student feedback demonstrated positive increases regarding confidence and perception of ability alongside willingness to engage in additional learning outside of the classroom.</p>

                    <h3>Recovery Premium (2022-2023)</h3>
                    <p>During the academic year 2022/2023, £137,793 was allocated to support education recovery as a result of the COVID pandemic. The school will continue with the interventions put in place using the coronavirus catch-up premium funding and this funding will continue for academic year 2023/2024. (£74,723 was received in academic year 2022-2023)</p>

                    <h3>National Tutoring Programme (2022-2023)</h3>
                    <p>The school has been allocated £81,648 for the academic year 2022/2023 to source tutoring in either small group arrangements or 1 to 1 tuition via the National Tutoring Programme.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>