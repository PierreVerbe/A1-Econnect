<?php include ("header_client.php")?>
<?php include ("banniere_client.php")?>

<!DOCTYPE html>

<html>
 	<head>
    	<meta charset="UTF-8">
	    <style>

			* {
			    box-sizing: border-box;
			}

			input[type=text], select, textarea {
			    width: 100%;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    resize: vertical;
			    padding: 12px 12px 12px 12px;
			    display: inline-block;
			}
			#mail, #Téléphone, #Date_naissance, #MDP{
				width: 100%;
			    padding: 12px;
			    border: 1px solid #ccc;
			    border-radius: 4px;
			    resize: vertical;
			}

			label {
			    display: inline-block;
				width: 140px;
				text-align: right;
				margin-right: 5px;
			}

			.boutton {
			    background-color: #4CAF50;
			    color: white;
			    padding: 12px 20px;
			    border: none;
			    border-radius: 4px;
			    cursor: pointer;
			    float: right;
			    margin-top: 5px; 
			    margin-right: 150px; 
			}

			.boutton:hover {
			    background-color: #45a049;
			}

			/*.container {
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
			}*/

			.col-25 {
			    float: left;
			    width: 15%;
			    margin-top: 20px;

			}

			.col-75 {
			    float: left;
			    width: 50%;
			    margin-top: 20px;
			}
			#sectionClient2
			{ 
			    width:98%;
			    margin-top: 15px;
			    margin-bottom: 15px;
			    margin-left : auto;
			    margin-right : auto;
			    background-color: #A5CAFF;
			    border : 3px solid #8FA8DE;
			    box-shadow: 5px 5px 13px;
			    height: 550px;
			    text-align: center;
			    border-radius: 20px;  
			}


			.row:after {
			    content: "";
			    display: table;
			    clear: both;
			}


			@media screen and (max-width: 600px) {
			    .col-25, .col-75, input[type=submit] {
			        width: 100%;
			        margin-top: 0;
			    }
			}
		</style>
	</head>

	<?php

		try {
			include ("../../Modeles/Requete_parametre.php");
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

		$req = $bdd->query('SELECT utilisateur.Nom, utilisateur.Prenom, utilisateur.Adresse_email, utilisateur.Mot_de_passe, utilisateur.Telephone, utilisateur.Date_naissance FROM utilisateur WHERE utilisateur.ID_User = '.$_SESSION['id']);

		while ($donnees = $req->fetch()) {
    ?>

    <section id="sectionClient2">

    	<?php require("mdpReset_check.php"); ?>

		<?php
		if(isset($_SESSION['id'])) {
			header('Location: connexion.php');
		}
		else if (isset($erreur)) {
			echo '<font color='.$erreurColor.'>'.$erreur."</font>";
		}
		?>
		<form method="POST" action="">
	  	<form method="POST" action=" " onsubmit="return Validate()" name="form" >
		  	<div class="container">

			    <div class="row" >
			      	<div class="col-25">
			        	<label for="fname">Nom :</label>
			  		</div>
			      	<div class="col-75">
			        	<input type="text" id="fname" name="firstname" value="<?php echo $donnees['Nom']; ?>">
			      	</div>
			    </div>

			    <div class="row">
			      	<div class="col-25">
			        	<label for="lname">Prénom :</label>
			      	</div>
			      	<div class="col-75">
			        	<input type="text" id="lname" name="lastname" value="<?php echo $donnees['Prenom']; ?>">
			      	</div>
			    </div>

			    <div class="row">
			      	<div class="col-25" >
			        	<label for="subject">Email :</label>
			      	</div>
			      	<div class="col-75" id="email_div">
				        <input type="email"  name="email" value="<?php echo $donnees['Adresse_email']; ?>" class="textInput" id="mail">
			        	<div id="email_error"></div>
			      	</div>
			    </div>

			    <div class="row">
			      	<div class="col-25">
				        <label for="subject">Téléphone :</label>
			      	</div>
			      	<div class="col-75">
				        <input type="tel" id="Téléphone" name="Téléphone" value="<?php echo $donnees['Telephone']; ?>" min="1" max="10" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}">
			      	</div>
			    </div>

			    <div class="row">
			      	<div class="col-25">
				        <label for="subject">Date de naissance :</label>
			      	</div>
			      	<div class="col-75">
				        <input type="date" id="Date_naissance" name="Date_naissance" value="<?php echo $donnees['Date_naissance']; ?>">
			      	</div>
			    </div>

			    <div class="row">
			      	<div class="col-25" > 
				        <label for="subject">Ancien mot de passe :</label><br/>
			      	</div>    
			      	<div class="col-75" id="password_div">
			      		<input name="passeword_confirm"  type="passeword" name="password" value="<?php echo $donnees['Mot_de_passe']; ?>" class="textInput" id="MDP" /><br /><br />
			    	</div>
			  	</div>

			    <div class="row">
			      	<div class="col-25" > 
			        	<label for="subject">Nouveau mot de passe :</label><br/>
			      	</div>    
			      		<div class="col-75" id="password_div">
			      		<input name="passeword_confirm"  type="passeword" name="password" value="<?php echo $donnees['Mot_de_passe']; ?>" class="textInput" id="MDP" /><br /><br />
			    	</div>
			  	</div> 

			  	<div class="row">      
			    	<div class="col-25">
			      		<label for="subject">Confirmer le nouveau mot de passe :</label><br/>
			    	</div>   
			    	<div class="col-75" id="pass_confirm_div">
			      		<input name="passeword_confirm" type="passeword"  placeholder="Confirmez votre nouveau mot de passe ..." class="textInput" id="MDP" /><br /><br />
			      		<div id="password_error"></div>
			    	</div>                
			  	</div>    

			    <div class="row" >
			        <button class="boutton" type="submit" name="register"><span>Soumettre</span></button> 
			    </div>

			</div>
		</form>
	</section>

  	<?php
  		
  		}

  		$req->closeCursor();

	?>


</html>

<?php include ("footer_client.php")?>