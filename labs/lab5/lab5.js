$(document).ready(function() {		
	for (var i = 0; i < 5000; i++) {
		$("div.bar ul#foo").append("<li>This is an item in the list. Click to make me disappear.</li>");
	}
				
$("#foo").click(function(event) { 
		if(event.target.tagName = "li") {
			$(event.target).hide(400);
		}
	});

$("#showAll").click(function(event) {
		if(event.target.tagName = "li") {
			$(event.target).show(400);
		}
	});
});
