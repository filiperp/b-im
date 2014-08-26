<?php
/**
 * Created by IntelliJ IDEA.
 * User: filiperp
 * Date: 8/20/14
 * Time: 6:01 PM
 */
//<!-- BEGIN THEME STYLES -->
$themeStylesMetronic = Yii::app()->getClientScript();

$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/plugins/select2/select2.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css');




$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/css/components.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/global/css/plugins.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/layout.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/themes/default.css');
$themeStylesMetronic->registerCssFile( Yii::app()->request->baseUrl.'/metronic/assets/admin/layout/css/custom.css');

?>