<?php

class List {
 private $id_user;
 private $listname;
 private $productname;


 
// Método construtor
   function __construct(){
		include_once('../Model/ModelList.php');
    }
	
	function __set($var, $val){
        $this->$var = $val;
    }
 
	
//GETs e SETs
	public function setId_User( $id_user ){
		$this->id_user = $id_user;
	} 
	public function getId_User(){
		return $this->id_user;
	}
	
	public function setListName( $listname ){
		$this->listname = $listname;
	} 
	public function getListName(){
		return $this->listname;
	}
	
	public function setProductName( $productname ){
		$this->productname = $productname;
	} 
	public function getProductName(){
		return $this->productname;
	}

//inserenalista
	function inserenaLista(){
		$DAO = new ModelList();
	
		$inserenaLista = $DAO->enlistar($this);
		if($inserenaLista){
			$resposta = "Inserido com sucesso";
		}
		else{
			$resposta = "Erro ao inserir";
		}	 
		return $resposta;
		}


?>	