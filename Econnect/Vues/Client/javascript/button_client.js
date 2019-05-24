function ecoMode(id_user_tkt){ 
 	var mode = document.getElementById('bouton_eco').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere_button.php", {postid: mode, postuser: id_user_tkt},
	function(data){
		return;
	});
}

function sortieMode(id_user_tkt){ 
 	var mode = document.getElementById('bouton_sortie').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere_button.php", {postid: mode, postuser: id_user_tkt},
	function(data){
		return;
	});
}

function confortMode(id_user_tkt){ 
 	var mode = document.getElementById('bouton_confort').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere_button.php", {postid: mode, postuser: id_user_tkt},
	function(data){
		return;
	});
}

function hibernationMode(id_user_tkt){ 
 	var mode = document.getElementById('bouton_hibernation').value;	
 	alert('Vous passez en mode : ' + mode);
	$.post("../../Modeles/Client/Requete_banniere_button.php", {postid: mode, postuser: id_user_tkt},
	function(data){
		return;
	});
}
				