$(document).ready(function(){

  	$.datepicker.setDefaults($.datepicker.regional["fr"]);
	$("#calendar").datepicker();

	$("input").focus(function() {
 		$(".error").fadeOut(900);
 		$(".errorLog").fadeOut(900);
	});
});