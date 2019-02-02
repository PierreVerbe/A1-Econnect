<?php

	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	// utilisateur.ID_User = mettre le numéro du compte en fonctionnement
	$req = $bdd->query('SELECT ticket.ID_Ticket, ticket.Objet, ticket.Status FROM ticket, utilisateur WHERE utilisateur.ID_User = ticket.ID_User AND utilisateur.ID_User = 1 ORDER BY ticket.ID_Ticket DESC LIMIT 10');
	?>

	<table class="SAV_table">
	  	<tr>
		    <th>N° ticket</th>
		    <th>Objet du ticket / dernier message</th>
		    <th>Statut</th>
	  	</tr>
<?php
			  	
	while ($donnees = $req->fetch()){
?>
		<tr>
			<td><?php echo $donnees['ID_Ticket']; ?></td>
			<td><?php echo $donnees['Objet']; ?></td>
			<td><?php echo $donnees['Status']; ?></td>
		</tr>
<?php
	}
?>
	</table>
<?php
		$req->closeCursor();
?>