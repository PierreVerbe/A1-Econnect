<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT facture.ID_Facture, facture.Date_facture, facture.Consommation, facture.Prix FROM facture GROUP BY MONTH(facture.Date_facture) ASC');

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