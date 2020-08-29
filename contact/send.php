<?php
$nombre = "Rafael Defelice";
$email = "defelicerafael@gmail.com";
$comentario = "Esto es una prueba";
$telefono = "1144370599";

//echo $nombre;

//if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["comentario"]) && isset($_POST["telefono"]) ){
    
    
    
    
    $to = "info@plouton.com.ar";
    $subject = "Mensaje Enviado";
    $contenido = "Hola Plouton, a llegado un mensaje vía web :) \n\n";
    $contenido .= $nombre." se ha contactado por medio de nuestro formulario de contacto. \n\n";
    $contenido .= "Su email es: ".$email."\n\n";
    $contenido .= "teléfono: ".$telefono."\n\n";
    $contenido .= "Mensaje:".$comentario."\n\n";
    $contenido .= " - Eso es todo, que tengas una linda semana! - ";
    
    $header = "From: admin@plouton.com.ar\nReply-To:".$email."\n";
    $header .= "Mime-Version: 1.0\n";
    $header .= "Content-Type: text/plain";
    
  if(mail($to, $subject, $contenido ,$header)){
        $a = "Su mensaje ha sido enviado correctamente";
        echo $a;

    }else{
       $a = "NO hemo podido enviar su mensaje... <br/> Envianos un email manualmente a info@plouton.com.ar";
       echo $a;
       $errorMessage = error_get_last()['message'];
       print_r(error_get_last());
    }
    
//}
