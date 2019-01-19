var table = document.getElementById('tableau_clients');

	for(var i = 1; i < table.rows.length; i++)
	{
		table.rows[i].onclick = function()
		{
			var id_client = this.cells[0].innerHTML;

			$.post("../../Modeles/Administrateur/bdd_liste-maisons-clients_admin.php", {postid: id_client},
			function(data){
				$('#tableau_maisons_ajax').html(data);
			});
		}
	}

function showDetails(){
	var table = document.getElementById('tableau_maisons');

	for(var i = 1; i < table.rows.length; i++)
	{
		table.rows[i].onclick = function()
		{
			var id_maison = this.cells[0].innerHTML;

			$.post("../../Modeles/Administrateur/bdd_details_maison_admin.php", {id_home: id_maison},
			function(data){
				$('#details_maison').html(data);
			});
		}
	}
}

function getSensorsDetails(){
	var numCapteur = document.getElementById('idCapteur').innerHTML;
	numCapteur = Number(numCapteur.replace(/[^\d]/g, ""));

	$.post("../../Modeles/Administrateur/bdd_details_sensors_admin.php", {id_capteur: numCapteur},
	function(data){
	alert(data);
	});

}

function search()
{
	var name = document.getElementById('search_name').value;
						
	$.post("../../Modeles/Administrateur/bdd_search_client_admin.php", {postname: name},
	function(data){
		$('#tableau_clients').html(data);
	});
}