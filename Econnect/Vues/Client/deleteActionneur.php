<?php
$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$ID_Actionneur = htmlspecialchars($_GET["ID_Actionneur"]);

$data = $bdd->prepare("DELETE FROM `actionneur` WHERE `actionneur`.`ID_Actionneur` = ?");
$data->bindParam(1, $ID_Actionneur);
$data->execute();

header('Location: gestion_client.php'); 
?>
