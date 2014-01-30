$(document).ready(function(){

	/*Calendrier*/
  	$.datepicker.setDefaults($.datepicker.regional["fr"]);
	$("#calendar").datepicker();


	/*Dés qu'on click sur un champ l'erreur disparait*/
	$("input").focus(function(){
		/*Ajout de la class animationError bounceOut*/
 		$(".error").addClass("animationError bounceOut");
 		$(".errorLog").addClass("animationError bounceOut");		

	});
	/*Dés qu'on click sur la liste déroulante "select" l'erreur disparait*/
	$("select").focus(function(){

 		$(".error").addClass("animationError bounceOut");

	});

	//$("#btnDetails").click(function(){alert("test"); event.preventDefault();});
	
	/*Dés qu'on click sur la liste deroulante "select" le boutton details apparait*/
	$("select").change(function(){

		/*Récupere l'option qui a été selectionée dans la liste déroulante et le stocke dans la variable options*/
		var options = $("option:selected").text();
		
		if(options.length==0){
			/*Si l'option est vide cache le boutton details*/
			$("#btnDetails").hide();
		}

		else{
			/*show le boutton details*/
			$("#btnDetails").fadeIn("slow").show();
		
		}

	});
	
});