<?php

//$this->breadcrumbs = array(
//	$model->label(2) => array('index'),
//	GxHtml::valueEx($model),
//);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_veiculo), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_veiculo), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

    <!--<h1>--><?php //echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?><!--</h1>-->

<?php //$this->widget('zii.widgets.CDetailView', array(
//	'data' => $model,
//	'attributes' => array(
//'id_veiculo',
//'ref_veiculo',
//'nome_veiculo',
//'descricao_veiculo',
//'imagem_veiculo',
//'ativo_veiculo:boolean',
//	),
//));
?>


    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-adjust font-green-haze"></i>
                <span class="caption-subject font-green-haze bold uppercase">Visualizar Dados</span>

            </div>
            <div class="tools">
                <?php echo GxHtml::link('<i class="icon-edit font-green-haze"></i> ',
                    array('update', 'id' => $model->id_veiculo),
                    array('class' => ' fa fa-gear font-green-haze', 'data-toggle' => "modal")); ?>

            </div>
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form class="form-horizontal" role="form">
                <div class="form-body">

                    <?php
                    $viewElements = array(
                        array('id_veiculo', 45, 'textField'),
                        array('ref_veiculo', 45, 'textField'),
                        array('nome_veiculo', 100, 'textArea'),
                        array('descricao_veiculo', 512, 'textArea'),
                        array('imagem_veiculo', 255, 'textArea'),
                        array('ativo_veiculo', 1, 'checkBox'),
                    );

                    foreach ($viewElements as $key => $value) {
                        ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3 bold">
                                        <?php echo GxHtml::encode($model->getAttributeLabel($value[0])); ?>:</label>

                                    <div class="col-md-9">
                                        <p class="form-control-static">
                                            <?php echo GxHtml::encode($model[$value[0]]); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    <?php

                    }
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    TAGS:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php
                                        foreach ($model->tags as $relatedModel) {
                                            echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('tag/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)), array('class' => "btn btn-circle btn-success"));
                                            echo ' ';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel('imagem_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::image($model['imagem_veiculo'],'Imagem Ref.', array('class'=>'view-thumb')); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel('analises')); ?>:</label>

                                <div class="col-md-9">
                                    <?php
                                  //  echo GxHtml::openTag('ul');
                                    foreach ($model->analises as $relatedModel) {
                                      //  echo GxHtml::openTag('li');
                                        $corAtico = $relatedModel->ativo_analise==0?'#ff0000 !important':"#888";
                                        echo GxHtml::link(
                                            GxHtml::openTag('div', array('style'=>"display:inline-block;border: 1px solid $corAtico; margin-bottom:15px;")).
                                                   GxHtml::openTag('div', array('style'=>"text-wrap:normal; width:200px; text-align:center; color:$corAtico")).
                                                        GxHtml::encode(GxHtml::valueEx($relatedModel)).
                                                    GxHtml::closeTag('div').
                                            GxHtml::image($relatedModel['imagem_analise'],'Imagem Ref.', array('class'=>'thumb-list100 ')).

                                           GxHtml::closeTag('div')
                                           , array('analise/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)),
                                            array('style' => "width:200px;  text-align:center;padding-right:15px;"));

                                       // echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('analise/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                                      //  echo GxHtml::closeTag('li');
                                    }
                                   // echo GxHtml::closeTag('ul');
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group ">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel('pracas')); ?>:</label>

                                <div class="col-md-9">
                                    <?php
                                    //  echo GxHtml::openTag('ul');
                                    foreach ($model->pracas as $relatedModel) {
                                        //  echo GxHtml::openTag('li');
                                        $corAtico = $relatedModel->ativo_praca==0?'#ff0000 !important':"#888";

                                        echo GxHtml::link(
                                            GxHtml::openTag('div', array('style'=>"display:inline-block;border: 1px solid $corAtico; margin-bottom:15px;")).
                                            GxHtml::openTag('div', array('style'=>"text-wrap:normal; width:200px; text-align:center; color:$corAtico")).
                                            GxHtml::encode(GxHtml::valueEx($relatedModel)).
                                            GxHtml::closeTag('div').
                                            GxHtml::image($relatedModel['imagem_praca'],'Imagem Ref.', array('class'=>'thumb-list100 ')).

                                            GxHtml::closeTag('div')
                                            , array('praca/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)),
                                            array('style' => "width:200px;  text-align:center;padding-right:15px;"));

                                        // echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('analise/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                                        //  echo GxHtml::closeTag('li');
                                    }
                                    // echo GxHtml::closeTag('ul');
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold">
                                    <?php echo GxHtml::encode($model->getAttributeLabel('estudos')); ?>:</label>

                                <div class="col-md-9">
                                    <?php
                                    echo GxHtml::openTag('ul');
                                    foreach ($model->estudos as $relatedModel) {
                                        echo GxHtml::openTag('li');
                                        echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('estudo/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
                                        echo GxHtml::closeTag('li');
                                    }
                                    echo GxHtml::closeTag('ul');
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </form>
            <!-- END FORM-->
        </div>
    </div>

