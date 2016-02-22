angular
    .module('Enes', [
        'ui.bootstrap',
        'angular-advanced-searchbox',
        'angularUtils.directives.dirPagination',
        'ui-notification'
    ])
    .value('HOST', 'http://localhost:8000/');