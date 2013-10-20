<?php
include ('header.php');
include('./class/Controller/Lista.php');
	try{
		$p = new Conexao();
		$stmt = $p->prepare("SELECT * FROM users WHERE username='$_SESSION[username]'");
		$stmt->execute();
				
		while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
			$id_user = $dados['id_user'];
			$firstname = $dados['firstname'];
			$lastname = $dados['lastname'];
			$email = $dados['email'];
			}
			
		}catch ( PDOException $e ){  
				echo "Erro: ".$e->getMessage(); 
		}

if (isset($_POST['insertcolection'])){
	$produto = new Lista;
	$produto->id_user = $_POST['id_user'];
	$produto->listname = $_POST['listname'];
	$produto->productname = $_POST['productname'];
	$produto->inserenaLista();
}

elseif (isset($_POST['insertwishlist'])){
	$produto = new Lista;
	$produto->id_user = $_POST['id_user'];
	$produto->listname = $_POST['listname'];
	$produto->productname = $_POST['productname'];
	$produto->inserenaLista();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Khromata :: Spotted - OPI</title>
<link href="css/estilo_3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(){
	$(".avatar").click(function(){
		$("#barracabeca").fadeToggle();
	});	
}); 
</script>

</head>

<body>
    <div id="header"><img src="imagens/logo_2.png"/>
            <div id="pesquisa"><form><input type="search" name="Pesquisa" class="pesquisa" /></form></div>
            <div class="avatar"></div>   
    </div>
                    <div id="barracabeca" style="display: none;">
                    	<p><a href="perfil.php"><strong><?php echo $firstname;?> <?php echo $lastname;?></strong></a></p> 
                   		<p><a href="#">Editar perfil</a></p>                    	
                    	<p><a href="perfil.php?deletar=ok">Deletar perfil</a></p> 
                        <p><a href="perfil.php?logout=ok">Sair</a></p>                       
                    </div>
    
    <div id="corpo">
    
<div id="topo">
        <div id="cabeça">
          <div class="avatarb"><img src="imagens/default.jpg" width="195" height="245" /></div>          
          <div id="back"><img src="imagem/background.jpg" width="614" height="237" /></div>
          <div class="avatar"></div><!--avatar-->
          <div id="cabeçalho">
                <h1>Spotted</h1>
                <h2>OPI</h2>
       	  </div><!--cabeçalho-->
            
<div id="atalhosocial">           
       <div id="social">
       						<form action='' method='post'> 
                                <input type="hidden" value="<?php echo $id_user;?>" name="id_user"/> 
                                <input type="hidden" value="Colecao" name="listname"/>
                              <input type="hidden" value="Spotted" name="productname"/>
        	<div id="nomesocial"><input type="submit" value="Colocar na coleção" name="insertcolection" class="amigos" /></div><!--amigos--><!--nomesocial-->
            				</form>
            <div id="imgsocial"></div><!--imagenssocial-->
        </div><!--social-->   
      
       <div id="social">
       	       				<form action='' method='post'> 
                                <input type="hidden" value="<?php echo $id_user;?>" name="id_user"/> 
                                <input type="hidden" value="Wishlist" name="listname"/>
                              <input type="hidden" value="Spotted" name="productname"/>
        	<div id="nomesocial"><input type="submit" value="Colocar na wishlist" name="insertwishlist" class="fotos" /></div><!--fotos--><!--nomesocial-->
            				</form>
            <div id="imgsocial"></div><!--imagenssocial-->
        </div><!--social-->   
        
       <div id="social">
        	<div id="nomesocial"><input type="button" value="Dar nota" name="msg" class="msg" /></div><!--msg--><!--nomesocial-->
            <div id="imgsocial"></div><!--imagenssocial-->
        </div><!--social-->    
        </form> 
        
        <div id="atalhosocialmedia"><ul>
        	<li><div id="twitter"><a href="twitter.com"></a></div></li>
            <li><div id="facebook"><a href="facebook.com"></a></div></li></ul>
        </div><!--socialmedia-->  
        
      </div><!--atalhosocial--> 
            
      </div><!--cabeça-->
    </div><!--topo-->
      
      <div id="conteudo">
      
       <div id="lista">
        	<div id="nome"><div id="colecao">Swatches</div></div><!--coleção--><!--nomelista-->
         <div id="imglista"></div><!--imagenslista-->
        </div><!--lista-->   
      
        <div id="lista">
        	<div id="nome"><div id="wishlist">Review</div></div><!--wishlist--><!--nomelista-->
          <div id="imglista"></div><!--imagenslista-->
        </div><!--lista-->
           
<br /><br /><br /><br />  
     <div id="footer"><br />_________________________________________________<br />
Todos os direitos reservados. Khromata 2013 &copy;</div><!--footer-->    
      </div><!--conteudo-->   
</div><!--corpo-->  

</body>
</html>