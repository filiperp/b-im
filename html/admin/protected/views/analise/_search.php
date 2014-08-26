<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_analise'); ?>
		<?php echo $form->textField($model, 'id_analise'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_analise'); ?>
		<?php echo $form->textField($model, 'ref_analise', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_analise'); ?>
		<?php echo $form->textField($model, 'nome_analise', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_analise'); ?>
		<?php echo $form->textField($model, 'descricao_analise', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'imagem_analise'); ?>
		<?php echo $form->textField($model, 'imagem_analise', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo_analise'); ?>
		<?php echo $form->dropDownList($model, 'ativo_analise', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
