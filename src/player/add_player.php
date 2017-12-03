<?php

include '../config.php';

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);


$player=$query['player_name'];


$query1 = "INSERT INTO player (player_name, player_score) VALUES ('$player' , 0);";
//echo $query1;
if(mysqli_query($con, $query1)){
	include 'set_session.php';
	echo 'lala';
} else{
    echo '<script>
    	alert("cannot add");
    </script>';
}

/*if ($insert) {
	$user_book = 'bookOne';
	setcookie($user_book, 'true', time()+(3600*24));
}*/
mysqli_close($con);


