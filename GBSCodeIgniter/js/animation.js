/**
*@author Zoubert Hanem
*/
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
	/*Dés qu'on click sur la liste déroulante l'erreur disparait*/
	$("select").focus(function(){

 		$(".error").addClass("animationError bounceOut");

	});

	/*Affiche le msg success avec l'animation fadeIn() pendant 2s*/
	$(".success").fadeIn("slow").delay(2000).fadeOut("slow");

	
	
	/*Dés qu'on click sur la liste deroulante le boutton details apparait*/
	$("select").change(function(){

		/*Récupere l'option qui a été selectionée dans la liste déroulante et le stocke dans la variable options*/
		var options = $("option:selected").text();
		
		if(options.length==0){
			/*Si l'option est vide cache le boutton details*/
			$("#btnDetails").hide();
		}

		else{
			/*Affiche le boutton details*/
			$("#btnDetails").fadeIn("slow").show();
		
		}

	});
	
});