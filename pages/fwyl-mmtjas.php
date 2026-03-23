<?php
$pageTitle = 'Park Community School | Much More Than Just a School Carousel Curriculum';
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

    .content-section h4 {
        color: #333;
        font-size: 1.1rem;
        margin-top: 1.5rem;
        margin-bottom: 0.5rem;
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

    .content-section a {
        color: #F58220;
    }

    .content-section a:hover {
        color: #d96f1a;
    }

    .curriculum-table {
        width: 100%;
        border-collapse: collapse;
        margin: 1.25rem 0 1.75rem;
        font-size: 0.9rem;
    }

    .curriculum-table thead th {
        background-color: #F58220;
        color: #fff;
        padding: 0.65rem 1rem;
        text-align: left;
        font-weight: 600;
        border: 1px solid #e0820a;
    }

    .curriculum-table tbody td {
        padding: 0.6rem 1rem;
        border: 1px solid #ddd;
        vertical-align: top;
        line-height: 1.7;
    }

    .curriculum-table tbody tr:nth-child(even) {
        background-color: #fafafa;
    }

    .curriculum-table tbody tr:hover {
        background-color: #fff8f0;
    }

    .curriculum-table .stage-label {
        font-weight: 700;
        white-space: nowrap;
        color: #333;
    }

    .four-image-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0.75rem;
        margin: 1.25rem 0 1.75rem;
    }

    .two-image-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
        margin: 1.25rem auto 1.75rem;
        max-width: 640px;
    }

    .three-image-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0.75rem;
        margin: 1.25rem 0 1.75rem;
    }

    .four-image-grid img,
    .two-image-grid img,
    .three-image-grid img {
        width: 100%;
        height: 200px;
        object-fit: contain;
        object-position: center center;
        background: #f5f5f5;
        border-radius: 6px;
        display: block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .section-divider {
        border: none;
        border-top: 2px solid #f0f0f0;
        margin: 2.5rem 0;
    }

    @media screen and (max-width: 640px) {
        .four-image-grid  { grid-template-columns: repeat(2, 1fr); }
        .two-image-grid   { grid-template-columns: 1fr; }
        .three-image-grid { grid-template-columns: 1fr; }
    }

</style>


<!-- Breadcrumb -->
<div class="grid-container">
    <ul class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
        <li role="menuitem"><a href="/pages/curriculum.php">Curriculum</a></li>
        <li role="menuitem" class="current"><a href="#">Much More Than Just a School Carousel Curriculum</a></li>
    </ul>
</div>

<!-- CONTENT -->
<section class="content-section">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell large-12">

                <h3>Much More Than Just a School Carousel Curriculum</h3>

                <p><strong>INTENT:</strong></p>
                <p>Students in Years 7, 8, 9 all take part in the carousel of experiences and learning throughout the year.</p>
                <p>The carousel aims to:</p>
                <ul>
                    <li>To inspire students to find what they love to do</li>
                    <li>Development of new skills and application to the real world</li>
                    <li>To provide experience of career pathways and work</li>
                </ul>

                <p>Horticulture and animal care at The Farm - Students spend time at the small holding, developing teamwork and problem solving skills. This includes growing new crops maintaining beds and basic animal care.</p>
                <p>Enterprise at Park Design and Print: Students will learn about design and printing processes and apply these to create and produce their own design - exercise books, mugs and much more.</p>
                <p>Catering in The School Kitchen: Students experienced life in a working kitchen, learning basic food prep skills and contributing to preparing food for our school community.</p>
                <p>Construction skills at The Apex Centre: Students experience basic construction skills including plastering and some bricklaying. This includes preparation and tidying.</p>
                <p>Media skills in The Media Suite: Students learn about the production skills in the suite and apply the to a simple podcast or recording interview.</p>

                <div style="text-align: center; margin: 1.5rem 0 2rem;">
                    <img src="../images/fwyl-mmtjas/MMTJAS arrow .jpg" alt="Engage – Develop Skills – Career Transition" style="max-width: 420px; width: 100%; height: auto;">
                </div>

                <p><strong>We will develop Attainment, Resilience and Autonomy by:</strong></p>
                <ul>
                    <li>Inspiring students to find what they love to do</li>
                    <li>Empowering students to develop new skills</li>
                    <li>Support students in making informed career decisions</li>
                </ul>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th>Skills and knowledge</th>
                            <th>Wellbeing</th>
                            <th>Environment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>Students understand the importance a range of industries and the opportunities that exist with them</li>
                                    <li>Students are given opportunities to Prepare, Practise and Perform key skills</li>
                                    <li>Students take practical steps towards making informed career choices</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Students find joy and satisfaction in new experiences and skills</li>
                                    <li>Students are involved and inspired to develop new skills</li>
                                    <li>Students understand that green spaces are beneficial to mental and physical health</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Students experience diverse, out of classroom, working environments</li>
                                    <li>Students are positive advocates for sustainability</li>
                                    <li>Students understand their role in the wider world and how their career choices impact on the wider world</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <hr class="section-divider">

                <!-- ===================== HORTICULTURE ===================== -->
                <h3>Horticulture and animal care at The Farm:</h3>

                <p>Students spend time at Park's small holding, using teamwork skills and building resilience when tackling physical activity. Students develop problem solving approaches and learn about growing crops and animal care.</p>

                <div class="four-image-grid">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Horticulture 1.jpg" alt="Horticulture and animal care at The Farm">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Horticulture 2.jpg" alt="Horticulture and animal care at The Farm">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Horticulture 3.jpg" alt="Horticulture and animal care at The Farm">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Horticulture 4.jpg" alt="Horticulture and animal care at The Farm">
                </div>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th colspan="2">Knowledge</th>
                            <th colspan="2">Skills</th>
                            <th colspan="2">Vocabulary</th>
                        </tr>
                        <tr>
                            <th>Horticulture</th>
                            <th>Animal Care</th>
                            <th>Horticulture</th>
                            <th>Animal Care</th>
                            <th>Horticulture</th>
                            <th>Animal Care</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>List the steps required in bed preparation in correct order.</li>
                                    <li>State the problems that can occur when plants are planted at incorrect depth.</li>
                                    <li>State reasons for applying organic mulch.</li>
                                    <li>Identify when plants need to be watered.</li>
                                    <li>Know how to water a bed, border or plants in containers with guidance Know how to cultivate land by single digging or forking with close supervision.</li>
                                    <li>State the problems that can occur when watering plants State how to cultivate land by single digging or forking Identify the tasks involved in caring for a planted area</li>
                                    <li>State the tasks involved in supporting plants on wires, frames or trellis</li>
                                    <li>List steps in sowing seeds outdoors</li>
                                    <li>State why the depth of drill is important.</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Name different stages of a pig/goat's life.</li>
                                    <li>State quantity and cost of animal food required each day/year.</li>
                                    <li>Know the lifespan of our pigs and the route to being our food.</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Prepare ground for sowing or planting under supervision</li>
                                    <li>Be able to plant container grown plants with close guidance</li>
                                    <li>Know how to prepare soil and apply organic mulch</li>
                                    <li>Care for a planted area under supervision Support plants on wires, frames or trellis under supervision</li>
                                    <li>Sow seeds outdoors in drills by hand under supervision</li>
                                    <li>Sow seeds indoors in containers under close supervision</li>
                                    <li>List the steps required in bed preparation in correct order</li>
                                    <li>State the problems that can occur when plants are planted at incorrect depth</li>
                                    <li>State reasons for applying organic mulch</li>
                                    <li>Identify when plants need to be watered</li>
                                    <li>Know how to water a bed, border or plants in containers with guidance Know how to cultivate land by single digging or forking with close supervision</li>
                                    <li>Support plants on wires, frames or trellis under supervision</li>
                                    <li>Sow seeds outdoors in drills by hand under supervision Sow seeds indoors in containers under close supervision</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>With close guidance feed and water animals from outside pens Transport straw and woodchip safely and use it to provide comfort for animals</li>
                                    <li>Care for a planted area under supervision</li>
                                </ul>
                            </td>
                            <td>Horticulture Mulch Organic (as in 'from once-living things' rather than artificial chemicalfree) Compost, wood chip, inorganic Polytunnel Rake, spade, shovel, hoe, weed proof membrane, secateurs, fork</td>
                            <td>Animal Care Trellis, frame, ties Drill (straight line of sowing) Peat, growing medium, Pricking out, dibber, irrigation, module</td>
                        </tr>
                    </tbody>
                </table>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th>Stage</th>
                            <th>Knowledge</th>
                            <th>Skills</th>
                            <th>Vocabulary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="stage-label">Stage 1</td>
                            <td>
                                <ul>
                                    <li>State reasons for applying organic mulch.</li>
                                    <li>Identify when plants need to be watered.</li>
                                    <li>Know how to water a bed, border or plants in containers with guidance Know how to cultivate land by single digging or forking with close supervision.</li>
                                    <li>Care for a planted area under supervision Support plants on wires, frames or trellis under supervision</li>
                                    <li>Sow seeds outdoors in drills by hand under supervision</li>
                                    <li>Sow seeds indoors in containers under close supervision</li>
                                    <li>State the problems that can occur when watering plants State how to cultivate land by single digging or forking Identify the tasks involved in caring for a planted area</li>
                                    <li>State the tasks involved in supporting plants on wires, frames or trellis</li>
                                    <li>List steps in sowing seeds outdoors</li>
                                    <li>State why the depth of drill is important.</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Care for a planted area under supervision Support plants on wires, frames or trellis under supervision</li>
                                    <li>Sow seeds outdoors in drills by hand under supervision Sow seeds indoors in containers under close supervision</li>
                                    <li>List the steps required in bed preparation in correct order</li>
                                    <li>State the problems that can occur when plants are planted at incorrect depth</li>
                                    <li>State reasons for applying organic mulch</li>
                                    <li>Identify when plants need to be watered</li>
                                    <li>Know how to water a bed, border or plants in containers with guidance Know how to cultivate land by single digging or forking with close supervision</li>
                                    <li>Support plants on wires, frames or trellis under supervision</li>
                                    <li>Sow seeds outdoors in drills by hand under supervision Sow seeds indoors in containers under close supervision</li>
                                </ul>
                            </td>
                            <td>Trellis, frame, ties Drill (straight line of sowing) Peat, growing medium, Sexual maturity</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 2</td>
                            <td>As above and state the tasks involved in pricking out. Know industrial living conditions for pigs, including area required to be labelled 'free range'. Know the difference between hay and straw and what they are used for on a farm.</td>
                            <td>Prick out seedlings singly under supervision. With some guidance feed and water animals in a way that ensures a fair distribution of food. Calculate quantities of food required. Plus all stage 1 skills with less supervision</td>
                            <td>Trellis, frame, ties Drill (straight line of sowing) Peat, growing medium, Pricking out, dibber, irrigation, module</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 3</td>
                            <td>As above Animal care: Know the difference between free range and organic</td>
                            <td>All the above but moving towards completely independent work, perhaps after being shown once. All the above but moving towards completely independent work, perhaps after being shown once. As above working independently, including within the pens. With guidance, maintain animal housing and enclosures, including using power tools</td>
                            <td>Organic</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Potential Curriculum links:</h4>
                <ul>
                    <li>Science- linked to plants/ cells</li>
                    <li>English-creative writing opportunities/ transactional writing- instructions</li>
                    <li>Geography- climate- other potential topics</li>
                    <li>Food tech</li>
                </ul>

                <hr class="section-divider">

                <!-- ===================== ENTERPRISE / PDP ===================== -->
                <h3>Enterprise at Park Design and Print:</h3>

                <p>Students spend time at Park's print shop, working as a team to complete a problem-solving challenge, learning about printing processes and having an introduction to design.</p>

                <div class="four-image-grid">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Enterprise1.jpg" alt="Enterprise at Park Design and Print">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Enterprise2.jpg" alt="Enterprise at Park Design and Print">
                    <img src="../images/fwyl-mmtjas/MMTJAS - daisy.jpg" alt="Enterprise at Park Design and Print">
                    <img src="../images/fwyl-mmtjas/MMTJAS - PDP .jpg" alt="Enterprise at Park Design and Print">
                </div>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th>Stage</th>
                            <th>Knowledge</th>
                            <th>Skills</th>
                            <th>Vocabulary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="stage-label">Stage 1</td>
                            <td>Paper sizes- what they are and what they might be used for. Where to locate them in the print shop. How a booklet is made- from the document that is sent electronically to the finished product that they may see in school. Know what key machines in the print shop do. Understand how the job roles and service provided by PDP relates to them- for example the student planner. An introduction to design skills and processes. Know the job roles involved in this business.</td>
                            <td>Guided: Teamwork Problem-solving skills. Planning skills- looking at other models Design task- create a real-life product Creativity</td>
                            <td>Guillotine, SRA3, Simplex and duplex printing, Layout, Colour, Graphic designer, Printer, Manager, Stapling</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 2</td>
                            <td>Recall key information from first visit- in terms of job roles, key machinery and processes Understand the finishing processes such as binding and why this is important</td>
                            <td>Structured: Teamwork Problem-solving skills. Planning skills- looking at other models Design task- create a real-life product Creativity</td>
                            <td>Production presses, Folding and creasing, Wide format printing, Negative space, Layout, Binding- wire and coil binding, Stapling</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 3</td>
                            <td>Recall and present key information from last visit. Understand the structure of the print-use numeracy skills to work out number of copies per page</td>
                            <td>Independent: Teamwork Problem-solving skills. Planning skills- looking at other models Design task- create a real-life product Creativity</td>
                            <td>Font, Image, Use of bleed, Use of colour, Saddle stitching, Imposition</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Potential Curriculum links:</h4>
                <ul>
                    <li>Tech/art/media- design processes/colour etc</li>
                    <li>English- presentational devices?</li>
                </ul>

                <hr class="section-divider">

                <!-- ===================== CATERING ===================== -->
                <h3>Catering in The School Kitchen:</h3>

                <p>Students will experience of a working catering environment. Application of the 4C's to a real-life catering establishment.</p>

                <div class="four-image-grid">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Catering1.jpg" alt="Catering in The School Kitchen">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Catering2.jpg" alt="Catering in The School Kitchen">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Catering3.jpg" alt="Catering in The School Kitchen">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Catering  .jpg" alt="Catering in The School Kitchen">
                </div>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th>Stage</th>
                            <th>Knowledge</th>
                            <th>Skills</th>
                            <th>Vocabulary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="stage-label">Stage 1</td>
                            <td>How to apply their knowledge of 4C's to real life catering establishments.</td>
                            <td>Putting into Practise their Health and Hygiene knowledge. Cleaning, Chilling, Cross contamination prevention, cooking skills.</td>
                            <td>Cross- Contamination, Chilling, Cooking , Cleaning</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 2</td>
                            <td>Job roles in the kitchen: Georges-Auguste Escoffier</td>
                            <td>How to prepare a dish by having a specific role to fulfil. Teamwork with other chefs.</td>
                            <td>Kitchen Brigade, Georges-Auguste Escoffier, Head Chef, Sous Chef, Chef de partie, Commis Chef, Kitchen porter</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 3</td>
                            <td>Catering management- fulfilling the role of Head chef</td>
                            <td>Management, organisation and delegation.</td>
                            <td>Hotel Manager, Executive chef, Job allocation, Contracts</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Potential Curriculum links:</h4>
                <ul>
                    <li>Picked up in food tech- compliments curriculum.</li>
                    <li>Evidence from this will be used in student portfolios</li>
                    <li>English- review writing</li>
                    <li>Maths links- key numeracy skills- weights/measures</li>
                    <li>H&amp;S</li>
                    <li>Potential science links</li>
                </ul>

                <hr class="section-divider">

                <!-- ===================== CONSTRUCTION ===================== -->
                <h3>Construction skills at The Apex Centre:</h3>

                <p>Students will experience of construction skills and their relevance to real life settings.</p>

                <div class="four-image-grid">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Construction1.jpg" alt="Construction skills at The Apex Centre">
                    <img src="../images/fwyl-mmtjas/MMTJAS - Construction2.jpg" alt="Construction skills at The Apex Centre">
                    <img src="../images/fwyl-mmtjas/MMTJAS construction....jpg" alt="Construction skills at The Apex Centre">
                    <img src="../images/fwyl-mmtjas/MMTJAS - construction .jpg" alt="Construction skills at The Apex Centre">
                </div>

                <table class="curriculum-table">
                    <thead>
                        <tr>
                            <th>Stage</th>
                            <th>Knowledge</th>
                            <th>Skills</th>
                            <th>Vocabulary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="stage-label">Stage 1</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 2</td>
                            <td>Health and Safety rules on a building site including PPE. Know basic brickwork/plastering/wallpapering procedures.</td>
                            <td>Learning the skill of laying a brick/plastering a wall/wallpapering a wall using specific techniques and procedures</td>
                            <td>PPE – Personal Protective equipment Bricks Frog Mortar/Board Trowel</td>
                        </tr>
                        <tr>
                            <td class="stage-label">Stage 3</td>
                            <td>Advanced Health and Safety rules on a building site including PPE. Know brickwork types /plastering types.</td>
                            <td>Developing the skill of laying a brick/plastering a wall/ wall using specific techniques and procedures. Skill increases by complexity of application.</td>
                            <td>PPE – Personal Protective equipment Bricks Frog Mortar/Board Trowel Hawk Mixer</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Potential Curriculum links:</h4>
                <ul>
                    <li>Technology at Key Stage 3 and 4.</li>
                </ul>

                <hr class="section-divider">

                <!-- ===================== MEDIA ===================== -->
                <h3>Media skills in The Media Suite:</h3>

                <p>Students learn about the production skills in the suite and apply the to a simple podcast or recording interview.</p>

            </div>
        </div>
    </div>
</section>

<?php include('../partials/footer.php'); ?>