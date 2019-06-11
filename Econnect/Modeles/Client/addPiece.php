<?php session_start();
try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT user_maison.ID_Maison FROM user_maison, utilisateur WHERE utilisateur.ID_User = user_maison.ID_User AND utilisateur.ID_User = ? ORDER BY user_maison.ID_Maison ASC LIMIT 1');
$req->bindParam(1, $_SESSION['id']);
$req->execute();

while ($donnees = $req->fetch()){
	$data_ID_Maison = $donnees['ID_Maison'];
}

$maison = $data_ID_Maison;
$temp = htmlspecialchars($_GET["temp"]);
$nom = htmlspecialchars($_GET["nom"]);

$addPiece = $bdd->prepare("INSERT INTO piece (ID_maison, Temperature, Nom_piece) VALUES (?, ?, ?)");
$addPiece->bindParam(1, $maison);
$addPiece->bindParam(2, $temp);
$addPiece->bindParam(3, $nom);

$addPiece->execute();

header('Location: ../../Vues/Client/parametre_client.php');
?>