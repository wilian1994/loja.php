<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php"); 

$id = $_POST['id'];

removeProduto($conexao, $id);
header("Location: produto-formulario.php?removido=true");
die(); //sempre que eu fazer um location eu coloco o die();
?>
