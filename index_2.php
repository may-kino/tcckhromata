<?php

include ('header.php');
//dentro do controller
if (isset($_POST['entrar'])){
	$usuario = new User();
	$usuario->username = $_POST['username'];
	$usuario->password1 = $_POST['password1'];
	$usuario->logar();
}

if (isset($_POST['enviar'])){
	$usuario = new User();
	$usuario->firstname = $_POST['firstname'];
	$usuario->lastname = $_POST['lastname'];
	$usuario->username = $_POST['username'];
	$usuario->city = $_POST['city'];
	$usuario->state = $_POST['state'];
	$usuario->datebirth = $_POST['datebirth'];
	$usuario->email = $_POST['email'];
	$usuario->password1 = $_POST['password1'];
	$usuario->password2 = $_POST['password2'];
	$usuario->insereUsuario();
}
//viesh
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khromata</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

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
     <form>
        <input type="button" value="CADASTRE-SE" name="join" class="join" />
        <input type="button" value="LOGIN" name="login" class="login" />
      </form>
      
                 <div id="mais" style="display: none;">
                 	<form name="cadastro" action="" method="post">
					<table>
                    
                    <tr><td><label>Nome:</label></td><td></td><td><input type="text" name="firstname" /></td> <p id="demo"></p>
                    <td><label>Sobrenome:</label></td><td></td><td><input type="text" name="lastname"  /></td></tr>
                    
                    <tr><td><label>Usuário</label></td><td></td><td><input type="text" name="username" /></td>
                    <td><label>Cidade:</label></td><td></td><td><input type="text" name="city" /></td></tr>
                    
                    <tr><td><label>Estado:</label></td><td></td><td><input type="text" name="state"  /></td>
                    <td><label>Nascimento:</label></td><td></td><td><input type="text" name="datebirth"  /></td></tr>
                    	
                    <tr><td><label>E-mail:</label></td><td></td><td><input type="text" name="email" /></td>
                    <td><label>Senha:</label></td><td></td><td><input type="password" name="password1"  /></td></tr>
                    
                    <tr><td><label>Repita:</label></td><td></td><td><input type="password" name="password2" /></td><td></td>                    				
                    <td></td><td><input type="submit" value="CADASTRAR" name="enviar" class="submit" onsubmit="return valida()"/></td></tr>
                     
                    </table>
                    </form>
      </div>
                   
      <div id="more" style="display: none;">
        	<form action='index.php' method='post'/>
           	<table>
              <tr><td></td><td><label>Usuário:</label></td><td></td><td></td><td></td><td><input type="text" name="username" /></td></tr>
              <tr><td></td><td><label>Senha:</label></td><td></td><td></td><td></td><td><input type="password" name="password1"  /></td></tr>
              <tr><td></td><td></td><td></td><td></td><td></td><td><input type="submit" value="ENTRAR" name="entrar" class="submit" /></td></tr>
          </table>
          </form>
      </div>  
</div>  

 <div id="footer"><br />_____________________________________________<br /><br />
Todos os direitos reservados. Khromata 2013 &copy;</div>   
</body>
</html>
