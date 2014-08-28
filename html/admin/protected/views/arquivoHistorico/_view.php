<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_arquivo_historico')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_arquivo_historico), array('view', 'id' => $data->id_arquivo_historico)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('fk_id_arquivo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->fkIdArquivo)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ref_arquivo')); ?>:
	<?php echo GxHtml::encode($data->ref_arquivo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_arquivo')); ?>:
	<?php echo GxHtml::encode($data->nome_arquivo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('caminho_arquivo')); ?>:
	<?php echo GxHtml::encode($data->caminho_arquivo); ?>
	<br />

</div>