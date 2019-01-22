<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$ID_Capteur = htmlspecialchars($_GET["ID_Capteur"]);

$data = $bdd->prepare("DELETE FROM `capteur` WHERE `capteur`.`ID_Capteur` = ?");
$data->bindParam(1, $ID_Capteur);
$data->execute();

header('Location: ../../Vues/Client/parametre_client.php');
?>