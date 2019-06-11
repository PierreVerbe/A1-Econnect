<?php include ("header_domisep.php")?>

<body>
	<h1>Bienvenue Domi'<?php echo $_SESSION['nom'] ?></h1>

	<section id="tableau_bord">

		<h2>Mon tableau de bord</h2>

		<div id="graphes_domisep">
			<p>
				<?php echo "<img src='../../Modeles/Domisep/graph_users_domisep.php'/>";?>
			</p>
			
			<p>
				<?php echo "<img src='../../Modeles/Domisep/graph_ventes_domisep.php'/>";?>
			</p>
			
			<p>
				<?php echo "<img src='../../Modeles/Domisep/graph_visites_domisep.php'/>";?>
			</p>
			
			<p>
				<?php echo "<img src='../../Modeles/Domisep/graph_temps_domisep.php'/>";?>
			</p>
			
		</div>
		
	</section>
</body>

<?php include ("footer_domisep.php")?>