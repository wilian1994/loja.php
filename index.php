<?php include("regra-negocio-usuario.php"); ?>

<?php if(isset($_SESSION["sucess"])){?>
    <p class="alert-danger"><?=$_SESSION["sucess"]?></p>
<?php }?>

<?php 
    unset($_SESSION["sucess"]);
?>

<?php if(isset($_SESSION["danger"])){?>
    <p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php }?>

<?php 
    unset($_SESSION["danger"]);
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<?php if(usuarioLogado()){?>
    <p class="alert-sucess"> Logado com sucesso com o usuário <?=$_SESSION["usuario_logado"]?></p>
<?php } else{?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email"
             aria-describedby="emailHelp" 
            placeholder="Entre com e-mail">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox">Lembrar senha</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Registre</a>
          <a class="d-block small" href="forgot-password.html">Esqueci minha senha</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
<?php }?>

</html>
