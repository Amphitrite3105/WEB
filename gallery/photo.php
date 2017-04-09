<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link rel="stylesheet" href="../css/home.css" type="text/css" >
    <link rel="stylesheet"  href="../css/style.css">
    <link rel="stylesheet"  href="../libs/galereya-latest/css/jquery.galereya.css">
    <link rel="stylesheet"  href="../libs/galereya-latest/css/jquery.galereya.ie.css">
    <script>
        $(document).ready(function() {
            $('#gal1').galereya();
        });
    </script>

</head>

<body>

<div class="container gallery_main">
    <div class="row">
        <div class= "col-md-4">
            <div class="thumbnail art">
                <a href="/gallery/art.php">
                    <img src="../images/renessans_art.jpg" alt="">
                    <div class="caption">
                        <h1>Живопись</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class= "col-md-4">
            <div class="thumbnail art">
                <a href="/gallery/sculptura.php">
                    <img src="../images/renessans_art.jpg" alt="">
                    <div class="caption">
                        <h1>Скульптура</h1>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail build">
                <a href="/gallery/architecture.php">
                    <img src="../images/renessans_build.jpg" alt="">
                    <div class="caption">
                        <h1>Архитектура</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div id = "gal1">
            <img src="../images/raf.jpg" alt="Rafael" title="Title" data-desc="art" data-category="arts" data-fuulsrc="../images/raf.jpg">
        </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../libs/jquery/jquery-1.11.1.min.js" ></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../libs/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../libs/slick/slick.min.js" ></script>
<script src="../js/slick_ren.js" type="text/javascript"></script>

<script src="../libs/bootstrap/myBsJs.js"></script>
<script src="../js/renJS.js"></script>
<script src="../js/tabs.js"></script>
<script src="../js/jquery.ren.js"></script>

<script src="../libs/galereya-latest/js/jquery.galereya.js"></script>
<script src="../libs/galereya-latest/js/jquery.galereya.min.js"></script>

</body>
</html>