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
        charts.initChartBrasilExibido();
        charts.initgaugeMeta();
        charts.initgaugeMetaAcum();
        charts.initfatExMeta();
        charts.initfatExMetaAcum();
        charts.inithistoricCross();
    }
    charts.chart1 = null;
    charts.initChart1 = function () {
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
                    "numberScaleValue": "1,1000,1000",
                    "numberScaleUnit": "K,M,B",
                    "numberPrefix": "$",
                    "showLabels": "1",
                    "theme": "fint",
                    "showLegend": '1',
                    legendPosition: 'BOTTOM'
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
                    "minvalue": "30000",
                    "startlabel": "-",
                    "endlabel": "+",
                    "code": "#e44a00",
                    "gradient": "1",
                    "color": [
                        {
                            "minvalue": "30000",
                            "displayvalue": "Average",
                            "code": "#f8bd19"
                        },
                        {
                            "maxvalue": "90000",
                            "code": "#6baa01"
                        }
                    ]
                },
                "data": brazilStates.dados1




            }
        });
        charts.chart1.render();
    };

    charts.chartBrasilExibido = null;
    charts.initChartBrasilExibido = function () {
        charts.chartBrasilExibido = new FusionCharts({
            type: 'maps/brazil',
            renderAt: 'brasilExibido',
            width: '100%',
            height: '400',
            dataFormat: 'json',


            dataSource: {
                "chart": {
                    //  "caption": "Annual Sales by State",
                    // "subcaption": "Last year",
                    "entityFillHoverColor": "#cccccc",
                    "numberScaleValue": "1,1000,1000",
                    "numberScaleUnit": "K,M,B",
                    "numberPrefix": "$",
                    "showLabels": "1",
                    "theme": "fint",
                    "showLegend": '1',
                    legendPosition: 'BOTTOM'
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
                    "minvalue": "30000",
                    "startlabel": "-",
                    "endlabel": "+",
                    "code": "#e44a00",
                    "gradient": "1",
                    "color": [
                        {
                            "minvalue": "30000",
                            "displayvalue": "Average",
                            "code": "#f8bd19"
                        },
                        {
                            "maxvalue": "90000",
                            "code": "#6baa01"
                        }
                    ]
                },
                "data": brazilStates.dados1




            }
        });
        charts.chartBrasilExibido.render();
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


    charts.fatExMeta = null;
    charts.initfatExMeta = function (target, showvalues, h, dataset, colors) {
        if (!target)target = 'fatExMeta';
        if (!showvalues)showvalues = '0';
        if (!h)h = '150';
        if (!dataset) {
            dataset = [
                {
                    "seriesName": "Faturamento",
                    "data": brazilStates.getRamdonQty(16000, 30000, 12)
                },
                {
                    "seriesName": "Exibido",
                    "data": brazilStates.getRamdonQty(15000, 30000, 12)
                },
                {
                    "seriesName": "Meta",
                    "parentYAxis": "P",
                    "renderAs": "line",
                    "showYAxisValues": '0',
                    "showValues": "0",
                    "data": brazilStates.getRamdonQty(25000, 25000, 12)

                }
            ]
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
                    "xAxisname": "Mês",
                    "pYAxisName": "Fat.",
                    "sYAxisName": "",
                    "numberPrefix": "$",
                    "sNumberSuffix": "",
                    "sYAxisMaxValue": "30000",
                    "pYAxisMaxValue": "30000",
                    "showYAxisValues": '1',
                    'showLegend': '0',
                    "showvalues": showvalues,
                    "theme": "fint",
                    "palettecolors": colors
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
                "dataset": dataset
            }

        })
        charts.fatExMeta.render();
    };


    charts.fatExMetaAcum = null;
    charts.initfatExMetaAcum = function () {
        charts.fatExMetaAcum = new FusionCharts({
            type: 'mscombidy2d',
            renderAt: 'fatExMetaAcum',
            width: '100%',
            height: '150',
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
                    'showLegend': '0',

                    "theme": "fint",
                    "palettecolors": "#4b77be,#8775a7,#35aa47,#6baa01,#583e78"
                },
                "categories": [
                    {
                        "category": [
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
                            },
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
                                "value": "0"
                            },
                            {
                                "value": "0"
                            },
                            {
                                "value": "0"
                            },
                            {
                                "value": "0"
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
                                "value": "13000"
                            },
                            {
                                "value": "19000"
                            },
                            {
                                "value": "37000"
                            },
                            {
                                "value": "50000"
                            },
                            {
                                "value": "58000"
                            },
                            {
                                "value": "72000"
                            },
                            {
                                "value": "92000"
                            },
                            {
                                "value": ""
                            },
                            {
                                "value": ""
                            },
                            {
                                "value": ""
                            },
                            {
                                "value": ""
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

        })
        charts.fatExMetaAcum.render();
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
    return charts;

})();
