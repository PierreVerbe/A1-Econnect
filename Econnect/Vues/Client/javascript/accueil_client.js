var var_Haut_Gauche = 1;
var var_Bas_Droit = 1;

//Pour la box de l'accueil haut gauche
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

//Pour la box de l'accueil bas droite
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

//pour les boutons de température
function changement_temperature(n) 
{
	
}