
<div class="row ">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-file-o fa-create"></i> Cadastro
                </div>

            </div>
            <div class="portlet-body">
                <div class="form-horizontal">

                    <?php $form = $this->beginWidget('GxActiveForm', array(
    'id' => 'log-form',
    'enableAjaxValidation' => true,
));
                    CHtml::$errorCss = 'font-red-intense';
                    ?>

<!--	<p class="note">-->
<!--		--><?php //echo Yii::t('app', 'Fields with'); ?><!-- <span class="required">*</span> --><?php //echo Yii::t('app', 'are required'); ?><!--.-->
<!--	</p>-->

<?php echo $form->errorSummary($model); ?>




<?php
$viewElements = array(

    array('usuario_log', 50, 'textField'),
    array('ip_log', 45, 'textField'),
    array('acao_log', 45, 'textField'),
    array('ref_log', 45, 'textField'),
    array('data_log', 45, 'textField'),
    array('descricao_log', 512, 'textArea'),



);

foreach ($viewElements as $key => $value) {
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, $value[0], array('class' => '  col-md-4 control-label')); ?>
        <div class="col-md-8">
            <?php echo $form->$value[2]($model, $value[0], array('maxlength' => $value[1], 'class' => 'form-control')); ?>
            <?php echo $form->error($model, $value[0], array('errorCssClass' => ' has-error')); ?>
        </div>
    </div>


<?php
}
?>





<!-- row -->
<div class="row ">
    <div class="col-md-12 ">
        <?php
        echo GxHtml::submitButton(Yii::t('app', 'Save'), array('id' => 'btnSubmmitForm', 'class' => ' btn blue pull-right'));
        $this->endWidget();
        ?>
    </div>
</div>
</div>
<!-- form -->
</div>
</div>
<!-- form -->

</div>
<!-- END SAMPLE FORM PORTLET-->
</div>
