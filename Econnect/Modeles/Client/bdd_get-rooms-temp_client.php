<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $bdd->query('SELECT type_piece.Type_piece, type_piece.ID_Piece FROM type_piece, piece WHERE type_piece.ID_Piece = piece.ID_Piece AND piece.ID_Maison = 1');	

	while ($donnees = $req->fetch())
	{
		?>
		<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G" id="pieceTemp"><?php echo $donnees['Type_piece']; ?></p>
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

