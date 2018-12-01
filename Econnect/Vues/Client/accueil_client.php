<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>


<body>

	<!-- Texte de remplissage -->
	<section class="tableau_bord">
	
		<div id="bloc_info">
			<!-- premier block du tableau de bord = Haut gauche -->
			<div class="info_H_G">
				<button class="info_bloc_gauche" onclick="plusDivs_Haut_Gauche(-1)">&#10094;</button>
				
				<img class="Slide_Haut_Gauche" src="../Image/lune.jpg">
			  	<img class="Slide_Haut_Gauche" src="../Image/roche.jpg">
			  	<img class="Slide_Haut_Gauche" src="../Image/minion.jpg">
			  	<div class="Slide_Haut_Gauche">Bonjour j'adore les sliders</div>
			  	

				<button class="info_bloc_droite" onclick="plusDivs_Haut_Gauche(1)">&#10095;</button>
			</div>
		
				
			

			<!-- Script pour le bloc Haut Gauche -->
			<script>
				var var_Haut_Gauche = 1;
				showDivs_Haut_Gauche(var_Haut_Gauche);

				function plusDivs_Haut_Gauche(n) 
				{
			  	showDivs_Haut_Gauche(var_Haut_Gauche += n);
				}

				function showDivs_Haut_Gauche(n) 
				{
				  var i;
				  var x = document.getElementsByClassName("Slide_Haut_Gauche");
				  if (n > x.length) {var_Haut_Gauche = 1}    
				  if (n < 1) {var_Haut_Gauche = x.length}
				  for (i = 0; i < x.length; i++) {
				     x[i].style.display = "none";  
				  }
			  		x[var_Haut_Gauche-1].style.display = "block";  
				}
			</script>

			<!-- deuxième block du tableau de bord = haut droit -->
			<div class="info_H_D">
				Box liste des tickets
			</div>

			<!-- troisième block du tableau de bord = bas gauche -->
			<div class="info_B_G">

			<!-- appel du graphique -->	
			<?php echo "<img src='ressources/graph_facture.php'/>";?>
			
			</div>

			<!-- quatrième block du tableau de bord = bas droit -->
			<div class="info_B_D">
				<button class="info_bloc_gauche" onclick="plusDivs_Bas_Droit(-1)">&#10094;</button>
				
				<img class="Slide_Bas_Droit" src="../Image/lune.jpg">
			  	<img class="Slide_Bas_Droit" src="../Image/roche.jpg">
			  	<img class="Slide_Bas_Droit" src="../Image/minion.jpg">
			  	<div class="Slide_Bas_Droit">Bonjour j'adore les sliders</div>

				<button class="info_bloc_droite" onclick="plusDivs_Bas_Droit(1)">&#10095;</button>
			</div>

			<!-- Script pour le bloc Haut Gauche -->
			<script>
				var var_Bas_Droit = 1;
				showDivs_Bas_Droit(var_Bas_Droit);

				function plusDivs_Bas_Droit(n) 
				{
			  	showDivs_Bas_Droit(var_Bas_Droit += n);
				}

				function showDivs_Bas_Droit(n) 
				{
				  var i;
				  var x = document.getElementsByClassName("Slide_Bas_Droit");
				  if (n > x.length) {var_Bas_Droit = 1}    
				  if (n < 1) {var_Bas_Droit = x.length}
				  for (i = 0; i < x.length; i++) {
				     x[i].style.display = "none";  
				  }
			  		x[var_Bas_Droit-1].style.display = "block";  
				}
			</script>

		</div>

	</section>

<?php include ("footer_client.php")?>
