<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="../public/css/list.css"  media="screen,projection"/>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="../public/js/js.cookie.js"></script>
    <script type="text/javascript" src="../public/js/index.js"></script>
    <?php include '/game/set.php';?>
</head>
<body>
    <div class="row" style="padding: 0;">
            <div class="col-md-12 center">
                <h1 class="list_title">Player list</h1>
            </div>
            <div class="player_list">  
            </div>
            <div class="col-md-12 center">
                <a class="start-btn btn btn-primary">START</a>  
                <a class="back-btn btn btn-primary btn-danger" style="margin-left: 10px;">LEAVE</a>
            </div>
            <?php include '/game/test_t.php';?>
    </div>
    <div class="row card-container pl">
        <?php include '/game/test_player.php';?>
    </div>
    <script>
    </script>
    <script type="text/javascript" src="../public/js/game.js"></script>
     <script type="text/javascript">
          $(document).ready(function() {
            var ref_game = $(".list_title").attr("id");
            var controller_id = $(".start-btn").attr("id");
            setInterval(function () {
                getState(ref_game);
            }, 1);

            $('.start-btn').click(function() {
                getController(ref_game, controller_id);
            });
          }); 

          function getState(game_id) {
             $.ajax({
                method: 'GET',
                url: './game/get_state.php?'+ "id=" + game_id,
                success: function (data) {      
                    if (data === 'start') {
                        window.location.href = "game_in.php?id=" + game_id ;
                    }
                },
                error: function () {
                }
            })
          }

          function getController(game_id, session) {
             $.ajax({
                method: 'GET',
                url: './game/get_controller.php?'+ "id=" + game_id,
                success: function (data) { 
                    if (session === data) {
                        update_state(game_id);
                        window.location.href = "game_in.php?id=" + game_id ;
                    }
                    else
                        alert('only controller can start the game');
                },
                error: function () {
                }
            })
          }

          function update_state(game_id) {
            var state = 'start';
            $.ajax({
                method: 'POST',
                url: './game/update_state.php?'+ 'state=' + state +"&id=" + game_id,
                success: function () {
                    console.log('success');
                },
                error: function () {
                }
            })
          }
      </script>
</body>
</html>