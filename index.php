<?php
session_start();
if(isset($_SESSION["player_id"])) {
  header("location: src/game_list.php");
}
?>
<!DOCTYPE html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="./public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="./public/css/style.css"  media="screen,projection"/>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="public/js/js.cookie.js"></script>
</head>
<body>
    <div class="row" style="height: 100vh;">
        <div class="col-md-12 center outer-space">
            <div>
                <form>
                    <div class="form-group">
                        <label for="name" class="center form-control-label">Enter your name</label>
                        <input type="text" id="player_name" class=" form-control" id="" required>
                    </div>
                    <div class="center"><button id="" type="button" class="add_player btn btn-primary">Add</button></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('.add_player').click(function() {
            var name = document.getElementById('player_name').value;
            $.ajax({
            method: 'POST',
            url: 'src/player/add_player.php?' + 'player_name=' + name,
            data: 'player_name=' + name,
            success: function (html) {          
                window.location.href = "src/game_list.php";
            },
            error: function () {
            }
        });
    });
});
    </script>
</body>
</html>