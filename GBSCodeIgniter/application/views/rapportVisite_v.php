<div id="formRapport">
	<fieldset>
		<?php echo form_open('connexion_c/ajoutRapport');?>		
			
		<label for="numRapport">Num&eacute;ro rapport :</label>
		<?php 
			  echo form_input('');
			  echo form_error('','<span class="error">','</span>'); 
		?>
									
		<label for="praticien">Praticien :</label>
		<?php
			  	$options [] = "";
			  foreach ($results as $recupLst){
				$options [] = $recupLst->PRA_NOM." ".$recupLst->PRA_PRENOM;
			  }
			  //<select name="lstPraticien"><option>$options</option></select>
			  echo form_dropdown('lstPraticien',$options);
			  echo form_error('','<span class="error">','</span>'); 
		?>
													
		<label for="date">Date rapport :</label>
		<?php 
				//<input type="text" name="date" value="" id="calendar">
			  echo form_input('date','','id=calendar');
			  echo form_error('','<span class="error">','</span>'); 
		?>
										
		<label for="motif">Motif visite :</label>
		<?php  
			   echo form_input('');
			   echo form_error('','<span class="error">','</span>'); 
		?>
										
		<label for="bilan">Bilan :</label>
		<?php 
			  echo form_textarea('');
		  	  echo form_error('','<span class="error">','</span>'); 
								
		  echo form_close();
		?>	
	</fieldset>	
</div>				