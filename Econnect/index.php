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

		<section class="infos">
				<div class="Graphs">
					<p> Chiffres info générales sur l'entreprise Graph...</p>
				</div>

				<div class="Partenaires">
					<p> Nos partenaires </p>
				</div>
		</section> 
		
		<section class="inscription">
		
			<form method="post" action="http://traitement.php" >
				<input class="boutoninscription" type="button" value="S'inscire">
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
			<p>
			<a href="Vues/Client/accueil_client.php"> Vous êtes client ? </a> ? <br/>
			<a href="Vues/Administrateur/accueil_admin.php"> Vous êtes administrateur ou technicien ? </a> <br/>
			<a href="Vues/Domisep/accueil_domisep.php"> Vous êtes Domisep ? </a> <br/>
			</p>
		
		</section>

	</body>
</html>