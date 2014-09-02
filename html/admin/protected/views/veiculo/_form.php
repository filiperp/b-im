
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
                        'id' => 'veiculo-form',
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

                        //array('id_analise', 45, 'textField'),
                       // array('id_veiculo', 45, 'textField'),
                        array('ref_veiculo', 45, 'textField'),
                        array('nome_veiculo', 100, 'textArea'),
                        array('descricao_veiculo', 512, 'textArea'),
                        array('imagem_veiculo', 255, 'hiddenField'),
                        array('ativo_veiculo', 1, 'checkBox'),


                    );

                    foreach ($viewElements as $key => $value) {


                        if ($value[2] != 'hiddenField') {
                            ?>
                            <div class="form-group">
                                <?php echo $form->labelEx($model, $value[0], array('class' => '  col-md-4 control-label')); ?>
                                <div class="col-md-8">
                                    <?php echo $form->$value[2]($model, $value[0], array('maxlength' => $value[1], 'class' => 'form-control')); ?>
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
                        <div class="col-md-12">
                            <div class="portlet box  green-haze">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-file-o fa-create"></i> <?php echo GxHtml::encode($model->getRelationLabel('analises')); ?>
                                    </div>
                                    <div class="tools">

                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body ">
                                     <?php echo $form->checkBoxList($model, 'analises', GxHtml::encodeEx(GxHtml::listDataEx(Analise::model()->findAllAttributes(null, true)), false, true)); ?>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-md-12">
                            <div class="portlet box  green-haze">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-file-o fa-create"></i> <?php echo GxHtml::encode($model->getRelationLabel('pracas')); ?>
                                    </div>
                                    <div class="tools">

                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body ">
                                    <?php echo $form->checkBoxList($model, 'pracas', GxHtml::encodeEx(GxHtml::listDataEx(Praca::model()->findAllAttributes(null, true)), false, true)); ?>
                                </div>
                            </div>

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


$cs->registerScript('startScriptFormVeiculo', "FileChooserBehavior.onChange('Veiculo_image','Veiculo_imagem_veiculo' )", CClientScript::POS_READY);
?>