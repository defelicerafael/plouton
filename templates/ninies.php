<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<?php 
require_once 'colores_estrellitas.php';
?>
<div id="estrellitas"></div>
<h4 class="greek text-center mt-5 aparece p-2" id="disenios">estrellas</h4>
<p class="p-3 p-lg-5 p-md-5 p-sm-3 text-justify text-lg-left text-md-left greeklower aparece">
    <i>Cada signo del zod&iacute;aco corresponde una constelaci&oacute;n de estrellas que est&aacute;n en el cielo.</i>
    <br/>
 
    Las estrellas m&aacute;gicamente aparecen en la oscuridad para iluminarnos y hechizarnos con su misterio e inmensidad. M&aacute;s all&aacute; del clima y nuestro estado &aacute;nimo, d&iacute;a y noche ellas siempre est&aacute;n ah&iacute;. 
    <br/>
    Cada uno de nosotros tenemos en nuestro interior una constelaci&oacute;n de estrellas que irradiamos para hacer brillar este universo maravilloso. 


</p>


<h4 class="greek text-center mt-2 aparece p-2" id="disenios" >&iquest;c&oacute;mo me encarg&aacute;s la tuya?</h4>
<div class="mb-5 aparece mt-3">
    <ul class="text-left mx-auto d-block comohago greeklower aparece">
        <li>
            <p>Seleccion&aacute; el color que m&aacute;s te guste.</p>
        </li>
        <li>
            <p>Hac&eacute; clic en "Seleccionar este dise&ntilde;o".</p>
        </li>
        <li>
            <p>Complet&aacute; tus datos.</p>
        </li>
        <li>
            <p>Eleg&iacute; el color del marco.</p>
        </li>
        <li>
            <p>Disfrutalo!</p>
        </li>
    </ul>    
   
</div> 
<div class="row no-gutters align-items-center aparece">
    <div class="col-12 col-sm-12 col-lg-12 col-md-12 text-center order-1">   
        <div class="row justify-content-center no-gutters greek ">
            <div class="carta_natal_acrab_negrob" id="estrellitasA">
                <img src="img/home/Constelaciones_Web.png" alt="" title="" class="carta_natal_img_ninies" id="ninies_img">
            </div>
        </div>   
        <div class="text-center mt-3">    
            <?php
            foreach($colores_estrellitas as $k=>$v){
            ?>
                <button type="button" class="btn rounded-circle colores" onclick="changec.changeColorE('<?php echo $v;?>','<?php echo $k;?>');" style="background-color:<?php echo $v;?>;"></button>
            <?php 
            }
            ?>
            
            <div class="mt-4">
                <button type="button" onclick="changec.comprarEstrellitas();" title="" class="btn btn-outline-secondary greek">seleccionar este dise&ntilde;o</button>
            </div>
        </div>  
    </div>
</div>


 