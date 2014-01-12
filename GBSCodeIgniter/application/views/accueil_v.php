<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="./application/styles/styles.css" rel="stylesheet" type="text/css" />
    
    <link rel="shortcut icon" type="image/x-icon" href="GSBCodeIgniter/application/images/favicon.ico" />
  </head>
	<body>
		<div id="page">
			<div id="entete">
				<img src="./application/images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
				<h1>Rapport de visite</h1>
			</div>
			
			<div id="contenu">
					     	
				<div id="formulaire">
							
					<h1>Identification utilisateur</h1>
							
					<form>
						<fieldset>
																	
							<?php echo form_open('connexion_c');?>		
										
								<label for="login">Login* :</label>
								<?php echo form_input("login");?>
								<?php echo form_error('login','<span class="error">','</span>');?>
																				
								<label for="mdp">Mot de passe* :</label>
								<?php echo form_password("mdp");
									  echo form_error('mdp','<span class="error">','</span>');
																						
									  echo form_submit("LOGIN", "Valider");
									  echo form_submit("LOGIN", "Annuler");?>

							 <?php echo form_close();?>
													
						</fieldset>
						
					</form>
				</div>
				<b>* Champs obligatoires</b>
			</div>
		</div>
	</body>
</html>