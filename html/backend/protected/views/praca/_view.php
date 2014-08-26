<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_praca')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_praca), array('view', 'id' => $data->id_praca)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_praca')); ?>:
	<?php echo GxHtml::encode($data->ref_praca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_praca')); ?>:
	<?php echo GxHtml::encode($data->nome_praca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_praca')); ?>:
	<?php echo GxHtml::encode($data->descricao_praca); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('veiculo_id_veiculo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->veiculoIdVeiculo)); ?>
	<br />

</div>