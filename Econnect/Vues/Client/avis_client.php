<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<style>

.bg_avis{

    width:98%;
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left : auto;
    margin-right : auto;
    border-radius: 20px;
    background-color: #67bbde;
    border : 3px solid #219af4;
    box-shadow: 5px 5px 13px;
    text-align: center;

}
.bg_avis img{

	max-width: 250px;
	max-height: 50px;

}

.bg_avis form{

	display: flex;
	flex-direction: row wrap;
	justify-content: space-around;
	flex-wrap: wrap;
	flex: 5;
}
.vote {
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	flex-basis: 20%;

}
.avisClient {
	margin: 15px;
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;

}
</style>
<body>

	<!-- Texte de remplissage -->
	<section class="bg_avis">

			<h1>Etes-vous satisfait de l'érgonomie du site Econnect ?</h1>

			<form method="post" action="sendAvis_client.php">

				<div class="vote">
				<label for="1"><img src="ressources/1.png"/></label>
				<input type="radio" name="vote" value="1" id="1" /> 
				</div>


				<div class="vote">
				<label for="2"><img src="ressources/2.png"/></label>
				<input type="radio" name="vote" value="2" id="2" /> 
				</div>

				<div class="vote">
				<label for="3"><img src="ressources/3.png"/></label>
				<input type="radio" name="vote" value="3" id="3"/> 
				</div>

				<div class="vote">
				<label for="4"><img src="ressources/4.png"/></label>
				<input type="radio" name="vote" value="4" id="4"/> 
				</div>

				<div class="vote">
				<label for="5"><img src="ressources/5.png"/></label>
				<input type="radio" name="vote" value="5" id="5"/>
				</div>

				<div class="avisClient">
				</br>
				<input style="width: 250px; height: 50px;" type="text" name="avis" placeholder="Avis complémentaire" />
				<input class="button" type="submit"/>
				</div>

			<form>
			
	</section>

<?php include ("footer_client.php")?>
