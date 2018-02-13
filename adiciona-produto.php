<?php include("cabecalho.php"); ?>
<?php include("conecta.php");

function insereProduto($conexao, $produto, $estoqueMinimo ){
    $query = "insert into produtos (produto, estoqueMinimo) values ('{$produto}', {$estoqueMinimo})";
    return mysqli_query($conexao, $query);
}


$produto = $_GET["produto"];
$estoqueMinimo = $_GET["estoqueMinimo"];


    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $produto, $estoqueMinimo)) {
?>
<p class="text-success">Produto adicionado com sucesso!</p>
<?php
} else {
?>
<p class="text-danger">O produto <? = $produto; ?> não foi adicionado</p>
<?php
}
?>

<?php include("rodape.php"); ?>
