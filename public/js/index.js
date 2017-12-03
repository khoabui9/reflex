$(document).ready(function() {
	window.addEventListener("unload", function (event) {
		$.ajax({
	        method: 'GET',
	        url: './player/reset_ref.php',
	        success: function (html) {	        
	        	window.location.href = "src/game_list.php";
	        },
	        error: function () {
	        }
		})
	  	event.preventDefault();
	});

	window.addEventListener("beforeunload", function (event) {
		$.ajax({
	        method: 'GET',
	        url: './player/reset_ref.php',
	        success: function (html) {	        
	        	window.location.href = "src/game_list.php";
	        },
	        error: function () {
	        }
		})
	  	event.preventDefault();
	});

	window.addEventListener("onload", function (event) {
		$.ajax({
	        method: 'GET',
	        url: './player/reset_ref.php',
	        success: function (html) {	        
	        	window.location.href = "src/game_list.php";
	        },
	        error: function () {
	        }
		})
	  	event.preventDefault();
	});


});