<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['message']) AND isset($_POST['id_ticket']))
	{
		$id_ticket = $_POST['id_ticket'];

		$message = $_POST['message'];

		$date = date("Y-m-d H:i:s");

		##### Pièces ######

		$bdd->exec('INSERT INTO message(ID_Ticket, Date_message, Piece_jointe, Contenu) VALUES("'.$id_ticket.'", "'.$date.'", NULL, "'.$message.'")');

		header('Location: http://localhost/Econnect/A1-Econnect/Econnect/Vues/Administrateur/chat_sav.php');
		exit();
	}

	else
	{
		echo "erreur";
	}
?>