<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if(isset($_POST['postpiece']))
	{
		$piece = $_POST['postpiece'];

		$req = $bdd->query('SELECT piece.Luminosite FROM piece WHERE Nom_Piece = "'.$piece.'"');

		while ($donnees = $req->fetch())
		{
			echo $donnees['Luminosite'];
		}

		$req->closeCursor();
	}

	if(isset($_POST['postlum']))
	{
		$lum = $_POST['postlum'];
		$piece = $_POST['postpiece'];

		$req2 = $bdd->prepare('UPDATE piece SET Luminosite = ? WHERE Nom_piece = ?');
		$req2->bindParam(1, $lum);
		$req2->bindParam(2, $piece);

		if($req2->execute())
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
