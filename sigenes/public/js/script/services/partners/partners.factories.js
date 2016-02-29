angular.module('Enes')
    .factory('partnersFactory', function (HOST, $http) {
        return{
            getAllData : function(){
                return $http.get(HOST + 'api/v1/partners')
            }
        }
    });