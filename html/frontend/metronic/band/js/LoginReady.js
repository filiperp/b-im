//Metronic.init(); // init metronic core components
// Layout.init(); // init current layout
// QuickSidebar.init(); // init quick sidebar
// Demo.init(); // init demo features
//Login.init();
// init background slide images

var LoginReady;
LoginReady = (function () {
    'use strict';
    function LoginReady() {

    }

    LoginReady.init = function ($var) {
        jQuery.backstretch([
                    baseURL + "/metronic/assets/admin/pages/media/bg/4.jpg"
            ], {
                fade: 1000,
                duration: 8000
            }
        );

               // If another browser, return 0





    };
    return LoginReady;

 })()



