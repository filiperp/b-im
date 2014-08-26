<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_arquivo'); ?>
		<?php echo $form->textField($model, 'id_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_arquivo'); ?>
		<?php echo $form->textField($model, 'ref_arquivo', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_arquivo'); ?>
		<?php echo $form->textField($model, 'nome_arquivo', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'caminho_arquivo'); ?>
		<?php echo $form->textField($model, 'caminho_arquivo', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'versao'); ?>
		<?php echo $form->textField($model, 'versao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'programa_id_programa'); ?>
		<?php echo $form->dropDownList($model, 'programa_id_programa', GxHtml::listDataEx(Programa::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
