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
    <link rel="stylesheet" type="text/css" href="../libs/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../libs/slick/slick-theme.css"/>
    <style>
        footer{
            position: absolute;
            bottom: 0;
        }
    </style>
    
</head>
<body>



<div class="container">
    <div class="row">
        <div class="col-md-6 hidden-sm hidden-xs"></div>
        <div class="col-md-6 cite hidden-sm hidden-xs">
            <blockquote class="blockquote">
                <p>Природа так обо всем позаботилась, что повсюду ты находишь, чему учиться.</p>
                <footer class="footer_cite">
                    <p>Леонардо да Винчи</p>
                </footer>
            </blockquote>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="main_page col-md-12 visible-lg visible-md">
            <a href="/map/periods.php">
            <h1>Ренессанс </h1>
            <p>эпоха Возрождения</p>
            </a>
        </div>
    </div>
</div>


<?php  $carusel_home = get_carusel_info()?>

<div class="container main">
    <div class="row">
        <div class="sl col-md-12 hidden-xs hidden-sm">
            <?php foreach ($carusel_home as $carousel) { ?>
            <a href="http://dev.renaissance.com/map/<?=$carousel['link']?>.php">
            <div class="sl_slide"><img src="../images/<?=$carousel['img']?>.jpg" alt="Картинка слайда 1" class="sl_img">
                <div class="sl_text">
                    <h3 class="sl_zag"><?=$carousel['title']?></h3>
                </div>
            </div>
            </a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="main_page col-md-12 visible-xs visible-sm">
            <a href="/map/periods.php">
                <h1>Ренессанс </h1>
                <p>эпоха Возрождения</p>
            </a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-xs-4  visible-xs visible-sm"></div>
        <div class="col-xs-8 cite  visible-sm">
            <blockquote class="blockquote_min">
                <p>Природа так обо всем позаботилась, что повсюду ты находишь, чему учиться.</p>
                <footer class="footer_cite">
                    <p>Леонардо да Винчи</p>
                </footer>
            </blockquote>
        </div>
    </div>
</div>


<?php
require '../app/footer.php';
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../libs/jquery/jquery-1.11.1.min.js" ></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../libs/slick/slick.min.js" ></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="../libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="../libs/bootstrap/myBsJs.js" type="text/javascript"></script>
    <script src="../js/slick_ren.js" type="text/javascript"></script>
    <script src="../js/renJS.js" type="text/javascript"></script>
    <script src="../js/jquery.ren.js" type="text/javascript"></script>
    </body>
</html>