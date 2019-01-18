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
			<div class="login">
				<form method="post" action="do_login.php" >
					<label>Email:</label>
					<input type="email" name="txtemail" required />
					<label>Mot de passe:</label>
					<input type="password" name="txtpass" required />
					<input type="submit" name="submit" value="Connexion" />	
				</form>
			</div>

	</header>

	
	<body>	
		<div class="menu">
			<ul>
				<li>Qui sommes nous ?</li>		
				<li>Ce que nous proposons</li>	
				<li>Nos partenaires</li>
				<li>Identification</li>
			</ul>			
		</div>

		
			<div class="vitrine_image2">
				<p id="texte_vitrine_image2"></p>
					<div>
   <form method="POST" action="../Controleurs/inscription_client.php" onsubmit="return Validate()" name="vform" >
    <div id="name_div">
      <label>Nom</label> <br>
      <input type="text" name="name" class="textInput">
      <div id="name_error"></div>
    </div>
        <div id="firstname_div">
      <label>Prénom</label> <br>
      <input type="text" name="firstname" class="textInput">
      <div id="firstname_error"></div>
    </div>
    <div id="email_div">
      <label>Email</label> <br>
      <input type="email" name="email" class="textInput">
      <div id="email_error"></div>
    </div>
    <div id="password_div">
      <label>Mot de passe</label> <br>
      <input type="password" name="password" class="textInput">
    </div>
    <div id="pass_confirm_div">
       <label>Confirmer le mot de passe</label> <br>
       <input type="password" name="password_confirm" class="textInput">
       <div id="password_error"></div>
     </div>
    <div id="cemac_div">
      <label>CEMAC</label> <br>
      <input type="number" name="cemac" class="textInput">
      <div id="cemac_error"></div><br>
    </div> 
    </div>  
      <div>
        <h3><a href="cgu.html">En vous inscrivant, vous acceptez les conditions d'utilisation</a></h3>

      </div>
    <div>
    <input type="submit" name="register" value="S'inscrire" class="btn">
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
