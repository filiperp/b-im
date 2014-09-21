/**
 * Created by filiperp on 9/18/14.
 */

var TilesController;
TilesController = (function () {
    'use strict';
    function TilesController() {


    }

    TilesController.init = function(){
        var ts= ''

        for (var i = 0; i < brazilStates.pracas.length; i++) {
            var praca= brazilStates.pracas[i];
            ts+=TilesController.createTile(praca);
        }


        $('#tilesContainer')
            .html('')
            .html(ts);

        $('.tile_content_item').each(function(k,v){
            $(v).attr('id','tiles_'+parseInt(k))
            charts.initgaugePraca('tiles_'+parseInt(k))
        });


        $('.pracas_led').click(function(){

            $('#praca_title').html($(this).find('a').html())

            $('.tile_content_item').html("aguarde.")
            setTimeout(function(){
                $('.tile_content_item').each(function(k,v){
                    $(v).attr('id','tiles_'+parseInt(k))
                    charts.initgaugePraca('tiles_'+parseInt(k))
                });

            },800)



        });



        $('.tileClick').click(function(){

                $("#myModal2").modal({                    // wire up the actual modal functionality and show the dialog
                    "backdrop"  : "static",
                    "keyboard"  : true,
                    "show"      : true                     // ensure the modal is shown immediately
                });

            TilesController.charts();

        })
    }



    TilesController.createTile = function ($var ) {
        var f= 8000+ ( Math.random()*6000);
        var fS = accounting.formatMoney(f, "R$", 2, ".", ",");
        var e= 8000+ ( Math.random()*6000);
        var eS = accounting.formatMoney(e, "R$", 2, ".", ",");
        var d = 80+ ( Math.random()*20);
        var dS = accounting.formatMoney(d, { symbol: "%",  format: "%v%s" });
        //{ symbol: "GBP",  format: "%v %s" }

        var res=
           ' <div class="tile bg-grey tileClick" style="width: 120px !important; height: 192px !important;">                '+
           '     <div class="tile-body" style="color:#000000; text-align: center; padding:0px">     '+
           '    <div   class="tile_content_item"  style="width: 112px;">  </div>'+
        //   ' <div class="'+TilesController.getclass(f)+'"> Faturado:<br>'+fS+'<br></div>                  '+
          // ' <div class="'+TilesController.getclass(e)+'"> Exibido:<br>'+eS+'<br></div>                   '+
          // ' <div class="'+TilesController.getclass2(d)+'"> Desconto M.:<br>'+dS+'<br></div>                   '+
           ' </div>                                                                    '+
           ' <div class="tile-object">                                                 '+
           '     <div class="name"  style="color:#000000;">                            '+
           '     <strong>'+$var+'</strong>                                       '+
           ' </div>                                                                    '+
           ' <div class="number">                                                      '+
           '                                                                           '+
           '     </div>                                                                '+
           ' </div>                                                                    '+
           ' </div>                                                                    ';



        return res;

    };

    TilesController.getclass = function(v){
        var res= ' bg-red ';
        if(v>10000)res = ' bg-yellow ';
        if(v>12000)res = ' bg-green ';
        return res;

    }
    TilesController.getclass2 = function(v){
        var res= ' bg-red ';
        if(v>87)res = ' bg-yellow ';
        if(v>92)res = ' bg-green ';
        return res;

    }

    TilesController.charts= function(){
        var fatExMetaPraca = new FusionCharts({
            type: 'mscombidy2d',
            renderAt: 'fatExMetaPraca',
            width: '100%',
            height: '300',
            dataFormat: 'json',

            dataSource: {
                "chart": {
                    "caption": "",
                    "subCaption": "",
                    "xAxisname": "Mês",
                    "pYAxisName": "Fat.",
                    "sYAxisName": "",
                    "numberPrefix": "$",
                    "sNumberSuffix": "",
                    "sYAxisMaxValue": "30000",
                    "pYAxisMaxValue": "30000",
                    "showYAxisValues": '1',

                    "theme": "fint"
                },
                "categories": [
                    {
                        "category": [
                            {
                                "label": "Set"
                            },
                            {
                                "label": "Out"
                            },
                            {
                                "label": "Nov"
                            },
                            {
                                "label": "Dez"
                            },
                            {
                                "label": "Jan"
                            },
                            {
                                "label": "Fev"
                            },
                            {
                                "label": "Mar"
                            },
                            {
                                "label": "Abr"
                            },
                            {
                                "label": "Mai"
                            },
                            {
                                "label": "Jun"
                            },
                            {
                                "label": "Jul"
                            },
                            {
                                "label": "Ago"
                            }
                        ]
                    }
                ],
                "dataset": [
                    {
                        "seriesName": "Faturamento",
                        "data": [
                            {
                                "value": "16000"
                            },
                            {
                                "value": "20000"
                            },
                            {
                                "value": "18000"
                            },
                            {
                                "value": "19000"
                            },
                            {
                                "value": "15000"
                            },
                            {
                                "value": "21000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "20000"
                            },
                            {
                                "value": "17000"
                            },
                            {
                                "value": "22000"
                            },
                            {
                                "value": "19000"
                            },
                            {
                                "value": "23000"
                            }
                        ]
                    },
                    {
                        "seriesName": "Exibido",
                        "data": [
                            {
                                "value": "8000"
                            },
                            {
                                "value": "5000"
                            },
                            {
                                "value": "6000"
                            },
                            {
                                "value": "18000"
                            },
                            {
                                "value": "13000"
                            },
                            {
                                "value": "2000"
                            },
                            {
                                "value": "14000"
                            },
                            {
                                "value": "20000"
                            },
                            {
                                "value": "10000"
                            },
                            {
                                "value": "2000"
                            },
                            {
                                "value": "14000"
                            },
                            {
                                "value": "19000"
                            }
                        ]
                    },
                    {
                        "seriesName": "Meta",
                        "parentYAxis": "P",
                        "renderAs": "line",
                        "showYAxisValues": '0',
                        "showValues": "0",
                        "data": [
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            },
                            {
                                "value": "16000"
                            }
                        ]
                    }
                ]
            }

        });
        fatExMetaPraca.render();


        var fatMeta = new FusionCharts({
            type: 'mscombidy2d',
            renderAt: 'fatMeta',
            width: '100%',
            height: '300',
            dataFormat: 'json',
            dataSource: {
                "chart": {
                    "caption": "",
                    "subCaption": "",
                    "xAxisname": "Mês",
                    "pYAxisName": "Fat.",
                    "sYAxisName": "",
                    "numberPrefix": "$",
                    "sNumberSuffix": "",
                    "sYAxisMaxValue": "200000",
                    "pYAxisMaxValue": "200000",
                    "showYAxisValues": '1',

                    "theme": "fint"
                },
                "categories": [
                    {
                        "category": [
                            {
                                "label": "Jan"
                            },
                            {
                                "label": "Feb"
                            },
                            {
                                "label": "Mar"
                            },
                            {
                                "label": "Apr"
                            },
                            {
                                "label": "May"
                            },
                            {
                                "label": "Jun"
                            },
                            {
                                "label": "Jul"
                            },
                            {
                                "label": "Aug"
                            },
                            {
                                "label": "Sep"
                            },
                            {
                                "label": "Oct"
                            },
                            {
                                "label": "Nov"
                            },
                            {
                                "label": "Dec"
                            }
                        ]
                    }
                ],
                "dataset": [
                    {
                        "seriesName": "Faturamento",
                        "data": [
                            {
                                "value": "16000"
                            },
                            {
                                "value": "36000"
                            },
                            {
                                "value": "54000"
                            },
                            {
                                "value": "73000"
                            },
                            {
                                "value": "88000"
                            },
                            {
                                "value": "109000"
                            },
                            {
                                "value": "125000"
                            },
                            {
                                "value": "145000"
                            },
                            {
                                "value": "162000"
                            },
                            {
                                "value": "184000"
                            },
                            {
                                "value": "203000"
                            },
                            {
                                "value": "226000"
                            }
                        ]
                    },
                    {
                        "seriesName": "Meta",
                        "parentYAxis": "P",
                        "renderAs": "line",
                        "showYAxisValues": '0',
                        "showValues": "0",
                        "data": [
                            {
                                "value": "16000"
                            },
                            {
                                "value": "32000"
                            },
                            {
                                "value": "48000"
                            },
                            {
                                "value": "64000"
                            },
                            {
                                "value": "80000"
                            },
                            {
                                "value": "96000"
                            },
                            {
                                "value": "112000"
                            },
                            {
                                "value": "128000"
                            },
                            {
                                "value": "144000"
                            },
                            {
                                "value": "160000"
                            },
                            {
                                "value": "176000"
                            },
                            {
                                "value": "192000"
                            }
                        ]
                    }
                ]
            }
        });

        fatMeta.render();



    }
    return TilesController;

 })()
