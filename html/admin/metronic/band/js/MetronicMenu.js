/**
 * Created by filiperp on 8/20/14.
 */
var MetronicMenu;
MetronicMenu = (function () {
    'use strict';
    function MetronicMenu() {


    }



    MetronicMenu.init = function ($var) {
        Metronic.init(); // init metronic core components
        Layout.init();

    };
    return MetronicMenu;

 })();


function alert (m){
    "use strict";
    bootbox.alert(m);
}