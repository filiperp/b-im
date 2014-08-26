<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_veiculo')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_veiculo), array('view', 'id' => $data->id_veiculo)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_veiculo')); ?>:
	<?php echo GxHtml::encode($data->ref_veiculo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_veiculo')); ?>:
	<?php echo GxHtml::encode($data->nome_veiculo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_veiculo')); ?>:
	<?php echo GxHtml::encode($data->descricao_veiculo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('imagem_veiculo')); ?>:
	<?php echo GxHtml::encode($data->imagem_veiculo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo_veiculo')); ?>:
	<?php echo GxHtml::encode($data->ativo_veiculo); ?>
	<br />

</div>