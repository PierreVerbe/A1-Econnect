<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
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

		$req = $bdd->query('SELECT piece.Temperature FROM piece WHERE Nom_piece = "'.$piece.'"');

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
