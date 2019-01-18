<?php
$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$maison = 1;
$temp = htmlspecialchars($_GET["temp"]);
$nom = htmlspecialchars($_GET["nom"]);

$addPiece = $bdd->prepare("INSERT INTO piece (ID_maison, Temperature, Nom_piece) VALUES (?, ?, ?)");
$addPiece->bindParam(1, $maison);
$addPiece->bindParam(2, $temp);
$addPiece->bindParam(3, $nom);

$addPiece->execute();

header('Location: gestion_client.php');
?>
S