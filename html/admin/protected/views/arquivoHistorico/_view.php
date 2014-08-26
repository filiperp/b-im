<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_arquivo_historico')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_arquivo_historico), array('view', 'id' => $data->id_arquivo_historico)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('fk_id_arquivo')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->fkIdArquivo)); ?>
	<br />

</div>