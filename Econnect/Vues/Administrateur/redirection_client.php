<?php

if (isset($_SESSION['id']) and isset($_SESSION['type']) and isset($_POST['numero_client'])) {
	if ($_SESSION['type'] == "Administrateur") {

		try {
			include ("../../Modeles/connect.php");
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
		$idu = htmlspecialchars($_POST['numero_client']);
		$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE ID_User LIKE :idu");
		$reqIdUser->bindParam(":idu",$idu);
		$userexist = $reqIdUser->execute();
	    $userexist = $reqIdUser->rowCount();

	    if($userexist == 1) {
			
	        $userinfo = $reqIdUser->fetch();	        	
        	session_destroy();
	        session_start();
	        $_SESSION['id'] = $userinfo['ID_User'];
	        $_SESSION['cemac'] = $userinfo['Cemac'];
	        $_SESSION['mail'] = $userinfo['Adresse_email'];
			$_SESSION['type'] = $userinfo['User_type'];
	        $_SESSION['nom'] = $userinfo['Nom'];
	        $_SESSION['prenom'] = $userinfo['Prenom'];
	        header("Location: ../../Vues/Client/accueil_client.php");
		} else{echo "Cet utilisateur n'existe pas !";}
	} else{echo "Vous n'êtes pas admin !";}
} else
?>