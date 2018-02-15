<?php 
include("regra-negocio-usuario.php");
logout();
$_SESSION["sucess"] = "Deslogado";
header("Location: index.php?logout=true");
die();
?>