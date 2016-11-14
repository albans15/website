$(document).ready(function(){
	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p>' + item.trackName + '</p>';

				});
				output += "</div>";
				$('#trackName').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});

	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p>' + item.artist + '</p>';

				});
				output += "</div>";
				$('#artist').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});

	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p>' + item.albumName + '</p>';

				});
				output += "</div>";
				$('#albumName').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});


	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p><img src="' + item.albumCover + '" width="5%""></img></p>';

				});
				output += "</div>";
				$('#albumCover').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});


	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p>' + item.releaseDate + '</p>';

				});
				output += "</div>";
				$('#date').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});

	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<p>' + item.genre + '</p>';

				});
				output += "</div>";
				$('#genres').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});

	$('#coverart').click(function(){       
		$.ajax({
			type: "GET",
			url:"lab4.json",
			dataType: "json",
			success: function(responseData, status){
				var output = "<div>";
				$.each(responseData.playlist, function(i, item) {
					output += '<a href="' + item.url + '">' + AllMusic + '</a>';

				});
				output += "</div>";
				$('#url').html(output);
				}, error: function(msg) {
			 	alert("There was a problem: " + msg.status + " " + msg.statusText);
		    	}
		});
	});
});
