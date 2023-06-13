<!doctype html>
<html class="no-js" lang="en" >
    <head>

        <title>Park Community School | Park Community Nursery</title>
        <?php include("includes/head.html") ?>
    </head>
<body class="page-misc">
<!-- NAVIGATION -->
<?php include("includes/topnav.html") ?>

<!-- HEADER SECTION -->
<!DOCTYPE html>
<html>
<head>
    <title>Park Community Nursery</title>
    <style>
        header {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <?php
        $imagePath = 'images\nursery\pcn-converted\converted-nurserylogo-001.png';
        echo '<img src="' . $imagePath . '" alt="Image">';
        ?>
    </header>
<!-- CONTENT -->
<!--nursery-contents-->
<!DOCTYPE html>
<html>
<head>
    <style>
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <section>
        <div class="image-container">
            <?php
            $imagePath = 'images\nursery\pcn-converted\converted-nurseryinfo-001.jpg';
            echo '<img src="' . $imagePath . '" alt="Image">';
             $imagePath = 'images\nursery\pcn-converted\converted-nurseryinfo-002.jpg';
            echo '<img src="' . $imagePath . '" alt="Image">';
            ?>
        </div>
    </section>
        <div class="image-container">
            <?php
            $imagePath = 'images\nursery\pcn-converted\converted-nursery-footer-001.jpg';
            echo '<img src="' . $imagePath . '" alt="Image">';
            ?>
        </div>
    </div><br>
</section>

<!-- FOOTER -->
<?php include("includes/footer.html") ?>


        <!-- End Site Footer -->
        <script src="js/vendor/libraries.min.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.min.js"></script>
    </body>
</html>
