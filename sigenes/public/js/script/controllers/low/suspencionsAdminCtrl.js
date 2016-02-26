'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller:registerAspirantController
 * @param suspensionFactory
 * @param $scope
 * @requires suspensionFactory
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */

 angular.module('Enes')
 	.controller('suspensionAdminCtrl', function($scope, suspensionFactory){
 		$scope.showResult = [];
        $scope.entity = {};
        $scope.suspend = {};
        $scope.files = [];
        $scope.file = {};
 		// Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "account_number", name: "Account", placeholder: "Account..." },
            { key: "date_init", name: "Date", placeholder: "Date... (YYYY-MM-D)" },
            { key: "name_period", name: "Period", placeholder: "Period..." },
            { key: "estatus", name: "Status", placeholder: "Status..." },
            { key: "career", name: "Career", placeholder: "Career..."}//,restrictToSuggestedValues: true, suggestedValues: ['admin', 'student', 'employee'] }
        ];

        $scope.showData = function(){
            var con = 0;
        	suspensionFactory.getAllSuspensions()
        	.success(function(data){
        		console.log(data);
        		$scope.showResult = data;
        	})
        	.error(function(error){
        		console.log(error);
        	})
        }

        $scope.showsuspen = function(suspend){
            console.log("hola llegue al modal");
            $scope.entity = suspend;
            //$scope.user = user;
            $('#show').modal('show');
        }

        $scope.deletesuspen = function(suspend){
            console.log("hola llegue al modal");
            //$scope.user = user;
            
            console.log($scope.showResult);
            $('#delete').modal('show');
        }


        $scope.uploadFiles = function() {
            var files = angular.copy($scope.files);
            if ($scope.file) {
                files.push($scope.file);
            }
            if (files.length === 0) {
                $window.alert('Please select files!');
                return false;
            }

            for (var i = files.length - 1; i >= 0; i--) {
                var file = files[i];
                
            }
        }


        var getDateSus = function(){
            var date = new Date();
            return date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
        }

        $scope.finishsuspension = function(){
            $scope.suspend.status_id = 3;
            $scope.suspend.period_id = $scope.entity.period_id
            $scope.suspend.date_init = $scope.entity.date_init
            $scope.suspend.id = $scope.entity.id
            $scope.suspend.reason = $scope.entity.reason
            $scope.suspend.student_id = $scope.entity.student
            $scope.suspend.evidence = $scope.file.base64;
            $scope.suspend.date_end = getDateSus();
            console.log($scope.suspend);
            
            suspensionFactory.update($scope.suspend)
            .success(function(data){
                alert('Suspensión realizada!!');
                
            })
            .error(function(error){
                console.log(error);
            })
        }
 	});