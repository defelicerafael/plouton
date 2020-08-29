<?php
require("class.phpmailer.php");
require("class.smtp.php");
/*
$nombre = "Rafael";
$email = "defelicerafael@gmail.com";
$telefono = "1144370599";
$comentario = "Prueba";
*/
if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) && isset($_POST["telefono"]) ){

function ValidarDatos($campo){
//Array con las posibles cabeceras a utilizar por un spammer
$badHeads = array("Content-Type:",
"MIME-Version:",
"Content-Transfer-Encoding:",
"Return-path:",
"Subject:",
"From:",
"Envelope-to:",
"To:",
"bcc:",
"cc:");
//Comprobamos que entre los datos no se encuentre alguna de
//las cadenas del array. Si se encuentra alguna cadena se
//dirige a una p�gina de Forbidden
foreach($badHeads as $valor){
if(strpos(strtolower($campo), strtolower($valor)) !== false){
header( "HTTP/1.0 403 Forbidden");
exit;
}
}
}
//Ejemplo de llamadas a la funcion
ValidarDatos($_POST['nombre']);
ValidarDatos($_POST['email']);
ValidarDatos($_POST['comentario']);    
ValidarDatos($_POST['telefono']);    
    
$nombre = $_POST["nombre"];
$email =  $_POST["email"];
$telefono = $_POST["telefono"];
$comentario = $_POST["comentario"];
    
$smtpHost = "c1881137.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "admin@plouton.com.ar";  // Mi cuenta de correo
$smtpClave = "Pl0ut0n572";  // Mi contraseña

$cuerpo = "Hola Plouton, a llegado un mensaje v&iacute;a web :) \n\n";
$cuerpo .= $nombre." se ha contactado por medio de nuestro formulario de contacto. \n\n";
$cuerpo .= "Su email es: ".$email."\n\n";
$cuerpo .= "tel&eacute;fono: ".$telefono."\n\n";
$cuerpo .= "Mensaje:".$comentario."\n\n";
$cuerpo.= " - Eso es todo, que tengas una linda semana! - ";

    
                             
$mail = new PHPMailer(true);
$mail->IsSMTP();
//$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress("info@plouton.com.ar"); 
                    //$mail->AddAddress($emailMili);
                    //$mail->AddAddress($emailJuli);// Esta es la dirección a donde enviamos los datos del formulario
$mail->AddReplyTo("admin@plouton.com.ar"); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail->Subject = "Te han contactado desde la WEB :)"; // Este es el titulo del email.
$mensajeHtml = nl2br($cuerpo);
$mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje}"; // Texto sin formato HTML
                    // FIN - VALORES A MODIFICAR //
                    //$mail->SMTPSecure = 'ssl';
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
    if($estadoEnvio){
        echo "El correo fue enviado correctamente.";
        
    } else {
        echo "Ocurrió un error inesperado.";
       
    }
}          