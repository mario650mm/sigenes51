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
    .controller('PartnersController', function ($scope, partnersFactory,userFactory, Notification) {
        $scope.partner = {};
        $scope.partners = [];

        $scope.availableSearchParams = [
            {key: "name", name: "Nombre", placeholder: "Nombre .."},
            {key: "curp", name: "Curp", placeholder: "Curp .."},
            {key: "email1", name: "Correo 1", placeholder: "Correo 1 .."},
            {key: "email2", name: "Correo 2", placeholder: "Correo 2 .."},
            {key: "sex", name: "Sexo", placeholder: "Sexo .."}
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

        userFactory.getUsers()
            .success(function (data) {
                $scope.users = data;
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
            partnersFactory.save(partner)
                .success(function (data) {
                    Notification.success({
                        message: 'Socio ' + partner.name + ' creado correctamente.',
                        delay: 5000
                    });
                })
                .error(function (error) {
                    Notification.error(
                        {
                            message: '<b>Error</b> <s>notificación</s>',
                            title: '<u>Error al crear el Socio</u>',
                            delay: 5000
                        });
                })
        }

        $scope.editPartner = function (partner) {
            partnersFactory.update(partner)
                .success(function (data) {
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
        }

        $scope.deletePartner = function (partner) {
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

        $scope.editPartnerModal = function (partner) {
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
