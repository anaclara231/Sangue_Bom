<?php
include('validacpf.php');

include_once('conexao.php');
//capturando os dados da tabela usuario + login
$nome=$_POST['NOME_USUARIO'];
$sobrenome=$_POST['SOBRENOME_USUARIO'];
$email=$_POST['EMAIL_USUARIO'];
$senha=$_POST['SENHA_USUARIO'];
$senha2=$_POST['SENHA_USUARIO2'];
$cpf=$_POST['CPF'];
$rg=$_POST['RG'];
$id_sangue=$_POST['SANGUE'];
$sexo=$_POST['SEXO'];
$data_nascimento=$_POST['DATA_NASCIMENTO'];


//capturando os dados da tabela telefone usuario
$telefone=$_POST['NUM_TELEFONE'];
$cidade=$_POST['CIDADE'];
$estado=$_POST['ESTADO'];
$cep=$_POST['CEP'];
$rua=$_POST['RUA'];
$numero=$_POST['NUMERO'];
$bairro=$_POST['BAIRRO'];

$cpfBanco = limpaCPF_CNPJ($cpf);
$rgBanco = limpaCPF_CNPJ($rg);
$telefoneBanco = limpaCPF_CNPJ($telefone);
$cepBanco= limpaCPF_CNPJ($cep);

// verificando se o cpf ou email já está cadastrado // 
 
$emailVerify = "SELECT email_usuario from tbl_login_usuario where email_usuario = '$email'";
$cpfVerify = "SELECT cpf from tbl_usuario where cpf = '$cpfBanco'";

// efetuando a consulta no banco de dadaos // 

$selectVerify1 = mysqli_query($strcon, $emailVerify);
$selectVerify2 = mysqli_query($strcon, $cpfVerify);

// efetuando a consulta no banco de dadaos // 
$verifyEmail= mysqli_fetch_array($selectVerify1);
$verifyCPF= mysqli_fetch_array($selectVerify2);

session_start();
$_SESSION['verificacaocpf'] = $verifyCPF['cpf'];


// Se já existir algum dos dados, retornar mensagem de erro. Caso contrário, cadastrar o usuario // 
if($verifyEmail) {
    die("O email".$verifyEmail[0]."já existe!");
}else{
    $emailIsValid = true;
}
if($VerifyCPF) {
    die("O cpf".$verifyCPF[0]."já existe!");
}else{
    $cpfIsValid = true;
}

if ($cpfIsValid and $emailIsValid){

    if(!$strcon){
        die("conexão falhou: ".mysqli_connect_error());
        }else{


    if($senha == $senha2){ 
    $tblUsuario="INSERT INTO tbl_usuario (id_sangue, nome_usuario, sobrenome_usuario, sexo, cpf, rg, data_nascimento) VALUES ('$id_sangue','$nome', '$sobrenome', '$sexo', '$cpfBanco','$rgBanco', '$data_nascimento')";
    $resultadoInsert = mysqli_query($strcon, $tblUsuario);
    }else{
        die("As senha não correspondem!".mysqli_close());
        }


}
if(!$resultadoInsert) {
    die("Não foi possivel enviar");
}
else{
    $selectTblUsuario= "SELECT id_usuario FROM tbl_usuario WHERE cpf = '$cpfBanco' and rg = '$rgBanco'";

$resultadoSelect=mysqli_query($strcon, $selectTblUsuario) or die ("Erro no retorno de dados0");

$registro = mysqli_fetch_array($resultadoSelect);

$idUsuario = $registro[0];


$insertLogin = "INSERT INTO tbl_login_usuario(id_usuario, email_usuario, senha_usuario) 
VALUES('$idUsuario', '$email', '$senha')";

$resultadoInsert=mysqli_query($strcon, $insertLogin) or die ("Erro no retorno de dados1");

$insertEndereco = "INSERT INTO tbl_endereco_usuario(id_usuario, cep, estado, cidade, bairro, rua, numero)  
VALUES('$idUsuario', '$cepBanco', '$estado', '$cidade', '$bairro', '$rua', '$numero')";

$resultadoInsert2=mysqli_query($strcon, $insertEndereco) or die ("Erro no retorno de dados2");

$insertTelefone = "INSERT INTO tbl_contato_usuario(id_usuario, telefone_usuario, id_tipo_telefone)  
VALUES('$idUsuario','$telefoneBanco', 1)";

$resultadoInsert3=mysqli_query($strcon, $insertTelefone) or die ("Erro no retorno de dados3");

echo "<script>
window.location.href='../login.html'
</script>";
}
}else echo "CPF ou Email nao validado.";
    mysqli_close($strcon);
?>