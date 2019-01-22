<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$lum = htmlspecialchars($_GET["lum"]);
$piece = htmlspecialchars($_GET["piece"]);

$setLum = $bdd->query('UPDATE piece SET Luminosite = '.$lum.' WHERE ID_piece = '.$piece.'');


header('Location: ../../Vues/Client/gestion_client.php');

?>