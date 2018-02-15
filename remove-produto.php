<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php"); 
include("regra-negocio-usuario.php");

$id = $_POST['id'];

removeProduto($conexao, $id);
$_SESSION["success"] = "Produto removido com sucesso";
header("Location: produto-formulario.php");
die(); //sempre que eu fazer um location eu coloco o die();
?>
