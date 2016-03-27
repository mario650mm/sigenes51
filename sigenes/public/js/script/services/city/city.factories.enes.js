/**
 * Created by taxque on 27/02/16.
 */
angular.module('Enes')
    .factory('citysFactory', function (HOST, $http) {
    return{
        getCitysByState : function(state_id){
            return $http.get(HOST + 'api/v1/citysbystate/'+state_id)
        },
        getNameCity : function(id){
            return $http.get(HOST+'api/v1/getNameCity/'+ id)
        }
    }
});