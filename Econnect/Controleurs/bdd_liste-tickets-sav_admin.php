<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT ticket.ID_User, utilisateur.Nom, utilisateur.Prenom, ticket.ID_Ticket, ticket.Objet, ticket.Date_ticket, ticket.Status FROM ticket, utilisateur WHERE ticket.ID_User = utilisateur.ID_User ORDER BY ticket.Date_ticket DESC');
	?>

	<table id="SAV_table">
		<tr>
			<th>N° Client</th>
			<th>Nom du Client</th>
			<th>N° ticket</th>
			<th>Objet</th>
			<th>Date d'ouverture</th>
			<th>Statut</th>
		</tr>

	<?php

	while ($donnees = $req->fetch())
	{
		?>
		<tr>
			<td><?php echo $donnees['ID_User']; ?></td>
			<td><?php echo $donnees['Prenom'] . ' ' . $donnees['Nom']; ?></td>
			<td><?php echo $donnees['ID_Ticket']; ?></td>
			<td><?php echo $donnees['Objet']; ?></td>
			<td><?php echo $donnees['Date_ticket']; ?></td>
			<td><?php echo $donnees['Status']; ?></td>
		</tr>
		<?php
	}
	?>

	</table>
	<?php

$req->closeCursor();

?>
