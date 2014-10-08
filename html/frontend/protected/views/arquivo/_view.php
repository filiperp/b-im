<?php
/* @var $this ArquivoController */
/* @var $data Arquivo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_arquivo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_arquivo), array('view', 'id'=>$data->id_arquivo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->ref_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->nome_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caminho_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->caminho_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ativo_arquivo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo_arquivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_id_veiculo')); ?>:</b>
	<?php echo CHtml::encode($data->fk_id_veiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_id_praca')); ?>:</b>
	<?php echo CHtml::encode($data->fk_id_praca); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_id_programa')); ?>:</b>
	<?php echo CHtml::encode($data->fk_id_programa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	*/ ?>

</div>