<?php
include ('header.php');
    try{
        $p = new Conexao();
        $stmt = $p->prepare("SELECT * FROM tb_users WHERE nm_user='$_SESSION[nm_user]'");
        $stmt->execute();
                
        while($dados = $stmt->fetch(PDO::FETCH_ASSOC)){
                $id_user = $dados['id_user'];
                $firstname = $dados['nm_first'];
                $lastname = $dados['nm_last'];
            }
            
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
<title><?php echo $firstname;?> <?php echo $lastname;?> :: Khromata</title>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script>
$(document).ready(function(){
    $(".mini-avatar").click(function(){
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
                    <div class="btn_perfil"><img class="img-circle cinza mini-avatar" style="width: 40px; height: 40px;" src="img/avatar.png" /></div>
                </div>                             
            </div>
                    <div class="dropdown right">
                        <ul class="dropdown-menu pull-right">
                            <li><a href="perfil.php"><strong><?php echo $firstname;?> <?php echo $lastname;?></strong></a></li> 
                            <li class="divider"></li>
                            <li><a href="#">Editar perfil</a></li>                        
                            <li><a href="perfil.php?deletar=ok">Deletar perfil</a></li> 
                            <li><a href="perfil.php?logout=ok">Sair</a></li>    
                        </ul>                                   
                    </div>  
       </div>          

    </nav>
        
    
    <div class="container perfil">
        <div class="row-fluid about_conteudo">
            <div class="img_topo"><img class="img-circle avatar" style="width: 150px; height: 150px;" src="img/avatar.png" /></div>
            <div class="about_perfil branco">
                <div class="txt_about_perfil"><?php echo $firstname;?> <?php echo $lastname;?></div>
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