<!DOCTYPE html>
<html>
<head>
	<title>Econnect - Domisep</title>
</head>


	<?php include ("header_domisep.php")?>

	<body>
		<section id="clients">

				<article id="liste_clients">
					Liste des clients :<br /><br />

					<div id="recherche_client">
						<label>Nom Client : </label><input type="text" name="recherche_nom" id="search_name" />

						<input type="button" name="validate" value="Rechercher" onclick="search()" />
					</div>

					<?php include("../../Controleurs/bdd_liste-clients_admin.php");?>

					<script type="text/javascript">
						
						function search()
						{
							var name = document.getElementById('search_name').value;
							
							$.post("../../Controleurs/bdd_search_client_admin.php", {postname: name},
								function(data){
									$('#tableau_clients').html(data);
								});
						}
						
					</script>
				
				</article>

			</section>

			<section id="details_client">

				<!--<ul id="proprietes">
					<li>N° Client :</li>
					<li>Nom du client :</li>
					<li>Fin du contrat :</li>
				</ul>-->

				<script src="http://code.jquery.com/jquery.min.js"></script>

				<script>

					var table = document.getElementById('tableau_clients');

					for(var i = 1; i < table.rows.length; i++)
					{
						table.rows[i].onclick = function()
						{
							var id_client = this.cells[0].innerHTML;

							$.post("../../Controleurs/bdd_liste-maisons-clients_admin.php", {postid: id_client},
								function(data){
									$('#tableau_maisons_ajax').html(data);
								});
						}
					}

				</script>


				<div id="tableau_maisons_ajax"></div>

				<script>

					function showDetails(){
						var table = document.getElementById('tableau_maisons');

						for(var i = 1; i < table.rows.length; i++)
						{
							table.rows[i].onclick = function()
							{
								var id_maison = this.cells[0].innerHTML;

								$.post("../../Controleurs/bdd_details_maison_admin.php", {id_home: id_maison},
									function(data){
										$('#details_maison').html(data);
									});
							}
						}
					}

					function getSensorsDetails(){
						var numCapteur = document.getElementById('idCapteur').innerHTML;
						numCapteur = Number(numCapteur.replace(/[^\d]/g, ""));

						$.post("../../Controleurs/bdd_details_sensors_admin.php", {id_capteur: numCapteur},
									function(data){
										alert(data);
									});

					}
				</script>

				
				<div id="details_maison"></div>
				
			</section>
	</body>

	<?php include ("footer_domisep.php")?>

</html>