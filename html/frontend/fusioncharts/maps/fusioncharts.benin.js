/*
 * @license FusionCharts JavaScript Library
 * Copyright FusionCharts Technologies LLP
 * License Information at <http://www.fusioncharts.com/license>
 *
 * @author FusionCharts Technologies LLP
 * @meta package_map_pack core
 * @id fusionmaps.Benin.20.10-30-2012 06:07:27
 */
FusionCharts(["private","modules.renderer.js-benin",function(){var p=this,k=p.hcLib,n=k.chartAPI,h=k.moduleCmdQueue,a=k.injectModuleDependency,i="M",j="L",c="Z",f="Q",b="left",q="right",t="center",v="middle",o="top",m="bottom",s="maps",l=true&&!/fusioncharts\.com$/i.test(location.hostname),r=!!n.geo,d,e,u,g;
d=[{name:"Benin",revision:20,standaloneInit:true,baseWidth:160,baseHeight:280,baseScaleFactor:10,entities:{"BJ.OU":{outlines:[[i,897,2359,j,840,2359,827,2349,825,2400,836,2401,836,2419,846,2420,845,2561,864,2561,863,2593,f,861,2598,857,2602,j,858,2602,858,2626,f,868,2623,877,2617,881,2616,890,2607,897,2600,904,2599,905,2600,907,2600,917,2605,949,2620,950,2620,950,2620,953,2618,961,2613,j,961,2612,960,2599,961,2555,969,2555,969,2541,946,2541,932,2554,910,2555,910,2545,922,2544,937,2529,937,2521,924,2510,897,2511,897,2436,905,2432,907,2417,915,2412,915,2404,897,2377,c]],label:"Oueme",shortLabel:"OU",labelPosition:[104.5,264.5],labelAlignment:[b,v],labelConnectors:[[i,1045,2645,j,885,2645,885,2555,885,2645]]},"BJ.LI":{outlines:[[i,788,2622,j,785,2629,f,795,2629,813,2627,j,841,2628,f,850,2628,858,2626,j,858,2602,814,2602,f,804,2612,788,2622,c]],label:"Littoral",shortLabel:"LI",labelPosition:[70.4,270.7],labelAlignment:[q,v],labelConnectors:[[i,704,2707,j,840,2707,840,2612,840,2707]]},"BJ.CF":{outlines:[[i,524,2358,j,486,2359,485,2381,497,2392,505,2405,505,2471,508,2471,f,509,2471,509,2470,512,2469,514,2469,515,2469,516,2469,517,2469,517,2468,518,2468,518,2468,519,2468,519,2468,521,2467,523,2466,525,2465,526,2464,527,2464,527,2463,527,2463,528,2463,528,2463,528,2462,533,2459,538,2459,542,2459,545,2459,545,2459,546,2458,548,2457,549,2456,550,2455,550,2455,551,2454,551,2454,551,2453,551,2453,552,2453,552,2452,553,2451,555,2451,556,2451,556,2450,558,2447,562,2444,562,2443,562,2443,563,2441,564,2440,565,2440,565,2439,566,2438,566,2437,568,2436,569,2435,569,2435,570,2434,571,2434,571,2433,573,2432,575,2432,576,2432,576,2431,576,2431,577,2431,581,2431,584,2432,585,2432,585,2432,587,2434,590,2434,591,2434,591,2434,595,2434,599,2436,601,2436,602,2437,602,2438,603,2438,604,2441,608,2442,608,2442,608,2443,609,2443,610,2443,614,2444,617,2446,618,2446,618,2447,619,2447,620,2448,621,2448,622,2449,625,2451,627,2454,627,2455,627,2455,628,2457,631,2458,631,2458,632,2459,633,2459,633,2459,638,2461,643,2462,j,643,2463,f,647,2464,650,2468,651,2469,653,2470,655,2470,656,2471,657,2472,659,2472,659,2472,660,2472,664,2473,668,2475,669,2475,670,2476,673,2477,676,2478,j,684,2468,684,2438,697,2427,699,2389,675,2390,f,672,2391,660,2371,650,2356,645,2349,j,616,2321,615,2300,606,2288,606,2279,595,2270,595,2259,565,2232,565,2218,552,2190,545,2169,535,2160,536,2150,525,2150,c]],label:"Couffo",shortLabel:"CF",labelPosition:[20,237.6],labelAlignment:[q,v],labelConnectors:[[i,200,2376,j,544,2376]]},"BJ.MO":{outlines:[[i,590,2434,f,587,2434,585,2432,585,2432,584,2432,581,2431,577,2431,576,2431,576,2431,576,2432,575,2432,573,2432,571,2433,571,2434,570,2434,569,2435,569,2435,568,2436,566,2437,566,2438,565,2439,565,2440,564,2440,563,2441,562,2443,562,2443,562,2444,558,2447,556,2450,556,2451,555,2451,553,2451,552,2452,552,2453,551,2453,551,2453,551,2454,551,2454,550,2455,550,2455,549,2456,548,2457,546,2458,545,2459,545,2459,542,2459,538,2459,533,2459,528,2462,528,2463,528,2463,527,2463,527,2463,527,2464,526,2464,525,2465,523,2466,521,2467,519,2468,519,2468,518,2468,518,2468,517,2468,517,2469,516,2469,515,2469,514,2469,512,2469,509,2470,509,2471,508,2471,j,508,2471,f,507,2471,505,2472,j,505,2472,496,2477,495,2501,505,2508,510,2527,537,2542,576,2597,575,2630,585,2632,586,2661,f,600,2663,605,2657,611,2650,612,2650,j,639,2650,f,649,2646,657,2643,j,654,2621,646,2621,646,2606,655,2602,656,2579,666,2579,665,2510,675,2502,675,2480,676,2478,f,673,2477,670,2476,669,2475,668,2475,664,2473,660,2472,659,2472,659,2472,657,2472,656,2471,655,2470,653,2470,651,2469,650,2468,647,2464,643,2463,j,643,2462,f,638,2461,633,2459,633,2459,632,2459,631,2458,631,2458,628,2457,627,2455,627,2455,627,2454,625,2451,622,2449,621,2448,620,2448,619,2447,618,2447,618,2446,617,2446,614,2444,610,2443,609,2443,608,2443,608,2442,608,2442,604,2441,603,2438,602,2438,602,2437,601,2436,599,2436,595,2434,591,2434,f,591,2434,590,2434,c]],label:"Mono",shortLabel:"MO",labelPosition:[32.8,255.2],labelAlignment:[q,v],labelConnectors:[[i,328,2552,j,584,2552]]},"BJ.PL":{outlines:[[i,834,2179,j,845,2181,846,2231,855,2241,855,2271,865,2271,875,2279,885,2279,886,2332,896,2332,897,2377,915,2404,915,2412,907,2417,905,2432,897,2436,897,2511,924,2510,937,2521,937,2529,922,2544,910,2545,910,2555,932,2554,946,2541,969,2541,969,2535,1008,2535,1008,2525,975,2526,974,2520,974,2390,966,2390,965,2342,973,2339,972,2317,983,2307,986,2252,f,985,2249,984,2248,j,976,2247,974,2151,f,973,2147,967,2146,j,965,2089,865,2090,865,2128,831,2163,c]],label:"Plateau",shortLabel:"PL",labelPosition:[114,219],labelAlignment:[b,v],labelConnectors:[[i,1140,2190,j,910,2190]]},"BJ.AL":{outlines:[[i,1250,345,f,1242,337,1207,340,1195,334,1191,319,1187,305,1182,297,1178,293,1178,284,1177,280,1172,276,1168,272,1167,270,1165,269,1165,268,j,1145,250,f,1122,223,1111,212,1094,198,1094,191,1080,185,1069,172,1061,164,1060,163,1051,161,1050,153,j,1038,147,f,1031,142,1027,140,1022,128,1008,128,1005,130,997,130,996,130,995,130,988,128,987,128,954,148,952,149,940,158,933,163,922,171,912,171,j,884,170,f,879,178,873,178,j,856,178,f,853,178,850,179,837,181,825,191,j,825,326,825,325,824,354,f,818,354,815,360,815,369,811,374,804,383,805,386,799,397,797,401,797,412,792,419,783,430,768,440,753,450,734,471,712,489,705,497,j,679,527,675,527,694,563,f,698,574,709,594,723,619,729,626,733,629,734,631,736,640,737,642,740,646,743,647,j,743,655,f,746,662,748,664,754,668,754,670,j,762,689,761,690,f,762,696,770,698,775,699,782,700,796,710,802,714,805,717,805,724,805,730,800,734,794,739,791,742,j,775,759,776,899,835,899,840,894,f,842,889,851,887,j,864,887,f,868,887,875,894,888,904,894,909,j,943,907,944,896,966,895,966,890,1016,891,1016,900,1082,899,1082,892,1154,892,f,1161,891,1167,880,1181,879,1210,871,1236,871,1252,869,1268,867,1296,861,1311,861,1337,861,1355,862,1372,851,1378,849,1393,843,1407,842,1414,834,1413,831,1411,826,1409,824,1398,812,1398,811,1386,803,1377,796,1376,790,1376,789,1376,789,j,1376,788,f,1376,780,1380,776,1384,771,1384,761,j,1383,718,f,1382,712,1375,707,1371,692,1371,661,1368,652,1352,646,1348,644,1349,637,1349,636,1343,628,1338,623,1328,613,1321,606,1318,596,1303,583,1295,559,1286,554,1282,545,1279,540,1274,537,j,1275,526,1274,503,f,1274,495,1283,489,1283,487,1281,483,j,1287,473,f,1288,470,1289,464,j,1299,449,f,1306,436,1324,410,j,1315,410,f,1300,409,1297,401,1294,396,1293,381,j,1289,373,f,1287,370,1281,368,1276,362,1270,355,f,1265,348,1250,345,c]],label:"Alibori",shortLabel:"AL",labelPosition:[101,62.8],labelAlignment:[t,v]},"BJ.AK":{outlines:[[i,494,527,j,495,523,f,490,515,473,515,455,515,439,518,427,515,423,519,j,414,530,f,401,541,396,556,390,580,391,591,386,592,382,593,j,375,601,332,602,311,624,305,640,f,298,644,293,650,285,661,284,661,282,661,278,659,271,659,266,669,256,671,253,676,252,676,242,688,242,691,232,701,225,711,223,711,j,221,731,214,737,213,789,196,805,176,829,176,852,185,860,185,883,175,887,174,973,187,977,317,1072,388,1111,393,1120,407,1124,407,1150,f,426,1150,433,1155,436,1157,460,1160,468,1162,476,1157,485,1151,490,1149,494,1148,505,1141,j,520,1133,f,522,1131,534,1127,544,1119,550,1118,556,1118,558,1117,561,1112,564,1110,j,582,1108,596,1109,f,605,1109,610,1103,615,1098,633,1099,670,1098,671,1098,677,1105,683,1107,j,692,1107,f,702,1110,704,1110,j,704,1089,715,1081,766,1081,f,767,1077,773,1068,j,774,1017,765,1012,765,988,755,979,f,752,976,751,967,746,959,741,955,741,933,753,921,755,920,776,907,j,775,759,791,742,f,794,739,800,734,805,730,805,724,805,717,802,714,796,710,782,700,775,699,770,698,762,696,761,691,j,762,689,754,670,f,754,668,748,664,746,662,743,655,j,743,647,f,740,646,737,642,736,640,734,631,733,629,729,626,723,619,709,594,698,574,694,563,j,675,527,f,669,528,664,529,j,621,529,621,528,611,518,599,518,f,582,518,580,522,577,529,565,529,552,530,547,536,543,541,528,541,f,494,541,494,527,c]],label:"Atacora",shortLabel:"AK",labelPosition:[49,83.8],labelAlignment:[t,v]},"BJ.AQ":{outlines:[[i,785,2363,j,785,2369,763,2369,763,2379,717,2379,717,2388,699,2389,697,2427,684,2438,684,2468,675,2480,675,2502,665,2510,666,2579,656,2579,655,2602,646,2606,646,2621,654,2621,657,2643,f,661,2642,664,2641,669,2640,691,2640,j,719,2641,f,728,2641,731,2637,739,2629,744,2629,753,2628,769,2629,j,779,2630,f,782,2630,785,2629,j,788,2622,f,804,2612,814,2602,j,857,2602,f,861,2598,863,2593,j,864,2561,845,2561,846,2420,836,2419,836,2401,825,2400,826,2363,c]],label:"Atlantique",shortLabel:"AQ",labelPosition:[75.9,250.3],labelAlignment:[t,v]},"BJ.BO":{outlines:[[i,1167,880,f,1161,891,1154,892,j,1082,892,1082,899,1016,900,1016,891,966,890,966,895,944,896,943,907,894,909,f,888,904,875,894,868,887,864,887,j,851,887,f,842,889,840,894,j,835,899,776,899,776,907,f,755,920,753,921,741,933,741,955,746,959,751,967,752,976,755,979,j,765,988,765,1012,774,1017,773,1068,f,767,1077,766,1081,j,715,1081,704,1089,702,1168,f,695,1176,695,1185,j,696,1196,f,696,1200,702,1207,704,1222,707,1227,716,1248,736,1257,j,736,1262,f,734,1268,724,1272,j,723,1346,716,1355,717,1377,677,1377,655,1397,654,1465,f,658,1472,669,1478,681,1484,684,1498,687,1502,687,1510,687,1516,681,1519,675,1521,676,1534,677,1541,675,1562,675,1568,685,1583,j,695,1590,706,1600,747,1610,746,1630,974,1630,974,1569,f,974,1562,977,1559,982,1556,983,1551,986,1539,983,1526,980,1510,992,1509,j,1015,1506,f,1013,1504,1013,1502,1035,1500,1044,1500,1055,1500,1064,1506,1072,1511,1077,1511,1083,1511,1085,1511,1082,1501,1103,1502,1113,1502,1114,1501,1115,1492,1116,1488,1116,1483,1122,1477,1127,1473,1125,1466,1121,1449,1134,1444,j,1134,1428,f,1141,1417,1140,1408,1144,1394,1144,1388,1144,1385,1138,1383,1133,1382,1133,1373,j,1134,1357,f,1134,1342,1136,1339,j,1156,1319,f,1159,1317,1166,1307,1168,1305,1178,1300,1180,1294,1188,1286,1192,1282,1198,1275,1200,1274,1201,1272,1210,1266,1224,1250,j,1223,1250,f,1220,1253,1216,1253,1213,1253,1213,1232,1204,1230,1204,1222,1204,1215,1209,1212,1214,1209,1214,1199,1223,1200,1223,1195,1224,1189,1235,1189,j,1245,1190,f,1248,1190,1253,1184,1257,1180,1264,1182,j,1263,1182,f,1277,1183,1278,1183,1289,1183,1291,1180,1298,1171,1311,1162,1313,1160,1314,1152,j,1321,1145,f,1326,1139,1326,1129,j,1333,1122,f,1334,1121,1334,1112,1344,1099,1344,1097,1345,1081,1346,1079,1351,1062,1352,1059,1352,1050,1347,1046,1338,1038,1335,1037,1330,1036,1321,1027,1319,1025,1314,1023,1312,1023,1312,1016,1312,1009,1314,991,1314,989,1322,980,j,1322,968,f,1322,964,1336,950,1339,947,1341,941,1343,941,1355,938,1362,938,1368,944,1374,951,1387,951,1403,951,1404,938,1405,916,1413,911,j,1413,908,f,1416,888,1416,844,1416,841,1414,834,1407,842,1393,843,1378,849,1372,851,1355,862,1337,861,1311,861,1296,861,1268,867,1252,869,1236,871,1210,871,f,1181,879,1167,880,c]],label:"Borgou",shortLabel:"BO",labelPosition:[91.5,123.2],labelAlignment:[t,v]},"BJ.CL":{outlines:[[i,756,1670,j,755,1735,745,1747,699,1747,658,1729,657,1719,623,1720,596,1690,575,1690,575,1700,545,1701,545,1709,515,1710,515,2089,604,2089,605,2101,625,2101,658,2121,767,2122,f,774,2121,794,2133,j,800,2136,f,803,2139,806,2140,808,2140,809,2145,810,2148,813,2149,j,831,2162,865,2128,865,2090,965,2089,963,2023,960,2016,f,953,2009,953,2006,j,954,2001,f,947,1996,947,1986,953,1977,954,1970,j,955,1950,f,953,1937,953,1934,953,1929,963,1910,963,1909,967,1882,j,974,1880,f,975,1865,973,1860,968,1850,966,1843,956,1829,955,1823,954,1818,954,1801,954,1784,957,1779,966,1767,974,1758,j,974,1630,746,1630,746,1668,c]],label:"Collines",shortLabel:"CL",labelPosition:[74.4,189.6],labelAlignment:[t,v]},"BJ.DO":{outlines:[[i,671,1098,f,670,1098,633,1099,615,1098,610,1103,605,1109,596,1109,j,582,1108,564,1110,f,561,1112,558,1117,556,1118,550,1118,544,1119,534,1127,522,1131,520,1133,j,505,1141,f,494,1148,490,1149,485,1151,476,1157,468,1162,460,1160,436,1157,433,1155,426,1150,407,1150,j,405,1301,395,1307,403,1318,405,1331,426,1338,426,1400,483,1460,496,1469,497,1481,507,1491,507,1520,515,1520,515,1710,545,1709,545,1701,575,1700,575,1690,596,1690,623,1720,657,1719,658,1729,699,1747,745,1747,755,1735,756,1670,746,1668,747,1610,706,1600,695,1590,685,1583,f,675,1568,675,1562,677,1541,676,1534,675,1521,681,1519,687,1516,687,1510,687,1502,684,1498,681,1484,669,1478,658,1472,654,1465,j,655,1397,677,1377,717,1377,716,1355,723,1346,724,1272,f,734,1268,736,1262,j,736,1257,f,716,1248,707,1227,704,1222,702,1207,696,1200,696,1196,j,695,1185,f,695,1176,702,1168,j,703,1110,f,702,1110,692,1107,j,683,1107,f,677,1105,671,1098,c]],label:"Donga",shortLabel:"DO",labelPosition:[53.9,128.8],labelAlignment:[t,v]},"BJ.ZO":{outlines:[[i,767,2122,j,658,2121,625,2101,605,2101,604,2089,515,2089,515,2100,526,2101,526,2150,536,2150,535,2160,545,2169,552,2190,565,2218,565,2232,596,2260,595,2270,606,2279,606,2288,615,2300,616,2321,645,2349,f,650,2356,660,2371,672,2391,676,2390,j,717,2388,717,2379,763,2379,763,2369,785,2369,785,2363,826,2363,827,2349,841,2359,897,2359,896,2332,886,2332,885,2279,875,2279,865,2271,855,2271,855,2241,846,2231,845,2181,834,2179,831,2163,831,2162,813,2149,f,810,2148,809,2145,808,2140,806,2140,803,2139,800,2136,j,794,2133,f,774,2121,767,2122,c]],label:"Zou",shortLabel:"ZO",labelPosition:[70.6,223.9],labelAlignment:[t,v]}}}];
g=d.length;if(r){while(g--){e=d[g];n(e.name.toLowerCase(),e,n.geo);}}else{while(g--){e=d[g];u=e.name.toLowerCase();a(s,u,1);h[s].unshift({cmd:"_call",obj:window,args:[function(w,x){if(!n.geo){p.raiseError(p.core,"12052314141","run","JavaScriptRenderer~Maps._call()",new Error("FusionCharts.HC.Maps.js is required in order to define vizualization"));
return;}n(w,x,n.geo);},[u,e],window]});}}}]);