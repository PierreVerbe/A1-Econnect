<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	/*$req = $bdd->query('SELECT piece.Temperature FROM piece');

		while ($donnees = $req->fetch())
		{
			echo $donnees['Temperature'];
		}*/

	if(isset($_POST['postpiece']))
	{
		$piece = $_POST['postpiece'];

		$req = $bdd->query('SELECT piece.Temperature FROM piece, type_piece WHERE piece.ID_Piece = type_piece.ID_Piece AND type_piece.Type_piece = "'.$piece.'"');

		while ($donnees = $req->fetch())
		{
			echo $donnees['Temperature'];
		}

		$req->closeCursor();
	}

	if(isset($_POST['postemp']))
	{
		$temp = $_POST['postemp'];

		if($req2 = $bdd->query('UPDATE piece SET Temperature = "'.$temp.'" WHERE ID_Piece = 1') === TRUE)
		{
			echo "complete";
		}
		else
		{
			echo "false";
		}
		$req2->closeCursor();
	}

	

			

	

	

?>