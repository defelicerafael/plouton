<?php
header("Content-Type: text/html;charset=utf-8");
$modelo = filter_input(INPUT_GET, 'm', FILTER_SANITIZE_SPECIAL_CHARS);
$elemento = filter_input(INPUT_GET, 'e', FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_SPECIAL_CHARS);

require_once '../colores.php';


?>
<!DOCTYPE html>
<html>
    <head>
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
        <link rel="stylesheet" type="text/css" href="../css/noche.css">
        <link rel="stylesheet" type="text/css" href="../css/plouton.css">
        <meta name="description" content="PLOUTON - ASTRO DESIGN - ">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        
    
        <meta property="og:url"           content="http://plouton.com.ar" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:description"   content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:image"         content="https://plouton.com.ar/img/carta_natal/PLOUTON_GRIEGO_CELU.png" />
    </head>
    <body>
        <?php include_once "../templates/top_nav.php";?>
        <div class="my-5">
            <br/>
        </div>
        
        <h4 class="greek text-center my-5 fadein" id="disenios">el dise&ntilde;o que quer&eacute;s</h4>
        
        <div class="row no-gutters align-items-center fadein">
            <div class="col-12 col-sm-12 col-lg-6 col-md-6 text-center order-1">   
                <div class="row justify-content-center no-gutters greek ">
                    <div class="carta_natal_acrab_negrob" style="background-color: <?php echo $colores[$color]?>">
                        <img src="<?php
                        if($modelo=='antares'){
                            echo $antares[$elemento];
                            
                        }
                        if($modelo=='acrab'){
                            echo $acrab[$elemento];
                            
                        }
                        if($modelo=='estrellas'){
                            echo $estrellas['estrellas'];
                            
                        }
                        ?>" alt="" title="" class="carta_natal_img" id="carta_natal_imgb">
                    </div>
                </div>   
            </div>
            <div class="col-12 col-sm-12 col-lg-6 col-md-6 text-center order-1 mt-sm-3">   
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="hometab" data-toggle="tab" href="#datos" role="tab" aria-controls="datos" aria-selected="false">Datos</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link disabled" id="profiletab" data-toggle="tab" href="#compra" role="tab" aria-controls="compra" aria-selected="true">Compra</a>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="datos" role="tabpanel" aria-labelledby="datos-tab">
                        <div class="row justify-content-center no-gutters greek ">
                            <form onsubmit="compra.compra(); return false;" id="formElem">
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="name">tu nombre *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email">tu email *</label>
                                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos esta informaci&oacute;n.</small>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="celular">tu celular *</label>
                                        <input name="celular" type="text" class="form-control" id="celular" aria-describedby="celular" required>
                                        <small id="celularHelp" class="form-text text-muted">Nunca compartiremos esta informaci&oacute;n.</small>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="carta_nombre">es la carta natal de *</label>
                                        <input type="text" class="form-control" id="carta_nombre" aria-describedby="carta_nombre" name="carta_nombre" required>
                                    </div>
                                    
                                </div>    
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="fecha">que naci&oacute; el d&iacute;a *</label>
                                        <input type="date" class="form-control" id="fecha" aria-describedby="fecha" name="fecha" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="horario">a las *</label>
                                        <input type="time" class="form-control" id="horario" aria-describedby="horario" name="horario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="horario">en el pais*</label>
                                    <input type="text" class="form-control" id="pais" aria-describedby="pais" name="pais" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-6">
                                        <label for="horario">en la provincia de *</label>
                                        <input type="text" class="form-control" id="provincia" aria-describedby="provincia" name="provincia" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="horario">y la ciudad de *</label>
                                        <input type="text" class="form-control" id="ciudad" aria-describedby="ciudad" name="ciudad" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary greek">siguiente</button>
                            </form>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="compra" role="tabpanel" aria-labelledby="compra-tab">
                        <div class="row justify-content-center no-gutters greek ">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Marco</label>
                                    <select class="form-control" id="marco" required>
                                        <option value=""></option>
                                        <option value="madera_claro">madera claro</option>
                                        <option value="blanco">blanco</option>
                                        <option value="negro">negro</option> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">tama&ntilde;o</label>
                                    <select class="form-control" id="tamano" required onchange="compra.verhoja();return false;">
                                        <option value=""></option>
                                        <option value="a4">20 x 30 cm</option>
                                        <option value="a3">30 x 40 cm</option>    
                                    </select>
                                </div>
                                <div id="precio" class="flopu greek"></div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">forma de pago</label>
                                    <select class="form-control" id="formadepago" onchange="compra.changeF(); return false;" required>
                                        <option value=""></option>
                                        <option value="mercadopago">mercado pago</option>
                                       <!-- <option value="efectivo">efectivo a contra entrega</option> -->   
                                        <option value="cbu">cbu</option>
                                    </select>
                                </div>
                                <div id="botonmercadopago" class="fadein">
                                    <h4 class="flopu greek">pagar con mercado pago</h4>
                                    <!--<button  type="submit" class="btn btn-outline-secondary greek">realizar el pedido</button>-->
                                    <a  href="" onclick="compra.pagar();" class="btn btn-outline-secondary greek" id="boton_mercadopago" target="_blank"></a>
                                </div>
                                <div id="cbu" class="fadein p-lg-1 px-2">
                                    <p class="greek flopu text-left">
                                        <br/>banco icbc
                                        <br/>Caja de Ahorro $ 0507/01125002/75
                                        <br/>CBU: 0150507801000125002757
                                        <br/>CUIT 27312832270
                                        <br/>MARIA FLORENCIA DEMARIE
                                    </p>
                                </div>     
                                    <button  onclick="compra.pagar();return false;" class="btn btn-outline-secondary greek" id="btn_enviar"> realizar el pedido</button>
                                    <button class="btn btn-outline-secondary greek" style="display:none;" type="button" disabled id="btnEnviando">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Realizando el pedido...
                                    </button>
                                    <h3 id="resultado" class="greek text-center"></h3>
                                   
                                <!--<div id="contraentrega" class="fadein">
                                    <h4 class="greek flopu">pagar a contra entrega</h4>
                                    <button  onclick="compra.pagar();return false;" class="btn btn-outline-secondary greek">realizar el pedido</button>
                                </div>-->
                            </form>
                        </div> 
                    </div>
                    
                </div>
                  
            </div>
        </div>
        
       <!-- <?php //include_once "../templates/contact.html";?>-->
        <?php include_once "../templates/footer.html";?>
        
        
        <script async src="../js/compra.js"></script>
        <script async src="../js/aparece.js"></script>
        <script async src="../js/contact.js"></script>
        <!--<script src="js/runAll.js"></script>-->
        <script src="../js/jquery-3.4.1.slim.min.js"></script>
        <script async src="../js/popper.min.js"></script>
        <script async src="../js/bootstrap.min.js"></script>
        <!--<script async src="js/lazysizes.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--<script async src="https://kit.fontawesome.com/b0a7bbf264.js"></script>-->
        <!--<script async src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>-->
        
        <script>
        $(document).ready(function(){
           
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if ((this.hash !== "")&&(this.hash !== "#datos")&&(this.hash !== "#compra")) {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top}, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>
        
    </body>
</html>
