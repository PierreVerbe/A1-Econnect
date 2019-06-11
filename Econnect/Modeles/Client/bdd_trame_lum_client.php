<?php

	//try
	//{
		//include ("../../Modeles/Requete_parametre.php");
	//}
	//catch (Exception $e)
	//{
		//die('Erreur : ' . $e->getMessage());
	//}

	// importation trames depuis serveur ISEP
	$ch = curl_init();
	curl_setopt(
		$ch,
		CURLOPT_URL,
		"http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G02D"
	);

	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	curl_close($ch);

	// ajout des trames dans une liste
	$data_tab = str_split($data,33);

	// séparation des trames de température et de luminosité
	$trames_lum = array();

	for ($nb_trames = 1; $nb_trames < sizeof($data_tab); $nb_trames++)
	{
		try
		{
			if (substr($data_tab[$nb_trames], 6, 1) == "5")
			{
				array_push($trames_lum, $data_tab[$nb_trames]);
			}
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
	}

	// récupération champ luminosité
	$lum = substr($trames_lum[sizeof($trames_lum) - 1], 9, 4);

	// passage string hexa vers integer
	$lum = hexdec($lum);

	// mise à jour sur la base de données
	$req = $bdd->prepare('UPDATE capteur, piece, maison, user_maison, utilisateur SET LUM_Capteur = :luminosite WHERE capteur.ID_Piece = piece.ID_Piece AND piece.ID_Maison = maison.ID_Maison AND maison.ID_Maison = user_maison.ID_Maison AND user_maison.ID_User = utilisateur.ID_User AND Adresse_email = \'pablo.grana@isep.fr\';');
	$req->bindParam(':luminosite', $lum, PDO::PARAM_INT);
	$req->execute();



?>
