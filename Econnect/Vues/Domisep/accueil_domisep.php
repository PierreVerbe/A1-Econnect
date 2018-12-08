<?php include ("header_domisep.php")?>

<body>
	<h1>Bienvenue chez Econnect</h1>

	<article>

		<h2>Mon tableau de bord</h2>

		<div id="graphes_domisep">
			<?php echo "<img src='../../Controleurs/graph_users_domisep.php'/>";?>

			<?php echo "<img src='../../Controleurs/graph_ventes_domisep.php'/>";?>

			<?php echo "<img src='../../Controleurs/graph_visites_domisep.php'/>";?>

			<?php echo "<img src='../../Controleurs/graph_temps_domisep.php'/>";?>
		</div>
		
	</article>
</body>

<?php include ("footer_domisep.php")?>