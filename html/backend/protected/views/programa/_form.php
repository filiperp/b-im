<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'programa-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_programa'); ?>
		<?php echo $form->textField($model, 'ref_programa', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_programa'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_programa'); ?>
		<?php echo $form->textField($model, 'nome_programa', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_programa'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_programa'); ?>
		<?php echo $form->textField($model, 'descricao_programa', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_programa'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'imagem_programa'); ?>
		<?php echo $form->textField($model, 'imagem_programa', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'imagem_programa'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'praca_id_praca'); ?>
		<?php echo $form->dropDownList($model, 'praca_id_praca', GxHtml::listDataEx(Praca::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'praca_id_praca'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('arquivos')); ?></label>
		<?php echo $form->checkBoxList($model, 'arquivos', GxHtml::encodeEx(GxHtml::listDataEx(Arquivo::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('programaTags')); ?></label>
		<?php echo $form->checkBoxList($model, 'programaTags', GxHtml::encodeEx(GxHtml::listDataEx(ProgramaTag::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->