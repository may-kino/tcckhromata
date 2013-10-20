<?php
include ('header.php');
include('./class/Controller/Lista.php');

	try{
		$p = new Conexao();
		$stmt = $p->prepare("SELECT * FROM tb_users WHERE nm_username='$_SESSION[nm_username]'");
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
	
	try{
		$p = new Conexao();
		$stmt = $p->prepare("SELECT * FROM list WHERE id_user='$id_user' and listname='Colecao'");
		$stmt->execute();
			
	}catch ( PDOException $e ){  
				echo "Erro: ".$e->getMessage(); 
		}		
		
	try{
		$p = new Conexao();
		$stt = $p->prepare("SELECT * FROM list WHERE id_user='$id_user' and listname='Wishlist'");
		$stt->execute();
			
	}catch ( PDOException $e ){  
				echo "Erro: ".$e->getMessage(); 
		}		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Perfil</title>
</head>
<body>
<div class="wrap">
    <nav class="navbar navbar-fixed-top">
      <div class="container alinhado">
          <div class="row-fluid">
              <div class="span4">
                   <div class="search">
                       <form action="post">
                          <input name="search" class="field_search" type="text" placeholder="procure aqui" />                 
                       </form>        
                </div>
                </div>
              <div class="span4">
                  <div class="logo_navbar">Khromata</div>
                </div>
              <div class="span4">
                  <div class="btn_perfil"><img class="img-circle cinza mini-avatar" style="width: 40px; height: 40px;" src="img/mayra_avatar.jpg" /></div>
                </div>                                
            </div>
       </div>          
    </nav>
    
    <div class="container perfil">
        <div class="row-fluid about_conteudo">
          <div class="img_topo"><img class="img-circle avatar" style="width: 150px; height: 150px;" src="img/mayra_avatar.jpg" /></div>
            <div class="about_perfil branco">
              <div class="txt_about_perfil"><h1><?php echo $firstname;?> <?php echo $lastname;?></h1></div>
              <div class="rs_about_perfil"></div>
                <div class="atalhos_about_perfil">
                  <ul>
                      <li>amigos</li>
                      <li>mensagens</li>
                      <li>configurações</li>                                                
                    </ul>
                </div>
            </div>
        </div> 
   </div> 
    <div class="container perfil">                 
        <div class="row-fluid cpessoal">
          <div class="ctd_cpessoal branco"><h3>  Stash</h3>
             <hr />
              <div class="ctd">
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />  
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />   
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />                                        
                </div>          
            </div>
        </div>
    </div>    
    <div class="container perfil">        
        <div class="row-fluid wishlist">
          <div class="ctd_wishlist branco"><h3>  Wishlist</h3>
              <hr />
                <div class="ctd">
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" /> 
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />  
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />
                    <img class="img-rounded" style="width: 70px; height: 70px;" src="" />                                         
                </div> 
            </div>        
        </div>
   </div>
   
    <div class="push"></div>
</div>
<br/><br/>
<footer class="footer"><p>Khromata 2013 - Todos os direitos reservados</p>
  <p>Expediente * Sobre</p>
</footer>

</body>
</html>