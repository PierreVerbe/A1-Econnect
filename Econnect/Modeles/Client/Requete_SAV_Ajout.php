<?php

	try{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['message']) AND isset($_POST['objet_message'])){
		
		$objet_message = $_POST['objet_message'];
		$statut= "En cours de traitement";
		$ID_User = 2; //en attendant qu'il y ait le login
		$ID_Maison = 8; // en attendant qu'il y ait le login
		$message = $_POST['message'];
		$date = date("Y-m-d H:i:s");	

		//Ajout dans la bdd
		$bdd->exec('INSERT INTO ticket( Objet, Status, ID_User, ID_Maison, Date_ticket) VALUES("'.$objet_message.'", "'.$statut.'", "'.$ID_User.'", "'.$ID_Maison.'", "'.$date.'")');

		//Recupération de l'id ticket créé
	   $reponse = $bdd->query('SELECT ID_Ticket FROM ticket WHERE ID_Ticket = (SELECT MAX(ID_Ticket) FROM ticket)');
	    while ($donnees = $reponse->fetch()){
	    	$id_ticket = $donnees['ID_Ticket'];
	    }

		$bdd->exec('INSERT INTO message(ID_Ticket, Date_message, Piece_jointe, Contenu) VALUES("'.$id_ticket.'", "'.$date.'", NULL, "'.$message.'")');

		header('Location: http://localhost/Econnect/A1-Econnect/Econnect/Vues/Client/SAV_client.php');
		exit();
		
	}

	else{
		echo "erreur";
	}
?>