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
	</header>

	
	<body>

		
		<div class="menu">
		
			<ul>
				<li>Qui sommes nous ?</li>		
				<li>Ce que nous proposons</li>	
				<li>Nos partenaires</li>
				<li>Identification</li>
			</ul>	
				
		</div>

		

		<div class="meteo">
			<p> Info météo </p>
		</div>

		<div class="box">
		
			<div class="login">			
				<div class="contenu_info_login">
					<p>Connectez-vous :</p>
					<form method="POST" action="Controleurs/do_login.php">
						<div id="email_div">
							<label>Email</label> <br>
							<input type="email" name="email" class="textInput"><br><br>
						</div>

					    <div id="password_div">
						      <label>Mots de passe</label> <br>
						      <input type="password" name="password" class="textInput"><br><br>
						 </div>

					    <div>
					    	<input type="submit" name="submit_login" value="Connexion" class="btn">
					    </div>
					</form>
					  
				</div>
			</div>


			<div class="signup">			
				<div class="contenu_info_signup">
					<form method="POST" action="Controleurs/do_signup.php" onsubmit="return Validate()">
						<div id="email_div">
							<label>Email</label> <br>
							<input type="email" name="email" class="textInput"><br><br>
							<div id="email_error"></div>
						</div>
					    <div id="password_div">
						      <label>Mots de passe</label> <br>
						      <input type="password" name="password" class="textInput"><br><br>
						    <div id="pass_confirm_div">
						       <label>Confirmer le mots de passe</label> <br>
						       <input type="password" name="password_confirm" class="textInput"><br><br>
						       <div id="password_error"></div>
						   </div>
						</div>
					    <div id="cemac_div">
					       <label>CEMAC</label> <br>
					       <input type="number" name="cemac" class="textInput">
					      <div id="cemac_error"></div><br>
					    </div>   
					     <div id="checkbox_div">
					    <div class='checkbox'>
					    	<input type=checkbox name=checkbox value='yes'>
							J'accepte les conditions générales d'utilisation <a href="cgu.html">lire</a><br><br/>
					    </div>

						</div>
					    <div>
					    <input type="submit" name="submit_signup" value="inscrire" class="btn">
					    </div><br><br/>
					</form>
				</div>			
			</div>

		</div>

		
				<!--<p>
					<label>Votre nom:</label> 
					<input type="text" name="nom" placeholder="Emmanuel" required>
				</p>
				<p>
					<label>Votre prénom:</label> 
					<input type="text" name="prénom" placeholder="Macron" required>
				</p>
				<p>
					<label>Votre adresse e-mail:</label> 
					<input type="email" name="email" placeholder="emmanuel.macron@gmail.com" required>
				</p>
				<p>
						J&#39;accepte de recevoir la newsletter des partenaires E-connect ? <br>
						<label>Oui</label>
						<input type="radio" name="réponse" value="oui" checked> <br>
						
						<label>Non</label>
						<input type="radio" name="réponse" value="non">
				</p>
				<input type="submit" value="Envoyer">
			</form>-->	
			<br></br>
			<div class="vitrine_image1">
				<img id="logo_vitrine_image1" src="Vues/Image/Econnect_feuille_contour_white.png">
				<p id="texte_vitrine_image1">La solution de domotique</p>
			</div>

			<div class="vitrine_text1">
				<p id="texte_vitrine_text1">Parler du groupe</p>
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

			<!-- la maison connecté respectueuse de l'envirronementconnecté electroniqueeconomiqueergonomie du sitetrès visuel avec des graphiques'incrire maitenant-->

			


		<section class="infos">
				<div class="Graphs">
					<p> Chiffres info générales sur l'entreprise Graph...</p>
				</div>

				<div class="Partenaires">
					<p> Nos partenaires </p>
				</div>
		</section> 
		
		<section class="inscription">
		<p> Vous n'êtes pas encore inscrit ?
			<a href="Vues/signup.php">S'inscrire </a>
		</p>
		</section>



		<p>
			<a href="Vues/Client/accueil_client.php"> Vous êtes client ? </a><br/>
			<a href="Vues/Administrateur/accueil_admin.php"> Vous êtes administrateur ou technicien ? </a> <br/>
			<a href="Vues/Domisep/accueil_domisep.php"> Vous êtes Domisep ? </a> <br/>
			</p>

	</body>
</html>