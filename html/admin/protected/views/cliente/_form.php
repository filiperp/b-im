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
                        'id' => 'cliente-form',
                        'enableAjaxValidation' => true,
                        'htmlOptions' => array('enctype' => 'multipart/form-data'),
                    ));
                    CHtml::$errorCss = 'font-red-intense';
                    ?>

                    <p class="note">
                        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                    </p>

                    <?php echo $form->errorSummary($model); ?>





                    <?php
                    $viewElements = array(

                        //   array('id_cliente', 45, 'textField'),
                        array('ref_cliente', 45, 'textField'),
                        array('nome_cliente', 100, 'textArea'),

                        array('imagem_cliente', 255, 'hiddenField'),


                    );

                    foreach ($viewElements as $key => $value) {
                        $isDisabled= '';
                        if (substr($value[0],0,3)=='ref' && $isCreate==false){
                            $isDisabled='disabled';
                        }
                        // , 'disabled'=>"$isDisabled"

                        if ($value[2] != 'hiddenField') {
                            ?>
                            <div class="form-group">
                                <?php echo $form->labelEx($model, $value[0], array('class' => '  col-md-4 control-label')); ?>
                                <div class="col-md-8">
                                    <?php echo $form->$value[2]($model, $value[0], array('maxlength' => $value[1], 'class' => 'form-control', 'disabled'=>"$isDisabled")); ?>
                                    <?php echo $form->error($model, $value[0], array('errorCssClass' => ' has-error')); ?>
                                </div>
                            </div>


                        <?php
                        } else {
                            echo $form->$value[2]($model, $value[0], array('maxlength' => $value[1], 'class' => 'form-control'));
                        }
                    }
                    ?>
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'image', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php

                            echo $form->fileField($model, 'image');
                            ?>
                        </div>
                    </div>

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
<?php
$cs = Yii::app()->getClientScript();

$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/FileChooserBehavior.js', CClientScript::POS_END);


$cs->registerScript('startScriptFormCliente', "FileChooserBehavior.onChange('Cliente_image','Cliente_imagem_cliente' )", CClientScript::POS_READY);
?>