angular.module('Enes')
    .factory('careerFactory', function (HOST, $http) {
        return{
            getInfo : function(){
                return $http.get(HOST+'api/v1/career');
            },
            save : function(career){
                console.log(career);
                return $http.post(HOST+'api/v1/career', career)
            },
            update : function(career){
                return $http.put(HOST+'api/v1/career', career)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/career/'+id)
            },
            getNameCareer : function(id){
                return $http.get(HOST+'api/v1/getNameCareer/'+ id)
            }
        }
    });