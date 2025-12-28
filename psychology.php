<?php
$pageTitle = 'Park Community School | Psychology';
include('partials/header.php');
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
        line-height: 1.8;
        margin-bottom: 1rem;
    }
    
    .content-section ul {
        margin-bottom: 1.5rem;
    }
    
    .content-section ul li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }
    
    .highlight-box {
        background: linear-gradient(135deg, #fff8f0, #fff);
        border-left: 4px solid #F58220;
        padding: 1.5rem;
        margin: 1.5rem 0;
        border-radius: 0 8px 8px 0;
        font-style: italic;
    }
    
    .highlight-box p {
        margin: 0;
        color: #666;
        font-size: 1.1rem;
    }
    
    .curriculum-table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.5rem 0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }
    
    .curriculum-table thead {
        background: #F58220;
    }
    
    .curriculum-table th {
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 600;
    }
    
    .curriculum-table td {
        padding: 1rem;
        border-bottom: 1px solid #e0e0e0;
        vertical-align: top;
        line-height: 1.6;
    }
    
    .curriculum-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .curriculum-table tbody tr:nth-child(even) {
        background: #f8f9fa;
    }
    
    .curriculum-table tbody tr:hover {
        background: #fff8f0;
    }
    
    .unit-name {
        font-weight: 600;
        color: #F58220;
        white-space: nowrap;
    }
    
    .impact-box {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 2rem;
        margin-top: 1.5rem;
    }
    
    .impact-box h3 {
        margin-top: 0;
    }
    
    @media (max-width: 768px) {
        .curriculum-table {
            font-size: 0.9rem;
        }
        
        .curriculum-table th,
        .curriculum-table td {
            padding: 0.75rem;
        }
        
        .unit-name {
            white-space: normal;
        }
    }
</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Psychology</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">
                <h3>Intent</h3>
                <ul>
                    <li>Engage students in the process of psychological enquiry.</li>
                    <li>Help students develop as effective and independent learners, and as critical and reflective thinkers with enquiring minds.</li>
                    <li>For students to develop an awareness of why psychology matters.</li>
                    <li>Enable students to acquire knowledge and understanding of how psychology works and its essential role in society.</li>
                    <li>Support students in developing an understanding of the relationship between psychology and social, cultural, scientific and contemporary issues, and its impact on everyday life.</li>
                </ul>
                
                <div class="highlight-box">
                    <p>What makes people tick? Why do some people behave the way they do?</p>
                </div>
                
                <p>Psychology is the scientific study of the mind and human behaviour. Psychologists observe and conduct experiments to find out more about the way people act and interact. They try to understand what motivates, challenges or changes us and use this understanding to help us tackle personal and social problems.</p>
                
                <p>At Park Community School we intend to give students a broad introduction to a range of areas within Psychology, to help them develop critical and analytical thinking alongside developing research skills. The course will provide students with a sound understanding of the various methods and approaches in psychology at an introductory level. This will provide a basis for those students who are considering studying Psychology at a higher level.</p>

                <h3>Implementation</h3>
                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Unit</th>
                            <th>Topics and Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="unit-name">Memory</td>
                            <td>This unit explores the processes and structures of our memory. We will explore different models for how our memory works alongside case studies of individuals with abnormal memories.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Perception</td>
                            <td>Through this unit you will explore how it is that we perceive the world the way that we do. We will look at how the brain allows us to see a stable consistent world, the role of nature and nurture in perception, optical illusions and how other factors such as our emotional state can affect our perception of the world.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Development</td>
                            <td>This unit looks at how humans develop and learn. We will explore early brain development, followed by investigating theories of cognitive development and how learning can affect this development. This unit is about how our mental abilities develop and the role education plays in this.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Research Methods</td>
                            <td>This unit is about how psychologists plan, carry out and evaluate their research. It includes elements of the use of data, research types and methodology and ethical issues relating to psychological research.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Social Influence</td>
                            <td>Social Influence looks at how individuals interact with others, and how others can alter our behaviour and responses. Topics range from conformity and obedience, to prosocial and antisocial behaviour in crowds.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Language, Thought and Communication</td>
                            <td>This unit looks at the ways in which human beings communicate. We will explore the relationship between language and thought, how human communication is different from animal communication and the types and influence of non-verbal communication.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Brain and Neuropsychology</td>
                            <td>Brain and Neuropsychology introduces the structure and functions of the brain and nervous system. It then moves on to explore how developments in technology, particularly modern scanning techniques, are advancing our understanding of psychology.</td>
                        </tr>
                        <tr>
                            <td class="unit-name">Psychological Problems</td>
                            <td>This unit offers an introduction to mental health, including its characteristics and the challenges posed by mental health issues to society today. This is followed by an exploration of two specific examples of common mental health issues in the UK: depression and addiction.</td>
                        </tr>
                    </tbody>
                </table>

                <div class="impact-box">
                    <h3>Impact</h3>
                    <p>Students will leave us with a deeper understanding and appreciation of the way our minds work and the influence we have on each other as groups and individuals. They will be more self-aware, and they will leave us having developed critical and analytical thinking, alongside an appreciation of how scientific research is carried out.</p>
                    <p>Students will leave with a GCSE demonstrating their achievement and progress in this subject, more prepared to interact positively with society in modern Britain. They will leave fully prepared to continue studying Psychology at a higher level.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partials/footer.php'); ?>