<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<meta http-equiv="refresh" content="2; URL='../../index.php'" />

<body>

	<div id="quit">	
		<p>
		<?php session_destroy(); ?>
		Votre profil utilisateur est en cours de déconnexion...</br>
		<img src="ressources/load.gif"/></br>
		<a href="../../index.php">> Cliquez ici <</a>
		</p>
	</div>
</body>

<?php include ("footer_client.php")?>