<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Галерея</title>

    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link href="../css/text.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/home.css" type="text/css" >
    <link rel="stylesheet"  href="../css/style.css"  type="text/css">
    <link rel="stylesheet"  href="../css/ren_content.css"  type="text/css">
    <link rel="stylesheet"  href="../css/map.css"  type="text/css">

    <link rel="stylesheet"  href="../libs/fancybox/dist/jquery.fancybox.css"  type="text/css" media="screen">
    <style>
        footer{
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>


</head>

<body>

<?php
$vocabulary = get_vocabulary_term();
?>

<div class="container">
    <div class="row">
        <?php foreach ($vocabulary as $text) { ?>
        <div class="info_text" id="<?=$text['term']?>" >

            <div class="content_text">

                    <h2 class="text-center"><strong><?= $text['term']?></strong></h2>
                    <div class="col-md-4">
                        <figure class="sign text_img">
                            <a href="../images/vocabulary/<?=$text['img']?>.jpg" data-fancybox="group7" data-caption="<?=$text['term']?> <?=$text['desc']?>">
                                <img src="../images/vocabulary/<?=$text['img']?>.jpg" alt="<?= $text['term']?>" width="300"  class="min_img"></a>
                            <figcaption style="width: 250px;"><?=$text['desc']?></figcaption>
                        </figure>
                    </div>

                    <div class="col-md-8">
                        <p><?=$text['about']?></p>
                    </div>
            </div>

        </div>
        <?php } ?>
    </div>
</div>

<?php
require '../app/footer.php';
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="../libs/jquery/jquery-1.11.1.min.js" ></script>
<script type="text/javascript" src="../libs/galereya-latest/js/jquery.galereya.js"></script>
<script type="text/javascript" src="../libs/fancybox/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.fancybox').fancybox();
    });
</script>



</body>
</html>