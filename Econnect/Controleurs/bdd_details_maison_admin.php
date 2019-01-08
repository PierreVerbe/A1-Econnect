<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['id_home']))
	{
		$id_maison = $_POST['id_home'];

		##### Pièces ######

		?>

		<div id="liste_details_maison">

		<?php

		$req = $bdd->query('SELECT type_piece.Type_piece FROM type_piece, piece WHERE type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Pieces</h2>";

		while ($donnees = $req->fetch())
		{
			echo '<p>'. $donnees['Type_piece'] . '</p>';
		}

		##### Capteurs ######

		$req2 = $bdd->query('SELECT capteur.ID_Capteur, type_piece.Type_piece FROM capteur, piece, type_piece WHERE capteur.ID_Piece = piece.ID_Piece AND type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Capteurs</h2>";

		while ($donnees = $req2->fetch())
		{
			echo '<p id = "idCapteur" onclick = "getSensorsDetails()">Capteur n° : ' . $donnees['ID_Capteur'] . ' dans ' . $donnees['Type_piece'] . '</p>';
		}


		##### Actionneurs ######

		$req3 = $bdd->query('SELECT actionneur.ID_Actionneur, type_piece.Type_piece FROM actionneur, piece, type_piece WHERE actionneur.ID_Piece = piece.ID_Piece AND type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Actionneurs</h2>";

		while ($donnees = $req3->fetch())
		{
			echo '<p>Actionneur n° : ' . $donnees['ID_Actionneur'] . ' dans ' . $donnees['Type_piece'] .'</p>';
		}

		?>

		</div>

		<?php

		##### Factures #####



		$req4 = $bdd->query('SELECT facture.ID_Facture, facture.Date_facture, facture.Consommation, facture.Prix FROM facture, maison WHERE facture.ID_Maison = maison.ID_Maison AND maison.ID_Maison = "'.$id_maison.'"');

		?>

		<table id="tableau_factures">
			<caption><h2>Liste des factures</h2></caption>
				<tr>
					<th>N° Facture</th>
					<th>Date</th>
					<th>Consommation</th>
					<th>Prix</th>
				</tr>

		<?php

		while ($donnees = $req4->fetch())
		{
			?>
			<tr>
				<td><?php echo $donnees['ID_Facture']; ?></td>
				<td><?php echo $donnees['Date_facture']; ?></td>
				<td><?php echo $donnees['Consommation']; ?></td>
				<td><?php echo $donnees['Prix']; ?></td>
			</tr>
			<?php
		}

		?>

		</table>

		<?php

		##### Tickets #####

		$req5 = $bdd->query('SELECT ticket.ID_Ticket, ticket.Objet, ticket.Status, ticket.Date_ticket FROM ticket, maison WHERE ticket.ID_Maison = maison.ID_Maison AND maison.ID_Maison = "'.$id_maison.'"');

		?>

		<table id="tableau_tickets">
			<caption><h2>Liste des tickets SAV</h2></caption>
				<tr>
					<th>N° Ticket</th>
					<th>Objet</th>
					<th>Statut</th>
					<th>Date</th>
					
				</tr>

		<?php

		while ($donnees = $req5->fetch())
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

		</table>

		<?php

	}

	$req->closeCursor();
?>