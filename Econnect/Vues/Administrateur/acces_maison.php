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

				<?php require("redirection_client.php"); ?>

				<form name="access_home" action="" onsubmit="return validateForm()" method="post">
					
					<label>N° Client : </label><input type="text" name="numero_client" />

					<p>J'atteste sur l'honneur du propriétaire de la maison pour accéder à la gestion de cette dernière</p>

					<input type="checkbox" name="confirm"><br />

					<input type="submit" name="validate" value="Valider">

				</form>

				<script src="javascript/acces_maison.js">
					function validateForm(){
						if (document.forms["access_home"]["numero_client"].value != "" && document.forms["access_home"]["confirm"].checked == true){
						}
						else{
							alert("Vous n'avez pas rempli les champs demandés !");
							return false;
						}
					}
				</script>

			</div>

		</section>

		<?php include("footer_admin.php")?>

	</body>

</html>