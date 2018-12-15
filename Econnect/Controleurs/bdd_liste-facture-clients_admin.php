<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT facture.ID_Facture, facture.Date_facture, facture.Consommation, facture.Prix FROM facture, maison WHERE facture.ID_Maison = maison.ID_Maison AND maison.ID_Maison = 1'); /*ici mettre le numero du client récupéré*/

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
	<?php
		$req->closeCursor();
	?>