<?php
$cs = Yii::app()->getClientScript();


$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/select2/select2.min.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/media/js/jquery.dataTables.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/TableAdmin.js', CClientScript::POS_END);


$cs->registerScript('startScript', "TableAdvanced.init();", CClientScript::POS_READY);
?>