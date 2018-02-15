<?php

//iniciando uma sessão
session_start();

function usuarioLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioLogado()){
        $_SESSION["danger"] = "Você não tem acesso a essa funcionalidade.";
        header("Location: index.php?falhadeSeguranca=true");
        die();
    }
}

function logout(){
   session_destroy();
   session_start();
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}