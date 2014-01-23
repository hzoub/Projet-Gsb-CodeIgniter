<div id="formRapport">
	<fieldset>
		<?php echo form_open('');?>		
			
		<label for="numRapport">Num&eacute;ro rapport :</label>
		<?php 
			  echo form_input('');
			  echo form_error('','<span class="error">','</span>'); 
		?>
									
		<label for="">Praticien :</label>
		<?php
			  foreach ($results as $recupLst){
				$options [] = $recupLst->PRA_NOM." ".$recupLst->PRA_PRENOM;
			  }
			  echo form_dropdown('lstPraticien',$options);
			  echo form_error('','<span class="error">','</span>'); 
		?>
													
		<label for="">Date rapport :</label>
		<?php 
			  echo form_input("");
			  echo form_error('','<span class="error">','</span>'); 
		?>
										
		<label for="">Motif visite :</label>
		<?php  
			   echo form_input('');
			   echo form_error('','<span class="error">','</span>'); 
		?>
										
		<label for="">Bilan :</label>
		<?php 
			  echo form_textarea('');
		  	  echo form_error('','<span class="error">','</span>'); 
								
		  echo form_close();
		?>	
	</fieldset>	
</div>				