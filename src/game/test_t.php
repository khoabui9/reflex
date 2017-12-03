<?php
    include './config.php';
    //$db = new Db();
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];

    echo '<script>
         $(".list_title").attr("id", '. $ref_game .');
         $(".start-btn").attr("id", '. $_SESSION['player_id'] .');
        /*$(".start-btn").attr("href", "game_in.php?id='. $ref_game .'");*/
          $(".back-btn").attr("href", "game_list.php");
    </script>';
?>