<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("../PHPMailer/src/PHPMailer.php");
include("../PHPMailer/src/SMTP.php");
include("../PHPMailer/src/Exception.php");

$postBody = file_get_contents("php://input");
$decodedJson=json_decode($postBody);
$emailCliente = $decodedJson->emailCliente;
$mensagemCliente = "De: ".$emailCliente."\n\nMensagem: ".$decodedJson->mensagemCliente;
$erroCliente = 0;

class retornoInfo{
    public $erroCliente;
    public $emailCliente;
	public $mensagemCliente;
}

// Configurações do servidor SMTP
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'webdomain03.dnscpanel.com';  // Endereço do servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'username';  // Seu endereço de e-mail
$mail->Password = 'password';  // Sua senha de e-mail
$mail->SMTPSecure = 'ssl';  // Tipo de criptografia (tls ou ssl)
$mail->Port = 465;  // Porta do servidor SMTP

// Configurações do e-mail
$mail->setFrom($emailCliente);
$mail->addAddress('geral@vipdesign.pt', 'GERAL - VIPDESIGN');
$mail->addCC($emailCliente, 'Cópia de mensagem - pedido de informação');
$mail->addCC('vipdesignpt@gmail.com', 'Cópia de mensagem - pedido de informação');
$mail->Subject = 'Pedido de informação';
$mail->Body = $mensagemCliente;
$mail->CharSet = 'UTF-8';
$mail->addCustomHeader('Content-Type: text/plain; charset=UTF-8;');

// Enviar o e-mail
if ($mail->send()) {
    $erroCliente=0;
} else {
    $erroCliente =1;
}

header('Content-Type: application/json');
$mensagemInfo = new retornoInfo();
$mensagemInfo-> erroCliente = $erroCliente;
$mensagemInfo-> emailCliente = $emailCliente;
$mensagemInfo-> mensagemCliente = $mensagemCliente;
$jsonReturn=json_encode($mensagemInfo);
echo($jsonReturn);
?>