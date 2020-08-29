var contacto = (function(){
   // console.log("entre");
    
    var name,email,telefono,textarea,loader;
    
    name = document.getElementById("name");
    email = document.getElementById("email");
    telefono = document.getElementById("telefono");
    textarea =  document.getElementById("textarea");
    loader = document.getElementById("loader");
    
    enviar = function() {
        //console.log("entre a la funcion");
        document.getElementById("loader").style.display = "block";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            document.getElementById("loader").style.display = "none";
            document.getElementById("formulario").style.display = "none";
            document.getElementById("resultado").innerHTML = this.responseText;
           // alert(this.responseText);
            console.log(this.responseText);
            
          }
        };
        xhttp.open("POST", "contact/sendphpmailer.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("nombre="+name.value+"&email="+email.value+"&telefono="+telefono.value+"&comentario="+textarea.value);
       
    };
    
    
    return{
        enviarEmail : function(){
          enviar();  
        }
    };
})();

