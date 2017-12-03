<?php
	session_start();
    include '../config.php';
    
    //$db = new Db();
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];

    //$user_id=$_SESSION['player_id'];
    $query1 = "SELECT * FROM player WHERE ref_game = '$ref_game' ORDER BY player_score DESC LIMIT 1";
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
	$result = mysqli_query($con, $query1);

	$row = $result->fetch_assoc();

 	$name = $row['player_name'];

 	$query2 = "UPDATE game SET winner = '$name' WHERE game_id = '$ref_game'";
	$update2 = mysqli_query($con, $query2);
?>