<?php 
include 'connect.php'; 

if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$firstname=$_POST["firstname"];
	$email=$_POST["txtemail"];
    $pass=$_POST["txtpass"];
	$phone=$_POST["phone"];
	$birth=$_POST["birth"];
     

$query = "INSERT INTO utilisateur (Nom, Prenom, Adresse_email,Mot_de_passe,Telephone,Date_naissance,User_type) VALUES ('$name','$firstname','$email','$pass','phone','birth','$user')";
$res=mysqli_query($conn,$query);
	if($res){
		header("Location:success.php");

		
	}
	else{
	 	echo"Erreur";
	}


	
}
?>