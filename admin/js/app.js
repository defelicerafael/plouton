angular.module('App', ['ngMaterial', 'ngMessages','config','Header','ngAnimate','ngSanitize','Login','ngCookies','textAngular','SqlServices'])

    .factory("pasapalabra", function() {
        return {
          data: []
        };
      }) 
    
    .filter('toDate', function() {
        return function(input) {
        return new Date(input);
        };
    })
    
.controller('Ctrl', function($http,$location,$cookies,SqlEdit,$mdToast,SqlDelete,$route,SqlInsertArray,$routeParams) {

    var app = this;
    
    app.resenias = [];
    app.reseniasL = app.resenias.length;
    app.path = $location.path();
    app.idAlbum = $routeParams.idAlbum;
    app.isEditing = false;
    app.total = [];
    app.gastos = [];
    app.marcos = [];
    
    
    app.login = $cookies.get('log');
    app.apodo = $cookies.get('apodo');
   // console.log(app.login);
   app.SumaTotal = 0;
   app.gastoTotal = 0;
    
    app.traerEntrega = function(f){
        var fecha = new Date(f);
        fecha.setDate(fecha.getDate() + 14);
        app.resenias[0].fecha_de_entrega = fecha.getFullYear() + '/' + (fecha.getMonth() + 1) + '/' + fecha.getDate();
        console.log( app.resenias[0].fecha_de_entrega);
    };
    
    app.showSimpleToast = function(text) {
            $mdToast.show(
            $mdToast.simple()
            .textContent(text)
            .position('bottom right' )
            .hideDelay(3000)
        );
    };
    
    
    
    app.traerReseniasMostrarSi = function(c){
      //  console.log(c);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/traerReseniasMostrarSi.php?id='+c})
                .then(function successCallback(response) {
                    app.resenias = response.data;
                    app.reseniasL = app.resenias.length;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                    //console.log(app.resenias);
                }, function errorCallback(response) {
                    app.resenias = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    
    app.traerGastos = function(c){
      //  console.log(c);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/traerGastos.php?id='+c})
                .then(function successCallback(response) {
                    app.gastos = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   // console.log(app.resenias);
                }, function errorCallback(response) {
                    app.gastos = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    
    app.sumas_sql = function(tabla,columna,pago,k){
      //  console.log(c);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/sumas.php?tabla='+tabla+'&columna='+columna+'&pago='+pago})
                .then(function successCallback(response) {
                    app.total[k] = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                    return app.total;
                    console.log(app.total);
                }, function errorCallback(response) {
                    app.total = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    app.sumaTotal = function(tabla,columna){
      //  console.log(c);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/sumaTotal.php?tabla='+tabla+'&columna='+columna})
                .then(function successCallback(response) {
                    app.SumaTotal = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                    return app.total;
                    console.log(app.total);
                }, function errorCallback(response) {
                    app.SumaTotal = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    app.gastosTotal = function(){
      //  console.log(c);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/sumaTotal.php?tabla=gastos&columna=precio'})
                .then(function successCallback(response) {
                    app.gastoTotal = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                }, function errorCallback(response) {
                    app.gastoTotal = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    app.traerMarcos = function(id){
        if(typeof id === 'undefined'){
            return;
        }
            
    console.log(id);
    app.loadingMostrarTodo = true;
        $http({method: 'GET',url: 'server/traerMarcos.php?id='+id})
                .then(function successCallback(response) {
                    app.marcos = response.data;
                    //console.log(app.marcos);
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                }, function errorCallback(response) {
                    app.marcos = response.data;
                    app.status = response.status;
                    app.loadingMostrarTodo = false;
                   //console.log(indu.sliders);
        });
    };
    
    
    
    
    app.Edit = function (datosi,tablai,idi,show){
        console.log(datosi,idi);  
       app.isEditing=true;
       var where = 'id';
       var datos = datosi;
       var link = 'server/edit.php';
       var tabla = tablai;
       var id = idi;
       var show = "1";
       SqlEdit.async(link,datos,tabla,id,where).then(function(d){
            console.log(d);
            app.showSimpleToast(d);
            app.isEditing = false;
            $location.url('/panel/admin');
       });
    };
   app.Delete = function (id,tabla){
           // console.log(id,tabla);
            var r = confirm("Esta seguro que desea ELIMINAR este dato?");
            if(r===true){
            var link = 'server/delete.php';
            var id = id;
            SqlDelete.async(link,id,tabla).then(function(d){
            //console.log(d);
            app.showSimpleToast("Ha BORRADO un dato.");
            $route.reload();
            });
            }
            
        };
    app.insert = function (datos,tabla){
            var datos = datos;
            var link = 'server/insert_array.php';  
            var tabla = tabla;
            var cantidad = cantidad;
            SqlInsertArray.async(link,datos,tabla).then(function(d){
         //   console.log(d);
            app.showSimpleToast(d);
            $route.reload();
            
            });
        };    



});