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
            "height": "250",
            "dataFormat": "json",
            "dataSource": {
                "chart": {
                    "manageresize": "1",
                    "origw": "400",
                    "origh": "250",
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
                    "numberprefix": "$",
                    "decmials": "2",
                    "tickmarkdecimals": "1",
                    "pivotradius": "17",
                    "showpivotborder": "1",
                    "pivotbordercolor": "000000",
                    "pivotborderthickness": "5",
                    "pivotfillmix": "FFFFFF,000000",
                    "tickvaluedistance": "10",
                    "showborder": "0"
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
                            "borderalpha": "0",
                            "bgcolor": "4b77be",
                            "basewidth": "28",
                            "topwidth": "1",
                            "radius": "130"
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
    return charts;

})()





