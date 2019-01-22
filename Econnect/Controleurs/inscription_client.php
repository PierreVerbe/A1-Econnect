<?php
$nom = $_POST["name"];
$prenom = $_POST["firstname"];
$mail = $_POST["email"];
$password = $_POST["password"];
$type = "Client";


include "../Modeles/user.php";
include "../Modeles/model.php";

try {
$model = new Model();   
} catch(Exception $e) {
    echo $e->getMessage();
}

$pass = hash("md5", $password);
$createdUser = new User($nom,$prenom,$mail,$pass,$type);
$user = $model->getUserByEmail($createdUser->getMail());


if ($user==null){    
    $model->createUser($createdUser);
	header("Location: ../Vues/created_client.php");
}else {
	header("Location: ../Vues/existing.php");
}
?>