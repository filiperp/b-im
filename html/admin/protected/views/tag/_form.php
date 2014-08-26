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
                        'id' => 'tag-form',
                        'enableAjaxValidation' => false,
                    ));
                    ?>

                    <p class="note">
                        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                    </p>

                    <?php echo $form->errorSummary($model); ?>


                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'ref_tag', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'ref_tag', array('maxlength' => 45, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'ref_tag'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'nome_tag', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->textField($model, 'nome_tag', array('maxlength' => 45, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'nome_tag'); ?>
                        </div>
                        <!-- row -->
                    </div>

                    <!-- row -->
                    <div class="form-group">
                        <?php echo $form->labelEx($model, 'tipo_tag', array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->dropDownList($model, 'tipo_tag', array('arquivo' => 'arquivo', 'programa' => 'programa', 'analise' => 'analise'), array('maxlength' => 45, 'class' => 'form-control')); ?>
                            <?php echo $form->error($model, 'tipo_tag'); ?>
                        </div>
                    </div>
                    <!-- row -->
                    <hr>

<!--                    <label>--><?php //echo GxHtml::encode($model->getRelationLabel('analises')); ?><!--</label>-->
<!--                    --><?php //echo $form->checkBoxList($model, 'analises', GxHtml::encodeEx(GxHtml::listDataEx(Analise::model()->findAllAttributes(null, true)), false, true)); ?>
<!---->
<!--                    <label>--><?php //echo GxHtml::encode($model->getRelationLabel('arquivos')); ?><!--</label>-->
<!--                    --><?php //echo $form->checkBoxList($model, 'arquivos', GxHtml::encodeEx(GxHtml::listDataEx(Arquivo::model()->findAllAttributes(null, true)), false, true)); ?>
<!---->
<!--                    <label>--><?php //echo GxHtml::encode($model->getRelationLabel('programas')); ?><!--</label>-->
<!--                    --><?php //echo $form->checkBoxList($model, 'programas', GxHtml::encodeEx(GxHtml::listDataEx(Programa::model()->findAllAttributes(null, true)), false, true)); ?>
<!--                   -->

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
