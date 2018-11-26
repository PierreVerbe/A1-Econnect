<?php include ("header_client.php")?>


<body>

	<!-- Texte de remplissage -->
	<section class="tableau_bord">
	
		<center>
			<p>	
			<?php   echo ('Votre vote de <b>');
					echo $_REQUEST['vote'];
					echo (' étoile(s)</b> a bien été validé.');
					
					echo ('</br>Avec votre commentaire : <b>');
					echo $_REQUEST['avis'];
					echo ('</b></br>');

			?>
			<a href="accueil_client.php">Retour à l'acceuil</a>
			</p>



		</center></section>
	</section>

<?php include ("footer_client.php")?>
