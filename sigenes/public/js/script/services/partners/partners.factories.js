angular.module('Enes')
    .factory('partnersFactory', function (HOST, $http) {
        return{
            getAllEmployee : function(){
                return $http.get(HOST + 'api/v1/partners')
            }
        }
    });