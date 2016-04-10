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
        $scope.genconst = 0;

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
            if(entity.transact_type_id != null){
                if(entity.transact_type_id == 6 && entity.estatus == 'Terminado'){
                    $scope.genconst = 1;
                }else{
                    $scope.genconst = 0;
                }
            }else{
                $scope.genconst = 0;
            }
            if (entity.estatus == 'Terminado') {
                return false;
            }else{
                return true;
            }

        }

        $scope.showconstan = function(entity){
            window.location.href='/api/v1/recordprint/'+entity.student;
        }

        /*
        *
        */
        $scope.showValidate = function(entity){
            clearData();
            $scope.entity = entity;
            updatetransact();

        }
        ///////////

        $scope.deletemodal = function(entity){
            $scope.entity = entity;
            $('#cancel').modal('show');
        }

        var clearData = function(){
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

        

        var updatetransact = function(){
            $scope.record.status_id = 3;
            $scope.record.transact_type_id = $scope.entity.transact_type_id;
            $scope.record.date = $scope.entity.date;
            $scope.record.id = $scope.entity.id;
            $scope.record.student_id = $scope.entity.student;
            $scope.record.credential = $scope.entity.credential;
            $scope.record.record = $scope.entity.record;
            $scope.record.folio = $scope.entity.folio;
            
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