<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../Vues/style_signup.css">
    <title>E-Connect</title>
  </head>

  <header>
      <div class="logo">
        <img src="../Vues/Image/Logo_Econnect_texte.png" alt="logo" width="300" />
      </div>

  </header>

	<section class="signup">
		    
		<?php require("signup_check.php"); ?>

		<h2>Inscription</h2>
		<?php
		if(isset($erreur) && isset($_SESSION['id'])) {
			header('Location: ../index.php');
		}
		else if (isset($erreur)) {
			echo '<font color='.$erreurColor.'>'.$erreur."</font>";
		}
		?>
		<form method="POST" action="">
		<table class="signup" style="width:100%">
			<tr>
			    <th colspan="2">Votre compte</th>
			    <th colspan="2">Votre maison</th> 
			</tr>

		   	<tr>
		   		
		      	<td class="signupColG">
		         	<label for="cemac">Cemac :</label>
		      	</td>
		      	<td class="signupColD">
		        	<input type="text" placeholder="N° du cemac" id="cemac" name="cemac" value="<?php if(isset($cemac)) { echo $cemac; } ?>" />
	     		</td>



		      	<td class="signupColG">
					<label for="numeroRue">N° Rue :</label>
			    </td>
		      	<td class="signupColD">
			        <input type="text" placeholder="Ex: 10" id="numeroRue" name="numeroRue" value="<?php if(isset($numeroRue)) { echo $numeroRue; } ?>" />
			    </td>
	   			
	   		</tr>

		   	<tr>

		     	<td class="signupColG">
		        	<label for="prenom">Prenom :</label>
		      	</td>
		      	<td class="signupColD">
		        	<input type="text" placeholder="Prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
				</td>



		      	<td class="signupColG">
					<label for="adresse">Adresse :</label>
			    </td>
		      	<td class="signupColD">
			        <input type="text" placeholder="Ex: rue de Vanves" id="adresse" name="adresse" value="<?php if(isset($adresse)) { echo $adresse; } ?>" />
			    </td>

		   	</tr>

		   	<tr>

		      	<td class="signupColG">
		        	<label for="nom">Nom :</label>
		      	</td>
		      	<td class="signupColD">
		         	<input type="text" placeholder="Nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
		      	</td>



		      	<td class="signupColG">
					<label for="ville">Ville :</label>
			    </td>
		      	<td class="signupColD">
			        <input type="text" placeholder="Ex: Issy-les-Moulineaux" id="ville" name="ville" value="<?php if(isset($ville)) { echo $ville; } ?>" />
			    </td>

		   	</tr>

		   	<tr>

		      	<td class="signupColG">
		        	<label for="mail">Mail :</label>
		      	</td>
		      	<td class="signupColD">
		        	<input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
		    	</td>


		      	<td class="signupColG">
					<label for="codePostal">Code postal :</label>
			    </td>
		      	<td class="signupColD">
			        <input type="text" placeholder="Ex: 92130" id="codePostal" name="codePostal" value="<?php if(isset($codePostal)) { echo $codePostal; } ?>" />
			    </td>

		   	</tr>

		   	<tr>

		      	<td class="signupColG">
		         	<label for="email">Confirmation du mail :</label>
		      	</td>
		      	<td class="signupColD">
		         	<input type="email" placeholder="Confirmez votre mail" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
		      	</td>

		   	</tr>

		   	<tr>

		      	<td class="signupColG">
		        	<label for="pass">Mot de passe :</label>
		    	</td>
		      	<td class="signupColD">
		        	<input type="password" placeholder="Votre mot de passe" id="pass" name="pass" value="<?php if(isset($pass)) { echo $pass; } ?>" />
		    	</td>

		   	</tr>

		   	<tr>
		      	<td class="signupColG">
		        	<label for="password">Confirmation du mot de passe :</label>
		      	</td>
		      	<td class="signupColD">
		        	<input type="password" placeholder="Confirmez votre mdp" id="password" name="password" value="<?php if(isset($password)) { echo $password; } ?>" />
		      	</td>
		   	</tr>





		</table>

		<div>
			<h3><a href="cgu.html">En vous inscrivant, vous acceptez les conditions d'utilisation</a></h3>
		</div>
	                 
	    <div class="vitrine_text1">
	    	<p id="texte_vitrine_text1"><a href="../index.php">Retour à la page d'accueil</a></p><br/>
	    </div>

		<input class="tested" type="submit" name="forminscription" value="S'inscrire" />
		</form>

	</section>
    


    <img class="planete_gif" src="../Vues/Image/Gif/planete_feuille.gif"/>

  </body>
</html>