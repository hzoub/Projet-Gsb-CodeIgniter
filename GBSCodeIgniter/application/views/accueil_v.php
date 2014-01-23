		<div id="formulaire">
					<h1>Identification utilisateur</h1>
						<fieldset>		
						<!-- Equivalent <form method="post" action="connexion_c.php"> -->					
							<?php echo form_open('connexion_c');?>		
										
								<label for="login">Login* :</label>
								<?php
									  echo form_input("login");
									  echo form_error('login','<span class="error">','</span>');
								?>
															
								<label for="mdp">Mot de passe* :</label>
								<?php 
									  echo form_password("mdp");
									  echo form_error('mdp','<span class="error">','</span>');
																				
									  echo form_submit("btnValider", "Valider");
									  echo form_reset("btnAnnuler", "Annuler");
							
								 	echo form_close();
							 	?>					
						</fieldset>
				</div>
				<b>* Champs obligatoires</b>