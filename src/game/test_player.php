<?php
    include './config.php';

    //$db = new Db();
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];

    echo '<script>
        $(".player_list").attr("id", '. $ref_game .');
/*         $(".start-btn").attr("id", '. $ref_game .');
         $(".start-btn").attr("href", "game_in.php?id='. $ref_game .'");*/
    </script>';
?>