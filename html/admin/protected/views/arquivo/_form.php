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
		<?php echo $form->labelEx($model,'ativo_arquivo'); ?>
		<?php echo $form->checkBox($model, 'ativo_arquivo'); ?>
		<?php echo $form->error($model,'ativo_arquivo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fk_id_veiculo'); ?>
		<?php echo $form->dropDownList($model, 'fk_id_veiculo', GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'fk_id_veiculo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fk_id_praca'); ?>
		<?php echo $form->dropDownList($model, 'fk_id_praca', GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'fk_id_praca'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'fk_id_programa'); ?>
		<?php echo $form->dropDownList($model, 'fk_id_programa', GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'fk_id_programa'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('arquivoHistoricos')); ?></label>
		<?php echo $form->checkBoxList($model, 'arquivoHistoricos', GxHtml::encodeEx(GxHtml::listDataEx(ArquivoHistorico::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('tags')); ?></label>
		<?php echo $form->checkBoxList($model, 'tags', GxHtml::encodeEx(GxHtml::listDataEx(Tag::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();

$this->renderPartial('_veiculoPracaProgramaTable', array(
    'model' => $model,
    'isCreate'=> $isCreate));
?>
</div><!-- form -->