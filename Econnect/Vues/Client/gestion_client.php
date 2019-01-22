<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="javascript/gestion_client.js"></script>

<body id="body_Client">
	<section id="gestionCAll">
		<h1>Gestion des pièces, capteurs, actionneurs</h1>
		<div id="gestionClient">

			<div class="gestionCPiece">

				<?php

				include("../../Modeles/Client/bdd_get-piece.php");	

				while ($row = $piece->fetch()) {
					$temp = $row['Temperature'];
					$lum = $row['Luminosite'];
				    echo "	<div class=\"tuile\">

					    		<div class=\"tuile-ensemble\">

					    			<div class=\"tuile-avant\">

					    				<h1>".$row['Nom_piece']."</h1>
					    				<p>Température : ".$row['Temperature']."°c</p>
					    				<p>Luminosité :".$row['Luminosite']."</p>
					    				<p style=\"display: none\">Identifiant SAV : ".$row['ID_Piece']."</p>

					    			</div>

					    			<div class=\"tuile-arriere\">

					    				<button class=\"deleteEntity\" onclick=\"javascript: deletePiece($(this).parent().parent().find('#idSAV').html());\">&times;</button>
					    				<p>Température voulu : ".$temp."°C<br>Luminosite : ".$lum."</p>

					    				<div>
					    					<button class=\"tempDown\" onclick=\"javascript: setTemp($temp - 1, $(this).parent().parent().parent().find('#idSAV').html());\">-</button>
					    					<button class=\"tempUp\"   onclick=\"javascript: setTemp($temp + 1, $(this).parent().parent().parent().find('#idSAV').html());\">+</button>
					    				</div>
					    					<br>
					    				<div>
					    					<button class=\"lumDown\" onclick=\"javascript: setLum($lum - 5, $(this).parent().parent().parent().find('#idSAV').html());\">-</button>
					    					<button class=\"lumUp\" onclick=\"javascript: setLum($lum + 5, $(this).parent().parent().parent().find('#idSAV').html());\">+</button>
					    				</div>

					    			</div>

					    			<p id=\"idSAV\"style=\"display: none\">".$row['ID_Piece']."</p>

					    		</div>

				    		</div>";
				    }
				?>

				<button class="buttonAddEntity" id="btnModalPiece" onclick='javascript: $("#pieceModal").css("display", "block");'>Ajouter une pièce</button>

				<div id="pieceModal" class="modal">
				 	<div class="modal-content">
						<span class="close" onclick='javascript: $(this).parent().parent("#pieceModal").css("display", "none");'>&times;</span>
						<h1>Ajout d'une pièce</h1>
						<form action="../../Modeles/Client/addPiece.php" method="get">
							Nom de la pièce : <input type="text" maxlength="28" name="nom" required><br>
							Température voulu : <input type="number" min="10" step="0.5" max="30" name="temp" required><br>
							<input type="submit">
						</form>
					</div>
				</div>

			</div>








			<div class="gestionCCapteurs">
				<?php
				
				include("../../Modeles/Client/bdd_get-piece.php");

				include("../../Modeles/Client/bdd_get-capteur.php");

				$i = 1;
				while ($row = $capteur->fetch()) {
				    echo "	<div class=\"tuile\">

				    			<div class=\"tuile-ensemble\">

				    				<div class=\"tuile-avant\">

				    					<h1>CAPTEUR n°".$i."</h1>
				    					<p>Pièce : ".$row['Nom_piece']."</p>
				    					<p>Lumière : ".$row['LUM_Capteur']."</p>
				    					<p>Température : ".$row['TEMP_Capteur']."°C</p>

				    				</div>

				    				<div class=\"tuile-arriere\">

										<button class=\"deleteEntity\" onclick=\"javascript: deleteCapteur($(this).parent().parent().find('#idSAV').html());\">&times;</button>
				    					<p>Numéro de série : n°".$row['Numero_serie']."</p>

					    				<p>GrapheLumière ?</p>
					    				<p>GrapheTempérature ?</p>
				    				</div>

					    			<p id=\"idSAV\"style=\"display: none\">".$row['ID_Capteur']."</p>

				    			</div>

				    		</div>";
				    		$i++;
				    }
				?>
				
				<button class="buttonAddEntity" id="btnModalCapteur" onclick='javascript: $("#capteurModal").css("display", "block");'>Ajouter un capteur</button>

				<div id="capteurModal" class="modal">
				 	<div class="modal-content">
						<span class="close" onclick='javascript: $(this).parent().parent("#capteurModal").css("display", "none");'>&times;</span>
						<h1>Ajout d'un capteur</h1>
						<form action="../../Modeles/Client/addCapteur.php" method="get">
							Pièce : <select name="ID_Piece">
									<?php
										while ($row = $piece->fetch()) {
				    					echo "<option value=\"".$row['ID_Piece']."\">".$row['Nom_piece']."</option>";
				    				}
				    				?>
									</select><br>
							Numéro de série : <input type="number" name="num_serie" required><br>
							<input type="submit">
						</form>
					</div>
				</div>

			</div>











			<div class="gestionCActionneurs">
				<?php

				include("../../Modeles/Client/bdd_get-piece.php");

				include("../../Modeles/Client/bdd_get-actionneur.php");
				
				$i = 1;
				while ($row = $data->fetch()) {
					if($row['ETAT_Actionneur']==0) $row['ETAT_Actionneur']= "OFF";
					else $row['ETAT_Actionneur']= "ON";

				    echo "	<div class=\"tuile\">

				    			<div class=\"tuile-ensemble\">

				    				<div class=\"tuile-avant\">

				    					<h1>Actionneur n°".$i."</h1>
				    					<p>Pièce : ".$row['Nom_piece']."</p>
				    					<p>État : ".$row['ETAT_Actionneur']."</p>
				    					<p>Numéro de série : n°".$row['Numero_serie']."</p>

				    				</div>

				    				<div class=\"tuile-arriere\">
										<button class=\"deleteEntity\" onclick=\"javascript: deleteActionneur($(this).parent().parent().find('#idSAV').html());\">&times;</button>
				    					
				    					<p>Numéro de série : n°".$row['Numero_serie']."</p>
				    					<p>État : ".$row['ETAT_Actionneur']."</p>
					    				<div>
					    					<button class=\"actionOFF\" onclick=\"javascript: setEtat(0, $(this).parent().parent().parent().find('#idSAV').html());\">OFF</button>
					    					<button class=\"actionON\" onclick=\"javascript: setEtat(1, $(this).parent().parent().parent().find('#idSAV').html());\">ON</button>
					    				</div>

				    				</div>

					    			<p id=\"idSAV\"style=\"display: none\">".$row['ID_Actionneur']."</p>


				    			</div>

				    		</div>";
				    		$i++;
				    }
				?>

				<button class="buttonAddEntity" id="btnModalActionneur" onclick='javascript: $("#actionneurModal").css("display", "block");'>Ajouter un actionneur</button>

				<div id="actionneurModal" class="modal">
				 	<div class="modal-content">
						<span class="close" onclick='javascript: $(this).parent().parent("#actionneurModal").css("display", "none");'>&times;</span>
						<h1>Ajout d'un actionneur</h1>
						<form action="../../Modeles/Client/addActionneur.php" method="get">
							Pièce : <select name="ID_Piece">
									<?php
										while ($row = $piece->fetch()) {
				    						echo "<option value=\"".$row['ID_Piece']."\" >".$row['Nom_piece']."</option>";
				    					}
				    				?>
									</select><br>
							Numéro de série : <input type="number" name="num_serie" required><br>
							<input type="submit">
						</form>
					</div>
				</div>
				
			</div>

		</div>
	</section>

<?php include ("footer_client.php")?>