var var_Haut_Gauche = 1;
var var_Bas_Droit = 1;

//Pour la box de l'accueil haut gauche
showDivs_Haut_Gauche(var_Haut_Gauche);

function plusDivs_Haut_Gauche(n) 
{
	showDivs_Haut_Gauche(var_Haut_Gauche += n);
    getTempWanted();
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

function getTempWanted(){
    var piece = document.getElementById('piece1').innerHTML;
    $.post("../../Controleurs/bdd_change_temp_client", {postpiece: piece},
        function(data){
        $('#getTemp').html(data);
        });
}

//pour les boutons de température
/*function changement_temperature(n) 
{
  $.post("../../Controleurs/bdd_liste-maisons-clients_admin.php", {postid: id_client},
        function(data){
        $('#tableau_maisons_ajax').html(data);
        });
}*/