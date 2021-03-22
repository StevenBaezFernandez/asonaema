<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if(isset($_GET['nombre'], $_GET['correo'], $_GET['motivo'], $_GET['mensaje'])){
    $nombre = $_GET['nombre'];
    $correo = $_GET['correo'];
    $motivo = $_GET['motivo'];
    $mensaje = $_GET['mensaje'];

    $body = "<b>Nombre:</b> " . $nombre . "<br><b>Correo:</b> " . $correo . "<br><br>" . $mensaje;
    
    $mail = new PHPMailer(true);
    
    try {        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contacto.asonaema@gmail.com';
        $mail->Password   = 'ASONAEMA@contacto20';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
    
        //Recipients
        $mail->setFrom('contacto.asonaema@gmail.com', $nombre);
        $mail->addAddress('contacto.asonaema@gmail.com');
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = $motivo;
        $mail->Body    = $body;
        $mail->CharSet = "UTF-8";    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}else{
    echo"datos no recibidos";
}

?>