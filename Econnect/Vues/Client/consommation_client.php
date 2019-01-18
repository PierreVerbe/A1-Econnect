<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body>

		<section class="consommation">
		
			<div id="consommation">
				<!-- Bloc supérieur de la page consommation -->
				<article class="consommationHAUT">
					<h1>Estimation de la consommation :</h1>
					<div id="grapheConso">
						<?php echo "<img src='../../Modeles/Client/graph_consommation_client.php'/>";?>
					</div>
				</article>

				<!-- Bloc inférieur de la page consommation -->
				<article class="consommationBAS">
					<h1>Vos factures :</h1>
					<div id="listeFactures">
						<?php include("../../Modeles/Client/bdd_liste-factures_client.php"); ?>
					</div>
					<div id="grapheFactures">
						<?php echo "<img src='../../Modeles/Client/graph_factures_client.php'/>";?>
					</div>
				</article>

			</div>

		</section>

<?php include ("footer_client.php")?>