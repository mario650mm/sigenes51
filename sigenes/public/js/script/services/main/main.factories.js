angular.module('Enes')
    .factory('mainFactory', function (HOST, $http) {
        return{
            getHalf_years : function(){
                return $http.get(HOST+'api/v1/mainhalf_year');
            },
            get_years : function(){
                return $http.get(HOST+'api/v1/mainyears');
            },
            get_stuies_plans : function(){
                return $http.get(HOST+'api/v1/mainstudiesplan');
            }
        }
    });