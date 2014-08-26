<?php

$this->breadcrumbs = array(
	Arquivo::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Arquivo::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Arquivo::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Arquivo::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 