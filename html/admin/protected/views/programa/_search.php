<div class="row ">
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

                <div class="form-group">
                    <?php echo $form->label($model, 'id_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-8">
                        <?php echo $form->textField($model, 'id_programa', array('class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'ref_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-8">
                        <?php echo $form->textField($model, 'ref_programa', array('maxlength' => 45,'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'nome_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-8">
                        <?php echo $form->textField($model, 'nome_programa', array('maxlength' => 100,'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'descricao_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-8">
                        <?php echo $form->textField($model, 'descricao_programa', array('maxlength' => 512,'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'imagem_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-8">
                        <?php echo $form->textField($model, 'imagem_programa', array('maxlength' => 255,'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'ativo_programa', array('class' => '  col-md-4 control-label')); ?>
                    <div class="col-md-2">
                        <?php echo $form->dropDownList($model, 'ativo_programa', array('0' => Yii::t('app', 'No'), '1' => Yii::t('app', 'Yes')), array('prompt' => Yii::t('app', 'All'),'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <?php echo GxHtml::submitButton(Yii::t('app', 'Search'), array('class' => ' btn blue pull-right')); ?>
                    </div>
                </div>

                <?php $this->endWidget(); ?>
                </form>


            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>