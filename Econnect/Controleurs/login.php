<?php
$login = $_POST['login'];
$password = $_POST['password'];

include "../Modeles/user.php";
include "../Modeles/model.php";
try {
$model = new Model();
    
}
catch(Exception $e) {
    echo $e->getMessage();
}

$password = hash("md5", $password);
$user = $model->getUserByEmail($login);
$password2 = $user->getPassword();
echo "$password";
echo "     ";
echo "$user";
echo "$user->getPassword()";
if ($user == null){
	header("Location: ../index.php");
}
else if ($password==$password2){
	session_start();	
	$_SESSION["user"]=serialize($user);
		
	if ($user->getType() == "Client") {
		header("Location: ../Vues/Client/accueil_client.php");
		
	}else if ($user->getType() == "Admin"){
		
		header("Location: ../Vues/Administrateur/accueil_admin.php");
		
	} else if ($user->getType() == "Domisep") {
	
		header("Location: ../Vues/Domisep/accueil_domisep.php");
	}
}else {
		header("Location: ../Vues/erreur_login.php");
}
?>