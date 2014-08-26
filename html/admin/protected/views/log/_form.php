<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'log-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'usuario_log'); ?>
		<?php echo $form->textField($model, 'usuario_log', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'usuario_log'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ip_log'); ?>
		<?php echo $form->textField($model, 'ip_log', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ip_log'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'acao_log'); ?>
		<?php echo $form->textField($model, 'acao_log', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'acao_log'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ref_log'); ?>
		<?php echo $form->textField($model, 'ref_log', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_log'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_log'); ?>
		<?php echo $form->textField($model, 'data_log'); ?>
		<?php echo $form->error($model,'data_log'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_log'); ?>
		<?php echo $form->textField($model, 'descricao_log', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_log'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->