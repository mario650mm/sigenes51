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
    .controller('MainController', function ($scope, $location, Notification) {
        $scope.sort = function(keyname){
            $scope.sortKey = keyname;   //set the sortKey to the param passed
            $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        }
        $scope.urlId = '';
        $scope.urlId = $location.absUrl().split('/')[$location.absUrl().split('/').length-1];

        $scope.imageMIME = function(image){
            var MIME = "";
            try{
            	if(image.charAt(0)=='/'){
                    return "data:image/jpeg;base64," + image;
                }else if(image.charAt(0)=='i'){
                    return "data:image/png;base64," + image;
                }
            }catch(e){
                return "";
            }
        }

        $scope.showModelPdf = function(pdf){
            if (pdf != null) {
                try{
                    if (pdf.charAt(0)=='J') {
                        var aux = '<iframe src="data:application/pdf;base64,' + pdf +'" style="height: 580px; width: 100%" ></iframe>';
                        pdf = aux;
                    };
                }catch(err){
                    pdf = pdf;
                }
                $.fancybox.open({content: pdf, type: 'html',closeClick : true, 
                    closeBtn  : false, autoSize: false, width: 869,
                    height:780,autoCenter:true,
                    helpers : {
                        overlay : {
                            css : {
                                'background' : 'rgba(0, 7, 0, 0.85)'
                            },
                            locked:false
                        },
                        title: {
                            type: 'outside',
                            position: 'top'
                        }
                    },
                    afterShow: function(){
                        $("body").css({'overflow-y':'hidden'});
                        $("html").css({'overflow-y':'hidden'});
                        $.fancybox.reposition();
                    },
                    afterClose: function(){
                        $("body").css({'overflow-y':'visible'});
                        $("html").css({'overflow-y':'visible'});
                    }
                });
            }else{
                Notification.error({
                    message: 'No se encontro pdf, favor de indicar la constancia o archivo',
                    title: 'Error',
                    delay: 10000
                })
            }
        }
    });