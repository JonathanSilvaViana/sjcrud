<?php 
session_start(); 
include("functions.php");
?>

<html>

<head>

</head>

<body>


        <?php
        if (checaSeEstaLogado() == true){
            
            session_destroy();
            ?>

            <div class="section no-pad-bot" id="index-banner">
    <div class="container">
        
            <p>Você foi deslogado com sucesso, clique <a href = 'index.php'>aqui</a> para voltar a página inicial.</p>
            

            <br><br><br><br><br><br><br><br><br><br><br>

            </div>
    </div>

            <?php
        }else{
            
           ?>

           <div class="section no-pad-bot" id="index-banner">
    <div class="container">

        <p>Algum erro ocorreu, clique <a href = 'index.php'>aqui</a> para voltar a página inicial.</p>

        <br><br><br><br><br><br><br><br><br><br><br>

    </div>
    </div>
            
            
            
            <?php
        }
        ?>


</body>

</html>