<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_arquivo')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_arquivo), array('view', 'id' => $data->id_arquivo)); ?>
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
	<?php echo GxHtml::encode($data->getAttributeLabel('versao')); ?>:
	<?php echo GxHtml::encode($data->versao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('programa_id_programa')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->programaIdPrograma)); ?>
	<br />

</div>