<?php
//ela herdar� os m�todos e atributos do PDO atrav�s da palavra-chave extends
class Conexao extends PDO {
//criando a conex�o com o banco de dados no localhost(127.0.0.1) e falando o nome do banco, no nosso caso "oo"
private $dsn = "mysql:host=127.0.0.1;dbname=khromata";
private $user = "root";
private $password = "";
public $handle = null;
 
function __construct() {
try {
	//aqui ela retornar� o PDO em si, veja que usamos parent::_construct()
	if ( $this->handle == null ) {
	$dbh = parent::__construct( $this->dsn , $this->user , $this->password );
	$this->handle = $dbh;
	return $this->handle;
	}
}
catch ( PDOException $e ) {
echo "Conex�o falhou. Erro: " . $e->getMessage( );
return false;
}
}
//aqui criamos um objeto de fechamento da conex�o
function __destruct( ) {
$this->handle = NULL;
}
}
?>