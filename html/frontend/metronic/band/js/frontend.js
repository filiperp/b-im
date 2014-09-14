/**
 * Created by frpereira on 10/09/14.
 */

function onClickHome(){
    "use strict";
    wait();
    focusItemMenu('mainMenuHome');
}
function onClickNoticia() {
    "use strict";
    wait();
    focusItemMenu('mainMenuNoticias');
    //console.log("ooo")
}

function onClickTag() {
    "use strict";
    wait();
    focusItemMenu('mainMenuVeiculos');
    //console.log("ooo")
}

function onClickVeiculo(c){
    "use strict";
    wait();
    focusItemMenu('mainMenuVeiculos');
    Layout.setColor(c);
}
function focusItemMenu(i) {
    "use strict";
    $(".mainMenuItem").removeClass('active').removeClass('open');
    $("#" + i).addClass('active')
}

function wait() {
    "use strict";
    $("#container")
        .html("")
        .html('<h1 style="text-align: center; margin-top: 50px"><i class="fa fa-spinner fa-2x fa-spin"></i></h1>');
}

