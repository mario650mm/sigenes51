/**
 * Created by taxque on 9/02/16.
 */

angular.module('Enes')
    .factory('userFactory', function ($http) {
        return{
            getAllUsers : function(){
                return $http.get('api/users')
            },
            save : function($user){
                return $http.post('api/users', $user)
            }
        }
    });