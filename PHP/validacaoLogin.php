<?php
include_once('conexao.php');
include_once('mapsApi.php');

$emailLogin = $_POST['EMAIL_USUARIO'];
$senhaLogin = $_POST['SENHA_USUARIO'];

$validacaoLogin =  "SELECT * FROM tbl_login_usuario WHERE email_usuario = '$emailLogin' and senha_usuario = '$senhaLogin'";

$resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
$resultado = mysqli_fetch_array($resultadovalidacao);
session_start();
$_SESSION['emailusuario'] = $resultado['email_usuario'];
$_SESSION['senhausuario'] = $resultado['senha_usuario'];

$_SESSION['idUsuario'] = $resultado['id_usuario'];

//Pegando as informações da tabela usuario
$id_usuario = $resultado['id_usuario']; 
$selectDados = "SELECT * FROM tbl_usuario WHERE id_usuario = '$id_usuario'";
$sql = mysqli_query($strcon, $selectDados);
$resultado2 = mysqli_fetch_array($sql);
$idSangue = $resultado2['id_sangue'];
//Consultando o tipo sanguineo do usuario
$tipoSangue = "SELECT tipo_sanguineo FROM tbl_sangue WHERE id_sangue = '$idSangue'";
$sqlSangue = mysqli_query($strcon, $tipoSangue);
$sangueUsuario = mysqli_fetch_array($sqlSangue);

// resultado (tabela de login do usuario) |  resultado2 (tabela de usuario) | resultado3 (tabela de endereço do usario)

//pegando informações de endereço do usuario 
$selectEndereco = "SELECT id_usuario, cep, estado, cidade, bairro, complemento, rua, numero FROM tbl_endereco_usuario WHERE id_usuario = '$id_usuario'";
$sql2 = mysqli_query($strcon, $selectEndereco);
$resultado3 = mysqli_fetch_array($sql2);

if ($resultado){ 
    $_SESSION['nome'] = $resultado2['nome_usuario'];
    $_SESSION['sobrenome'] = $resultado2['sobrenome_usuario'];
    $_SESSION['sangue'] = $sangueUsuario['tipo_sanguineo'];
    $_SESSION['sexo'] = $resultado2['sexo'];
    $_SESSION['cpf'] = $resultado2['cpf'];
    $_SESSION['rg'] = $resultado2['rg'];
    $_SESSION['data_nascimento'] = $resultado2['data_nascimento'];
    
    $_SESSION['cep'] = $resultado3['cep'];
    $_SESSION['estado'] = $resultado3['estado'];
    $_SESSION['cidade'] = $resultado3['cidade'];
    $_SESSION['bairro'] = $resultado3['bairro'];
    $_SESSION['complemento'] = $resultado3['complemento'];
    $_SESSION['rua'] = $resultado3['rua'];
    $_SESSION['numero'] = $resultado3['numero'];

    $hospitais = "SELECT * FROM tbl_hospital";
    $sql = mysqli_query($strcon,$hospitais);
    $teste4 = mysqli_fetch_all($sql);

    for ($i = 0; $i < 1; $i++){
        foreach($teste4 as $valor):{
            echo $valor[1].'<br>';
        }
        endforeach;
    }
    $distance = getDistance($hospital[0], $resultado3['rua'], "K");

    echo $distance;
    

        $enderecos = "SELECT * FROM tbl_endereco_hospital";
}else{
    $_SESSION['msg'] = "Login ou senha incorretos!";
    session_destroy();
    header('location:../login.php');
}

?>
