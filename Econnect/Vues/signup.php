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
			header('Location: connexion.php');
		}
		else if (isset($erreur)) {
			echo '<font color='.$erreurColor.'>'.$erreur."</font>";
		}
		?>
		<form method="POST" action="">
		<table class="signup">

		   <tr>
		      <td align="right">
		         <label for="cemac">Cemac :</label>
		      </td>
		      <td>
		         <input type="text" placeholder="N° du cemac" id="cemac" name="cemac" value="<?php if(isset($cemac)) { echo $cemac; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="prenom">Prenom :</label>
		      </td>
		      <td>
		         <input type="text" placeholder="Prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="nom">Nom :</label>
		      </td>
		      <td>
		         <input type="text" placeholder="Nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="mail">Mail :</label>
		      </td>
		      <td>
		         <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="email">Confirmation du mail :</label>
		      </td>
		      <td>
		         <input type="email" placeholder="Confirmez votre mail" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="pass">Mot de passe :</label>
		      </td>
		      <td>
		         <input type="password" placeholder="Votre mot de passe" id="pass" name="pass" value="<?php if(isset($pass)) { echo $pass; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td align="right">
		         <label for="password">Confirmation du mot de passe :</label>
		      </td>
		      <td>
		         <input type="password" placeholder="Confirmez votre mdp" id="password" name="password" value="<?php if(isset($password)) { echo $password; } ?>" />
		      </td>
		   </tr>

		   <tr>
		      <td></td>
		      <td align="center">
		         <br />
		         <input type="submit" name="forminscription" value="S'inscrire" />
		      </td>
		   </tr>

		</table>
		</form>

	</section>
    
      <div>
        <h3><a href="cgu.html">En vous inscrivant, vous acceptez les conditions d'utilisation</a></h3>
      </div>

</body>
                  
        </div>

      </div>

      <div class="vitrine_text1">
        <p id="texte_vitrine_text1"><a href="../index.php">Retour à la page d'accueil</a></p><br/>
      </div>


  </body>
</html>