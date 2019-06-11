<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$data = $bdd->prepare("SELECT * FROM `actionneur` INNER JOIN piece ON actionneur.ID_Piece = piece.ID_Piece INNER JOIN user_maison ON piece.ID_Maison = user_maison.ID_Maison INNER JOIN utilisateur ON user_maison.ID_User = utilisateur.ID_User WHERE utilisateur.ID_User = ?;");
	$data->bindParam(1,$_SESSION['id']);
	$data->execute();


?>