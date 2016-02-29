'use strict';

angular.module('Enes')
    .controller('TeachersController', function ($scope, teacherFactory,partnersFactory,Notification) {
        $scope.teacher = {};
        $scope.teachers = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "noAccount", name: "noAccount", placeholder: "No Account" },
            { key: "email", name: "email", placeholder: "E-Mail..." }
        ];

        teacherFactory.getAllTeachers()
            .success(function(data){
                $scope.teachers=data;
            })
            .error(function(error){
                Notification.error(
                    {message: '<b>Error</b> <s>notificación</s>',
                        title: '<u>Error de cargar lista de profesores</u>',
                        delay: 5000});
            });


            partnersFactory.getAllData()
                .success(function(data){
                    $scope.partners = data;
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error!</b> Problemas de conexión',
                            title: '<b>Error</b>',
                            delay: 5000});
                });


        $scope.save = function(teacher){
            teacherFactory.save(teacher)
                .success(function(data){
                    Notification.success({message: 'Profesor '+ user.noAccount +' creado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al crear el profesor</u>',
                            delay: 5000});
                })
        }

        $scope.editTeacher = function(teacher){
            teacherFactory.update(teacher)
                .success(function(data){
                    $('#edit').modal('hide');
                    Notification.success({message: 'Profesor '+ user.noAccount +' actualizado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al actualizar el Profesor</u>',
                            delay: 5000});
                })
        }

        $scope.deleteTeacher = function(teacher){
            teacherFactory.delete(teacher)
                .success(function(data){
                    $('#delete').modal('hide');
                    Notification.success({message: 'Profesor '+ user.noAccount +' eliminado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al eliminar el profesor</u>',
                            delay: 5000});
                })
        }

        $scope.editTeacherModal = function(teacher){
            $scope.teacher = teacher;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showTeacher = function(teacher){
            $scope.teacher = teacher;
            $('#show').modal('show');
        }

        $scope.deleteTeacherModal = function(teacher){
            $scope.teacher = teacher;
            $('#delete').modal('show');
        }
    });
