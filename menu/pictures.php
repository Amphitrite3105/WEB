<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Галерея</title>

    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link rel="stylesheet"  href="../libs/galereya-latest/css/jquery.galereya.css">
    <link rel="stylesheet"  href="../libs/galereya-latest/css/jquery.galereya.ie.css">



</head>

<body>

<?php
$pictures = get_art_img();
?>

<div class="photo">
    <div id ="galereya">
        <?php foreach ($pictures as $picture){ ?>
            <img src="../images/gallery/<?=$picture['img']?>_sm.jpg" alt="" title="" data-desc="<?=$picture['desc']?>" data-category="<?=$picture['category']?>" data-fullsrc="../images/gallery/<?=$picture['img']?>_lg.jpg">
        <?php } ?>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="../libs/jquery/jquery-1.11.1.min.js" ></script>
<script type="text/javascript" src="../libs/galereya-latest/js/jquery.galereya.js"></script>
<script type="text/javascript" src="../libs/galereya-latest/js/jquery.galereya.min.js"></script>

<script>
    $(document).ready(function() {
        $('#galereya').galereya();
    });
</script>
</body>
</html>