var var_Haut_Gauche = 1;
var var_Bas_Droit = 1;
var j = -1;
var k = -1

//Pour la box de l'accueil haut gauche
showDivs_Haut_Gauche(var_Haut_Gauche);

function plusDivs_Haut_Gauche(n)
{
	showDivs_Haut_Gauche(var_Haut_Gauche += n);
	j = j+n;
	if (j == 4)
	{
		j = -1;
	}
	if (j == -2)
	{
		j = 4;
	}
	console.log(j);
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
	k = k+n;
	if (k == 4)
	{
		k = -1;
	}
	if (k == -2)
	{
		k = 4;
	}
	console.log(k);
  getLumWanted();
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
    var piece = document.getElementsByClassName("titre_contenu_info_H_G")[j];
    $.post("../../Modeles/Client/bdd_change_temp_client", {postpiece: piece.innerHTML},
        function(data){
				var piece2 = document.getElementsByClassName("contenu_info_H_G")[j];
        $(piece2).find("#getTemp").text(data);
        });
}

function changePosTemp(){
    var temp = document.getElementById('getTemp').innerHTML;
    var piece = document.getElementById('pieceTemp').innerHTML;
    if (temp >= 30)
    {
        alert("Vous ne pouvez pas augmenter plus la température");
    }
    else
    {
        temp = parseInt(temp,10);
        temp = temp+1;

        $.post("../../Modeles/Client/bdd_change_temp_client", {postemp: temp},
            function(data){
            getTempWanted();
            });
    }
}

function changeNegTemp(){
    var temp = document.getElementById('getTemp').innerHTML;
    var piece = document.getElementById('pieceTemp').innerHTML;
    if (temp <= 10)
    {
        alert("Vous ne pouvez pas diminuer la température");
    }
    else
    {
        temp = parseInt(temp,10);
        temp = temp-1;

        $.post("../../Modeles/Client/bdd_change_temp_client", {postemp: temp},
            function(data){
            getTempWanted();
            });
    }
}

function getLumWanted(){
		var piece = document.getElementsByClassName("titre_contenu_info_B_D")[k];
		console.log(piece.innerHTML);
    $.post("../../Modeles/Client/bdd_change_lum_client", {postpiece: piece.innerHTML},
        function(data){
				console.log(data);
				var piece2 = document.getElementsByClassName("contenu_info_B_D")[k];
        $(piece2).find("#getLum").text(data);
        });
}

function changePosLum(){
    var lum = document.getElementById('getLum').innerHTML;
    var piece = document.getElementById('pieceLum1').innerHTML;
    if (lum >= 100)
    {
        alert("Vous ne pouvez pas augmenter la luminosité");
    }

    else
    {
        lum = parseInt(lum,10);
        lum = lum + 10;


        $.post("../../Modeles/Client/bdd_change_lum_client.php", {postlum: lum},
            function(data){
            getLumWanted();
            });
    }


}

function changeNegLum(){
    var lum = document.getElementById('getLum').innerHTML;
    var piece = document.getElementById('pieceLum1').innerHTML;
    if (lum <= 0)
    {
        alert("Vous ne pouvez pas diminuer la luminosité");
    }

    else
    {
        lum = parseInt(lum,10);
        lum = lum - 10;


        $.post("../../Modeles/Client/bdd_change_lum_client.php", {postlum: lum},
            function(data){
            getLumWanted();
            });
    }
}

//pour les boutons de température
/*function changement_temperature(n)
{
  $.post("../../Controleurs/bdd_liste-maisons-clients_admin.php", {postid: id_client},
        function(data){
        $('#tableau_maisons_ajax').html(data);
        });
}*/
