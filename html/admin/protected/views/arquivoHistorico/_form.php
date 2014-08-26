<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'arquivo-historico-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'fk_id_arquivo'); ?>
		<?php echo $form->dropDownList($model, 'fk_id_arquivo', GxHtml::listDataEx(Arquivo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'fk_id_arquivo'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->