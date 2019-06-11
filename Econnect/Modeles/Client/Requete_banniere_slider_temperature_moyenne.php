<?php
	try{
		include ("../../Modeles/Requete_parametre.php");
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	//Récupération du mode de la maison
	$req = $bdd->prepare("SELECT ROUND(AVG(piece.Temperature), 1) FROM utilisateur, maison, user_maison, piece WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND maison.ID_Maison = piece.ID_Maison AND utilisateur.ID_User = ? ");
	$req->bindParam(1, $_SESSION['id']);
	$req->execute();
			  	
	while ($donnees = $req->fetch()){
		$Temperature_Moyenne = $donnees['ROUND(AVG(capteur.TEMP_Capteur), 1)'];
		}
?>
		<p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_temperature.png" width="100" height="100">Température moyenne : <?php echo $Temperature_Moyenne ?>°C</p>
<?php
		$req->closeCursor();
?>
