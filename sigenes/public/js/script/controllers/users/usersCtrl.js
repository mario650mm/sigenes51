'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerAspirantController
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
    .controller('UserController', function ($scope, $http, userFactory) {
        userFactory.getAllUsers()
         .success(function(data){
         $scope.data=data;
         })
         .error(function(error){
         console.log(error);
         });

        $scope.save = function($user){
         userFactory.save($user)
         .success(function(data){
         console.log(data);
         })
         .error(function(error){
         console.log(error);
         })
         }
    });