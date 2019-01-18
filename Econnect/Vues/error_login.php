<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../Vues/style_signup.css">
		<title>E-Connect</title>
	</head>

	<header>
			<div class="logo">
				<img src="../Vues/Image/Logo_Econnect_texte.png" alt="logo" width="300" />
			</div>
			<div class="login">
				<form method="post" action="do_login.php" >
					<label>Email:</label>
					<input type="email" name="txtemail" required />
					<label>Mot de passe:</label>
					<input type="password" name="txtpass" required />
					<input type="submit" name="submit" value="Connexion" />	
				</form>
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

		
			<div class="vitrine_image2">
				<p id="texte_vitrine_image2"></p>
      <div>
		<h1>Connexion impossible: Veuillez vérifier vos identifiants</h1>
   		<br><br><br><br><br><br>
		<a href="../index.php">Retourner à la page de connexion</a>
      </div>
</body>
									
				</div>

			</div>

			<div class="vitrine_text1">
				<p id="texte_vitrine_text1"><a href="../index.php">Retour à la page d'accueil</a></p><br/>
			</div>


	</body>
</html>
