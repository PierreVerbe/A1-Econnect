<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body>

	<section class="bloc_SAV">

		<h1> Chat/SAV</h1>
		
		<!-- deuxième block du tableau de bord = haut droit -->
		<article class="Liste_tickets">
			<h2>Liste de vos tickets :</h2>
			  	<?php include("../../Modeles/Client/Requete_SAV_Liste_Ticket.php");?>
		</article>
		<br />

		<script src="http://code.jquery.com/jquery.min.js"></script>
			<script>
				var table = document.getElementById('SAV_table');

				for(var i = 1; i < table.rows.length; i++){
					table.rows[i].onclick = function(){
						var id_ticket = this.cells[0].innerHTML;
						//test
						//document.getElementById("contenu_ticket").innerHTML = 5 + 6;
						//fin test
						document.getElementById('num_ticket').value = id_ticket;
						$.post("../../Modeles/Client/Requete_SAV_Contenu_Ticket.php", {postid: id_ticket},
							function(data){
								$('#contenu_ticket').html(data);
							});
					}
				}
			</script>

		<!-- message client -->
		<h2>Contenu du ticket :</h2>

		<div id="contenu_ticket"></div>

		<p></p>

		<!-- Pour la barre de délimitation -->
		<hr width=90% align =center>

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