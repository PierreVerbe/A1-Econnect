<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['id_capteur']))
	{
		$id_capteur = $_POST['id_capteur'];

		$req = $bdd->query('SELECT capteur.Numero_serie, capteur.ID_Piece FROM capteur WHERE capteur.ID_Capteur = "'.$id_capteur.'"');

		while ($donnees = $req->fetch())
		{
			echo 'Capteur n° ' . $id_capteur. ' /// Numéro de série : ' .$donnees['Numero_serie']. ' /// Pièce n° : ' .$donnees['ID_Piece'];
		}
	}

	$req->closeCursor();

?>