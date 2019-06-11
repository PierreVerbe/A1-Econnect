<?php session_start();
  if(isset($_SESSION['type']) or !isset($_SESSION['id'])){
    if($_SESSION['type'] != "Administrateur" or !isset($_SESSION['id'])) {
      session_destroy();
      header("Location: ../../index.php");
    }
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style_admin.css">
		<title></title>
	</head>

	<body>

		<header>
			<img src="../Image/Econnect_feuille_mini.png" alt="Logo_Econnect"/>
			<div id = "Menu">
				<ul class="navbar">
					<li><a href="accueil_admin.php">Accueil</a></li>
					<li><a href="liste_client.php">Liste des clients</a></li>
					<li><a href="acces_maison.php">Accès maison</a></li>
					<li><a href="chat_sav.php">Chat/SAV</a></li>
					<li><a href="quit_admin.php">Déconnexion</a></li>
				</ul>
			</div>
		<script src="javascript/suiviNav.js" ></script>
		</header>

	</body>

</html>
