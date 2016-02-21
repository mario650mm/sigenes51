angular
    .module('Enes', [
        'ui.bootstrap',
        'angular-advanced-searchbox',
        'angularUtils.directives.dirPagination'
    ])
    .value('HOST', 'http://localhost:8000/');