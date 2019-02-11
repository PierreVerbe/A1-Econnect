<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
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

		header('Location: ../../Vues/Administrateur/chat_sav.php');
		exit();
	}

	else
	{
		echo "erreur";
	}
?>