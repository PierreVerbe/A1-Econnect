<?php

class Model {
	private $connexion;
	
	function __construct() {
		$servername = "localhost";
		$username = "root";
		$password = "root";

		try {
		    $conn = new PDO("mysql:host=$servername;dbname=bdd__v2", $username, $password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $this->connexion=$conn;
	    }
		catch(PDOException $e) {
	    	echo "Echec lors de la connexion: " . $e->getMessage();
	    }

	}

	function createUser($user){
		$this->connexion->exec("INSERT INTO `utilisateur`(`User_type`,`Nom`,`Prenom`,`Adresse_email`,`Mot_de_passe`) VALUES ('".$user->getType()."','".$user->getNom()."','".$user->getPrenom()."','".$user->getMail()."','".$user->getPassword()."')");
	}


	function getUserByEmail($email){
		include_once "user.php";
		$sql =  "SELECT * FROM `utilisateur` WHERE Adresse_email='".$email."'";
		$user = null;
	    foreach  ($this->connexion->query($sql) as $row) {
	    	try {
	    	$user = new User($row['email'],$row['password'],$row['type']);
	    	} 
	    	catch(Exception $e) {
	    		echo $e;
	    	} 
	  	}
	  	return $user;
	}
/*	function getClientByEmail($email){
		include_once "user.php";
		$sql =  "SELECT * FROM `utilisateur` WHERE Adresse_email='".$email."' AND User_type='"client"'";
		$client = null;
	    foreach  ($this->connexion->query($sql) as $row) {
	    	try {
	    	$client = new User($row['email'],$row['password'],$row['type']);
	    }
	    catch(Exception $e) {
	    	echo $e;
	    } 
	  	}
	  	return $client;
	}

	function getAdminByEmail($email){

		$sql =  "SELECT * FROM `utilisateur` WHERE Adresse_email='".$email."' AND User_type='"admin"'";
		$admin = null;
		include_once "admin.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$admin = new User($row['email'],$row['password'],$row['type']);
	  	}
	  	return $admin;
	}

	function getDomisepByEmail($email){

		$sql =  "SELECT * FROM `utilisateur` WHERE Adresse_email='".$email."' AND User_type='"domisep"'";
		$domisep = null;
		include_once "admin.php";
	    foreach  ($this->connexion->query($sql) as $row) {
	    	$domisep = new User($row['email'],$row['password'],$row['type']);
	  	}
	  	return $domisep;
	}*/

	function createClient($client){		
		$this->connexion->exec("INSERT INTO `client`( `nom`,`prenom`,`email`, `cemac` ) VALUES ('.$client->getNom().','.$client->getPrenom().','.$client->getMail().','.$client->getCemac().')");
	}

	function checkLoggedIn(){
	session_start();
	if (!$_SESSION["user"]){
		header("Location: ../Vues/login.html");
	}
}
}

?>