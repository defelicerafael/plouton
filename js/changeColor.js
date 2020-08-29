var changec = (function(){
    
    var change, cartanatal,carta_natal_img,foto,cartanatalb,carta_natal_imgb,elementos,elementosb,comprar;
    var acrab,antares,nombrecolor,nombrecolorb;
    var estrellitasA,url_estrellas,nombrecolore;
    
    
    cartanatal = document.getElementById("cartanatal");
    carta_natal_img = document.getElementById("carta_natal_img");
    cartanatalb = document.getElementById("cartanatalb");
    carta_natal_imgb = document.getElementById("carta_natal_imgb");
    estrellitasA = document.getElementById("estrellitasA");
    elementos = "agua";
    elementosb = "agua";
    cartanatalb.style.backgroundColor = 'rgb(186, 116, 104)';
    cartanatal.style.backgroundColor = 'rgb(222, 224, 211)';
    estrellitasA.style.backgroundColor = 'rgb(132,182,177)';
    nombrecolorb = "clay";
    nombrecolor = "sage";
    nombrecolore = "pasture";
    
     change = function(rgb,n){
        cartanatal.style.backgroundColor = rgb;
        nombrecolor = n;
        acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
       // console.log(acrab);
       // console.log(antares);
     };
     changeb = function(rgb,n){
         cartanatalb.style.backgroundColor = rgb;
         nombrecolorb = n;
        //console.log(nombrecolorb,n);
        antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
        //console.log(acrab);
        //console.log(antares);
     };
     changee = function(rgb,n){
            estrellitasA.style.backgroundColor = rgb;
            nombrecolore = n;
            url_estrellas = "comprar/?m=estrellas&e=aire&c="+nombrecolore;  
     };
     
     changeFb = function(f){
       if(f==="agua"){
           elementosb = "agua";
           foto = "img/carta_natal/CN_AGUA_EJ_A4B.png";
           carta_natal_imgb.src = foto;
           antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
       }
       if(f==="aire"){
           elementosb = "aire";
           foto = "img/carta_natal/CN_AIRE_EJ_A4B.png";
           carta_natal_imgb.src = foto;
           antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
       }
       if(f==="fuego"){
           elementosb = "fuego";
           foto = "img/carta_natal/CN_FUEGO_EJ_A4B.png";
           carta_natal_imgb.src = foto;
           antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
       }
       if(f==="tierra"){
           elementosb = "tierra";
           foto = "img/carta_natal/CN_TIERRA_EJ_A4B.png";
           carta_natal_imgb.src = foto;
           antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
       }
        console.log(acrab);
        console.log(antares);
     };
     changeF = function(f){
       if(f==="agua"){
           elementos = "agua";
           foto = "img/carta_natal/CN_AGUA_EJ_A4N.png";
           carta_natal_img.src = foto;
           acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
       }
       if(f==="aire"){
           elementos = "aire";
           foto = "img/carta_natal/CN_AIRE_EJ_A4N.png";
           carta_natal_img.src = foto;
           acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
       }
       if(f==="fuego"){
           elementos = "fuego";
           foto = "img/carta_natal/CN_FUEGO_EJ_A4N.png";
           carta_natal_img.src = foto;
           acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
       }
       if(f==="tierra"){
           elementos = "tierra";
           foto = "img/carta_natal/CN_TIERRA_EJ_A4N.png";
           carta_natal_img.src = foto;
           acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
       }
        console.log(acrab);
        console.log(antares);
     };
     
    //console.log(elementos);
    //console.log(elementosb);
    
     acrab = "comprar/?m=acrab&e="+elementos+"&c="+nombrecolor; 
     antares = "comprar/?m=antares&e="+elementosb+"&c="+nombrecolorb;  
     url_estrellas = "comprar/?m=estrellas&e=aire&c="+nombrecolore;  
    //console.log()
     
     compraracrab = function(){
            window.location.href = acrab;
           // console.log(acrab);
     };
     comprarantares = function(){
            window.location.href = antares;
          //console.log(antares);
     };
     comprarestrellas = function(){
            window.location.href = url_estrellas;
          //console.log(antares);
     };
    
    
    return{
        changeColor : function(rgb,n){
          change(rgb,n);  
        },
        changeColorb : function(rgb,n){
          changeb(rgb,n);  
        },
        changeColorE : function(rgb,n){
          changee(rgb,n);  
        },
        changeFoto : function(f){
          changeF(f);  
        },
        changeFotob : function(f){
          changeFb(f);  
        },
       comprarAcrab : function(){
          compraracrab();  
        },
        comprarAntares : function(){
          comprarantares();  
        },
        comprarEstrellitas : function(){
          comprarestrellas(); 
        }
    };
})();

