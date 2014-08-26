<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'analise-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_analise'); ?>
		<?php echo $form->textField($model, 'ref_analise', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_analise'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_analise'); ?>
		<?php echo $form->textField($model, 'nome_analise', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_analise'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_analise'); ?>
		<?php echo $form->textField($model, 'descricao_analise', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_analise'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'imagem_analise'); ?>
		<?php echo $form->textField($model, 'imagem_analise', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'imagem_analise'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo_analise'); ?>
		<?php echo $form->checkBox($model, 'ativo_analise'); ?>
		<?php echo $form->error($model,'ativo_analise'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('tags')); ?></label>
		<?php echo $form->checkBoxList($model, 'tags', GxHtml::encodeEx(GxHtml::listDataEx(Tag::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('veiculos')); ?></label>
		<?php echo $form->checkBoxList($model, 'veiculos', GxHtml::encodeEx(GxHtml::listDataEx(Veiculo::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->