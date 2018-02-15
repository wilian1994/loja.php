<?php

//iniciando uma sessão
session_start();

function usuarioLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioLogado()){
        header("Location: index.php?falhadeSeguranca=true");
        die();
    }
}

function logout(){
   session_destroy();
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}