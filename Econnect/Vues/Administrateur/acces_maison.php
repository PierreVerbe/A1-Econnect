<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_admin.css">
		<title>Accès maison</title>
	</head>

	<body>

		<?php include("header_admin.php")?>

		<section>

			<div id="confirmation">

				<h1>Accès maison du client</h1>

				<label>N° Client : </label><input type="text" name="numero_client" />

				<p>J'atteste sur l'honneur du propriétaire de la maison pour accéder à la gestion de cette dernière</p>

				<input type="checkbox" name="confirm"><br />

				<input type="button" name="validate" value="Valider">
			</div>


		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>