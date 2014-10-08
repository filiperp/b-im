<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */

$this->breadcrumbs=array(
	'Arquivos'=>array('index'),
	$model->id_arquivo,
);

$this->menu=array(
	array('label'=>'List Arquivo', 'url'=>array('index')),
	array('label'=>'Create Arquivo', 'url'=>array('create')),
	array('label'=>'Update Arquivo', 'url'=>array('update', 'id'=>$model->id_arquivo)),
	array('label'=>'Delete Arquivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_arquivo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arquivo', 'url'=>array('admin')),
);
?>

<h1>View Arquivo #<?php echo $model->id_arquivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_arquivo',
		'ref_arquivo',
		'nome_arquivo',
		'caminho_arquivo',
		'ativo_arquivo',
		'fk_id_veiculo',
		'fk_id_praca',
		'fk_id_programa',
		'usuario',
		'data',
	),
)); ?>
