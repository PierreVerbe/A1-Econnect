<?php

	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	$data_ID_Maison = array();

	$req = $bdd->prepare('SELECT user_maison.ID_Maison FROM user_maison, utilisateur WHERE utilisateur.ID_User = user_maison.ID_User AND utilisateur.ID_User = ? ORDER BY user_maison.ID_Maison ASC LIMIT 1');
	$req->bindParam(1, $_SESSION['id']);
	$req->execute();

	while ($donnees = $req->fetch()){
		$data_ID_Maison[] = $donnees['ID_Maison'];
	}

	if (isset($_POST['message']) AND isset($_POST['objet_message'])){
		
		$objet_message = $_POST['objet_message'];
		$statut= "En cours de traitement";
		$ID_User =  $_SESSION['id'];
		$ID_Maison = $data_ID_Maison; // en attendant qu'il y ait le login
		$message = $_POST['message'];
		$date = date("Y-m-d H:i:s");	

		//Ajout dans la bdd
		$req2 = $bdd->prepare('INSERT INTO ticket( Objet, Status, ID_User, ID_Maison, Date_ticket) VALUES("'.$objet_message.'", "'.$statut.'", "'.$ID_User.'", "'.$ID_Maison.'", "'.$date.'")');
		$req2->bindParam(1, $_SESSION['id']);
		$req2->execute();

		//$bdd->exec('INSERT INTO ticket( Objet, Status, ID_User, ID_Maison, Date_ticket) VALUES("'.$objet_message.'", "'.$statut.'", "'.$ID_User.'", "'.$ID_Maison.'", "'.$date.'")');

		//Recupération de l'id ticket créé
	   $reponse = $req2->query('SELECT ID_Ticket FROM ticket WHERE ID_Ticket = (SELECT MAX(ID_Ticket) FROM ticket)');
	    while ($donnees = $reponse->fetch()){
	    	$id_ticket = $donnees['ID_Ticket'];
	    }

		$bdd->exec('INSERT INTO message(ID_Ticket, Date_message, Piece_jointe, Contenu) VALUES("'.$id_ticket.'", "'.$date.'", NULL, "'.$message.'")');

		header('Location: ../../Vues/Client/SAV_client.php');
		exit();
		
	}

	else{
		echo "erreur";
	}
?>