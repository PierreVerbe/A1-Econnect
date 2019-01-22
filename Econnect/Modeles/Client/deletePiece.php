<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$ID_Piece = htmlspecialchars($_GET["ID_Piece"]);

$data = $bdd->prepare("DELETE FROM `actionneur` WHERE `actionneur`.`ID_Piece` = ?;DELETE FROM `capteur` WHERE `capteur`.`ID_Piece` = ?;DELETE FROM `piece` WHERE `piece`.`ID_Piece` = ?");
$data->bindParam(1, $ID_Piece);
$data->bindParam(2, $ID_Piece);
$data->bindParam(3, $ID_Piece);
$data->execute();

header('Location: ../../Vues/Client/gestion_client.php'); 
?>