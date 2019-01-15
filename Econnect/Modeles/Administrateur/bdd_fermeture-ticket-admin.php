<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
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