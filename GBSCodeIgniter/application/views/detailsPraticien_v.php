<?php
/**
 * @author Zoubert Hanem
 */
	foreach($results as $recupLst){ 
				  		
		$nom     = $recupLst->PRA_NOM;
		$prenom  = $recupLst->PRA_PRENOM;
		$adresse = $recupLst->PRA_ADRESSE;
		$cp      = $recupLst->PRA_CP;
		$ville   = $recupLst->PRA_VILLE;
	}
?>
<table>

	<tr align=center>

		<td>Nom</td>
		<td>Prenom</td>
		<td>Adresse</td>
		<td>Code postal</td>
		<td>Ville</td>

	</tr>

	<tr align=center>

		<td><?php echo $nom ?></td>
		<td><?php echo $prenom ?></td>
		<td><?php echo $adresse ?></td>
		<td><?php echo $cp ?></td>
		<td><?php echo $ville ?></td>

	</tr>

</table>	