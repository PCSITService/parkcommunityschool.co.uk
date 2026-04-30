<?php
$pageTitle = 'Park Community School | Get into Teaching';
include('../partials/header.php');
?>

<style>
    .content-section {
        padding: 2rem 0 4rem;
    }
    
    .content-section p {
        line-height: 1.8;
        margin-bottom: 1.25rem;
    }
    
    .scitt-partners {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin: 2rem 0;
        max-width: 900px;
    }
    
    .scitt-card {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 1.75rem 1.5rem;
        text-align: center;
        border: 2px solid #e0e0e0;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 220px;
    }
    
    .scitt-card:hover {
        border-color: #a3cd42;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transform: translateY(-3px);
    }
    
    .scitt-card h4 {
        color: #a3cd42;
        margin-bottom: 1rem;
    }
    
    .scitt-card p {
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }
    
    .scitt-card .button {
        background-color: #a3cd42;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s ease;
        margin-top: auto;
        align-self: center;
    }
    
    .scitt-card .button:hover {
        background-color: #8fb332;
        color: white;
    }
    
    .contact-box {
        background: linear-gradient(135deg, #a3cd42, #8fb332);
        border-radius: 12px;
        padding: 2rem;
        margin-top: 2rem;
        color: white;
    }
    
    .contact-box h4 {
        color: white;
        margin-bottom: 1rem;
    }
    
    .contact-box p {
        margin-bottom: 0.5rem;
    }
    
    .contact-box a {
        color: white;
        font-weight: 600;
        text-decoration: underline;
    }
    
    .contact-box a:hover {
        opacity: 0.9;
    }
    
    .benefits-list {
        background: #f8f9fa;
        border-left: 4px solid #a3cd42;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
    }
    
    .benefits-list h4 {
        color: #a3cd42;
        margin-top: 0;
        margin-bottom: 1rem;
    }
    
    .benefits-list ul {
        margin: 0;
        padding-left: 1.25rem;
    }
    
    .benefits-list ul li {
        margin-bottom: 0.5rem;
    }
</style>


<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell medium-8">
                <p>As a school we are keen to support those interested in a career in teaching, and work with South Farham SCITT, TeachFirst and multiple universities as our local training providers. These include University of Chichester, Portsmouth, Brighton and Winchester.</p>
                
                <p>Our school provides the ideal opportunity to undertake and complete your teacher training. We offer expert in-school support through subject mentorship complemented by a school professional themes programme.</p>
                
                <div class="benefits-list">
                    <h4>What We Offer</h4>
                    <ul>
                        <li>Teaching opportunities across Key Stage 3 and Key Stage 4</li>
                        <li>Experience working with a tutor group</li>
                        <li>Complete immersion into the school environment</li>
                        <li>Expert subject mentorship</li>
                        <li>Professional themes programme</li>
                    </ul>
                </div>
                
                <p>South Farnham offers quality cross-phase teacher training. A School Centred Initial Teacher Training (SCITT) programme allows you to learn the craft of teaching in a school with children and experienced teachers, working as part of the team. You can complete a SCITT with or without the PGCE qualification. The universities offer the more traditional PGCE routes into teaching, with University of Brighton also offering an apprenticeship pathway.</p>
                
                <p>Each trainee teacher is supported in school by an experienced mentor along with access to dedicated teachers. Subject specialists support trainee teachers to develop their subject knowledge. Core curriculum training sessions take place in school, online and at dedicated training centres, depending on which SCITT/university programme you are part of.</p>
            </div>
        </div>
        
        <div class="grid-x grid-padding-x">
            <div class="cell medium-12">
                <div class="scitt-partners">
                    <div class="scitt-card">
                        <h4>South Farnham SCITT</h4>
                        <p>Quality cross-phase teacher training based in Hampshire</p>
                        <a href="https://www.ssfscitt.org.uk/" target="_blank" class="button">Visit Website</a>
                    </div>
                    <div class="scitt-card">
                        <h4>University of Portsmouth</h4>
                        <p>Outstanding teacher training provision in Hampshire</p>
                        <a href="https://www.port.ac.uk/news-events-and-blogs/blogs/study-and-student-life/studying-a-pgce-at-portsmouth" target="_blank" class="button">Visit Website</a>
                    </div>
                    <div class="scitt-card">
                        <h4>University of Chichester</h4>
                        <p>Outstanding teacher training provision in Hampshire</p>
                        <a href="https://www.chi.ac.uk/study/postgraduate/a-career-in-teaching/" target="_blank" class="button">Visit Website</a>
                    </div>
                    <div class="scitt-card">
                        <h4>University of Brighton</h4>
                        <p>Outstanding teacher training provision in East Sussex</p>
                        <a href="https://www.brighton.ac.uk/studying-here/subject-areas/education-and-teaching/teaching-undergraduate/index.aspx" target="_blank" class="button">Visit Website</a>
                    </div>
                    <div class="scitt-card">
                        <h4>University of Winchester</h4>
                        <p>Outstanding teacher training provision in Hampshire</p>
                        <a href="https://www.winchester.ac.uk/study/subjects/Teaching-Education-and-Childhood-Studies/" target="_blank" class="button">Visit Website</a>
                    </div>
                </div>
                
                <div class="contact-box">
                    <h4>Interested in School Experience?</h4>
                    <p>School experience with our school is available. Please contact Laura Firbank for further information:</p>
                    <p><a href="mailto:l.firbank@pcs.hants.sch.uk">l.firbank@pcs.hants.sch.uk</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>