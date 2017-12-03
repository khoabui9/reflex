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
    <?php include '/player/reset_ref.php';?>
</head>
<body>
    <div class="row">
        <div class="col-sm-12 center">
        <form>
            <div class="form-group">
            </div>
            <button id="" type="button" class="create_game btn btn-primary">Create</button>
        </form>
        </div>
    </div>
    <div class="row  card-container">
           <?php include '/game/show_games.php';?>
    </div>
    <script type="text/javascript" src="../public/js/game.js"></script>
    <script type="text/javascript" src="../public/js/test.js"></script>
</body>
</html>