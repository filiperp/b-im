<?php
//
//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	Yii::t('app', 'Create'),
//);


$this->menu = array(
    array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'),'linkOptions'=> array('class'=>'btn blue   forceWhite blue ')),
    array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'),'linkOptions'=> array('class'=>'btn blue   forceWhite blue ')),
);
?>

<h1><?php echo Yii::t('app', 'Create') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
    'isCreate'=>true,
		'buttons' => 'create'));
?>