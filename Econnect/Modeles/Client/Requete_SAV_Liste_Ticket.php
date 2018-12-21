<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	// utilisateur.ID_User = mettre le numéro du compte en fonctionnement
	$req = $bdd->query('SELECT ticket.ID_Ticket, ticket.Objet, ticket.Status, ticket.Date_ticket FROM ticket, utilisateur WHERE utilisateur.ID_User = ticket.ID_User AND utilisateur.ID_User = 2');

	while ($donnees = $req->fetch())
	{
		?>
		<tr>
			<td><?php echo $donnees['ID_Ticket']; ?></td>
			<td><?php echo $donnees['Objet']; ?></td>
			<td><?php echo $donnees['Status']; ?></td>
			<td><?php echo $donnees['Date_ticket']; ?></td>
		</tr>
		<?php
	}
	?>
	<?php
		$req->closeCursor();
	?>
