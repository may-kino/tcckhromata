<?php

class ModelUser extends User{
	
// construtor
	public $p = null;
//retorna a conexão com o banco de dados Utilizando o PDO	
	public function ModelUser(){
		include_once('./configuracao/conexao.php');
		$this->p = new Conexao();
	}


//login
	public function autorizar($usuario){
		try{	
			$stmt = $this->p->prepare("SELECT * FROM tb_users WHERE nm_user=? and ds_password1=?");
			$stmt->bindValue(1, $usuario->getUser());
			$stmt->bindValue(2, $usuario->getPassword1());
			$stmt-> execute();
				
				if ($stmt->rowCount() == 1){
						$dados = $stmt->fetch(PDO::FETCH_OBJ);
						$_SESSION['nm_user'] = $dados->nm_user;
						$_SESSION['ds_password1'] = true;
						return true;
					}
				else{
						return false;
					}	
					
			$this->p = null;
		}catch ( PDOException $e ){  
				echo "Erro: ".$e->getMessage(); 
			}
		}
	
//cadastrar usuario	
	public function inserir($usuario){
	try{
			$stmt = $this->p->prepare("INSERT INTO tb_users (nm_first, nm_last, nm_user, id_city, bt_datebirth, ds_email, ds_password1) VALUES (?, ?, ?, ?, ?, ?, ?)");
			$stmt->bindValue(1, $usuario->getName() );
			$stmt->bindValue(2, $usuario->getLastName() );
			$stmt->bindValue(3, $usuario->getUser() );
			$stmt->bindValue(4, $usuario->getCity() );
			$stmt->bindValue(5, $usuario->getBirth() );
			$stmt->bindValue(6, $usuario->getEmail() );
			$stmt->bindValue(7, $usuario->getPassword1() );	
			$stmt->execute();	

		$this->p = null;
		}catch ( PDOException $ex ){  
			echo "Erro: ".$ex->getMessage(); 
		}
	}

//deletar()
	public function deletar($usuario){
	try{
		$stmt = $this->p->prepare("DELETE FROM tb_users WHERE nm_user='$_SESSION[nm_user]'");
		$stmt->bindValue(1, $usuario->getUser() );
		$stmt->execute();
	
	$this->p = null;
	
		}catch ( PDOException $ex ){  
			echo "Erro: ".$ex->getMessage(); 
		}
	}
	
/*public function perfil($usuario){
	$success = false;
		try{	
			$stmt = $this->p->prepare("SELECT * FROM users WHERE username='$_SESSION[username]'");
			$stmt->execute();
			
		while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
		  $firstname = $dados['firstname'];
		  $lastname = $dados['lastname'];
		  $email = $dados['email'];
	}
			
		$this->p = null;
		
		}catch ( PDOException $e ){  
				echo "Erro: ".$e->getMessage(); 
			}
			return $success;
		}*/
	
	}


?>
