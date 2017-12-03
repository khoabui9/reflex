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

			$('.create_game').click(function() {
			$.ajax({
		        method: 'POST',
		        url: 'game/create_game.php',
		        data: 'data',
		        success: function () {	        
		        	/*$(html).appendTo(document.body);*/
		        	window.location.reload();
		        },
		        error: function () {
		        }
		});
	});

	 setInterval(load, 100);
});

function load() {
	var id = $(".player_list").attr("id");
	$.ajax({
	        method: 'GET',
	        url: 'player/show_list.php?' + 'id=' + id,
	        success: function (html) {	        
	        	$(".pl").html(html);
	        },
	        error: function () {
	        }
	})
}