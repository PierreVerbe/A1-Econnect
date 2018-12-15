<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
        <link rel="stylesheet" href="style_domisep.css" />
        <title>Econnect</title>
</head>

<header>
		
	<!-- Image logo -->
  <div id = "image_fond_header">
  <div id = "logo_fond">
    <img src="../Image/Econnect_feuille_mini.png" alt="Logo_Econnect" />
  </div>
  </div>
	

</header>
	<!-- Menu -->
	<ul class="navbar">
  		<li><a href="accueil_domisep.php">Accueil</a></li>
  		<li><a href="liste_clients_domisep.php">Liste Clients</a></li>
  		<li><a href="profil_domisep.php">Mon profil</a></li>
  		<li><a href="quit_domisep.php">Déconnexion</a>
  		</li>
	</ul>

<script>
  var url = location.href.split("/"); //replace string with location.href
  var navLinks = document.getElementsByClassName("navbar")[0].getElementsByTagName("a");
  //naturally you could use something other than the <nav> element
  var i=0;
  var currentPage = url[url.length - 1];
  for(i;i<navLinks.length;i++){
    var lb = navLinks[i].href.split("/");
    if(lb[lb.length-1] == currentPage) {
    navLinks[i].className = "current";
    }
  }
</script>