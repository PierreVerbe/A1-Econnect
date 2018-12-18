<?php 
include 'connect.php'; 

if(isset($_POST["submit_signup"])){
	if(isset($_POST["check"])) //accepter les cgu
	{
		$email=$_POST["txtemail"];
		$pass=$_POST["txtpass"];
		$repass=$_POST["retxtpass"];
		$cemac=$_POST["cemac"];


     

$query = "INSERT INTO utilisateur (Nom, Prenom, Adresse_email,Mot_de_passe,Telephone,Date_naissance,User_type) VALUES ('$name','$firstname','$email','$pass','phone','birth','$user')";
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
?>