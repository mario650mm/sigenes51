'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:Administrator
 * @description
 * # DeleteTeacherCtrl
 */
angular.module('Enes')
    .controller('TeachersController', function ($scope, userFactory, Notification) {
        $scope.teacher = {};
        $scope.teachers = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "noAccount", name: "noAccount", placeholder: "No Account" },
            { key: "email", name: "email", placeholder: "Email Address" }
        ];

        userFactory.getAllTeachers()
            .success(function(data){
                $scope.users=data;
            })
            .error(function(error){
                console.log(error);
            });

        $scope.save = function(teacher){
            userFactory.save(teacher)
                .success(function(data){
                    Notification.success({message: 'Profesor '+ teacher.noAccount +' creado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al crear el profesor</u>',
                            delay: 5000});
                })
        }

        $scope.editTeacher = function(teacher){
            userFactory.update(teacher)
                .success(function(data){
                    $('#edit').modal('hide');
                    Notification.success({message: 'Profesor '+ teacher.noAccount+' actualizado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al actualizar el usuario</u>',
                            delay: 5000});
                })
        }

        $scope.deleteTeacher = function(user){
            userFactory.delete(user)
                .success(function(data){
                    $('#delete').modal('hide');
                    Notification.success({message: 'Profesor '+ teacher.noAccount +' eliminado correctamente.', delay: 5000});
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

        $scope.deleteUserModal = function(teacher){
            $scope.teacher = teacher;
            $('#delete').modal('show');
        }
    });