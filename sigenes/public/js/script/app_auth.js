/**
 * Created by taxque on 9/02/16.
 */
angular
    .module('EnesAuth', [
        'ui-notification',
        'naif.base64'
    ])
    .value('HOST', 'http://localhost:8000/');