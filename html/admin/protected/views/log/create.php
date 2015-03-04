<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	Yii::t('app', 'Create'),
//);



$this->menu = array(
    array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'),'linkOptions'=> array('class'=>'btn blue   forceWhite blue ')),
    array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'),'linkOptions'=> array('class'=>'btn blue   forceWhite blue ')),
);
?>

<!--<h1>--><?php //echo Yii::t('app', 'Pivot') . ' ' . GxHtml::encode($model->label()); ?><!--</h1>-->





<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-adjust font-green-haze"></i>
            <span class="caption-subject font-green-haze bold uppercase">Pivot</span>

        </div>
        <div class="tools">


        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php
        require 'pivot.php';

        ?>
        <!-- END FORM-->
    </div>
</div>

