<?php
session_start();
include '../config.php';

$id = $_SESSION["player_id"];

$query1 = "SELECT player_score FROM player WHERE player_id = '$id'";
/*$rowcount =mysqli_num_rows($results);*/
/*setcookie("numList", $rowcount, time() + 3600);*/
$result = mysqli_query($con, $query1);

$row = $result->fetch_assoc();
echo  $row['player_score'];