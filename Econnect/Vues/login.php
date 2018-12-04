<html>
<body>
  <div class="header">
    <h2>Connexion</h2>
  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Login</label>
      <input type="text" name="email" required>
    </div>
    <div class="input-group">
      <label>Mot de passe</label>
      <input type="password" name="password" required>
    </div>
    <div class="input-group">
      <button type="submit" class="button" name="login_button">Login</button>
    </div>
  </form>
  <form>
    <p>
      Vous n'êtes pas encore inscrit ?  <a href="register.php">S'inscrire</a>
    </p>
  </form>
</body>
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
  margin: 10px 0px 10px 0px;
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
  border: none;
  border-radius: 5px;
  text-align: center;
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
p{
  text-align: center;
}

</style>

</html>