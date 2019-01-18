<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT utilisateur.Nom, utilisateur.Prenom, utilisateur.Adresse_email, utilisateur.Telephone, utilisateur.Date_naissance FROM utilisateur WHERE utilisateur.Adresse_email = \'jean.martin@domisep.fr\'');

	while ($donnees = $req->fetch())
	{
		echo "<p>Nom : ". $donnees['Nom'] ."</p>";
		echo "<p>Prenom : ". $donnees['Prenom']."</p>";
		echo "<p>Adresse email : ". $donnees['Adresse_email'] ."</p>";
		echo "<p>Téléphone : ". $donnees['Telephone'] ."</p>";
		echo "<p>Date de naissance : ". $donnees['Date_naissance'] ."</p>";
	}

	$req->closeCursor();


?>

	