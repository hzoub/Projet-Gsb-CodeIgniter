<div id="formRapport">
	<fieldset>

		<?php if(isset($error)): ?>
				<div class="errorLog animationError bounceIn">
					<img src="<?php echo base_url(); ?>application/images/Error.png" id="imgError"><p><?php echo $error; ?></p>
				</div>
		<?php endif; ?>


		<?php echo form_open('connexion_c/addRapport');?>		
			
		<label for="numRapport">Num&eacute;ro rapport :</label>
		<?php 
			  echo form_input('numRapport','','id=numRapport');
			  echo form_error('numRapport','<span class="error animationError bounceIn">','</span>'); 
		?>
								
		<label for="lstPraticien">Praticien :</label>

		  <select name="lstPraticien" id="lstPrat">
		  		<option></option>
		  <?php foreach($results as $recupLst){ ?>
		  		<option value="<?php echo $recupLst->PRA_NUM; ?>">
		  			<?php echo $recupLst->PRA_NOM." ".$recupLst->PRA_PRENOM;?>
		  		</option>
		  	<?php }?>
		  </select>
		  <?php
		  echo form_error('lstPraticien','<span class="error animationError bounceIn">','</span>');
		  echo form_submit('btnDetails','Details','id=btnDetails');
		  ?>										
		<label for="date">Date rapport :</label>
		<?php 
				//<input type="text" name="date" value="" id="calendar">
			  echo form_input('date','','id=calendar');
			  echo form_error('date','<span class="error animationError bounceIn">','</span>'); 
		?>
										
		<label for="motif">Motif visite :</label>
		<?php  
			   echo form_input('motif','','id=motif');
			   echo form_error('motif','<span class="error animationError bounceIn">','</span>'); 
		?>
										
		<label for="bilan">Bilan :</label>
		<?php 
			  echo form_textarea('bilan','','id=bilan');
		  	  echo form_error('bilan','<span class="error animationError bounceIn">','</span>'); 

		  	  /*Boutton*/
			  echo form_submit('valider','Valider');
			  echo form_reset('annuler','Annuler');	

		  echo form_close();
		?>	
	</fieldset>	
</div>	