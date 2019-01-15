<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
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