/**
 * Created by frpereira on 18/09/14.
 */
var app;
app = (function () {
    'use strict';
    function app() {}

    app.init = function () {
        FusionCharts.ready(function () {
            charts.initAll();
        });
    };
    return app;

})()