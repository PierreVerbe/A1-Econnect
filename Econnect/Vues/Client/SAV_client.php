<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body>

	<section class="bloc_SAV">

		<h1> Chat/SAV</h1>
		
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
			  	<?php include("../../Modeles/Client/Requete_SAV_Liste_Ticket.php");?>
			</table>	
		</article>
		<br />

		<!-- message client -->
		<h2>Contenu du ticket :</h2>

		<!--  jQueries 
		<script src="http://code.jquery.com/jquery.min.js"></script>

			<script>

				var table = document.getElementById('tableau_clients');

				for(var i = 1; i < table.rows.length; i++)
				{
					table.rows[i].onclick = function()
					{
						var id_client = this.cells[0].innerHTML;

						$.post("../../Controleurs/bdd_liste-maisons-clients_admin.php", {postid: id_client},
							function(data){
								$('#tableau_maisons_ajax').html(data);
							});
					}
				}

			</script>

			<div id="tableau_maisons_ajax"></div>
			<!-- fin jQueries -->

		<p></p>

		<!-- Pour la barre de délimitation -->
		<hr width=90% align =center>

		<h2>Ouvrir un nouveau ticket :</h2>

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

<?php include ("footer_client.php")?>