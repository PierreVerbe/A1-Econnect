<?php
	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	//Récupération du mode de la maison
	$req = $bdd->query('SELECT ROUND(AVG(capteur.TEMP_Capteur), 1) FROM utilisateur, maison, user_maison, piece, capteur WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND maison.ID_Maison = piece.ID_Maison AND piece.ID_Piece = capteur.ID_Piece AND utilisateur.ID_User = 1 ');

	while ($donnees = $req->fetch()){
		$Temperature_Moyenne = $donnees['ROUND(AVG(capteur.TEMP_Capteur), 1)'];
		}
?>
		<p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_temperature.png" width="100" height="100">Température moyenne : <?php echo $Temperature_Moyenne ?>°C</p>
<?php
		$req->closeCursor();
?>
