<?php
    include './config.php';
    //$db = new Db();
    $query = "SELECT * FROM game";
    $results = mysqli_query($con,$query);
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
    while($row = mysqli_fetch_array($results)){
       echo '<a id="' . $row['game_id'] . '" class="" href="./game.php?id='.$row['game_id'].'">
                <div id="' . $row['game_id'] . '" class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card" style="width: 15rem;">
                        <div class="card-block">
                            <h5 id="' . $row['game_id'] . '" class="text text-bold">Game ' . $row['game_id'] . '</h5>
                        </div>
                    </div>
                </div>
            </a>';
    }
?>