<?php

session_start(); 
include ('functions.php');
require_once 'dbconfig.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>CMS</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<body>

<?php
        if (checaSeEstaLogado() == true){
            ?>
        
            <p><b>Bem vindo <?php echo $_SESSION["usuario"]; ?>,</b></p>
            <p><a href = 'dashboard.php'>Acessar o painel</a></p>
            <p><a href = 'logout.php'>Logout</a></p>
            
            <?php
        }else{
            
            if (isSet($_POST["usuario"]) == true){
                
                $login = fazerLogin($_POST["usuario"], $_POST["senha"]);
                if ($login == true){
                    
                    echo "

                    <div class='section no-pad-bot' id='index-banner'>
                      <div class='container'>
        
                        <p>Você foi logado com sucesso, clique <a href = 'dashboard.php'>aqui</a> para prosseguir</p>
            

                                  <br><br><br><br><br><br><br><br><br><br><br>

                      </div>
                  </div>";
                    
                }else{
                    echo "Usuário ou senha inválidos";
                }
                
            }else{
                ?>

                  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center black-text">Autenticação requerida</h3>
      <div class="row">
        <form class="col s12" method="post">
          
          <div class="row">
        <div class="input-field col s12">
        <label class="black-text" for="email">Login</label>
          <input name="usuario" id="loginEmail" type="text" class="validate" required="true">
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <label class="black-text" for="loginPassword">Senha</label>
          <input id="loginPassword" name="senha" type="password" class="validate" required="true">
          
        </div>
      </div>
      <div class="row center">
        <button type="submit" class="btn-large waves-effect waves-light orange">Entrar</button>
      </div>

        </form>
      </div>
      
      <br><br>

    </div>
  </div>

                <?php
            }
        }
        ?>

</body>

</html>