 angular.module('Enes')
 	.controller('schoolrecordTypeAdminCtrl', function(schoolrecordTypeFactory,$scope, Notification, $window){
 		$scope.records = {};
 		$scope.recordtype = {};
        $scope.entityrecord = [];
        $scope.entity = {};
        $scope.base;

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "name", name: "Name", placeholder: "Name..." },
            { key: "description", name: "Description", placeholder: "Description..." },
            { key: "date", name: "Date", placeholder: "Date..." }//,restrictToSuggestedValues: true, suggestedValues: ['admin', 'student', 'employee'] }
        ];

        /*
        * Inicializa la aplicación y trae los datos de las constancias 
        * que se encuentran registradas.
        */
        $scope.init = function(){
            schoolrecordTypeFactory.getInfo()
            .success(function(data){
                $scope.entityrecord = data;
            })
            .error(function(error){
                Notification.error({
                    message: '<b>Error!</b> Problemas de conexión',
                    title: '<b>Error</b>',
                    delay: 5000});
            });
        }

        /*
        * Muestra el modal que trae la información para eliminar el 
        * registro de constancias
        */
        $scope.delete = function(entity){
            $scope.entity = entity;
            $('#cancel').modal('show');
        }

        $scope.showView = function(entity){
            $scope.entity = entity;
            $scope.base = '<iframe src="data:application/pdf;base64,' + $scope.entity.record+'" style="height: 500px; width: 100%" ></iframe>';
            $('#showView').modal('show');
        }

        $scope.editview = function(entity){
            $scope.recordtype = entity;
            $('#showedit').modal('show');
        };

        $scope.editaction = function(){
            schoolrecordTypeFactory.update($scope.recordtype)
            .success(function(data){
                Notification.success({
                    title: 'Actualización',
                    message: 'La constancia se ha actualizado sin problema alguno.',
                    delay: 5000
                });
            })
            .error(function(error){
                $scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al generar la constancia</u>',
                    delay: 10000
                });
            });
        }

        /*
        * Elimina el registro de la constancia seleccionada
        */
        $scope.deleteAction = function(paramInt){
            schoolrecordTypeFactory.delete(paramInt)
            .success(function(data){
                Notification.success({
                    message: 'Se ha eliminado la constancia correctamente.',
                    delay: 5000});
                setTimeout('document.location.reload()',3000);
            })
            .error(function(error){
                $scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al eliminar la constancia</u>',
                    delay: 10000
                });
            });
        }
 		
 		$scope.onLoad = function (e, reader, file, fileList, fileOjects, fileObj) {
            Notification.success({
                message: 'Archivo adjuntado correctamente.',
                delay: 5000});
            console.log($scope.records);
        };

        $scope.submitForm = function(isValid) {
            if (isValid) {
            }
        };

        /*
        * Crea el registro de la constancia
        */
        $scope.saveRecord = function(){
        	$scope.recordtype.record = $scope.records.base64;
        	console.log($scope.recordtype);
            schoolrecordTypeFactory.save($scope.recordtype)
            .success(function(data){
            	Notification.success({
            		message: 'La constancia se ha creado correctamente.',
            		delay: 5000});
            })
            .error(function(error){
                $scope.error = "";
                angular.forEach(error.errors,function(value){
                    $scope.error += value + "</br>";
                });
                Notification.error({
                    message: '<b>Error</b> </br>'+$scope.error,
                    title: '<u>Error al generar la constancia</u>',
                    delay: 10000
                });
            });
        };
 	});