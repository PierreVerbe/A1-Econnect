<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$temp = htmlspecialchars($_GET["temp"]);
$piece = htmlspecialchars($_GET["piece"]);

$setTemp = $bdd->query('UPDATE piece SET Temperature = '.$temp.' WHERE ID_piece = '.$piece.'');


header('Location: ../../Vues/Client/gestion_client.php');

?>