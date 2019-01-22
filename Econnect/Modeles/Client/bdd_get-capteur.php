<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$capteur = $bdd->query("SELECT * FROM `capteur` INNER JOIN piece ON capteur.ID_Piece = piece.ID_Piece INNER JOIN user_maison ON piece.ID_Maison = user_maison.ID_Maison INNER JOIN utilisateur ON user_maison.ID_User = utilisateur.ID_User WHERE Adresse_email = \"pablo.grana@isep.fr\";");

?>