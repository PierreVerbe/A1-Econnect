<?php include ("header_domisep.php")?>

<body>
	<section id="profil">
		<h1>Votre profil</h1>

		<img src="ressources/profil_domisep_mini.png" alt="Image de profil">

		<div id="articles">
			<article id="details">
				<h2>Informations détaillées :</h2></br>

				<?php include("../../Modeles/Domisep/bdd_profil-info_domisep.php");?> 
			</article>

			<article id="poste">
				<h2>Votre poste : CTO</h2></br>
				<p>Détails du poste : En charge du site Econnect proposé par Domisep. Gère la plateforme ainsi que les administrateurs et les techniciens.</p>
			</article>

			<article id="connexion">
				<h2>Informations de connexion :</h2></br>
				<p>Premier accès au site : 2019-01-10</p>
				<p>Dernière connexion : 2019-01-22</p>
			</article>
		</div>
	</section>
</body>

<?php include ("footer_domisep.php")?>