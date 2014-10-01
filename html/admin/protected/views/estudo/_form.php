<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'estudo-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_estudo'); ?>
		<?php echo $form->textField($model, 'ref_estudo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_estudo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_estudo'); ?>
		<?php echo $form->textField($model, 'nome_estudo', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_estudo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'caminho_estudo'); ?>
		<?php echo $form->textField($model, 'caminho_estudo', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'caminho_estudo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo_estudo'); ?>
		<?php echo $form->checkBox($model, 'ativo_estudo'); ?>
		<?php echo $form->error($model,'ativo_estudo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cliente_id_cliente'); ?>
		<?php echo $form->dropDownList($model, 'cliente_id_cliente', GxHtml::listDataEx(Cliente::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'cliente_id_cliente'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->