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
$num_serie = htmlspecialchars($_GET["num_serie"]);

$addActionneur = $bdd->prepare("INSERT INTO actionneur (ID_Piece, Numero_serie) VALUES (?, ?)");
$addActionneur->bindParam(1, $ID_Piece);
$addActionneur->bindParam(2, $num_serie);

$addActionneur->execute();

header('Location: ../../Vues/Client/gestion_client.php');
?>