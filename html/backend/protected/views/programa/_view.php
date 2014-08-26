<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_programa')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_programa), array('view', 'id' => $data->id_programa)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_programa')); ?>:
	<?php echo GxHtml::encode($data->ref_programa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_programa')); ?>:
	<?php echo GxHtml::encode($data->nome_programa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_programa')); ?>:
	<?php echo GxHtml::encode($data->descricao_programa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('imagem_programa')); ?>:
	<?php echo GxHtml::encode($data->imagem_programa); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('praca_id_praca')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->pracaIdPraca)); ?>
	<br />

</div>