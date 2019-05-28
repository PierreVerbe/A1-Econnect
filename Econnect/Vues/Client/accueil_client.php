<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>


<body>

	<!-- Texte de remplissage -->
	<section class="tableau_bord">

	<script src="http://code.jquery.com/jquery.min.js"></script>

	<div class="info_H_G">
				<button class="info_bloc_gauche" onclick="plusDivs_Haut_Gauche(-1)">&#10094;</button>

				<img class="Slide_Haut_Gauche" src="../Image/Accueil/temperature.png">

			<?php include("../../Modeles/Client/bdd_get-rooms-temp_client.php");?>

			<button class="info_bloc_droite" onclick="plusDivs_Haut_Gauche(1)">&#10095;</button>
			</div>


			<!-- Script pour le bloc Haut Gauche -->
			<script src="javascript/accueil_client.js"> </script>

			<!-- deuxième block du tableau de bord = haut droit -->
			<div class="info_H_D">
				<?php include("../../Modeles/Client/Requete_accueil_tableau.php");?>
			</div>

			<!-- troisième block du tableau de bord = bas gauche -->
			<div class="info_B_G">

			<!-- appel du graphique -->
			<?php echo "<img src='../../Modeles/Client/graph_conso_elec_client.php'/>";?>

			</div>

			<!-- quatrième block du tableau de bord = bas droit -->
			<div class="info_B_D">
				<button class="info_bloc_gauche" onclick="plusDivs_Bas_Droit(-1)">&#10094;</button>

				<img class="Slide_Bas_Droit" src="../Image/Accueil/lumiere.png">

				<?php include("../../Modeles/Client/bdd_get-rooms-lum_client.php"); ?>



				<button class="info_bloc_droite" onclick="plusDivs_Bas_Droit(1)">&#10095;</button>
			</div>

			<!-- Script pour le bloc Haut Gauche -->
			<script src="javascript/accueil_client.js"> </script>

		</div>

	</section>

<?php include ("footer_client.php")?>
