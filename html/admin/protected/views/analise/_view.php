<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_analise')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_analise), array('view', 'id' => $data->id_analise)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_analise')); ?>:
	<?php echo GxHtml::encode($data->ref_analise); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_analise')); ?>:
	<?php echo GxHtml::encode($data->nome_analise); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_analise')); ?>:
	<?php echo GxHtml::encode($data->descricao_analise); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('imagem_analise')); ?>:
	<?php echo GxHtml::encode($data->imagem_analise); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo_analise')); ?>:
	<?php echo GxHtml::encode($data->ativo_analise); ?>
	<br />

</div>