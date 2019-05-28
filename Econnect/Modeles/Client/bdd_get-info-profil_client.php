<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT utilisateur.Adresse_email, utilisateur.Telephone, utilisateur.Fin_abo FROM utilisateur WHERE utilisateur.ID_User = '.$_SESSION['id']);

	?>

	<ul id="infoClient">

	<?php

	while ($donnees = $req->fetch())
	{
		?>
		<li>Adresse mail : <?php echo $donnees['Adresse_email']; ?></li>
		<li>Téléphone : <?php echo $donnees['Telephone']; ?></li>
		<li>Date de fin d'abonnement : <?php echo $donnees['Fin_abo']; ?></li>
		<?php
	}

	$req->closeCursor();

	$req2 = $bdd->query('SELECT COUNT(maison.ID_Maison) nbMaison FROM maison, user_maison, utilisateur WHERE maison.ID_Maison = user_maison.ID_Maison AND user_maison.ID_User = utilisateur.ID_User AND utilisateur.ID_User = '.$_SESSION['id']);

	while ($donnees = $req2->fetch())
	{
		?>
		<li>Nombre de maisons : <?php echo $donnees['nbMaison']; ?></li>
		<?php
	}

	$req2->closeCursor();

	?>

	</ul>