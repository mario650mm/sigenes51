/**
 * Created by taxque on 21/02/16.
 */

angular.module('Enes')
.filter('start', function () {
    return function (input, start) {
        if (!input || !input.length) { return; }

        start = +start;
        return input.slice(start);
    };
})
.filter('renderHTMLCorrectly', function($sce)
{
    return function(stringToParse)
    {
        console.log('entreeee*****');
        return $sce.trustAsHtml(stringToParse);
    }
})
;
