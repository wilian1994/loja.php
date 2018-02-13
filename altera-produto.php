<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php"); 

$id = $_POST['id'];
$produto = $_POST['produto'];
$estoqueMinimo = $_POST['estoqueMinimo'];


    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(alteraProduto($conexao,$id, $produto, $estoqueMinimo)) {
    header("Location: produto-formulario.php");
    die(); //sempre que eu fazer um location eu coloco o die();
?>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">O produto <?= $produto; ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
