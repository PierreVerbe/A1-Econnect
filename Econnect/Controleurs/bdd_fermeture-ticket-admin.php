<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	if (isset($_POST['numticket']))
	{
		$idTicket = $_POST['numticket'];

		if($req = $bdd->query('UPDATE ticket SET Status = \'Terminé\' WHERE ID_Ticket = "'.$idTicket.'"') === TRUE)
		{
			echo "complete";
		}
		else
		{
			echo "false";
		}

		$req->closeCursor();
	}


?>