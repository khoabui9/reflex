<?php
	include './config.php';
    //$db = new Db();
    $query = "SELECT * FROM photo";
    $results = mysqli_query($con,$query);
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
     echo '
        <script>
             var imageSources = [];
             var imageName = [];
        </script>
       ';
    while($row = mysqli_fetch_array($results)){
       echo '
        <script>
            imageSources.push("../public/img/'. $row['photo_name'] .'");
            imageName.push("'. $row['photo_name'] .'");
        </script>
       ';
    }
     echo '
        <script>
            setInterval(function(){
               var x = Math.floor((Math.random() * imageSources.length));
               //console.log(x);
               var gameId = $(".title").attr("id");
                $.ajax({
                    method: "POST",
                    url: "./game/add_rand.php?"+ "rand=" + x + "&id=" + gameId,
                    success: function () {
                    },
                    error: function () {
                    }
                })
            }, 1000);
        </script>
       ';
?>