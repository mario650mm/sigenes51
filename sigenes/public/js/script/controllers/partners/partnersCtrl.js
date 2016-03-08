'use strict';
/**
 * @ngdoc controller
 * @name Enes.controller: PartnersController
 * @param $scope
 * @requires
 * @methodOf ng.controller:Enes
 * @description
 * My Description rules
 */

angular.module('Enes')
    .controller('PartnersController', function ($scope,partnersFactory, Notification) {
        $scope.partner = {};
        $scope.partners = [];

        $scope.availableSearchParams = [
            { key: "name", name: "Name", placeholder: "Name..." },
        ];

        partnersFactory.getAllData()
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


        $scope.save = function (partner) {
            partnerFactory.save(partner)
                .success(function (data) {
                    Notification.success({
                        message: 'Profesor ' + partner.name + ' creado correctamente.',
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
        }

        $scope.editPartner = function (partner) {
            partnerFactory.update(partner)
                .success(function (data) {
                    $('#edit').modal('hide');
                    Notification.success({
                        message: 'Profesor ' + partner.name + ' actualizado correctamente.',
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

        $scope.deletePartner = function (partner) {
            partnerFactory.delete(partner)
                .success(function (data) {
                    $('#delete').modal('hide');
                    Notification.success({
                        message: 'Profesor ' + partner.name + ' eliminado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    Notification.error(
                        {
                            message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al eliminar el profesor</u>',
                            delay: 5000
                        });
                })
        }

        $scope.editPatnerModal = function (partner) {
            $scope.partner = partner;
            $scope.edit = true;
            $('#edit').modal('show');
        }

        $scope.showPartner = function (partner) {
            $scope.partner = partner;
            $('#show').modal('show');
        }

        $scope.deletePartnerModal = function (partner) {
            $scope.partner = partner;
            $('#delete').modal('show');
        }
    });
