angular
    .module('Enes', [
        'ui.bootstrap',
        'angular-advanced-searchbox',
        'angularUtils.directives.dirPagination',
        'naif.base64'
    ])
    .value('HOST', 'http://localhost:8000/');