<?php
    $server="localhost";
    $user="root";
    $password="proa123";
    $bd="sangue_bom";

    $conexao=mysqli_connect($server, $user, $password, $bd);

    if (!$conexao){
        die("conexão falhou: ".mysqli_connect_error());
    }


?>