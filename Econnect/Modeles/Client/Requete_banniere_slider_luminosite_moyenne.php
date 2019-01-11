<?php
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

	//Récupération du mode de la maison
	$req = $bdd->query('SELECT ROUND(AVG(piece.Luminosite), 1) FROM utilisateur, maison, user_maison, piece WHERE user_maison.ID_User = utilisateur.ID_User AND user_maison.ID_Maison = maison.ID_Maison AND maison.ID_Maison = piece.ID_Maison AND utilisateur.ID_User = 1 ');
			  	
	while ($donnees = $req->fetch()){
		$Luminosite_Moyenne = $donnees['ROUND(AVG(piece.Luminosite), 1)'];
		}
?>
		<p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_lumiere.png" width="100" height="100">Luminosité moyenne est : <?php echo $Luminosite_Moyenne ?>%</p>
<?php
		$req->closeCursor();
?>