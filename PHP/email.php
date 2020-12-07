<?php
date_default_timezone_set('America/Sao_Paulo');
 
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {
 
	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
 
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'sanguebomofc2@gmail.com';
	$mail->Password = 'sanguebom3010';
	$mail->Port = 587;
 
	$mail->setFrom($email);
	$mail->addAddress('sanguebomofc2@gmail.com');
 
	$mail->isHTML(true);
	$mail->Subject = "Contato com a Sangue Bom";
	$mail->Body = "Nome: ".$nome."<br>".
				   "Email: ".$email."<br>".
				   "Mensagem: ".$mensagem;
 
	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email não enviado.';
	}
} else {
	echo 'Não enviado: informar o email e a mensagem.';
}

?>