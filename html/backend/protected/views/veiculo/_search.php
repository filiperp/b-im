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
                    <?php echo $form->label($model, 'id_veiculo', array('class' => '  col-md-2 control-label')); ?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model, 'id_veiculo', array('class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'ref_veiculo', array('class' => '  col-md-2 control-label')); ?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model, 'ref_veiculo', array('maxlength' => 45, 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'nome_veiculo', array('class' => '  col-md-2 control-label')); ?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model, 'nome_veiculo', array('maxlength' => 100, 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'descricao_veiculo', array('class' => '  col-md-2 control-label')); ?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model, 'descricao_veiculo', array('maxlength' => 512, 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <?php echo $form->label($model, 'imagem_veiculo', array('class' => '  col-md-2 control-label')); ?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model, 'imagem_veiculo', array('maxlength' => 255, 'class' => 'form-control')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <?php echo GxHtml::submitButton(Yii::t('app', 'Search'), array('class' => ' btn blue')); ?>
                    </div>
                </div>

                <?php $this->endWidget(); ?>
                </form>


            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>