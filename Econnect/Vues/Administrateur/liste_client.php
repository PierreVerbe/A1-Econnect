
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
				Liste des clients :<br />

				<table id="tableau_clients">
					<tr>
						<th>N° Client</th>
						<th>Nom du client</th>
						<th>Adresse du client</th>
						<th>Statut</th>
					</tr>
					<tr>
						<td>300014</td>
						<td>Emmanuel Macron</td>
						<td>Prison de Fresnes</td>
						<td>En attente d'installation</td>
					</tr>
					<tr>
						<td>300015</td>
						<td>François Fillon</td>
						<td>Prison des Baumettes</td>
						<td>Défaut de paiement</td>
					</tr>
					<tr>
						<td>300016</td>
						<td>Nicolas Dupont Aignant</td>
						<td>Rue des Opportunistes</td>
						<td>Déménagement en cours</td>
					</tr>
				</table>
			
			</article>

		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>



