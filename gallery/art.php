<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">

    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link rel="stylesheet" href="../css/home.css" type="text/css" >
    <link rel="stylesheet"  href="../css/style.css" type="text/css" >

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="arts_zag">
                <h1 class="text-center">Художники</h1>
            </div>
        </div>
    </div>
</div>

<?php
$art_arts = get_arts();
$art_arts = array_chunk($art_arts, 6);
?>
<div class="container arts_icon">
    <div class="row">
        <div id="content">
            <?php
            foreach ($art_arts as $art) {
            ?>
            <div>
                <?php
                foreach ($art as $art_properties) {
                ?>
                <div>
                    <div class="thumbnail">
                        <a href="/gallery/<?=$art_properties['link']?>.php">
                            <img src="../images/<?=$art_properties["img"]?>.jpg">
                            <div class="caption">
                                <h2><?=$art_properties["name"]?></h2>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
                <?php
                }
                ?>
        </div>
    </div>
</div>



<?php
require '../app/footer.php';
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


</body>
</html>