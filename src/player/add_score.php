<?php
    include './config.php';
    session_start();
    //$db = new Db();
    $user_id=$_SESSION['user_id'];
    $query = "SELECT * FROM player WHERE player_id = '$user_id'";
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
    $result = mysqli_query($con, $query);

    $row = $result->fetch_assoc();
       echo '
            <script>
                $(".player_list").append("<li>'. $row['player_name'] .'</li>");
            </script>
        ';

?>