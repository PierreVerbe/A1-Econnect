<?php

	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT ticket.ID_Ticket, ticket.Objet, ticket.Status FROM ticket, utilisateur WHERE utilisateur.ID_User = ticket.ID_User AND utilisateur.ID_User = ? ORDER BY ticket.ID_Ticket DESC LIMIT 10");
	$req->bindParam(1, $_SESSION['id']);
	$req->execute();

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