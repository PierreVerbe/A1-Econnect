<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<body id="body_Client">

	<section id="GestionClient">
		<h1>Gestion des comptes</h1>

		<div id="conteneur_1">
			<div class="ComptePrincipal">
				<h2 id="Acces">Accès total</h2>
				<p>Photo de la maison</p>
				<button class="button_1" style="vertical-align:middle"><span>Accès </span></button>
			</div>
			<div class="CompteSecondaire">
				<h2>Compte secondaire </h2>
				<button class="button_2" style="vertical-align:middle"><span>Compte de Jean-Pascal </span></button>
				<button class="button_3" style="vertical-align:middle"><span>Compte de Jacques-Olivier </span></button>
			</div>
			<div class="Ajout">
				<h2>Ajout de comptes secondaires</h2>
				<button class="button_4" style="vertical-align:middle"><span>Ajouter </span></button>
			</div>
		</div>
	</section>

	<section id="GestioN">
		<div id="conteneur_2">
			<h1>Gestion pièces, capteurs, actionneurs</h1>
			<div class="Piece">
				<h2>Mes Pièces</h2>
				<button class="button_5" style="vertical-align:middle">
					<span>
						<strong>Chambre 1</strong><br/>
						Capteur1 Capteur2<br>
						Actionneur1 Actionneur2 
					</span>
				</button>
				<button class="buttonS" style="vertical-align:middle"><span>Ajouter une pièce </span></button>
			</div>
			<div class="Capteurs">
				<h2>Mes Capteurs</h2>
				<button class="buttonS" style="vertical-align:middle">
					<span>
						<strong>Capteur1</strong><br/>
						Statut : Actif 
					</span>
				</button>
				<button class="buttonS" style="vertical-align:middle">
					<span>
						<strong>Capteur2</strong><br />
						Statut : Actif
					</span>
				</button>
				<button class="buttonS" style="vertical-align:middle"><span>Ajouter un capteur</span></button>
			</div>
			<div class="Actionneurs">
				<h2>Mes actionneurs</h2>
				<button class="buttonS" style="vertical-align:middle">
					<span>
						<strong>Actionneur1</strong><br/>
						Statut : Actif
					</span>
				</button>
				<button class="buttonS" style="vertical-align:middle">
					<span>
						<strong>Actionneur2</strong><br/>
						Statut : Inactif
					</span>
				</button>
				<button class="buttonS" style="vertical-align:middle"><span>Ajouter un actionneur</span></button>
			</div>
		</div>
	</section>
</body>

	

<?php include ("footer_client.php")?>