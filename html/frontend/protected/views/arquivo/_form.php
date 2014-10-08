<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arquivo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_arquivo'); ?>
		<?php echo $form->textField($model,'ref_arquivo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ref_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_arquivo'); ?>
		<?php echo $form->textField($model,'nome_arquivo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caminho_arquivo'); ?>
		<?php echo $form->textField($model,'caminho_arquivo',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'caminho_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo_arquivo'); ?>
		<?php echo $form->textField($model,'ativo_arquivo'); ?>
		<?php echo $form->error($model,'ativo_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_id_veiculo'); ?>
		<?php echo $form->textField($model,'fk_id_veiculo'); ?>
		<?php echo $form->error($model,'fk_id_veiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_id_praca'); ?>
		<?php echo $form->textField($model,'fk_id_praca'); ?>
		<?php echo $form->error($model,'fk_id_praca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_id_programa'); ?>
		<?php echo $form->textField($model,'fk_id_programa'); ?>
		<?php echo $form->error($model,'fk_id_programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->