<?php session_start();
  if(isset($_SESSION['type']) or !isset($_SESSION['id'])){
    if($_SESSION['type'] != "Client" or !isset($_SESSION['id'])) {
      header("Location: ../../index.php");
    }
  }
?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
        <link rel="stylesheet" href="style_client.css" />
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
  		<li><a href="accueil_client.php">Ma maison</a></li>
  		<li><a href="consommation_client.php">Consommation</a></li>
  		<li><a href="SAV_client.php">Chat/SAV</a></li>
  		<li><a href="parametre_client.php">Paramètres</a></li>
  		<li><a href="profil_client.php">Mon profil <?php if(isset($_SESSION['id'])) echo "(".$_SESSION['id'].")";?></a></li>
  		<li><a href="quit_client.php">Déconnexion</a>
  		</li>
	</ul>

<script src="javascript/suiviNav.js" ></script>