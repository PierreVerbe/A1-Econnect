<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}

	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['postid'])){
		$mode = $_POST['postid'];


	//Récupration de l'ID maison
	$req = $bdd->query('SELECT maison.ID_maison FROM utilisateur, maison, user_maison WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = 2');

	//Pour récupérer la dernière maison de l'utilisateur 
	while ($donnees = $req->fetch()){
		$ID_maison = $donnees['ID_maison'];
		echo($ID_maison);
	}

	//Pour récupérer la première maison de l'utilisateur 
	// if ($donnees = $req->fetch())$ID_maison = $donnees['ID_maison']; 
		
	//changement du mode de la maison
	$bdd->query('UPDATE maison SET Mode_maison = "'.$mode.'" WHERE ID_maison = "'.$ID_maison.'"');
	}

	$req->closeCursor();
?>