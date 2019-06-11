<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$piece = $bdd->prepare("SELECT * FROM piece INNER JOIN user_maison ON piece.ID_Maison = user_maison.ID_Maison INNER JOIN utilisateur ON user_maison.ID_User = utilisateur.ID_User WHERE utilisateur.ID_User = ?;");
	$piece->bindParam(1,$_SESSION['id']);
	$piece->execute();

?>