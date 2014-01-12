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
	  <head>
<body>
<div id="contenu">
     
	<div id="formulaire">

		<h1>Identification utilisateur</h1>
			
			<form>
				<fieldset>
					
					<?php 	
							echo form_open("ADMINISTRER_C");
					?>
					
					<label for="name">Login* :</label>
					<?php echo form_input("IDENTIFIANT");?>
					
					<label for="email">Mot de passe* :</label>
					<?php 	echo form_password("PASSWORD");
					
							echo form_submit("LOGIN", "Valider");
							echo form_submit("LOGIN", "Annuler");
				echo form_close('</fieldset>');
			echo form_close('</form>');
	echo form_close('</div>');
					?>

				<b>* Champs obligatoires</b>
			</div>
			
		</div>

	</body>
</html>