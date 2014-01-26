<div id="formulaire">
	<h1>Identification utilisateur</h1>
		<fieldset>	
		<?php if(isset($error)): ?>
				<div class="errorLog airZoub bounceInDown">
					<img src="<?php echo base_url(); ?>application/images/Error.png" id="imgError"><p><?php echo $error; ?></p>
				</div>
		<?php endif; ?>	
		<!--<form method="post" action="connexion_c.php"> -->					
			<?php echo form_open('connexion_c/login');?>		
						
				<label for="login">Login* :</label>
				<?php
					  echo form_input("login");
					  echo form_error('login','<span class="error airZoub bounceInRight">','</span>');
				?>
											
				<label for="mdp">Mot de passe* :</label>
				<?php 
					  echo form_password("mdp");
					  echo form_error('mdp','<span class="error airZoub bounceInRight">','</span>');
																
					  echo form_submit("btnValider", "Valider");
					  echo form_reset("btnAnnuler", "Annuler");
			
				 	echo form_close();//</form>
			 	?>					
		</fieldset>
</div>
<b>* Champs obligatoires</b>