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

                    <p class="note">
                        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                    </p>

                    <?php echo $form->errorSummary($model); ?>



                    <?php
                    $viewElements = array(

                        array('id_programa', 45, 'textField'),
                        array('ref_programa', 45, 'textField'),
                        array('nome_programa', 100, 'textArea'),
                        array('descricao_programa', 512, 'textArea'),
                        array('imagem_programa', 255, 'textArea'),
                        array('ativo_programa', 1, 'checkBox'),


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
