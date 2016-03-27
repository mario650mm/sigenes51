'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller:periodAdminCtrl
 * @param periodFactory, Notification
 * @param $scope
 * @requires periodFactory, Notification
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */

angular.module('Enes')
	.controller('subjectmatterAdminCtrl',function($scope, mainFactory, subjectmatterFactory, careerFactory, studyareaFactory, Notification){
		$scope.selectCareer = [];
		$scope.selectArea	= [];
		$scope.dataarea		= [];
		$scope.showarea		= false;
		$scope.subjectmatter= {};
		$scope.half_year	= {};

		$scope.init = function(){
			getCareer();
			getArea();
			getHalf_year();
			$scope.showarea = false;
			
		};


		var getHalf_year = function(){
			mainFactory.getHalf_years()
			.success(function(data){
				$scope.half_year = data;
			})
			.error(function(error){
				console.log(error);
			});
		};

		var getArea = function(){
			studyareaFactory.getInfo()
			.success(function(data){
				$scope.selectArea = data;
			})
			.error(function(error){

			});
		};

		var getCareer = function(){
			careerFactory.getInfo()
			.success(function(data){
				$scope.selectCareer = data;
			})
			.error(function(error){

			});
		};

		$scope.filterArea = function(paramInt){
			console.log(paramInt);
			$scope.dataarea	= [];
			angular.forEach($scope.selectArea, function(value, key){
				if (value.career_id == paramInt) {
					$scope.dataarea.push(value);
				};
			});
		};

		$scope.change = function(){
			$scope.showarea = true;
		};

		$scope.changeComun = function(){
			$scope.showarea = false;
		};

		$scope.register = function(){
			if ($scope.subjectmatter.isdeepending == 1) {
				$scope.subjectmatter.isdeepending = true;
				$scope.subjectmatter.iscomun_deep = false;
			};
			if ($scope.subjectmatter.iscomun_deep == 2) {
				$scope.subjectmatter.isdeepending = false;
				$scope.subjectmatter.iscomun_deep = true;
			};

		}
	});