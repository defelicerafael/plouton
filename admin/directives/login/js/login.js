 angular.module("Login",[])
    .directive("login",function(){
        
        return{
            
            restrict: "E",
            templateUrl: 'directives/login/templates/login.html',
            scope: {
                icono:"@"
                
            },
            controller : function($scope,$location,$http,$timeout,$cookies){
                
                $cookies.remove("log");
                $cookies.remove("apodo");
                $scope.user = [];
                $scope.user.email ="";
                $scope.user.pass = "";
                $scope.alerta = false;
                $scope.texto = "";
                $scope.log = [];
                $scope.status = [];
                $scope.loading = false;
                
                $scope.loginEmailPass = function(email,pass){
                    $scope.loading = true;
                    $http({method: 'GET',url: 'server/login.php?email='+email+'&pass='+pass})
                        .then(function successCallback(response) {
                            $scope.log = response.data;
                       //     console.log($scope.log);
                            $scope.status = response.status;
                            $scope.loading = false;
                            $scope.alerta = true;
                            if($scope.log!=="NO"){
                                $scope.texto = "Bienvenida "+$scope.log[0].apodo+" será redireccionado en breve...";
                                $cookies.put('log', 'si');
                                $cookies.put('apodo', $scope.log[0].apodo);
                                $timeout(function(){
                                    $location.url('/panel/admin');
                                },4000);
                             //   console.log($scope.log);
                            }else{
                                $cookies.put('log', 'no');
                                $scope.texto = "No coniciden el email con la contrase\u00F1a...";
                             //   console.log($scope.log);
                            }   
                        }, function errorCallback(response) {
                            $scope.log = response.data;
                            $scope.status = response.status;
                            $scope.loading = false;
                            console.log($scope.log);
                    });
                };
                
                
               $scope.isSigned  = function(){
                   $scope.authObj.$onAuthStateChanged(function(firebaseUser) {
                        if (firebaseUser) {
                            console.log("Signed in as:", firebaseUser.email);
                                if ($location.url()==='/panel'){
                                            $location.url('/panel/admin');
                                        }else{
                                            $location.url(); 
                                        }
                        }else{
                            console.log("Signed out");
                            $location.url('/panel');
                        }
                    });
                };
              //$scope.isSigned();  
            }
        };
    });
        
    
   
  

