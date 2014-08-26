<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_noticia')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_noticia), array('view', 'id' => $data->id_noticia)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('ref_noticia')); ?>:
	<?php echo GxHtml::encode($data->ref_noticia); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nome_noticia')); ?>:
	<?php echo GxHtml::encode($data->nome_noticia); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descricao_noticia')); ?>:
	<?php echo GxHtml::encode($data->descricao_noticia); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('link_noticia')); ?>:
	<?php echo GxHtml::encode($data->link_noticia); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('ativo_noticia')); ?>:
	<?php echo GxHtml::encode($data->ativo_noticia); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('imagem_noticia')); ?>:
	<?php echo GxHtml::encode($data->imagem_noticia); ?>
	<br />

</div>