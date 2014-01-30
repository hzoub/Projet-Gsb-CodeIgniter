<?php
	foreach($results as $recupLst){ 
				  		
		echo "Nom -> ".$recupLst->PRA_NOM."<br>".
			 "Prenom -> ".$recupLst->PRA_PRENOM."<br/>".
			 "Adresse -> ".$recupLst->PRA_ADRESSE."<br/>".
			 "Code postal -> ".$recupLst->PRA_CP."<br/>".
			 "Ville -> ".$recupLst->PRA_VILLE;
	}
?>