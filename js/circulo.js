var headjs = (function(){
    
    var scrollFunction, top,logo,link;
    
    topz = document.getElementById("topnav");
    logo = document.getElementById("logo-top-nav");
   
    link = document.getElementsByClassName("link");
    
    
    scrollFunction = function () {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
       
        logo.style.width = "150px";
        logo.style.color = "rgb(50, 56, 62)";
        top.style.backgroundColor = "rgba(255, 255, 255, 1)";
        
        
        for (i = 0; i < link.length; i++) {
            link[i].style.color = "rgb(50, 56, 62)";
           
        }
        
        
      } else {
       
        logo.style.width = "200px";
        logo.style.color = "white";
        top.style.backgroundColor = "rgb(50, 56, 62, 1)";
       
       
        
        var i;
        for (i = 0; i < link.length; i++) {
            link[i].style.color = "white";
           
        }
            
        
       
      }
    };
    
    
    return{
        navScroll : function(){
          scrollFunction();  
        }
    };
})();

