<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tag-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_tag'); ?>
		<?php echo $form->textField($model, 'ref_tag', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_tag'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_tag'); ?>
		<?php echo $form->textField($model, 'nome_tag', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nome_tag'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('analiseTags')); ?></label>
		<?php echo $form->checkBoxList($model, 'analiseTags', GxHtml::encodeEx(GxHtml::listDataEx(AnaliseTag::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('programaTags')); ?></label>
		<?php echo $form->checkBoxList($model, 'programaTags', GxHtml::encodeEx(GxHtml::listDataEx(ProgramaTag::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->