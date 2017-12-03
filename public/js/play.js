$(document).ready(function() {
	Cookies.remove('def');
	setInterval(function () {
	    	getWinner(ref_game);
	}, 1000);
	$('#myModal').modal('show');
	timer();
	setTimeout(function(){
	   $('#myModal').modal('hide');
	},10500);
	var ref_game = $('.title').attr('id');
	setInterval(function () {
	    	getDef(ref_game);
	}, 1000);
	setInterval(function () {
	    	getRand(ref_game);
	}, 400);
	setInterval(function () {
		updateScore()	
	}, 500);
	$('.rand_image').click(function() {
		var image = $(this).attr('alt'); 
		var imgdef = $('.def_image').attr('alt');
		if (image === imgdef)
		{
			var now = moment().format('h:mm:ss');
			$.ajax({
		        method: 'GET',
		        url: './player/update_time.php?'+ "time=" + now,
		        success: function (html) {	        
		        	
		        },
		        error: function () {
		        }
			})
			setTimeout(function(){
			   calculateScore(ref_game);
			},400);
			setTimeout(function(){
			   updateScore();
			},100);
			setTimeout(function(){
			   next(ref_game);
			},600);
		}
	})
});

function timer() {
	var timeleft = 10;
	var downloadTimer = setInterval(function(){
	timeleft--;
	document.getElementById("countdowntimer").textContent = timeleft;
	if(timeleft <= 0)
	    clearInterval(downloadTimer);
	},1000);
}

function calculateScore(game_id) {
	$.ajax({
        method: 'GET',
        url: './player/compare.php?'+ "id=" + game_id,
        success: function (html) {	      
        },
        error: function () {
        }
	})
}

function updateScore() {
	$.ajax({
        method: 'GET',
        url: './player/get_score.php',
        success: function (data) {	  
        	$(".player_score").text(data);
        },
        error: function () {
        }
	})
}

function getWinner(game_id) {
	$.ajax({
        method: 'GET',
        url: './game/alert_winner.php?id=' + game_id,
        success: function (data) {	  
        	if (data != 'NULL') {
        		resetTime(game_id);
        		resetScore(game_id);
        		alert(data);
        		window.location.href = "game_list.php";
        	}
        },
        error: function () {
        }
	})
}


function next(game_id) {
	resetTime(game_id);
	var idx = Cookies.get('def');
	console.log(idx);
	index_def = idx;
	index_def++;
	console.log(index_def);
    if (index_def === imageSourcesdef.length) {
        index_def = 0;
	    var state = 'NULL';
        $.ajax({
            method: 'POST',
            url: './game/update_state.php?'+ 'state=' + state +"&id=" + game_id,
            success: function () {
                console.log('success');
            },
            error: function () {
            }
    	})
    	$.ajax({
        method: 'GET',
        url: './game/get_winner.php?id=' + game_id,
        success: function (data) {	  
        },
        error: function () {
        }
	})
    }
   	addDef(index_def, game_id);
}

function resetTime(game_id) {
	$.ajax({
        method: 'GET',
        url: '../src/player/reset_time.php?'+ "id=" + game_id,
        success: function (html) {	        
        },
        error: function () {
        }
	})
}

function resetScore(game_id) {
	$.ajax({
        method: 'GET',
        url: '../src/player/reset_score.php?'+ "id=" + game_id,
        success: function (html) {	        
        },
        error: function () {
        }
	})
}

function getDef(game_id) {
	$.ajax({
        method: 'GET',
        url: './game/get_def.php?'+ "id=" + game_id,
        success: function (data) {	  
        	Cookies.set('def', data);
        	document.getElementById("image_def").src = imageSourcesdef[data];
    		document.getElementById("image_def").alt = imageNamedef[data];      
        },
        error: function () {
        }
	})
}

function getRand(game_id) {
	$.ajax({
        method: 'GET',
        url: './game/get_rand.php?'+ "id=" + game_id,
        success: function (data) {
        	document.getElementById("image_rand").src = imageSources[data];
    		document.getElementById("image_rand").alt = imageName[data];
        },
        error: function () {
        }
	})
}

function addDef(index, game_id) {
	$.ajax({
        method: 'POST',
        url: './game/add_def.php?'+ 'def=' + index +"&id=" + game_id,
        success: function () {
        	console.log('success');
        },
        error: function () {
        }
	})
}


