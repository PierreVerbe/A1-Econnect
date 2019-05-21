<?php

try {
	include ("Modeles/connect.php");
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['formlogin'])) {


   	$mail = htmlspecialchars(strtolower($_POST['mail']));

   	$password = htmlspecialchars($_POST['password']);

	if(!empty($_POST['mail']) AND !empty($_POST['password'])) {

    	if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {

			$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email LIKE :mail");
			$reqIdUser->bindParam(":mail",$mail);
			$userexist = $reqIdUser->execute();
		    $userexist = $reqIdUser->rowCount();

		    if($userexist == 1) {
				
		        $userinfo = $reqIdUser->fetch();
		        if(password_verify($password,$userinfo['Mot_de_passe'])) {
		        	
		        	$erreurColor = "green";
        			$erreur = "Connexion en cours ! <a href=\"../index.php\">Me connecter</a>";
			        session_start();
			        $_SESSION['id'] = $userinfo['ID_User'];
			        $_SESSION['cemac'] = $userinfo['Cemac'];
			        $_SESSION['mail'] = $userinfo['Adresse_email'];
					$_SESSION['type'] = $userinfo['User_type'];
	            }
	            else {
					$erreurColor = "red";
        			$erreur = "Mot passe incorrect.";
        		}
			}
			else {
				$erreurColor = "red";
        		$erreur = "Email introuvable.";
			}

        	$password = "";

        }
		else {$mail = "";$erreur = "Adresse mail non valide !";$erreurColor = "red";}

	}
	else {$erreur = "Tous les champs doivent être complétés !" ;$erreurColor = "red";}

}

?>