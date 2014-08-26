<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_noticia'); ?>
		<?php echo $form->textField($model, 'id_noticia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_noticia'); ?>
		<?php echo $form->textField($model, 'ref_noticia', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_noticia'); ?>
		<?php echo $form->textField($model, 'nome_noticia', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_noticia'); ?>
		<?php echo $form->textField($model, 'descricao_noticia', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'link_noticia'); ?>
		<?php echo $form->textField($model, 'link_noticia', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo_noticia'); ?>
		<?php echo $form->textField($model, 'ativo_noticia', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'imagem_noticia'); ?>
		<?php echo $form->textField($model, 'imagem_noticia', array('maxlength' => 255)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
