<?php 
include 'connect.php'; 

if(isset($_POST["submit"]))
{
	$email=$_POST["txtemail"];
    $pass=$_POST["txtpass"];
     

$query = "INSERT INTO register (email,pass,type) VALUES ('$email','$pass','$user')";
$res=mysqli_query($conn,$query);
	if($res){
		header("Location:success.php");

		
	}
	else{
	 	echo"Erreur";
	}


	
}
?>