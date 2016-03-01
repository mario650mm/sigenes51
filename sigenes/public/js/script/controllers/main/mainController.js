/**
 * Created by taxque on 21/02/16.
 */
'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerAspirantController
 * @description
 * # DeleteuserCtrl
 * Controller of the principalApp
 */
angular.module('Enes')
    .controller('MainController', function ($scope, $location) {
        $scope.sort = function(keyname){
            $scope.sortKey = keyname;   //set the sortKey to the param passed
            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        }
        $scope.urlId = '';
        $scope.urlId = $location.absUrl().split('/')[$location.absUrl().split('/').length-1];
    });