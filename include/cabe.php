<?php
session_start();
include_once('./classes/User.php');
include_once('./configuracao/conexao.php');

$user = "";
if (isset($_SESSION['username'])) {
 $user = $_SESSION['username'];
}
else
{
 $user = "";
}

?>