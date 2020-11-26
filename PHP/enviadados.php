<?php
include_once('conexao.php');
include_once('dados.php');
//capturando os dados da tabela usuario + login


if(!$strcon){
    die("conexão falhou: ".mysqli_connect_error());
}else{

    $tblUsuario="INSERT INTO tbl_usuario (id_sangue, nome_usuario, sobrenome_usuario, sexo, cpf, rg, data_nascimento) 
    VALUES ('$id_sangue','$nome', '$sobrenome', '$sexo', '$cpf','$rg', '$data_nascimento')";
}

$resultadoInsert = mysqli_query($conexao, $tblUsuario) or die ("Erro no retorno de dados");

mysqli_close();







?>