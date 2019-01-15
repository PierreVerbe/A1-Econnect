<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

	<section class="bloc_SAV">

		<h1> Chat/SAV</h1>
		
		<!-- deuxième block du tableau de bord = haut droit -->
		<article class="Liste_tickets">
			<h2>Liste de vos tickets :</h2>
			  	<?php include("../../Modeles/Client/Requete_SAV_Liste_Ticket.php");?>
		</article>
		<br />

		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="javascript/SAV_client.js"></script>

		<!-- message client -->
		<h2>Contenu du ticket :</h2>

		<div id="contenu_ticket"></div>

		<h2>Ouvrir un nouveau ticket :</h2>

		<div class="SAV_nouveau_ticket">
			<form method="post" action="../../Modeles/Client/Requete_SAV_Ajout.php">
				<p>
			    	<label for="objet_message">Objet :<br /></label>
			    	<input class="zone_objet_SAV" type="text" name="objet_message" id="objet_message" placeholder="Ex : Problème capteur température" size="40" maxlength="300" />
				</p>
				
			   	<p>
			       <label for="message">Message :</label><br />
			       <textarea class="zone_message_SAV" name="message" id="message" rows="7" ></textarea>
			   	</p>
			   	<input class="bouton_envoyer" type="submit" value="Envoyer"/>
			</form>

			
		</div>

	</section>

<?php include ("footer_client.php")?>