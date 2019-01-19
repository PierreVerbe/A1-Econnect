<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body>

	<section id="sectionClient">

	<h1>Profil client</h1>

	<div id="conteneur">
		<div class="element">
			<img id="imageClient" src="ressources/userHome.png">

			<p>Schéma de la maison, vue d'ensemble... </p>
		</div>

	<a style="text-decoration: none;" href="Info_Profit_Client.php">
        <div class="element" >
        	<h2>Vos informations :</h2>
			<p> 
				<?php include ("../../Modeles/Client/bdd_get-info-profil_client.php"); ?>
			</p>
		</div>
        </a>
		
	</div>	
</section>

<?php include ("footer_client.php")?>
