<?php
include_once('conexao.php');

$emailLogin = $_POST['EMAIL_USUARIO'];
$senhaLogin = $_POST['SENHA_USUARIO'];

$validacaoLogin =  "SELECT * FROM tbl_login_usuario WHERE email_usuario = '$emailLogin' and senha_usuario = '$senhaLogin'";

$resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
$resultado = mysqli_fetch_array($resultadovalidacao);
session_start();
$_SESSION['emailusuario'] = $resultado['email_usuario'];
$_SESSION['senhausuario'] = $resultado['senha_usuario'];

if ($resultado){ 
   header('location:../inicio.php');
}else{
    $_SESSION['msg'] = "Login ou senha incorretos!";
    header('location:../login.php');
}



$_SESSION['idusuario']=$resultado['id_usuario'];
$idpesquisa = $_SESSION['idusuario'];
$pesquisadados = "SELECT * FROM tbl_usuario WHERE id_usuario = '$idpesquisa'";

$resultadopesquisa=mysqli_query($strcon, $pesquisadados);
$pesquisa = mysqli_fetch_array($resultadopesquisa);




?>
