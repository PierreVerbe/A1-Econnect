
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_admin.css">
	<title></title>
</head>

<body>

	<?php include ("header_admin.php")?>

	<!-- Le corps du site -->

	<!-- Les chiffres clés -->

	<section>
		
		<div id="Chiffres">

			<h1>Les chiffres clés</h1>

			<div id = "Nombres">

				<p>
					<?php echo "<img src='../../Controleurs/graph_users_admin.php'/>";?>
				</p>

				<p>
					<?php echo "<img src='../../Controleurs/graph_ventes_admin.php'/>";?>
				</p>
			
			</div>

		</div>

	</section>

	<section id="Alertes">

		<h1>Alertes / Notifications</h1>
		<div id = "liste_alertes">
			<ul>
				<li> Alerte 1 </li>
				<li> Alerte 2 </li>
				<li> Alerte 3 </li>
				<li> Alerte 4 </li>
			</ul>

			<ul>
				<li> Alerte 1 </li>
				<li> Alerte 2 </li>
				<li> Alerte 3 </li>
				<li> Alerte 4 </li>
			</ul>
		</div>

	</section>

	<?php include("footer_admin.php")?>


</body>


</html>




