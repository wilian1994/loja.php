<?php include("conecta.php");
include("banco-usuario.php");
include("regra-negocio-usuario.php");

$email = $_POST['email'];
$senha = $_POST['password'];

$usuario = buscaUsuario($conexao,$email, $senha);
if($usuario == null){
    $_SESSION["danger"] = "Usuário ou senha inválido";
    header("Location: index.php");
    
}else{
    $_SESSION["success"] = "Usuário logado com sucesso";
    header("Location: index.php");
    logaUsuario($usuario['email']);
}
die();