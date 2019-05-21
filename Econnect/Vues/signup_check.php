<?php

try {
	include ("../Modeles/connect.php");
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['forminscription'])) {

   	$cemac = htmlspecialchars($_POST['cemac']);
   	$nom = htmlspecialchars($_POST['nom']);
   	$prenom = htmlspecialchars($_POST['prenom']);
   	$mail = htmlspecialchars(strtolower($_POST['mail']));
   	$email = htmlspecialchars(strtolower($_POST['email']));
   	$pass = htmlspecialchars($_POST['pass']);
   	$password = htmlspecialchars($_POST['password']);

   	if(!empty($_POST['cemac']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['email']) AND !empty($_POST['pass']) AND !empty($_POST['password'])) {

      	$cemaclength = strlen($cemac);

      	if($cemaclength == 5) {

         	if($mail == $email) {

            	if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {

               		$reqmail = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email = :mail");
               		$reqmail->bindParam(":mail",$mail);
               		$reqmail->execute();
               		$mailexist = $reqmail->rowCount();

               		if($mailexist == 0) {
	               		$reqcemac = $bdd->query("SELECT Cemac FROM utilisateur");

	               		while ($rowCemac = $reqcemac->fetch()) {
							if($rowCemac['Cemac'] == $cemac){
								$cemac_exist = 1;
								break;
							} else {$cemac_exist = 0;}

						}

                  		if($cemac_exist == 0) {
	                  		if($pass == $password) {
							   	$pass = password_hash($_POST['pass'],PASSWORD_BCRYPT);
							   	$password = password_hash($_POST['password'],PASSWORD_BCRYPT );

		                	    $insertmbr = $bdd->prepare("INSERT INTO utilisateur(Cemac, Adresse_email, Mot_de_passe, Nom, Prenom) VALUES(:cemac, :mail, :pass, :prenom, :nom)");
	               				$insertmbr->bindParam(":cemac",$cemac);
	               				$insertmbr->bindParam(":mail",$mail);
	               				$insertmbr->bindParam(":pass",$pass);		
	               				$insertmbr->bindParam(":prenom",$prenom);
	               				$insertmbr->bindParam(":nom",$nom);
		                   	 	$insertmbr->execute();

								$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email LIKE :mail AND Mot_de_passe LIKE :pass)");
	               				$reqIdUser->bindParam(":mail",$mail);
	               				$reqIdUser->bindParam(":pass",$pass);
							    $userexist = $reqIdUser->rowCount();

							    $erreurColor = "green";
							    if($userexist == 1) {
							        $userinfo = $reqIdUser->fetch();
							        session_start();
							        $_SESSION['id'] = $userinfo['ID_User'];
							        $_SESSION['cemac'] = $userinfo['Cemac'];
							        $_SESSION['mail'] = $userinfo['Adresse_email'];
							        $_SESSION['type'] = $userinfo['User_type'];
    		                    	$erreurColor = "blue";

								}
		                    	$erreur = "Votre compte a bien été créé ! <a href=\"../index.php\">Me connecter</a>";

		                    	$cemac = "";
		                    	$prenom = "";
		                    	$nom = "";
		                    	$mail = "";
		                    	$email = "";
		                    	$pass = "";
		                    	$password = "";

		                    }
	                		else {$erreur = "Vos mots de passes ne correspondent pas !";$erreurColor = "red";}
                		}
                		else {$erreur = "Le numéro de série du Cemac est déjà utilisé par un autre utilisateur !";$erreurColor = "red";}
            		}
                	else {$erreur = "Cette adresse e-mail est déjà utilisée !";$erreurColor = "red";}

            	}
	            else {$erreur = "Votre adresse mail n'est pas valide !";$erreurColor = "red";}

	        }
	        else {$erreur = "Vos adresses mail ne correspondent pas !";$erreurColor = "red";}

	    }
	    else {$erreur = "Le numéro de série du Cemac est composé de 5 chiffres !";$erreurColor = "red";}

	}
	else {$erreur = "Tous les champs doivent être complétés !" ;$erreurColor = "red";}

}

?>