
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

				<script type="text/javascript">

					function getXMLHttpRequest() {
						var xhr = null;
			
						if (window.XMLHttpRequest || window.ActiveXObject) {
							if (window.ActiveXObject) {
								try {
									xhr = new ActiveXObject("Msxml2.XMLHTTP");
								} catch(e) {
									xhr = new ActiveXObject("Microsoft.XMLHTTP");
								}
							} else {
								xhr = new XMLHttpRequest(); 
							}
						} else {
							alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
							return null;
						}
								
						return xhr;
					}

					function request(callback) {
						var xhr = getXMLHttpRequest();
			
						xhr.onreadystatechange = function() {
							if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
									callback(xhr.responseXML);
							}
						};

						xhr.open("POST", "../../Controleurs/bdd_liste-maisons-clients_admin.php", true);
						xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
						xhr.send("postid=id_client");
					}

					function readData(sData) {
						// On peut maintenant traiter les données sans encombrer l'objet XHR.
						if (sData == "OK") {
							alert("C'est bon");
						} else {
							alert("Y'a eu un problème");
						}
					}

					var table = document.getElementById('tableau_clients');

					for(var i = 1; i < table.rows.length; i++)
					{
						table.rows[i].onclick = function()
						{
							var id_client = this.cells[0].innerHTML;

							id_client = encodeURIComponent(id_client);

							request(readData);
						}
					}

				</script>
			
			</article>

		</section>

		<section id="details_client">

			<ul id="proprietes">
				<li>N° Client :</li>
				<li>Nom du client :</li>
				<li>Fin du contrat :</li>
			</ul>

			<p id="mode">Mode actuel : Hibernation</p>



			<div id="Pieces">
				<h2>Pièces</h2>
				<div id="liste_piece_user">
					<p>Salon</p>
					<p>Chambre</p>
					<p>Cuisine</p>
				</div>
			</div>

			<div id="Capteurs">
				<h2>Capteurs</h2>
				<div id="liste_capteurs_user">
					<p>Capteur 1</p>
					<p>Capteur 2</p>
					<p>Capteur 3</p>
				</div>
			</div>

			<div id="Actionneurs">
				<h2>Actionneurs</h2>
				<div id="liste_actionneurs_user">
					<p>Action 1</p>
					<p>Action 2</p>
					<p>Action 3</p>
				</div>
			</div>

			<div id="tableaux_client_admin">
				<div id="Listes_factures">
					<table id="tableau_factures">
						<caption>Liste des factures du client</caption>
						<tr>
							<th>N° Facture</th>
							<th>Date</th>
							<th>Consommation</th>
							<th>Prix</th>
						</tr>
						<?php include("../../Controleurs/bdd_liste-facture-clients_admin.php");?>
					</table>
				</div>

				<div id="Listes_tickets_user_admin">
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
			</div>
			
		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>



