<?php
header("Content-Type: text/html;charset=utf-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$id = filter_input(INPUT_GET, 'id',FILTER_VALIDATE_INT);

//echo $id;
include_once "../admin/server/class_sql.php";


$sql = new Sql;
$columnas = $sql->showColumnNames('pedidos');
$array = array('id'=>$id);
$pedidos =  $sql->selectTablaNew('pedidos',$array,'id','ASC','1');
/*
echo "<pre>";
print_r($pedidos);
echo "</pre>";
*/
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
        <link rel="stylesheet" type="text/css" href="../css/noche.css">
        <link rel="stylesheet" type="text/css" href="../css/plouton.css">
        <meta name="description" content="PLOUTON - ASTRO DESIGN - ">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        
    
        <meta property="og:url"           content="https://plouton.com.ar" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:description"   content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:image"         content="img/carta_natal/PLOUTON_GRIEGO_CELU.png" />
    
        <style>
        * {
          box-sizing: border-box;
        }

        body {
          background-color: #474e5d;
         
          height: 200%;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline {
          position: relative;
          max-width: 1200px;
          margin: 0 auto;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline::after {
          content: '';
          position: absolute;
          width: 6px;
          background-color: white;
          top: 0;
          bottom: 0;
          left: 50%;
          margin-left: -3px;
        }

        /* Container around content */
        .container-timeline {
          padding: 10px 40px;
          position: relative;
          background-color: inherit;
          width: 50%;
        }

        /* The circles on the timeline */
        .container-timeline::after {
          content: '';
          position: absolute;
          width: 25px;
          height: 25px;
          right: -17px;
          background-color: white;
          border: 4px solid white;
          top: 15px;
          border-radius: 50%;
          z-index: 1;
        }

        /* Place the container to the left */
        .left {
          left: -5px;
        }

        /* Place the container to the right */
        .right {
          left: 50.3%;
        }

        /* Add arrows to the left container (pointing right) */
        .left::before {
          content: " ";
          height: 0;
          position: absolute;
          top: 22px;
          width: 0;
          z-index: 1;
          right: 30px;
          border: medium solid white;
          border-width: 10px 0 10px 10px;
          border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .right::before {
          content: " ";
          height: 0;
          position: absolute;
          top: 22px;
          width: 0;
          z-index: 1;
          left: 30px;
          border: medium solid white;
          border-width: 10px 10px 10px 0;
          border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .right::after {
          left: -16px;
        }

        /* The actual content */
        .content {
          padding: 20px 30px;
          background-color: white;
          position: relative;
          border-radius: 6px;
        }

        .activo{
            display: block;
        }
        .no-mostrar{
            display: block;
        }
        
        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {
          /* Place the timelime to the left */
          .timeline::after {
          left: 31px;
          }

          /* Full-width containers */
          .container-timeline {
          width: 100%;
          padding-left: 70px;
          padding-right: 25px;
          }

          /* Make sure that all arrows are pointing leftwards */
          .container-timeline::before {
          left: 60px;
          border: medium solid white;
          border-width: 10px 10px 10px 0;
          border-color: transparent white transparent transparent;
          }

          /* Make sure all circles are at the same spot */
          .left::after, .right::after {
          left: 15px;
          }

          /* Make all right containers behave like the left ones */
          .right {
          left: 0%;
          }
        }
</style>
    
    </head>
    <body class="greek">
        <?php include_once "../templates/top_nav_seguimiento.php";?>
        <div class="text-center text-white">
            <p>SEGUIMIENTO DEL PEDIDO DE: <span style="font-size:1.5em;"><?php echo utf8_encode($pedidos[0]['nombre']);?></span></p> 
        </div>
        <div class="timeline mb-5">
            <div class="container-timeline right">
                <div class="content">
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                        <span style="margin-left:10px;">YA RECIB&Iacute; TU PEDIDO!</span> 
                </div>
            </div>
            <div class="container-timeline left">
                <div class="content">
                    <?php if($pedidos[0]['pago']=='si'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">RECIB&Iacute; EL COMPROBANTE DE PAGO!</span> 
                </div>
            </div>
            
            <div class="container-timeline right">
                <div class="content">
                    <?php if($pedidos[0]['pedi_marco']=='true'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">YA PED&Iacute; TU MARCO! </span>
                </div>
            </div>
            <div class="container-timeline left">
                <div class="content">
                    <?php if($pedidos[0]['hice_disenio']=='true'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">LO ESTOY DISE&Ntilde;ANDO! </span>
                </div>
            </div>
            <div class="container-timeline right">
                <div class="content">
                    <?php if($pedidos[0]['imprimir']=='true'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">LO MAND&Eacute; A IMPRIMIR! </span>
                </div>
            </div>
            <div class="container-timeline left">
                <div class="content">
                    <?php if($pedidos[0]['empaquetando']=='true'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">LO ESTOY EMPAQUETANDO!</span>
                </div>
            </div>
            <div class="container-timeline right">
                <div class="content">
                    <?php if($pedidos[0]['listo']=='true'){
                    ?>
                        <img src="img/animation_200_kdtkf4w6.gif" alt="" title="" style="width: 40px; height: 40px;">
                    <?php
                    }
                    ?>
                    <span style="margin-left:10px;">LISTO PARA ENVIARTELO!</span>
                </div>
            </div>
        </div>
        <?php include_once "../templates/footer.html";?>
        
    
        
        
       
      
    </body>
</html>
