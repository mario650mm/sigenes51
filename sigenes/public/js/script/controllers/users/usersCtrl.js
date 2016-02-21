'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerAspirantController
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
    .controller('UsersController', function ($scope, userFactory) {
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
                    console.log(data);
                })
                .error(function(error){
                    console.log(error);
                })
         }

        $scope.editUser = function(user){
            userFactory.update(user)
                .success(function(data){
                    $('#edit').modal('hide');
                })
                .error(function(error){
                    console.log(error);
                })
        }

        $scope.deleteUser = function(user){
            userFactory.delete(user)
                .success(function(data){
                    $('#delete').modal('hide');
                })
                .error(function(error){
                    console.log(error);
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