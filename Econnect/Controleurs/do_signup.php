<?php 
include 'connect.php'; 

if(isset($_POST["submit_signup"])){
	if(isset($_POST["checkbox"])) //accepter les cgu
	{
		$email=$_POST["email"];
		$pass=$_POST["password"];
		$repass=$_POST["password_confirm"];
		$cemac=$_POST["cemac"];


     

$query = "INSERT INTO utilisateur (Adresse_email,Mot_de_passe) VALUES ($email','$pass')";
$res=mysqli_query($conn,$query);
	if($res){
		header("Location:success.php");

		
	}
	else{
	 	echo"Erreur";
	}
}else{
	echo "Vous n'avez pas accepter les CGU (retourner à la page précédente)"
}
}

/*
function existingEmail($email): bool
{
    $bdd = connectBDD();
    $req = $bdd->prepare('SELECT EXISTS(SELECT * FROM utilisateurs WHERE email = ?)');
    $req->execute(array($email));
    return $req->fetch()["EXISTS(SELECT * FROM utilisateurs WHERE email = '$email')"];
}
*/
?>