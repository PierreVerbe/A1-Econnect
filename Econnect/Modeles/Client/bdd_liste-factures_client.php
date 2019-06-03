<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare('SELECT * FROM facture WHERE facture.ID_Maison = (SELECT user_maison.ID_Maison FROM utilisateur,user_maison WHERE user_maison.ID_User = user_maison.ID_User AND utilisateur.ID_User = user_maison.ID_User AND utilisateur.ID_User = ? GROUP BY user_maison.ID_Maison ASC LIMIT 1) GROUP BY MONTH(facture.Date_facture) ASC LIMIT 12');
	$req->bindParam(1, $_SESSION['id']);
	$req->execute();

	?>

	<table id="tableau_factures">
		<tr>
			<th>N° Facture</th>
			<th>Date</th>
			<th>Consommation</th>
			<th>Prix</th>
		</tr>

		<?php

		while ($donnees = $req->fetch())
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

		$req->closeCursor();
		
?>