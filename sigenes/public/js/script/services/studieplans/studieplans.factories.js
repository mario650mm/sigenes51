/**
 * Created by Mario on 29/03/16.
 */

angular.module('Enes')
    .factory('studiePlansFactory', function (HOST, $http) {
        return{
            getAllData : function(){
                return $http.get(HOST+'api/v1/studiesplan')
            },
            save : function(studiesplan){
                return $http.post(HOST+'api/v1/studiesplan', studiesplan)
            },
            update : function(studiesplan){
                return $http.put(HOST+'api/v1/studiesplan', studiesplan)
            },
            delete : function(studiesplan){
                return $http.delete(HOST+'api/v1/studiesplan/'+ studiesplan.id)
            }
        }
    });
