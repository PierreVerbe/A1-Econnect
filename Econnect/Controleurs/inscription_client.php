<?php
$nom = $_POST["name"];
$prenom $_POST["firstname"];
$mail = $_POST["email"];
$password = $_POST["password"];
$type = "Client";

echo "$nom";
echo "$prenom";
echo "$mail";
echo "$password";
echo "$type";


include "../Modeles/user.php";
include "../Modeles/model.php";

try {
$model = new Model();   
} catch(Exception $e) {
    echo $e->getMessage();
}
finally {
	echo "connexion au modele";
}

$pass = hash("md5", $password);
$createdUser = new User($nom,$prenom,$mail,$pass,$type);
$user = $model->getUserByEmail($createdUser->getMail());


if ($user==null){    
    $model->createUser($createdUser);
/*    $createdClient = new Client($nom,$email,$cemac);
    $model->createClient($createdClient);*/
	header("Location: ../Vues/created_client.php");
}else {
	header("Location: ../Vues/existing.php");
}
?>