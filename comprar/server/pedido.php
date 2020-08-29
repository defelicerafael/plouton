<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization,Content-Type,Accept,Origin,User-Agent,DNT,Cache-Control,X-Mx-ReqToken,Keep-Alive,X-Requested-With,If-Modified-Since");
header('Access-Control-Allow-Methods: GET, POST, PUT');
include_once 'class_sql.php';

//echo "HOLA";

$objDatos = file_get_contents("php://input");
//var_dump($objDatos);
$array = json_decode($objDatos, True);
$array['fecha_de_compra'] = $hoy = date("Y-m-d");  
//$array['fecha_de_compra'] = curdate(); 
//print_r($array);

$sql = new Sql;
$insert = $sql->insert_array('pedidos',$array);

$last_id = $sql->getlastId('pedidos');


//ENVIO DE EMAILS //

include_once 'class.phpmailer.php';
include_once 'class.smtp.php';
/*
Array
(
    [nombre] => rafael defelice
    [email] => defelicerafael@gmail.com
    [carta_natal_nombre] => flopu
    [nacimiento] => 1984-10-25
    [hora] => 18:05
    [pais] => argentina
    [provincia] => buenos aires
    [ciudad] => caba
    [forma_de_pago] => efectivo
    [modelo] => antares
    [elemento] => tierra
    [color] => harbor
    [tamano] => a3
    [marco] => blanco
    [precio] => $2200
    [celular] => 1144370599
)

*/

  
$smtpHost = "c1881137.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "admin@plouton.com.ar";  // Mi cuenta de correo
$smtpClave = "Pl0ut0n572";  // Mi contraseÃ±a

$cuerpo = "Hola ".$array['nombre'].", gracias por tu compra! :) \n\n";
$cuerpo .= "Soy Flopu, ya recibí tu pedido! Es el ID número:".$last_id." \n";
//$cuerpo .= "Es el ID número: ".$array['id']."\n";
$cuerpo .= "Porfa te pido que me envies el comprobante de pago, para empezar a diseñarlo y encargar el marco \n";
$cuerpo .= "Una vez recibido el comprobante, el pedido estará listo en aproximadamente 20 d&iacute;as. \n\n";
$cuerpo .= " - ENVIO A DOMICILIO - \n";
$cuerpo .= "Los precios son: \n";
$cuerpo .= "CABA: $300 \n";
$cuerpo .= "GBA: $300 \n";
$cuerpo .= "INTERIOR: $400 \n";
$cuerpo .= "Para el envío a domicilio, cargá tu dirección en este link:\n"
        . " <a href='https://plouton.com.ar/envios/?id=".$last_id."'> - CARGAR MI DIRECCI&Oacute;N - </a> \n\n";
$cuerpo .= "O podés retirarlo personalmente por Victoria, San Fernando. \n\n";
$cuerpo .= "Podes conocer los avances de tu pedido haciendo clic aqu&iacute; \n"
        . " <a href='https://plouton.com.ar/seguimiento/?id=".$last_id."'> - AVANCES DE MI PEDIDO - </a> \n\n";


//$cuerpo .= "En breve me contacto con vos! \n";
$cuerpo .= "Cualquier duda mi celu es 11 5 837 3644 \n";
$cuerpo .= "Hacé clic en el logo de WhatsApp para comunicarte conmigo ;)\n";
$cuerpo .= "<a href='https://wa.me/5491158373644'>"
        . "<img alt='' title='' src='https://imagenpng.com/wp-content/uploads/2015/06/whatsapp_logo.png' style='width:50px; height:50px;'></a>\n";
if($array['forma_de_pago']=="cbu"){
    $cuerpo .= "Te recuerdo mi CBU \n";
    $cuerpo .= "banco icbc \n";
    $cuerpo .= "Caja de Ahorro $ 0507/01125002/75 \n";
    $cuerpo .= "CBU: 0150507801000125002757 \n";
    $cuerpo .= "CUIT 27312832270 \n"; 
    $cuerpo .= "MARIA FLORENCIA DEMARIE \n\n";
}
$cuerpo .= "TU PEDIDO: \n";
$cuerpo .= "DATOS DE LA CARTA: \n\n";
$cuerpo .= "Nombre: ".$array['carta_natal_nombre']." \n";
$cuerpo .= "Fecha de nacimiento: ".$array['nacimiento']." \n";
$cuerpo .= "Hora de nacimiento: ".$array['hora']." \n";
$cuerpo .= "Pais: ".$array['pais']." \n";
$cuerpo .= "Provincia: ".$array['provincia']." \n";
$cuerpo .= "Ciudad: ".$array['ciudad']." \n\n";
$cuerpo .= "DATOS DEL PEDIDO: \n\n";
$cuerpo .= "Modelo: ".$array['modelo']." \n";
$cuerpo .= "Elemento: ".$array['elemento']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo .= "Color: ".$array['color']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo .= "Marco: ".$array['marco']." \n";
$cuerpo .= "Tamaño: ".$array['tamano']." \n\n";
$cuerpo .= "DATOS DEL PAGO: \n\n";
$cuerpo .= "Precio: ".$array['precio']." \n";
$cuerpo .= "Forma de pago: ".$array['forma_de_pago']." \n\n";

$cuerpo .= "Chequealo! y que tengas linda semana! \n\n";

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

$mail->From = $smtpUsuario; // Email desde donde envÃ­o el correo.
$mail->FromName = $array['nombre'];
$mail->AddAddress($array['email']); 
$mail->AddReplyTo("pedidos@plouton.com.ar"); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail->Subject = "PLOUTON ha recibido tu pedido :)"; // Este es el titulo del email.
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
        echo "Gracias por realizar el pedido.<br/> lo redireccionaremos al home en 5 segundos :)";
        
    } else {
        echo "OcurriÃ³ un error inesperado.";
       
    }
   
// ENVIO DE EMAIL A PEDIDOS@PLOUTON.COM.AR

$smtpHost2 = "dtc020.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario2 = "admin@plouton.com.ar";  // Mi cuenta de correo
$smtpClave2 = "Pl0ut0n572";  // Mi contraseÃ±a

$cuerpo2 = "Hola Flor, nos ha llegado un PEDIDO via WEB :) \n\n";
$cuerpo2 .= "DATOS DEL COMPRADOR: \n\n";
$cuerpo2 .= "Nombre: ".$array['nombre']." \n";
$cuerpo2 .= "Email: ".$array['email']." \n";
$cuerpo2 .= "Telefono: ".$array['celular']." \n\n";
$cuerpo2 .= "DATOS DE LA CARTA: \n\n";
$cuerpo2 .= "Nombre: ".$array['carta_natal_nombre']." \n";
$cuerpo2 .= "Fecha de nacimiento: ".$array['nacimiento']." \n";
$cuerpo2 .= "Hora de nacimiento: ".$array['hora']." \n";
$cuerpo2 .= "Pais: ".$array['pais']." \n";
$cuerpo2 .= "Provincia: ".$array['provincia']." \n";
$cuerpo2 .= "Ciudad: ".$array['ciudad']." \n\n";
$cuerpo2 .= "DATOS DEL PEDIDO: \n\n";
$cuerpo2 .= "Modelo: ".$array['modelo']." \n";
$cuerpo2 .= "Elemento: ".$array['elemento']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo2 .= "Color: ".$array['color']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo2 .= "Marco: ".$array['marco']." \n";
$cuerpo2 .= "Tamaño: ".$array['tamano']." \n\n";
$cuerpo2 .= "DATOS DEL PAGO: \n\n";
$cuerpo2 .= "Precio: ".$array['precio']." \n";
$cuerpo2 .= "Forma de pago: ".$array['forma_de_pago']." \n";
//$cuerpo2 .= "En breve te contactaremos. \n\n";
//$cuerpo2 .= "Florencia es la encargada de tu pedido. Su celular es 11 5 837 3644 \n\n";
$cuerpo2 .= "Hacé clic en el logo de WhatsApp para comunicarte con tu cliente ;)\n";
$cuerpo2 .= "<a href='https://wa.me/549".$array['celular']."?text=Hola%21%20".$array['nombre']."%20.'>"
        . "<img alt='' title='' src='https://imagenpng.com/wp-content/uploads/2015/06/whatsapp_logo.png' style='width:50px; height:50px;'></a>\n";
$cuerpo2 .= "Que tengas una hermosa semana! \n\n";

$mail2 = new PHPMailer(true);
$mail2->IsSMTP();
//$mail->SMTPDebug = 2;
$mail2->SMTPAuth = true;
$mail2->Port = 587; 
$mail2->IsHTML(true); 
$mail2->CharSet = "utf-8";

$mail2->Host = $smtpHost; 
$mail2->Username = $smtpUsuario; 
$mail2->Password = $smtpClave;

$mail2->From = $smtpUsuario2; // Email desde donde envÃ­o el correo.
$mail2->FromName = "PEDIDOS WEB - PLOUTON.COM.AR";
$mail2->AddAddress("pedidos@plouton.com.ar"); 
$mail2->addCC('demarieflor.arq@gmail.com');
$mail2->AddReplyTo("admin@plouton.com.ar"); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail2->Subject = "HEMOS RECIBIDO UN PEDIDO DE ".$array['nombre']." VIA WEB :)"; // Este es el titulo del email.
$mensajeHtml2 = nl2br($cuerpo2);
$mail2->Body = "{$mensajeHtml2}"; // Texto del email en formato HTML
$mail2->AltBody = "{$mensaje2}"; // Texto sin formato HTML
                    // FIN - VALORES A MODIFICAR //
                    //$mail->SMTPSecure = 'ssl';
$mail2->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio2 = $mail2->Send(); 
    if($estadoEnvio2){
      echo "<br/>Te hemos enviado un email, chequealo!";
        
    } else {
        echo "OcurriÃ³ un error inesperado.";
       
    }
      
    
   