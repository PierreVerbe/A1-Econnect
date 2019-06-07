<?php

try {
	include ("../../Modeles/connect.php");
}
catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['formresetmdp']) AND isset($_SESSION['id'])) {

   	$old = htmlspecialchars($_POST['old_password']);
   	$new = htmlspecialchars($_POST['new_pass']);
   	$final = htmlspecialchars($_POST['new_password']);
   	$idDuMec = $_SESSION['id'];

   	if(!empty($_POST['old_password']) AND !empty($_POST['new_pass']) AND !empty($_POST['new_password']) ) {

   			$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE ID_User LIKE :id");
			$reqIdUser->bindParam(":id",$idDuMec);
			$userexist = $reqIdUser->execute();
		    $userexist = $reqIdUser->rowCount();

		    if($userexist == 1) {
				
		        $userinfo = $reqIdUser->fetch();
		        if(password_verify($old,$userinfo['Mot_de_passe'])) {

              		if($new == $final) {
					   	$new = password_hash($_POST['new_pass'],PASSWORD_BCRYPT);
					   	$final = password_hash($_POST['new_password'],PASSWORD_BCRYPT);

                	    $updatemdp = $bdd->prepare("UPDATE utilisateur SET Mot_de_passe = :new WHERE ID_User = :id");
           				$updatemdp->bindParam(":id",$idDuMec);
           				$updatemdp->bindParam(":new",$final);
                   	 	$updatemdp->execute();

						$reqIdUser = $bdd->prepare("SELECT * FROM utilisateur WHERE ID_User LIKE :id AND Mot_de_passe LIKE :new)");
           				$reqIdUser->bindParam(":id",$idDuMec);
           				$reqIdUser->bindParam(":new",$final);
					    $userexiste = $reqIdUser->rowCount();

				    	$erreurColor = "green";
                		$erreur = "Votre mot de passe a bien été modifié !";

                    }

                	else {$erreur = "Les mots de passe ne correspondent pas !";$erreurColor = "red";}

            	}
	            else {$erreur = "Votre ancien mdp n'est pas valide !";$erreurColor = "red";}

	        }
	        else {$erreur = "Votre ID est bloqué !";$erreurColor = "red";}

	    }
	    else {$erreur = "Tous les champs doivent être complétés !";$erreurColor = "red";}

	}
	else {$erreur = "Vous pouvez changer votre mot de passe !" ;$erreurColor = "blue";}


?>