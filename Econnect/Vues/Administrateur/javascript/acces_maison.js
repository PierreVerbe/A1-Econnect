function validateForm(){
	if (document.forms["access_home"]["numero_client"].value != "" && document.forms["access_home"]["confirm"].checked == true){
		document.location.href="http://localhost/Econnect/A1-Econnect/Econnect/Vues/Client/accueil_client.php?"+ document.forms["access_home"]["numero_client"].value;
	}
	else{
		alert("Vous n'avez pas rempli les champs demandés !");
		return false;
	}
}