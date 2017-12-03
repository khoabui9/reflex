<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="../public/css/style.css"  media="screen,projection"/>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="../public/js/js.cookie.js"></script>
    <script type="text/javascript" src="../public/js/index.js"></script>
     <script type="text/javascript" src="../public/js/moment.js"></script>
</head>
<body>
    <div class="row">
            <div class="col-md-12">
                <div class="score">
                    <h1 class="title center">Game</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="score">
                    <h1 class="center">Score: <span class="player_score">0</span></h1>
                </div>
            </div>
            <div class="col-md-6 wrap">
                <div class="default_pics frame center">                   
                   <img id='image_def' class="def_image img-fluid" style="width:100%">
                   <?php include '/pic/def_pics.php';?>
                </div>
            </div>
            <div class="col-md-6 rand_pics">
                <div class="rand_pics_item frame center">
                    <img id='image_rand' class="rand_image img-fluid" style="width:100%">
                    <?php include '/pic/get_pics.php';?>
                </div>
            </div>
    </div>
    <div class="modal center" id="myModal" >
        <div class="center white" style="width:100%; height: 100%;">
         <h1 id="te"> The game will begin in </h1>
         <h1>&nbsp;<span id="countdowntimer">10 </span></h1>
         <h1>&nbsp;<span>seconds</span></h1>
        </div>
    </div>
        <script type="text/javascript" src="../public/js/play.js"></script>
</body>
</html>