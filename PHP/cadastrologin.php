<?php
include_once('conexao.php');
include_once('dados.php');

$selectTblUsuario= "SELECT id_usuario FROM tbl_usuario WHERE cpf = '$cpf' and rg = '$rg'";

$resultadoSelect=mysqli_query($strcon, $selectTblUsuario) or die ("Erro no retorno de dados");

$registro = mysqli_fetch_array($resultadoSelect);

$idUsuario = $registro[0];

$inserteLogin = "INSERT INTO tbl_login_usuario(id_usuario, email_usuario, senha_usuario) 
VALUES('$idUsuario', '$email', '$senha' )";



?>