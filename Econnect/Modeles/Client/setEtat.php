<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$etat = htmlspecialchars($_GET["etat"]);
$actionneur = htmlspecialchars($_GET["actionneur"]);

$setEtat = $bdd->query('UPDATE actionneur SET ETAT_Actionneur = '.$etat.' WHERE ID_Actionneur = '.$actionneur.'');


header('Location: ../../Vues/Client/parametre_client.php');

?>