<?php

include '../config.php';

session_start();

$game_link = 'a';
$user_id=$_SESSION['player_id'];


$query1 = "INSERT INTO game (game_controller, game_link) VALUES ('$user_id','$game_link')";
echo $query1;
//echo $query1;
$insert = mysqli_query($con, $query1) ;
/*if ($insert) {
	$user_book = 'bookOne';
	setcookie($user_book, 'true', time()+(3600*24));
}*/
mysqli_close($con);


