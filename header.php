<?php
session_start();
include_once('classes/User.php');
include_once('configuracao/conexao.php');

if (isset($_GET['deletar']) == 'ok'){
	$usuario = new User;
	$usuario->username = $_SESSION['username'];
	$usuario->deletaUsuario();
}

if(isset($_GET['logout'])){
	if($_GET['logout'] == 'ok'){
		User::logout();
		}
}

?>