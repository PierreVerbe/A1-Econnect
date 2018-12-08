<?php 
include('connect.php');

if(isset($_POST["submit"])){
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
	
	
	$req="SELECT Adresse_email,Mot_de_passe,User_type FROM utilisateur";
	$query=mysqli_query($conn,$req);
	while($row=mysqli_fetch_array($query))
	{
		$db_email=$row["Adresse_email"];
		$db_pass=$row["Mot_de_passe"];
		$db_type=$row["User_type"];
		
		if($email==$db_email && $pass==$db_pass){
			session_start();
			$_SESSION["Adresse_email"]=$db_email;
			$_SESSION["User_type"]=$db_type;
			
			if($db_type=='admin'){
				header("Location:Vues/Administrateur/accueil_admin.php");
			}
			else
				header("Location:Vues/Client/accueil_user.php");
		}
		else
			echo("Erreur");
			break;
	}
}
?>