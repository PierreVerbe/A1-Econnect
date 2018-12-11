	<!-- Slider de haut avec des infos randoms -->
	<div class="slider_boutons">
		<div class="Slider_h">
			<button class="Slider_h_gauche" onclick="plusDivs(-1)">&#10094;</button>
			
			
			<img class="Slide_h" src="../Image/Banniere/Econnect_slider.png">
			<div class="Slide_h"><p class="Text_Slide_h">Bonjour Mr.Dupont<br />Vous êtes actuellement en mode "Eco"<br /></p></div>
			<div class="Slide_h"><p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_temperature.png" width="100" height="100">Température moyenne est de : 20°C</p></div>
			<div class="Slide_h"><p class="Slide_image_texte"><img class="Slide_image" src="../Image/Banniere/moyenne_lumiere.png" width="100" height="100">Luminosité moyenne est : Moyenne+</p></div>
			<div class="Slide_h">	<p class="Text_Slide_h">Le saviez-vous ?<br />
															En 2014, le niveau des océans a augmenté d'environ 3,3 mm<br />
															Les prévisions etaient plus optimistes<br /></p></div>	  	

	  		<!-- Boutons slider du haut -->
		  	<button class="Slider_h_droite" onclick="plusDivs(1)">&#10095;</button>
		</div>


		<!-- Boutons slider du haut -->
		<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) 
			{
		  	showDivs(slideIndex += n);
			}

			function showDivs(n) 
			{
			  var i;
			  var x = document.getElementsByClassName("Slide_h");
			  if (n > x.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = x.length}
			  for (i = 0; i < x.length; i++) {
			     x[i].style.display = "none";  
			  }
		  		x[slideIndex-1].style.display = "block";  
			}
		</script>




		<!-- Boutons pour activations des différents modes -->
		<div id="bouton_mode">
			<button class="bouton_eco">Eco</button>
			<button class="bouton_sortie">Sortie</button>
			<button class="bouton_confort">Confort</button>
			<button class="bouton_hibernation">Hiber-<br />nation</button>
		</div>
	</div>
