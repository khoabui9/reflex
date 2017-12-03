<?php

include '../config.php';

session_start();

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$time = $query['time'];
$id = $_SESSION["player_id"] ;

$query1 = "UPDATE player SET time_click = '$time' WHERE player_id = '$id'";
echo $query1;

$update1 = mysqli_query($con, $query1);
