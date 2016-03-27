/**
 * Created by taxque on 27/02/16.
 */
angular.module('Enes')
    .factory('countryFactory', function (HOST, $http) {
    return{
        getAllCountry : function(){
            return $http.get(HOST + 'api/v1/countrys')
        },
        getNameCountry : function(id){
            return $http.get(HOST+'api/v1/getNameCountry/'+ id)
        }
    }
});