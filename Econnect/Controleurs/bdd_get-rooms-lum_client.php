<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT type_piece.Type_piece FROM type_piece, piece WHERE type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = 1');	

	while ($donnees = $req->fetch())
	{
		?>
		<div class="Slide_Bas_Droit"><p class="titre_contenu_info_H_G" id="pieceLum1"><?php echo $donnees['Type_piece']; ?></p>
												<p class="contenu_info_B_D"><br /><br />Lumière actuelle : Basse<br /><br />
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