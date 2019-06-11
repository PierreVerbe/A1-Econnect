<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->prepare("SELECT utilisateur.ID_User, utilisateur.User_type, utilisateur.Nom, utilisateur.Prenom, utilisateur.Adresse_email, utilisateur.Telephone, utilisateur.Date_naissance FROM utilisateur WHERE utilisateur.ID_User = ?");
	$req->bindParam(1, $_SESSION['id']);
	$req->execute();

	while ($donnees = $req->fetch())
	{
		echo "<p>ID User : ". $donnees['ID_User'] ."</p>";
		echo "<p>Type du compte : ". $donnees['User_type'] ."</p>";
		echo "<p>Nom : ". $donnees['Nom'] ."</p>";
		echo "<p>Prenom : ". $donnees['Prenom']."</p>";
		echo "<p>Adresse email : ". $donnees['Adresse_email'] ."</p>";
		echo "<p>Téléphone : ". $donnees['Telephone'] ."</p>";
		echo "<p>Date de naissance : ". $donnees['Date_naissance'] ."</p>";
	}

	$req->closeCursor();
?>