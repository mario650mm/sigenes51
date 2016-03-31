'use strict';

/**
 * @ngdoc Controller
 * @name Enes.controller:schoolrecordAdminCtrl
 * @param schoolrecordFactory, Notification
 * @param $scope, schoolrecordFactory, Notification
 * @requires schoolrecordFactory, Notification
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */

 angular.module('Enes')
 	.controller('schoolrecordAdminCtrl', function($scope, schoolrecordFactory, Notification){
 		$scope.showResult = [];
        $scope.entity = {};
        $scope.record = {};
        $scope.isHiden;
        $scope.file = {};
        $scope.schoolrecord = {};
        $scope.showima = false;

 		// Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "account_number", name: "Account", placeholder: "Account..." },
            { key: "tramint", name: "Tramint", placeholder: "Tramint" },
            { key: "tramit", name: "Tramint", placeholder: "Tramit..." },
            { key: "transact", name: "Transact", placeholder: "Transact..." },
            { key: "estatus", name: "Status", placeholder: "Status...", restrictToSuggestedValues: true, suggestedValues: ['Tramitado', 'Terminado'] },
            { key: "date", name: "Date", placeholder: "Date... (YYYY-MM-DD)" }
        ];

        /*
        * Muestra toda la información de las solicitudes
        */
        $scope.showData = function(){
        	schoolrecordFactory.getAllData()
        	.success(function(data){
        		$scope.showResult = data;
        	})
        	.error(function(error){
        		Notification.error({
                    message: '<u>Ocurrio un error al realizar la cargar la información!!!</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
        	})
        }

        /*
        * Nos permite visualizar diferentes controles
        * según sean los estatus de las solicitudes
        */
        $scope.changeShow = function(entity, paramint){
            var isVisible;
            if (paramint == 0) {
                if (entity.estatus == 'Cancelado') {
                    isVisible = false;
                }else{
                    isVisible = true;
                }
            }
            
            return isVisible;
        }

        //Valida el estatus de la 
        $scope.showval = function(entity){
            if (entity.estatus == 'Terminado') {
                return false;
            }else{
                return true;
            }
        }

        /*
        *
        */
        $scope.showValidate = function(entity){
            clearData();
            $scope.entity = entity;
            if($scope.entity.record == 1)
                $scope.isVisible = false;
            else
                $scope.isVisible = true;

            if (entity.estatus == 'Terminado') {
                $scope.isHiden = true;
                assingData(entity);
            }else{
                $scope.isHiden = false;
            }
            if ($scope.entity.transact_type_id != null && $scope.entity.evidence != null) {
                clearData();
                $scope.record = entity;
                $scope.showima = 1;
                $('#showimg').modal('show');
            }else{
                clearData();
                $scope.record = entity;
                assingData(entity);
                $scope.showima = 2;
                $('#validate').modal('show');
            }

        }
        ///////////

        $scope.deletemodal = function(entity){
            $scope.entity = entity;
            $('#cancel').modal('show');
        }

        $scope.viewimg = function(){
            //$scope.entity = entity;
            $('#showimg').modal('show');
        }

        var assingData = function(entity){
            $scope.record.lab = true;
            $scope.record.library = true;
            $scope.record.clinic = true;
            $scope.record.social_services = true;
            $scope.record.evidence = entity.evidence;
        }

        var clearData = function(){
            $scope.record.lab = false;
            $scope.record.library = false;
            $scope.record.clinic = false;
            $scope.record.social_services = false;
            $scope.record = {};

            
        }

        /*
        * Elimina la transaccion seleccionada
        */
        $scope.actiondelete = function(){
            $scope.schoolrecord.status_id = 4;
            $scope.schoolrecord.transact_type_id = $scope.entity.transact_type_id;
            $scope.schoolrecord.date = $scope.entity.date;
            $scope.schoolrecord.id = $scope.entity.id;
            $scope.schoolrecord.student_id = $scope.entity.student;
            $scope.schoolrecord.credential = $scope.entity.credential;
            $scope.schoolrecord.record = $scope.entity.record;
            $scope.schoolrecord.folio = $scope.entity.folio;
            schoolrecordFactory.delete($scope.schoolrecord)
            .success(function(data){
                Notification.success({
                    message: 'Se cancelo el tramite exitosamente.',
                    title: 'Success', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
            })
            .error(function(data){
                Notification.error({
                    message: 'Ocurrio un error al cancelar la suspensión!!!',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            });
            
        }

        /* 
        * Guarda las transacciones
        */
        $scope.savetransact = function(){
            $scope.record.status_id = 3;
            $scope.record.transact_type_id = $scope.entity.transact_type_id;
            $scope.record.date = $scope.entity.date;
            $scope.record.id = $scope.entity.id;
            $scope.record.student_id = $scope.entity.student;
            $scope.record.credential = $scope.entity.credential;
            $scope.record.record = $scope.entity.record;
            $scope.record.folio = $scope.entity.folio;
            if ($scope.record.credential==1) {
                if (typeof($scope.record.library) == 'undefined') {
                    Notification.error({
                        message: 'Seleccione si no tiene adeudos en la libreria',
                        title: '<b>Error</b>',
                        delay: 3000
                    });
                    return;
                };
                if (typeof($scope.record.lab) == 'undefined') {
                    Notification.error({
                        message: 'Seleccione si no tiene adeudos en los laboratorios',
                        title: '<b>Error</b>',
                        delay: 3000
                    });
                    return;
                };
                if (typeof($scope.record.clinic) == 'undefined') {
                    Notification.error({
                        message: 'Seleccione si no tiene adeudos en las clinicas',
                        title: '<b>Error</b>',
                        delay: 3000
                    });
                    return;
                };
                if (typeof($scope.record.social_services) == 'undefined') {
                    Notification.error({
                        message: 'Seleccione si no tiene adeudos en el departamento de servicios sociales',
                        title: '<b>Error</b>',
                        delay: 3000
                    });
                    return;
                };
                
            };
            $scope.record.evidence = $scope.file.base64;
            if (typeof($scope.file.base64) == 'undefined') {
                Notification.error({
                    message: 'Es necesario que ingrese la evidencía',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };
            
            schoolrecordFactory.update($scope.record)
            .success(function(data){
                Notification.success({
                    message: 'Se finalizo el proceso del tramite.',
                    title: 'Success', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al finalizar el tramite!!!</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            })
            
        }
 	});