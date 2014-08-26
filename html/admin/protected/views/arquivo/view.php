<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_arquivo)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_arquivo), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_arquivo',
'ref_arquivo',
'nome_arquivo',
'caminho_arquivo',
'ativo_arquivo:boolean',
array(
			'name' => 'fkIdVeiculo',
			'type' => 'raw',
			'value' => $model->fkIdVeiculo !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdVeiculo)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdVeiculo, true))) : null,
			),
array(
			'name' => 'fkIdPraca',
			'type' => 'raw',
			'value' => $model->fkIdPraca !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdPraca)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdPraca, true))) : null,
			),
array(
			'name' => 'fkIdPrograma',
			'type' => 'raw',
			'value' => $model->fkIdPrograma !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->fkIdPrograma)), array('veiculoPracaPrograma/view', 'id' => GxActiveRecord::extractPkValue($model->fkIdPrograma, true))) : null,
			),
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('arquivoHistoricos')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->arquivoHistoricos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('arquivoHistorico/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('tags')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tags as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tag/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');


?>