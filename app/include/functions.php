
<?php

function get_categories(){

    global $link;

    $sql = "SELECT * FROM main_menu";

    $result = mysqli_query($link, $sql);

    $main_menu = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $main_menu;

}

function get_arts(){

    global $link;

    $sql = "SELECT * FROM art_arts";

    $result = mysqli_query($link, $sql);

    $art_arts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $art_arts;
}

function get_art_img(){

    global $link;

    $sql = "SELECT * FROM pictures";

    $result = mysqli_query($link, $sql);

    $pictures = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $pictures;
}

function get_term_list(){
    global $link;

    $sql = "SELECT term FROM vocabulary ORDER BY term ASC";

    $result = mysqli_query($link, $sql);

    $vocabulary = array();

    while($rows = mysqli_fetch_row($result)){

        $vocabulary[] = $rows[0];

    }

    return $vocabulary;
}

function get_vocabulary_term(){

    global $link;

    $sql = "SELECT * FROM vocabulary ORDER BY term ASC";

    $result = mysqli_query($link, $sql);

    $vocabulary = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $vocabulary;
}

function get_carusel_info(){

    global $link;

    $sql = "SELECT * FROM carusel_home";

    $result = mysqli_query($link, $sql);

    $carusel_home = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $carusel_home;
}

