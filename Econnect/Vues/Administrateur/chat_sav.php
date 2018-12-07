<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style_admin.css">
		<title>Chat/SAV</title>
	</head>

	<body>

		<?php include ("header_admin.php")?>

			<section class="bloc_SAV">

				<h1>Chat/SAV</h1>
		
				<!-- deuxième block du tableau de bord = haut droit -->
				<article class="Liste_tickets">
					<h2>Liste de vos tickets :</h2>
			
					<table class="SAV_table">
			  			<tr>
				    		<th>N° ticket</th>
				   	 		<th>Objet du ticket / dernier message</th>
				    		<th>Date du dernier message</th>
				    		<th>Statut</th>
			  			</tr>
			  			<tr>
				    		<td>1</td>
				    		<td>Problème capteur</td>
				    		<td>01/11/2018</td>
				    		<td>✓</td>
			  			</tr>
			  			<tr>
				    		<td>2</td>
				    		<td>Problème site</td>
				    		<td>02/11/2018</td>
				    		<td>✓</td>
			  			</tr>
			  			<tr>
				    		<td>3</td>
				    		<td>Problème données</td>
				    		<td>03/11/2018</td>
				    		<td>En cours de traitement</td>
			  			</tr>
			  			<tr>
				    		<td>4</td>
				    		<td>Problème compte secondaire</td>
				    		<td>04/11/2018</td>
				    		<td>✓</td>
						</tr>
					</table>	
				</article>
				<br />

				<!-- message client -->
				<h2>Contenu du ticket :</h2>

				<p></p>

				<!-- Pour la barre de délimitation -->
				<hr width=90% align =center>

				<h2>Répondre à un ticket :</h2>

				<div class="SAV_nouveau_ticket">
					<form method="post" action="traitement.php">
						<p>
			    			<label for="objet_message">Objet :<br /></label>
			    			<input class="zone_objet_SAV" type="text" name="objet_message" id="objet_message" placeholder="Ex : Problème capteur température" size="40" maxlength="300" />
						</p>
					</form>

					<form method="post" action="traitement.php">
			   			<p>
			       		<label for="message">Message :</label><br />
			       		<textarea class="zone_message_SAV" name="message" id="message" rows="7" ></textarea>
			   			</p>
					</form>

					<input class="bouton_envoyer" type="submit" value="Envoyer"/>
				</div>

			</section>

		<?php include("footer_admin.php")?>

	</body>
</html>