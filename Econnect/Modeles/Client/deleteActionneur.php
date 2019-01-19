<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$ID_Actionneur = htmlspecialchars($_GET["ID_Actionneur"]);

$data = $bdd->prepare("DELETE FROM `actionneur` WHERE `actionneur`.`ID_Actionneur` = ?");
$data->bindParam(1, $ID_Actionneur);
$data->execute();

header('Location: ../../Vues/Client/gestion_client.php'); 
?>