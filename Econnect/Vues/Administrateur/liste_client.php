
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

				<!--<table id="tableau_clients">
					<tr>
						<th>N° Client</th>
						<th>Nom du client</th>
						<th>Adresse du client</th>
						<th>Statut</th>
					</tr>
					<tr>
						<td>300014</td>
						<td>Jean François</td>
						<td>1 rue des Lilas, 75006 Paris</td>
						<td>En attente d'installation</td>
					</tr>
					<tr>
						<td>300015</td>
						<td>Bertrand Martin</td>
						<td>5 rue du Vieux-Port, 13001 Marseille</td>
						<td>Défaut de paiement</td>
					</tr>
					<tr>
						<td>300016</td>
						<td>Patrick Nerat</td>
						<td>7 rue du Parc, 64200</td>
						<td>Déménagement en cours</td>
					</tr>
				</table>-->
			
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
						<tr>
							<td>300014</td>
							<td>08-09-2018</td>
							<td>40kWh</td>
							<td>35€</td>
						</tr>
						<tr>
							<td>300015</td>
							<td>08-10-2018</td>
							<td>50kWh</td>
							<td>30€</td>
						</tr>
						<tr>
							<td>300016</td>
							<td>08-11-2018</td>
							<td>45kWh</td>
							<td>45€</td>
						</tr>
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



