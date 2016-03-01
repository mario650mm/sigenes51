/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .controller('AdmissionController', function (
                                    $scope, countryFactory,
                                    statesFactory, citysFactory,
                                    admissionFactory,
                                    Notification, $window) {
        $scope.step = 1;
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

        $scope.saveApplicant = function(applicant){
            admissionFactory.saveApplicant(applicant)
                .success(function(data){
                    Notification.success({
                        message: 'Registro '+ applicant.name +' creado correctamente.',
                        delay: 5000});
                    $window.location.href = 'api/v1/admissions/createPdfAdmission/'+data.applicant_id;
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
            }
        };

        $scope.onLoad = function (e, reader, file, fileList, fileOjects, fileObj) {
            Notification.success({
                message: 'Archivo adjuntado correctamente.',
                delay: 5000});
        };

    });