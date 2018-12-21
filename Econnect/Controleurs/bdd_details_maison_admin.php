<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['id_home']))
	{
		$id_maison = $_POST['id_home'];

		##### Pièces ######

		$req = $bdd->query('SELECT type_piece.Type_piece FROM type_piece, piece WHERE type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Pieces</h2>";

		while ($donnees = $req->fetch())
		{
			echo '<p>'. $donnees['Type_piece'] . '</p>';
		}

		##### Capteurs ######

		$req2 = $bdd->query('SELECT capteur.ID_Capteur, type_piece.Type_piece FROM capteur, piece, type_piece WHERE capteur.ID_Piece = piece.ID_Piece AND type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Capteurs</h2>";

		while ($donnees = $req2->fetch())
		{
			echo '<p>Capteur n° : ' . $donnees['ID_Capteur'] . ' dans ' . $donnees['Type_piece'] . '</p>';
		}


		##### Actionneurs ######

		$req3 = $bdd->query('SELECT actionneur.ID_Actionneur, type_piece.Type_piece FROM actionneur, piece, type_piece WHERE actionneur.ID_Piece = piece.ID_Piece AND type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = "'.$id_maison.'"');

		echo "<h2>Actionneurs</h2>";

		while ($donnees = $req3->fetch())
		{
			echo '<p>Actionneur n° : ' . $donnees['ID_Actionneur'] . ' dans ' . $donnees['Type_piece'] .'</p>';
		}
	}


	$req->closeCursor();
?>