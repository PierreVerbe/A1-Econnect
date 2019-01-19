<?php
$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$ID_Capteur = htmlspecialchars($_GET["ID_Capteur"]);

$data = $bdd->prepare("DELETE FROM `capteur` WHERE `capteur`.`ID_Capteur` = ?");
$data->bindParam(1, $ID_Capteur);
$data->execute();

header('Location: gestion_client.php'); 
?>
