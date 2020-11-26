<?php

//capturando os dados da tabela usuario + login
$nome=$_POST['NOME_USUARIO'];
$sobrenome=$_POST['SOBRENOME_USUARIO'];
$email=$_POST['EMAIL_USUARIO'];
$senha=$_POST['SENHA_USUARIO'];
$cpf=$_POST['CPF'];
$rg=$_POST['RG'];
$id_sangue=$_POST['ID_SANGUE'];
$sexo=$_POST['SEXO'];
$data_nascimento=$_POST['DATA_NASCIMENTO'];


echo $nome."<br>".$sobrenome."<br>".$email."<br>".$senha."<br>".$cpf."<br>".$rg."<br>".$id_sangue."<br>".$data_nascimento;
$tblUsuario="INSERT INTO tbl_usuario (id_sangue, nome_usuario, sobrenome_usuario, sexo, cpf, rg, data_nascimento) VALUES ('$id_sangue','$nome', '$sobrenome', '$sexo', '$cpf','$rg', '$data_nascimento')"; 

include ('conexao.php');

$resultadoInsert=mysqli_query($conexao, $tblUsuario) or die ("Erro no retorno de dados");

$selectTblUsuario="SELECT id_sangue FROM tbl_usuario WHERE cpf = '$cpf' and rg = '$rg'";

$resultadoSelect=mysqli_query($conexao, $selectTblUsuario) or die ("Erro no retorno de dados");

$registro=mysqli_fetch_array($resultadoSelect);

$posicaoidUsuario=$registro[0];
echo '<br>'.$posicaoidUsuario;





?>