	<!-- Slider de haut avec des infos randoms -->
	<div class="slider_boutons">
		<div class="Slider_h">
			<button class="Slider_h_gauche" onclick="plusDivs(-1)">&#10094;</button>
			
			
			<img class="Slide_h" src="../Image/Banniere/Econnect_slider.png">
			<div class="Slide_h"><p class="Text_Slide_h">Bonjour Mr.Dupont<br />Vous êtes actuellement en mode "Eco"<br /></p></div>
			<div class="Slide_h"><p class="Text_Slide_h"><div id="cont_OTIwNDB8NHw0fDN8MXxGRkZGRkZ8M3xGRkZGRkZ8Y3wx"><div id="spa_OTIwNDB8NHw0fDN8MXxGRkZGRkZ8M3xGRkZGRkZ8Y3wx"><a id="a_OTIwNDB8NHw0fDN8MXxGRkZGRkZ8M3xGRkZGRkZ8Y3wx" href="http://www.meteocity.com/france/issy-les-moulineaux_v92040/" target="_blank" style="color:#333;text-decoration:none;">Météo Issy-les-Moulineaux</a> ©<a href="http://www.meteocity.com">meteocity.com</a></div><script type="text/javascript" src="http://widget.meteocity.com/js/OTIwNDB8NHw0fDN8MXxGRkZGRkZ8M3xGRkZGRkZ8Y3wx"></script></div></p></div>
			<div class="Slide_h"><p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_temperature.png" width="100" height="100">Température moyenne est de : 20°C</p></div>
			<div class="Slide_h"><p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_lumiere.png" width="100" height="100">Luminosité moyenne est : Moyenne+</p></div>
			<div class="Slide_h">	<p class="Text_Slide_h">Le saviez-vous ?<br />
															En 2014, le niveau des océans a augmenté d'environ 3,3 mm<br />
															Les prévisions etaient plus optimistes<br /></p></div>	  	

	  		<!-- Boutons slider du haut -->
		  	<button class="Slider_h_droite" onclick="plusDivs(1)">&#10095;</button>
		</div>


		<!-- Boutons slider du haut -->
		<script src="javascript/banniere_client.js"> </script>
			
		<!-- Boutons pour activations des différents modes -->
		<div id="bouton_mode">
			<script src="http://code.jquery.com/jquery.min.js"></script>
			<script src="javascript/button_client.js"> </script>
			<button class="bouton_eco" id="bouton_eco" name="bouton_mode" value="Eco" type="submit" onclick="ecoMode()">Eco</button>
			<button class="bouton_sortie" id="bouton_sortie" name="bouton_mode" value="Sortie" type="submit" onclick="sortieMode()">Sortie</button>
			<button class="bouton_confort" id="bouton_confort" name="bouton_mode" value="Confort" type="submit" onclick="confortMode()">Confort</button>
			<button class="bouton_hibernation" id="bouton_hibernation" name="bouton_mode" value="Hibernation" type="submit" onclick="hibernationMode()">Hiber-<br />nation</button>
		</div>
	</div>

