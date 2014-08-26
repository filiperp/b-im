<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_praca'); ?>
		<?php echo $form->textField($model, 'id_praca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_praca'); ?>
		<?php echo $form->textField($model, 'ref_praca', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_praca'); ?>
		<?php echo $form->textField($model, 'nome_praca', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_praca'); ?>
		<?php echo $form->textField($model, 'descricao_praca', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo_praca'); ?>
		<?php echo $form->dropDownList($model, 'ativo_praca', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
