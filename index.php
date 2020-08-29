<?php
header("Content-Type: text/html;charset=utf-8");
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
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/noche.css">
        <link rel="stylesheet" type="text/css" href="css/plouton.css">
        <meta name="description" content="PLOUTON - ASTRO DESIGN - ">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        
    
        <meta property="og:url"           content="https://plouton.com.ar" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:description"   content="PLOUTON - ASTRO DESIGN - " />
        <meta property="og:image"         content="img/carta_natal/PLOUTON_GRIEGO_CELU.png" />
    </head>
    <body>
        <?php include_once "templates/top_nav_new.php";?>
        <?php include_once "templates/plouton.php";?>
        <?php include_once "templates/disenios.php";?>
        <?php include_once "templates/ninies.php";?>
        <?php include_once "templates/contact.html";?>
        <?php include_once "templates/footer.html";?>
        
    
        
        
        <script async src="js/changeColor.js"></script>
        <script async src="js/aparece.js"></script>
        <script async src="js/contact.js"></script>
        <!--<script src="js/runAll.js"></script>-->
        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script async src="js/popper.min.js"></script>
        <script async src="js/bootstrap.min.js"></script>
        <!--<script async src="js/lazysizes.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--<script async src="https://kit.fontawesome.com/b0a7bbf264.js"></script>-->
        <!--<script async src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>-->
        
        <script>
        $(document).ready(function(){
           
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if ((this.hash !== "")&&(this.hash !== "#carousel-example")) {
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
