/**
 * Created by Mario on 07/04/16.
 */

angular.module('Enes')
    .factory('designationFactory', function (HOST, $http) {
        return{
            getAllData : function(){
                return $http.get(HOST+'api/v1/designations')
            },
            save : function(designation){
                return $http.post(HOST+'api/v1/designations', designation)
            },
            update : function(designation){
                return $http.put(HOST+'api/v1/designations', designation)
            },
            delete : function(designation){
                return $http.delete(HOST+'api/v1/designations/'+designation.id)
            }
        }
    });