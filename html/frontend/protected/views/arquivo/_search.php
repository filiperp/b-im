<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_arquivo'); ?>
		<?php echo $form->textField($model,'id_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref_arquivo'); ?>
		<?php echo $form->textField($model,'ref_arquivo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_arquivo'); ?>
		<?php echo $form->textField($model,'nome_arquivo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caminho_arquivo'); ?>
		<?php echo $form->textField($model,'caminho_arquivo',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ativo_arquivo'); ?>
		<?php echo $form->textField($model,'ativo_arquivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_id_veiculo'); ?>
		<?php echo $form->textField($model,'fk_id_veiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_id_praca'); ?>
		<?php echo $form->textField($model,'fk_id_praca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_id_programa'); ?>
		<?php echo $form->textField($model,'fk_id_programa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->