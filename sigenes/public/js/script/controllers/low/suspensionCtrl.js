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
    .controller('SuspensionsController', function ($scope, suspensionFactory, Notification) {
        $scope.periods      = {};
        $scope.period_ids;
        $scope.userSusp     = {};
        $scope.suspen       = {};
        $scope.reason;
        $scope.viewNote     = false;
        $scope.btnprint     = false;
        $scope.btnapply     = true;
        $scope.validate;
        $scope.information;
        $scope.chance       = false;

        /**  
        *    funcion main que carga los datos 
        *    iniciales del controlador, llama funciones y carga 
        *    los datos en la vista. 
        */
        $scope.init = function(paramint){
            getPeriods();
            getDateSus();
            ver(paramint);
            //getValidator();
        }

        //vuelve visible o no el panel del notas
        $scope.chanceView = function(){
            $scope.viewNote = !$scope.viewNote;
        }

        /**
        *   Carga la fecha actual al campo de dia 
        */
        var getDateSus = function(){
            var date = new Date();
            $scope.suspen.date_init = date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate();
        }

        /**
        *   Carga los periodos en el combo
        */
        var getPeriods = function(){
            suspensionFactory.getAllPeriod()
            .success(function(data){
                $scope.periods = data;
                angular.forEach(data, function(value, key){
                    $scope.periods[key].title = value.month_init + ' - ' + value.month_end + ' ' + value.year; 
                    $scope.periods[key].period_id = value.id;
                })
            })
            .error(function(error){
                console.log(error);
            })
        }
        
        /**
        *   Trae la información del estudiante
        */
        var ver = function(intpa){
            suspensionFactory.getAllSusPartn(intpa)
            .success(function(data){
                console.log(data);
                $scope.userSusp.nombre = data.name + ' ' + data.firstlastname 
                        + ' ' + data.secondlastname;
                $scope.userSusp.account_number = data.student.account_number;
                $scope.userSusp.celphone = data.celphone;
                $scope.userSusp.student = data.student.id;
                $scope.userSusp.telephone = data.telephone;
                $scope.userSusp.email = data.email1;
                $scope.userSusp.career = 'Odontología';
                $scope.validate = data.student.id;
                getValidator($scope.validate);
                 
            })
            .error(function(error){
                console.log(error);
            })  
        }
        $scope.verification = function(entity){
            updateSuspen(entity);
        }

        $scope.cancelveri = function(entity){
            initData(entity)
        }

        var getValidator = function(paramint){
            $scope.notificateTitle = "Estatus de solicitud.";
            $scope.elementText = "Su solitud actualmente se encuentra en un estado de borrador. \n" 
            + "Desea cambiar el estatus de esta a tramitado para continuar con su debido" + 
            " proceso?";
            suspensionFactory.getValidate(paramint)
            .success(function(data){
                if(data.status_id == 1){
                    $scope.btnapply = false;
                    $scope.information = data;
                    Notification.info({
                        message: "Estimado alumno", 
                        templateUrl: "change_status.html", 
                        scope: $scope});
                }else{
                    initData(data);
                }
                
            })
            .error(function(error){
                console.log(error);
            })
        }

        /**
        *   Inicia los datos de la vista con la informacion de
        *   la suspencion en caso de que ubiera un registro
        */
        var initData = function(paramObject){
            $scope.suspen.reason = paramObject.reason;
            $scope.reason = paramObject.reason;
            $scope.suspen.period_id = paramObject.period_id;
            $scope.period_ids = paramObject.period_id;
            $scope.suspen.student_id = paramObject.student;
            $scope.suspen.status_id = paramObject.status_id;
            $scope.suspen.date_init= paramObject.date_init;
            if ($scope.suspen.status_id == 1) {
                $scope.btnapply = false;
            }
            if ($scope.suspen.status_id == 2) {
                $scope.btnapply = false;
                $scope.btnprint = !$scope.btnprint;
                $scope.viewNote = !$scope.viewNote;
            };
            
        }

        /**
        *   Actualiza el estatus de una suspención para
        *   continuar con el proceso. 
        */
        var updateSuspen = function(paramObject){
            paramObject.status_id = 2;
            suspensionFactory.update(paramObject)
            .success(function(data){
                Notification({
                    title: 'Information',
                    message: 'Se a completado el proceso de solicitud, \nfavor de imprimir su pdf para la recoleccion de firmas.', 
                    delay: 5000
                });
                initData(paramObject);
            })
            .error(function(error){

                console.log(error);
            })
            
        }

        /**
        * Guarda la peticion de suspension en 
        * la tabla de suspenciones
        */
        $scope.save = function(period){

            if($scope.period_ids == -1 || typeof($scope.period_ids) == 'undefined'){
                Notification.error({
                    message: '<u>Seleccione un periodo</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
                return;
            }
            if(typeof($scope.reason) == 'undefined'){
                Notification.error({
                    message: '<u>Es necesario la indicar la razon de la suspensión</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 3000
                });
                return;
            }

            $scope.suspen.reason = $scope.reason;
            $scope.suspen.period_id = $scope.period_ids;
            $scope.suspen.student_id = $scope.userSusp.student;
            $scope.suspen.status_id = 1;
            
            suspensionFactory.save($scope.suspen)
            .success(function(data){
                console.log(data);
                if(data){
                    Notification.success({
                        title: 'Success',
                        message: 'Registro efectuado.', 
                        delay: 5000
                    });
                    setTimeout('document.location.reload()',3000);
                }
            })
            .error(function(error){
                Notification.error({
                    message: '<u>Ocurrio un error al generar la suspensión</u>',
                    title: '<b>Error</b> <s>notificación</s>',
                    delay: 5000
                });
            })
        }
        

    });