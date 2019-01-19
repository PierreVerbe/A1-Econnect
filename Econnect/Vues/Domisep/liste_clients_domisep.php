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
						<label>Nom Client : </label><input type="text" name="recherche_nom" id="search_name" onKeyPress="if (event.keyCode == 13) search()"/>

						<input type="button" name="validate" value="Rechercher" onclick="search()" />

						<input type="button" id="boutonAnnuler" value="Annuler" onClick="javascript:document.location.href='http://localhost/Econnect/A1-Econnect/Econnect/Vues/Domisep/liste_clients_domisep.php'" />
					</div>

					<?php include("../../Modeles/Domisep/bdd_liste-clients_domisep.php");?>

					<script src="http://code.jquery.com/jquery.min.js"></script>

					<script src="javascript/liste_client_domisep.js"></script>
				
				</article>

			</section>

			<section id="details_client">

				


				<div id="tableau_maisons_ajax"></div>

				<div id="details_maison"></div>
				
			</section>
	</body>

	<?php include ("footer_domisep.php")?>

</html>