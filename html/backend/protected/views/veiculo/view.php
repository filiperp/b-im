<?php

$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    GxHtml::valueEx($model),
);

$this->menu = array(
    array('label' => Yii::t('app', 'List') . ' ' . $model->label(2), 'url' => array('index'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Create') . ' ' . $model->label(), 'url' => array('create'), 'linkOptions' => array('class' => 'btn blue   forceWhite blue ')),
    array('label' => Yii::t('app', 'Update') . ' ' . $model->label(), 'url' => array('update', 'id' => $model->id_veiculo), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
    array('label' => Yii::t('app', 'Delete') . ' ' . $model->label(), 'url' => '#', 'linkOptions' => array('class' => 'btn blue  forceWhite  red ', 'submit' => array('delete', 'id' => $model->id_veiculo), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url' => array('admin'), 'linkOptions' => array('class' => 'btn blue  forceWhite  blue ')),
);
?>

    <h1></h1>

<?php //$this->widget('zii.widgets.CDetailView', array(
//    'data' => $model,
//    'attributes' => array(
//        'id_veiculo',
//        'ref_veiculo',
//        'nome_veiculo',
//        'descricao_veiculo',
//        'imagem_veiculo',
//    ),
//    'htmlOptions' => array(
//        'id' => 'GridView',
//        'class' => 'table table-striped table-bordered table-hover'
//    )
//)); ?>


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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold"><?php echo GxHtml::encode($model->getAttributeLabel('id_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model->id_veiculo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold"><?php echo GxHtml::encode($model->getAttributeLabel('ref_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model->ref_veiculo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold"><?php echo GxHtml::encode($model->getAttributeLabel('nome_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model->nome_veiculo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold"><?php echo GxHtml::encode($model->getAttributeLabel('descricao_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model->descricao_veiculo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-md-3 bold"><?php echo GxHtml::encode($model->getAttributeLabel('imagem_veiculo')); ?>:</label>

                                <div class="col-md-9">
                                    <p class="form-control-static">
                                        <?php echo GxHtml::encode($model->imagem_veiculo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </form>
            <!-- END FORM-->
        </div>
    </div>




    <h2><?php echo GxHtml::encode($model->getRelationLabel('analises')); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->analises as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('analise/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel, 'nome_analise')), array('analise/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?><h2><?php echo GxHtml::encode($model->getRelationLabel('pracas')); ?></h2>
<?php
echo GxHtml::openTag('ul');
foreach ($model->pracas as $relatedModel) {
    echo GxHtml::openTag('li');
    echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('praca/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
    echo GxHtml::closeTag('li');
}
echo GxHtml::closeTag('ul');
?>