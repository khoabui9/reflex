<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$ref_game = $query['id'];

$query1 = "UPDATE player SET player_score = 0 WHERE ref_game = '$ref_game'";

$update1 = mysqli_query($con, $query1);
