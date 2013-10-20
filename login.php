<?php
session_start();
include_once('class/controller/User.php');
include_once('class/controller/Conexao.php');

$user = "";
if (isset($_SESSION['username'])) {
 $user = $_SESSION['username'];
}
else
{
 $user = "";
}


if (isset($_POST['entrar'])){
	$usuario = new User;
	$usuario->username = $_POST['username'];
	$usuario->password = $_POST['password'];
	$usuario->logar();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khromata</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>

<script>
$(document).ready(function(){
	$(".login").click(function(){
		$("#more").fadeToggle();
		$("#mais").fadeOut();
	});	
	$(".join").click(function(){
		$("#mais").fadeToggle();
		$("#more").fadeOut();
	});	
});
</script>

</head>

<body>

    <div id="header"><img src="imagens/logo_2.png"/></div>
    
    <div id="corpo">
  <img src="imagens/logo.jpg"/><br /><br />
          </div><div id="more">
        	<form action='index.php' method='post'/>
           	<table>
              <tr><td></td><td><label>Usuário:</label></td><td></td><td></td><td></td><td><input type="text" name="username" /></td></tr>
              <tr><td></td><td><label>Senha:</label></td><td></td><td></td><td></td><td><input type="password" name="password"  /></td></tr>
              <tr><td></td><td></td><td></td><td></td><td></td><td><input type="submit" value="ENTRAR" name="entrar" class="submit" /></td></tr>
          </table>
          </form>
      </div>
      
</div>
<div id="footer"><br />_____________________________________________<br /><br />
Todos os direitos reservados. Khromata 2013 &copy;</div>    

</body>
</html>
