<?php
include("cabecalho.php");

function insereProduto($conexao, $nome, $preco){
    $query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";
    return mysqli_query($conexao, $query);
}


$nome = $_GET["nome"];
$preco = $_GET["preco"];


$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $nome, $preco)) {
?>
<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
?>
<p class="text-danger">O produto <? = $nome; ?> não foi adicionado</p>
<?php
}
?>

<?php include("rodape.php"); ?>
