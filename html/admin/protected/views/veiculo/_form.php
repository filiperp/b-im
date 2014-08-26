<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'veiculo-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_veiculo'); ?>
		<?php echo $form->textField($model, 'ref_veiculo', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_veiculo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_veiculo'); ?>
		<?php echo $form->textField($model, 'nome_veiculo', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_veiculo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_veiculo'); ?>
		<?php echo $form->textField($model, 'descricao_veiculo', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_veiculo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'imagem_veiculo'); ?>
		<?php echo $form->textField($model, 'imagem_veiculo', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'imagem_veiculo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo_veiculo'); ?>
		<?php echo $form->checkBox($model, 'ativo_veiculo'); ?>
		<?php echo $form->error($model,'ativo_veiculo'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('analises')); ?></label>
		<?php echo $form->checkBoxList($model, 'analises', GxHtml::encodeEx(GxHtml::listDataEx(Analise::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('pracas')); ?></label>
		<?php echo $form->checkBoxList($model, 'pracas', GxHtml::encodeEx(GxHtml::listDataEx(Praca::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->