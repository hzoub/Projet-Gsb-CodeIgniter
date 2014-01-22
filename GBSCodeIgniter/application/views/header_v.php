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
				<!-- Affiche le titre s'il a etait définis dans le controleur -->
				<h1><?php if(isset($titre)) echo $titre; ?></h1>
			</div>
			<!-- Charge le menu s'il a etait définis dans le controleur -->
			<?php if(isset($menu)) $this->load->view($menu); ?>
			<div id="contenu">