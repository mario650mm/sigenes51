'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: schoolrecordController
 * @param $scope, schoolrecordFactory, Notification
 * @requires schoolrecordFactory, Notification
 * @methodOf ng.controller:booyah
 * @description
 * My Description rules
 */
 angular.module('Enes')
 	.controller('schoolrecordController', function($scope, schoolrecordFactory, Notification){
 		$scope.recordTypes   = {};
 		$scope.student       = {};
 		$scope.applyRecord   = {};
 		$scope.isRecord      = false;
        $scope.isViewNote    = false;
        $scope.btnprint      = false;
        $scope.btnapply      = true;

 		$scope.init = function(){
 			recordTypes();
 			dataStudent();
 		}

 		var recordTypes = function(){
 			schoolrecordFactory.getTransac()
 			.success(function(data){
 				$scope.recordTypes = data;
 			})
 			.error(function(error){
 				console.log(error);
 			})
 		}

        /*
        * Trae y asigna los datos del alumno que solicita la cosctancia
        * o credencial.
        */
 		var dataStudent = function(){
 			schoolrecordFactory.getStudentRecords()
 			.success(function(data){
 				$scope.student.nombre = data.name + ' ' + data.firstlastname
 				 + ' ' + data.secondlastname;
                        console.log($scope.student.nombre);
                $scope.student.account_number = data.student.account_number;
                $scope.student.celphone = data.celphone;
                $scope.student.student = data.student.id;
                $scope.student.telephone = data.telephone;
                $scope.student.career = 'Odontología';
                console.log($scope.student.telephone);
                $scope.student.email = data.email1;
               // $scope.validate = data.student.id;
 			})
 			.error(function(error){
 				console.log(error);
 			})
 		}

        /*
        * Nos muestra el combo de las cosntancias 
        * que estan disponibles para tramitar
        */
 		$scope.visible = function(){
 			$scope.applyRecord.credential = 0;
 			$scope.isRecord = true;

 		}

        // Valida si se escogio un tramite de credencial o constancia
 		$scope.iscredential = function(){
 			if(typeof($scope.applyRecord.record) != 'undefined')
 				$scope.applyRecord.record = 0;

 			if(typeof($scope.applyRecord.record) != 'undefined' || $scope.applyRecord.record == 0){
 				$scope.isRecord = false;	
 			}
 		}

 		/**
        *   Carga la fecha actual al campo de dia 
        */
        var getDateRecord = function(){
            var date = new Date();
            return date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
        }

        // Guarda la informacion para hacer la solicitud de tramite
        $scope.save = function(){
            var msj;
        	if(typeof($scope.applyRecord.record) == 'undefined' && typeof($scope.applyRecord.credential) == 'undefined'){
                Notification.error({
                    message: '<u>Es necesario que escoja un tramite a realizar.</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
        		return;
        	}
        	if(typeof($scope.applyRecord.folio) == 'undefined'){
                Notification.error({
                    message: '<u>Favor de registrar el folio de pago</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
        		return;
        	}

        	if($scope.applyRecord.record == 1 ){
        		if(typeof($scope.applyRecord.transact_type_id) == 'undefined' || $scope.applyRecord.transact_type_id == -1){
                    Notification.error({
                        message: '<u>Favor de escojer un tipo de costancia para el tramite.</u>',
                        title: '<b>Error</b> <s>notificación</s>',
                        delay: 3000
                    });
        			return;
        		}
        	}

        	$scope.applyRecord.date = getDateRecord();
        	$scope.applyRecord.student_id = $scope.student.student;
        	$scope.applyRecord.status_id = 2;


        	if($scope.applyRecord.credential == 2 && ($scope.applyRecord.record == 0 || typeof($scope.applyRecord.record) == 'undefined')){
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

            if ($scope.applyRecord.credential == true) {
                msj = 'Solicitud de reposición de credencial registrado. \nSe recomienda imprimir su pdf para la recolección de sellos de no adeudo.';
            }else{
                msj = 'Solicitud de costancía registrado.';
            }

        	schoolrecordFactory.save($scope.applyRecord)
        	.success(function(data){
                Notification.success({
                    title: 'Success',
                    message: msj, 
                    delay: 5000
                });
                if ($scope.applyRecord.credential == true){
                    $scope.btnprint     = true;
                    $scope.btnapply     = false;
                }
                $scope.isViewNote = true;
        	})
        	.error(function(data){
                $scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                })
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al crear el tramite</u>',
                    delay: 10000
                });
        	})
        }


 	})