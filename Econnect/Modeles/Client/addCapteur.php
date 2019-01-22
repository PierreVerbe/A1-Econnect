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

$addCapteur = $bdd->prepare("INSERT INTO capteur (ID_Piece, Numero_serie) VALUES (?, ?)");
$addCapteur->bindParam(1, $ID_Piece);
$addCapteur->bindParam(2, $num_serie);

$addCapteur->execute();

header('Location: ../../Vues/Client/parametre_client.php');
?>