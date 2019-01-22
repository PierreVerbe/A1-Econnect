<?php
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$maison = 1;
$temp = htmlspecialchars($_GET["temp"]);
$nom = htmlspecialchars($_GET["nom"]);

$addPiece = $bdd->prepare("INSERT INTO piece (ID_maison, Temperature, Nom_piece) VALUES (?, ?, ?)");
$addPiece->bindParam(1, $maison);
$addPiece->bindParam(2, $temp);
$addPiece->bindParam(3, $nom);

$addPiece->execute();

header('Location: ../../Vues/Client/gestion_client.php');
?>