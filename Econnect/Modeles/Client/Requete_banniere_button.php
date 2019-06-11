<?php
	session_start();

	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['postid'])){
		$mode = $_POST['postid'];

		//Récupration de l'ID de la premiere maison
		$req = $bdd->prepare("SELECT maison.ID_Maison FROM utilisateur, maison, user_maison WHERE  user_maison.ID_Maison = maison.ID_Maison AND user_maison.ID_User = utilisateur.ID_User AND utilisateur.ID_User = ? ORDER BY maison.ID_Maison ASC LIMIT 1");
		$req->bindParam(1, $_SESSION['id']);
		$req->execute();

		while ($donnees = $req->fetch()){
			$ID_maison = $donnees['ID_Maison'];
		}
			
		//changement du mode de la maison
		$reqi = $bdd->prepare('UPDATE maison SET Mode_maison = ? WHERE ID_maison = ?');
		$reqi->bindParam(1, $mode);
		$reqi->bindParam(2, $ID_maison);
		$reqi->execute();
	}

	$req->closeCursor();
	$reqi->closeCursor();
?>