'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller: ExtraordinaryCtrl
 * @param suspensionFactory, Notification
 * @param $scope
 * @requires suspensionFactory
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
	.controller('ExtraordinaryCtrl', function($scope, Notification, mainFactory){
		$scope.extraordinary = {};
		$scope.careers		 = [];
		$scope.student 		 = {};

		$scope.init = function(){
			$scope.extraordinary.date_registration = getDate();
			$scope.extraordinary.isapply = false;			
			$scope.extraordinary.isoptional = false;
			getCareer();
			getStudent();			
		};

		var getDate = function(){
			var day = new Date();
			var mes = (day.getMonth()+1) < 10 ? '0'+(day.getMonth()+1) : (day.getMonth()+1);
			var dia = (day.getDate() < 10 ? '0'+ day.getDate() : day.getDate());
			return day.getFullYear() + '-' + mes + '-' + dia;
		};

		var getCareer = function(){
			mainFactory.get_career()
			.success(function(data){
				$scope.careers = data;
			})
			.error(function(error){
				console.log(error);
			});
		};

		var getStudent = function(){
			mainFactory.get_student()
			.success(function(data){
				$scope.student.name = data.name + ' ' + data.firstlastname + ' ' + data.secondlastname;
				$scope.student.account_number = data.student.account_number;
				//$scope.student = data;
			})
			.error(function(error){
				console.log(error);
			})
		};
	});