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
	$piece = $_POST['postpiece'];

	$req2 = $bdd->prepare('UPDATE piece SET Temperature = ? WHERE Nom_piece = ?');
	$req2->bindParam(1, $temp);
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
