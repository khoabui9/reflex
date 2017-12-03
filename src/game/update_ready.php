<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$ready = $query['ready'];
$id = $query['id'];

if ($state === 'NULL')
	$query1 = "UPDATE game SET game_ready = NULL WHERE game_id = '$id'";
else 
	$query1 = "UPDATE game SET game_ready = '$ready' WHERE game_id = '$id'";

$update1 = mysqli_query($con, $query1);
