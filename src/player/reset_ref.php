<?php

include './config.php';

session_start();

$id = $_SESSION["player_id"] ;

$query1 = "UPDATE player SET ref_game = NULL WHERE player_id = '$id'";

$update1 = mysqli_query($con, $query1);
