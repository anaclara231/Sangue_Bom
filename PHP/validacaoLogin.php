<?php
include_once('conexao.php');

$emailLogin = $_POST('EMAIL_USUARIO');
$senhaLogin = $_POST('SENHA_USUARIO');

$validacaoLogin =  "SELECT * FROM tbl_login_usuario WHERE EMAIL_LOGIN = '$emailLogin' and SENHA_USUARIO = '$senhaLogin'";

$resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
$resultado = mysqli_fetch_array($resultadovalidacao);

if ($resultado){
    echo "<script>
        window.location.href='dashboard.html';
    </script>"
}else{
    
echo "Nenhum usuario foi encontrado";
}

?>