<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_arquivo_historico'); ?>
		<?php echo $form->textField($model, 'id_arquivo_historico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fk_id_arquivo'); ?>
		<?php echo $form->dropDownList($model, 'fk_id_arquivo', GxHtml::listDataEx(Arquivo::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
