<?php

include '../config.php';

$querys = "SELECT player_id FROM player WHERE player_name = '$player'";
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
    $result = mysqli_query($con, $querys);

    $row = $result->fetch_assoc();
    session_start();
    $_SESSION["player_id"] = $row['player_id'];
    echo '<p>
    	'. $_SESSION["player_id"]  .'
    </p>';

