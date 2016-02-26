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
 	.controller('schoolrecordAdminCtrl', function($scope, schoolrecordFactory){
 		$scope.showResult = {};
 		// Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "account_number", name: "Account", placeholder: "Account..." },
            { key: "date", name: "Date", placeholder: "Date... (YYYY-MM-D)" },
            { key: "tramit", name: "Tramint", placeholder: "Tramit..." },
            { key: "name", name: "Name", placeholder: "Name..." },
            { key: "career", name: "Career", placeholder: "Career..."}//,restrictToSuggestedValues: true, suggestedValues: ['admin', 'student', 'employee'] }
        ];

        $scope.showData = function(){
        	schoolrecordFactory.getAllData()
        	.success(function(data){
        		console.log(data);
        		$scope.showResult = data;
        		console.log($scope.showResult);
        	})
        	.error(function(error){
        		console.log(error);
        	})
        }
 	});