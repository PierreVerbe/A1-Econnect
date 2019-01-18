<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['postid']))
	{
		$id_client = $_POST['postid'];

		$req = $bdd->query('SELECT maison.ID_Maison, maison.Mode_maison, maison.Numero, maison.Rue, maison.Ville, maison.Code_postal, maison.Pays FROM maison, utilisateur, user_maison WHERE utilisateur.ID_User = user_maison.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = "'.$id_client.'"'); /*ici mettre le numero du client récupéré*/
	}

	?>

	<table id="tableau_maisons">
			<tr>
				<th>N° Maison</th>
				<th>Mode de la maison</th>
				<th>Adresse</th>
			</tr>
	<?php

	while ($donnees = $req->fetch())
	{
		?>
		<tr onclick="showDetails()">
			<td><?php echo $donnees['ID_Maison']; ?></td>
			<td><?php echo $donnees['Mode_maison']; ?></td>
			<td><?php echo $donnees['Numero'] . ", " . $donnees['Rue'] . ", " . $donnees['Code_postal'] . " " . $donnees['Ville'] . ", " . $donnees['Pays']; ?></td>
		</tr>
		<?php
	}

	?>
	</table>
	<?php

	$req->closeCursor();

	?>