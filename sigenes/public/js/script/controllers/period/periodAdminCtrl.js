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
  .controller('periodAdminCtrl', function($scope, periodFactory, Notification){
 		$scope.period = {};
 		$scope.entityPeriod = [];
    
    // Fileds for search in user model
    $scope.availableSearchParams = [
      { key: "month_init", name: "Month init", placeholder: "Month init..." },
      { key: "month_end", name: "Month end", placeholder: "Month end..." },
      { key: "year", name: "Year", placeholder: "Year..." },
      { key: "date_init", name: "Date init", placeholder: "Date init..." },
      { key: "date_end", name: "Date end", placeholder: "Date end..." }
    ];

    $scope.showData = function(){
      periodFactory.getInfo()
      .success(function(data){
        $scope.entityPeriod = data;
      })
      .error(function(error){
        Notification.error({
          message: '<u>Ocurrio un error al generar la suspensión</u>',
          title: '<i class="fa fa-exclamation-triangle"></i> <b>Error</b> <s>notificación</s>',
          delay: 5000
        });
      })
    }

    $scope.saveperiod = function(){
      $scope.period.date_init = $('#date_init').val();
      $scope.period.date_end = $('#date_end').val();
 			periodFactory.save($scope.period)
 			.success(function(data){
 				if (data.created) {
 					Notification.success({
            title: '<i class="fa fa-info-circle"></i> Success',
            message: 'Registro efectuado.', 
            delay: 5000
          });
          setTimeout('document.location.reload()',3000);
 				};
 			})
 			.error(function (error) {
        $scope.error = "";
        angular.forEach(error.errors,function(value){
          $scope.error += value + "</br>";
        })
        Notification.error({
          message: '<b>Error</b> </br>'+$scope.error,
          title: '<u>Error al crear el periodo</u>',
          delay: 10000
        });
      });
 		}

    $scope.editperiod = function(entity){
      console.log(entity);
      $scope.period = entity;
      $('#editPeriod').modal('show');
    }

    $scope.deleteperiod = function(entity){
      $scope.period = entity;
      $('#deleteperiod').modal('show');
    }

    $scope.actiondelete = function(id){
      periodFactory.delete(id)
      .success(function(data){
        Notification.success({
            title: '<i class="fa fa-info-circle"></i> Eliminacion de periodo',
            message: 'Se elimino correctamente el periodo indicado.', 
            delay: 5000
          });
          setTimeout('document.location.reload()',3000);
      })
      .error(function(error){
        Notification.error({
          message: '<u>Ocurrio un error al eliminar el periodo</u>',
          title: '<i class="fa fa-exclamation-triangle"></i> <b>Error</b> <s>notificación</s>',
          delay: 5000
        });
      })
    }


    $scope.updateperiod = function(){
      console.log('llego');
      $scope.period.date_init = $('#date_init').val();
      $scope.period.date_end = $('#date_end').val();
      if (typeof($scope.period.month_init) == 'undefined' && typeof($scope.period.month_end) == 'undefined' 
        && typeof($scope.period.date_init) == 'undefined' && typeof($scope.period.date_end) == 'undefined' && 
        typeof($scope.period.year) == 'undefined') {
        return;
      };
      periodFactory.update($scope.period)
      .success(function(data){
        if (data.updated) {
          Notification.success({
            title: '<i class="fa fa-info-circle"></i> Success',
            message: 'Se ha actualizado el periodo exitosamante.', 
            delay: 5000
          });
          setTimeout('document.location.reload()',3000);
        };
      })
      .error(function(error){
        Notification.error({
          message: '<u>Ocurrio un error al actualizar el periodo</u>',
          title: '<i class="fa fa-exclamation-triangle"></i> <b>Error</b> <s>notificación</s>',
          delay: 5000
        });
      });
    }

 	});