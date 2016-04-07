/**
 * Created by taxque on 27/02/16.
 */
'use strict';
/**
 * @ngdoc directive
 * @name principalApp.directive:appdirective
 * @description
 * # appdirective
 */
angular.module('EnesAuth')
    .directive('mailValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var mailregex = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
                ngModel.$parsers.unshift(function(viewValue){
                    var value = element.val();
                    if(mailregex.test(value)) {
                        ngModel.$setValidity('mailcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('mailcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('rfcValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                // var rfcregex =  /^\b\d{3}[-.]?\d{3}[-.]?\d{4}\b$/;
                ngModel.$parsers.unshift(function(viewValue){
                    var rfcStr = element.val();
                    if (rfcStr.length == 12){
                        var rfcregex = /^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))$/;
                    }else{
                        var rfcregex = /^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))$/;
                    }
                    if(rfcregex.test(viewValue)) {
                        ngModel.$setValidity('rfccheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('rfccheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('curpValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                ngModel.$parsers.unshift(function(viewValue){
                    var curpregex = /^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/;
                    if(curpregex.test(viewValue)) {
                        ngModel.$setValidity('curpcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('curpcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('ladaValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var ladaregex = /^[0-9]{3}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(ladaregex.test(viewValue)) {
                        ngModel.$setValidity('ladacheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('ladacheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('numbertelValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numbertelregex =  /^[0-9]{7}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numbertelregex.test(viewValue)) {
                        ngModel.$setValidity('numbertelcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbertelcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('phoneValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var phoneregex =  /^\b\d{3}[-.]?\d{3}[-.]?\d{4}\b$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(phoneregex.test(viewValue)) {
                        ngModel.$setValidity('phonecheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('phonecheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('textValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var textregex = /^([a-z ñáéíóú]{2,60}|)$/i;
                ngModel.$parsers.unshift(function(viewValue){
                    if(textregex.test(viewValue)) {
                        ngModel.$setValidity('textcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('textcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('cpValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var cpregex =  /^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(cpregex.test(viewValue)) {
                        ngModel.$setValidity('cpcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('cpcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('urlValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var urlregex =  /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(urlregex.test(viewValue)) {
                        ngModel.$setValidity('urlcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('urlcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('decimalValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var deciamlregex =  /^\s*(?=.*[1-9])\d*(?:\.\d{1,2})?\s*$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(deciamlregex.test(viewValue)) {
                        ngModel.$setValidity('decimalcheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('decimalcheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('numberValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^(0|[1-9][0-9]*)$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('accountValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^[0-9]{9}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('nssValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^[0-9]{11}$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })
    .directive('anioValidate', function() {
        return {
            restrice: 'A',
            require: 'ngModel',
            link: function(scope, element, attrs, ngModel) {
                var numberregex =  /^(([1][9][0-9][0-9])|([2][0-9][0-9][0-9]))$/;
                ngModel.$parsers.unshift(function(viewValue){
                    if(numberregex.test(viewValue)) {
                        ngModel.$setValidity('numbercheck', true);
                        return viewValue;
                    }
                    else{
                        ngModel.$setValidity('numbercheck', false);
                        return undefined;
                    }
                });
            }
        }
    })