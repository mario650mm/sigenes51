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
 	.controller('suspensionAdminCtrl', function($scope, suspensionFactory, Notification){
 		$scope.showResult = [];
        $scope.entity = {};
        $scope.suspend = {};
        $scope.files = [];
        $scope.file = {};
        $scope.isValidate = true;
        $scope.isHidden = true;

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
        		
        		$scope.showResult = data;
        	})
        	.error(function(error){
        		Notification.error({
                    message: '<u>Ocurrio un error al cargar la información</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
        	})
        }

        $scope.changeShow = function(entity){
            if (entity.estatus == 'Cancelado') {
                return false;
            }else{
                return true;
            }  
        }

        $scope.showval = function(entity){
            if (entity.estatus == 'Terminado') {
                return false;
            }else{
                return true;
            }
        }

        $scope.showValidate = function(entity){
            console.log('llego');
            $scope.entity = entity;
                $scope.isHiden = true;
                assingData(entity);
            
            $('#show').modal('show');
        }

        var assingData = function(entity){
            $scope.suspend.lab = true;
            $scope.suspend.library = true;
            $scope.suspend.clinic = true;
            $scope.suspend.social_services = true;
            $scope.suspend.evidence = atob(entity.evidence);
            
        }

        $scope.showsuspen = function(suspend){
            $scope.entity = suspend;
            $scope.isHiden = false;
            $('#show').modal('show');
        }

        $scope.deletesuspen = function(suspend){
            $scope.entity = suspend;
            $('#delete').modal('show');
        }


        var getDateSus = function(){
            var date = new Date();
            return date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
        }

        $scope.finishsuspension = function(){
            $scope.suspend.status_id = 3;
            $scope.suspend.period_id = $scope.entity.period_id;
            $scope.suspend.date_init = $scope.entity.date_init;
            $scope.suspend.id = $scope.entity.id;
            $scope.suspend.reason = $scope.entity.reason;
            $scope.suspend.student_id = $scope.entity.student;
            $scope.suspend.evidence = $scope.file.base64;
            $scope.suspend.date_end = getDateSus();
            if (typeof($scope.suspend.library) == 'undefined') {
                Notification.error({
                    message: 'Seleccione si no tiene adeudos en la libreria',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };
            if (typeof($scope.suspend.lab) == 'undefined') {
                Notification.error({
                    message: 'Seleccione si no tiene adeudos en los laboratorios',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };
            if (typeof($scope.suspend.clinic) == 'undefined') {
                Notification.error({
                    message: 'Seleccione si no tiene adeudos en las clinicas',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };
            if (typeof($scope.suspend.social_services) == 'undefined') {
                Notification.error({
                    message: 'Seleccione si no tiene adeudos en el departamento de servicios sociales',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };
            if (typeof($scope.file.base64) == 'undefined') {
                Notification.error({
                    message: 'Es necesario que ingrese la evidencía',
                    title: '<b>Error</b>',
                    delay: 3000
                });
                return;
            };

            suspensionFactory.update($scope.suspend)
            .success(function(data){
                Notification.success({
                    message: 'Se realizó la suspensión exitosamente!!!',
                    title: 'Success', 
                    delay: 5000
                });
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al realizar la suspensión!!!</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            })
        }

        $scope.actiondelete = function(){
            $scope.suspend.status_id = 4;
            $scope.suspend.period_id = $scope.entity.period_id;
            $scope.suspend.date_init = $scope.entity.date_init;
            $scope.suspend.id = $scope.entity.id;
            $scope.suspend.reason = $scope.entity.reason;
            $scope.suspend.student_id = $scope.entity.student;    
            suspensionFactory.delete($scope.suspend)
            .success(function(data){
                Notification.success({
                    message: 'Se cancelo la suspensión exitosamente, para notar los cambios favor de refrescar la pagina.',
                    title: 'Success', 
                    delay: 5000
                });
                $scope.isValidate = false;
            })
            .error(function(error){
                Notification.error({
                    message: '<b>Error</b> <s>notificación</s>',
                    title: '<u>Ocurrio un error al cancelar la suspensión!!!</u>',
                    delay: 3000
                });
            })
        }
 	});