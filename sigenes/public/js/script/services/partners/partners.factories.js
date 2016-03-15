angular.module('Enes')
    .factory('partnersFactory', function (HOST, $http) {
        return{
            getAllEmployee : function(){
                return $http.get(HOST + 'api/v1/partnersEmployee')
            },
            getAllData : function(){
                return $http.get(HOST + 'api/v1/partners')
            },
            save : function(partner){
                return $http.post(HOST+'api/v1/partners', partner)
            },
            update : function(partner){
                return $http.put(HOST+'api/v1/partners', partner)
            },
            delete : function(partner){
                return $http.delete(HOST+'api/v1/partners/'+partner.id)
            }
        }
    });