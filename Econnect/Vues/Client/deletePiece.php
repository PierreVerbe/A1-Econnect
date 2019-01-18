<?php
$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$ID_Piece = htmlspecialchars($_GET["ID_Piece"]);

$data = $bdd->prepare("DELETE FROM `actionneur` WHERE `actionneur`.`ID_Piece` = ?;DELETE FROM `capteur` WHERE `capteur`.`ID_Piece` = ?;DELETE FROM `piece` WHERE `piece`.`ID_Piece` = ?");
$data->bindParam(1, $ID_Piece);
$data->bindParam(2, $ID_Piece);
$data->bindParam(3, $ID_Piece);
$data->execute();

header('Location: gestion_client.php'); 
?>
