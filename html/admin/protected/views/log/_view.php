<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_log')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_log), array('view', 'id' => $data->id_log)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('usuario_log')); ?>:
	<?php echo GxHtml::encode($data->usuario_log); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ip_log')); ?>:
	<?php echo GxHtml::encode($data->ip_log); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('acao_log')); ?>:
	<?php echo GxHtml::encode($data->acao_log); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ref_log')); ?>:
	<?php echo GxHtml::encode($data->ref_log); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_log')); ?>:
	<?php echo GxHtml::encode($data->data_log); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_log')); ?>:
	<?php echo GxHtml::encode($data->descricao_log); ?>
	<br />

</div>