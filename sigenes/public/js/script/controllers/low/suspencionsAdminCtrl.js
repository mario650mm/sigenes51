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
            { key: "account_number", name: "No. cuenta", placeholder: "No. cuenta..." },
            { key: "date_init", name: "Fecha", placeholder: "Fecha... (YYYY-MM-D)" },
            { key: "name_period", name: "Periodo", placeholder: "Periodo..." },
            { key: "estatus", name: "Estatus", placeholder: "Estatus..." },
            { key: "career", name: "Carrera", placeholder: "Carrera..."}//,restrictToSuggestedValues: true, suggestedValues: ['admin', 'student', 'employee'] }
        ];

        /*
        * Carga la información de las suspensiones que se encuentran
        * registradas
        */
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

        /*
        * Cambian los estados
        */
        $scope.changeShow = function(entity){
            if (entity.estatus == 'Cancelado' || entity.estatus == 'Autorizado' ) {
                return false;
            }else{
                return true;
            }  
        }

        $scope.showval = function(entity){
            if (entity.estatus == 'Recibido') {
                return false;
            }else{
                return true;
            }
        }

        $scope.showValidate = function(entity){
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
            $scope.suspend.evidence = entity.evidence;
            
        }

        $scope.showsuspen = function(suspend){
            $scope.entity = suspend;
            $scope.suspend.evidence = suspend.evidence;
            $scope.isHiden = false;
            if ($scope.suspend.status_id == 5) {};
            $('#show').modal('show');
        }

        $scope.showimage = function(suspend){
            $('#showimg').modal('show');
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
            $scope.suspend.status_id = 5;
            $scope.suspend.period_id = $scope.entity.period_id;
            $scope.suspend.date_init = $scope.entity.date_init;
            $scope.suspend.id = $scope.entity.id;
            $scope.suspend.reason = $scope.entity.reason;
            $scope.suspend.student_id = $scope.entity.student;
            $scope.suspend.date_end = getDateSus();
            suspensionFactory.update($scope.suspend)
            .success(function(data){
                Notification.success({
                    message: 'Se recibido la solicitud de suspensión se inicio el proceso de validación',
                    title: 'Success', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al realizar la suspensión!!!</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
            })
        }

        $scope.endsuspen = function(){
            $scope.suspend.status_id = 6;
            $scope.suspend.period_id = $scope.entity.period_id;
            $scope.suspend.date_init = $scope.entity.date_init;
            $scope.suspend.id = $scope.entity.id;
            $scope.suspend.reason = $scope.entity.reason;
            $scope.suspend.student_id = $scope.entity.student;
            $scope.suspend.date_end = getDateSus();
            
            suspensionFactory.update($scope.suspend)
            .success(function(data){
                Notification.success({
                    message: 'Se realizó la suspensión exitosamente!!!',
                    title: 'Success', 
                    delay: 5000
                });
                setTimeout('document.location.reload()',3000);
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
                    message: 'Se cancelo la suspensión exitosamente.',
                    title: 'Success', 
                    delay: 5000
                });

                $scope.isValidate = false;
                setTimeout('document.location.reload()',3000);
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