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
        var myArray = [1,3,4];
        var rand = myArray[Math.floor(Math.random() * myArray.length)];
        jQuery.backstretch([
                    baseURL + "/metronic/assets/admin/pages/media/bg/"+rand+".jpg",
            ], {
                fade: 1000,
                duration: 80000
            }
        );

               // If another browser, return 0





    };
    return LoginReady;

 })()



