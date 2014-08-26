<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_programa'); ?>
		<?php echo $form->textField($model, 'id_programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_programa'); ?>
		<?php echo $form->textField($model, 'ref_programa', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_programa'); ?>
		<?php echo $form->textField($model, 'nome_programa', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_programa'); ?>
		<?php echo $form->textField($model, 'descricao_programa', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'imagem_programa'); ?>
		<?php echo $form->textField($model, 'imagem_programa', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'praca_id_praca'); ?>
		<?php echo $form->dropDownList($model, 'praca_id_praca', GxHtml::listDataEx(Praca::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
