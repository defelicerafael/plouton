<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = filter_input(INPUT_GET, 'id',FILTER_VALIDATE_INT);

//echo $id;
include_once "../admin/server/class_sql.php";

$sql = new Sql;
$columnas = $sql->showColumnNames('provincia');
$provincias = $sql->selectTablaNew('provincia','no','id','ASC','24');
$sql->connection->close();  



$sql2 = new Sql;
$columnas2 = $sql2->showColumnNames('pedidos');
$array = array('id'=>$id);
$pedidos =  $sql2->selectTablaNew('pedidos',$array,'id','ASC','1');
//print_r($pedidos);


?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167598668-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-167598668-1');
        </script>

        

        <title>PLOUTON - ASTRO DESIGN </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/plouton.css">
        <meta name="description" content="PLOUTON - ASTRO DESIGN - ">
        
        
    
        <meta property="og:url"           content="https://plouton.com.ar" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:description"   content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:image"         content="../img/carta_natal/PLOUTON_GRIEGO_CELU.png" />
    </head>
    <body>
        <?php include_once "../templates/top_nav_envios.php";?>
        <div class="container greek">
        <div class="row no-gutter align-items-center justify-content-start">
            <div class="col-md-6  p-5">
                <h4 class="text-left p-2">Hola <?php echo utf8_encode($pedidos[0]['nombre']);?>, &iquest;C&oacute;mo est&aacute;s?</h4>
                <h5 class="text-left p-2">
                    Te comento los precios del envio a domicilio:
                    <br/><br/>
                    C.A.B.A y GRAN BS. AS - $300.
                    <br/>
                    INTERIOR DEL PA&Iacute;S - $400.
                </h5>
                <h6 class="p-1">Se pagan por Mercado pago o por CBU<br/>
                    Por favor complet&aacute; el formulario.</h6>
                <h6 class="greek flopu text-left">
                    <br/>banco icbc
                    <br/>Caja de Ahorro $ 0507/01125002/75
                    <br/>CBU: 0150507801000125002757
                    <br/>CUIT 27312832270
                    <br/>MARIA FLORENCIA DEMARIE
                    <br/> Es necesario enviar el comprobante del pago a <a href="mailto:pedidos@plouton.com.ar">pedidos@plouton.com.ar</a>
                </h6>
            </div>
            <div class="col-md-6 justify-content-center p-md-5 p-3">
            <div class="m-md-5"></div>
            <form onsubmit="pagar(); return false;">
                <input id="nombre" value="<?php echo utf8_encode($pedidos[0]['nombre']);?>" type="hidden">
                <input id="email" value="<?php echo $pedidos[0]['email'];?>" type="hidden">
                <input id="id_pedido" value="<?php echo $pedidos[0]['id'];?>" type="hidden">
                <div class="form-group">
                    <label for="provincias">Provincia</label>
                    <select class="form-control" id="provincias" onchange="loadDoc();return false;" name="entrega_provincia" required>
                        <option value="">Elegir...
                        <?php
                            for($i=0;$i<count($provincias);$i++){
                        ?>
                        <option value="<?php echo $provincias[$i]['id'];?>"><?php echo utf8_encode($provincias[$i]['nombre']);?>
                        <?php
                            }
                        ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="provincias">Localidad</label>
                    <select class="form-control" id="localidad" onchange="loadCP(this.value);return false;" name="entrega_ciudad" required>
                        <option value="">Elija primero una provincia...
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion">Direcci&oacute;n</label>
                    <input type="text" class="form-control" id="direccion" name="entrega_direccion" aria-describedby="direccion" placeholder="Si es departamento ingrese piso, letra etc" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">C&oacute;digo Postal</label>
                    <input type="text" class="form-control" id="codigopostal" name="entrega_cp" aria-describedby="codigopostal" placeholder="Su CP por favor" required>
                </div>
                <div class="form-check form-check-inline my-3">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="casa" value="casa" checked>
                    <label class="form-check-label" for="casa">Casa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="departamento" value="departamento">
                    <label class="form-check-label" for="inlineRadio2">departamento</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="local" value="local">
                    <label class="form-check-label" for="local">Local</label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">forma de pago</label>
                    <select class="form-control" id="formadepago" required>
                        <option value=""></option>
                        <option value="mercadopago">mercado pago - ser&aacute; redireccionado cuando finalice el envio</option>
                        <option value="cbu">cbu - deber&aacute; enviar comprobante de pago luego de finalizar el envio</option>
                    </select>
                </div>
               
                <div id="finalizar_compra" class="fadein p-lg-1 px-2">
                    <button  type="submit" class="btn btn-outline-secondary greek">Finalizar envio</button>
                </div> 
                <h3 id="resultado"></h3>
                    
            </form>
            </div>    
        </div>
        </div>
        
        <script>
            
            
        function loadDoc() {
            var provincias = document.getElementById("provincias").value;
            var localidad = document.getElementById("localidad");
            var options = '<option value=""> Elija localidad </option>';
          //  console.log(provincias);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState === 4 && this.status === 200) {
               // console.log(this.responseText);
                var myJSON = JSON.parse(this.responseText);
               // console.log(myJSON);
                for (i = 0; i < myJSON.length; i++) {
                    options +='<option value="'+myJSON[i].codigopostal+'">'+ myJSON[i].nombre+'</option>';
                }
                
                localidad.innerHTML = options;
                
              }
            };
            xhttp.open("GET", "../admin/server/traerLocalidades.php?id="+provincias, true);
            xhttp.send();
        }
        // FUNCION CODIGO POSTAL //
        
        function loadCP(v){
           // console.log(v);
            var codigopostal = document.getElementById("codigopostal").value = v;
        }
        
        // FUNCION PAGAR //
        
        
        function pagar(){
          // VARIABLES//  
          var provincias = document.getElementById("provincias").value;
          var provincias_index = document.getElementById("provincias").selectedIndex;
          var provincias_options = document.getElementById("provincias").options;
          var provincia = provincias_options[provincias_index].text;
          
          var localidad_index = document.getElementById("localidad").selectedIndex;
          var localidad_options = document.getElementById("localidad").options;
          var localidad = localidad_options[localidad_index].text;
          
          var codigopostal = document.getElementById("codigopostal").value;
          var direccion = document.getElementById("direccion").value;
          var formadepago = document.getElementById("formadepago").value;
          
          var nombre = document.getElementById("nombre").value;
          var email = document.getElementById("email").value;
          var id_pedido = document.getElementById("id_pedido").value;
          
          var precio = 0;
          
          // ULTIMO CHEQUEO//
            if(codigopostal ===""){
              alert("Ponga un CP");
              return;
          }
          if(provincias ===""){
              alert("Elija una provincia");
              return;
          }
          if(localidad ===""){
              alert("Elija una localidad");
              return;
          }
          if(direccion ===""){
              alert("Elija una direcci&oacute;n");
              return;
          }
          if(formadepago ===""){
              alert("Elija una forma de pago");
              return;
          }
          
          // LOS DATOS//
          
          
          
          var boton_mercadopago;
       // CUANTO LE VOY A COBRAR
           if(provincias==='1'){
                precio = 300;
                boton_mercadopago="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=25246282-7e683f9a-c604-4de0-9fba-15c7a2c6eb17";
            }else if (provincias==='2'){
                if((codigopostal<1901)&&(codigopostal>1601)){
                    precio=300;
                    boton_mercadopago="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=25246282-7e683f9a-c604-4de0-9fba-15c7a2c6eb17";
                }else{
                    precio=400;
                    boton_mercadopago="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=25246282-2adece72-81d4-49f5-91f8-206d3b544d72";
                } 
            }else{
                precio=400;
                boton_mercadopago="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=25246282-2adece72-81d4-49f5-91f8-206d3b544d72";
            }
            
            var data = {};
            
            data.entrega_provincia = provincia;
            data.entrega_cuidad = localidad;
            data.entrega_direccion = direccion;
            data.entrega_cp = codigopostal;
            data.entrega_servicio = formadepago;
            data.entrega_codigo = precio;
            data.nombre = nombre;
            data.email = email;
            data.id = id_pedido;
           // console.log(provincia,localidad,codigopostal,direccion,formadepago,nombre, email, id_pedido,precio);
            
           
            var d = JSON.stringify(data);
            // GUARDAR EL PEDIDO//
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    if(formadepago==='mercadopago'){  
                        document.getElementById("resultado").innerHTML = "Domicilio cargado correctamente...<br/>Abriendo Mercado Pago...";
                        setTimeout(
                            function(){window.location = boton_mercadopago;
                        }, 3000); //tiempo expresado en milisegundos  */
                    }else{
                        document.getElementById("resultado").innerHTML = this.responseText;
                        setTimeout(
                            function(){window.location = "https://plouton.com.ar/";
                        }, 3000); //tiempo expresado en milisegundos  */
                    }
                }
            };
            xhttp.open("POST", "envio.php", true);
            xhttp.setRequestHeader("Content-type", "application/json;charset=UTF-8");
            xhttp.send(d);
            
        
    }
        </script>    
            
        
    </body>
</html>    