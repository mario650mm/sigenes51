angular.module('Enes')
    .factory('mainFactory', function (HOST, $http) {
        return{
            getHalf_years : function(){
                return $http.get(HOST+'api/v1/mainhalf_year');
            }
        }
    });