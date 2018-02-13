<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-encomenda.php"); 

$produto_id = $_POST['produto_id'];
$categoria_id = $_POST['categoria_id'];
$pedido = $_POST['pedido'];
$loja_id = $_POST['loja_id'];
$rastreio = $_POST['rastreio'];
$valorPago = $_POST['valorPago'];
$descricao = $_POST['descricao'];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereEncomenda($conexao, $produto_id, $categoria_id, $pedido, $loja_id, $rastreio, $valorPago,
$descricao)) {
    header("Location: encomenda-formulario.php");
    die(); //sempre que eu fazer um location eu coloco o die();
?>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="text-danger">O produto <? = $produto; ?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
