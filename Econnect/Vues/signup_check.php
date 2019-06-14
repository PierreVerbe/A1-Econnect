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

   	$numeroRue = htmlspecialchars($_POST['numeroRue']);
   	$adresse = htmlspecialchars($_POST['adresse']);
   	$ville = htmlspecialchars($_POST['ville']);
   	$codePostal = htmlspecialchars($_POST['codePostal']);

   	if(!empty($_POST['cemac']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['email']) AND !empty($_POST['pass']) AND !empty($_POST['password']) AND !empty($_POST['numeroRue']) AND !empty($_POST['adresse']) AND !empty($_POST['ville']) AND !empty($_POST['codePostal'])) {

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

								$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE Adresse_email LIKE :mail");
	               				$reqIdUser->bindParam(":mail",$mail);
							    $userexist = $reqIdUser->execute();

							    $erreurColor = "green";
							    
							        $userinfo = $reqIdUser->fetch();

							        session_start();
							        $_SESSION['id'] = $userinfo['ID_User'];
							        $_SESSION['cemac'] = $userinfo['Cemac'];
							        $_SESSION['mail'] = $userinfo['Adresse_email'];
							        $_SESSION['type'] = $userinfo['User_type'];
							        $_SESSION['nom'] = $userinfo['Nom'];
							        $_SESSION['prenom'] = $userinfo['Prenom'];
    		                    	$erreurColor = "blue";

			                	    $insertMaison = $bdd->prepare("INSERT INTO maison(Numero, Rue, Ville, Code_postal) VALUES(:numeroRue, :adresse, :ville, :codePostal)");
		               				$insertMaison->bindParam(":numeroRue",$numeroRue);
		               				$insertMaison->bindParam(":adresse",$adresse);
		               				$insertMaison->bindParam(":ville",$ville);		
		               				$insertMaison->bindParam(":codePostal",$codePostal);
			                   	 	$insertMaison->execute();

									$reqMaison = $bdd->prepare("SELECT * FROM maison WHERE Numero LIKE :numeroRue AND Rue LIKE :adresse AND Code_postal LIKE :codePostal GROUP BY ID_Maison DESC LIMIT 1 ");
		               				$reqMaison->bindParam(":numeroRue",$numeroRue);
		               				$reqMaison->bindParam(":adresse",$adresse);
		               				$reqMaison->bindParam(":codePostal",$codePostal);
								    $testmaison = $reqMaison->execute();
							        $maisonInfo = $reqMaison->fetch();

			                	    $insertMaisonUser = $bdd->prepare("INSERT INTO user_maison(ID_User, ID_Maison) VALUES(:idu, :idm)");
		               				$insertMaisonUser->bindParam(":idu",$_SESSION['id']);
		               				$insertMaisonUser->bindParam(":idm",$maisonInfo['ID_Maison']);
			                   	 	$insertMaisonUser->execute();

								
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