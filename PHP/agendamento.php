<?php 
session_start();
include_once('conexao.php');
$tipoDoacao = $_POST['tipo'];
$local = $_POST['local'];
$data = $_POST['dia'];
$horario = $_POST['horario'];

echo $tipoDoacao." ".$local." ".$data." ".$horario; 

echo $_SESSION['idusuario'];



?>