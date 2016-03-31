angular.module('Enes')
    .factory('periodFactory', function (HOST, $http) {
        return{
            getInfo : function(){
                return $http.get(HOST+'api/v1/period');
            },
            save : function(period){
                return $http.post(HOST+'api/v1/period', period)
            },
            update : function(period){
                return $http.put(HOST+'api/v1/period', period)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/period/'+id)
            }
        }
    });