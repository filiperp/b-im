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
                        'id' => 'programa-form',
                        'enableAjaxValidation' => true,
                    ));
                    CHtml::$errorCss = 'font-red-intense';
                    ?>

                    <!--                    <p class="note">-->
                    <!--                        --><?php //echo Yii::t('app', 'Fields with'); ?><!-- <span class="required">*</span> --><?php //echo Yii::t('app', 'are required'); ?><!--.-->
                    <!--                    </p>-->

                    <!--                    --><?php //echo $form->errorSummary($model); ?>

                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'ref_programa', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'ref_programa', array('maxlength' => 45, 'class' => 'form-control')); ?>
                            <!--                            --><?php //echo $form->error($model, 'ref_programa', array('errorCssClass'=>' has-error')); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'nome_programa', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'nome_programa', array('maxlength' => 100, 'class' => 'form-control')); ?>
                            <!--                            --><?php //echo $form->error($model, 'nome_programa', array('errorCssClass'=>' has-error')); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'descricao_programa', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textArea($model, 'descricao_programa', array('maxlength' => 512, 'class' => 'form-control')); ?>
                            <!--                            --><?php //echo $form->error($model, 'descricao_programa', array('errorCssClass'=>' has-error')); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'imagem_programa', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'imagem_programa', array('maxlength' => 255, 'class' => 'form-control')); ?>
                            <!--                            --><?php //echo $form->error($model, 'imagem_programa'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'ativo_programa', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->checkBox($model, 'ativo_programa', array('class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'ativo_programa'); ?>

                        </div>
                    </div>
                    <!-- row -->

                    <!--                    <label>--><?php //echo GxHtml::encode($model->getRelationLabel('tags')); ?><!--</label>-->
                    <!--                    --><?php //echo $form->checkBoxList($model, 'tags', GxHtml::encodeEx(GxHtml::listDataEx(Tag::model()->findAllAttributes(null, true)), false, true)); ?>


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
                                    $Criteria->addCondition('tipo_tag = "programa"');

                                    echo $form->checkBoxList($model, 'tags',
                                        GxHtml::encodeEx(GxHtml::listDataEx(Tag::model()->findAll($Criteria)), false, true)); ?>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!--                    <label>--><?php //echo GxHtml::encode($model->getRelationLabel('veiculoPracaProgramas')); ?><!--</label>-->
                    <!--                    --><?php //echo $form->checkBoxList($model, 'veiculoPracaProgramas', GxHtml::encodeEx(GxHtml::listDataEx(VeiculoPracaPrograma::model()->findAllAttributes(null, true)), false, true)); ?>
                    <!--                    <hr>-->
                    <div class="row ">
                        <div class="col-md-12 form-actions">
                            <?php

                            if (!$isCreate) {
                                $this->renderPartial('_veiculoPracaProgramaTable', array(
                                    'model' => $model));
                            }
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
