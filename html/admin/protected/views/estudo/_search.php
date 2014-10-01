<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_estudo'); ?>
		<?php echo $form->textField($model, 'id_estudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_estudo'); ?>
		<?php echo $form->textField($model, 'ref_estudo', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_estudo'); ?>
		<?php echo $form->textField($model, 'nome_estudo', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'caminho_estudo'); ?>
		<?php echo $form->textField($model, 'caminho_estudo', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo_estudo'); ?>
		<?php echo $form->dropDownList($model, 'ativo_estudo', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'cliente_id_cliente'); ?>
		<?php echo $form->dropDownList($model, 'cliente_id_cliente', GxHtml::listDataEx(Cliente::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
