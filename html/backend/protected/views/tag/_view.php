<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_tag')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_tag), array('view', 'id' => $data->id_tag)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_tag')); ?>:
	<?php echo GxHtml::encode($data->ref_tag); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_tag')); ?>:
	<?php echo GxHtml::encode($data->nome_tag); ?>
	<br />

</div>