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
                    ));
                    ?>

                    <p class="note">
                        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                    </p>

                    <?php echo $form->errorSummary($model); ?>



                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'ref_veiculo', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'ref_veiculo', array('maxlength' => 45, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'ref_veiculo'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'nome_veiculo', array('class' => '  col-md-2 control-label')); ?>
                        <div class="col-md-4">
                            <?php echo $form->textField($model, 'nome_veiculo', array('maxlength' => 100, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'nome_veiculo'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'descricao_veiculo', array('class' => '  col-md-2 control-label')); ?>
                        <div class="col-md-4">
                            <?php echo $form->textField($model, 'descricao_veiculo', array('maxlength' => 512, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'descricao_veiculo'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'imagem_veiculo', array('class' => '  col-md-2 control-label')); ?>
                        <div class="col-md-4">
                            <?php echo $form->textField($model, 'imagem_veiculo', array('maxlength' => 255, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'imagem_veiculo'); ?>
                        </div>
                    </div>
                    <!-- row -->

<!--                    <div class="row ">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="portlet box  green-haze">-->
<!--                                <div class="portlet-title">-->
<!--                                    <div class="caption">-->
<!--                                        <i class="fa fa-file-o fa-create"></i> --><?php //echo GxHtml::encode($model->getRelationLabel('analises')); ?>
<!--                                    </div>-->
<!--                                    <div class="tools">-->
<!--                                        <a href="" class="expand"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="portlet-body display-hide">-->
<!--                                    --><?php //echo $form->checkBoxList($model, 'analises', GxHtml::encodeEx(GxHtml::listDataEx(Analise::model()->findAllAttributes(null, true)), false, true)); ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="row ">-->
<!--                        <div class="col-md-12">-->
<!--                            <div class="portlet box green-haze">-->
<!--                                <div class="portlet-title">-->
<!--                                    <div class="caption">-->
<!--                                        <i class="fa fa-file-o fa-create"></i> --><?php //echo GxHtml::encode($model->getRelationLabel('pracas')); ?>
<!--                                    </div>-->
<!--                                    <div class="tools">-->
<!--                                        <a href="" class="expand"></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="portlet-body display-hide">-->
<!--                                    --><?php //echo $form->checkBoxList($model, 'pracas', GxHtml::encodeEx(GxHtml::listDataEx(Praca::model()->findAllAttributes(null, true)), false, true)); ?>
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->



                    <div class="row ">
                        <div class="col-md-12 form-actions">
                            <?php
                            echo GxHtml::submitButton(Yii::t('app', 'Save'), array('class' => ' btn blue pull-right'));
                            $this->endWidget();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form -->

        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>