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
<script>
//Initialisation des variables
var cemac = document.forms['vform']['cemac'];
var name = document.forms['vform']['name'];
var firstname = document.forms['vform']['firstname'];
var email = document.forms['vform']['email'];
var password = document.forms['vform']['password'];
var password_confirm = document.forms['vform']['password_confirm'];
// Affichage des erreurs
var email_error = document.getElementById('email_error');
var name_error = document.getElementById('name_error');
var firstname_error = document.getElementById('firstname_error');
var password_error = document.getElementById('password_error');
var cemac_error = document.getElementById("cemac_error");
cemac.addEventListener('blur', cemacVerify, true);
name.addEventListener('blur', nameVerify, true);
firstname.addEventListener('blur', firstnameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);
function Validate() {
  if (cemac.value == "") {
    cemac.style.border = "1px solid red";
    document.getElementById('cemac_div').style.color = "red";
    cemac_error.textContent = "CEMAC requis";
    cemac.focus();
    return false;
  }
  if (cemac.value <10000 || cemac.value >99999) {
    cemac.style.border = "1px solid red";
    document.getElementById('cemac_div').style.color = "red";
    cemac_error.textContent = "Le CEMAC possède 5 charactères et commence par un 1 ";
    cemac.focus();
    return false;
  }
  // validate name
  if (name.value == "") {
    name.style.border = "1px solid red";
    document.getElementById('name_div').style.color = "red";
    name_error.textContent = "Nom requis";
    name.focus();
    return false;
  }
    // validate firstname
  if (firstname.value == "") {
    firstname.style.border = "1px solid red";
    document.getElementById('firstname_div').style.color = "red";
    firstname_error.textContent = "Prénom requis";
    firstname.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Email requis";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.textContent = "Mots de passe obligatoire";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != password_confirm.value) {
    password.style.border = "1px solid red";
    document.getElementById('pass_confirm_div').style.color = "red";
    password_confirm.style.border = "1px solid red";
    password_error.innerHTML = "Les mots de passe sont différents";
    return false;
  }
}
function nameVerify() {
  if (name.value != "") {
    name.style.border = "1px solid #5e6e66";
    document.getElementById('name_div').style.color = "#5e6e66";
    name_error.innerHTML = "";
    return true;
  }
}
function firstnameVerify() {
  if (firstname.value != "") {
    firstname.style.border = "1px solid #5e6e66";
    document.getElementById('firstname_div').style.color = "#5e6e66";
    firstname_error.innerHTML = "";
    return true;
  }
}
function emailVerify() {
  if (email.value != "") {
    email.style.border = "1px solid #5e6e66";
    document.getElementById('email_div').style.color = "#5e6e66";
    email_error.innerHTML = "";
    return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
  if (password.value == password_confirm.value) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('pass_confirm_div').style.color = "#5e6e66";
    password_error.innerHTML = "";
    return true;
  }
}
function cemacVerify() {
  if (cemac.value != "") {
   cemac.style.border = "1px solid #5e6e66";
   document.getElementById('cemac_div').style.color = "#5e6e66";
   cemac_error.innerHTML = "";
   return true;
  }
}
</script>
</html>