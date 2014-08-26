<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'praca-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_praca'); ?>
		<?php echo $form->textField($model, 'ref_praca', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_praca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_praca'); ?>
		<?php echo $form->textField($model, 'nome_praca', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_praca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_praca'); ?>
		<?php echo $form->textField($model, 'descricao_praca', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_praca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'veiculo_id_veiculo'); ?>
		<?php echo $form->dropDownList($model, 'veiculo_id_veiculo', GxHtml::listDataEx(Veiculo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'veiculo_id_veiculo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('programas')); ?></label>
		<?php echo $form->checkBoxList($model, 'programas', GxHtml::encodeEx(GxHtml::listDataEx(Programa::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->