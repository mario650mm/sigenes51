angular.module('Enes')
    .factory('subjectmatterFactory', function (HOST, $http) {
        return{
            getInfo : function(){
                return $http.get(HOST+'api/v1/subjectmatter');
            },
            save : function(subjectmatter){
                return $http.post(HOST+'api/v1/subjectmatter', subjectmatter)
            },
            update : function(subjectmatter){
                return $http.put(HOST+'api/v1/subjectmatter', subjectmatter)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/subjectmatter/'+id)
            }
        }
    });