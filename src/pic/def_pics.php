<?php
	include './config.php';
    $url = $_SERVER["REQUEST_URI"];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);

    $ref_game = $query['id'];
    //$db = new Db();
    $query = "SELECT * FROM photo";
    $results = mysqli_query($con,$query);
    /*$rowcount =mysqli_num_rows($results);*/
    /*setcookie("numList", $rowcount, time() + 3600);*/
     echo '
        <script>
             var imageSourcesdef = [];
             var imageNamedef = [];
        </script>
       ';
    while($row = mysqli_fetch_array($results)){
       echo '
        <script>
            imageSourcesdef.push("../public/img/'. $row['photo_name'] .'");
            imageNamedef.push("'. $row['photo_name'] .'");
        </script>
       ';
    }
     echo '
        <script>
            var index_def = 0;
            if (index_def === imageSourcesdef.length) {
                index_def = 0;
            }
            
            /*document.getElementById("image_def").src = imageSourcesdef[index_def];
            document.getElementById("image_def").alt = imageNamedef[index_def];*/
            $(".title").attr("id", '. $ref_game .');
        </script>
       ';
?>