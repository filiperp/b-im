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

        $('#fatexmeta_geral').click(function(){

            $('#fatExMeta_label').html('Mensal: <span class="label  bg-blue-steel">Faturado</span>X <span class="label bg-purple-plum">Exibido</span>X<span class="label bg-green">Meta</span>')
            charts.initfatExMeta('fatExMeta', '0',null,[
                        {
                            "seriesName": "Faturamento",
                            "data": brazilStates.getRamdonQty(16000,30000,12)
                        },
                        {
                            "seriesName": "Exibido",
                            "data":  brazilStates.getRamdonQty(15000,30000,12)
                        },
                        {
                            "seriesName": "Meta",
                            "parentYAxis": "P",
                            "renderAs": "line",
                            "showYAxisValues": '0',
                            "showValues": "0",
                            "data":  brazilStates.getRamdonQty(25000,25000,12)

                        }
                    ]);

        })
        $('#fatexmeta_fat').click(function(){
            $('#fatExMeta_label').html('Mensal: <span class="label  bg-blue-steel">Faturado</span>X<span class="label bg-green">Meta</span>')

            charts.initfatExMeta('fatExMeta', '0',null,[
                {
                    "seriesName": "Faturamento",
                    "data": brazilStates.getRamdonQty(16000,30000,12)
                },

                {
                    "seriesName": "Meta",
                    "parentYAxis": "P",
                    "renderAs": "line",
                    "showYAxisValues": '0',
                    "showValues": "0",
                    "data":  brazilStates.getRamdonQty(20000,20000,12)

                }
            ],
                "#4b77be,#35aa47,#6baa01,#583e78");

        })
        $('#fatexmeta_ex').click(function(){
            $('#fatExMeta_label').html('Mensal: <span class="label bg-purple-plum">Exibido</span>X<span class="label bg-green">Meta</span>')

            charts.initfatExMeta('fatExMeta', '0',null,[

                {
                    "seriesName": "Exibido",
                    "data":  brazilStates.getRamdonQty(15000,30000,12)
                },
                {
                    "seriesName": "Meta",
                    "parentYAxis": "P",
                    "renderAs": "line",
                    "showYAxisValues": '0',
                    "showValues": "0",
                    "data":  brazilStates.getRamdonQty(25000,25000,12)

                }
            ],
                "#8775a7,#35aa47,#6baa01,#583e78");

        })
    };
    return app;

})()