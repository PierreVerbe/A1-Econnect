<?php 
include('connect.php');

if(isset($_POST["submit"])){
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
	
	
	$req="SELECT email,pass,type FROM register";
	$query=mysqli_query($conn,$req);
	while($row=mysqli_fetch_array($query))
	{
		$db_email=$row["email"];
		$db_pass=$row["pass"];
		$db_type=$row["type"];
		
		if($email==$db_email && $pass==$db_pass){
			session_start();
			$_SESSION["email"]=$db_email;
			$_SESSION["type"]=$db_type;
			
			if($db_type=='admin'){
				header("Location:home_admin.php");
			}
			else
				header("Location:home.php");
		}
		else
			echo("Erreur");
	}
}
?>