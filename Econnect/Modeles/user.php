<?php

class User 
{
	public $email;
	private $nom;
	private $prenom;
	private $password;
	public $type;

	
	function __construct($nom,$prenom,$email,$pass,$type){
	
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->password=$pass;
		$this->type=$type;
	}
	public function getMail(){
		return $this->email;
    }
		function setMail($email){
		$this->mail=$email;
	}
	public function getNom(){
		return $this->nom;
    }
		function setNom($nom){
		$this->nom=$nom;
	}
	public function getPrenom(){
		return $this->prenom;
    }
		function setPrenom($prenom){
		$this->prenom=$prenom;
	}
    
	function getPassword(){
		return $this->password;
	}
	function setPassword($password){
		$this->password=$pass;
	}
	public function getType(){
		return $this->type;
	}
	public function setType($type){
		$this->type=$type;
	}

}
?>
