/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .factory('statesFactory', function (HOST, $http) {
        return{
            getStatesByCountry : function(country_id){
                return $http.get(HOST + 'api/v1/statesbycountry/'+country_id)
            },
            getNameState : function(id){
                return $http.get(HOST+'api/v1/getNameState/'+ id)
            }
        }
    });
