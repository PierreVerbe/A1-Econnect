
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
					<label>Nom Client : </label><input type="text" name="recherche_nom" id="search_name" onKeyPress="if (event.keyCode == 13) search()"/>

					<input type="button" name="validate" value="Rechercher" onclick="search()" />

					<input type="button" id="boutonAnnuler" value="Annuler" onClick="javascript:document.location.href='../../Vues/Administrateur/liste_client.php'" />
				</div>

				<?php include("../../Modeles/Administrateur/bdd_liste-clients_admin.php");?>

			
			</article>
			
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="javascript/liste_client.js"></script>

		</section>

		<section id="details_client">

			<div id="tableau_maisons_ajax"></div>

			<div id="details_maison"></div>
			
		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>



