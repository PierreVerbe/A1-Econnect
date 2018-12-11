<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>


<body>

	<!-- Texte de remplissage -->
	<section class="tableau_bord">
	
		<div id="bloc_info">
			<!-- premier block du tableau de bord = Haut gauche -->
			<div class="info_H_G">
				<button class="info_bloc_gauche" onclick="plusDivs_Haut_Gauche(-1)">&#10094;</button>
				
				<img class="Slide_Haut_Gauche" src="../Image/Accueil/temperature.png">
				<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G">Salon</p>
												<p class="contenu_info_H_G"><br /><br />Température actuelle : 18°C<br /><br />
																			Ajuster la température : <br /><br /> </p>
																			<div class="bouton_info_H_G">
																			<button class="moins_température">- °C</button>
																			<button class="plus_température">+ °C</button></div></div>


				<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G">Cuisine</p>
												<p class="contenu_info_H_G"><br /><br />Température actuelle : 20°C<br /><br />
																			Ajuster la température : <br /><br /> </p>
																			<div class="bouton_info_H_G">
																			<button class="moins_température">- °C</button>
																			<button class="plus_température">+ °C</button></div></div>

				<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G">Chambre</p>
												<p class="contenu_info_H_G"><br /><br />Température actuelle : 18°C<br /><br />
																			Ajuster la température : <br /><br /> </p>
																			<div class="bouton_info_H_G">
																			<button class="moins_température">- °C</button>
																			<button class="plus_température">+ °C</button></div></div>

				<div class="Slide_Haut_Gauche">	<p class="titre_contenu_info_H_G">Salle de bain</p>
												<p class="contenu_info_H_G"><br /><br />Température actuelle : 20°C<br /><br />
																			Ajuster la température : <br /><br /> </p>
																			<div class="bouton_info_H_G">
																			<button class="moins_température">- °C</button>
																			<button class="plus_température">+ °C</button></div></div>

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
				<table class="SAV_table">
			  	<tr>
				    <th>N° ticket</th>
				    <th>Objet du ticket / dernier message</th>
				    <th>Statut</th>
			  	</tr>
			  	<tr>
				    <td>1</td>
				    <td>Problème capteur</td>
				    <td>✓</td>
			  	</tr>
			  	<tr>
				    <td>2</td>
				    <td>Problème site</td>
				    <td>✓</td>
			  	</tr>
			  	<tr>
				    <td>3</td>
				    <td>Problème données</td>
				    <td>En cours de traitement</td>
			  	</tr>
			  	<tr>
				    <td>4</td>
				    <td>Problème compte secondaire</td>
				    <td>✓</td>
				</tr>
			</table>
			</div>

			<!-- troisième block du tableau de bord = bas gauche -->
			<div class="info_B_G">

			<!-- appel du graphique -->	
			<?php echo "<img src='../../Controleurs/graph_conso_elec_client.php'/>";?>
			
			</div>

			<!-- quatrième block du tableau de bord = bas droit -->
			<div class="info_B_D">
				<button class="info_bloc_gauche" onclick="plusDivs_Bas_Droit(-1)">&#10094;</button>
				
				<img class="Slide_Bas_Droit" src="../Image/Accueil/lumiere.png">
				<div class="Slide_Bas_Droit"><p class="titre_contenu_info_H_G">Salon</p>
												<p class="contenu_info_B_D"><br /><br />Lumière actuelle : Basse<br /><br />
																			Ajuster la lumière : <br /><br /> </p>
																			<div class="bouton_info_B_D">
																			<button class="moins_lumière">-</button>
																			<button class="plus_lumière">+</button></div></div>

				<div class="Slide_Bas_Droit"><p class="titre_contenu_info_H_G">Cuisine</p>
												<p class="contenu_info_B_D"><br /><br />Lumière actuelle : OFF<br /><br />
																			Ajuster la lumière : <br /><br /> </p>
																			<div class="bouton_info_B_D">
																			<button class="moins_lumière">-</button>
																			<button class="plus_lumière">+</button></div></div>
												

				<div class="Slide_Bas_Droit"><p class="titre_contenu_info_H_G">Chambre</p>
												<p class="contenu_info_B_D"><br /><br />Lumière actuelle : Forte<br /><br />
																			Ajuster la lumière : <br /><br /> </p>
																			<div class="bouton_info_B_D">
																			<button class="moins_lumière">-</button>
																			<button class="plus_lumière">+</button></div></div>
												

				<div class="Slide_Bas_Droit"><p class="titre_contenu_info_H_G">Salle de bain</p>
												<p class="contenu_info_B_D"><br /><br />Lumière actuelle : OFF<br /><br />
																			Ajuster la lumière : <br /><br /> </p>
																			<div class="bouton_info_B_D">
																			<button class="moins_lumière">-</button>
																			<button class="plus_lumière">+</button></div></div>
												
			  	

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
