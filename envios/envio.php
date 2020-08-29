<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization,Content-Type,Accept,Origin,User-Agent,DNT,Cache-Control,X-Mx-ReqToken,Keep-Alive,X-Requested-With,If-Modified-Since");
header('Access-Control-Allow-Methods: GET, POST, PUT');

include_once "../admin/server/class_sql.php";

//echo "HOLA";

$objDatos = file_get_contents("php://input");
//var_dump($objDatos);
$array = json_decode($objDatos, True);

//print_r($array);

$id = $array['id'];

$sql = new Sql;
foreach($array as $key=>$dato){
    if($dato !='id'){
        $sql->edit('pedidos',$key,$dato,'id',$id);
    }
}

$mal = $sql->getMal();
if($mal>0){
    echo "Hubo $mal errores, pruebe mas tarde...";
}else{
    echo "Realizamos la edicion con exito!";
}


//ENVIO DE EMAILS //

include_once '../admin/server/class.phpmailer.php';
include_once '../admin/server/class.smtp.php';

  
$smtpHost = "c1881137.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "admin@plouton.com.ar";  // Mi cuenta de correo
$smtpClave = "Pl0ut0n572";  // Mi contraseña

$cuerpo = "Hola ".$array['nombre'].", gracias por ingresar los datos del envio! :) \n\n";
//$cuerpo .= "Es el ID n�mero: ".$array['id']."\n";
$cuerpo .= "Porfa te pido que me envies el comprobante de pago \n";
$cuerpo .= "Cualquier duda mi celu es 11 5 837 3644 \n\n";
if($array['entrega_servicio']=="cbu"){
    $cuerpo .= "Te recuerdo mi CBU \n";
    $cuerpo .= "banco icbc \n";
    $cuerpo .= "Caja de Ahorro $ 0507/01125002/75 \n";
    $cuerpo .= "CBU: 0150507801000125002757 \n";
    $cuerpo .= "CUIT 27312832270 \n"; 
    $cuerpo .= "MARIA FLORENCIA DEMARIE \n\n";
}
$cuerpo .= "DATOS DE ENVIO: \n\n";
$cuerpo .= "provincia: ".$array['entrega_provincia']." \n";
$cuerpo .= "localidad: ".$array['entrega_cuidad']." \n";
$cuerpo .= "domicilio: ".$array['entrega_direccion']." \n";

//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo .= "CP: ".$array['entrega_cp']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo .= "Paga por: ".$array['entrega_servicio']." \n";
$cuerpo .= "Precio: ".$array['entrega_codigo']." \n";
$cuerpo .= "Que tengas linda semana! \n\n";

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
$mail->FromName = $array['nombre'];
$mail->AddAddress($array['email']); 
$mail->AddReplyTo("pedidos@plouton.com.ar"); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail->Subject = "PLOUTON ha recibido tu Domicilio :)"; // Este es el titulo del email.
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
        echo "Ocurrió un error inesperado.";
       
    }
   
// ENVIO DE EMAIL A PEDIDOS@PLOUTON.COM.AR

$smtpHost2 = "dtc020.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario2 = "admin@plouton.com.ar";  // Mi cuenta de correo
$smtpClave2 = "Pl0ut0n572";  // Mi contraseña

$cuerpo2 = "Hola Flor, nos ha llegado un ENVIO A DOMICILIO via WEB :) \n\n";
$cuerpo2 .= "DATOS DEL COMPRADOR - ID ".$array['id']."- \n\n";
$cuerpo2 .= "Nombre: ".$array['nombre']." \n";
$cuerpo2 .= "Email: ".$array['email']." \n";
//$cuerpo2 .= "Telefono: ".$array['celular']." \n\n";
$cuerpo2 .= "DATOS DE ENVIO: \n\n";
$cuerpo2 .= "provincia: ".$array['entrega_provincia']." \n";
$cuerpo2 .= "localidad: ".$array['entrega_cuidad']." \n";
$cuerpo2 .= "domicilio: ".$array['entrega_direccion']." \n";

//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo2 .= "CP: ".$array['entrega_cp']." \n";
//$cuerpo2 .= "Modelo: ".$array['modelo']." \n\n";
$cuerpo2 .= "Paga por: ".$array['entrega_servicio']." \n";
$cuerpo2 .= "Precio: ".$array['entrega_codigo']." \n";
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

$mail2->From = $smtpUsuario2; // Email desde donde envío el correo.
$mail2->FromName = "PEDIDOS WEB - PLOUTON.COM.AR";
$mail2->AddAddress("pedidos@plouton.com.ar"); 
$mail2->addCC('demarieflor.arq@gmail.com');
$mail2->AddReplyTo("admin@plouton.com.ar"); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
$mail2->Subject = "HEMOS RECIBIDO DATOS DE ENVIO DE UN PEDIDO DE ".$array['nombre']." VIA WEB :)"; // Este es el titulo del email.
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
        echo "Ocurrió un error inesperado.";
       
    }
      
   
