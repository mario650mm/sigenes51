'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerAspirantController
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
    .controller('UsersController', function ($scope, userFactory, Notification) {
        $scope.user = {};
        $scope.users = [];

        // Fileds for search in user model
        $scope.availableSearchParams = [
            { key: "name", name: "Name", placeholder: "Name..." },
            { key: "email", name: "E-Mail", placeholder: "E-Mail..." },
            { key: "rfc", name: "RFC", placeholder: "RFC..." },
            { key: "type", name: "Type", placeholder: "Type...",restrictToSuggestedValues: true, suggestedValues: ['admin', 'student', 'employee'] }
        ];

        userFactory.getAllUsers()
            .success(function(data){
                $scope.users=data;
            })
            .error(function(error){
                console.log(error);
            });

         $scope.save = function(user){
            userFactory.save(user)
                .success(function(data){
                    Notification.success({message: 'Usuario '+ user.name +' creado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                         title: '<u>Error al crear el usuario</u>',
                         delay: 5000});
                })
         }

        $scope.editUser = function(user){
            userFactory.update(user)
                .success(function(data){
                    $('#edit').modal('hide');
                    Notification.success({message: 'Usuario '+ user.name +' actualizado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al actualizar el usuario</u>',
                            delay: 5000});
                })
        }

        $scope.deleteUser = function(user){
            userFactory.delete(user)
                .success(function(data){
                    $('#delete').modal('hide');
                    Notification.success({message: 'Usuario '+ user.name +' eliminado correctamente.', delay: 5000});
                })
                .error(function(error){
                    Notification.error(
                        {message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al eliminar el usuario</u>',
                            delay: 5000});
                })
        }

        $scope.editUserModal = function(user){
            $scope.user = user;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showUser = function(user){
            $scope.user = user;
            $('#show').modal('show');
        }

        $scope.deleteUserModal = function(user){
            $scope.user = user;
            $('#delete').modal('show');
        }
});