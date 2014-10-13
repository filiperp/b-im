<div class="row hidden">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-search"></i> Pesquisa Avançada
                </div>
                <div class="tools">
                    <a href="" class="expand">
                    </a>

                </div>
            </div>
            <div class="portlet-body display-hide">

                <?php $form = $this->beginWidget('GxActiveForm', array(
                    'action' => Yii::app()->createUrl($this->route),
                    'method' => 'get',
                    'htmlOptions' => array('class' => 'form-horizontal')
                )); ?>

                <?php
                $viewElements = array(

                    array('id_programa',45, 'textField'),
                    array('ref_programa',45,'textField'),
                    array('nome_programa',100,'textArea'),
                    array('descricao_programa',512,'textArea'),
                    array('imagem_programa',255,'textArea'),
                    array('ativo_programa',1,'checkBox'),


                );

                foreach ($viewElements as $key => $value) {
                    ?>
                    <div class="form-group">
                        <?php echo $form->label($model, $value[0], array('class' => '  col-md-4 control-label')); ?>
                        <div class="col-md-8">
                            <?php echo $form->$value[2]($model, $value[0], array('maxlength' =>$value[1], 'class' => 'form-control')); ?>
                            <!--                            --><?php //echo $form->error($model, $value[0], array('errorCssClass'=>' has-error')); ?>
                        </div>
                    </div>


                <?php
                }
                ?>

                <div class="form-group">
                    <div class="col-lg-12">
                        <?php echo GxHtml::submitButton(Yii::t('app', 'Search'), array('class' => ' btn blue pull-right')); ?>
                    </div>
                </div>

                <?php $this->endWidget(); ?>


            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>