<?php


$to = "destinatario@email.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: mi@cuentadeemail.com" . "\r\n" . "CC: destinatarioencopia@email.com";
 
mail($to, $subject, $message, $headers);




?>