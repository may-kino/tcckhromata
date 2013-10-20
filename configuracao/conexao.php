<?php

class Conexao extends PDO {

	private $dsn = "mysql:host=127.0.0.1;dbname=db_khromata";
	private $user = "root";
	private $password = "";
	public $handle = null;
 
	function __construct() {
		try {
			if ( $this->handle == null ) {
				$dbh = parent::__construct( $this->dsn , $this->user , $this->password );
				$this->handle = $dbh;
				return $this->handle;
				}
			}
			catch ( PDOException $e ) {
			echo "Conexão falhou. Erro: " . $e->getMessage( );
			return false;
			}
		}

	function __destruct() {
		$this->handle = NULL;
	}
}
?>