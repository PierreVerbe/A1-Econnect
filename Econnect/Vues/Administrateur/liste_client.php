
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
				</table>
			
			</article>

		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>



