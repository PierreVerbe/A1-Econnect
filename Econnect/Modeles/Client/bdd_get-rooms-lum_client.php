<?php

try
{
	include ("../../Modeles/Requete_parametre.php");
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


include ("bdd_trame_lum_client.php");

$req = $bdd->prepare("SELECT * FROM capteur INNER JOIN piece ON capteur.ID_Piece = piece.ID_Piece INNER JOIN user_maison ON piece.ID_Maison = user_maison.ID_Maison INNER JOIN utilisateur ON user_maison.ID_User = utilisateur.ID_User WHERE utilisateur.ID_User = ?");
$req->bindParam(1, $_SESSION['id']);
$req->execute();


while ($donnees = $req->fetch())
{
	?>
	<div class="Slide_Bas_Droit"><p class="titre_contenu_info_B_D" id="pieceLum"><?php echo $donnees['Nom_piece']; ?></p>
		<p class="contenu_info_B_D"><br /><br />Lumière actuelle : <?php echo $donnees['LUM_Capteur']; ?>%<br /><br />
			Ajuster la lumière : <a id="getLum"></a>%<br /><br /></p>
			<div class="bouton_info_B_D">
				<button class="moins_lumière" onclick="changeNegLum()">-</button>
				<button class="plus_lumière" onclick="changePosLum()">+</button></div></div>
				<?php
			}

			?>


			<?php

			$req->closeCursor();
			?>
