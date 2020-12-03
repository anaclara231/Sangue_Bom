<?php
include_once('conexao.php');

$emailLogin = $_POST['EMAIL_USUARIO'];
$senhaLogin = $_POST['SENHA_USUARIO'];
$_SESSION['logar'] = $_SESSION['logar'] ?? False;

$validacaoLogin =  "SELECT * FROM tbl_login_usuario WHERE email_usuario = '$emailLogin' and senha_usuario = '$senhaLogin'";

$resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
$resultado = mysqli_fetch_array($resultadovalidacao);

mysqli_close($strcon);
print_r($resultado);

if ($resultado){
    $_SESSION['EMAIL_USUARIO'] = $emailLogin;
    $_SESSION['SENHA_USUARIO'] = $senhaLogin;
    $_SESSION['logar'] = True;
}else{
echo"
<script>
window.location.href='../login.html'
</script>";
}

?>
