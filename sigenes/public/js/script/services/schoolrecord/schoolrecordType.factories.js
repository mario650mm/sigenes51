angular.module('Enes')
    .factory('schoolrecordTypeFactory', function (HOST, $http) {
        return{
            getInfo : function(){
                return $http.get(HOST+'api/v1/recordtype');
            },
            save : function(record){
                console.log(record);
                return $http.post(HOST+'api/v1/recordtype', record)
            },
            update : function(user){
                return $http.put(HOST+'api/v1/users', user)
            },
            delete : function(id){
                return $http.delete(HOST+'api/v1/recordtype/'+id)
            }
        }
    });