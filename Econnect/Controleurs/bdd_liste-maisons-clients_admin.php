<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT maison.ID_Maison, maison.Mode_maison, maison.Numero, maison.Rue, maison.Ville, maison.Code_postal, maison.Pays FROM maison, utilisateur, user_maison WHERE utilisateur.ID_User = user_maison.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = 1'); /*ici mettre le numero du client récupéré*/

	while ($donnees = $req->fetch())
	{
		?>
		<tr>
			<td><?php echo $donnees['ID_Maison']; ?></td>
			<td><?php echo $donnees['Mode_maison']; ?></td>
			<td><?php echo $donnees['Numero'] . ", " . $donnees['Rue'] . ", " . $donnees['Code_postal'] . " " . $donnees['Ville'] . ", " . $donnees['Pays']; ?></td>
		</tr>
		<?php
	}
	?>
	<?php
		$req->closeCursor();
	?>