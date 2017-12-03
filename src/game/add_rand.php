<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$rand = $query['rand'];
$id = $query['id'];

$query1 = "UPDATE game SET game_rand = '$rand' WHERE game_id = '$id'";

$update1 = mysqli_query($con, $query1);
