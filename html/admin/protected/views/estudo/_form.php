

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
                        'id' => 'estudo-form',
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

                      //  array('id_estudo', 45, 'textField'),
                        array('ref_estudo', 45, 'textField'),
                        array('nome_estudo', 100, 'textArea'),
                        array('caminho_estudo', 255, 'textField'),
                        array('ativo_estudo', 1, 'checkBox'),


                    );

                    foreach ($viewElements as $key => $value) {
                        $isDisabled= '';
                        if (substr($value[0],0,3)=='ref' && $isCreate==false){
                            $isDisabled='disabled';
                        }
                        // , 'disabled'=>"$isDisabled"

                        ?>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, $value[0], array('class' => '  col-md-4 control-label')); ?>
                            <div class="col-md-8">
                                <?php echo $form->$value[2]($model, $value[0], array('maxlength' => $value[1], 'class' => 'form-control', 'disabled'=>"$isDisabled" )); ?>
                                <?php echo $form->error($model, $value[0], array('errorCssClass' => ' has-error')); ?>
                            </div>
                        </div>


                    <?php
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

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'cliente_id_cliente', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->dropDownList($model, 'cliente_id_cliente', GxHtml::listDataEx(Cliente::model()->findAllAttributes(null, true))); ?>
                            <?php echo $form->error($model,'cliente_id_cliente'); ?>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="portlet box  green-haze">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-file-o fa-create"></i> <?php echo GxHtml::encode($model->getRelationLabel('tags')); ?>
                                    </div>
                                    <div class="tools">

                                        <a href="javascript:;" class="collapse">
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body ">
                                    <?php
                                    $Criteria = new CDbCriteria();
                                    $Criteria->addCondition('tipo_tag = "arquivo"  ');
                                    //Yii::import('application.controllers.FileObjectController');
                                    $classCheckBox = 'tag_item_'.GUID::getGUID();
                                    echo $form->checkBoxList($model, 'tags',
                                        GxHtml::encodeEx(GxHtml::listDataEx(Tag::model()->findAll($Criteria)), false, true),array('class'=>$classCheckBox));



                                    ?>
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
$cs->registerScriptFile(Yii::app()->request->baseUrl . '/metronic/band/js/ArquivoTagBehavior.js', CClientScript::POS_END);



$cs->registerScript('startScriptFormEStudo', "FileChooserBehavior.onChange('Estudo_image','Estudo_caminho_estudo' )", CClientScript::POS_READY);
$cs->registerScript('startScriptFormEStudoTAg', "ArquivoTagBehavior.checkJustOne('".$classCheckBox. "')", CClientScript::POS_READY);

?>



