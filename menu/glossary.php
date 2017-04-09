<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Терминология</title>

    <?php
    error_reporting(E_ALL);
    require '../app/header.php';
    ?>

    <link rel="stylesheet" href="../css/glossary.css" type="text/css" >

</head>
<body>

<?php $vocabulary = get_term_list()?>


<div class="container">
    <div class="row">
        <div class="column">
                <?php
                foreach( $vocabulary as $k => $val ){

                    // первая буква
                    $fl = get_first_letter( $val );
                    $prev_fl = isset( $vocabulary[ $k-1 ] ) ? get_first_letter( $vocabulary[ $k-1 ] ) : '';
                    if( $prev_fl != $fl ) {?>

                        <h1 class="letter_first"><?=$fl;?></h1>

                    <?php } ?>
                    <!-- данные-->
                    <ul class="vocabulary_list">
                        <a href="http://dev.renaissance.com/menu/text.php#<?=$val?>"><li><?=$val?></li></a>
                    </ul>

                <?php }?>

                <?php
                function get_first_letter($str ) {

                    return mb_substr($str, 0, 1, 'utf-8');
                }?>
            </div>
        </div>
    </div>
</div>

<?php
require '../app/footer.php';
?>

</body>
</html>