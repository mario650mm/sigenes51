/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .factory('countryFactory', function (HOST, $http) {
        return{
            getAllCountry : function(){
                return $http.get(HOST + 'api/v1/countrys')
            }
        }
    });