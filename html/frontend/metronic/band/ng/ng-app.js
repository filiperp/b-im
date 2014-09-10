/**
 * Created by frpereira on 09/09/14.
 */
(function() {
    var app = angular.module('imPortal', []);
    app.currentView='main';
    app.controller('MainViewController', function() {

        this.setCurrent = function(view) {
            app.currentView = 'main';
        };
    });

})();