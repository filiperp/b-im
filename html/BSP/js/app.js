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

            charts.initfatExMeta('fatExMeta', '0',null,
                null
                ,null);

        })


        $('.fat_ex_acu').click(function(){
            $('#fatExMetaAcu_label').html('Acumulado:'+ $(this).find('a').html())

            charts.initfatExMeta('fatExMetaAcum', '0',null,
                [
                    {
                        "seriesName": "2013: ",
                        "data": brazilStates.getCumulativeRamdonQty(16000, 29000, 12)
                    },
                    {
                        "seriesName": "2014: ",

                        "data": brazilStates.getCumulativeRamdonQty(15000, 30000, 9)
                    },
                    {
                        "seriesName": "Meta",
                        "parentYAxis": "P",
                        "renderAs": "line",
                        "showYAxisValues": '0',
                        "showValues": "0",
                        "data": brazilStates.getCumulativeRamdonQty(23000, 27000, 12)

                    }
                ]);

        })

        $('#tabela1').click(function(){

            $("#title_chart").html( $('#fatExMeta_label').html());
            $("#myModal3").modal({                    // wire up the actual modal functionality and show the dialog
                "backdrop"  : "static",
                "keyboard"  : true,
                "show"      : true                     // ensure the modal is shown immediately
            });
            app.updateChart();
        });

        $('#tabela2').click(function(){

            $("#title_chart").html( $('#fatExMeta_label').html());
            $("#myModal3").modal({                    // wire up the actual modal functionality and show the dialog
                "backdrop"  : "static",
                "keyboard"  : true,
                "show"      : true                     // ensure the modal is shown immediately
            });
            app.updateChart();
        });

        app.updateChart = function(){
            $('#data_chart').html('');
            for (var i = 0; i < brazilStates.pracas.length; i++) {
                var p =  brazilStates.pracas[i];


                var meta = brazilStates.roundToTwo(25000 + ((30000 - 25000) * Math.random()));
                var real = brazilStates.roundToTwo(24000 + ((32000 - 24000) * Math.random()));
                var corReal = meta>real ?'#ff0000 !important': '#008800 !important';
                var r2013 = brazilStates.roundToTwo(24000 + ((32000 - 24000) * Math.random()));
                var cor2013 = r2013>real ?'#ff0000 !important': '#008800 !important';

                var l = "<tr>";
                l += "<td>"+p+"</td>";
                l += "<td>"+accounting.formatMoney(meta , "R$", 2, ".", ",")+"</td>";
                l += "<td>"+accounting.formatMoney(real , "R$", 2, ".", ",")+"</td>";
                l += "<td style='color:"+corReal+" '>"+((real/meta*100)-100).toFixed(2)+"</td>";
                l += "<td>"+accounting.formatMoney(r2013 , "R$", 2, ".", ",")+"</td>";
                l += "<td style='color:"+cor2013+" '>"+((real/r2013*100)-100).toFixed(2)+"</td>";
                l += "<td> <a href='#' class='btn default btn-xs green-stripe'>Ver </a></td></tr>";

                $('#data_chart').append(l)

            }
        }




//
//



    };
    return app;

})()