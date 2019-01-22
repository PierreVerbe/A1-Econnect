<?php

	try
	{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query("SELECT * FROM piece INNER JOIN user_maison ON piece.ID_Maison = user_maison.ID_Maison INNER JOIN utilisateur ON user_maison.ID_User = utilisateur.ID_User WHERE Adresse_email = \"pablo.grana@isep.fr\";");	

	while ($donnees = $req->fetch())
	{
		?>
		<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G" id="pieceTemp"><?php echo $donnees['Nom_piece']; ?></p>
												<p class="contenu_info_H_G"><br /><br />Température actuelle : 18°C<br /><br />
																			Ajuster la température : <a id="getTemp"></a>°C<br /><br /> </p>
																			<div class="bouton_info_H_G">
																			<button class="moins_température" onclick="changeNegTemp()">- °C</button>
																			<button class="plus_température" onclick="changePosTemp()">+ °C</button></div></div>
		<?php
	}

	?>

	
	<?php

	$req->closeCursor();
?>

