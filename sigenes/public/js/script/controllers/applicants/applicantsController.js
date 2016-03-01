'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerAspirantController
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
    .controller('ApplicantsController', function ($scope, applicantFactory, Notification, $window) {
        $scope.applicant = {};
        $scope.applicants = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "id", name: "No. Applicant", placeholder: "No. Applicant..." },
            { key: "name", name: "Name", placeholder: "Name..." },
            { key: "email", name: "E-Mail", placeholder: "E-Mail..." },
            { key: "rfc", name: "RFC", placeholder: "RFC..." },
        ];

        applicantFactory.getAllApplicants()
            .success(function(data){
                $scope.applicants=data;
            })
            .error(function(error){

            });

        $scope.showApplicant = function(applicant){
            $window.location.href = "applicants/"+ applicant.id;
        }

    })
    .controller('ShowApplicantsController', function ($scope, applicantFactory, Notification) {
        $scope.applicant = [];
        $scope.documents = [];
        applicantFactory.show($scope.urlId)
            .success(function(data){
                $scope.applicant=data;
            })
            .error(function(error){
                Notification.error(
                    {message: '<b>Error!</b> Problemas de conexión',
                        title: '<b>Error</b>',
                        delay: 5000});
            });

        applicantFactory.getDocuments($scope.urlId)
            .success(function(data){
                console.log(data);
                $scope.documents=data;
            })
            .error(function(error){
                Notification.error(
                    {message: '<b>Error!</b> Problemas de conexión',
                        title: '<b>Error</b>',
                        delay: 5000});
            });


    });