'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: StudiePlansController
 * @param $scope
 * @requires
 * @methodOf ng.controller:Enes
 * @description
 * My Description rules
 */

angular.module('Enes')
    .controller('StudiePlansController', function ($scope, studiePlansFactory, Notification) {
        $scope.studiePlan = [];
        $scope.studiePlans = [];

        $scope.availableSearchParams = [
            {key: "name", name: "Nombre", placeholder: "Nombre .."},
            {key: "key", name: "Clave", placeholder: "Clave .."}
        ];

        studiePlansFactory.getAllData()
            .success(function (data) {
                $scope.studiePlans = data;
            })
            .error(function (error) {
                Notification.error(
                    {
                        message: '<b>Error!</b> Problemas de conexión',
                        title: '<b>Error</b>',
                        delay: 5000
                    });
            });


        $scope.save = function (studiePlan) {
            console.log($scope.studiePlan);
            studiePlansFactory.save(studiePlan)
                .success(function (data) {
                    Notification.success({
                        message: 'Plan de estudios ' + studiePlan.name + ' creado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    $scope.error = "";
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error(
                        {
                            message: '<b>Error</b> </br>'+$scope.error,
                            title: '<u>Error al crear el plan de estudios</u>',
                            delay: 10000
                        });
                })

        }

        $scope.editPlan = function (studiePlan) {
            studiePlansFactory.update(studiePlan)
                .success(function (data) {
                    $('#edit').modal('hide');
                    Notification.success({
                        message: 'Plan de estudios ' + studiePlan.name + ' actualizado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    $scope.error = "";
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error(
                        {
                            message: '<b>Error</b> </br>'+$scope.error,
                            title: '<u>Error al actualizar el plan de estudios</u>',
                            delay: 10000
                        });
                })
        }

        $scope.deletePlan = function (studiePlan) {
            studiePlansFactory.delete(studiePlan)
                .success(function (data) {
                    $('#delete').modal('hide');
                    Notification.success({
                        message: 'Plan de estudios ' + studiePlan.name + ' eliminado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    $scope.error = "";
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error(
                        {
                            message: '<b>Error</b> </br>'+$scope.error,
                            title: '<u>Error al eliminar el plan de estudios</u>',
                            delay: 10000
                        });
                })
        }

        $scope.editPlanModal = function (studiePlan) {
            $scope.studiePlan = studiePlan;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showPlan = function (studiePlan) {
            $scope.studiePlan = studiePlan;
            $('#show').modal('show');
        }

        $scope.deletePlanModal = function (studiePlan) {
            $scope.studiePlan = studiePlan;
            $('#delete').modal('show');
        }
    });
