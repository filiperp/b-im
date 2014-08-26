<?php

$this->breadcrumbs = array(
	Veiculo::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Veiculo::label(), 'url' => array('create'),'linkOptions'=> array('class'=>'btn blue  forceWhite  green ')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Veiculo::label(2), 'url' => array('admin'),'linkOptions'=> array('class'=>'btn blue  forceWhite  blue ')),
);
?>

<h2 class="page-title">
        <?php echo GxHtml::encode(Veiculo::label(2)); ?>
</h2>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 