function updateResults(){
	// TODO: complete this function
	var getString = "query.php?q=" + $("#q").val();
	var jqxhr = $.get(getString);
	jqxhr.done(function(data) {
	$("#results").empty();
	$("#results").append(data);
	console.log(jqxhr);
	});
}

$(document).ready(function(){
		
	$("#signupbutton").on("click", function(){
		
	});
});