
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_admin.css">
		<title>Liste des clients</title>
	</head>
	<body>

		<?php include("header_admin.php")?>

		<section id="clients">

			<article id="liste_clients">
				Liste des clients :<br /><br />

				<div id="recherche_client">
					<label>Nom Client : </label><input type="text" name="recherche_nom" />

					<label>N° Client : </label><input type="text" name="recherche_numero" />

					<label>Adresse : </label><input type="text" name="recherche_adresse" />

					<label>Statut : </label><input type="text" name="recherche_statut" />

				</div>

				<input type="button" name="validate" value="Rechercher">
				
				<table id="tableau_clients">
					<tr>
						<th>N° Client</th>
						<th>Nom du client</th>
						<th>Adresse email</th>
						<th>Téléphone</th>
					</tr>
				<?php include("../../Controleurs/bdd_liste-clients_admin.php");?>
				</table>
			
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
			</script>

			
			<div id="details_maison"></div>

				<!--<div id="Listes_tickets_user_admin">
					<table id="tableau_tickets_user">
						<caption>Liste des tickets du client</caption>
						<tr>
							<th>N° Ticket</th>
							<th>Objet</th>
							<th>Date</th>
							<th>Statut</th>
						</tr>
						<tr>
							<td>300014</td>
							<td>Problème capteur</td>
							<td>07-04-2018</td>
							<td>Ouvert</td>
						</tr>
						<tr>
							<td>300015</td>
							<td>Problème facture</td>
							<td>04-05-2018</td>
							<td>Fermé</td>
						</tr>
						<tr>
							<td>300016</td>
							<td>Problème connexion</td>
							<td>03-06-2018</td>
							<td>Fermé</td>
						</tr>
					</table>
				</div>
			</div>-->
			
		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>



