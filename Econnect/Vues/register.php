<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Page d'inscription</title>
  <meta charset="UTF-8">
</head>
<body>

  <div class="header"> 
  <h2>Formulaire d'inscription</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <label>Prénom</label>
      <input type="text" name="firstname" required value="<?php echo $firstname; ?>">
    </div>
    <div class="input-group">
  	  <label>Nom</label>
  	  <input type="text" name="lastname" required value="<?php echo $lastname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Entrer le mot de passe</label>
  	  <input type="password" required name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmer le mot de passe</label>
  	  <input type="password" required name="password_2">
  	</div>
    <div class="input-group">
    <label>Téléphone</label>
      <input type="text" name="phone_num" required value="<?php echo $phone_num; ?>">
    </div>
    <div class="input-group">
    <label>Date de naissance</label>
      <input type="text" name="date_birth" required value="<?php echo $date_birth; ?>">
    </div>
    <!--
    <div class="input-group">
			<label>Type d'utilisateur</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">admin</option>
				<option value="user">user</option>
			</select>
		</div>
	-->
  	<div class="input-group">
  	  <button type="submit" class="button" name="register_button">S'inscrire</button>
  	</div>
  </form>

<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  background: #C0C9F4;
  text-align: center;
  border: 1px solid #C0C9F4;
  border-bottom: #C0C9F4;
  border-radius: 10px 10px 10px 10px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #C0C9F4;
  background: white;
  border-radius: 10px 10px 10px 10px;
}
.input-group {
  margin: 10px 10px 10px 10px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.button {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #C0C9F4;
  border-radius: 5px;
  margin-left: 70%;
  cursor: pointer;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
</body>
</html>