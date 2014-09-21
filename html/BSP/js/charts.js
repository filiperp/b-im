/**
 * Created by frpereira on 18/09/14.
 */


var charts;
charts = (function () {
    'use strict';
    function charts() {

    }

    charts.initAll = function () {
        charts.initChart1();

        charts.initgaugeMeta();
        charts.initgaugeMetaAcum();
        charts.initfatExMeta();



        charts.inithistoricCross();
        charts.initBars();

        charts.initfatExMeta('fatExMetaAcum','0',null,
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
            ])
    }
    charts.chart1 = null;
    charts.initChart1 = function (data) {
        if(!data)data= brazilStates.getRandom(30,100);
        charts.chart1 = new FusionCharts({
            type: 'maps/brazil',
            renderAt: 'brasil',
            width: '100%',
            height: '400',
            dataFormat: 'json',


            dataSource: {
                "chart": {
                    //  "caption": "Annual Sales by State",
                    // "subcaption": "Last year",
                    "entityFillHoverColor": "#cccccc",
                   // "numberScaleValue": "1,1000,1000",
                   // "numberScaleUnit": "K,M,B",
                    "numberSuffix": "%",
                    "showLabels": "1",
                    "theme": "fint",
                    "showLegend": '1',
                    legendPosition: 'BOTTOM',
                    legendsuffix: '%'
                },

                "map": {

                    "animation": "0",
                    "showbevel": "0",
                    "usehovercolor": "1",
                    "canvasbordercolor": "FFFFFF",
                    "bordercolor": "FFFFFF",
                    "connectorcolor": "000000",
                    "fillalpha": "10",
                    "hovercolor": "CCCCCC",

                },


                "colorRange": {
                    "minvalue": "0",
                    "startlabel": "-",
                    "endlabel": "+",
                    "code": "#e44a00",
                    "gradient": "1",
                    "color": [
                        {
                            "minvalue": "0",
                            "displayvalue": "Average",
                            "code": "#f8bd19"
                        },
                        {
                            "maxvalue": "100",
                            "code": "#6baa01"
                        }
                    ]
                },
                "data": data




            }
        });
        charts.chart1.render();
    };



    charts.gaugeMeta = null
    charts.initgaugeMeta = function () {

        charts.gaugeMeta = new FusionCharts({

            "type": "angulargauge",
            "renderAt": "gaugeMeta",
            "width": "100%",
            "height": "150",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "manageresize": "1",
                    "origw": "400",
                    "origh": "auto",
                    "managevalueoverlapping": "1",
                    "autoaligntickvalues": "1",
                    "bgcolor": "AEC0CA,FFFFFF",
                    "fillangle": "45",
                    "upperlimit": "2500000",
                    "lowerlimit": "1600000",
                    "majortmnumber": "10",
                    "majortmheight": "8",
                    "showgaugeborder": "0",
                    "gaugeouterradius": "140",
                    "gaugeoriginx": "205",
                    "gaugeoriginy": "206",
                    "gaugeinnerradius": "2",
                    "formatnumberscale": "1",
                    "numberprefix": "",
                    "decmials": "2",
                    "tickmarkdecimals": "1",
                    "pivotradius": "17",
                    "showpivotborder": "1",
                    "pivotbordercolor": "000000",
                    "pivotborderthickness": "5",
                    "pivotfillmix": "FFFFFF,000000",
                    "tickvaluedistance": "10",
                    "showborder": "1"
                },
                "colorrange": {
                    "color": [
                        {
                            "minvalue": "1600000",
                            "maxvalue": "1930000",
                            "code": " B41527 "
                        },
                        {
                            "minvalue": "1930000",
                            "maxvalue": "2170000",
                            "code": "E48739"
                        },
                        {
                            "minvalue": "2170000",
                            "maxvalue": "2500000",
                            "code": "399E38"
                        }
                    ]
                },
                "dials": {
                    "dial": [
                        {
                            "value": "2100000",
                            "borderalpha": "100",
                            "bgcolor": "4b77be",
                            "basewidth": "28",
                            "topwidth": "1",
                            "radius": "150",

                        },
                        {
                            "value": "1800000",
                            "borderalpha": "0",
                            "bgcolor": "8775a7",
                            "basewidth": "28",
                            "topwidth": "1",
                            "radius": "130"
                        }
                    ]
                },
                "annotations": {
                    "groups": [
                        {
                            "x": "205",
                            "y": "207.5",
                            "items": [
                                {
                                    "type": "circle",
                                    "x": "0",
                                    "y": "2.5",
                                    "radius": "150",
                                    "startangle": "0",
                                    "endangle": "180",
                                    "fillpattern": "linear",
                                    "fillasgradient": "1",
                                    "fillcolor": "dddddd,666666",
                                    "fillalpha": "100,100",
                                    "fillratio": "50,50",
                                    "fillangle": "0",
                                    "showborder": "1",
                                    "bordercolor": "444444",
                                    "borderthickness": "2"
                                },
                                {
                                    "type": "circle",
                                    "x": "0",
                                    "y": "0",
                                    "radius": "145",
                                    "startangle": "0",
                                    "endangle": "180",
                                    "fillpattern": "linear",
                                    "fillasgradient": "1",
                                    "fillcolor": "666666,ffffff",
                                    "fillalpha": "100,100",
                                    "fillratio": "50,50",
                                    "fillangle": "0"
                                }
                            ]
                        }
                    ]
                }
            }
        });
        charts.gaugeMeta.render();
    };

    charts.gaugeMetaAcum = null
    charts.initgaugeMetaAcum = function () {

        charts.gaugeMetaAcum = new FusionCharts({

            "type": "angulargauge",
            "renderAt": "gaugeMetaAcum",
            "width": "100%",
            "height": "150",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "manageresize": "1",
                    "origw": "400",
                    "origh": "auto",
                    "managevalueoverlapping": "1",
                    "autoaligntickvalues": "1",
                    "bgcolor": "AEC0CA,FFFFFF",
                    "fillangle": "45",
                    "upperlimit": "25000000",
                    "lowerlimit": "16000000",
                    "majortmnumber": "10",
                    "majortmheight": "8",
                    "showgaugeborder": "0",
                    "gaugeouterradius": "140",
                    "gaugeoriginx": "205",
                    "gaugeoriginy": "206",
                    "gaugeinnerradius": "2",
                    "formatnumberscale": "1",
                    "numberprefix": "",
                    "decmials": "2",
                    "tickmarkdecimals": "1",
                    "pivotradius": "17",
                    "showpivotborder": "1",
                    "pivotbordercolor": "000000",
                    "pivotborderthickness": "5",
                    "pivotfillmix": "FFFFFF,000000",

                    "tickvaluedistance": "10",
                    "showborder": "1"
                },
                "colorrange": {
                    "color": [
                        {
                            "minvalue": "16000000",
                            "maxvalue": "19300000",
                            "code": " B41527 "
                        },
                        {
                            "minvalue": "19300000",
                            "maxvalue": "21700000",
                            "code": "E48739"
                        },
                        {
                            "minvalue": "21700000",
                            "maxvalue": "25000000",
                            "code": "399E38"
                        }
                    ]
                },
                "dials": {
                    "dial": [
                        {
                            "value": "15000000",
                            "borderalpha": "100",
                            "bgcolor": "4b77be",
                            "basewidth": "28",
                            "topwidth": "1",
                            "radius": "150",
                            'label': 'FAturado'

                        },
                        {
                            "value": "8000000",
                            "borderalpha": "0",
                            "bgcolor": "8775a7",
                            "basewidth": "28",
                            "topwidth": "1",
                            "radius": "130"
                        }
                    ]
                },
                "annotations": {
                    "groups": [
                        {
                            "x": "205",
                            "y": "207.5",
                            "items": [
                                {
                                    "type": "circle",
                                    "x": "0",
                                    "y": "2.5",
                                    "radius": "150",
                                    "startangle": "0",
                                    "endangle": "180",
                                    "fillpattern": "linear",
                                    "fillasgradient": "1",
                                    "fillcolor": "dddddd,666666",
                                    "fillalpha": "100,100",
                                    "fillratio": "50,50",
                                    "fillangle": "0",
                                    "showborder": "1",
                                    "bordercolor": "444444",
                                    "borderthickness": "2"
                                },
                                {
                                    "type": "circle",
                                    "x": "0",
                                    "y": "0",
                                    "radius": "145",
                                    "startangle": "0",
                                    "endangle": "180",
                                    "fillpattern": "linear",
                                    "fillasgradient": "1",
                                    "fillcolor": "666666,ffffff",
                                    "fillalpha": "100,100",
                                    "fillratio": "50,50",
                                    "fillangle": "0"
                                }
                            ]
                        }
                    ]
                }
            }
        });
        charts.gaugeMetaAcum.render();
    };




    charts.gaugePraca = null
    charts.initgaugePraca = function (target) {
          var val= (85+(Math.random()*70));
        charts.gaugePraca = new FusionCharts({

            "type": "vled",
            "renderAt": target,
            "width": "100%",
            "height": "150",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "manageresize": "1",
                    "upperlimit": "150",
                    "lowerlimit": "0",
                    "numbersuffix": "%",
                    "majortmnumber": "11",
                    "majortmcolor": "646F8F",
                    "majortmheight": "9",
                    "minortmnumber": "2",
                    "minortmcolor": "646F8F",
                    "minortmheight": "3",
                    "majortmthickness": "1",
                    "decimals": "0",
                    "ledgap": "0",
                    "ledsize": "1",
                    "ledborderthickness": "4",
                    "showborder": "0",
                    "showToolTip": '1',
                    "toolTipBorderColor": "#111111",

                    "toolTipBgAlpha": "95",
                },
                "colorrange": {
                    "color": [
                        {
                            "minvalue": "0",
                            "maxvalue": "80",
                            "code": "cf0000"
                        },
                        {
                            "minvalue": "80",
                            "maxvalue": "100",
                            "code": "ffcc33"
                        },
                        {
                            "minvalue": "100",
                            "maxvalue": "150",
                            "code": "99cc00"
                        }
                    ]
                },
                "value": val
            }
        });
        charts.gaugePraca.render();
    };

    charts.fatExMeta = null;
    charts.initfatExMeta = function (target, showvalues, h, dataset, colors) {
       // console.log(target,dataset)
        if (!target)target = 'fatExMeta';
        if (!showvalues)showvalues = '0';
        if (!h)h = '150';
        if (!dataset) {
            dataset = [
                {
                    "seriesName": "2013: ",
                    "data": brazilStates.getRamdonQty(16000, 29000, 12)
                },
                {
                    "seriesName": "2014: ",

                    "data": brazilStates.getRamdonQty(20000, 30000, 9)
                },
                {
                    "seriesName": "Meta",
                    "parentYAxis": "P",
                    "renderAs": "line",
                    "showYAxisValues": '0',
                    "showValues": "0",
                    "data": brazilStates.getRamdonQty(23000, 27000, 12)

                }
            ];







        }

        //console.log(target,dataset.length)
        if(dataset.length==3){
            for (var i = 0; i < dataset[0].data.length; i++) {
                console.log(dataset[0].data[i])
                var relMEta =((((dataset[1].data[i]?dataset[1].data[i].value:0)/dataset[2].data[i].value)*100)-100);
                var corMEta=  relMEta<0 ?'#ff0000 !important': '#008800 !important';

                var rel2013= ((((dataset[1].data[i]?dataset[1].data[i].value:0)/dataset[0].data[i].value)*100)-100).toFixed(2);
                var cor2013 =   rel2013<0 ?'#ff0000 !important': '#008800 !important';
                dataset[0].data[i].tooltext =
                    '<span style="font-size: 20px;line-height: 20px;color:#333333"> Mês: '+brazilStates.mes[i] +
                    ' 2014{br}Relação Meta:<b style="color:'+corMEta+'"> ' +relMEta.toFixed(2)+
                    '%</b>{br}Relação 2013:<b style="color:'+cor2013+'"> '+rel2013 + '%</b></span>';


                if( dataset[1].data[i]!=undefined)
                    dataset[1].data[i].tooltext =dataset[0].data[i].tooltext;

                if( dataset[2].data[i]!=undefined)
                    dataset[2].data[i].tooltext = '<span style="font-size: 20px;line-height: 20px;color:#333333"> Meta para : '+brazilStates.mes[i]+
                        '{br} '+  accounting.formatMoney( dataset[2].data[i].value , "R$", 2, ".", ",")+ '</span>';

            }
        }

        if (!colors)colors = "#4b77be,#8775a7,#35aa47,#6baa01,#583e78";
        charts.fatExMeta = new FusionCharts({
            type: 'mscombidy2d',
            renderAt: target,
            width: '100%',
            height: h,
            dataFormat: 'json',

            dataSource: {
                "chart": {
                    "caption": "",
                    "subCaption": "",
                   // "xAxisname": "Mês",
                   // "pYAxisName": "Fat.",
                    "sYAxisName": "",
                    "numberPrefix": "$",
                    "sNumberSuffix": "",
                    "sYAxisMaxValue": "30000",
                    "pYAxisMaxValue": "30000",
                    "showYAxisValues": '1',
                    'showLegend': '0',
                    "showvalues": showvalues,
                    "theme": "fint",
                    "palettecolors": colors,
                    "labelDisplay": "wrap",
                    'toolTipBgColor': 'ffffff',
                    'toolTipBorderColor': '000000',
                },
                "categories": [
                    {
                        "category": [
                            {
                                "label": "2013 - 2014<br>Jan"
                            },
                            {
                                "label": "2013 - 2014<br>Fev"
                            },
                            {
                                "label": "2013 - 2014<br>Mar"
                            },
                            {
                                "label": "2013 - 2014<br>Abr"
                            },
                            {
                                "label": "2013 - 2014<br>Mai"
                            },
                            {
                                "label": "2013 - 2014<br>Jun"
                            },
                            {
                                "label": "2013 - 2014<br>Jul"
                            },
                            {
                                "label": "2013 - 2014<br>Ago"
                            },
                            {
                                "label": "2013 - 2014<br>Set"
                            },
                            {
                                "label": "2013 - 2014<br>Out"
                            },
                            {
                                "label": "2013 - 2014<br>Nov"
                            },
                            {
                                "label": "2013 - 2014<br>Dev"
                            }
                        ]
                    }
                ],
                "dataset": dataset
            }

        })
        charts.fatExMeta.render();
    };


    charts.historicCross = null;
    charts.inithistoricCross = function (target, showvalues, h, dataset) {

        if (!target)target = 'historicCross';
        if (!showvalues)showvalues = '0';
        if (!h)h = '200';
        if (!dataset) {
            dataset = [
                {
                    "seriesname": "2014",
                    "data": brazilStates.getRamdonQty(13000, 29000, 9)
                },
                {
                    "seriesname": "2013",
                    "data": brazilStates.getRamdonQty(10000, 25000, 12)
                }
            ]
        }


        charts.historicCross = new FusionCharts({
            //  id: "stockRealTimeChart",
            type: 'msline',
            renderAt: target,
            width: '100%',
            height: h,
            dataFormat: 'json',
            dataSource: {

                "chart": { "palettecolors": "#d91e18,#8775a7,#35aa47,#6baa01,#583e78",
                    "yaxismaxvalue": "100",
                    "bgcolor": "bbbbbb, dddddd",
                    "bgalpha": "100",
                    "basefontcolor": "333333",
                    "canvasbgalpha": "0",
                    "canvasbordercolor": "FFFFFF",
                    "divlinecolor": "FFFFFF",
                    "divlinealpha": "100",
                    "numvdivlines": "10",
                    "vdivlineisdashed": "1",
                    "showalternatevgridcolor": "1",
                    // "linecolor": "BBDA00",
                    //"anchorradius": "2",
                    //"anchorbgcolor": "#d91e18,#8775a7,#35aa47,#6baa01,#583e78",
                    // "anchorbordercolor": "FFFFFF",
                    // "anchorborderthickness": "1",
                    "showvalues": showvalues,
//                    "numbersuffix": "",
                    "tooltipbgcolor": "dddddd",
                    "tooltipbordercolor": "333333",
                    "alternatehgridalpha": "5",
                    "labeldisplay": "ROTATE",
                    "canvaspadding": "10",
                    "showborder": "0"
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
                "dataset": dataset,
                "trendlines": [
                    {
                        "line": [
                            {
                                "startvalue": "15000",
                                "endvalue": "20000",
                                "istrendzone": "1",
                                "valueonright": "1",
                                "color": "fda813",
                                "displayvalue": "",
                                "showontop": "0",

                                "thickness": "1"
                            },
                            {
                                "startvalue": "25000",
                                "endvalue": "30000",
                                "istrendzone": "1",
                                "valueonright": "1",
                                "color": "35aa47",
                                "displayvalue": "",
                                "showontop": "0",
                                "thickness": "1"
                            }
                        ]
                    }
                ]
            }


        });
        charts.historicCross.render();
    }

    charts.led = null
    charts.initLed = function (target) {
        console.log( target)
        charts.led = new FusionCharts({
            "type": "vled",
            "renderAt": target,
            "width": "50",
            "height": "150",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "caption": "Fuel Level Indicator",
                    "lowerLimit": "0",
                    "upperLimit": "100",
                    "lowerLimitDisplay": "Empty",
                    "upperLimitDisplay": "Full",
                    "numberSuffix": "%",
                    "valueFontSize": "12",
                    "showhovereffect": "1",
                    "origW": "400",
                    "origH": "150",
                    "ledSize": "3",
                    "ledGap": "2",
                    "manageResize": "1",
                    "theme": "fint"
                },
                "annotations": {
                    "showbelow": "1",
                    "groups": [
                        {
                            "id": "indicator",
                            "items": [
                                {
                                    "id": "bgRectAngle",
                                    "type": "rectangle",
                                    "alpha": "90",
                                    "radius": "1",
                                    "fillColor": "#6baa01",
                                    "x": "$gaugeCenterX - 20",
                                    "tox": "$gaugeCenterX + 20",
                                    "y": "$gaugeEndY + 25",
                                    "toy": "$gaugeEndY + 45"
                                }
                            ]
                        }
                    ]
                },
                "colorRange": {
                    "color": [
                        {
                            "minValue": "0",
                            "maxValue": "45",
                            "code": "#e44a00"
                        },
                        {
                            "minValue": "45",
                            "maxValue": "75",
                            "code": "#f8bd19"
                        },
                        {
                            "minValue": "75",
                            "maxValue": "100",
                            "code": "#6baa01"
                        }
                    ]
                },
                "value": "92"
            },
            "events": {}
        });

        charts.led.render();

    }


    charts.bar = null;
    charts.initBars = function(target){

        if(!target) target = 'estqouePanel';

        charts.bar= new FusionCharts({
            "type": "bar2d",
            "renderAt": target,
            "width": "100%",
            "height": "400",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                   // "caption": "Top 5 Stores by Sales",
                  //  "subCaption": "Last month",
                  //  "yAxisName": "Sales (In USD)",
                    "numberSuffix": "min",
                    "paletteColors": "#0075c2",
                    "bgColor": "#ffffff",
                    "showBorder": "0",
                    "showCanvasBorder": "0",
                    "usePlotGradientColor": "0",
                    "plotBorderAlpha": "10",
                    "placeValuesInside": "1",
                    "valueFontColor": "#ffffff",
                    "showAxisLines": "1",
                    "axisLineAlpha": "25",
                    "divLineAlpha": "10",
                    "alignCaptionWithCanvas": "0",
                    "showAlternateVGridColor": "0",
                    "captionFontSize": "14",
                    "subcaptionFontSize": "14",
                    "subcaptionFontBold": "0",
                    "toolTipColor": "#ffffff",
                    "toolTipBorderThickness": "0",
                    "toolTipBgColor": "#000000",
                    "toolTipBgAlpha": "80",
                    "toolTipBorderRadius": "2",
                    "toolTipPadding": "5"
                },
                "data": [
                    {
                        "label": "Jr. Band",
                        "value": "800"
                    },
                    {
                        "label": "Pânico",
                        "value": "750"
                    },
                    {
                        "label": "A Liga",
                        "value": "700"
                    },
                    {
                        "label": "CQC",
                        "value": "650"
                    },
                    {
                        "label": "MasterChef",
                        "value": "550"
                    },
                    {
                        "label": "Cidade Alerta",
                        "value": "500"
                    },
                    {
                        "label": "Agora Tarde",
                        "value": "450"
                    }, {
                        "label": "Polícia 24h",
                        "value": "300"
                    }
                ]
            }
        });
        charts.bar.render();
    }

    return charts;

})();
