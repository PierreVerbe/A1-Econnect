<?php
$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$ID_Piece = htmlspecialchars($_GET["ID_Piece"]);
$num_serie = htmlspecialchars($_GET["num_serie"]);

$addCapteur = $bdd->prepare("INSERT INTO capteur (ID_Piece, Numero_serie) VALUES (?, ?)");
$addCapteur->bindParam(1, $ID_Piece);
$addCapteur->bindParam(2, $num_serie);

$addCapteur->execute();

header('Location: gestion_client.php');
?>
S