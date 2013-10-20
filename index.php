<?php

include ('header.php');
//dentro do controller
if (isset($_POST['entrar'])){
    $usuario = new User();
    $usuario->nm_user = $_POST['nm_user'];
    $usuario->ds_password1 = $_POST['ds_password1'];
    $usuario->logar();
}

if (isset($_POST['enviar'])){
    $usuario = new User();
    $usuario->nm_first = $_POST['nm_first'];
    $usuario->nm_last = $_POST['nm_last'];
    $usuario->nm_user = $_POST['nm_user'];
    $usuario->id_city = $_POST['id_city'];
    $usuario->bt_datebirth = $_POST['bt_datebirth'];
    $usuario->ds_email = $_POST['ds_email'];
    $usuario->ds_password1 = $_POST['ds_password1'];
    $usuario->insereUsuario();
}
//viesh
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Khromata</title>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn_login").click(function(){
        $(".dropdown-menu").fadeToggle();
    }); 
}); 
</script>




</head>

<body>
<div class="wrap">

    <nav class="navbar navbar-fixed-top">
    	<div class="container alinhado">
        	<div class="row-fluid">
            	<div class="span4">
                </div>
            	<div class="span4">
                	<div class="logo_navbar">Khromata</div>
                </div>
            	<div class="span4">
                	<div class="btn_login"><img class="img-circle branco" style="width: 40px; height: 40px;" src="" /></div>
                </div>                                
            </div>
            <div class="dropdown right">
                        <ul class="dropdown-menu pull-right">
                            <form action='index.php' method='post'/>
                                <table>
                                    <label>Usuário:<input type="text" name="nm_user" /></label>
                                    <label>Senha:<input type="password" name="ds_password1"  /></label>
                                    <label class="checkbox"><input type="checkbox">Lembrar login e senha</label>
                                    <input type="submit" value="entrar" name="entrar" class="btn" />
                                </table>
                            </form>   
                        </ul>                                   
            </div>  
       </div>          
    </nav>

    <div class="row-fluid logo_topo branco"><h1>Khromata</h1></div>
    <div class="container">        
        <div class="row-fluid caixatexto"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at leo rutrum, eleifend neque sed, faucibus mi. Aenean lacinia lacus egestas, convallis sapien in, porttitor justo. Fusce gravida vehicula ligula et sodales. Proin a nisi nisl. Cras interdum aliquet lorem, at imperdiet justo interdum in. Curabitur mauris tortor, varius fermentum tempor non, pulvinar id turpis. Donec faucibus elementum arcu, sed aliquam odio. Vestibulum sodales metus ultricies, tempus nisi nec, molestie arcu. Pellentesque dolor mauris, facilisis vitae egestas a, dapibus eget enim. Pellentesque malesuada adipiscing ipsum, et elementum enim hendrerit et.</p></div>
            </div>        
     <div class="container">    
        <div class="row-fluid">
            <div class="span4 bola"><img class="img-circle procure" style="width: 250px; height: 250px;" src="img/chanel3.png" /></div>   <div class="span4 bola"><img class="img-circle liste" style="width: 250px; height: 250px;" src="img/chanel4.png" /></div>
            <div class="span4 bola"><img class="img-circle compartilhe" style="width: 250px; height: 250px;" src="img/chanel2.png" /></div>
        </div>
    </div>            
    <div class="container">       
            <div class="row-fluid">
                <div class="span6 caixacadastro"><h3>Cadastre-se!</h3>
                    <form name="cadastro" action="" method="post">
                    <table>
                    
                    <tr><td><label>Nome:</label></td><td></td><td><input type="text" name="nm_first" /></td> <p id="demo"></p>
                    <td><label>Sobrenome:</label></td><td></td><td><input type="text" name="nm_last"  /></td></tr>
                    
                    <tr><td><label>Usuário</label></td><td></td><td><input type="text" name="nm_user" /></td>
                    <td><label>Cidade:</label></td><td></td><td><input type="text" name="id_city" /></td></tr>

 <?php
/*** query the database ***/
 //       $result = mysql_query("SELECT nm_city FROM tb_city");
 ///       echo "<select name='id_city'>";
 ///       while($row = mysql_fetch_assoc($result))
 //       {

 //           echo "<option value= '".$row["nm_city"]."'>".$row["nm_city"]. "</option>";
    //    }
  //      echo "</select>";


?>


                    <td><label>Nascimento:</label></td><td></td><td><input type="text" name="bt_datebirth"  /></td></tr>
                        
                    <tr><td><label>E-mail:</label></td><td></td><td><input type="text" name="ds_email" /></td>
                    <td><label>Senha:</label></td><td></td><td><input type="password" name="ds_password1"  /></td></tr>
                                        
                    <td></td><td><input type="submit" value="cadastre-se" name="enviar" class="btn" onsubmit="return valida()"/></td></tr>
                     
                    </table>
                    </form>
             </div>            
                <div class="span6 caixacadastro"><h3>Login</h3>
<form action='index.php' method='post'/>
            <table>
              <tr><td></td><td><label>Usuário:</label></td><td></td><td></td><td></td><td><input type="text" name="nm_user" /></td></tr>
              <tr><td></td><td><label>Senha:</label></td><td></td><td></td><td></td><td><input type="password" name="ds_password1"  /></td></tr>
              <tr><td></td><td></td><td></td><td></td><td></td><td><input type="submit" value="entrar" name="entrar" class="btn" /></td></tr>
          </table>
          </form>

                </div>
            </div>
            </div>            
    </div>    
    <div class="push"></div>
</div>

<footer class="footer"><p>Khromata 2013 - Todos os direitos reservados</p></footer>

</body>
</html>
