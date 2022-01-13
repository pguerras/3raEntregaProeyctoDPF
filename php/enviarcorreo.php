<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "cliente@digitalfactory.pe";
    $to = "pguerrasotelo@gmail.com";
    $subject = "Digital Factory - Prueba Envio de Correos";
    $message = "Estamos provando envio de correos";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    echo "El correo ha sido enviado.";

    /*
$to = "pguerrasotelo@gmail.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
 
mail($to, $subject, $message);
$name = $_POST['introducir_nombre'];
*/
header("Location:index.html");
?>