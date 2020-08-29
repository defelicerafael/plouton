(function(){
    var app = angular.module('config',['ngRoute']);

    app.config(function($routeProvider){
        
        angular.lowercase = angular.$$lowercase;
        //angular.lowercase = text => text.toLowerCase();
      
        $routeProvider
                .when("/",{
                    templateUrl:"templates/login.html",
                    controller:"Ctrl",
                    controllerAs : "ctrl"
                })
                .when("/panel/admin",{
                    templateUrl:"templates/panel_lista.html",
                    controller:"Ctrl",
                    controllerAs : "ctrl"
                })
                .when("/panel/admin/editar/id/:idAlbum",{
                    templateUrl:"templates/editar.html",
                    controller:"Ctrl",
                    controllerAs : "ctrl"
                })
                .when("/panel/admin/entregas/id/:idAlbum",{
                    templateUrl:"templates/entregas.html",
                    controller:"Ctrl",
                    controllerAs : "ctrl"
                })
                .when("/panel/admin/pagos/id/:idAlbum",{
                    templateUrl:"templates/pagos.html",
                    controller:"Ctrl",
                    controllerAs : "ctrl"
                })
                .otherwise("/");
        
        // use the HTML5 History API
        
        
   
    });
    
})();
