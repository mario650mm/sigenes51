'use strict';

/**
 * @ngdoc function
 * @name EnesAuth.controller:registerTeachersController
 * @description
 * # DeleteTeachersCtrl
 * Controller for register of teachers
 */
angular.module('Enes')
    .controller('TeachersController', function ($scope, teacherFactory) {
        $scope.teacher = {};
        teacherFactory.getAllTeachers()
            .success(function(data){
                $scope.teachers=data;
            })
            .error(function(error){
                console.log(error);
            });

        $scope.save = function(teacher){
            teacherFactory.save(teacher)
                .success(function(data){
                    console.log(data);
                })
                .error(function(error){
                    console.log(error);
                })
        }

        $scope.editTeacher = function(teacher){
            teacherFactory.update(teacher)
                .success(function(data){
                    $('#edit').modal('hide');
                })
                .error(function(error){
                    console.log(error);
                })
        }

        $scope.deleteTeacher = function(teacher){
            teacherFactory.delete(teacher)
                .success(function(data){
                    $('#delete').modal('hide');
                })
                .error(function(error){
                    console.log(error);
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