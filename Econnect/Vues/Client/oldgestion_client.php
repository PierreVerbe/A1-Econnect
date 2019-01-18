<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script>
function addPiece() {
var piece = "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>NOM DE LA PIECE</h1><p>Température : NN°c</p><p>Informations...</p><p>[Modifier]</p></div><div class=\"tuile-arriere\"><p>Température actuelle : 18°C</p><div class=\"bouton_info_H_G\"><button class=\"moins_température\" onclick=\"changement_temperature(0.5)\">- °C</button><button class=\"plus_température\" onclick=\"changement_temperature(-0.5)\">+ °C</button></div><p>Température voulu : NN°C</p></div></div></div><button class=\"buttonAddEntity\" id=\"btnModalPiece\">Ajouter une pièce</button>";
	$("#btnModalPiece").remove();
	$("#pieceModal").remove();
	$(".gestionCPiece").append(piece);
	location.reload(); 

}

function addCapteur() {
var capteur = "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>NOM DU CAPTEUR</h1><p>Pièce : XXXXX</p><p>Lumière : NN°c</p><p>Numéro de série : n°XXXXX</p></div><div class=\"tuile-arriere\"><p>Lumière actuelle : Basse</p><p>Ajuster la lumière :</p><div class=\"bouton_info_B_D\"><button class=\"moins_lumière\">-</button><button class=\"plus_lumière\">+</button></div></div></div></div><div><button class=\"buttonAddEntity\" id=\"btnAddCapteur\" onclick=\"addCapteur()\">Ajouter un capteur</button></div>";
	$("#btnAddCapteur").remove();
	$(".gestionCCapteurs").append(capteur);

}

function addAction() {
var actionneur = "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>NOM DE L'ACTIONNEUR</h1><p>État : ACTIF</p><p>Informations...</p><p>Numéro de série : n°XXXXX</p></div><div class=\"tuile-arriere\"><h1>Modification de l'état</h1><p>fermer   /   ouvrir</p><p>Statut : Ouvert</p></div></div></div>				<div><button class=\"buttonAddEntity\" id=\"btnAddAction\" onclick=\"addAction()\">Ajouter un actionneur</button></div>";
	$("#btnAddAction").remove();
	$(".gestionCActionneurs").append(actionneur);

}
</script>

<body id="body_Client">
	<section id="gestionCAll">
		<h1>Gestion des pièces, capteurs, actionneurs</h1>
		<div id="gestionClient">

			<div class="gestionCPiece">
				<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=econnect_v2;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

				$data = $bdd->query("SELECT * FROM `piece` WHERE ID_Maison = 1");
				while ($row = $data->fetch()) {
				    echo "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>Piece n°".$row['ID_Piece']."</h1><p>Température : ".$row['Temperature']."°c</p><p>Luminiosité :".$row['Luminosite']."</p><p>[Modifier]</p></div><div class=\"tuile-arriere\"><p>Température actuelle : 18°C</p><div class=\"bouton_info_H_G\"><button class=\"moins_température\" onclick=\"changement_temperature(0.5)\">- °C</button><button class=\"plus_température\" onclick=\"changement_temperature(-0.5)\">+ °C</button></div><p>Température voulu : ".$row['Temperature']."°C</p></div></div></div>";
				}

				?>

				<button class="buttonAddEntity" id="btnModalPiece" onclick="showModal()">Ajouter une pièce</button>

				<div id="pieceModal" class="modal">
				 	<div class="modal-content">
						<span class="close">&times;</span>
						<form action="addPiece.php" method="get">
							Température voulu : <input type="number" min="0" step="1" max="30" name="temp"><br>
							<input type="submit">
						</form>
						<div>
							<button class="buttonAddEntity" id="btnAddPiece" ">Valider la pièce</button>
						</div>
					</div>
				</div>

			</div>

			<div class="gestionCCapteurs">
				<?php 
				$data = $bdd->query("SELECT * FROM `capteur` INNER JOIN piece ON capteur.ID_Piece = piece.ID_Piece WHERE ID_Maison = 1");
				while ($row = $data->fetch()) {
				    echo "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>CAPTEUR n°".$row['ID_Capteur']."</h1><p>Pièce : n°".$row['ID_Piece']."</p><p>Lumière : NN°c</p><p>Numéro de série : n°".$row['Numero_serie']."</p></div><div class=\"tuile-arriere\"><p>Lumière actuelle : Basse</p><p>Ajuster la lumière :</p><div class=\"bouton_info_B_D\"><button class=\"moins_lumière\">-</button><button class=\"plus_lumière\">+</button></div></div></div></div>";
				}

				?>
				<div>
					<button class="buttonAddEntity" id="btnAddCapteur" onclick="addCapteur()">Ajouter un capteur</button>
				</div>

			</div>

			<div class="gestionCActionneurs">
				<?php 
				$data = $bdd->query("SELECT * FROM `actionneur` INNER JOIN piece ON actionneur.ID_Piece = piece.ID_Piece WHERE ID_Maison = 1");
				while ($row = $data->fetch()) {
				    echo "<div class=\"tuile\"><div class=\"tuile-ensemble\"><div class=\"tuile-avant\"><h1>Actionneur n°".$row['ID_Actionneur']."</h1><p>État : ACTIF</p><p>Informations...</p><p>Numéro de série : n°".$row['Numero_serie']."</p></div><div class=\"tuile-arriere\"><h1>Modification de l'état</h1><p>fermer   /   ouvrir</p><p>Statut : Ouvert</p></div></div></div>";
				}

				?>
				<div>
					<button class="buttonAddEntity" id="btnAddAction" onclick="addAction()">Ajouter un actionneur</button>
				</div>
				
			</div>

		</div>
	</section>

<script src="javascript/gestion_client.js"></script>

<?php include ("footer_client.php")?>