<?php
session_start();
    include '../config.php';
    
    //$db = new Db();
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];

    //$user_id=$_SESSION['player_id'];
    $query = "SELECT * FROM player WHERE ref_game = '$ref_game'";
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
    $results = mysqli_query($con, $query);
    while($row = mysqli_fetch_array($results)){
       echo '
             <div id="' . $row['player_id'] . '" class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card" style="width: 15rem;">
                        <div class="card-block">
                            <h5 id="' . $row['player_id'] . '" class="text text-bold">' . $row['player_name'] . '</h5>
                        </div>
                    </div>
                </div>
       ';
    }
?>