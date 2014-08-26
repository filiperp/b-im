<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_log'); ?>
		<?php echo $form->textField($model, 'id_log'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'usuario_log'); ?>
		<?php echo $form->textField($model, 'usuario_log', array('maxlength' => 50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ip_log'); ?>
		<?php echo $form->textField($model, 'ip_log', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'acao_log'); ?>
		<?php echo $form->textField($model, 'acao_log', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_log'); ?>
		<?php echo $form->textField($model, 'ref_log', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_log'); ?>
		<?php echo $form->textField($model, 'data_log'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_log'); ?>
		<?php echo $form->textField($model, 'descricao_log', array('maxlength' => 512)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
