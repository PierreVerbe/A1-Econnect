	<!-- Slider de haut avec des infos randoms -->
	<div class="slider_boutons">
		<div class="Slider_h">
			<button class="Slider_h_gauche" onclick="plusDivs(-1)">&#10094;</button>
			
		  	<img class="Slide_h" src="image/lune.jpg">
		  	<img class="Slide_h" src="image/roche.jpg">
		  	<img class="Slide_h" src="image/minion.jpg">
		  	<div class="Slide_h">
	    			Bonjour j'adore les sliders
	  		</div>

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
			<button class="bouton_hibernation">Hibernation</button>
		</div>
	</div>
