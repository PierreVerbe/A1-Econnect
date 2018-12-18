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
				<script>
					var url = location.href.split("/");
					var navLinks = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
					var i=0;
					var currentPage = url[url.length - 1];

					for(i;i<navLinks.length;i++){
					 	var isLink = navLinks[i].href.split("/");
					 	if(isLink[isLink.length-1] == currentPage) {
					 	navLinks[i].className = "current";
						}

					}
				</script>
		</header>

	</body>

</html>
