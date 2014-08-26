<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_tag'); ?>
		<?php echo $form->textField($model, 'id_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_tag'); ?>
		<?php echo $form->textField($model, 'ref_tag', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_tag'); ?>
		<?php echo $form->textField($model, 'nome_tag', array('maxlength' => 45)); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
