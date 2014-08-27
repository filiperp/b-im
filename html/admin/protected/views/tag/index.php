<?php

//$this->breadcrumbs = array(
//	Tag::label(2),
//	Yii::t('app', 'Index'),
//);

$this->menu = array(
    array('label'=>Yii::t('app', 'Create') . ' ' . Tag::label(), 'url' => array('create'),'linkOptions'=> array('class'=>'btn blue  forceWhite  green ')),
    array('label'=>Yii::t('app', 'Manage') . ' ' . Tag::label(2), 'url' => array('admin'),'linkOptions'=> array('class'=>'btn blue  forceWhite  blue ')),
);
?>

<h1><?php echo GxHtml::encode(Tag::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 