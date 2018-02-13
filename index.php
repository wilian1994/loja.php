<?php include("cabecalho.php"); ?>

<?php if(isset($_GET['login']) && $_GET['login'] == true){ ?>
    <p class="alert-sucess"> Logado com sucesso</p>
<?php }?>
<?php if(isset($_GET['login']) && $_GET['login'] == false){ ?>
    <p class="alert-danger"> Inválido</p>
<?php } ?>

<?php if(isset($_COOKIE["usuario_logado"])){?>
    <p class="alert-sucess"> Logado com sucesso com o usuário <?=$_COOKIE["usuario_logado"]?></p>
<?php }?>
//isset é utilizado para verificar se algo existe
            <h1>Bem vindo!</h1>
<?php include("rodape.php"); ?>
