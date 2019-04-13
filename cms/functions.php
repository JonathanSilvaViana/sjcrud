<?php
function checaSeEstaLogado(){
    
    if (isSet($_SESSION["usuario"])){
        return true;
    }else{
        return false;
    }
    
}

function validaCredenciais($usuario, $senha){
    if (($usuario == "claudinei@maxdesign.com.br") && ($senha == "m4xd3s1gn")){
        return true;
    }else{
        return false;
    }
    
}

function fazerLogin($usuario, $senha){
    
    $valida = validaCredenciais($usuario, $senha);
    if ($valida == true){
        $_SESSION["usuario"] = $usuario;
        return true;
    }else{
        return false;
    }
    
}