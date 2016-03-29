'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: TeachersController
 * @param $scope
 * @requires
 * @methodOf ng.controller:Enes
 * @description
 * My Description rules
 */

angular.module('Enes')
    .controller('TeachersController', function ($scope,teacherFactory, partnersFactory, Notification) {
        $scope.teacher = {};
        $scope.partner = {};
        $scope.teachers = [];
        /**
         * Profesores de Carrera (Tiempo completo)
         * Profesores de Asignatura (Horas de trabajo)
         **/
        $scope.type = [{'type':'Carrera'},{'type':'Asignatura'}];
        $scope.role;

        $scope.availableSearchParams = [
            { key: "name", name: "Nombre", placeholder: "Nombre.." },
            { key: "rfc", name: "RFC", placeholder: "RFC.." },
            { key: "curp", name: "CURP", placeholder: "CURP.." },
            { key: "sex", name: "Sexo", placeholder: "Sexo.." },
            { key: "type", name: "Tipo", placeholder: "Tipo.."}
        ];

        teacherFactory.getAllTeachers()
            .success(function (data) {
                $scope.teachers = data;
            })
            .error(function (error) {
                Notification.error(
                    {
                        message: '<b>Error</b> <s>notificación</s>',
                        title: '<u>Error de cargar lista de profesores</u>',
                        delay: 5000
                    });
            });

        partnersFactory.getAllEmployee()
            .success(function (data) {
                $scope.partners = data;
            })
            .error(function (error) {
                Notification.error(
                    {
                        message: '<b>Error!</b> Problemas de conexión',
                        title: '<b>Error</b>',
                        delay: 5000
                    });
            });


        $scope.save = function () {

            partnersFactory.save($scope.partner)
                .success(function (data) {
                    $scope.teacher.partner_id = data.partner_id;
                    teacherFactory.save($scope.teacher)
                        .success(function (data) {
                            Notification.success({
                                message: 'Profesor ' + $scope.partner.name + ' creado correctamente.',
                                delay: 5000
                            });
                        })
                        .error(function (error) {
                            Notification.error(
                                {
                                    message: '<b>Error</b> <s>notificación</s>',
                                    title: '<u>Error al crear el profesor</u>',
                                    delay: 5000
                                });
                        })
                })

                .error(function (error) {
                    $scope.error = "";
                    angular.forEach(error.errors,function(value){
                        $scope.error += value + "</br>";
                    })
                    Notification.error(
                        {
                            message: '<b>Error</b> </br>'+$scope.error,
                            title: '<u>Error al crear el profesor</u>',
                            delay: 10000
                        });
                })


        }

        $scope.editTeacher = function () {
            partnersFactory.update($scope.partner)
                .success(function (data) {
                    $scope.teacher.partner_id = data.partner_id;
                    $('#edit').modal('hide');
                    Notification.success({
                        message: 'Socio ' + partner.name + ' actualizado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    Notification.error(
                        {
                            message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al actualizar el Socio</u>',
                            delay: 5000
                        });
                })

            teacherFactory.update($scope.teacher)

                .success(function (data) {
                    $('#edit').modal('hide');
                    Notification.success({
                        message: 'Profesor ' + teacher.noAccount + ' actualizado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    Notification.error(
                        {
                            message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al actualizar el Profesor</u>',
                            delay: 5000
                        });
                })
        }

        $scope.deleteTeacher = function (partner) {
            partnersFactory.delete(partner)
                .success(function (data) {
                    $('#delete').modal('hide');
                    Notification.success({
                        message: 'Socio ' + partner.name + ' eliminado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    Notification.error(
                        {
                            message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al eliminar el socio</u>',
                            delay: 5000
                        });
                })
        }

        $scope.editTeacherModal = function (partner,teacher) {
            $scope.partner = partner;
            $scope.teacher = teacher;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showTeacher = function (teacher) {
            $scope.teacher = teacher;
            $('#show').modal('show');
        }

        $scope.deleteTeacherModal = function (teacher) {
            $scope.teacher = teacher;
            $('#delete').modal('show');
        }
    });
