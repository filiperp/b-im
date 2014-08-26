<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'noticia-form',
	'enableAjaxValidation' => true,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'ref_noticia'); ?>
		<?php echo $form->textField($model, 'ref_noticia', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ref_noticia'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nome_noticia'); ?>
		<?php echo $form->textField($model, 'nome_noticia', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nome_noticia'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descricao_noticia'); ?>
		<?php echo $form->textField($model, 'descricao_noticia', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'descricao_noticia'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'link_noticia'); ?>
		<?php echo $form->textField($model, 'link_noticia', array('maxlength' => 512)); ?>
		<?php echo $form->error($model,'link_noticia'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'ativo_noticia'); ?>
		<?php echo $form->textField($model, 'ativo_noticia', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'ativo_noticia'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'imagem_noticia'); ?>
		<?php echo $form->textField($model, 'imagem_noticia', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'imagem_noticia'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->