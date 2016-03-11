/**
 * Created by taxque on 9/02/16.
 */

angular.module('Enes')
    .factory('userFactory', function (HOST, $http) {
        return{
            getAllUsers : function(){
                return $http.get(HOST+'api/v1/users')
            },
            save : function(user){
                return $http.post(HOST+'api/v1/users', user)
            },
            update : function(user){
                return $http.put(HOST+'api/v1/users', user)
            },
            delete : function(user){
                return $http.delete(HOST+'api/v1/users/'+user.id)
            }
        }
    });