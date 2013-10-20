<?php

class ModelList extends Lista{
	
// construtor
	public $p = null;
//retorna a conexão com o banco de dados Utilizando o PDO	
	public function ModelList(){
		include_once('./class/Conexao.php');
		$this->p = new Conexao();
	}
	
//inserir na lista

public function enlistar($produto){
	try{
		$stmt = $this->p->prepare("INSERT INTO list (id_user, listname, productname) VALUES (?, ?, ?)");
		$stmt->bindValue(1, $produto->getId_User() );
		$stmt->bindValue(2, $produto->getListName() );
		$stmt->bindValue(3, $produto->getProductName() );
		$stmt->execute();
	
	$this->p = null;
	
		}catch ( PDOException $ex ){  
		echo "Erro: ".$ex->getMessage(); 
		}
	}

public function desenlistar($produto){
	try{
		$stmt = $this->p->prepare("DELETE FROM list WHERE id_user = '$id_user'");
		$stmt->bindValue(1, $produto->getId_User() );
		$stmt->execute();
	
	$this->p = null;
	
		}catch ( PDOException $ex ){  
		echo "Erro: ".$ex->getMessage(); 
		}
	}	
}
?>	
