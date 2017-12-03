<?php
	session_start();
    include '../config.php';
    
    //$db = new Db();
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];

    //$user_id=$_SESSION['player_id'];
    $query1 = "SELECT * FROM player WHERE ref_game = '$ref_game' order by case when time_click is null then 1
    else 0 end,time_click LIMIT 1";
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
	$result = mysqli_query($con, $query1);

	$row = $result->fetch_assoc();

 	$id = $row['player_id'];

 	$query2 = "UPDATE player SET player_score = player_score+1 WHERE player_id = '$id'";
	$update2 = mysqli_query($con, $query2);

    echo $id;
?>