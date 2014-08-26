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
		<?php echo $form->labelEx($model,'veiculo_id_veiculo'); ?>
		<?php echo $form->dropDownList($model, 'veiculo_id_veiculo', GxHtml::listDataEx(Veiculo::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'veiculo_id_veiculo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('analiseTags')); ?></label>
		<?php echo $form->checkBoxList($model, 'analiseTags', GxHtml::encodeEx(GxHtml::listDataEx(AnaliseTag::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->