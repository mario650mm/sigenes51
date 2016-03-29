'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: SchoolsController
 * @param $scope
 * @requires
 * @methodOf ng.controller:Enes
 * @description
 * My Description rules
 */

angular.module('Enes')
    .controller('SchoolsController', function ($scope, schoolFactory, Notification) {
        $scope.school = [];
        $scope.schools = [];

        $scope.availableSearchParams = [
            {key: "name", name: "Nombre", placeholder: "Nombre .."},
            {key: "key", name: "Clave", placeholder: "Clave .."},
        ];

        schoolFactory.getAllData()
            .success(function (data) {
                $scope.schools = data;
                //console.log(data);
            })
            .error(function (error) {
                Notification.error(
                    {
                        message: '<b>Error!</b> Problemas de conexión',
                        title: '<b>Error</b>',
                        delay: 5000
                    });
            });


        $scope.save = function (school) {
            schoolFactory.save(school)
                .success(function (data) {
                    Notification.success({
                        message: 'Escuela ' + school.name + ' creada correctamente.',
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
                            title: '<u>Error al crear la escuela</u>',
                            delay: 10000
                        });
                })

        }

        $scope.editSchool = function (school) {
            schoolFactory.update(school)
                .success(function (data) {
                    $('#edit').modal('hide');
                    Notification.success({
                        message: 'Escuela ' + school.name + ' actualizada correctamente.',
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
                            title: '<u>Error al actualizar la escuela</u>',
                            delay: 10000
                        });
                })
        }

        $scope.deleteSchool = function (school) {
            schoolFactory.delete(school)
                .success(function (data) {
                    $('#delete').modal('hide');
                    Notification.success({
                        message: 'Escuela ' + school.name + ' eliminada correctamente.',
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
                            title: '<u>Error al eliminar la escuela</u>',
                            delay: 10000
                        });
                })
        }

        $scope.editSchoolModal = function (school) {
            $scope.school = school;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showSchool = function (school) {
            $scope.school = school;
            $('#show').modal('show');
        }

        $scope.deleteSchoolModal = function (school) {
            $scope.school = school;
            $('#delete').modal('show');
        }
    });
