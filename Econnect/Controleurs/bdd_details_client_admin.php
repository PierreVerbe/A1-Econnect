<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['postid']))
	{
		$id_client = $_POST['postid'];

		$req = $bdd->query('SELECT utilisateur.ID_User, utilisateur.Nom, utilisateur.Prenom, utilisateur.Fin_abo FROM maison, utilisateur, user_maison WHERE utilisateur.ID_User = user_maison.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = "'.$id_client.'"'); /*ici mettre le numero du client récupéré*/
	}

	while ($donnees = $req->fetch())
	{
		echo "<p>N°Client : " . $donnees['ID_User'] . "</p>";
		echo "<p>Nom du client : " . $donnees['Nom'] . " " . $donnees['Prenom'] . "</p>";
		echo "<p>Fin d'abonnement : " . $donnees['Fin_abo'] . "</p>";
	}


	$req->closeCursor();

?>