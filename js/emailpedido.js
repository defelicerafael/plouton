var email = (function(){
   // console.log("entre");
    
    var name,email,telefono,textarea,loader;
    
    name = document.getElementById("name");
    email = document.getElementById("email");
        
    enviar = function() {
        //console.log("entre a la funcion");
       // document.getElementById("loader").style.display = "block";
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
       
            document.getElementById("resultado").innerHTML = this.responseText;
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

