<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'arquivo-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_arquivo'); ?>
		<?php echo $form->textField($model, 'ref_arquivo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_arquivo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_arquivo'); ?>
		<?php echo $form->textField($model, 'nome_arquivo', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_arquivo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'caminho_arquivo'); ?>
		<?php echo $form->textField($model, 'caminho_arquivo', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'caminho_arquivo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'versao'); ?>
		<?php echo $form->textField($model, 'versao'); ?>
		<?php echo $form->error($model,'versao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'programa_id_programa'); ?>
		<?php echo $form->dropDownList($model, 'programa_id_programa', GxHtml::listDataEx(Programa::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'programa_id_programa'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->