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

if(isset($_POST['nombre'], $_POST['correo'], $_POST['motivo'], $_POST['mensaje'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];

    $body = "<b>Nombre:</b> " . $nombre . "<br><b>Correo:</b> " . $correo . "<br><br>" . $mensaje;


    
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contacto.asonaema@gmail.com';                     //SMTP username
        $mail->Password   = 'ASONAEMA@contacto20';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('contacto.asonaema@gmail.com', $nombre);
        $mail->addAddress('contacto.asonaema@gmail.com');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
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