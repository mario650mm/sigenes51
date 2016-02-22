'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: schoolrecordController
 * @param $scope
 * @requires
 * @methodOf ng.controller:booyah
 * @description
 * My Description rules
 */
 angular.module('Enes')
 	.controller('schoolrecordController', function($scope, schoolrecordFactory){
 		$scope.recordTypes = {};
 		$scope.student = {};
 		$scope.applyRecord = {};
 		$scope.isRecord = false;

 		$scope.init = function(){
 			recordTypes();
 			dataStudent();
 		}

 		var recordTypes = function(){
 			schoolrecordFactory.getTransac()
 			.success(function(data){
 				console.log(data);
 				$scope.recordTypes = data;
 			})
 			.error(function(error){
 				console.log(error);
 			})
 		}

 		var dataStudent = function(){
 			schoolrecordFactory.getStudentRecords()
 			.success(function(data){
 				console.log(data);
 				$scope.student.nombre = data.name + ' ' + data.firstlastname
 				 + ' ' + data.secondlastname;
                        console.log($scope.student.nombre);
                $scope.student.account_number = data.student.account_number;
                $scope.student.celphone = data.celphone;
                $scope.student.student = data.student.id;
                $scope.student.telephone = data.telephone;
                console.log($scope.student.telephone);
                $scope.student.email = data.email1;
               // $scope.validate = data.student.id;
 			})
 			.error(function(error){
 				console.log(error);
 			})
 		}

 		$scope.visible = function(){
 			$scope.applyRecord.credential = 0;
 			$scope.isRecord = !$scope.isRecord;
 			console.log('Constancias ' + $scope.applyRecord.record);
 			console.log('Credenciales ' + $scope.applyRecord.credential);

 		}

 		$scope.iscredential = function(){
 			if(typeof($scope.applyRecord.record) != 'undefined')
 				$scope.applyRecord.record = 0;

 			if(typeof($scope.applyRecord.record) != 'undefined' || $scope.applyRecord.record == 0){
 				$scope.isRecord = !$scope.isRecord;
 				
 			}
 			console.log('Constancias ' + $scope.applyRecord.record);
 			console.log('Credenciales ' + $scope.applyRecord.credential);
 		}

 		/**
        *   Carga la fecha actual al campo de dia 
        */
        var getDateRecord = function(){
            var date = new Date();
            return date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
        }

        $scope.save = function(){
        	if(typeof($scope.applyRecord.record) == 'undefined' && typeof($scope.applyRecord.credential) == 'undefined'){
        		alert('Es necesario que escoja un tramite a realizar.');
        		return;
        	}
        	if(typeof($scope.applyRecord.folio) == 'undefined'){
        		alert('Favor de registrar el folio de pago');
        		return;
        	}

        	if($scope.applyRecord.record == 1 ){
        		if(typeof($scope.applyRecord.transact_type_id) == 'undefined' || $scope.applyRecord.transact_type_id == -1){
        			alert('Favor de escojer un tipo de costancia para el tramite');
        			return;
        		}
        	}

        	$scope.applyRecord.date = getDateRecord();
        	$scope.applyRecord.student_id = $scope.student.student;
        	console.log($scope.applyRecord.student_id);
        	$scope.applyRecord.status_id = 2;


        	if($scope.applyRecord.credential == 2 && $scope.applyRecord.record == 0){
        		$scope.applyRecord.transact_type_id = 7;
        	}

        	if($scope.applyRecord.credential == 2){
        		$scope.applyRecord.credential = true;
        	}else{
        		$scope.applyRecord.credential = false;
        	}

        	if($scope.applyRecord.record == 1){
        		$scope.applyRecord.record = true;
        	}else{
        		$scope.applyRecord.record = false;
        	}

        	schoolrecordFactory.save($scope.applyRecord)
        	.success(function(data){
        		alert('registro guradado');
        		console.log(data);
        	})
        	.error(function(data){
        		console.log(data);
        	})
        }


 	})