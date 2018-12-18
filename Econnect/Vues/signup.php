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
					<form method="post" action="../Controleurs/do_signup.php">
						<label>Entrer Email :</label> <br/>
						<input type="email" name="txtemail" required /><br/><br/>
					</form>
					<form name="form" action="../Controleurs/do_signup.php" onsubmit="return match();"> 
				        <label for="pwd1">Mot de passe :</label><br/>
				        <input name="txtpass"  type="password" /><br /><br />

				        <label class="form_col" for="pwd2">Confirmer le mot de passe :</label><br/>
				        <input name="retxtpass" type="password" /><br /><br />

						<label>Entrer le numéro de série du CEMAC :</label> <br>
						<input type="text" name="cemac" required /><br><br>
						<input type="checkbox" name="check" value="check"> 
						J'accepte les conditions générales d'utilisation <a href="">ici</a><br><br/>
						
						<input type="submit" name="submit" value="S'inscrire" />
					</form>
					
				</div>

			</div>

			<div class="vitrine_text1">
				<p id="texte_vitrine_text1"><a href="../index.php">Retour à la page d'accueil</a></p>
			</div>


	</body>

<script>
function match(){  

var firstpassword=document.form.txtpass.value;  
var secondpassword=document.form.retxtpass.value;  

if(firstpassword==secondpassword){  
	return true;  alert("xsssssssxdcsd");
}else{
	alert("Les mots de passe doivent être identiques !");  
	return false;  
}
 
var x=document.form.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Format du mail incorrect !");  
  return false;  
  } else {
  	return true;
  	  alert("aaaaaaaa");

  }  
}    



</script>
</html>