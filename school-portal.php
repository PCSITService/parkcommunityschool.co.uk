<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
    <style>
        .card-img-top {
            width: 100%; /* Ensures that all images fit their container */
            height: 100px; /* Fixed height for uniformity */
            object-fit: contain; /* Keeps the aspect ratio of logos */
            margin: 0 auto; /* Centers the images */
        }
        .card-body h5 {
            font-size: 1rem; /* Adjust title size to make it more uniform */
            overflow: hidden;
            text-overflow: ellipsis; /* Prevents text from overflowing */
            word-wrap: break-word; /* Allow text to wrap */
            hyphens: auto; /* Enable automatic word hyphenation */
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mb-4">Welcome to the School Portal</h1>

        <!-- Brief Explanation Below Heading -->
        <p class="lead mb-5">This portal provides easy access to a variety of resources and tools to support our school community, including staff, students, and parents. Click on the links below to access the platforms you need for efficient learning, communication, and management.</p>

        <!-- Staff Section -->
        <div class="mb-4">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#staffSection" aria-expanded="false" aria-controls="staffSection">
                <span class="bi bi-caret-down-fill"></span> Staff Resources <span class="bi bi-caret-down-fill"></span>
            </button>
            <div class="collapse" id="staffSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-2 mt-3">
                    <!-- Classcharts for Staff -->
                    <div class="col">
                        <a href="https://www.classcharts.com/account/login" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- CPOMs -->
                    <div class="col">
                        <a href="https://www.cpoms.co.uk/" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.cpoms.co.uk/wp-content/uploads/2023/05/CPOMS-Logo_FullColor-Transparent-BG.png" class="card-img-top" alt="CPOMs Logo">
                                <div class="card-body">
                                    <h5 class="card-title">CPOMs</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Google Classroom -->
                    <div class="col">
                        <a href="https://classroom.google.com/" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Google_Classroom_Logo.png" class="card-img-top" alt="Google Classroom Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Google Classroom</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Microsoft 365 -->
                    <div class="col">
                        <a href="https://www.office.com/" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" class="card-img-top" alt="Microsoft 365 Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Microsoft 365</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Tucasi -->
                    <div class="col">
                        <a href="https://www.scopay.com/login" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.tucasi.com/wp-content/uploads/2023/07/logo_tucasi.svg" class="card-img-top" alt="Tucasi Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Tucasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Students Section -->
        <div class="mb-4">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#studentsSection" aria-expanded="false" aria-controls="studentsSection">
                <span class="bi bi-caret-down-fill"></span> Student Resources <span class="bi bi-caret-down-fill"></span>
            </button>
            <div class="collapse" id="studentsSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 mt-3">
                    <!-- Classcharts for Students -->
                    <div class="col">
                        <a href="https://www.classcharts.com/student/login" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Google Classroom -->
                    <div class="col">
                        <a href="https://classroom.google.com/" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Google_Classroom_Logo.png" class="card-img-top" alt="Google Classroom Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Google Classroom</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Microsoft 365 -->
                    <div class="col">
                        <a href="https://www.office.com/" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" class="card-img-top" alt="Microsoft 365 Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Microsoft 365</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Parents Section -->
        <div class="mb-4">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#parentsSection" aria-expanded="false" aria-controls="parentsSection">
                <span class="bi bi-caret-down-fill"></span> Parent Resources <span class="bi bi-caret-down-fill"></span>
            </button>
            <div class="collapse" id="parentsSection">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 mt-3">
                    <!-- Classcharts for Parents -->
                    <div class="col">
                        <a href="https://www.classcharts.com/parent/login" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.classcharts.com/img/logo.png" class="card-img-top" alt="Classcharts Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Classcharts</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Tucasi for Parents -->
                    <div class="col">
                        <a href="https://www.scopay.com/login" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://www.tucasi.com/wp-content/uploads/2023/07/logo_tucasi.svg" class="card-img-top" alt="Tucasi Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Tucasi</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Parents Evening Booking for Parents -->
                    <div class="col">
                        <a href="https://parkc.schoolcloud.co.uk" class="text-decoration-none">
                            <div class="card p-2">
                                <img src="https://pcs.hants.sch.uk/images/logo/schoolcloud-pe.png" class="card-img-top" alt="Parents Evening Booking System Logo">
                                <div class="card-body">
                                    <h5 class="card-title">Parents Evening Booking</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Link to main website -->
        <div class="mt-5">
            <p>To go back to the main website, please click <a href="https://pcs.hants.sch.uk" target="_blank">here</a> or hit the back button on your browser.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
