<?php
include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$id = $query['id'];

$query1 = "SELECT game_rand FROM game WHERE game_id = '$id'";
/*$rowcount =mysqli_num_rows($results);*/
/*setcookie("numList", $rowcount, time() + 3600);*/
$result = mysqli_query($con, $query1);

$row = $result->fetch_assoc();

echo $row['game_rand'];