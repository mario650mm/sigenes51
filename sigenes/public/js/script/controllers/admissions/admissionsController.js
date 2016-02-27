/**
 * Created by taxque on 27/02/16.
 */
angular.module('EnesAuth')
    .controller('AdmissionController', function ($scope) {
        $scope.step=2;

        $scope.next = function(){
            $scope.step +=1;
        }

        $scope.back = function(){
            $scope.step -=1;
        }

        $scope.submitForm = function(isValid) {
            if (isValid) {
                next();
            }
        };


    });