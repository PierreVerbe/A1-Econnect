<?php session_start();

if (isset($_SESSION['id']) and isset($_SESSION['type'])) {
	if ($_SESSION['type'] == "Administrateur") {

		try {
			include ("Modeles/connect.php");
		}
		catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}
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
		        $_SESSION['nom'] = $userinfo['Nom'];
		        $_SESSION['prenom'] = $userinfo['Prenom'];
            }
}
}

?>