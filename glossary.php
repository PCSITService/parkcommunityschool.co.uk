<?php
$pageTitle = 'Park Community School | Glossary';
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
        text-transform: capitalize;
    }
    
    .content-section {
        padding: 1rem 0 3rem;
    }
    
    .intro-text {
        margin-bottom: 1.5rem;
        line-height: 1.7;
    }
    
    .letter-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        padding: 1rem;
        background: #f5f5f5;
        border-radius: 8px;
        margin-bottom: 2rem;
    }
    
    .letter-nav a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: #1E7AB9;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .letter-nav a:hover {
        background: #165a8a;
        transform: translateY(-2px);
    }
    
    .letter-heading {
        color: #1E7AB9;
        font-size: 2rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 3px solid #1E7AB9;
        scroll-margin-top: 20px;
    }
    
    .term-heading {
        color: #333;
        font-size: 1.2rem;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .term-definition {
        margin-bottom: 1rem;
        line-height: 1.7;
        color: #555;
    }
    
    .term-definition ul {
        margin-top: 0.5rem;
        margin-bottom: 1rem;
    }
    
    .term-definition ul li {
        margin-bottom: 0.25rem;
    }
    
    .back-to-top {
        display: inline-block;
        margin-top: 2rem;
        padding: 0.5rem 1rem;
        background: #1E7AB9;
        color: white;
        border-radius: 4px;
        text-decoration: none;
        font-size: 0.9rem;
    }
    
    .back-to-top:hover {
        background: #165a8a;
        color: white;
    }
    
    @media (max-width: 639px) {
        .letter-nav a {
            width: 32px;
            height: 32px;
            font-size: 0.9rem;
        }
    }
</style>

<!-- HEADER SECTION -->
<header class="page-header">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8 large-8">
                <h1>Glossary</h1>
                <p>A Compilation of Educational Terms</p>
            </div>
        </div>
    </div>
</header>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <p class="intro-text">Many educational terms are unfamiliar. Below you will find a list of educational terms with their definitions.</p>
                
                <nav class="letter-nav" id="top">
                    <a href="#letterA">A</a>
                    <a href="#letterB">B</a>
                    <a href="#letterC">C</a>
                    <a href="#letterD">D</a>
                    <a href="#letterE">E</a>
                    <a href="#letterF">F</a>
                    <a href="#letterG">G</a>
                    <a href="#letterH">H</a>
                    <a href="#letterI">I</a>
                    <a href="#letterJ">J</a>
                    <a href="#letterK">K</a>
                    <a href="#letterL">L</a>
                    <a href="#letterM">M</a>
                    <a href="#letterN">N</a>
                    <a href="#letterO">O</a>
                    <a href="#letterP">P</a>
                    <a href="#letterQ">Q</a>
                    <a href="#letterR">R</a>
                    <a href="#letterS">S</a>
                    <a href="#letterT">T</a>
                    <a href="#letterU">U</a>
                    <a href="#letterV">V</a>
                    <a href="#letterW">W</a>
                    <a href="#letterX">X</a>
                    <a href="#letterY">Y</a>
                    <a href="#letterZ">Z</a>
                </nav>

                <h2 class="letter-heading" id="letterA">A</h2>

                <h4 class="term-heading">Academies</h4>
                <p class="term-definition">Academies are independent, publicly-funded schools. Academies receive their funding directly from the Department for Education, rather than the local council or educational authority. Academies must follow the same rules on admissions, special educational needs and exclusions as other state schools, but they do not have to follow the national curriculum. Each academy or academy chain is run by a trust which employs the staff.</p>

                <h4 class="term-heading">A Level</h4>
                <p class="term-definition">Short for General Certificate of Education Advanced Level, A Levels are studied between the ages of 16-18 years. Exams are often sat at the end of both years. The first year of A Level is called AS Level (Advanced Subsidiary) and the second year is called A2. Together they make up an A Level. The curriculum is set by the government but the exams and specifications (syllabuses) are set by individual exam boards.</p>
                
                <h4 class="term-heading">Apprenticeships</h4>
                <p class="term-definition">A way of learning and achieving qualifications whilst in employment gaining workplace experience.</p>
                
                <h4 class="term-heading">AQA</h4>
                <p class="term-definition">Assessment and Qualifications Alliance – an awarding body.</p>
                
                <h4 class="term-heading">Attainment 8</h4>
                <p class="term-definition">Used in secondary schools, Attainment 8 records a pupil's achievement across eight qualifications, including Maths and English.</p>


                <h2 class="letter-heading" id="letterB">B</h2>

                <h4 class="term-heading">BA (Hons)</h4>
                <p class="term-definition">Bachelor of Arts (with Honours) – a degree award.</p>
                
                <h4 class="term-heading">BSc (Hons)</h4>
                <p class="term-definition">Bachelor of Science (with Honours) – a degree award.</p>
                
                <h4 class="term-heading">BTEC</h4>
                <p class="term-definition">Business and Technician Education Council – offering vocational qualifications for access to specific careers or higher education.</p>


                <h2 class="letter-heading" id="letterC">C</h2>

                <h4 class="term-heading">Comprehensive school</h4>
                <p class="term-definition">Comprehensive schools are secondary level state-funded schools, that do not select their students on the basis of achievement or their academic aptitude. They should accept any applicable students from within a geographical area. They differ from grammar schools, which selects pupils on the basis of their grade at the 11+ exam. Today, most comprehensives are also academies.</p>


                <h2 class="letter-heading" id="letterD">D</h2>

                <h4 class="term-heading">DfE</h4>
                <p class="term-definition">Department for Education – a department of the UK government responsible for issues affecting young people in England up to the age of 19.</p>
                
                <h4 class="term-heading">DIPHE</h4>
                <p class="term-definition">Diploma of Higher Education.</p>


                <h2 class="letter-heading" id="letterE">E</h2>

                <h4 class="term-heading">Edexcel</h4>
                <p class="term-definition">Edexcel is a UK exam board offering a range of qualifications including GCSE.</p>
                
                <h4 class="term-heading">ECM</h4>
                <p class="term-definition">Every Child Matters – a government initiative that aims to ensure that every child, whatever their background or their circumstances, has the support they need to be healthy, stay safe, enjoy and achieve, make a positive contribution and achieve economic well-being.</p>


                <h2 class="letter-heading" id="letterF">F</h2>
                
                <h4 class="term-heading">FE</h4>
                <p class="term-definition">Further education – post-compulsory.</p>
                
                <h4 class="term-heading">Framework</h4>
                <p class="term-definition">A guide developed for Key Stage 2 and 3 outlining how and when subjects should be taught.</p>
                
                <h4 class="term-heading">Free schools</h4>
                <p class="term-definition">A free school is a variety of academy; a state-funded, free-to-attend, independent school which is not controlled by a local educational authority. A free school is understood to be "free" from local authority control, rather than describing free for students to attend. Like other academies, free schools may have sponsors, but the sponsor may not control more than 1/5 of a free school's board of trustees. Free schools are allowed to employ teachers who have not gained Qualified Teacher Status (QTS).</p>


                <h2 class="letter-heading" id="letterG">G</h2>

                <h4 class="term-heading">GCSE</h4>
                <p class="term-definition">Short for General Certificate of Secondary Education, GCSEs are studied between the ages of 14-16 years and are assessed by formal exams. GCSEs cover a wide range of subjects and each student chooses several subjects to study. Most are expected to take English, Mathematics, and Science. Coursework may count for part of the final mark depending on the subject and syllabus. The curriculum is set by the government but exams and specifications (syllabuses) are sent by individual exam boards.</p>

                <h4 class="term-heading">Gifted and Talented</h4>
                <p class="term-definition">Gifted and Talented is a phrase used to describe high ability children. The gifted are those with high ability in one or more academic subject, and the talented are those with high ability in sport, music, visual arts and/or performing arts.</p>

                <h4 class="term-heading">Grammar schools</h4>
                <p class="term-definition">Grammar schools are schools that select their students on the basis of their academic aptitude. Historically, grammar schools were the selective level of the Tripartite System of secondary education in the UK from the 1940s to the 1960s. With the introduction of comprehensive schools in the 1970s, many grammar schools converted to comprehensives or became independent, fee-paying schools. Some areas of England, such as Kent and Lincolnshire, retain most elements of the Tripartite System, and select students for grammar schools on the basis of their results at the 11+ exam.</p>

                <h4 class="term-heading">Guided Reading</h4>
                <p class="term-definition">Guided Reading bridges the gap between Shared and Independent Reading. Children are grouped by ability, with up to six children in a group. A book is chosen at 'instructional level' so that children will only have difficulty with one word in ten. The teacher leads the session, reinforcing various reading strategies and focusing on individual children as they read.</p>


                <h2 class="letter-heading" id="letterH">H</h2>

                <h4 class="term-heading">HE</h4>
                <p class="term-definition">Higher education – at university level.</p>


                <h2 class="letter-heading" id="letterI">I</h2>

                <h4 class="term-heading">IB</h4>
                <p class="term-definition">International Baccalaureate – an internationally recognised qualification offered at three levels.</p>

                <h4 class="term-heading">ICT</h4>
                <p class="term-definition">Information and communication technology.</p>


                <h2 class="letter-heading" id="letterJ">J</h2>

                <h4 class="term-heading">JCQ</h4>
                <p class="term-definition">Joint Council for Qualifications.</p>


                <h2 class="letter-heading" id="letterK">K</h2>

                <h4 class="term-heading">Key Stage</h4>
                <p class="term-definition">The national curriculum in the UK defines the minimum educational requirements for students of compulsory school age (5-16 years). It is organised on the basis of five Key Stages. At the end of each Key Stage, students take assessments to determine the levels they have reached.</p>
                <ul>
                    <li>Foundation (Reception/3-5 year olds) - Infant</li>
                    <li>Key Stage 1 (Years 1-2/5-7 year olds) - Nursery</li>
                    <li>Key Stage 2 (Years 3-6/7-11 year olds) - Primary</li>
                    <li>Key Stage 3 (Years 7-9/11-14 year olds) - Lower Secondary</li>
                    <li>Key Stage 4/GCSE (Years 10-11) - Upper Secondary</li>
                </ul>
                <p class="term-definition">After GCSEs students can opt to enter Key Stage 5 and take A Levels (Years 12-13/16-18 years old).</p>


                <h2 class="letter-heading" id="letterL">L</h2>

                <h4 class="term-heading">LA</h4>
                <p class="term-definition">Local authority – a council that has responsibility for providing education to pupils of school age and adult education in its area.</p>


                <h2 class="letter-heading" id="letterM">M</h2>

                <h4 class="term-heading">Multi-academy trust (MAT)</h4>
                <p class="term-definition">A multi-academy trust (MAT) is a group of academies run jointly by one board of directors, working together as one entity to pool resources and improve standards across the trust. A multi-academy trust is usually headed by a CEO, who differs from a traditional headteacher, and may not be a qualified teacher themselves.</p>


                <h2 class="letter-heading" id="letterN">N</h2>

                <h4 class="term-heading">National Curriculum, The</h4>
                <p class="term-definition">The national curriculum is set by the government in the UK and is a program of study outlining what must be taught at each level and giving attainment targets. Not all schools have to follow the national curriculum (such as academies and private schools).</p>

                <h4 class="term-heading">NVQ</h4>
                <p class="term-definition">National Vocational Qualification – work-based awards achieved through assessment and training.</p>

                <h4 class="term-heading">NQT</h4>
                <p class="term-definition">Newly qualified teacher.</p>


                <h2 class="letter-heading" id="letterO">O</h2>

                <h4 class="term-heading">OCR</h4>
                <p class="term-definition">OCR (Oxford Cambridge and RSA Examinations) is a UK exam board offering a range of qualifications including GCSE and A Level.</p>

                <h4 class="term-heading">Ofqual</h4>
                <p class="term-definition">Office of the Qualifications and Examination Regulator – regulatory body for all awarding bodies.</p>

                <h4 class="term-heading">Ofsted</h4>
                <p class="term-definition">Office for Standards in Education, Children's Services and Skills – regulator of care for children and young people, and inspector of education and training for learners of all ages.</p>


                <h2 class="letter-heading" id="letterP">P</h2>

                <h4 class="term-heading">Private schools</h4>
                <p class="term-definition">Private schools (also known as independent schools and in some cases public schools) are schools that charge fees in order to attend. They do not get funding from the government, and do not have to follow the national curriculum. About half of private schools are inspected by Ofsted, while the other half are inspected by either the Independent Schools Inspectorate or the School Inspection Service. Some older and more expensive private schools are known as "public schools" although they are not part of the public sector; these schools were considered historically public because they were open for anyone to attend, provided they could pay the fees.</p>

                <h4 class="term-heading">Progress 8</h4>
                <p class="term-definition">Progress 8 is a measurement scale used to determine the progress a pupil makes from the end of primary school to the end of Key Stage 4. It was introduced in 2016 as a new measure for determining overall school performance. Under Progress 8, pupils' results are compared to the progress of other pupils nationally with similar levels of attainment (using Attainment 8). Students are then judged relative to their attainment and how much progress they have made since the end of primary school. The average scores of a cohort makes up a school's Progress 8 score.</p>


                <h2 class="letter-heading" id="letterQ">Q</h2>

                <h4 class="term-heading">QCA</h4>
                <p class="term-definition">Qualifications and Curriculum Authority.</p>

                <h4 class="term-heading">QCF</h4>
                <p class="term-definition">Qualifications and Credit Framework – framework for recognising skills and qualifications.</p>

                <h4 class="term-heading">Qualification</h4>
                <p class="term-definition">An award made by an awarding body to demonstrate a learner's achievement or competence.</p>

                <h4 class="term-heading">QTS</h4>
                <p class="term-definition">Qualified Teacher Status – achieved through university studies and teaching placement.</p>


                <h2 class="letter-heading" id="letterR">R</h2>
                <p class="term-definition" style="font-style: italic; color: #999;">No terms for this letter yet.</p>

                <h2 class="letter-heading" id="letterS">S</h2>

                <h4 class="term-heading">SATs</h4>
                <p class="term-definition">SATs (officially known as National Curriculum assessments) are the national curriculum tests that are taken at the end of Key Stages 1 and 2. They are designed to help teachers measure students' progress, how much of the curriculum they understand and what they might achieve in the future. SATs attainment levels were abolished in 2016 and replaced with a new judgement framework.</p>

                <h4 class="term-heading">SEN (Special Educational Needs)</h4>
                <p class="term-definition">Children with special educational needs all have learning difficulties or disabilities that make it harder for them to learn or access education than most children of the same age. These children may need extra or different help from that given to other children of the same age.</p>

                <h4 class="term-heading">Special consideration</h4>
                <p class="term-definition">Post-assessment adjustment to grades reflecting temporary illness, injury or other indisposition at the time the assessment was taken.</p>


                <h2 class="letter-heading" id="letterT">T</h2>

                <h4 class="term-heading">Technicals</h4>
                <p class="term-definition">OCR vocational qualifications at Level 2 and Level 3 for students aged 16+, designed to enable progress to employment or further education within the workplace.</p>


                <h2 class="letter-heading" id="letterU">U</h2>

                <h4 class="term-heading">UCAS</h4>
                <p class="term-definition">University and Colleges Admission Service.</p>

                <h4 class="term-heading">UCI</h4>
                <p class="term-definition">Unique Candidate Identifier.</p>

                <h4 class="term-heading">ULN</h4>
                <p class="term-definition">Unique learner number.</p>

                <h4 class="term-heading">UMS</h4>
                <p class="term-definition">Uniform Mark Scale.</p>


                <h2 class="letter-heading" id="letterV">V</h2>
                <p class="term-definition" style="font-style: italic; color: #999;">No terms for this letter yet.</p>

                <h2 class="letter-heading" id="letterW">W</h2>

                <h4 class="term-heading">WJEC</h4>
                <p class="term-definition">WJEC (Welsh Joint Education Committee) is a UK exam board offering a range of qualifications including GCSE.</p>

                <h2 class="letter-heading" id="letterX">X</h2>
                <p class="term-definition" style="font-style: italic; color: #999;">No terms for this letter yet.</p>

                <h2 class="letter-heading" id="letterY">Y</h2>
                <p class="term-definition" style="font-style: italic; color: #999;">No terms for this letter yet.</p>

                <h2 class="letter-heading" id="letterZ">Z</h2>
                <p class="term-definition" style="font-style: italic; color: #999;">No terms for this letter yet.</p>
                
                <a href="#top" class="back-to-top">↑ Back to Top</a>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>