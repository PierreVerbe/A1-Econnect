<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Vues/style_index.css">
		<title>E-Connect</title>
	</head>

	<header>
			<div class="logo">
				<img src="Vues/Image/Logo_Econnect_texte.png" alt="logo" width="300" />
			</div>
			<p id="soustitre_logo"> Un produit Domisep©</p>
			<div class="login">
				<?php require("Controleurs/login.php"); ?>

				<?php
				if(isset($_SESSION['type'])) {
					if($_SESSION['type'] == "Client")	header('Location: Vues/Client/accueil_client.php');
				}
				else if (isset($erreur)) {
					echo '<font color='.$erreurColor.'>'.$erreur."</font>";
				}
				?>

				<form method="POST" action="" >
					<label>Email:</label>
					<input type="email" name="mail" class="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" required />
					<label>Mot de passe:</label>
					<input type="password" name="password" class="passmdp" required />
					<input type="submit" name="formlogin" value="Connexion" id="boutonSubmit" />	
				</form>
			</div>

	</header>

	
	
	<body>

		<article>

			<div class="vitrine_image1">
				<img id="logo_vitrine_image1" src="Vues/Image/Econnect_feuille_contour_white.png">
				<p id="texte_vitrine_image1">La solution de domotique</p>
			</div>

			<div class="vitrine_image2">
				<p id="texte_vitrine_image2">Une solution, 3 réponses</p>
				<div id="button_multiple_vitrine_image2">
					<button class="button_vitrine_image2">Ecologique</button>
					<button class="button_vitrine_image2">Economique</button>
					<button class="button_vitrine_image2">Connectée</button>
				<!-- survol des boxs découvre les mots ecologique, economique, connecté-->
				</div>
				<p id="texte2_vitrine_image2">Survoler les blocs pour le découvrir</p>

			</div>

			<img class="maison_domo_gif" src="Vues/Image/Gif/maison_domo.gif"/>

		</article>

		<article id="utilisateur">
			
			<section id="inscription">

				<h2>Vous êtes nouveau ?</h2>

				<input type="button" id="boutonInscription" value="Inscrivez-vous !" onClick="javascript:document.location.href='Vues/signup.php'" />
				
			</section>

			<section id="connexion">

				<h2>Vous êtes déjà client ?</h2>

				<form method="POST" action="" >
					<label>Email:</label>
					<input type="email" name="mail" class="mail" required />
					<label>Mot de passe:</label>
					<input type="password" name="password" class="passmdp" required />
					<input type="submit" name="formlogin" value="Connexion" id="boutonSubmit" />	
				</form>
				
			</section>

		</article>

		<!-- <p>
			<a href="Vues/Client/accueil_client.php"> Vous êtes client ? </a><br/>
			<a href="Vues/Administrateur/accueil_admin.php"> Vous êtes administrateur ou technicien ? </a> <br/>
			<a href="Vues/Domisep/accueil_domisep.php"> Vous êtes Domisep ? </a> <br/>
		</p> -->

	</body>
</html>