<?php

include './config.php';

session_start();

$url = $_SERVER["REQUEST_URI"];
$parts = parse_url($url);
parse_str($parts['query'], $query);

$ref_game = $query['id'];
$user_id=$_SESSION['player_id'];



$query1 = "UPDATE player SET ref_game = '$ref_game' WHERE player_id = '$user_id'";
//echo $query1;
$insert = mysqli_query($con, $query1) ;
/*if ($insert) {
	$user_book = 'bookOne';
	setcookie($user_book, 'true', time()+(3600*24));
}*/
    echo '<script>
        $(".player_list").attr("id", '. $ref_game .');
    </script>';

mysqli_close($con);


