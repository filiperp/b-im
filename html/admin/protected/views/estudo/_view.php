<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_estudo')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_estudo), array('view', 'id' => $data->id_estudo)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_estudo')); ?>:
	<?php echo GxHtml::encode($data->ref_estudo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_estudo')); ?>:
	<?php echo GxHtml::encode($data->nome_estudo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('caminho_estudo')); ?>:
	<?php echo GxHtml::encode($data->caminho_estudo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo_estudo')); ?>:
	<?php echo GxHtml::encode($data->ativo_estudo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('cliente_id_cliente')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->clienteIdCliente)); ?>
	<br />

</div>