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
           // charts.initLed('uhull')
        });
         $('.brasil_thermal').click(function(){
             $('#brasil').html('aguarde carregando...');
             $('#brasilTitle').html($(this).find('a').html())
             setTimeout(charts.initChart1,1500)
         });
        TilesController.init();

        $('#demo_1').click(function(){
            $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
                "backdrop"  : "static",
                "keyboard"  : true,
                "show"      : true                     // ensure the modal is shown immediately
            });

            charts.inithistoricCross('detalhe_fatExMetaAcum','1','400');
            charts.inithistoricCross('detalhe_fatExMetaExibAcum','1','400');
        });


        $('.fat_ex_mens').click(function(){
            $('#fatExMeta_label').html('Mensal:'+ $(this).find('a').html())

            charts.initfatExMeta('fatExMeta', '0',null,null,null);

        })

    };
    return app;

})()