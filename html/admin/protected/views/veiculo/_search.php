<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id_veiculo'); ?>
		<?php echo $form->textField($model, 'id_veiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ref_veiculo'); ?>
		<?php echo $form->textField($model, 'ref_veiculo', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'nome_veiculo'); ?>
		<?php echo $form->textField($model, 'nome_veiculo', array('maxlength' => 100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao_veiculo'); ?>
		<?php echo $form->textField($model, 'descricao_veiculo', array('maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'imagem_veiculo'); ?>
		<?php echo $form->textField($model, 'imagem_veiculo', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'ativo_veiculo'); ?>
		<?php echo $form->dropDownList($model, 'ativo_veiculo', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
