<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$ref_game = $query['id'];

$query1 = "UPDATE player SET time_click = NULL WHERE ref_game = '$ref_game'";

$update1 = mysqli_query($con, $query1);
