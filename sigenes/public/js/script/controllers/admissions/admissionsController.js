/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .controller('AdmissionController', function (
                                    $scope, countryFactory,
                                    statesFactory, citysFactory,
                                    Notification) {
        $scope.step=4;
        $scope.countrys = [];
        $scope.states = [];
        $scope.citys = [];

        countryFactory.getAllCountry()
            .success(function(data){
                $scope.countrys = data;
            })
            .error(function(error){
                Notification.error(
                {message: '<b>Error!</b> Problemas de conexión',
                    title: '<b>Error</b>',
                    delay: 5000});
            });
        $scope.getStates = function(country_id){
            statesFactory.getStatesByCountry(country_id)
                .success(function(data){
                    $scope.states = data;
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error!</b> Problemas de conexión',
                            title: '<b>Error</b>',
                            delay: 5000});
                });
        }
        $scope.getCitys = function(state_id){
            citysFactory.getCitysByState(state_id)
                .success(function(data){
                    $scope.citys = data;
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error!</b> Problemas de conexión',
                            title: '<b>Error</b>',
                            delay: 5000});
                });
        }

        $scope.next = function(){
            $scope.step +=1;
        }

        $scope.back = function(){
            $scope.step -=1;
        }

        $scope.submitForm = function(isValid) {
            if (isValid) {
                next();
            }
        };



    });