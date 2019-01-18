<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT ID_USER, Nom, Prenom, Adresse_email, Telephone FROM utilisateur WHERE User_type=\'Client\'');

	?>

	<table id="tableau_clients">
		<tr>
			<th>N° Client</th>
			<th>Nom du client</th>
			<th>Adresse email</th>
			<th>Téléphone</th>
		</tr>

		<?php

		while ($donnees = $req->fetch())
		{
			?>
			<tr>
				<td><?php echo $donnees['ID_USER']; ?></td>
				<td><?php echo $donnees['Prenom'] . ' ' . $donnees['Nom']; ?></td>
				<td><?php echo $donnees['Adresse_email']; ?></td>
				<td><?php echo $donnees['Telephone']; ?></td>
			</tr>
			<?php
		}

		?>

	</table>

	<?php

		$req->closeCursor();
		
	?>
