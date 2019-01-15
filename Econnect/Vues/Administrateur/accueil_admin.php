
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

	<section id="gestion_admin">
		
		<article id="Alertes">

			<h2>Alertes</h2>

			<ul>
				<li><img src="ressources/point_rouge_mini.png" alt="Alerte""> Maison n°14587 : Alerte intrusion <a href="https://livestream.com/accounts/888332/events/931293/player?width=640&height=360&autoPlay=true&mute=false"><button>Vérifier les caméras</button></a></li>
				<li><img src="ressources/point_orange_mini.png" alt="Problème"> Maison n°14586 : Intervention nécéssaire <button>Appel technicien</button></li>
				<li><img src="ressources/point_vert_mini.png" alt="OK"> Tout est ok</li>
			</ul>
			
		</article>

		<article id="gestion_pannes">

			<h2>Gestion des pannes</h2>

			<ul>
				<li>Maison n°14587 : Problème capteur <button class="button">Détails</button><button onclick="desactivated()">Désactiver</button><button class="button">Appel Technicien</button></li>
				<li>Maison n°14588 : Problème actionneur <button class="button">Détails</button><button class="button">Désactiver</button><button class="button">Appel Technicien</button></li>
				<li>Maison n°14582 : HAG défaillant <button class="button">Détails</button><button class="button">Désactiver</button><button class="button">Appel Technicien</button></li>
			</ul>

			<script>
				function desactivated()
				{
					alert("Désactivé !");
				}
			</script>
			
		</article>
			
		</table>

	</section>

	<?php include("footer_admin.php")?>


</body>


</html>




