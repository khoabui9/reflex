<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$def = $query['def'];
$id = $query['id'];

$query1 = "UPDATE game SET game_def = '$def' WHERE game_id = '$id'";

$update1 = mysqli_query($con, $query1);
