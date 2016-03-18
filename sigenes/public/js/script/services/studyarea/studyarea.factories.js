angular.module('Enes')
    .factory('studyareaFactory', function (HOST, $http) {
        return{
            getInfo : function(){
                return $http.get(HOST+'api/v1/area');
            },
            save : function(area){
                console.log(area);
                return $http.post(HOST+'api/v1/area', area)
            },
            update : function(area){
                return $http.put(HOST+'api/v1/area', area)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/area/'+id)
            }
        }
    });