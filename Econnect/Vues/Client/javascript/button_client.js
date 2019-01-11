function ecoMode(){ 
 	var mode = document.getElementById('bouton_eco').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere.php", {postid: mode},
	function(data){
		return;
	});
}

function sortieMode(){ 
 	var mode = document.getElementById('bouton_sortie').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere.php", {postid: mode},
	function(data){
		return;
	});
}

function confortMode(){ 
 	var mode = document.getElementById('bouton_confort').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere.php", {postid: mode},
	function(data){
		return;
	});
}

function hibernationMode(){ 
 	var mode = document.getElementById('bouton_hibernation').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere.php", {postid: mode},
	function(data){
		return;
	});
}
				