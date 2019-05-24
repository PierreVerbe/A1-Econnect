<?php
	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['postid'])){
		$mode = $_POST['postid'];
		$idUser = $_POST['postuser']
	
	$reqa = $bdd->prepare("INSERT INTO test(id_user, mode) VALUES (?, ?)");
	$reqa->bindParam(1, $idUser);
	$reqa->bindParam(2, $mode);
	$reqa->execute();

	//Récupration de l'ID maison
	$req = $bdd->prepare("SELECT * FROM utilisateur, maison, user_maison WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = ? LIMIT 1");
	$req->bindParam(1, $idUser);
	$req->execute();

	//Récupration de l'ID maison
	//$req = $bdd->query('SELECT maison.ID_maison FROM utilisateur, maison, user_maison WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND utilisateur.ID_User = 1');

	//Pour récupérer la dernière maison de l'utilisateur 
	while ($donnees = $req->fetch()){
		$ID_maison = $donnees['ID_maison'];
		echo($ID_maison);
		?> <script>alert("ICI");</script> <?php
	}

	//Pour récupérer la première maison de l'utilisateur 
	// if ($donnees = $req->fetch())$ID_maison = $donnees['ID_maison']; 
		
	//changement du mode de la maison
	$reqi = $bdd->prepare('UPDATE maison SET Mode_maison = "?" WHERE ID_maison = ?');
	$reqi->bindParam(1, $mode);
	$reqi->bindParam(2, $ID_maison);
	$reqi->execute();

	//$bdd->query('UPDATE maison SET Mode_maison = "'.$mode.'" WHERE ID_maison = "'.$ID_maison.'"');
	}

	$req->closeCursor();
?>