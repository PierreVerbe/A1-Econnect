<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body>

	<p> Chat/SAV</p>

	<section class="bloc_SAV">
		
		<!-- deuxième block du tableau de bord = haut droit -->
		<article class="Liste_tickets">
			Liste de vos tickets :<br />
			
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

		<p>
			Ouvrir un nouveau ticket<br />

		</p>

		<form method="post" action="traitement.php">
			<p>
		    	<label for="objet_message">Objet :<br /></label>
		    	<input type="text" name="objet_message" id="objet_message" placeholder="Ex : Problème capteur température" size="40" maxlength="300" />
			</p>
		</form>

		<form method="post" action="traitement.php">
		   <p>
		       <label for="message">Message :</label><br />
		       <textarea name="message" id="message" rows="7" cols="230"></textarea>
		   </p>
		</form>

		<input type="submit" value="Envoyer"/>

	</section>

<?php include ("footer_client.php")?>