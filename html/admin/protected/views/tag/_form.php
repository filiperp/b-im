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

		<label><?php echo GxHtml::encode($model->getRelationLabel('analises')); ?></label>
		<?php echo $form->checkBoxList($model, 'analises', GxHtml::encodeEx(GxHtml::listDataEx(Analise::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('arquivos')); ?></label>
		<?php echo $form->checkBoxList($model, 'arquivos', GxHtml::encodeEx(GxHtml::listDataEx(Arquivo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('programas')); ?></label>
		<?php echo $form->checkBoxList($model, 'programas', GxHtml::encodeEx(GxHtml::listDataEx(Programa::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->