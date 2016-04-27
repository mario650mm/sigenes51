/**
 * Created by Mario on 29/03/16.
 */

angular.module('Enes')
    .factory('schoolFactory', function (HOST, $http) {
        return{
            getAllData : function(){
                return $http.get(HOST+'api/v1/schoolsParent')
            },
            getParents : function(){
                return $http.get(HOST+'api/v1/schools')
            },
            save : function(school){
                return $http.post(HOST+'api/v1/schools', school)
            },
            update : function(school){
                return $http.put(HOST+'api/v1/schools', school)
            },
            delete : function(school){
                return $http.delete(HOST+'api/v1/schools/'+school.id)
            }
        }
    });
