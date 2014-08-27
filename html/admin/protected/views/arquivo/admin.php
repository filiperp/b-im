<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('arquivo-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'arquivo-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
    'showTableOnEmpty' => false,
	'columns' => array(
		'id_arquivo',
		'ref_arquivo',
		'nome_arquivo',
		'caminho_arquivo',
		array(
					'name' => 'ativo_arquivo',
					'value' => '($data->ativo_arquivo === 0) ? Yii::t(\'app\', \'No\') : Yii::t(\'app\', \'Yes\')',
					'filter' => array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')),
					),
		array(
				'name'=>'fk_id_veiculo',
				'value'=>'GxHtml::valueEx($data->fkIdVeiculo)',
				'filter'=>GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true)),
				),
		/*
		array(
				'name'=>'fk_id_praca',
				'value'=>'GxHtml::valueEx($data->fkIdPraca)',
				'filter'=>GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true)),
				),
		array(
				'name'=>'fk_id_programa',
				'value'=>'GxHtml::valueEx($data->fkIdPrograma)',
				'filter'=>GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true)),
				),
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>