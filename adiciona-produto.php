<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php"); 
include("regra-negocio-usuario.php");

verificaUsuario();

$produto = $_POST['produto'];
$estoqueMinimo = $_POST['estoqueMinimo'];


    $conexao = mysqli_connect('localhost', 'root', '', 'loja');

if(insereProduto($conexao, $produto, $estoqueMinimo)) {
    header("Location: produto-formulario.php");
    die(); //sempre que eu fazer um location eu coloco o die();
?>
<?php
} else {
?>
<p class="text-danger">O produto <? = $produto; ?> não foi adicionado</p>
<?php
}
?>

<?php include("rodape.php"); ?>
