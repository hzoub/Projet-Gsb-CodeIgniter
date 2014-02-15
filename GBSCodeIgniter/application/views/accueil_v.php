<div id="formulaire">
	<h1>Identification utilisateur</h1>
		<fieldset>	
		<?php if(isset($error)): ?>
					<div class="errorLog  animationError bounceIn">

					<div class="left">

						<div class="icone">
							<img src="<?php echo base_url(); ?>application/images/Error.png">
						</div>

					</div>

					<div class="right">

						<p><?php echo $error; ?></p>

					</div>
				</div>
				<!--</div>-->
		<?php endif; ?>	
		<!--<form method="post" action="connexion_c.php"> -->					
			<?php echo form_open('connexion_c/login');?>		
						
				<label for="login">Login* :</label>
				<?php
					  echo form_input("login","","id=login");
					  echo form_error('login','<span class="error animationError bounceIn">','</span>');
				?>
											
				<label for="mdp">Mot de passe* :</label>
				<?php 
					  echo form_password("mdp","","id=mdp");
					  echo form_error('mdp','<span class="error animationError bounceIn">','</span>');
																
					  echo form_submit("btnValider", "Valider");
					  echo form_reset("btnAnnuler", "Annuler");
			
				 	echo form_close();//</form>
			 	?>					
		</fieldset>
</div>
<b>* Champs obligatoires</b>