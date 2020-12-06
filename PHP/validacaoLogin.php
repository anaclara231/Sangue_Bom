<?php
include_once('conexao.php');

$emailLogin = $_POST['EMAIL_USUARIO'];
$senhaLogin = $_POST['SENHA_USUARIO'];

$validacaoLogin =  "SELECT * FROM tbl_login_usuario WHERE email_usuario = '$emailLogin' and senha_usuario = '$senhaLogin'";

$resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
$resultado = mysqli_fetch_array($resultadovalidacao);

mysqli_close($strcon);

if ($resultado){
    echo "<script>
window.location.href='../dashboard.html'
</script>";
}else{
echo"
<script>
window.location.href='../login.html'
</script>";
}

?>
