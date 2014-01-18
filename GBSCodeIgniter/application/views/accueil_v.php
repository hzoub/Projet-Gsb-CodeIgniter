<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url();?>styles/styles.css" rel="stylesheet" type="text/css" />
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico" />
  </head>
	<body>
		<div id="page">
			<div id="entete">
				<img src="<?php echo base_url();?>images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
				<h1><?php if(isset($titre)) echo $titre; ?></h1>
			</div>
			
			<div id="contenu">
					     	
				<div id="formulaire">
							
					<h1>Identification utilisateur</h1>
						<fieldset>							
							<?php echo form_open('connexion_c');?>		
										
								<label for="login">Login* :</label>
								<?php echo form_input("login");?>
								<?php echo form_error('login','<span class="error">','</span>');?>
															
								<label for="mdp">Mot de passe* :</label>
								<?php echo form_password("mdp");?>
								<?php echo form_error('mdp','<span class="error">','</span>');?>
																				
								<?php echo form_submit("btnValider", "Valider");
									  echo form_reset("btnAnnuler", "Annuler");
							
							 	echo form_close();
							 	
							 	?>					
						</fieldset>
				</div>
				<b>* Champs obligatoires</b>
			</div>
		</div>
	</body>
</html>