<?php

//$this->breadcrumbs = array(
//    $model->label(2) => array('index'),
//    GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
//    Yii::t('app', 'Update'),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index'),'linkOptions'=> array('class'=>'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create'),'linkOptions'=> array('class'=>'btn blue  forceWhite  green ')),
    array('label' => Yii::t('app', 'View') . ' ' . $model->label(), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))  ,'linkOptions'=> array('class'=>'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin'),'linkOptions'=> array('class'=>'btn blue  forceWhite  blue ')),
);
?>

<h1><?php echo Yii::t('app', 'Update') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
    'isCreate'=>false,
));
?>