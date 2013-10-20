<?php

class User {
 private $firstname;
 private $lastname;
 private $username;
 private $city;
 private $state;
 private $datebirth;
 private $email; 
 private $password1;
 private $password2;


 
// Método construtor
   function __construct(){
		include_once('ModelUser.php');
    }
	
	function __set($var, $val){
        $this->$var = $val;
    }
 
	
//GETs e SETs
	public function setName( $firstname ){
		$this->nm_first = $firstname;
	} 
	public function getName(){
		return $this->nm_first;
	}
	
	public function setLastName( $lastname ){
		$this->nm_last = $lastname;
	} 
	public function getLastName(){
		return $this->nm_last;
	}
	
	public function setUser( $username ){
		$this->nm_user = $username;
	} 
	public function getUser(){
		return $this->nm_user;
	}
	
	public function setCity( $city ){
		$this->id_city = $city;
	} 
	public function getCity(){
		return $this->id_city;
	}
	
	public function setBirth( $datebirth ){
		$this->bt_datebirth = $datebirth;
	} 
	public function getBirth(){
		return $this->bt_datebirth;
	}
	
	public function setEmail( $email ){
		$this->ds_email = $email;
	} 
	public function getEmail(){
		return $this->ds_email;
	}
	
	public function setPassword1( $password1 ){
		$this->ds_password1 = $password1;
	} 
	public function getPassword1(){
		return $this->ds_password1;
	}
	
	
//logar()
	function logar(){
			try {
				$DAO = new ModelUser();
				$logar = $DAO->autorizar($this);
				if ($logar == true) {
					header("Location: perfil.php");
				} 
				else {
					header("Location: erro.php");
				}
		}catch ( PDOException $ex ){  
			echo "Erro: ".$ex->getMessage(); 
		}

	}

//logout()
	function logout(){
		session_start();
		session_destroy();
		header("Location: index.php");
		}

//insereusuario()
	function insereUsuario(){
		$DAO = new ModelUser();
		
		$insereUsuario = $DAO->inserir($this);
		if($insereUsuario){
			$resposta = header("Location: sucesso.php");
		}
		else{
			$resposta = "Erro ao inserir";
		}	 
		return $resposta;
		}

//deletausuario()
	function deletaUsuario(){
		$DAO = new ModelUser();
	
		$deletaUsuari = $DAO->deletar($this);
		if($deletaUsuario){
			$resposta = header("Location: index.php");
		}
		else{
			$resposta = header("Location: index.php");
		}	 
		return $resposta;
		}

//pegaperfil
/*	function pegaperfil(){
		$DAO = new ModelUser();
		
		$pegaperfil = $DAO->perfil();
		}*/
}
?>