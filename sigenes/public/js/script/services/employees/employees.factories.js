angular.module('Enes')
    .factory('employeesFactory', function (HOST, $http) {
        return{
            getAllData : function(){
                return $http.get(HOST + 'api/v1/employee')
            },
            save : function(employee){
                return $http.post(HOST+'api/v1/employees', employee)
            },
            update : function(employee){
                return $http.put(HOST+'api/v1/employees', employee)
            },
            delete : function(employee){
                return $http.delete(HOST+'api/v1/employees/'+employee.id)
            }
        }
    });