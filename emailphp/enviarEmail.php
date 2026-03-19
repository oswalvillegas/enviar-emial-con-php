<?php
if(!file_exists('PHPMailer-master/src/Exception.php')) {
    die('archivo no encontrado');
    exit;
}

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//diseño del html
$mensaje = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
 

</head>
<body>
    <h1>hola</h1>
    <p> Gracias por contactarnos</p>
</body>
</html>
';

$mail = new PHPMailer(true);

//configuraciones del servidor
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'nombre@gmail.com';
$mail->Password = 'calves de aplicación';

$mail->SMTPSecure = 'tls'; 
$mail->Port = 587;                                
//$mail->SMTPDebug  = 2; 


//cabecera del correo
   
$mail->setFrom('nombre@gmail.com', 'titulo');
$mail->addReplyTo('nombre@gmail.com', 'información'); // Importante para anti-spam

//correo que se le enviara el mensaje
$mail->addAddress('nombre2@gmail.com', 'nombre del usuario lo que quieras colocar');


//contenido html
$mail->isHTML(true);
$mail->Subject = 'Contacto';
$mail->Body = $mensaje;
$mail->AltBody = "hola mundo"; // Versión solo texto

$mail->send();




?>